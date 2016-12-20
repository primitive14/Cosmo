<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Complaint extends CI_Controller
{
  public function __construct()
  {
       parent::__construct();
       $this->load->model('complaint_model');
  }
  function index()
  {
    if($this->auth->check_login() && $this->auth->check_isadmin())
    {
      $result=$this->complaint_model->get_complaint();

      if($result)
      {
        $data['complaint']=$result;
        $this->load->view('module/complaint_list',$data);
      }else {
        echo "No Complaint,So no Work";
      }
    }else {
      redirect('login/index');
    }
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
          $this->load->view('module/complaint_view');
       }
       else
       {
         if($this->input->post('btn_complaint') == "Complaint")
         {
           $result=$this->complaint_model->createTicket($h_no,$type,$dscrip,$status);

           if($result)
           {
             $this->session->set_flashdata('msg','<p><font size="2" color="blue">Complaint Logged</font></p>');
             $this->load->view('module/complaint_view');
           }else{
           $this->session->set_flashdata('msg','<p><font size="2" color="red">Complaint logging Failed</font></p>');
           $this->load->view('module/complaint_view');
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
        $c_id= $this->input->post('c_id');

        $this->form_validation->set_rules('status','Status','trim|required');
        $this->form_validation->set_rules('c_id','Complaint ID','trim|required');

        if($this->form_validation->run() == FALSE)
        {
          $this->load->view('module/complaint_update_view');
        }

        else
        {
          if($this->input->post('btn_Ucomplaint') == "Complaint")
          {
            $result=$this->complaint_model->updateTicket($status,$c_id);

            if($result)
            {
              $this->session->set_flashdata('msg','<p><font size="2" color="blue">Complaint Updated</font>');
              redirect('complaint/viewComplaint/'.$c_id);
            }
          }
          else
          {
            $this->session->set_flashdata('msg','<p><font size="2" color="red">Complaint Update Failed</font>');
            redirect('complaint/viewComplaint/'.$c_id);
          }
        }
    }else{
      redirect('login/index');
    }

  }
  public function viewComplaint($c_id  = NULL)
  {
    if($this->auth->check_login() && $this->auth->check_isadmin())
    {
      $result=$this->complaint_model->viewComplaint($c_id);
      if(empty($result))
      {
        show_404();
      }
      $data['vc']=$result;
      $this->load->view('module/complaint_update_view',$data);
    }else {
      $this->session->set_flashdata('msg','Something Went Wrong');
      redirect('complaint/viewComplaint/'.$c_id);
    }
  }
  public function viewEComplaint($c_id  = NULL)
  {
    if($this->auth->check_login() && $this->auth->check_isadmin())
    {
      $result=$this->complaint_model->get_complaint();
      if(empty($result))
      {
        show_404();
      }
      $data['complaint']=$result;
      $this->load->view('module/complaint_list',$data);
    }else {
      echo "error No Complaints to Display";
    }
  }

  public function viewComplaintUserList()
  {
    if($this->auth->check_login())
    {
      $h_no = $this->session->h_no;
      $result=$this->complaint_model->get_complaint_user($h_no);
      if($result)
      {
        $data['complaint_user_list']=$result;
        $this->load->view('module/complaint_user_list',$data);
      }else {
        $data['complaint_user_list']='No Complaints Logged For the Moment';
        $this->load->view('module/complaint_user_list',$data);
      }
    }else {
      redirect('login/index');
    }
  }
    public function viewComplaintUser($c_id = NULL)
    {
      if($this->auth->check_login())
      {
        $result = $this->complaint_model->viewComplaint($c_id);
        if($result)
        {
          $data['complaint_detail']=$result;
          $this->load->view('module/complaint_view_detail',$data);
        }else{
          $data['complaint_detail']='No Such Complaint Number Exist';
          $this->load->view('module/complaint_view_detail',$data);
        }
      }else {
        redirect('login/index');
      }
    }
}
?>
