//连接数据库
1:字符串定义
new \Home\Model\UserModel('[模型名]','[数据表前缀]','[数据库连接信息]')

2:数组定义
$connection = array{
	'db_type'	=> 'mysql',						//数据库类型
	'db_host'	=>	'192.168.1.1,192.168.1.2',	//服务器地址
	'db_user'	=>	'root',						//用户名
	'db_pwd'	=>	'admin',					//密码
	'db_port'	=>	'3306',						//端口
	'db_name'	=>	'demo',						//数据库名
	'db_charset'=>	'utf8',						//数据库编码
	'db_debug'	=>	'true',	//如果设置了数据库调试模式 那么数据库调试就不再受APP_DEBUG常量影响
};
//分布式数据库部署 并且采用读写分离 开启数据库调试模式
new \Home\Model\UserModel('[模型名]','[数据表前缀]',$connection);

3:配置定义
我们可以事先在配置文件中定义好数据库连接信息  然后在实例化的时候直接传入配置的名称就可以

//数据库配置1
'DB_CONFIG1' => array{
	'db_type'	=> 'mysql',
	'db_host'	=>	'localhost',
	'db_user'	=>	'root',
	'db_pwd'	=>	'admin',
	'db_port'	=>	'3306',
	'db_name'	=>	'thinkphp',
	'db_charset'=>	'utf8',
	'db_debug'	=>	'true',
	};

//数据库配置2
'DB_CONFIG2' =>	'mysql://root:admin@localhost:3306/thinkphp',

在配置文件中定义数据库连接信息时也支持字符串和数组格式
new \Home\Model\NewModel('new','think_','DB_CONFIG1');
new \Home\Model\BlogModel('blog','think_','DB_CONFIG2');

