<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
       parent::__construct();
  }
  function index()
  {
    if($this->auth->check_login() && $this->auth->check_isadmin())
    {
      $this->load->view('admin/dashboard');
    }else{
      redirect('login/index');
    }
  }
}
