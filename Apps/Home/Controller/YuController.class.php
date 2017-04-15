<?php
namespace Home\Controller;
use Home\Common\HomeController;
header('content-type:text/html;charset=utf-8;');
class YuController extends HomeController {
    
    public function add()
    {   
        $data['phone'] = I('post.phone');
        $data['did'] = I('post.id');
        $data['time'] = time();

        //判断是否已预约
        $res = M('zaixian') -> where('phone = "'.$data['phone'].'"') -> find();
        if(!empty($res))
        {
            echo '3';
            return false;
        }
        //判断手机号格式是否正确
        //封装手机号
        function inphone($phone){
            if(preg_match('/^[1][3458][0-9]{9}$/',$phone)){
                return true;
            }else{
                return false;
            }
        }
        if(!inphone($data['phone']))
        {
            echo '4';
            return ;
        }
        
        if(empty($data['phone']))
        {
            echo '1';
            return false;
        }else{
            echo '2';
            // return ture;
        }
        M('zaixian') -> data($data) -> add();
    }
    
}