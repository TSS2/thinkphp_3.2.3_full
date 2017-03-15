<?php
//新增一个入口文件admin.php  并绑定到Admin模块
//定义调试模式
define('APP_DEBUG', True);
//绑定Admin到当前入口文件
// define('BIND_MODULE', 'Admin');
define('BUILD_CONTROLLER_LIST', 'Index,User,Menu');
define('BUILD_MODEL_LIST', 'User,Menu');

// define('BIND_MODULE','Home');
// define('BUILD_CONTROLLER_LIST', 'Index,User,Menu');
// define('BUILD_MODEL_LIST', 'User,Menu');
//定义应用目录
define('APP_PATH', './Application2/');
//引入thinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';