<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {



	function __construct(){
        parent::__construct();
		$this->load->model('Kegiatan_model','kegiatan_model');
		$this->load->model('Site_model','site_model');
        $this->load->helper('text');
        error_reporting(0);
    }
    



	function index(){
		$jum=$this->kegiatan_model->get_kegiatan();
	    $page=$this->uri->segment(3);
	    if(!$page):
	        $off = 0;
	    else:
	        $off = $page;
	    endif;
	    $limit=5;
        $offset = $off > 0 ? (($off - 1) * $limit) : $off;
	    $config['base_url'] = base_url() . 'agenda/page/';
	    $config['total_rows'] = $jum->num_rows();
	    $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['num_links'] = 3;
	    $config['use_page_numbers']=TRUE;

	    //Tambahan untuk styling
        $config['full_tag_open']    = '<div class="pagenavbar"><div class="pagenavi" data-posts="">';
        $config['full_tag_close']   = '</div></div>';
        $config['num_tag_open']     = '';
        $config['num_tag_close']    = '';
        $config['cur_tag_open']     = '<span class="page-numbers current">';
        $config['cur_tag_close']    = '</span>';

        // 
        $config['next_tag_open']    = '';
        $config['next_tagl_close']  = '>';
        $config['prev_tag_open']    = '';
        $config['prev_tagl_close']  = 'Next';
        $config['first_tag_open']   = '';
        $config['first_tagl_close'] = '';
        $config['last_tag_open']    = '';
        $config['last_tagl_close']  = '';

	    $config['first_link'] = '<<';
	    $config['last_link'] = '>>';
	    $config['next_link'] = '>';
        $config['prev_link'] = '<';
        $config['attributes'] = array('class' => 'page-numbers');
	    $this->pagination->initialize($config);
	    $data['page'] =$this->pagination->create_links();
		$data['data']=$this->kegiatan_model->get_kegiatan_perpage($offset,$limit);
		//print_r($this->db->last_query()); 
		$data['judul']="Kegiatan";
        
        
        if(empty($this->uri->segment(3))){
			$next_page=2;
			$data['canonical']=site_url('agenda');
			$data['url_prev']="";
		}elseif($this->uri->segment(3)=='1'){
			$next_page=2;
			$data['canonical']=site_url('agenda');
			$data['url_prev']=site_url('agenda');
		}elseif($this->uri->segment(3)=='2'){
			$next_page=$this->uri->segment(3)+1;
			$prev_page=$this->uri->segment(3)-1;
			$data['canonical']=site_url('agenda/page/'.$this->uri->segment(3));
			$data['url_prev']=site_url('agenda/page/'.$prev_page);
		}else{
			$next_page=$this->uri->segment(3)+1;
			$prev_page=$this->uri->segment(3)-1;
			$data['canonical']=site_url('agenda/page/'.$this->uri->segment(3));
			$data['url_prev']=site_url('agenda/page/'.$prev_page);
		}
		
		// $data['url_next']=site_url('post/page/'.$next_page);
		// $data['populer_post'] = $this->kegiatan_model->get_popular_post();
		$site_info = $this->db->get('tbl_site', 1)->row();
		
		
		$data['icon'] = $site_info->site_favicon;
		$data['site_title'] = "Agenda Kegiatan LPMP Sulawesi Selatan";
		$data['site_image'] = $site_info->site_logo_big;
		$data['site_name'] = $site_info->site_name;
		$data['site_twitter'] = $site_info->site_twitter;
		$data['site_facebook'] = $site_info->site_facebook;
		$query = $this->db->query("SELECT GROUP_CONCAT(category_name) AS category_name FROM tbl_category")->row_array();
		$data['meta_description'] = $query['category_name'];
		$data['category'] = $query['category_name'];
		$data['description'] = "Agenda Kegiatan LPMP Sulawesi Selatan";
		$data['link_cannonical'] = site_url('agenda');
		$data['title'] = "Agenda Kegiatan LPMP Sulawesi Selatan";
		$data['url'] = site_url('artikel');
		$v['logo'] =  $site_info->site_logo_header;
		$data['header'] = $this->load->view('header',$v,TRUE);
		$data['image'] = $site_info->site_logo_big;


        $data['main_view'] = 'kegiatan_view';
        // $this->load->view('blog_detail_view',$x);
        $this->load->view('template_main',$data);
	}




	function detail($slug){
		
        $query=$this->kegiatan_model->get_kegiatan_by_slug($slug);
        
		if($query->num_rows() > 0){
		    $q=$query->row_array();
    		$kode=$q['kegiatan_id'];
    		$data['title']=$q['kegiatan_title'];
    		
    		$data['description'] = $q['kegiatan_title'];
            
            
    	
    		$data['slug']=$q['kegiatan_slug'];
    		$data['content']=$q['kegiatan_contents'];
    		$data['author']=$q['user_name'];
    		$data['date']=tanggal($q['kegiatan_mulai_tanggal']);
			$data['kegiatan_id']=$kode;
			
			$site = $this->site_model->get_site_data()->row_array();
            $site_info = $this->db->get('tbl_site', 1)->row();
			$data['icon'] = $site_info->site_favicon;
			$data['link_cannonical'] = site_url('agenda');
			$data['site_title'] = $q['kegiatan_title'];
			$data['url'] = site_url('agenda/'.$q['kegiatan_slug']);
			$data['site_twitter'] = $site['site_twitter'];
			$data['site_facebook'] = $site['site_facebook'];
			$data['site_name'] = site_url();
			$data['image'] = $site_info->site_logo_big;
			$v['logo'] =  $site_info->site_logo_header;
			$data['header'] = $this->load->view('header',$v,TRUE);
            $data['main_view'] = 'kegiatan_detail_view';
            // $this->load->view('blog_detail_view',$x);
            $this->load->view('template_main',$data);
		}else{
            
            redirect('kegiatan');
		}
			
	}


	

}