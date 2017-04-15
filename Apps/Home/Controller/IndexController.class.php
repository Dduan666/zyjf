<?php
namespace Home\Controller;
use Home\Common\HomeController;
header('content-type:text/html;charset=utf-8;');
class IndexController extends HomeController {
    public function index(){
        $jy = M('jy');
        $data = $jy -> where('position = 3') -> select();

        $res = array();
        foreach($data as $k=>$v){
            $res[$k]['id']=$v['id'];
            $res[$k]['vname']=$v['vname'];
            $res[$k]['money']=$v['money'];
            $res[$k]['pic']=$v['pic'];
            $res[$k]['self']=$v['self'];
            $res[$k]['style']=$v['style'];
            $res[$k]['grade']=$v['grade'];

            $t1=str_replace('1','标准经营类贷款', $v['business']);
            $t2=str_replace('2','标准消费类贷款',$t1);
            $t3=str_replace('3','短期贷款',$t2);
            $t4=str_replace('4','信用贷款',$t3);

            $res[$k]['business']=$t4;

        }

        $type = M('type');
        $da = $type -> select();

        $lun = M('lun');
        $dl = $lun -> select();

        $gs = M('case');
        $go = $gs ->  select();
        $con = substr($go[7]['content'],0,302);
        
        $this -> assign('con',$con);
        $this -> assign('go',$go);
        $this -> assign('dl',$dl);  
        $this -> assign('da',$da);
        $this -> assign('res',$res);
        $this -> display();
    }
}