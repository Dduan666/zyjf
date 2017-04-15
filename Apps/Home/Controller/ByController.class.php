<?php
namespace Home\Controller;
use Home\Common\HomeController;
header('content-type:text/html;charset=utf-8;');
class ByController extends HomeController {
    
    public function add()
    {   
        $data = I('post.');
        // $phone = I('post.phone');
        $data['time'] = time();
        //封装手机号
        function inphone($phone){
            if(preg_match('/^[1][3458][0-9]{9}$/',$phone)){
                return true;
            }else{
                return false;
            }
        }
        if(empty($data['ename']))
        {
            echo '1';
            return false;
        }
        if(empty($data['phone']))
        {
            echo '2';
            return false;
        }
        if(!inphone($data['phone']))
        {
            echo '3';
            return false;
        }
        if(empty($data['money']))
        {
            echo '4';
            return false;
        }
        $verify = new \Think\Verify();
        if(!$verify -> check($data['code']))
        {
            echo '5';
            return false;
        }
        M('By') -> data($data) -> add();
    }
    
}