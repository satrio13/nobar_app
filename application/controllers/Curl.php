<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curl extends CI_Controller {

	function __construct(){
		parent::__construct();
	} 

    function genres()
  	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/genres");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}

	function genre($genre, $page)
  	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/genres/$genre?page=$page");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}

    function countries()
  	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/countries");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}

	function countrie($id, $page)
  	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/countries/$id/?page=$page");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}

    function years()
  	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/years");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}

	function search($q)
  	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/search/$q");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}

	// MOVIES
	function top_rated_movies($page = 1)
	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/top-rated/movies?page=$page");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
  	}

	function latest_movies($page = 1)
	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/movies?page=$page");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}

	function popular_movies($page = 1)
	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/popular/movies?page=$page");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}

	function recent_movies($page = 1)
	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/recent-release/movies?page=$page");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}

	function detail_movie($id)
	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/movies/$id");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}

	function streams_movie($id)
	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/movies/$id/streams");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}
	//END MOVIES

	//SERIES
	function latest_series($page = 1)
	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/series?page=$page");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}

	function popular_series($page = 1)
	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/popular/series?page=$page");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}

	function recent_series($page = 1)
	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/recent-release/series?page=$page");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}

	function detail_series($id)
	{
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, "https://lk21-api.cyclic.app/series/$id");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($curl); 
		curl_close($curl);      

		echo $output;
	}
	//END SERIES
}