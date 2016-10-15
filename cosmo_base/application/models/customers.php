<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Model
{
	public function __construct()
	{
		$this -> load -> database();
	}
	function login($userdata)
	{
    $this-> db ->select ()-> from('client_info')->where($userdata);
    $output = $this-> db ->get();

    if(password_verify($userdata['client_password'], $output->first_row('array')['password']))
    {
      return $query->first_row('array');
    }else{
      return 0;
    }
	}
}
