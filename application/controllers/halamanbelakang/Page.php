<?php
class Page extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('halamaninputnya');
            redirect($url);
        };
		$this->load->model('backend/Page_model','page_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$x['data'] = $this->page_model->get_all_page();
		$this->load->view('backend/v_page',$x);
	}

	function add_new(){
		$this->load->view('backend/v_add_page');
	}

	function get_edit(){
		$post_id = $this->uri->segment(4);
		$x['data'] = $this->page_model->get_page_by_id($post_id);
		$this->load->view('backend/v_edit_page',$x);
	}

	function publish(){
		
		$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
		$contents = $this->input->post('contents');
		$preslug  = strip_tags(htmlspecialchars($this->input->post('slug',TRUE),ENT_QUOTES));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
		$trim     = trim($string);
		$praslug  = strtolower(str_replace(" ", "-", $trim));
	    
		$dataPage = array();
		//untuk gambar, bila ada gambar yang diupload
		//maka upload gambarnya, dan buat thumbnailnya
	    if(!empty($_FILES['filefoto']['name'])){
			$config['upload_path'] = './assets/images/';
	    	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    	$config['encrypt_name'] = TRUE;
			$this->upload->initialize($config);
			if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
				$image=$img['file_name'];
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('halamanbelakang/page');
			}
			
	    }else{
			$image = '';
		}



		//untuk dokumen
		//bila ada dokumen yang diupload, 
		if(!empty($_FILES['fileupload']['name'])){
			$config['upload_path'] = './assets/document/';
	    	$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xls';
	    	$config['encrypt_name'] = TRUE;
			$this->upload->initialize($config);
			if ($this->upload->do_upload('fileupload')){
	            $dokumen = $this->upload->data();
				$document=$dokumen['file_name'];
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('halamanbelakang/page');
			}
			
	    }else{
			$document = '';
		}



		$query = $this->db->get_where('tbl_pages', array('page_slug' => $praslug));
		if($query->num_rows() > 0){
			$uniqe_string = rand();
			$slug = $praslug.'-'.$uniqe_string;
		}else{
			$slug = $praslug;
		}
		

		$description=htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);
		$dataPage = array(
			'page_title' => $title,
			'page_slug'		=> $slug,
			'page_contents' => $contents,
			'page_image'	=> $image,
			'page_file_uploads'	=> $document,
			'page_description'	=> $description,
	        'page_user_id'	   => $this->session->userdata('id')
		);

		$this->db->insert('tbl_pages', $dataPage);
		// $this->page_model->save_post($title,$contents,$category,$slug,$image,$document,$tags,$description);
		echo $this->session->set_flashdata('msg','success');
		redirect('halamanbelakang/page');

	}

	function edit(){

		$id 	  = $this->input->post('page_id',TRUE);
		$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
		$contents = $this->input->post('contents');
		$preslug  = strip_tags(htmlspecialchars($this->input->post('slug',TRUE),ENT_QUOTES));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
		$trim     = trim($string);
		$praslug  = strtolower(str_replace(" ", "-", $trim));

		


		$query = $this->db->get_where('tbl_pages', array('page_slug' => $praslug));
		if($query->num_rows() > 1){
			$uniqe_string = rand();
			$slug = $praslug.'-'.$uniqe_string;
		}else{
			$slug = $praslug;
		}


		$description=htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);
		$dataPage = array(
			'page_title' => $title,
			'page_contents' => $contents,
			'page_slug'		=> $slug,
			'page_description'	=> $description,
	        'page_user_id'	   => $this->session->userdata('id')
		);

		$stringImage = "";
		$stringFile  = "";
		//kalau ada file foto yang dieditkan ... 
	    if(!empty($_FILES['filefoto']['name'])){
			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
			$config['encrypt_name'] = TRUE;
			$this->upload->initialize($config);
	        if ($this->upload->do_upload('filefoto')){
				
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/images/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 500;
	            $config['height']= 320;
	            $config['new_image']= './assets/images/'.$img['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $this->_create_thumbs($img['file_name']);

				$image=$img['file_name'];
				$dataPage['page_image'] = $image;
				// $stringImage = array['post_image']
				// array_push($dataPage, $stringImage);
				
	            

			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('halamanbelakang/page');
	        }

		}
		
		if(!empty($_FILES['fileupload']['name'])){
			$config['upload_path'] = './assets/document/';
	    	$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xls';
	    	$config['encrypt_name'] = TRUE;
			$this->upload->initialize($config);
			if ($this->upload->do_upload('fileupload')){
	            $dokumen = $this->upload->data();
				$document=$dokumen['file_name'];
				// $stringFile .= "post_file_uploads => $dokument,";

				$dataPage['page_file_uploads'] = $document;
			}
		}
		

		$this->db->where('page_id', $id);
		$this->db->update('tbl_pages', $dataPage);


		// $this->db->insert('tbl_posts', $dataPage);
		
		

		// print_r($dataPage);
		// var_dump($dataPage);

		
		#$this->page_model->edit_post_with_img($id,$title,$contents,$category,$slug,$image,$tags,$description);
		echo $this->session->set_flashdata('msg','info');
		redirect('halamanbelakang/page');

	}

	function delete(){
		$page_id = $this->input->post('id',TRUE);
		$this->page_model->delete_page($page_id);
		echo $this->session->set_flashdata('msg','success-delete');
		redirect('halamanbelakang/page');
	}

	//upload image summernote
	function upload_image(){
		if(isset($_FILES["file"]["name"])){
			 $config['upload_path'] = './assets/images/';
			 $config['allowed_types'] = 'jpg|jpeg|png|gif';
			 $this->upload->initialize($config);
			 if(!$this->upload->do_upload('file')){
					$this->upload->display_errors();
					return FALSE;
			 }else{
					$data = $this->upload->data();
		            //Compress Image
		            $config['image_library']='gd2';
		            $config['source_image']='./assets/images/'.$data['file_name'];
		            $config['create_thumb']= FALSE;
		            $config['maintain_ratio']= TRUE;
		            $config['quality']= '60%';
		            $config['width']= 800;
		            $config['height']= 800;
		            $config['new_image']= './assets/images/'.$data['file_name'];
		            $this->load->library('image_lib', $config);
		            $this->image_lib->resize();
					echo base_url().'assets/images/'.$data['file_name'];
			 }
		}
	}


	function _create_thumbs($file_name){
        // Image resizing config
        $config = array(
            array(
                'image_library' => 'GD2',
                'source_image'  => './assets/images/'.$file_name,
                'maintain_ratio'=> FALSE,
                'width'         => 370,
                'height'        => 237,
                'new_image'     => './assets/images/thumb/'.$file_name
                ));

        $this->load->library('image_lib', $config[0]);
        foreach ($config as $item){
            $this->image_lib->initialize($item);
            if(!$this->image_lib->resize()){
                return false;
            }
            $this->image_lib->clear();
        }
    }


}
