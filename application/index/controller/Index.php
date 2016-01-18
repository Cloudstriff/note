<?php
namespace app\index\controller;
use app\common\controller\Base;
class Index extends Base
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP5</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }
    public function news()
    {
    	echo '新闻编号为：'.I('id');
    }
    public function show()
    {
    	echo '房间号为：'.I('rid');
    }
    public function group()
    {
    	echo '先判断是否登陆'.'<br/>';
    	echo '群组编号为：'.I('gid').'<br/>';
    	echo '没有群编号则默认显示第一个群组';
    }
    public function read()
    {
    	echo '先判断是否登陆'.'<br/>';
    	echo '群组编号为：'.I('gid').'<br/>';
    	echo '文档编号为：'.I('nid').'<br/>';
    	echo '没有群编号则默认显示第一个群组';
    }
    public function test()
    {
    	$url=U('SignIn/login');
    	$this->redirect($url);
    }
}
