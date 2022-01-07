<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Page_model','page_model');
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('Home_model','home_model');
		$this->load->model('Site_model','site_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
    }
    



	function index(){
		$jum=$this->page_model->get_pages();
	    $page=$this->uri->segment(3);
	    if(!$page):
	        $off = 0;
	    else:
	        $off = $page;
	    endif;
	    $limit=5;
        $offset = $off > 0 ? (($off - 1) * $limit) : $off;
	    $config['base_url'] = base_url() . 'post/page/';
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
		$data['data']=$this->page_model->get_page_perpage($offset,$limit);
		//print_r($this->db->last_query()); 
		$data['judul']="Berita";
        
        
        // if(empty($this->uri->segment(3))){
		// 	$next_page=2;
		// 	$data['canonical']=site_url('post');
		// 	$data['url_prev']="";
		// }elseif($this->uri->segment(3)=='1'){
		// 	$next_page=2;
		// 	$data['canonical']=site_url('post');
		// 	$data['url_prev']=site_url('post');
		// }elseif($this->uri->segment(3)=='2'){
		// 	$next_page=$this->uri->segment(3)+1;
		// 	$data['canonical']=site_url('post/page/'.$this->uri->segment(3));
		// 	$data['url_prev']=site_url('post');
		// }else{
		// 	$next_page=$this->uri->segment(3)+1;
		// 	$prev_page=$this->uri->segment(3)-1;
		// 	$data['canonical']=site_url('post/page/'.$this->uri->segment(3));
		// 	$data['url_prev']=site_url('post/page/'.$prev_page);
		// }
		
		// $data['url_next']=site_url('post/page/'.$next_page);
		// $data['populer_post'] = $this->post_model->get_popular_post();
		$site_info = $this->db->get('tbl_site', 1)->row();
		
		$data['site_title'] = "Profil LPMP";
		$data['icon'] = $site_info->site_favicon;
		$data['site_image'] = $site_info->site_logo_big;
		$data['site_name'] = $site_info->site_name;
		$data['site_twitter'] = $site_info->site_twitter;
		$data['site_facebook'] = $site_info->site_facebook;
		$query = $this->db->query("SELECT GROUP_CONCAT(category_name) AS category_name FROM tbl_category")->row_array();
		$data['meta_description'] = $query['category_name'];
		$data['category'] = $query['category_name'];
		$data['description'] = "Profil LPMP Sulawesi Selatan";
		$data['link_cannonical'] = site_url('artikel/visi-dan-misi');
		$data['title'] = "Profil LPMP Sulawesi Selatan";
		$data['url'] = site_url('page/visi-dan-misi');
		$v['logo'] =  $site_info->site_logo_header;
		$data['header'] = $this->load->view('header',$v,TRUE);
		$data['image'] = $site_info->site_logo_big;
        $data['main_view'] = 'page_view';
        // $this->load->view('blog_detail_view',$x);
        $this->load->view('template_main',$data);
	}






	function detail($slug){
        $query=$this->page_model->get_page_by_slug($slug);
        
		if($query->num_rows() > 0){
            $q=$query->row_array();
            
    		$kode=$q['page_id'];
			$data['title']=$q['page_title'];
			$data['site_title'] = $q['page_title'];
    		if(empty($q['page_description'])){
    			$data['description'] = strip_tags(word_limiter($q['page_contents'],25));	
    		}else{
    			$data['description'] = $q['page_description'];
            }
            
    		$data['image']=$q['page_image'];
    		$data['slug']=$q['page_slug'];
    		$data['content']=$q['page_contents'];
    		$data['author']=$q['user_name'];
    		$data['date']=tanggal($q['page_date']);
    		$data['page_id']=$kode;
            $category_id = $q['category_id'];
            $site = $this->site_model->get_site_data()->row_array();
    		
    		// $x['related_post']  = $this->post_model->get_related_post($category_id,$kode);
    		// $x['show_comments'] = $this->post_model->show_comments($kode);
    		// $site_info = $this->db->get('tbl_site', 1)->row();
			// $v['logo'] =  $site_info->site_logo_header;
			// $x['icon'] = $site_info->site_favicon;
    		// $x['header'] = $this->load->view('header',$v,TRUE);
    		// $x['footer'] = $this->load->view('footer','',TRUE);
    		// $site = $this->site_model->get_site_data()->row_array();
			// $x['site_name'] = $site['site_name'];
			// $x['site_twitter'] = $site['site_twitter'];
            // $x['site_facebook'] = $site['site_facebook'];
            $site = $this->site_model->get_site_data()->row_array();
            $site_info = $this->db->get('tbl_site', 1)->row();
			$site_info = $this->db->get('tbl_site', 1)->row();
			$data['icon'] = $site_info->site_favicon;
			$data['link_cannonical'] = site_url('page/'.$q['page_slug']);
			$data['url'] = site_url('page/'.$q['page_slug']);
			$data['site_twitter'] = $site['site_twitter'];
			$data['site_facebook'] = $site['site_facebook'];
			$data['site_name'] = site_url();
			$data['image'] = $site_info->site_logo_big;

		    $data['header'] = $this->load->view('header',$v,TRUE);
            $data['main_view'] = 'page_detail_view';
            // $this->load->view('blog_detail_view',$x);
            $this->load->view('template_main',$data);
		}else{
		    #redirect('blog');
		}
			
	}


	function submit_komentar(){
    	$post_id = htmlspecialchars($this->input->post('post_id',TRUE),ENT_QUOTES);
    	$slug = htmlspecialchars($this->input->post('slug',TRUE),ENT_QUOTES);
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[40]|htmlspecialchars');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('comment', 'Comment', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			redirect('blog/'.$slug);
		}else{
			$name=$this->input->post('name',TRUE);
			$email=$this->input->post('email',TRUE);
			$comment=htmlspecialchars($this->input->post('comment',TRUE),ENT_QUOTES);
			$this->post_model->save_comment($post_id,$name,$email,$comment);
			$this->session->set_flashdata('msg','<div class="alert alert-info">Terima kasih atas respon Anda, komentar Anda akan tampil setelah moderasi</div>');
			redirect('blog/'.$slug);
		}
	}

	function subscribe(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			$base_url = site_url();
			redirect($base_url);
		}else{
			$email = $this->input->post('email',TRUE);
			$url = $this->input->post('url',TRUE);
			$checking_email = $this->home_model->checking_email($email);
			if($checking_email->num_rows() > 0){
				$this->session->set_flashdata('msg','<div class="alert alert-info">Terima kasih telah berlangganan.</div>');
				redirect($url);
			}else{
				$this->home_model->save_subcribe($email);
				$this->session->set_flashdata('msg','<div class="alert alert-info">Terima kasih telah berlangganan.</div>');
				redirect($url);
			}
			
		}
	}

}