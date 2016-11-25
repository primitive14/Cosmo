<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Complaint_model extends CI_Model
{
  function __construct()
  {
       parent::__construct();
       $this->load->database();
  }

  function createTicket($h_no,$type,$dscrip,$status)
  {
      $dump = array (
      'h_no' => $h_no,
      'type' => $type,
      'description' => $dscrip,
      'status' => $status
      );

      if($this->db->insert('complaint',$dump))
      {
        return 1;
      }
        return 0;
  }
  function updateTicket($status,$c_id)
  {
    $dump= array(
      'status' => $status
    );

    $this->db->where('c_id', $c_id);
    $query=$this->db->update('complaint', $dump);

    if($query)
    {
      return 1;
    }
      return 0;
  }

  function viewComplaint($c_id)
  {
                  $query = $this->db->get_where('complaint', array('c_id' => $c_id));
                  return $query->row_array();
  }

  function get_complaint()
  {
    $status=0;
    $query = $this->db->get_where('complaint',array('status' => $status));
    return $query->result_array();
  }
  function get_complaint_id($c_id)
  {
    $query = $this->db->get_where('news', array('c_id' => $c_id));
    return $query->row_array();
  }
}
?>
