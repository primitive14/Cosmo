<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
     function __construct()
     {
          parent::__construct();
     }

     function get_user($usr, $pwd)
     {
          $sql = "select * from tbl_usrs where username = '" . $usr . "' and password = '" . md5($pwd) . "' ";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }
   }
?>
