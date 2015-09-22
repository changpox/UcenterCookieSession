<?php
defined('BASEPATH') or die('No direct script access allowed');

class Sign_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	
	}
	//检查用户名是否已经注册,返回数据库查询行数，所以0表示没有被注册
	public function check_username_exists($username) 
	{
		$query = "SELECT * FROM ci_user WHERE username='$username'";
		$query_result = $this->db->query($query);
		$num =$query_result->num_rows();
    return $num;
	}
	//检查邮箱是否已经注册,返回数据库查询行数，所以0表示没有被注册
	public function check_email_exists($email) 
	{
		$query = "SELECT * FROM ci_user WHERE email='$email'";
		$query_result = $this->db->query($query);
		$num = $query_result->num_rows();
		return $num;
	}
	//注册接口
	public function add_user($username,$email,$password,$regip='')
	{
		$salt     = substr(uniqid(rand()),-6);
		$password = md5(md5($password).$salt);//数据库密码采用盐+两次md5加密的方式

		$query = "INSERT INTO ci_user(username,email,password,regip,salt) VALUES 
					('$username','$email','$password','$regip','$salt')";
		$this->db->query($query);
		$num = $this->db->affected_rows();
    return $num;
	}
	//登陆接口
	public function signin($login_username,$login_passwd)
	{
		$query = "SELECT salt,password FROM ci_user WHERE username='$login_username'";
		$query_result = $this->db->query($query);
		if ($query_result->num_rows() <= 0)
		{
			return -1;
		}
		$result   = $query_result->row();
		$salt     = $result->salt;
		$password = $result->password;

		$login_passwd = md5(md5($login_passwd).$salt);
		if ($login_passwd == $password)
        {
			return 1;
		}
		else
		{
			return -1;
		}

	}
	public function signout()
	{

	}




}
