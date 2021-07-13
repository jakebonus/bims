<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blotter extends MX_Controller
{
    //============ CONSTRUCTOR
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_blotter');
    }

    public function index() {
          $data['title'] = 'Encode';
          $data['content'] = 'blotter/v_encode';
          $this->load->view('layouts/v_master', $data);
    }

    public function ajax_save(){
        $id = $this->input->post('b_id');

        // $a = $this->input->post('a');
        // echo $a;
        // die();
      if($id != '' || $id != null){
        $data['b_caseno']         = strtoupper($this->input->post('b_caseno'));
        $data['b_casefor']        = strtoupper($this->input->post('b_casefor'));
        $data['b_accused']        = strtoupper($this->input->post('b_accused'));
        $data['b_accusedaddress'] = strtoupper($this->input->post('b_accusedaddress'));
        $data['b_complainant']    = strtoupper($this->input->post('b_complainant'));
        $data['b_complainantaddress'] = strtoupper($this->input->post('b_complainantaddress'));
        $data['b_victims']        = strtoupper($this->input->post('b_victims'));
        $data['b_victimsaddress'] = strtoupper($this->input->post('b_victimsaddress'));
        $data['b_report']         = strtoupper($this->input->post('a'));
        $data['b_classification'] = strtoupper($this->input->post('b_classification'));
        if(strtolower($data['b_classification']) == 'others'){
          $data['b_classification'] .= ' - '.strtoupper($this->input->post('txt_classiOthers'));
        }
        $data['b_incidentdate']   = strtoupper($this->input->post('b_incidentdate'));
        $data['b_incidenttime']   = strtoupper($this->input->post('b_incidenttime'));
        $data['b_incidentplace']  = strtoupper($this->input->post('b_incidentplace'));
        $data['b_blotterdate']    = strtoupper($this->input->post('b_blotterdate'));
        $data['b_blottertime']    = strtoupper($this->input->post('b_blottertime'));
        $data['b_casesolve']      = strtoupper($this->input->post('b_casesolve'));
        $data['b_detective']      = strtoupper($this->input->post('b_detective'));


        if($this->mdl_blotter->m_update($data,$id)){
          $result = array('status' => 'yes','content'=> 'Update Successfully!');
          echo json_encode($result);
        }else{
          $result = array('status' => 'no','content'=> 'Failed!. Please try again!');
          echo json_encode($result);
        }
      }else{
        $data['b_caseno']       = strtoupper($this->input->post('b_caseno'));
        $data['b_casefor']      = strtoupper($this->input->post('b_casefor'));
        $data['b_accused']      = strtoupper($this->input->post('b_accused'));
        $data['b_accusedaddress'] = strtoupper($this->input->post('b_accusedaddress'));
        $data['b_complainant']  = strtoupper($this->input->post('b_complainant'));
        $data['b_complainantaddress'] = strtoupper($this->input->post('b_complainantaddress'));
        $data['b_victims']      = strtoupper($this->input->post('b_victims'));
        $data['b_victimsaddress'] = strtoupper($this->input->post('b_victimsaddress'));
        $data['b_report']       = strtoupper($this->input->post('a'));
        $data['b_classification'] = strtoupper($this->input->post('b_classification'));
        if(strtolower($data['b_classification']) == 'others'){
          $data['b_classification'] .= ' - '.strtoupper($this->input->post('txt_classiOthers'));
        }
        $data['b_incidentdate']   = strtoupper($this->input->post('b_incidentdate'));
        $data['b_incidenttime']   = strtoupper($this->input->post('b_incidenttime'));
        $data['b_incidentplace']  = strtoupper($this->input->post('b_incidentplace'));
        $data['b_blotterdate']    = strtoupper($this->input->post('b_blotterdate'));
        $data['b_blottertime']    = strtoupper($this->input->post('b_blottertime'));
        $data['b_casesolve']      = strtoupper($this->input->post('b_casesolve'));
        $data['b_detective']      = strtoupper($this->input->post('b_detective'));

        if($this->mdl_blotter->m_save($data)){
          $result = array('status' => 'yes','content'=> 'Successfully saved!');
          echo json_encode($result);
        }else{
          $result = array('status' => 'no','content'=> 'Failed!. Please try again!');
          echo json_encode($result);
        }
      }

    }

    public function ajax_get_blotterlist(){
        $result = $this->mdl_blotter->m_get_blotterlist();
        echo json_encode($result);
    }

    public function ajax_save_sched(){
        $id = $this->input->post('mb_id');
        $data['b_scheddate'] = $this->input->post('b_scheddate');
        $data['b_schedtime'] = $this->input->post('b_schedtime');
        // print_r( $data);
        // die();
        if($this->mdl_blotter->m_update($data,$id)){
          $result = array('status' => 'yes','content'=> 'Update Successfully!');
          echo json_encode($result);
        }else{
          $result = array('status' => 'no','content'=> 'Failed!. Please try again!');
          echo json_encode($result);
        }
    }

    public function print($b_id){
      $data['result'] = $this->mdl_blotter->m_get_blotterinfo($b_id);
      $data['title'] = 'Encode';
      $data['content'] = 'blotter/v_printdocs';
      $this->load->view('layouts/v_master', $data);
    }

}
