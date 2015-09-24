<?php
defined('BASEPATH') or die('No direct script access allowed');

class Sign extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('sign_model');
		$this->load->helper('url_helper');
		$this->load->library('LB_base_lib');
		define('USER_NAME_EXISTS', -1);
		define('USER_EMAIL_EXISTS', -2);
	}
	public function index()
	{
     $this->load->view('sign/index.php');
	}
	//注册接口
	public function signup()
	{
		$username  = $this->input->post('username');
		$email     = $this->input->post('email');
		$password  = $this->input->post('password');
		$password2 = $this->input->post('password2');

		//验证数据是否合法
		if (!$this->check_username_formate($username))
		{
			$this->lb_base_lib->echo_json_result(-1,'username is illegal');
		}
		if (!$this->check_email_formate($email)) 
		{
			$this->lb_base_lib->echo_json_result(-1,'email is illegal');
		}
		if (!$this->check_password_formate($password)) 
		{
			$this->lb_base_lib->echo_json_result(-1,'password is illegal');
		}

		//检查用户名是否已经注册
		if ($this->sign_model->check_username_exists($username))
		{
			$this->lb_base_lib->echo_json_result(-1,"username is exists");
		}
		//检查邮箱是否已经注册
		if ($this->sign_model->check_email_exists($email))
		{
			$this->lb_base_lib->echo_json_result(-1,"email is exists");
		}
			
		//输入信息过滤
		$username = addslashes(trim($username));
		$email    = addslashes(trim($email));
		$password = addslashes(trim($password));
		$regip    = $this->lb_base_lib->real_ip();
		//用户信息写入数据库
		$result = $this->sign_model->add_user($username,$email,$password,$regip);
		$this->lb_base_lib->echo_json_result($result,"success");

	}
	//登陆接口
	public function signin()
	{
		$login_username = addslashes(trim($this->input->post('login_username')));
		$login_passwd   = addslashes(trim($this->input->post('login_passwd')));

		$result = $this->sign_model->signin($login_username,$login_passwd);
		if ( 1 == $result)
		{

      $this->lb_base_lib->echo_json_result(1,"signin success");
		}
		else
		{
      $this->lb_base_lib->echo_json_result(-1,"signin success");
		}
	}
	public function signout()
	{
		$result = $this->sign_model->signout();
	
	
	}
	public function change_passwd()
	{
	
	}
	//检查用户名格式
	public function check_username_formate($username)
	{
		return preg_match('/^[0-9A-Za-z_]{6,32}$/', $username);
	}
	//检查邮件格式
	public function check_email_formate($email)
	{
    return preg_match('/^([0-9A-Za-z]+)([0-9a-zA-Z_-]*)@([0-9A-Za-z]+).([A-Za-z]+)$/',$email);

	}
	//检查密码格式
	public function check_password_formate($password)
	{
    return preg_match('/[a-zA-Z]+/', $password) && preg_match('/[0-9]+/',$password) && preg_match('/[\s\S]{6,16}$/',$password);
	}



}
