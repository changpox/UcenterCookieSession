<?php
define('BASEPATH') or die('No direct script access allowed');

class User_model extends CI_Modle{
public function  __construct()
{
	parent::__construct();
	$this->load->database();
}


}
