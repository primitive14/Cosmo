<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller
{
  public function __construct()
  {
       parent::__construct();
       $this->load->model('news_model');
  }

  public function createNews()
  {
    if($this->auth->check_login() && $this->auth->check_isadmin())
    {
      $title=$this->input->post('title');
      $subject=$this->input->post('subject');
      $news=$this->input->post('news');
      $h_no=$this->session->h_no;

      $this->form_validation->set_rules("title", "Title", "trim|required");
      $this->form_validation->set_rules("subject", "Subject","trim|required");
      $this->form_validation->set_rules("news","News","trim|required");


      if ($this->form_validation->run() == FALSE)
      {
           $this->load->view('module/news_create_view');
      }

      else
      {
        if ($this->input->post('btn_news') == "News")
        {
          $result= $this->news_model->createNews($title,$subject,$news,$h_no);

          if($result)
          {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">News Created</div>');
            $this->load->view('module/news_create_view');
          }else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Posting Failed</div>');
            $this->load->view('module/news_create_view');
          }
        }
        else{
          redirect('module/news_create_view');
        }
      }
    }else{
      redirect('login/index');
    }
  }
  public function editNews()
  {

  }
  public function viewNews($n_id = NULL)
  {
    $result = $this->news_model->get_news($slug);
    if (empty($data['news_item']))
    {
            show_404();
    }

    $data['vn'] = $result;
    $this->load->view('module/news_view', $data);
  }


}
