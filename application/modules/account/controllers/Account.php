<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_account');
    }

    //LOGIN
    public function index()
    {
        if (substr($_SERVER['HTTP_HOST'], 0, 4) === 'www.') {
            header('Location: http'.(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 's':'').'://' . substr($_SERVER['HTTP_HOST'], 4).$_SERVER['REQUEST_URI']);
            exit;
        }

        if (!$this->session->userdata('accountId')) {
            $data['title'] = 'Login';
            $this->load->view('v_login', $data);
        } else {
            redirect('resident');
        }
    }

	//AJAX LOGIN
    public function ajax_signin()
    {
    $url = '';
		if ($this->input->post('isLogin') == 1) {
			$data['u_username'] = $this->input->post('u_username');
			$data['u_password'] = $this->input->post('u_password');

			if ($user = $this->mdl_account->m_ajax_signin($data)) {
				foreach ($user as $u) {
					$this->session->set_userdata('accountId', $u->u_id);
					$this->session->set_userdata('u_username', $u->u_username);
          $this->session->set_userdata('u_level', $u->u_level);
          $this->session->set_userdata('u_fname', $u->u_fname);
          $this->session->set_userdata('u_mname', $u->u_mname);
					$this->session->set_userdata('u_lname', $u->u_lname);
					$this->session->set_userdata('u_brgy', $u->u_brgy);
				}

        /**
         * Get user details
         * @type {[type]}
         */
          // $ip = $_SERVER['SERVER_ADDR'];
          // if (PHP_OS == 'WINNT'){
          //   $ip = getHostByName(getHostName());
          // }
          // if (PHP_OS == 'Linux'){
          //   $command="/sbin/ifconfig";
          //   exec($command, $output);
          //   $pattern = '/inet addr:?([^ ]+)/';
          //   $ip = array();
          //   foreach ($output as $key => $subject) {
          //     $result = preg_match_all($pattern, $subject, $subpattern);
          //     if ($result == 1) {
          //       if ($subpattern[1][0] != "127.0.0.1")
          //         $ip = $subpattern[1][0];
          //     }
          //   }
          // }
          //
          // $pcname = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
          // $pcname = $_SERVER['REMOTE_ADDR'];
          // $pcname = gethostbyaddr($pcname);
          //
          // $data1['a_ip'] = $ip;
          // $data1['a_macadd'] = explode("\\",exec('getmac'));
          // $data1['a_macadd'] = preg_replace('/\s+/','',$data1['a_macadd'][0]);
          //
          // $data1['a_browser'] = $_SERVER ['HTTP_USER_AGENT'];
          // $data1['a_pcname'] = $pcname;
          // $data1['a_id'] = $this->session->userdata('accountId');
          //
          // $this->mdl_account->m_ajax_save_userdetails($data1);


				$result = array('status' => 'yes', 'content' => 'Successfully logged in! Redirecting...');
				echo json_encode($result);
			} else {
				$result = array('status' => 'no', 'content' => 'Invalid Username and Password!');
				echo json_encode($result);
			}
		}
    }


    public function ajax_save_printed(){
      $data['ref_id'] = $this->input->post('ref_if');
      $data['type'] = $this->input->post('type');
      $data['annualsalary'] = $this->input->post('annualsalary');
      $data['r_parentwork'] = $this->input->post('r_parentwork');
      $data['r_parents'] = $this->input->post('r_parents');

    $this->mdl_account->m_save_printed($data);



    }
	//LOGOUT/DESTROY ALL SESSIONS
    public function logout()
    {
        $this->session->sess_destroy();
  		// if($this->mdl_account->m_ajax_signout()) {
  			redirect('account');
  		// }
    }

    // CHANGE PASSWORD
    public function profile()
    {
        if ($this->session->userdata('accountId')) {
            $data['title'] = 'Profile';
            $data['content'] = 'account/v_profile';
            $this->load->view('layouts/v_master', $data);
        } else {
          redirect('account');
        }
    }

    public function update_password()
    {
      if ($this->session->userdata('accountId')) {
        $a_id = $this->session->userdata('accountId');
        if($this->input->post('password') == $this->input->post('password2')){
            if($this->mdl_account->m_ajax_update_password($a_id,$this->input->post('password'))){
                $result = array('status' => 'yes','content'=> 'Password Successfully Updated');
                echo json_encode($result);
                exit();
            } else {
                $result = array('status' => 'no','content'=> 'Password failed to updated');
                echo json_encode($result);
                exit();
            }
        } else {
            $result = array('status' => 'no','content'=> 'Password did not match');
            echo json_encode($result);
            exit();
        }
      } else {
        redirect('account');
      }
    }

    // public function ifonline(){
    //     if($this->mdl_account->m_ifonline())
    //     {
    //         $result = array('status' => 'yes');
    //         echo json_encode($result);
    //     } else {
    //         $result = array('status' => 'no');
    //         echo json_encode($result);
    //     }
    // }

}
