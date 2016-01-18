<?php 
namespace app\common\behavior;
class user{
	private $username;
	private $role;
	private $id;
	public function __construct($userParams=[])
	{
		//虽然PHP没有重载构造函数，但可以利用参数判断实现
		$_SESSION['user']=empty($userParams)?$_SESSION['user']:$userParams;
	}
	public function __get($paramName)
	{
		if(isset($_SESSION['user'][$paramName]))
		{
			return $_SESSION['user'][$paramName];
		}
		else
		{
			return false;
		}
	}
	public function __set($paramName, $value)
	{
		$_SESSION['user'][$paramName]=$value;
	}
	public static function clearUserSession()
	{
		unset($_SESSION['user']);
	}
}