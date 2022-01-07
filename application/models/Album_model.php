<?php

class Album_model extends CI_Model{
	
	function get_album(){
		$this->db->select('tbl_album.*');
		$this->db->from('tbl_album');
		$query = $this->db->get();
		return $query;
	}

	function get_album_perpage($offset,$limit){
		$this->db->select('tbl_album.*, user_name,user_photo');
		$this->db->from('tbl_album');
		$this->db->join('tbl_user', 'album_user_id=user_id','left');
		$this->db->order_by('album_tanggal_add', 'DESC');
		$this->db->limit($limit,$offset);
		$query = $this->db->get();
		return $query;
	}
	

	function get_album_by_slug($slug){
		$query = $this->db->query("SELECT tbl_album.*,user_name,COUNT(comment_id) AS comment_total FROM tbl_album 
			LEFT JOIN tbl_user ON album_user_id=user_id
			LEFT JOIN tbl_comment ON album_id=comment_post_id
			WHERE album_slug='$slug' GROUP BY album_id LIMIT 1");
		return $query;
	}

	function get_gallery($id) {
		$this->db->select('tbl_galeri.*');
		$this->db->from('tbl_galeri');
		$this->db->where('galeri_album_id',$id);
		$query = $this->db->get();
		return $query;
	}

	

	// function count_views($kode){
    //     $user_ip=$_SERVER['REMOTE_ADDR'];
    //     $cek_ip=$this->db->query("SELECT * FROM tbl_post_views WHERE view_ip='$user_ip' AND view_post_id='$kode' AND DATE(view_date)=CURDATE()");
    //     if($cek_ip->num_rows() <= 0){
    //         $this->db->trans_start();
	// 			$this->db->query("INSERT INTO tbl_post_views (view_ip,view_post_id) VALUES('$user_ip','$kode')");
	// 			$this->db->query("UPDATE tbl_posts SET post_views=post_views+1 where post_id='$kode'");
	// 		$this->db->trans_complete();
	// 		if($this->db->trans_status()==TRUE){
	// 			return TRUE;
	// 		}else{
	// 			return FALSE;
	// 		}
    //     }
    // }

    

   
}