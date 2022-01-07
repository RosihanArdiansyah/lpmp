<?php
class Agenda extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('halamaninputnya');
            redirect($url);
        };
		$this->load->model('backend/Tag_model','tag_model');
		$this->load->model('backend/Category_model','category_model');
		$this->load->model('backend/Post_model','post_model');
		$this->load->model('backend/Agenda_model','agenda_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$x['data'] = $this->agenda_model->get_all_agenda();
		$this->load->view('backend/v_agenda',$x);
	}

	function add_new(){
		$this->load->view('backend/v_add_agenda');
	}

	function get_edit(){
		$agenda_id = $this->uri->segment(4);
		$x['data'] = $this->agenda_model->get_agenda_by_id($agenda_id);
		$this->load->view('backend/v_edit_agenda',$x);
	}

	function publish(){
		
		$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
		$contents =htmlspecialchars($this->input->post('contents',TRUE),ENT_QUOTES);
		
		$date_mulai = $this->input->post('tanggal_mulai');
		$tanggal_mulai = substr($date_mulai,0,10);
		$jam_mulai    = substr($date_mulai,11,5);
		
		$tanggal_kegiatan_mulai =  $tanggal_mulai.' '.$jam_mulai.':00';
		
		
		$date_selesai = $this->input->post('tanggal_selesai');
		$tanggal_selesai = substr($date_selesai,0,10);
		$jam_selesai    = substr($date_selesai,11,5);
		
		$tanggal_kegiatan_selesai =  $tanggal_selesai.' '.$jam_selesai.':00';
		
		$preslug  = strip_tags(htmlspecialchars($this->input->post('slug',TRUE),ENT_QUOTES));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
		$trim     = trim($string);
		$praslug  = strtolower(str_replace(" ", "-", $trim));
	    $aktif    = $this->input->post('aktif');
		$dataKegiatan = array();
		




		$query = $this->db->get_where('tbl_kegiatan', array('kegiatan_slug' => $praslug));
		if($query->num_rows() > 0){
			$uniqe_string = rand();
			$slug = $praslug.'-'.$uniqe_string;
		}else{
			$slug = $praslug;
		}

        
		#echo $date;
		$dataKegiatan = array(
			'kegiatan_title' => $title,
			'kegiatan_slug'  => $slug,
			'kegiatan_aktif' => $aktif,
			'kegiatan_contents' => $contents,
			'kegiatan_mulai_tanggal' => $tanggal_kegiatan_mulai,
			'kegiatan_selesai_tanggal' => $tanggal_kegiatan_selesai,
	        'kegiatan_user_id'	   => $this->session->userdata('id')
		);
		
// 		echo var_dump($dataKegiatan);

		$this->db->insert('tbl_kegiatan', $dataKegiatan);
		// $this->post_model->save_post($title,$contents,$category,$slug,$image,$document,$tags,$description);
		echo $this->session->set_flashdata('msg','success');
		redirect('halamanbelakang/agenda');

	}

	function edit(){

		$id 	  = $this->input->post('kegiatan_id',TRUE);
		$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
		$contents =htmlspecialchars($this->input->post('contents',TRUE),ENT_QUOTES);
		
		$date_mulai = $this->input->post('tanggal_mulai');
		$tanggal_mulai = substr($date_mulai,0,10);
		$jam_mulai    = substr($date_mulai,11,5);
		
		$tanggal_kegiatan_mulai =  $tanggal_mulai.' '.$jam_mulai.':00';
		
		
		$date_selesai = $this->input->post('tanggal_selesai');
		$tanggal_selesai = substr($date_selesai,0,10);
		$jam_selesai    = substr($date_selesai,11,5);
		
		$tanggal_kegiatan_selesai =  $tanggal_selesai.' '.$jam_selesai.':00';
		
		$preslug  = strip_tags(htmlspecialchars($this->input->post('slug',TRUE),ENT_QUOTES));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
		$trim     = trim($string);
		$praslug  = strtolower(str_replace(" ", "-", $trim));
	    $aktif    = $this->input->post('aktif');
		$dataKegiatan = array();
		




		$query = $this->db->get_where('tbl_kegiatan', array('kegiatan_slug' => $praslug));
		if($query->num_rows() > 0){
			$uniqe_string = rand();
			$slug = $praslug.'-'.$uniqe_string;
		}else{
			$slug = $praslug;
		}
		
		
		
		$dataKegiatan = array(
			'kegiatan_title' => $title,
			'kegiatan_slug'  => $slug,
			'kegiatan_aktif' => $aktif,
			'kegiatan_contents' => $contents,
			'kegiatan_mulai_tanggal' => $tanggal_kegiatan_mulai,
			'kegiatan_selesai_tanggal' => $tanggal_kegiatan_selesai,
	        'kegiatan_user_id'	   => $this->session->userdata('id')
		);
		

		

		$this->db->where('kegiatan_id', $id);
		$this->db->update('tbl_kegiatan', $dataKegiatan);


		echo $this->session->set_flashdata('msg','info');
		redirect('halamanbelakang/agenda');

	}

	function delete(){
		$kegiatan_id = $this->input->post('id',TRUE);
		$this->agenda_model->delete_agenda($kegiatan_id);
		echo $this->session->set_flashdata('msg','success-delete');
		redirect('halamanbelakang/agenda');
	}

	


}
