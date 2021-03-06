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
    //'url_model' =>2,
    'url_route_on' => true,
    'log'          => [
        'type'             => 'trace', // 支持 socket trace file
        // 以下为socket类型配置
        'host'             => '111.202.76.133',
        //日志强制记录到配置的client_id
        'force_client_ids' => [],
        //限制允许读取日志的client_id
        'allow_client_ids' => [],
    ],
];
