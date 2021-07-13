<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Permit extends MX_Controller
{
    //============ CONSTRUCTOR
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_permit');
    }

    public function index(){
      $this->encode();
    }

    public function encode(){
      $data['title'] = 'Encode';
      $data['content'] = 'permit/v_encode';
      $this->load->view('layouts/v_master', $data);
    }

    public function ajax_save(){

      $id = strtoupper($this->input->post('id'));
      if($id != null || $id != ''){
        $data['permtype'] = strtoupper($this->input->post('permtype'));
        $data['businessname'] = strtoupper($this->input->post('businessname'));
        $data['bldgno'] = strtoupper($this->input->post('bldgno'));
        $data['str'] = strtoupper($this->input->post('str'));
        $data['purok'] = strtoupper($this->input->post('purok'));
        $data['operator'] = strtoupper($this->input->post('operator'));
        $data['opaddress'] = strtoupper($this->input->post('opaddress'));
        $data['activity1'] = strtoupper($this->input->post('activity1'));
        $data['activity2'] = strtoupper($this->input->post('activity2'));
        $data['activity3'] = strtoupper($this->input->post('activity3'));

              if($this->mdl_permit->m_update($id,$data)){
                $result = array('status' => 'yes','content'=> ' Updated Successfully!');
                echo json_encode($result);
              }else{
                $result = array('status' => 'no','content'=> 'Failed!. Please try again!');
                echo json_encode($result);
              }
      }else{
        $data['permtype'] = strtoupper($this->input->post('permtype'));
        $data['businessname'] = strtoupper($this->input->post('businessname'));
        $data['bldgno'] = strtoupper($this->input->post('bldgno'));
        $data['str'] = strtoupper($this->input->post('str'));
        $data['purok'] = strtoupper($this->input->post('purok'));
        $data['operator'] = strtoupper($this->input->post('operator'));
        $data['opaddress'] = strtoupper($this->input->post('opaddress'));
        $data['activity1'] = strtoupper($this->input->post('activity1'));
        $data['activity2'] = strtoupper($this->input->post('activity2'));
        $data['activity3'] = strtoupper($this->input->post('activity3'));

              if($this->mdl_permit->m_save($data)){
                $result = array('status' => 'yes','content'=> 'Successfully saved!');
                echo json_encode($result);
              }else{
                $result = array('status' => 'no','content'=> 'Failed!. Please try again!');
                echo json_encode($result);
              }
      }

    }

    public function list(){
      $data['title'] = 'Encode';
      $data['content'] = 'permit/v_list';
      $this->load->view('layouts/v_master', $data);
    }

    public function ajax_get_business(){
      $result = $this->mdl_permit->m_get_business();
      echo json_encode($result);
    }

    public function ajax_fltr_business(){

      if($this->input->get('ftr_releasedatefrom') != ''){
        $data['from']   = $this->input->get('ftr_releasedatefrom');
      }else{
        $data['from'] = 'ALL';
      }
      if($this->input->get('ftr_releasedateto') != ''){
        $data['to']   = $this->input->get('ftr_releasedateto');
      }else{
        $data['to'] = 'ALL';
      }
      $data['type']   = $this->input->get('ftr_permittypes');
      $data['purok']   = $this->input->get('ftr_purok');

      $result = $this->mdl_permit->m_fltr_business($data);
      echo json_encode($result);
    }

    public function cert($id){
      $data['result'] = $this->mdl_permit->m_get_businessinfo($id);
      $data['title'] = 'Permit';
      $data['content'] = 'permit/v_cert';
      $this->load->view('layouts/v_master', $data);
    }


}
