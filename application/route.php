<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    'news/:id$'   => 'index/Index/news',
    'group/:gid$' => 'index/Index/group',
    'group/:gid/note/:nid' => 'index/Index/read',
    'group/:gid/setting/members' => 'index/Setting/members',
    'group/:gid/setting/options' => 'index/Setting/options',
    ':rid$'      => 'index/Index/show', //可使用正则表达式，匹配以rid结尾
];
