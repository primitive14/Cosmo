<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{
    function check_login()
    {
      if(isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin'] == TRUE)
      {
        return 1;
      }
        return 0;
    }

    function check_isadmin()
    {
        if(isset($_SESSION['u_status']) && $_SESSION['u_status'] == 1)
        {
            return 1;
        }
            return 0;

    }

}
