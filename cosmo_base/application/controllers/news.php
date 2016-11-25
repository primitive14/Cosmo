<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller
{
  public function __construct()
  {
       parent::__construct();
       $this->load->model('news_model');
  }
/*  public function index()
  {
    if()
    {

    }else {
      redirect('login/index');
    }
  }*/

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
    if($this->auth->check_login() && $this->auth->check_isadmin())
    {
      $n_id=$this->input->post('n_id');
      $title=$this->input->post('title');
      $subject=$this->input->post('subject');
      $news=$this->input->post('news');

      if($this->input->post('btn_news') == "Update")
      {
        $result=$this->news_model->editNews($title,$subject,$news);

        if($result)
        {
          $this->session->set_flashdata('msg','News Updated');
          redirect('news/viewNews/'.$n_id);
        }else{
          $this->session->set_flashdata('msg','News Update Failed');
          redirect('news/viewNews/'.$n_id);
        }
      }else {
        echo "error";
      }
    }else {
      redirect('login/index');
    }

  }
  public function viewNews($n_id = NULL)
  {
    if($this->auth->check_login() && $this->auth->check_isadmin())
    {
      $result = $this->news_model->get_news_id($n_id);
      if (empty($result))
      {
              show_404();
      }

      $data['vn'] = $result;
      $this->load->view('module/news_edit', $data);
    }else{
      redirect('login/index');
    }
  }
  public function viewENews($n_id = NULL)
  {
    if($this->auth->check_login())
    {
      $result = $this->news_model->get_news_id($n_id);
      if (empty($result))
      {
              show_404();
      }

      $data['vn'] = $result;
      $this->load->view('module/news_view', $data);
    }else{
      redirect('login/index');
    }
  }

}
