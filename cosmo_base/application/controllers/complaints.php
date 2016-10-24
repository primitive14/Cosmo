<?php
class Complaints extends CI_Controller{

  public function index()
  {

    $data['title'] = 'Complaint Database';
    $this -> load -> model('complaint');

    $data['complaints'] = $this -> complaint -> GetTicketsC();

  }

  public function view ($TktNo = NULL)
  {
    $this -> load -> model ('complaint');
    $data['complaint_item'] = $this -> complaint -> GetTicketsC($TktNo);

    if (empty($data['complaint_item']))
    {
      show_404();
    }

    $data['title'] = $data['complaint_item']['ticket_no'];
  }

  public function createticket(){

    $this->load->helper('form');
    $this->load->helper('url');

      $data['title'] = 'Create new ticket';
      if(isset($_SESSION['is_loggedin'])&& $_SESSION['is_loggedin'])
      {
        if ($_POST)
        {
          $TktNo = $_SESSION['userID'];
          $TktNo .= $this -> input -> post('complaint_id');
          $TktNo .= date('His', time());

          $complaintData = array(
            $TktNo,
            $this -> input -> post('complaint_id'),
            $this -> input -> post('comment'),
            1,
            date('y-m-d', time()),
            date('H:i:s'),
            NULL,
            NULL,
            $_SESSION['userID']
          );

          $this -> load -> model('complaint');
          $val = $this -> complaint -> insert_ticket($complaintData);
          if ($val['error'] == false)
          {
            redirect (base_url() . 'complaints');
          }

          else
          {
            $this -> load -> helper('form');
            $data ['title'] = 'Complaint';
            $data ['message'] = $val ['error_message'];

          }
    }
    else
    {
      $this -> load -> view ('templates/header', $data);
      $this -> load -> view ('complaints/createticket', $data);
      $this -> load -> view ('templates/footer');
    }
  }
    else
    {
      redirect (base_url());
    }
 }






}

?>
