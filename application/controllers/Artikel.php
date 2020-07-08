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
				$data['row'] = $this->artikel_m->get();
				$this->load->view('/include/navbar');
    			$this->load->view('artikel/artikel_list', $data);
    			$this->load->view('/include/footer');
			
	}

	public function add() 
	{
		$artikel = new stdClass();
		$artikel->artikel_id = null;
		$artikel->divisi_id = null;
		$artikel->user_id = null;
		$artikel->judul_artikel = null;
		$artikel->keterangan_artikel = null;
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