<?php
namespace app\common\controller;
use think\Controller;
use app\common\behavior\user;
class Base extends Controller{
	protected $user;
	public function __construct()
	{
		parent::__construct();
		$this->user=new user();
		if(!$this->user->username)
			$this->redirect(U('SignIn/login'));
			//$this->redirect(U('SignIn/login'));
			//\think\Response::redirect('SignIn/login');
	}
	public function index()
	{

	}
}