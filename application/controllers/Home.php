<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('Home_model','home_model');
		$this->load->model('Site_model','site_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
	}
	
	
	function index(){
		//$this->output->enable_profiler(TRUE);
		$site = $this->site_model->get_site_data()->row_array();
		$data['site_name'] = $site['site_name'];
		$data['site_title'] = $site['site_title'];
		$data['site_desc'] = $site['site_description'];
		$data['site_twitter'] = $site['site_twitter'];
		$data['site_image'] = $site['site_logo_big'];
		$data['post_pengumuman'] = $this->home_model->get_pengumuman_header();
		$data['post_headline_slider'] = $this->home_model->get_headline_slider();
		$data['post_berita']	= $this->home_model->get_post_berita();
		$data['post_artikel']	= $this->home_model->get_post_artikel();
		$data['post_kegiatan'] = $this->home_model->get_kegiatan();

		// $data['post_header'] = $this->home_model->get_post_header();
		// $data['post_header_2'] = $this->home_model->get_post_header_2();
		// $data['post_header_3'] = $this->home_model->get_post_header_3();
		// $data['latest_post'] = $this->home_model->get_latest_post();
		// $data['popular_post'] = $this->home_model->get_popular_post();
		// $home = $this->db->get('tbl_home',1)->row();
		// $data['caption_1'] = $home->home_caption_1;
		// $data['caption_2'] = $home->home_caption_2;
		// $data['bg_header'] = $home->home_bg_heading;
		// $data['bg_testimoni'] = $home->home_bg_testimonial;
		// $data['testimonial'] = $this->db->get('tbl_testimonial');
		
		$site_info = $this->db->get('tbl_site', 1)->row();
		
		
		$data['icon'] = $site_info->site_favicon;
		$data['site_image'] = $site_info->site_logo_big;
		$data['site_name'] = $site_info->site_name;
		$data['site_twitter'] = $site_info->site_twitter;
		$data['site_facebook'] = $site_info->site_facebook;
		$query = $this->db->query("SELECT GROUP_CONCAT(category_name) AS category_name FROM tbl_category")->row_array();
		$data['meta_description'] = $query['category_name'];
		$data['category'] = $query['category_name'];
		$data['description'] = "Lembaga Penjaminan Mutu Pendidikan Sulawesi Selatan";
		$data['link_cannonical'] = site_url();
		$data['title'] = "Lembaga Penjaminan Mutu Pendidikan Sulawesi Selatan";
		$data['url'] = site_url();
		$data['image'] = $site_info->site_logo_big;




		$data['main_view'] = 'home_view';
		$data['kanan'] = $this->load->view('content_kanan',$data,TRUE);
		$v['logo'] =  $site_info->site_logo_header;
		$data['header'] = $this->load->view('header',$v,TRUE);
		// $data['footer'] = $this->load->view('footer','',TRUE);
		$this->load->view('template_main',$data);
	}
	
	function pinisi()
	{
	   // $url = "http://pinisi.lpmpsulsel.net/";
	   // redirect($url);
	    
	    #header('Refresh:5; url= '. $url.''); 
        #echo "Anda akan dialihkan ke halaman http://pinisi.lpmpsulsel.net/";
        
        // echo '<script language="javascript">' .
        //         'alert("Anda akan dialihkan ke halaman http://pinisi.lpmpsulsel.net/");' .
        //         'setTimeout(function(){ window.location.href = "http://pinisi.lpmpsulsel.net/"; }, 3000);' .
        //         '</script>';
        
        $this->load->view('pinisi');

	}
	

	
}