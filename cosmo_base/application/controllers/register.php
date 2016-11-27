<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller
{
  public function __construct()
  {
       parent::__construct();
       $this->load->model('register_model');
  }

  public function index()
  {
    if($this->auth->check_login() && $this->auth->check_isadmin())
    {
       $h_no= $this->input->post('h_no');
       $fname=$this->input->post('fname');
       $lname=$this->input->post('lname');
       $email=$this->input->post('email');
       $password=$this->input->post('password');
       $pno=$this->input->post('pno');

       $this->form_validation->set_rules('h_no','House Number','trim|required');
       $this->form_validation->set_rules('fname','First Name','trim|required');
       $this->form_validation->set_rules('lname','Last Name','trim|required');
       $this->form_validation->set_rules('email','Email','trim|required|valid_email');
       $this->form_validation->set_rules('password','Password','trim|required');
       $this->form_validation->set_rules('pno','Phone Number','trim|required');


       if ($this->form_validation->run() == FALSE)
       {
            $this->load->view('user/register_view');
       }

       else
       {
          if($this->input->post('btn_register')== "Register")
          {
            $result=$this->register_model->register($h_no,$fname,$lname,$email,$password,$pno);

            if($result == 0)
            {
                $data['error']="Registered";
                $this->load->view('user/register_view',$data);
            }

          }
       }
     }else{
       redirect('login/index');
     }
  }
}
