<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class IndexController extends BaseController {
    public function index(){
        $id = session('user.id');
    	$user = M('user');
    	$rank = $user -> field('rank') -> where('id = "'.$id.'"') -> find();    //查询权限，在index中进行权限判断，进行权限设置
    	// 分配变量
    	$this -> assign('rank',$rank['rank']);//分配权限
	    $this -> assign("title","后台首页");
        // 解析模板
	    // Admin/Index/index.html
        $this -> display();
    }

}