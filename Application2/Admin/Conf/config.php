<?php
return array(
	//'配置项'=>'配置值'
	'ACTION_SUFFIX'		=>	'Action',	//操作方法后缀  只影响控制器类的定义  对URL访问没有影响
	'URL_PARAMS_BIND'	=> 	True,		//URL变量绑定到操作方法作为参数
	// 'DEFAULT_AJAX_RETURN'=>	'xml',

	// 数据库配置信息
	// 'DB_TYPE'		=>	'mysql',		//数据库类型
	// 'DB_HOST'		=>	'localhost',	//服务器地址
	// 'DB_NAME'		=>	'thinkphp',		//数据库名称
	// 'DB_USER'		=>	'root',			//用户名
	// 'DB_PWD'		=>	'admin',		//密码
	// 'DB_PORT'		=>	'3307',			//端口
	// 'DB_PARAMS'		=>	array(),		//数据库连接参数
	// 'DB_PREFIX'		=>	'think_',		//数据表前缀
	// 'DB_CHARSET'	=>	'utf8',			//字符集
	// 'DB_DEBUG'		=>	 True,			//数据库调试模式，开启后可以记录SQL日志

	'DB_CONFIG1'	=>	array(
		'DB_TYPE'		=>	'mysql',		//数据库类型
		'DB_HOST'		=>	'localhost',	//服务器地址
		'DB_NAME'		=>	'thinkphp',		//数据库名称
		'DB_USER'		=>	'root',			//用户名
		'DB_PWD'		=>	'admin',		//密码
		'DB_PORT'		=>	'3307',			//端口
		'DB_PARAMS'		=>	array(),		//数据库连接参数
		'DB_PREFIX'		=>	'think_',		//数据表前缀
		'DB_CHARSET'	=>	'utf8',			//字符集
		'DB_DEBUG'		=>	 True,			//数据库调试模式，开启后可以记录SQL日志
	),

	'DB_CONFIG2'	=>	array(
		'DB_TYPE'		=>	'mysql',		//数据库类型
		'DB_HOST'		=>	'localhost',	//服务器地址
		'DB_NAME'		=>	'thinkphp',		//数据库名称
		'DB_USER'		=>	'root',			//用户名
		'DB_PWD'		=>	'admin',		//密码
		'DB_PORT'		=>	'3306',			//端口
		'DB_PARAMS'		=>	array(),		//数据库连接参数
		'DB_PREFIX'		=>	'think_',		//数据表前缀
		'DB_CHARSET'	=>	'utf8',			//字符集
		'DB_DEBUG'		=>	 True,			//数据库调试模式，开启后可以记录SQL日志
	),

	//分布式数据库配置
	'DB_DEPLOY_CONFIG'	=>	array(
		'DB_DEPLOY_TYPE'=>	1,				//数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
		'DB_TYPE'		=>	'mysql',		//数据库类型  分布式数据库类型必须相同
		'DB_HOST'		=>	'localhost,localhost',	//服务器地址  即使两个相同的IP也要重复定义
		'DB_NAME'		=>	'thinkphp',		//数据库名称  如果相同可以不用定义多个
		'DB_USER'		=>	'root',			//用户名  如果相同可以不用定义多个  
		'DB_PWD'		=>	'admin',		//密码  如果相同可以不用定义多个
		'DB_PORT'		=>	'3306,3307',			//端口  如果相同可以不用定义多个
		'DB_PARAMS'		=>	array(),		//数据库连接参数
		'DB_PREFIX'		=>	'think_',		//数据表前缀
		'DB_CHARSET'	=>	'utf8',			//字符集
		'DB_DEBUG'		=>	 True,			//数据库调试模式，开启后可以记录SQL日志
		'DB_RW_SEPARATE'=>   true,			//设置读写分离 默认为情况不分离 主从服务器需要为true
	),
);