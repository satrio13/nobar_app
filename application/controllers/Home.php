<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
	} 

    function index()
  	{
		//layout
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('home');
		$this->load->view('template/footer');
		$this->load->view('template/js');
		$this->load->view('script');
	}

}