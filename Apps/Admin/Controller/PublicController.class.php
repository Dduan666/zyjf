<?php
namespace Admin\Controller;

use Think\Controller;
header('content-type:text/html;charset=utf-8;');
// 后台公共的控制器
class PublicController extends Controller {

	// 生成验证码
	public function createVCode(){
	
		$config =
    	    array(    
    	    'fontSize'    =>    30,    // 验证码字体大小    
    	    'length'      =>    4,     // 验证码位数    
    	    // 'useNoise'    =>    true, // 关闭验证码杂点
    	    );
		$Verify = new \Think\Verify($config);
		$Verify->codeSet = '0123456789'; 
		$Verify->entry();
	}


}