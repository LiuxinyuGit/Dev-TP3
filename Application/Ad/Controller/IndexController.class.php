<?php
namespace Ad\Controller;
use Think\Controller;
class IndexController extends Controller {
  public function index(){
    $this->show('这是Ad模块Index控制器的index方法','utf-8');
  }

  public function main(){
  	$this->show('这是Ad模块Index控制器的main方法','utf-8');
  }
}