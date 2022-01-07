<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
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
		$jum=$this->post_model->get_posts();
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
		$data['data']=$this->post_model->get_post_perpage($offset,$limit);
		//print_r($this->db->last_query()); 
		$data['judul']="Berita";


		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['site_image'] = $site_info->site_logo_big;
		$data['header'] = $this->load->view('header',$v,TRUE);
		$data['footer'] = $this->load->view('footer','',TRUE);
		$site = $this->site_model->get_site_data()->row_array();

		$x['site_name'] = $site['site_name'];
		$x['site_twitter'] = $site['site_twitter'];
		$x['site_facebook'] = $site['site_facebook'];
		$query = $this->db->query("SELECT GROUP_CONCAT(category_name) AS category_name FROM tbl_category")->row_array();
		$data['meta_description'] = $query['category_name'];
		$data['link_cannonical'] = 'twerqawer';
		$data['description'] = "Kumpulan Berita LPMP";
		$data['title'] = "Kumpulan Berita LPMP";
		$data['url'] = 'tsets';
		
        $data['main_view'] = 'post_view';
        // $this->load->view('blog_detail_view',$x);
        $this->load->view('template_main',$data);
	}






	function detail($slug){
        $query=$this->post_model->get_post_by_slug($slug);
        
		if($query->num_rows() > 0){
		    $q=$query->row_array();
    		$kode=$q['post_id'];
    		$data['title']=$q['post_title'];
    		if(empty($q['post_description'])){
    			$data['description'] = strip_tags(word_limiter($q['post_contents'],25));	
    		}else{
    			$data['description'] = $q['post_description'];
            }
            $data['link_cannonical'] = site_url('post/'.$q['post_slug']);
    		$data['image']=$q['post_image'];
    		$data['slug']=$q['post_slug'];
    		$data['content']=$q['post_contents'];
    		$data['views']=$q['post_views'];
    		$data['comment']=$q['comment_total'];
    		$data['author']=$q['user_name'];
    		$data['category']=$q['category_name'];
    		$data['category_slug']=$q['category_slug'];
    		$data['date']=tanggal($q['post_date']);
    		$data['tags']=$q['post_tags'];
    		$data['post_id']=$kode;
            $category_id = $q['category_id'];
            $site = $this->site_model->get_site_data()->row_array();
    		$this->post_model->count_views($kode);
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
            $site_info = $this->db->get('tbl_site', 1)->row();
            $data['icon'] = $site_info->site_favicon;
            $v['logo'] =  $site_info->site_logo_header;
		    $data['header'] = $this->load->view('header',$v,TRUE);
            $data['main_view'] = 'post_detail_view';
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