<?php
namespace App\Controller;
use Think\Controller;
class IndexController extends Controller {
  public function index(){
  	$this->assign('title','首页');
  	$this->display();
    // $this->show('这是App模块Index控制器的index方法','utf-8');
  }

  public function main(){
  	$this->show('这是App模块Index控制器的main方法','utf-8');
  }

  public function map(){
  	$this->display();
  }

  public function picker(){
    $order = '1:1|2:1|3:1|4:1|5:1|6:1|7:1|8:1';
    $goods = M('goods')->select();
    $this->assign('order',$order);
    $this->assign('goods',$goods);
    $this->display();
  }

  public function charts(){
    $order = '1:1|2:1|3:1|4:1|5:1|6:1|7:1|8:1';
    $goods = M('goods')->select();
    $this->assign('order',$order);
    $this->assign('goods',$goods);
    $this->display();
  }

  public function test(){
    $this->display();
  }
}