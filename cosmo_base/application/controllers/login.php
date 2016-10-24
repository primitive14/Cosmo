<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          $this->load->model('login_model');
     }

     public function index()
     {
          //get the posted values
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");


          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password","trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               $this->load->view('login_view');
          }

          else
          {
               if ($this->input->post('btn_login') == "Login")
               {
                    $usr_result = $this->login_model->get_user($username, $password);

                    if ($usr_result > 0)
                    {
                         $sessiondata = array(
                              'username' => $username,
                              'loginuser' => TRUE,
                         );

                         $this->session->set_userdata($sessiondata);
                         redirect("index");

                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('login/index');
                    }
               }
               else
               {
                    redirect('login/index');
               }
          }
     }
}
?>
