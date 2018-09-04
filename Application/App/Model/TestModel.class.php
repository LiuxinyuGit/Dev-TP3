<?php 
namespace  App\Model;
use Think\Model;
class TestModel extends Model{

	protected $_validata = array(
		array('name','require','姓名不能为空！')
	);

	protected $_auto = array(
	);

	public function hello(){
		echo 'Hi!';
	}
}