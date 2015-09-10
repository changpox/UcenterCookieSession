<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portal extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('portal_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$this->load->view('portal/index');
	}
	public function signup()
	{
	}

	

}
