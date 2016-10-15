<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library('Auth');

  }
  public function index()
  {

  }
  public function login()
  {
    if(!$this->Auth->check_login())
    {

    }else{

    }
  }
  public function register()
  {

  }
}






?>
