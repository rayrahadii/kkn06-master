<?php defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
		$this->load->model('galery_m');;
	}
	
	public function index()
	{
		$data['row'] = $this->galery_m->getGalery();
		$this->template->load('template', 'galery/galery_data', $data);
	}


	public function add() 
	{
		$artikel = new stdClass();
		$artikel->galery_id = null;
		$artikel->divisi_id = null;
		$artikel->user_id = null;
		$artikel->judul_galery = null;
		$artikel->keterangan_galery = null;
		$artikel->penulis_galery = null;
		$artikel->tanggal_dibuat = date('Y-m-d H:i:s');
		$data = array(
			'page' => 'add',
			'row' => $artikel
		);
		$this->template->load('template', 'galery/galery_form', $data);
	}

	public function edit($id)
	{
		$query = $this->galery_m->get($id);
		if($query->num_rows() > 0) {
			$galery = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $galery
			);
			$this->template->load('template', 'galery/galery_form', $data);
		} else {
			$this->session->set_flashdata('success', 'Data Berhasil Diperbarui');
			redirect('galery');
		}
	}

	public function process()
	{	
		$config['upload_path']          = './uploads/galery/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 2048;
		$config['file_name']			= 'galery-'.date('ymd').'-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);
		
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			if(@$_FILES['image_galery']['name'] != null){
				if($this->upload->do_upload('image_galery')) {
				$post['image_galery'] = $this->upload->data('file_name');
				$this->galery_m->add($post);
				if($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
				}
				redirect('galery');
			} else {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('error', $error);
				redirect('galery/add');
			}
		}

		} else if(isset($_POST['edit'])) {
			$this->galery_m->edit($post);
		} 
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
		}
		redirect('galery');
	}

	public function del($id)
	{
		$galery = $this->galery_m->get($id)->row();
				if($galery->image_galery != null) {
					$target_file =  './uploads/galery/'.$galery->image_galery;
					unlink($target_file);
				}
		$this->galery_m->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		}
		redirect('galery');
	}

	public function detail($id)
	{
		$query = $this->galery_m->get($id);
		if($query->num_rows() > 0) {
			$galery = $query->row();
			$data = array(
				'page' => 'detail',
				'row' => $galery
			);
			$this->template->load('template', 'galery/galery_detail', $data);
		}
	}

}