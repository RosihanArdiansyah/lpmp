<?php
class Page_model extends CI_Model{

	//BACKEND
	function get_all_page(){
		$result = $this->db->query("SELECT 
            page_id,
            page_slug,
            page_title,
            page_image,
            DATE_FORMAT(page_date,'%d %M %Y') AS tanggal
            FROM tbl_pages ORDER BY page_id DESC");
		return $result;
	}

	function get_page_by_id($page_id){
		$result = $this->db->query("SELECT * FROM tbl_pages WHERE page_id='$page_id'");
		return $result;
	}

	

	function delete_page($page_id){
		$this->db->where('page_id', $page_id);
		$this->db->delete('tbl_pages');
	}
	
	//END BACKEND

}