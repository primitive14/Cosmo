<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news_model extends CI_Model
{
     function __construct()
     {
          parent::__construct();
          $this->load->database();
     }
     function createNews($title,$subject,$news,$h_no)
     {
       $dump= array (
         'h_no' => $h_no,
         'title'=> $title,
         'subject'=>$subject,
         'news' => $news
       );

       if($this->db->insert('news',$dump))
       {
         return 1;
       }
         return 0;
     }
     function editNews($title,$subject,$news,$n_id)
     {
       $dump= array (
         'title'=> $title,
         'subject'=>$subject,
         'news' => $news
       );
       $this->db->where('n_id', $n_id);
       $query=$this->db->update('news', $dump);

       if($query)
       {
         return 1;
       }
         return 0;
     }
     function get_news()
     {
       $query = $this->db->get('news');
       return $query->result_array();
     }
     function get_news_id($n_id)
     {
       $query = $this->db->get_where('news', array('n_id' => $n_id));
       return $query->row_array();
     }
}
