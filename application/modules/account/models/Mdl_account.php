<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_account extends CI_Model
{
	//LOGIN/CHECK LOGIN CREDENTIALS
    public function m_ajax_signin($data)
    {
        // $datelogin = date("Y-m-d G:i:s", time());
        $sql = "SELECT
                  *
                FROM
                  `tbl_users`
                WHERE `u_active` = 'yes' AND `u_username` = ? AND `u_password` = ?
                LIMIT 1";
        $attr = array($data['u_username'], sha1(md5($data['u_password'] . 'J4K3MB0NU5')));
        $query = $this->db->query($sql, $attr);

        if ($query->num_rows() > 0) {
            // foreach($query->result() as $r) {
            //     $a_id = $r->a_id;
            // }
            // $sql2 = "UPDATE `tbl_account` SET `a_login` = ? WHERE `a_id` = ?";
            // $param2= array($datelogin,$a_id);
            // $this->db->query($sql2,$param2);
            return $query->result();
        } else {
            return false;
        }
    }

	public function m_ajax_signout()
    {
        $datelogout = date("Y-m-d G:i:s", time());
        $sql = "UPDATE `tbl_users` SET `a_logout` = ? WHERE `u_id` = ?";
        $param= array($datelogout,$this->session->userdata('accountId'));
        if($this->db->query($sql,$param)) {
            $this->session->sess_destroy();
            return true;
        } else {
            return false;
        }
    }

    public function m_ajax_update_password($a_id,$password)
    {
        $newpass = sha1(md5($password.'J4K3MB0NU5'));
        $this->session->set_userdata('password', $newpass);
        $sql ="UPDATE `tbl_users` SET `u_password` = '$newpass' WHERE `u_id` = '$a_id' ";
        if($this->db->query($sql)){
            return true;
        } else {
            return false;
        }
    }

    public function m_ajax_save_userdetails($data1) {
  		$id = $data1['a_id'];
  		unset($data1['a_id']);
  		$this->db->where('u_id', $id);
  		if($this->db->update('tbl_users',$data1)) {
  			return TRUE;
  		} else {
  			return FALSE;
  		}
  	}

    public function m_ifonline() {
  		$sql = 'SELECT `u_id` AS `id`
  				FROM
  				  `tbl_users`
  				WHERE `u_id` = "1"
  				';
  		$query = $this->db->query($sql);
  		if($query->num_rows() > 0)
  		{
  			return $query->result();
  		} else {
  			return false;
  		}
  	}

    public function m_save_printed($data) {

  		$sql = $this->db->insert('`tbl_printed`',$data);
      $query =  $this->db->query($sql);
  		if($query)
  		{
  			return true;
  		} else {
  			return false;
  		}
  	}
}
