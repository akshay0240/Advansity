<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business extends CI_Controller {


	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			// echo "hello this is Home page";
	}

	public function index()
	{
		$this->load->view('business');
	}

		
}