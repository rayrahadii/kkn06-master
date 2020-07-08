<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('artikel_m');;
	}
        
        public function index()
        {
        $data['row'] = $this->artikel_m->getArtikel();
        $this->load->view('home', $data);
        }
        
}