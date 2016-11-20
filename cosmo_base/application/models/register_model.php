<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_model extends CI_Model
{
     function __construct()
     {
          parent::__construct();
          $this->load->database();
     }

     function register($h_no,$fname,$lname,$email,$password,$pno)
     {
            $dump = array (
             'h_no' => $h_no,
             'fname' => $fname,
             'lname' => $lname,
             'email' => $email,
             'password'=>md5($password),
             'pno' => $pno
          );
          if($this->db->insert('user', $dump))
          {
            return 0;
          }
            return 1;
     }


   }
?>
