<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie extends CI_Controller {

	function __construct(){
		parent::__construct();
	} 

    function latest()
  	{
		if(!$this->uri->segment('3'))
        {
            redirect("movie/latest/page/1");
        }

		//layout
		$this->load->view('template/head');
        $this->load->view('template/navbar');
		$this->load->view('movie/latest');
		$this->load->view('template/footer');
		$this->load->view('template/js');
		$this->load->view('movie/script');
	}

    function popular()
  	{
		if(!$this->uri->segment('3'))
        {
            redirect("movie/popular/page/1");
        }

		//layout
		$this->load->view('template/head');
        $this->load->view('template/navbar');
		$this->load->view('movie/popular');
		$this->load->view('template/footer');
		$this->load->view('template/js');
		$this->load->view('movie/script');
	}
	
	function top_rated()
  	{
		if(!$this->uri->segment('3'))
        {
            redirect("movie/top-rated/page/1");
        }

		//layout
		$this->load->view('template/head');
        $this->load->view('template/navbar');
		$this->load->view('movie/top_rated');
		$this->load->view('template/footer');
		$this->load->view('template/js');
		$this->load->view('movie/script');
	}

	function recent_release()
	{
		if(!$this->uri->segment('3'))
		{
			redirect("movie/recent-release/page/1");
		}

		//layout
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('movie/recent');
		$this->load->view('template/footer');
		$this->load->view('template/js');
		$this->load->view('movie/script');
  	}

	function countries()
	{
		//layout
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('movie/countries');
		$this->load->view('template/footer');
		$this->load->view('template/js');
		$this->load->view('movie/script');
  	}

	function watch($id)
	{	
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_URL => "https://lk21-api.cyclic.app/movies/$id/streams",
		));
		$src = curl_exec($curl);
		curl_close($curl);

		$data['url_movie'] = json_decode($src, true);
		
		//layout
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('movie/detail', $data);
		$this->load->view('template/footer');
		$this->load->view('template/js');
		$this->load->view('movie/script_movie');
  }
	
}