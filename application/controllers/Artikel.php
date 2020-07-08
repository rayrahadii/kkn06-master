<?php defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
		$this->load->model('artikel_m');;
	}
	
	public function index()
	{
		$data['row'] = $this->artikel_m->getArtikel();
		$this->template->load('template', 'artikel/artikel_data', $data);
	}

	public function detailartikel($id)
	{
			$query = $this->artikel_m->getArtikel($id);
			if($query->num_rows() > 0) {
				$artikel = $query->row();
				$data = array(
					'row' => $artikel
				);
				$this->load->view('artikel/artikel_detail_home', $data);
			}
		
	}

	public function artikel_list()
	{
		$this->load->library('pagination');

		$config['base_url'] 	= site_url('artikel/artikel_list');
		$config['total_rows'] 	= $this->artikel_m->countArtikel();
		$config['per_page'] 	= 4;

		$config['full_tag_open'] = '<nav class="post-pagination wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="300ms"><ul>';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'post-pagination wow fadeInDown');

		$config['uri_segment'] 	= 3;
		$choice 				= $config['total_rows'] / $config['per_page'];
		$config["num_links"]	= floor($choice); 

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


		$data['row'] = $this->artikel_m->getPagination($config['per_page'], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		
    	$this->load->view('artikel/artikel_list', $data);
	}

	public function add() 
	{
		$artikel = new stdClass();
		$artikel->artikel_id = null;
		$artikel->divisi_id = null;
		$artikel->user_id = null;
		$artikel->judul_artikel = null;
		$artikel->keterangan_artikel = null;
		$artikel->link_video = null;
		$artikel->penulis_artikel = null;
		$artikel->isi_artikel = null;
		$artikel->tanggal_dibuat = date('Y-m-d H:i:s');
		$data = array(
			'page' => 'add',
			'row' => $artikel
		);
		$this->template->load('template', 'artikel/artikel_form', $data);
	}

	public function edit($id)
	{
		$query = $this->artikel_m->get($id);
		if($query->num_rows() > 0) {
			$artikel = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $artikel
			);
			$this->template->load('template', 'artikel/artikel_form', $data);
		} else {
			$this->session->set_flashdata('success', 'Data Berhasil Diperbarui');
			redirect('artikel');
		}
	}

	public function process()
	{	
		$config['upload_path']          = './uploads/artikel/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 2048;
		$config['file_name']			= 'artikel-'.date('ymd').'-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);
		
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			if(@$_FILES['image_artikel']['name'] != null){
				if($this->upload->do_upload('image_artikel')) {
				$post['image_artikel'] = $this->upload->data('file_name');
				$this->artikel_m->add($post);
				if($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
				}
				redirect('artikel');
			} else {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('error', $error);
				redirect('artikel/add');
			}
		}

		} else if(isset($_POST['edit'])) {
			$this->artikel_m->edit($post);
		} 
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
		}
		redirect('artikel');
	}

	public function del($id)
	{
		$artikel = $this->artikel_m->get($id)->row();
				if($artikel->image_artikel != null) {
					$target_file =  './uploads/artikel/'.$artikel->image_artikel;
					unlink($target_file);
				}
		$this->artikel_m->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		}
		redirect('artikel');
	}

	public function detail($id)
	{
		$query = $this->artikel_m->get($id);
		if($query->num_rows() > 0) {
			$artikel = $query->row();
			$data = array(
				'page' => 'detail',
				'row' => $artikel
			);
			$this->template->load('template', 'artikel/artikel_detail', $data);
		}
	}

}