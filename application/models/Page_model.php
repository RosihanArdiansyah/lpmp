<?php

class Page_model extends CI_Model{
	
	function get_pages(){
		$query = $this->db->get('tbl_pages');
		return $query;
	}

	function get_page_perpage($offset,$limit){
		$this->db->select('tbl_pages.*, user_name,user_photo');
		$this->db->from('tbl_pages');
		$this->db->join('tbl_user', 'page_user_id=user_id','left');
		$this->db->order_by('page_date', 'DESC');
		$this->db->limit($limit,$offset);
		$query = $this->db->get();
		return $query;
	}

	function get_page_by_slug($slug){
		$query = $this->db->query("SELECT tbl_pages.*,user_name FROM tbl_pages 
			LEFT JOIN tbl_user ON page_user_id=user_id
			WHERE page_slug='$slug' GROUP BY page_id LIMIT 1");
		return $query;
	}


    function search_page($query){
    	$result = $this->db->query("SELECT tbl_pages.*,user_name,user_photo FROM tbl_pages
			LEFT JOIN tbl_user ON page_user_id=user_id
			WHERE page_title LIKE '%$query%' LIMIT 12");
    	return $result;
    }
}