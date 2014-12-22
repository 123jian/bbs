<?php
return array(
	//'配置项'=>'配置值'

    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '192.168.1.238', // 服务器地址
    'DB_NAME'   => 'bbs', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'bbs_', // 数据库表前缀 
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志

	'LAYOUT_ON'=>true,
	'LAYOUT_NAME'=>'layout',
	'MODULE_ALLOW_LIST' => array (
			'Home',
			'Admin',
			'User' 
	),
	'DEFAULT_MODULE' => 'Home',  

	
);