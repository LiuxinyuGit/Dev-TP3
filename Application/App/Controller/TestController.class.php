<?php
namespace App\Controller;
use Think\Controller;
class TestController extends Controller {
  public function index(){
    $this->show('这是App模块Test控制器的index方法','utf-8');
  }

  public function main(){
  	$this->show('这是App模块Test控制器的main方法','utf-8');
  }
}