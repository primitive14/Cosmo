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
  public function updateTicket()
  {
    if($this->auth->check_login() && $this->auth->check_isadmin())
    {
        $status= $this->input->post('status');
        $s_id= $this->input->post('s_id');

        $this->form_validation->set_rules('status','Status','trim|required');
        $this->form_validation->set_rules('s_id','Complaint ID','trim|required');

        if($this->form_validation->run() == FALSE)
        {
          $this->load->view('module/service_update_view');
        }

        else
        {
          if($this->input->post('btn_Uservice') == "Service")
          {
            $result=$this->service_model->updateTicket($status,$s_id);

            if($result)
            {
              $this->session->set_flashdata('msg','Service Request Updated');
              redirect('service/viewComplaint/'.$s_id);
            }
          }
          else
          {
            $this->session->set_flashdata('msg','Service Request Update Failed');
            redirect('service/viewComplaint/'.$s_id);
          }
        }
    }else{
      redirect('login/index');
    }

  }
  public function viewComplaint($s_id  = NULL)
  {
    if($this->auth->check_login() && $this->auth->check_isadmin())
    {
      $result=$this->service_model->viewService($s_id);
      if(empty($result))
      {
        show_404();
      }
      $data['vc']=$result;
      $this->load->view('module/service_update_view',$data);
    }else {
      $this->session->set_flashdata('msg','Something Went Wrong');
      redirect('service/viewComplaint/'.$s_id);
    }
  }


}

?>
