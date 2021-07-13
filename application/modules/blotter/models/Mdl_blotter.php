<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_blotter extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function m_save($data) {
		if($this->db->insert('tbl_blotter',$data)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function m_update($data,$id) {
			$this->db->where('`b_id`',$id);
		$sql = $this->db->update('tbl_blotter',$data);
		if($sql) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


		public function m_get_blotterlist() {
			$sql = "SELECT
							*
							FROM `tbl_blotter`
							WHERE `b_deleted` = 'NO'";
			$query = $this->db->query($sql);
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return FALSE;
			}
		}

		public function m_get_blotterinfo($b_id) {
			$sql = "SELECT
							*
							FROM `tbl_blotter`
							WHERE `b_deleted` = 'NO' AND `b_id` = '$b_id'";
			$query = $this->db->query($sql);
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return FALSE;
			}
		}

}
