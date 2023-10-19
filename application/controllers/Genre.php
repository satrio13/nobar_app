<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genre extends CI_Controller {

	function __construct(){
		parent::__construct();
	} 

    function index()
  	{
		show_404();
	}

    function categories($genre = null)
  	{
        if(!$genre)
        {
            show_404();
        }else if(!$this->uri->segment('4'))
        {
            redirect("genre/categories/$genre/page/1");
        }
        
		//layout
		$this->load->view('template/head');
        $this->load->view('template/navbar');
		$this->load->view('genre/categories');
		$this->load->view('template/footer');
		$this->load->view('template/js');
		$this->load->view('genre/script');
	}

}
