<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
     function __construct()
     {
          parent::__construct();
          $this->load->database();
     }

     function get_user($usr, $password)
     {
          $sql = "select * from user where pno = '" . $usr . "' and password = '" . md5($password) . "' ";
          $query = $this->db->query($sql);
          return $query -> first_row('array');
     }
   }
?>
