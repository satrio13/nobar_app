<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct(){
		parent::__construct();
	} 

    function index()
  	{
		//layout
		$this->load->view('template/head');
        $this->load->view('template/navbar');
		$this->load->view('search/index');
		$this->load->view('template/footer');
		$this->load->view('template/js');
		$this->load->view('search/script');
	}

}