<?php
namespace Home\Controller;
use Home\Common\HomeController;
header('content-type:text/html;charset=utf-8;');
class JingyingController extends HomeController {
    public function fuwuzl(){
        
        $id = I('get.id');
        $serve = M('serve');
    	$product = M('serve_product');
    	$con = M('serve_product_con');
        $data = $product -> where('id = "'.$id.'"') -> find();
        $data['conts'] = htmlspecialchars_decode($data['conts']);

        $da = $serve -> where('type = "'.$data['nid'].'"') -> select();
        $pcs = $con -> where('sid = "'.$id.'"') -> select();
        $pc = array();
        foreach ($pcs as $k => $v) {
            $pc[$k]['id'] = $v['id'];
            $pc[$k]['sid'] = $v['sid'];
            $pc[$k]['like'] = $v['like'];
            $pc[$k]['content'] = htmlspecialchars_decode($v['content']);
        }
        
        $this -> assign('data',$data);
        $this -> assign('da',$da);
        $this -> assign('pc',$pc);
        $this -> display();
    }
}