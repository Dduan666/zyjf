<?php
namespace Home\Controller;
use Home\Common\HomeController;
header('content-type:text/html;charset=utf-8;');
class GuanyuController extends HomeController {
    public function about_us(){
    	$not = M('notice');

    	$pa = (int)I('get.id');
		

    	//查询接受的条数
    	$count = $not -> where('team = 1') -> count();
    	
    	$page = new \Think\Page($count,7);//实例化分页类 传入总记录数和显示记录数
    	$show = $page -> show();//分页显示输出
		$limit = $page->firstRow.','.$page->listRows;
    	$av = $not -> where('team = 1') -> order('time desc') -> limit($limit) -> select();

    	$this -> pagestr = $show;
    	$this -> assign('av',$av);
    	$this -> assign('pa',$pa);
        $this -> display();
    }
}