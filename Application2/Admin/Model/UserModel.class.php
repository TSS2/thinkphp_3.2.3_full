<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
	//调用配置文件数据库配置信息
  	protected $connection = 'DB_DEPLOY_CONFIG';
	//设置要访问数据表的前缀  如果未定义则获取配置文件中的DB_PREFIX参数
	protected $tablePrefix = 'think_';
	//不包含表前缀的数据表名称
	protected $tableName = 'user';
	//定义_scope属性
	protected $_scope = array(
		//命名范围normal	
		'normal'=> array(
			'where' => array('user_id' => 2 ),	//查询条件
			),
		//命名范围latest
		'latest'=>array(
			'order'=>'user_id DESC',		//结果排序
			'limit'=>10,						//结果限制
			),
		);
	//验证规则定义
	protected $_validate = array(
		array('user_name','','用户已存在',0,'unique',1) , 
		);
	public function t_scope(){
		$u = D('user');
		$user = $u->scope('latest')->select();
		//输出数据信息
		dump($user);
		foreach ($user as $key => $value) {
			# code...
			echo $key.'</br>';
			foreach ($value as $v_key => $value) {
				# code...
				echo $v_key.'=>'.$value.'</br>';
			}
		}
		
	}
	//数据创建
	public function create(){
		$u = M('user');
		// $data['user_sex'] = '男';
		// $u->field('user_sex')->create($data);
		$filedname = "sex";
		$sql = "alter table ".C('DB_PREFIX')."user ADD ".$filedname." int(20) not null default 0";
		$u->execute($sql);

	}
	//数据写入
	public function update($name){
		$u = M('user');
		dump($u);
		$data['user_name'] = $name;
		$u->add($data);

		$u->find(4);	//查询主键为4的记录
		$u->user_name = '陈佳佳';
		$u->save();
		
	}
	//数据查询
	public function getData($id){
		//实例化user对象
		$u = M('user');
		$ID['user_id'] = $id;
		$user = $u->where($ID)->find();
		if ($user){
			return $user['user_name'].'</br>';
		}else{
			return "null";
		}
	}

	//获取字段
	public function getFields(){
		$u = D('user');
		$field = $u->getDbFields();

		dump($field);
		foreach ($field as $key => $value) {
			# code...
			echo $key."=>".$value.'</br>';
		}
	}
	
	//删除记录
	public function deleteData($id){
		$u = M('user');
		// $u->delete($id);
		$data = $u->find(2);
		dump($data);
	}
}