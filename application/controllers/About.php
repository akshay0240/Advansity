<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

	public function index()
	{
		$this->load->view('about');
	}

	// public function about(){
	// 	$this->load->view('about');
	// 	// $this->load->library('../controllers/whathever');
	// }
}