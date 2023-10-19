<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Countries extends CI_Controller {

	function __construct(){
		parent::__construct();
	} 

    function index()
  	{
		if(!$this->uri->segment('2'))
        {
            show_404();
        }

		//layout
		$this->load->view('template/head');
        $this->load->view('template/navbar');
		$this->load->view('countries/index');
		$this->load->view('template/footer');
		$this->load->view('template/js');
		$this->load->view('countries/script');
	}

}