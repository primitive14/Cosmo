<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{
    public function __construct()
    {
      //parent::__construct();
      $CI =& get_instance();
      $CI->load->helper('url');
      $CI->load->library('session');
      $CI->config->item('base_url');
// etc.
    }

    function check_login()
    {
      if(isset($this->session->userdata('loginuser')) && $this->session->userdata('loginuser') == TRUE)
      {
        return 1;
      }
        return 0;



/*      if(isset($_SESSION['loginuser']) && $_SESSION['loginuser'] == TRUE)
      {
        return 1;
      }
        return 0;*/
    }

}
