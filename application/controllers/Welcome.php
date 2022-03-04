<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// check_not_login();
	}
	public function index()
	{
		// load header
		$this->load->view('layout/header');
		// load nav
		$this->load->view('layout/nav');
		// load content pages
		$this->load->view('pages/home');
		// load footer
		$this->load->view('layout/footer');
	}

	public function aboutUs()
	{
		// load header
		$this->load->view('layout/header');
		// load nav
		$this->load->view('layout/nav');
		// load content pages
		$this->load->view('pages/about');
		// load footer
		$this->load->view('layout/footer');
	}
}
