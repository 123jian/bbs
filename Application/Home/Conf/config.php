<?php
return array(
//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '192.168.1.217', // 服务器地址
	'DB_NAME'   => 'bbs', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'bbs_', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
    'URL_HTML_SUFFIX'=>'.shtml' , //自动生成静态文件   ：缓存
    'SHOW_PAGE_TRACE' =>true, //开启错误日志
	/*S(
		array(
			'type'=>'memcache',
			'host'=>'127.0.0.1',
			'port'=>'11211',
			'prefix'=>'think',
			'expire'=>60)
	),*/
);
?>
