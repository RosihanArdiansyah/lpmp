<?php
class Album_model extends CI_Model{

	//BACKEND
	function get_all_album(){
		$result = $this->db->query("SELECT 
			album_id, 
			album_nama,
			album_slug, 
			album_deskripsi,
			album_image, 
			album_aktif, 
			album_headline, 
			album_user_id, 
			DATE_FORMAT(album_tanggal_add,'%d %M %Y') AS tanggal FROM tbl_album ORDER BY album_id DESC");
		return $result;
	}

	function get_album_by_id($album_id){
		$result = $this->db->query("SELECT * FROM tbl_album WHERE album_id='$album_id'");
		return $result;
	}

	
	

	function delete_album($album_id){
		$this->db->where('album_id', $album_id);
		$this->db->delete('tbl_album');
	}
	
	//END BACKEND

}