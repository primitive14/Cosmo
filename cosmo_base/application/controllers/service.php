<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class service extends CI_Controller
{
  public function __construct()
  {
       parent::__construct();
       $this->load->model('service_model');
  }

  function createTicket()
  {
     if($this->auth->check_login())
     {
       $h_no= $this->session->h_no;
       $type=$this->input->post('type');
       $dscrip=$this->input->post('dscrip');
       $status=0;

       $this->form_validation->set_rules("type", "Type", "trim|required");
       $this->form_validation->set_rules("dscrip", "Description", "trim|required");

       if($this->form_validation->run() == FALSE)
       {
          $this->load->view('module/service_view');
       }
       else
       {
         if($this->input->post('btn_service') == "service")
         {
           $result=$this->service_model->writeComp($h_no,$type,$dscrip,$status);

           if($result)
           {
             $this->session->set_flashdata('msg','service Logged');
             $this->load->view('module/service_view');
           }else{
           $this->session->set_flashdata('msg','service logging Failed');
           $this->load->view('module/service_view');
            }
        }
      }
     }else{
        redirect('login/index');
     }
  }

}

?>
