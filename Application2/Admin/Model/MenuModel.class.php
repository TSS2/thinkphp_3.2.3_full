<?php
namespace Admin\Model;
use Think\Model;
class MenuModel extends Model{
	public function create(){
		$sql = <<<sql
		create table 'think_menu'(
		'id' int(10) not null auto_increment,
		'name' varchar(20) not null comment '名称')
	}
}