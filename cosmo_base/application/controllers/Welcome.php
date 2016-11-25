<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
			 parent::__construct();
			 $this->load->model('news_model');
	}

	public function index()
	{
		if($this->auth->check_login())
		{
			$result=$this->news_model->get_news();

			if($result)
			{
				$data['news']=$result;
				$this->load->view('module/dashboard_view',$data);
			}else{
				echo "error";
			}
		}
		else {
			redirect('login/index');
		}
	}
	/*public function index()
	{
		$this->load->view('module/dashboard_view2');
	}*/
}
?>
