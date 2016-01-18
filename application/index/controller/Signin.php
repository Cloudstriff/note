<?php
namespace app\index\controller;
use think\Controller;
use app\common\behavior\user;
class Signin extends Controller{
	private $user;
	public function __construct()
	{
		parent::__construct();
	}
	public function login()
	{
		if(IS_POST)
		{
			echo I('redirect');
		}
		echo '登陆界面';
	}
	public function doLogin()
	{
		$user=['username'=>'Cloud','id'=>1100,'role'=>'3'];
		$this->user=new user($user);
		print_r($_SESSION);
	}
	public function doLogOut()
	{
		user::clearUserSession();
	}
}