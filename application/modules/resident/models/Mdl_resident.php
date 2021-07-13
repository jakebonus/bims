<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_resident extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function m_ajax_save($data) {
		if($this->db->insert('tbl_residents',$data)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function m_ajax_update($data,$r_id) {
		$this->db->where('`r_id`',$r_id);
		$sql = $this->db->update('tbl_residents',$data);
		if($sql) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function m_update($r_id,$data) {
			$this->db->where('r_id',$r_id);
		if($this->db->update('tbl_residents',$data)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function m_checkbrgycaptainpassword($brgycaptainpassword) {
		$newpass =  sha1(md5($brgycaptainpassword.'J4K3MB0NU5'));
		$sql = "SELECT
						*
						FROM `tbl_users`
						WHERE `u_password` = '$newpass' AND `u_id` = '2'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function m_get_residents($data) {
		$sql = "SELECT `r`.*,
						CONCAT(
							`r`.`r_fname`,' ',
							COALESCE(`r`.`r_mi`,''),' ',
							`r`.`r_lname`,' ',
							COALESCE(`r`.`r_next`,'')
							) AS `residentname`,
						FLOOR(DATEDIFF(CURRENT_DATE, STR_TO_DATE(`r`.`r_bdate`, '%Y-%m-%d'))/365) AS ageInYears
						FROM `tbl_residents` `r`";
		$sql .=	" WHERE `r`.`r_deleted` = 'NO'";

		if($data['ftr_civilstatus'] != 'ALL' ){
			$sql .=	" AND `r`.`r_civilstatus` = '".$data['ftr_civilstatus']."'";
		}


		if($data['ftr_name'] != "ALL"){
			if($data['ftr_nametype'] == 'F' ){
				$sql .=	" AND `r`.`r_fname` = '".$data['ftr_name']."'";
			}else if($data['ftr_nametype'] == 'L' ){
				$sql .=	" AND `r`.`r_lname` = '".$data['ftr_name']."'";
			}else{
				$sql .=	" AND (`r`.`r_lname` = '".$data['ftr_name']."' OR `r`.`r_fname` = '".$data['ftr_name']."')";
			}
		}
		

		if($data['ftr_gender'] != 'ALL' ){
			$sql .=	" AND `r`.`r_gender` = '".$data['ftr_gender']."'";
		}

		if($data['ftr_renting'] != 'ALL' ){
			$sql .=	" AND `r`.`r_rentinghouse` = '".$data['ftr_renting']."'";
		}

		if($data['ftr_purok'] != 'ALL' ){
			$sql .=	" AND `r`.`r_purok` = '".$data['ftr_purok']."'";
		}

		if($data['ftr_highiesteduc'] != 'ALL' ){
			$sql .=	" AND `r`.`r_highiesteduc` = '".$data['ftr_highiesteduc']."'";
		}

		if($data['ftr_voter'] != 'ALL' ){
			$sql .=	" AND `r`.`r_registeredvoters` = '".$data['ftr_voter']."'";
		}

		if($data['ftr_osy'] != 'ALL' ){
			$sql .=	" AND `r`.`r_osy` = '".$data['ftr_osy']."'";
		}

		if($data['ftr_employed'] != 'ALL' ){
			$sql .=	" AND `r`.`r_employed` = '".$data['ftr_employed']."'";
		}

		// if($data['ftr_monthlyincome'] != 'ALL' ){
		// 	$sql .=	" AND `r`.`r_monthlyincome` > '".$data['ftr_monthlyincome']."'";
		// }

		if($data['ftr_senior'] != 'ALL'){
			$sql .=	" AND FLOOR(DATEDIFF(CURRENT_DATE, STR_TO_DATE(`r`.`r_bdate`, '%Y-%m-%d'))/365) >= '60'";
		}

		if($data['ftr_agefrom'] != 'ALL' && $data['ftr_ageto'] != 'ALL'){
			$sql .=	" AND FLOOR(DATEDIFF(CURRENT_DATE, STR_TO_DATE(`r`.`r_bdate`, '%Y-%m-%d'))/365) BETWEEN '".$data['ftr_agefrom']."' AND '".$data['ftr_ageto']."'";
		}elseif ($data['ftr_agefrom'] != 'ALL' && $data['ftr_ageto'] == 'ALL') {
			$sql .=	" AND FLOOR(DATEDIFF(CURRENT_DATE, STR_TO_DATE(`r`.`r_bdate`, '%Y-%m-%d'))/365) >= '".$data['ftr_agefrom']."'";
		}elseif ($data['ftr_agefrom'] == 'ALL' && $data['ftr_ageto'] != 'ALL') {
			$sql .=	" AND FLOOR(DATEDIFF(CURRENT_DATE, STR_TO_DATE(`r`.`r_bdate`, '%Y-%m-%d'))/365) <= '".$data['ftr_ageto']."'";
		}

		// echo $data['ftr_agefrom'].' - '.$data['ftr_ageto'];
		// echo '<br/>';
		// echo $sql;
		// die();

		$query = $this->db->query($sql);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return FALSE;
		}
	}

	public function m_get_resident_info($r_id) {
		$sql = "SELECT
						`r`.*,
						CONCAT(`r`.`r_fname`,' ',`r`.`r_mi`,' ',`r`.`r_lname`,' ',`r`.`r_next`) AS `residentname`,
						CONCAT(IFNULL(`r`.`r_housenum`,''),' ',IFNULL(`r`.`r_street`,''),' ',IFNULL(`r`.`r_purok`,'')) AS `str`,
						FLOOR(DATEDIFF(CURRENT_DATE, STR_TO_DATE(`r`.`r_bdate`, '%Y-%m-%d'))/365) AS ageInYears
						FROM `tbl_residents` `r`
						WHERE `r`.`r_deleted` = 'NO' AND `r`.`r_id` = '$r_id'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return FALSE;
		}
	}

	public function m_checkblotter($id) {
		$sql = "SELECT
						`a`.*
						FROM `tbl_blotter` `a`
						JOIN `tbl_residents` `b` ON
							`b`.`r_id` = $id
						WHERE
							(`a`.`b_accused` LIKE CONCAT('%',`b`.`r_fname`,' ',`b`.`r_lname`,'%') OR
							`a`.`b_accused` LIKE  CONCAT('%',`b`.`r_lname`,' ',`b`.`r_fname`,'%') OR
							`a`.`b_accused` LIKE CONCAT('%',`b`.`r_lname`,' ',`b`.`r_fname`,' ',`b`.`r_mi`,'%') OR
							`a`.`b_accused` LIKE CONCAT('%',`b`.`r_fname`,' ',`b`.`r_mi`,' ',`b`.`r_lname`,'%')
						)";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0) {
			return true;
		} else {
			return FALSE;
		}
	}


}
