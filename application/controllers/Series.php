<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Series extends CI_Controller {

	function __construct(){
		parent::__construct();
	} 

    function latest()
  	{
		if(!$this->uri->segment('3'))
        {
            redirect("series/latest/page/1");
        }

		//layout
		$this->load->view('template/head');
        $this->load->view('template/navbar');
		$this->load->view('series/latest');
		$this->load->view('template/footer');
		$this->load->view('template/js');
		$this->load->view('series/script');
	}

    function popular()
  	{
		if(!$this->uri->segment('3'))
        {
            redirect("series/popular/page/1");
        }

		//layout
		$this->load->view('template/head');
        $this->load->view('template/navbar');
		$this->load->view('series/popular');
		$this->load->view('template/footer');
		$this->load->view('template/js');
		$this->load->view('series/script');
	}

	function recent_release()
  	{
		if(!$this->uri->segment('3'))
        {
            redirect("series/recent-release/page/1");
        }

		//layout
		$this->load->view('template/head');
        $this->load->view('template/navbar');
		$this->load->view('series/recent');
		$this->load->view('template/footer');
		$this->load->view('template/js');
		$this->load->view('series/script');
	}

	function watch($id)
	{
		/*
		$src = file_get_contents("https://tv.nontondrama.lol//$id/"); 
		preg_match_all ('/<a href=[\'"]([^\'"]+)[\'"][^>]*>/i', $src, $matches); 
		$video = $matches; 
		$data['url_series'] = $video[1][21];
		*/

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_URL => "https://lk21-api.cyclic.app/series/$id/streams",
		));
		$src = curl_exec($curl);
		curl_close($curl);

		$data['url_series'] = json_decode($src, true);

		//layout
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('series/detail', $data);
		$this->load->view('template/footer');
		$this->load->view('template/js');
		$this->load->view('series/script_series');
  }
	
}