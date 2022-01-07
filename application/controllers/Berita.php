<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {


    //untuk berita, post_category_id = 1
    var $category_id = 1;


	function __construct(){
        parent::__construct();
		$this->load->model('Post_model','post_model');
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('Home_model','home_model');
		$this->load->model('Site_model','site_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
    }
    



	function index(){
		
		$category = $this->category_id;
		$jum=$this->post_model->get_posts($category);
	    $page=$this->uri->segment(3);
	    if(!$page):
	        $off = 0;
	    else:
	        $off = $page;
	    endif;
	    $limit=5;
        $offset = $off > 0 ? (($off - 1) * $limit) : $off;
	    $config['base_url'] = base_url() . 'berita/page/';
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
		$data['data']=$this->post_model->get_post_perpage($category,$offset,$limit);
		//print_r($this->db->last_query()); 
		$data['judul']="Berita";
        
        
        if(empty($this->uri->segment(3))){
			$next_page=2;
			$data['canonical']=site_url('berita');
			$data['url_prev']="";
		}elseif($this->uri->segment(3)=='1'){
			$next_page=2;
			$data['canonical']=site_url('berita');
			$data['url_prev']=site_url('berita');
		}elseif($this->uri->segment(3)=='2'){
			$next_page=$this->uri->segment(3)+1;
			$prev_page=$this->uri->segment(3)-1;
			$data['canonical']=site_url('berita/page/'.$this->uri->segment(3));
			$data['url_prev']=site_url('berita/page/'.$prev_page);
		}else{
			$next_page=$this->uri->segment(3)+1;
			$prev_page=$this->uri->segment(3)-1;
			$data['canonical']=site_url('berita/page/'.$this->uri->segment(3));
			$data['url_prev']=site_url('berita/page/'.$prev_page);
		}
		
		// $data['url_next']=site_url('post/page/'.$next_page);
		// $data['populer_post'] = $this->post_model->get_popular_post();
		$site_info = $this->db->get('tbl_site', 1)->row();
		
		
		$data['icon'] = $site_info->site_favicon;
		$data['site_title'] = "Daftar Berita LPMP Sulawesi Selatan";
		$data['site_image'] = $site_info->site_logo_big;
		$data['site_name'] = $site_info->site_name;
		$data['site_twitter'] = $site_info->site_twitter;
		$data['site_facebook'] = $site_info->site_facebook;
		$query = $this->db->query("SELECT GROUP_CONCAT(category_name) AS category_name FROM tbl_category")->row_array();
		$data['meta_description'] = $query['category_name'];
		$data['category'] = $query['category_name'];
		$data['description'] = "Daftar Berita LPMP Sulawesi Selatan";
		$data['link_cannonical'] = site_url('berita');
		$data['title'] = "Daftar Berita LPMP Sulawesi Selatan";
		$data['url'] = site_url('berita');
		$data['image'] = $site_info->site_logo_big;
		$v['logo'] =  $site_info->site_logo_header;
		$data['header'] = $this->load->view('header',$v,TRUE);
        $data['main_view'] = 'berita_view';
        // $this->load->view('blog_detail_view',$x);
        $this->load->view('template_main',$data);
	}




	function detail($slug){
		
        $query=$this->post_model->get_post_by_slug($this->category_id,$slug);
        
		if($query->num_rows() > 0){
		    $q=$query->row_array();
    		$kode=$q['post_id'];
    		$data['title']=$q['post_title'];
    		if(empty($q['post_description'])){
    			$data['description'] = strip_tags(word_limiter($q['post_contents'],25));	
    		}else{
    			$data['description'] = $q['post_description'];
            }
            $data['site_title'] = $q['post_title'];
    		$data['slug']=$q['post_slug'];
    		$data['content']=$q['post_contents'];
    		$data['views']=$q['post_views'];
    		$data['comment']=$q['comment_total'];
    		$data['author']=$q['user_name'];
    		$data['category']=$q['category_name'];
    		$data['category_slug']=$q['category_slug'];
            $data['tanggal']=$q['post_date'];
    		$data['tags']=$q['post_tags'];
    		$data['post_id']=$kode;
            $category_id = $q['category_id'];
            
			$this->post_model->count_views($kode);
			
            $site_info = $this->db->get('tbl_site', 1)->row();
			$data['icon'] = $site_info->site_favicon;
			$v['logo'] =  $site_info->site_logo_header;
			$data['link_cannonical'] = site_url('berita');
			$data['url'] = site_url('berita/'.$q['post_slug']);
			$data['site_twitter'] = $site_info->site_twitter;
			$data['site_facebook'] = $site_info->site_facebook;
			$data['site_name'] = site_url();
			$data['header'] = $this->load->view('header',$v,TRUE);
			$data['image'] = $q['post_image'];
            $data['main_view'] = 'berita_detail_view';
            // $this->load->view('blog_detail_view',$x);
            $this->load->view('template_main',$data);
		}else{
            
            #redirect('blog');
		}
			
	}

	

}