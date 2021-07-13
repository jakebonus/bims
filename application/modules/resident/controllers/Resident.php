<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Resident extends MX_Controller
{
    //============ CONSTRUCTOR
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_resident');
    }

    public function index() {
          $data['title'] = 'Encode';
          $data['content'] = 'resident/v_encode';
          $this->load->view('layouts/v_master', $data);
    }

    public function ajax_save(){
      $data['r_fname']                  = strtoupper($this->input->post('r_fname'));
      $data['r_mname']                  =  strtoupper($this->input->post('r_mname'));
      $data['r_mi']                     = strtoupper($this->input->post('r_mi'));
      $data['r_lname']                  = strtoupper($this->input->post('r_lname'));
      $data['r_next']                   = strtoupper($this->input->post('r_next'));
      $data['r_purok']                  =  strtoupper($this->input->post('r_purok'));
      $data['r_street']                 = strtoupper($this->input->post('r_street'));
      $data['r_housenum']               =  strtoupper($this->input->post('r_housenum'));
      $data['r_gender']                 = strtoupper($this->input->post('r_gender'));
      $data['r_bdate']                  = strtoupper($this->input->post('r_bdate')) ;
      $data['r_osy']                  = strtoupper($this->input->post('r_osy'));
      $data['r_reltohousehead']         = strtoupper($this->input->post('r_reltohousehead'));
      $data['r_numfaminhouse']          =  strtoupper($this->input->post('r_numfaminhouse'));
      $data['r_civilstatus']            =  strtoupper($this->input->post('r_civilstatus'));
      $data['r_registeredvoters']       = strtoupper($this->input->post('r_registeredvoters'));
      $data['r_pleaceregistered']       = strtoupper($this->input->post('r_pleaceregistered'));
      $data['r_rentinghouse']           =  strtoupper($this->input->post('r_rentinghouse')) ;
      $data['r_ownerofrentinghouse']    =  strtoupper($this->input->post('r_ownerofrentinghouse')) ;
      $data['r_highiesteduc']           =  strtoupper($this->input->post('r_highiesteduc')) ;
      $data['r_employed']                   = strtoupper($this->input->post('r_employed')) ;
      $data['r_work']                   =  strtoupper($this->input->post('r_work'));
      $data['r_course']                 =  strtoupper($this->input->post('r_course'));
      $data['r_regularinwork']          =  strtoupper($this->input->post('r_regularinwork'));
      // $data['r_monthlyincome']          = ($this->input->post('r_monthlyincome') != "" ? strtoupper($this->input->post('r_monthlyincome')) : NULL);
      $r_monthlyincome         = str_replace(',', '', $this->input->post('r_monthlyincome'));
      $data['r_monthlyincome'] = str_replace('₱ ', '', $r_monthlyincome);

      $data['r_encodedby']              = strtoupper($this->input->post('r_encodedby'));
      if($this->mdl_resident->m_ajax_save($data)){
        $result = array('status' => 'yes','content'=> 'Successfully saved!');
        echo json_encode($result);
      }else{
        $result = array('status' => 'no','content'=> 'Failed!. Please try again!');
        echo json_encode($result);
      }
    }



    public function ajax_update(){
      $r_id                             = $this->input->post('r_id');
      $data['r_fname']                  = ($this->input->post('r_fname') != "" ? strtoupper($this->input->post('r_fname')) : NULL);
      $data['r_mname']                  = ($this->input->post('r_mname') != "" ? strtoupper($this->input->post('r_mname')) : NULL);
      $data['r_mi']                     = ($this->input->post('r_mi') != "" ? strtoupper($this->input->post('r_mi')) : NULL);
      $data['r_lname']                  = ($this->input->post('r_lname') != "" ? strtoupper($this->input->post('r_lname')) : NULL);
      $data['r_next']                   = ($this->input->post('r_next') != "" ? strtoupper($this->input->post('r_next')) : NULL);
      $data['r_purok']                  = ($this->input->post('r_purok') != "" ? strtoupper($this->input->post('r_purok')) : NULL);
      $data['r_street']                 = ($this->input->post('r_street') != "" ? strtoupper($this->input->post('r_street')) : NULL);
      $data['r_housenum']               = ($this->input->post('r_housenum') != "" ? strtoupper($this->input->post('r_housenum')) : NULL);
      $data['r_gender']                 = ($this->input->post('r_gender') != "" ? strtoupper($this->input->post('r_gender')) : NULL);
      $data['r_bdate']                  = ($this->input->post('r_bdate') != "" ? strtoupper($this->input->post('r_bdate')) : NULL);
      $data['r_osy']                    = ($this->input->post('r_osy') != "" ? strtoupper($this->input->post('r_osy')) : NULL);
      $data['r_reltohousehead']         = ($this->input->post('r_reltohousehead') != "" ? strtoupper($this->input->post('r_reltohousehead')) : NULL);
      $data['r_numfaminhouse']          = ($this->input->post('r_numfaminhouse') != "" ? strtoupper($this->input->post('r_numfaminhouse')) : NULL);
      $data['r_civilstatus']            = ($this->input->post('r_civilstatus') != "" ? strtoupper($this->input->post('r_civilstatus')) : NULL);
      $data['r_registeredvoters']       = ($this->input->post('r_registeredvoters') != "" ? strtoupper($this->input->post('r_registeredvoters')) : NULL);
      $data['r_pleaceregistered']       = ($this->input->post('r_pleaceregistered') != "" ? strtoupper($this->input->post('r_pleaceregistered')) : NULL);
      $data['r_rentinghouse']           = ($this->input->post('r_rentinghouse') != "" ? strtoupper($this->input->post('r_rentinghouse')) : NULL);
      $data['r_ownerofrentinghouse']    = ($this->input->post('r_ownerofrentinghouse') != "" ? strtoupper($this->input->post('r_ownerofrentinghouse')) : NULL);
      $data['r_highiesteduc']           = ($this->input->post('r_highiesteduc') != "" ? strtoupper($this->input->post('r_highiesteduc')) : NULL);
      $data['r_employed']                   = ($this->input->post('r_employed') != "" ? strtoupper($this->input->post('r_employed')) : NULL);
      $data['r_work']                   = ($this->input->post('r_work') != "" ? strtoupper($this->input->post('r_work')) : NULL);
      $data['r_course']                 = ($this->input->post('r_course') != "" ? strtoupper($this->input->post('r_course')) : NULL);
      $data['r_regularinwork']          = ($this->input->post('r_regularinwork') != "" ? strtoupper($this->input->post('r_regularinwork')) : NULL);
      // $data['r_monthlyincome']          = ($this->input->post('r_monthlyincome') != "" ? strtoupper($this->input->post('r_monthlyincome')) : NULL);
      $data['r_encodedby']              = ($this->input->post('r_encodedby') != "" ? strtoupper($this->input->post('r_encodedby')) : NULL);
		 $r_monthlyincome         = str_replace(',', '', $this->input->post('r_monthlyincome'));
		     $data['r_monthlyincome'] = str_replace('₱ ', '', $r_monthlyincome);
      if($this->mdl_resident->m_ajax_update($data,$r_id)){
        $result = array('status' => 'yes','content'=> 'Successfully saved!');
        echo json_encode($result);
      }else{
        $result = array('status' => 'no','content'=> 'Failed!. Please try again!');
        echo json_encode($result);
      }
    }

    public function residentslist() {
          $data['title'] = 'Encode';
          $data['content'] = 'resident/v_list';
          $this->load->view('layouts/v_master', $data);
    }
    public function ajax_get_residents(){
      // $data['ftr_agefrom'] = $this->input->post('ftr_agefrom');
      // $data['ftr_ageto'] = $this->input->post('ftr_ageto');
      // echo $this->input->post('ftr_civilstatus');

      // if($this->input->post('ftr_civilstatus'))){
          $data['ftr_monthlyincome'] =   $this->input->post('ftr_monthlyincome');

          if($this->input->post('ftr_senior') == 'ALL' || $this->input->post('ftr_senior') == 'NO'){
              $data['ftr_senior'] =  'ALL';
          }else{
              $data['ftr_senior'] =  '60';
          }

          $data['ftr_name'] =   $this->input->post('ftr_name');
          $data['ftr_nametype'] =   $this->input->post('ftr_nametype');
          
          $data['ftr_highiesteduc'] =   $this->input->post('ftr_highiesteduc');
          $data['ftr_voter'] =   $this->input->post('ftr_voter');
          $data['ftr_purok'] =   $this->input->post('ftr_purok');
          $data['ftr_gender'] =   $this->input->post('ftr_gender');
          $data['ftr_civilstatus'] =   $this->input->post('ftr_civilstatus');
          $data['ftr_agefrom'] =   $this->input->post('ftr_agefrom');
          $data['ftr_ageto'] =   $this->input->post('ftr_ageto');
          $data['ftr_employed'] =   $this->input->post('ftr_employed');
          $data['ftr_osy'] =   $this->input->post('ftr_osy');
          $data['ftr_renting'] =   $this->input->post('ftr_renting');


        $result = $this->mdl_resident->m_get_residents($data);
        echo json_encode($result);
    }

    public function ajax_savephoto(){
      $result_img = str_replace('[removed]','',$this->input->post('result_img'));
      $result_img = str_replace(' ', '+', $result_img);
      $file_name = 'residentsimages/'.$this->input->post('r_id').'.jpg';
      file_put_contents($file_name, base64_decode($result_img));
      if(file_exists ($file_name)){
        $result = array('status' => 'yes','content'=> 'Successfully saved!');
        echo json_encode($result);
      }else{
        $result = array('status' => 'no','content'=> 'Please try again!');
        echo json_encode($result);
      }
    }

    public function update_resident(){

      $isPasswordNeeded = $this->input->post('isPasswordNeeded');
      $brgycaptainpassword = $this->input->post('brgycaptainpassword');

      if($isPasswordNeeded == '1'){
        if($this->mdl_resident->m_checkbrgycaptainpassword($brgycaptainpassword)){
          $r_id = $this->input->post('mdl_r_id');
          $certtype = strtoupper($this->input->post('mdl_certtype'));
            $a['r_parents'] = strtoupper($this->input->post('mdl_r_parents'));
            $a['r_parentwork'] = strtoupper($this->input->post('mdl_work'));
            $a['r_parentsalary'] = strtoupper($this->input->post('mdl_msalary'));
            $a['r_deathdate'] = strtoupper($this->input->post('mdl_deathdate'));

          if($certtype != 'CLEARANCE'){
            if($this->mdl_resident->m_update($r_id,$a)){
              $result = array('status' => 'yes', 'content' => 'Success');
              echo json_encode($result);
            }else{
              $result = array('status' => 'no','content'=> 'Please try again!');
              echo json_encode($result);
            }
          }else{
            $result = array('status' => 'yes', 'content' => 'Success');
            echo json_encode($result);
          }
        }else{
          $result = array('status' => 'no','content'=> 'Invalid Password!');
          echo json_encode($result);
        }
      }else{

        $r_id = $this->input->post('mdl_r_id');
        $certtype = strtoupper($this->input->post('mdl_certtype'));
        // echo $certtype;
        // die();
          // if($certtype == 'BMFA'){
            $a['r_bmfareqby'] = strtoupper($this->input->post('mdl_reqby'));
          // }
          // if($certtype == 'SPES' || $certtype == 'ITR'){
            $a['r_parents'] = strtoupper($this->input->post('mdl_r_parents'));
            $a['r_parentwork'] = strtoupper($this->input->post('mdl_work'));
            $a['r_parentsalary'] = strtoupper($this->input->post('mdl_msalary'));
            $a['r_deathdate'] = strtoupper($this->input->post('mdl_deathdate'));
          // }
          $a['r_disability'] = strtoupper($this->input->post('mdl_r_disability'));
          $a['r_dependents'] = strtoupper($this->input->post('mdl_r_dependents'));
          $a['reside_since'] = strtoupper($this->input->post('mdl_reside_since'));
        if($certtype != 'CLEARANCE'){
          if($this->mdl_resident->m_update($r_id,$a)){
            $result = array('status' => 'yes', 'content' => 'Success');
            echo json_encode($result);
          }else{
            $result = array('status' => 'no','content'=> 'Please try again!');
            echo json_encode($result);
          }
        }else{
          $result = array('status' => 'yes', 'content' => 'Success');
          echo json_encode($result);
        }
      }


    }

    public function printcert($r_id,$certtype){
      $data['info'] = $this->mdl_resident->m_get_resident_info($r_id);

      $data['title'] = 'Encode';
      $data['content'] = 'resident/v_new_cert';
      $this->load->view('layouts/v_master', $data);
    }


    public function info($r_id){
      $data['info'] = $this->mdl_resident->m_get_resident_info($r_id);
      // echo '<pre>';
      // print_r($data['info']);
      // die();
      $data['title'] = 'Update Info';
      $data['content'] = 'resident/v_updateinfo';
      $this->load->view('layouts/v_master', $data);
    }

    public function ajax_check_blotter(){
      $id = $this->input->post('r_id');
        if($result = $this->mdl_resident->m_checkblotter($id)){
          $result = array('status' => 'yes','content'=> 'Positive');
          echo json_encode($result);
        }else{
          $result = array('status' => 'no','content'=> 'Negative');
          echo json_encode($result);
        }
    }

}
