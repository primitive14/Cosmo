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
             $this->session->set_flashdata('msg','<p><font size="2" color="blue">Service Logged</font></p>');
             $this->load->view('module/service_view');
           }else{
           $this->session->set_flashdata('msg','<p><font size="2" color="red">service logging Failed</font></p>');
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
              $this->session->set_flashdata('msg','<p><font size="2" color="blue">Service Updated</font>');
              redirect('service/viewComplaint/'.$s_id);
            }
          }
          else
          {
            $this->session->set_flashdata('msg','<p><font size="2" color="red">Service Request Update Failed</font>');
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

  public function viewEComplaint($s_id  = NULL)
  {
    if($this->auth->check_login() && $this->auth->check_isadmin())
    {
      $result=$this->service_model->get_service();
      if(empty($result))
      {
        show_404();
      }
      $data['service']=$result;
      $this->load->view('module/service_list',$data);
    }else {
      echo "error";
    }
  }
  public function viewComplaintUserList()
  {
    if($this->auth->check_login())
    {
      $h_no = $this->session->h_no;
      $result=$this->service_model->get_service_user($h_no);
      if($result)
      {
        $data['service_user_list']=$result;
        $this->load->view('module/service_user_list',$data);
      }else {
        $data['service_user_list']='No Service Logged For the Moment';
        $this->load->view('module/service_user_list',$data);
      }
    }else {
      redirect('login/index');
    }
  }
    public function viewComplaintUser($s_id = NULL)
    {
      if($this->auth->check_login())
      {
        $result = $this->service_model->viewService($s_id);
        if($result)
        {
          $data['service_detail']=$result;
          $this->load->view('module/service_view_detail',$data);
        }else{
          $data['service_detail']='No Such Service Number Exist';
          $this->load->view('module/service_view_detail',$data);
        }
      }else {
        redirect('login/index');
      }
    }


}

?>
