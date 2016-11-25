<?php

class Test extends CI_Controller {

  public function __construct()
  {
       parent::__construct();
       $this->load->library('unit_test');
  }
public function index(){



  $test1 ="admin";
  $expected_result1 = "admin";
  $test_name = 'Checking admin username';
  $this->unit->run($test1, $expected_result1, $test_name);

  $test2 ="password";
  $expected_result2 = "password";
  $test_name = 'Checking admin password';
  $this->unit->run($test2, $expected_result2, $test_name);

  $test3 =45;
  $expected_result3 = 45;
  $test_name = 'Checking News id';
  $this->unit->run($test2, $expected_result2, $test_name);

  $test4 ="admin";
  $expected_result4 = "admin";
  $test_name = 'Checking News update';
  $this->unit->run($test2, $expected_result2, $test_name);

  $test5=5;
  $expected_result5=5;
  $test_name= "Complaint id test";
  $this->unit->run($test5,$expected_result5,$test_name);

  $test3 ="admin";
  $expected_result3 = "admin";
  $test_name = 'Check complaint update';
  $this->unit->run($test2, $expected_result2, $test_name);

  $test3 =5;
  $expected_result3 = 5;
  $test_name = 'Checking service id';
  $this->unit->run($test3, $expected_result3, $test_name);


  $test_name="checking signup";
  $this->unit->run($test5,$expected_result5,$test_name);


  $test_name="checking ";
  $this->unit->run($test5,$expected_result5,$test_name);


  $this->load->view('test/test_report');
}
}
?>
