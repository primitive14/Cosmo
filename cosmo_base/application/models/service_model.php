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
  function updateTicket($status,$s_id)
  {
    $dump= array(
      'status' => $status
    );

    $this->db->where('s_id', $s_id);
    $query=$this->db->update('service', $dump);

    if($query)
    {
      return 1;
    }
      return 0;
  }

  function viewService($s_id)
  {
                  $query = $this->db->get_where('service', array('s_id' => $s_id));
                  return $query->row_array();
  }
}
?>
