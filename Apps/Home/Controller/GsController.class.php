<?php
namespace Home\Controller;
use Home\Common\HomeController;
header('content-type:text/html;charset=utf-8;');
class GsController extends HomeController {
    public function sucess_case1(){
    	//实例化
    	$gs = M('case');
    	$id = $_GET['id'];
    	$gg = $gs -> where('id = "'.$id.'"') -> find();



    	$this -> assign('gg',$gg);
        $this -> display();
    }

    public function company_case()
    {
    	$case = M('case');

    	//查询总的条数
		$count = $case -> count();
		//实例化分页，传入总记录数和显示条数
		$page = new \Think\Page($count,7);
		$show = $page -> show();//分页显示输出
		$limit = $page -> firstRow.','.$page -> listRows;

    	$da = $case -> order('time desc') -> limit($limit) -> select();

    	$this -> pagestr = $show;
    	$this -> assign('da',$da);
    	$this -> display();


    }
}