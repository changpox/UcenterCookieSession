<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portal extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('portal_model');
		$this->load->model('sign_model');
		$this->load->helper('url_helper');
        $this->load->library('LB_base_lib');
	}

	public function index_cookie()
	{
		//如果用户在线则跳转到欢迎页面，否则跳转到登录页面
		$is_signin = $this->check_signin_by_cookie();
		if ($is_signin) {
			$this->load->view('portal/index_cookie');
		}
		else
		{
			$this->load->view('sign/sign_cookie');

		}
	}
	public function index_session()
	{
		session_start();
		$is_online = $_SESSION['online'] ? true:false;
		if ($is_online)
		{
			$this->load->view('portal/index_session');
		}
		else
		{
			$this->load->view('sign/sign_session');
		}
	}

	public function check_signin_by_cookie()
	{
		$username = $this->input->cookie('username');
		$password = $this->input->cookie('password');
		if (empty($username)||empty($password))
		{
			return false;
		}
		$user = $this->sign_model->get_user_by_username($username);
		$password_check = $this->_gen_hash_pwd($user->password);
		if ($password == $password_check) 
		{
			return true;
		}

		return false;
	}
	/**
	* _gen_hash_pwd
	* 生成hash密码，保存在cookie中，此哈希密码与本地浏览器和ip信息有关
	* 如此以来，即使cookie信息被盗用，也不会登录系统;
	*
	* @return string
	*/
    private function _gen_hash_pwd($password)
    {
        //本机ip
        $ip    = $this->lb_base_lib->real_ip();
        //生成salt
        $salt  = empty($_SERVER['HTTP_USER_AGENT'])? '~!d@#2%^&?*]|([/{;:}':$_SERVER['HTTP_USER_AGENT'];
        //生成密码
        $passwd = md5($salt.$password.'123456'.$ip);

        return $passwd;
    }

	

}
