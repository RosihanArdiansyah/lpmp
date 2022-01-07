<?php
class Agenda_model extends CI_Model{

	//BACKEND
	function get_all_agenda(){
		$result = $this->db->query("SELECT *FROM tbl_kegiatan ORDER BY kegiatan_id DESC");
		return $result;
	}

	function get_agenda_by_id($agenda_id){
		$result = $this->db->query("SELECT a.*, DATE_FORMAT(kegiatan_mulai_tanggal, '%Y-%m-%dT%H:%i:%s') AS tanggal_mulai,
		DATE_FORMAT(kegiatan_selesai_tanggal, '%Y-%m-%dT%H:%i:%s') AS tanggal_selesai FROM tbl_kegiatan a WHERE kegiatan_id='$agenda_id'");
		return $result;
	}

	

	function delete_agenda($agenda_id){
		$this->db->where('kegiatan_id', $agenda_id);
		$this->db->delete('tbl_kegiatan');
	}
	
	//END BACKEND

}