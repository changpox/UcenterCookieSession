<?php
defined('BASEPATH') or die('No direct script access allowed');

class Sign extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('sign_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
     $this->load->view('sign/index.php');
	}
	public function signup()
	{
	
	}
	public function signin()
	{
	
	
	}
	public function signout()
	{
	
	
	}
	public function change_passwd()
	{
	
	}




}
