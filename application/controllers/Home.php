<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('artikel_m');;
        $this->load->model('galery_m');;
	}
        
        public function index()
        {
        $data1['row'] = $this->galery_m->getGalery();    
        $data['row'] = $this->artikel_m->getLimit();
        $this->load->view('home', $data, $data1);
        }
        
}