<?php
namespace Home\Controller;
use Home\Common\HomeController;
header('content-type:text/html;charset=utf-8;');
class XinyongController extends HomeController {
    public function index(){
        $this -> display();
    }
}