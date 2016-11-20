<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class service_model extends CI_Model
{
  function __construct()
  {
       parent::__construct();
       $this->load->database();
  }

  function writeComp($h_no,$type,$dscrip,$status)
  {
      $dump = array (
      'h_no' => $h_no,
      'type' => $type,
      'description' => $dscrip,
      'status' => $status
      );

      if($this->db->insert('service',$dump))
      {
        return 1;
      }
        return 0;
  }
}
?>
