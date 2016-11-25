<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
     function __construct()
     {
          parent::__construct();
          $this->load->library('unit_test');
     }

    public function index()
   	{
   	}
 }
?>
