<?php
namespace Ain\Controller;
use Ain\Common\DscController;
header('content-type:text/html;charset=utf-8;');
class IndexController extends DscController {
    public function index(){
        
        // 解析模板
	    // Admin/Index/index.html
        $this -> display();
    }

}