<?php defined('BASEPATH') or exit('No direct script access allowed');

class Artikelkoor extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
		$this->load->model('artikelkoor_m');;
	}
	
	public function index()
	{
		$data['row'] = $this->artikelkoor_m->getArtikel();
		$this->template->load('template', 'artikel/artikel_koor_data', $data);
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
		$this->template->load('template', 'artikel/artikel_koor_form', $data);
	}

	public function edit($id)
	{
		$query = $this->artikelkoor_m->get($id);
		if($query->num_rows() > 0) {
			$artikel = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $artikel
			);
			$this->template->load('template', 'artikel/artikel_koor_form', $data);
		} else {
			$this->session->set_flashdata('success', 'Data Berhasil Diperbarui');
			redirect('artikelkoor');
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
				$this->artikelkoor_m->add($post);
				if($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
				}
				redirect('artikelkoor');
			} else {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('error', $error);
				redirect('artikelkoor/add');
			}
		}

		} else if(isset($_POST['edit'])) {
			$this->artikelkoor_m->edit($post);
		} 
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
		}
		redirect('artikelkoor');
	}

	public function del($id)
	{
		$artikel = $this->artikelkoor_m->get($id)->row();
				if($artikel->image_artikel != null) {
					$target_file =  './uploads/artikel/'.$artikel->image_artikel;
					unlink($target_file);
				}
		$this->artikelkoor_m->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		}
		redirect('artikelkoor');
	}

	public function detail($id)
	{
		$query = $this->artikelkoor_m->get($id);
		if($query->num_rows() > 0) {
			$artikel = $query->row();
			$data = array(
				'page' => 'detail',
				'row' => $artikel
			);
			$this->template->load('template', 'artikel/artikel_koor_detail', $data);
		}
	}

}