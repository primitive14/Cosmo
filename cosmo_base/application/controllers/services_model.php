<?php
class Services_model extends CI_Controller
{

  public function index()
  {
    // TODO all the services logged by the users.

    // Load the database and services model for get services.
    // depending on admin status show the data.
    $data['title'] = 'services Log';

    $this -> load -> model('service');
    $data['services'] = $this -> service -> GetTickets();
    $this -> load -> view ('templates/header', $data);
    $this -> load -> view ('services/index', $data);
    $this -> load -> view ('templates/footer', $data);

  }

  public function view ($TktNo = NULL)
  {
    $this -> load -> model ('service');
    $data['service_item'] = $this -> service -> GetTickets($TktNo);
    if (empty($data['service_item']))
    {
      show_404();
    }

    $data['title'] = $data['service_item']['ticket_no'];

    $this -> load -> view ('templates/header', $data);
    $this -> load -> view ('services/view', $data);
    $this -> load -> view ('templates/footer');


  }
  public function createticket()
  {
    // Creating a new ticket.
     $this -> load -> helper ('url');
     $this -> load -> helper ('form');

    $data['title'] = 'Create new ticket';
    //echo time();
    if (isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin'])
    {
      if ($_POST)
      {
        // Insert service.

         // Generating ticket number.
        $TktNo = $_SESSION['userID'];
        $TktNo .= $this -> input -> post('service_id');
        $TktNo .= date('His', time());

        $serviceData = array(
          $TktNo,
          $this -> input -> post('service_id'),
          $this -> input -> post('comment'),
          1,
          date('y-m-d', time()),
          date('H:i:s'),
          NULL,
          NULL,
          $_SESSION['userID']
        );

        $this -> load -> model('service');
        $val = $this -> service -> insert_ticket($serviceData);

        if ($val['error'] == false)
        {
          redirect (base_url() . 'services');
        }

        else
        {
          $this -> load -> helper('form');
          $data ['title'] = 'service';
          $data ['message'] = $val ['error_message'];

          $this -> load -> view ('templates/header', $data);
          $this -> load -> view ('services/createticket');
          $this -> load -> view ('templates/footer');

        }
      }

      else
      {
        // Load form
        $this -> load -> view ('templates/header', $data);
        $this -> load -> view ('services/createticket', $data);
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
