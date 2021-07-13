<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_permit extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function m_save($data){
		$query = $this->db->insert('`tbl_permit`',$data);
		if($query){
			$pr['p_id'] = $this->db->insert_id();
			$pr['permtype'] = $data['permtype'];
			$query1 = $this->db->insert('`tbl_prmtrelease`',$pr);
			if($query1){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function m_update($id,$data){
		$this->db->where('`id`',$id);
		$query = $this->db->update('`tbl_permit`',$data);
		if($query){
			$pr['p_id'] = $id;
			$pr['permtype'] = $data['permtype'];
			$query1 = $this->db->insert('`tbl_prmtrelease`',$pr);
			if($query1){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function m_get_business(){
		// $sql = "SELECT * FROM `tbl_permit` WHERE `deleted` = 'NO'";
		$sql = "SELECT `a`.* ,
							`b`.`daterelease` AS `lastrelease`
						FROM `tbl_permit` `a`
						INNER JOIN	`tbl_prmtrelease` `b` ON
							`a`.`id` = `b`.`p_id`
						WHERE `a`.`deleted` = 'NO'
						AND `b`.`daterelease` = (
							SELECT MAX(`c`.`daterelease`)
							FROM `tbl_prmtrelease` `c`
							WHERE `a`.`id` = `c`.`p_id`
								AND
								`c`.`deleted` = 'NO'
						)
						AND `b`.`deleted` = 'NO'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

		public function m_get_businessinfo($id){
			$sql = "SELECT * FROM `tbl_permit` WHERE `id` = $id and `deleted` = 'NO'";
			$query = $this->db->query($sql);
			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return false;
			}
		}

		public function m_fltr_business($data){
			$sql ="SELECT `a`.* ,
								`b`.`daterelease` AS `lastrelease`
							FROM `tbl_permit` `a`
							INNER JOIN	`tbl_prmtrelease` `b` ON
								`a`.`id` = `b`.`p_id`
							WHERE `a`.`deleted` = 'NO'";

							if($data['type'] != 'ALL'){
								$sql .= "AND `b`.`permtype` = '".$data['type']."'";
							}

							if($data['from'] != 'ALL'){
								$sql .= " AND `b`.`daterelease` BETWEEN '".$data['from']."' AND '".$data['to']."'";
							}

							if($data['purok'] != 'ALL'){
								$sql .= " AND `a`.`purok` = '".$data['purok']."'";
							}

						$sql .= "	AND `b`.`deleted` = 'NO'";


			$query = $this->db->query($sql);
			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return false;
			}
		}


}
