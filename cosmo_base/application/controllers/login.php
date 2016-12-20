
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->model('login_model');

     }

     public function index()
     {
       if(!$this->auth->check_login())
       {
          //get the posted values
          $pno = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");


          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password","trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               $this->load->view('user/login_view');
          }

          else
          {
               if ($this->input->post('btn_login') == "Login")
               {
                    $usr_result = $this->login_model->get_user($pno, $password);

                    if ($usr_result)
                    {
                         $sessiondata = array(
                              'pno' => $usr_result['pno'],
                              'u_status'=>$usr_result['status'],
                              'is_loggedin' => TRUE,
                              'h_no' => $usr_result['h_no'],
                              'fname'=>$usr_result['fname'],
                              'lname'=>$usr_result['lname'],
                              'date'=>$usr_result['date'],
                              'u_id'=>$user_result['u_id']
                         );

                         $this->session->set_userdata($sessiondata);
                         redirect(base_url());

                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<p><font size="2" color="red">Invalid Username And Password</font></p>');
                         redirect('login/index');
                    }
               }
               else
               {
                    redirect('login/index');
               }
          }
        }else{
              redirect(base_url());
        }
     }
     function logout ()
     {
        $data['title'] = 'logged out';
        $this -> session -> sess_destroy();

        redirect (base_url());
     }
}
?>
