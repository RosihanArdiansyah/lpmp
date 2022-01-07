<?php

class Kegiatan_model extends CI_Model{
	
	function get_kegiatan(){
		$this->db->select('tbl_kegiatan.*');
		$this->db->from('tbl_kegiatan');
		$query = $this->db->get();
		return $query;
	}

	function get_kegiatan_perpage($offset,$limit){
		$this->db->select('tbl_kegiatan.*, user_name,user_photo');
		$this->db->from('tbl_kegiatan');
		$this->db->join('tbl_user', 'kegiatan_user_id=user_id','left');
		$this->db->order_by('kegiatan_mulai_tanggal', 'DESC');
		$this->db->limit($limit,$offset);
		$query = $this->db->get();
		return $query;
	}

	function get_kegiatan_by_slug($slug){
		$query = $this->db->query("SELECT tbl_kegiatan.*,user_name
            FROM tbl_kegiatan 
			LEFT JOIN tbl_user ON kegiatan_user_id=user_id
			WHERE kegiatan_slug='$slug' GROUP BY kegiatan_id LIMIT 1");
		return $query;
	}

	
}