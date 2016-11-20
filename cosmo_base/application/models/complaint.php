<?php

class Complaint extends CI_Model{

  public function __construct()
  {
    $this->load->database();
  }

  public function GetTicketsC($TktNo=NULL){
      if($TktNo==NULL){
        $query=$this->db->get('ts2');
        return $query->result_array();
      }
      $query=$this-> db ->get_where('ts2', array('ticket_no' => $TktNo));
      return $query->row_array();
  }
  function insert_ticket($complaintData)
  {
    $sqlQuery = "INSERT INTO ts2 VALUES (";
    $i = 0;
    foreach ($complaintData as $val)
    {
      if ($i != 0)
        $sqlQuery .= ',';

      if ($i == 1 || $i == 3)
        $sqlQuery .= $val;
      else
        $sqlQuery .= "'" . $val . "'";

      ++$i;
    }
    $sqlQuery .= ');';

    if (!$this->db->query($sqlQuery))
    {
      $error = $this -> db -> error();
      $val = array('error' => TRUE, 'error_message' => $error['message']);
      return $val;
    }
    else
    {
      $val = array ('error' => FALSE);
      return $val;
    }
  }


}
?>
