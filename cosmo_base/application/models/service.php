<?php
  // HouseId + Service Attribute + Time Stamp
  // service Insert
  // 1 - User insert service id comment, hidden ticket no. to generate
  // Take the sys current date and time. Approve status 1.
  // Status 1 - service logged.
  // Status 2 - Admin action taken.
  // Status 3 - Completed.
  // Status 4 - service cancelled.

	class Service extends CI_Model{

		public function __construct()
		{
			$this->load->database();
		}

		function GetTickets($TktNo = NULL)
		{
			if ($TktNo == NULL)
			{
				$query = $this -> db -> get('ts1');
				return $query -> result_array();
			}

			$query = $this -> db -> get_where ('ts1', array('ticket_no' => $TktNo));
			return $query -> row_array();
		}

    function insert_ticket($serviceData)
    {
      $sqlQuery = "INSERT INTO ts1 VALUES (";
			$i = 0;
			foreach ($serviceData as $val)
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
