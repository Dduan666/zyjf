<?php
namespace Home\Controller;
use Home\Common\HomeController;
header('content-type:text/html;charset=utf-8;');
class ClickController extends HomeController {
	public function ajax()
	{
		$cl = M('click');
		$li = I('get.');

		$ca = M('auser') -> where('id = "'.session('auser.id').'"') -> find();
		// echo $ca['pid'];
		if($ca['pid'] != null)
		{
			echo 1;
			return false;
		}

		$res = $cl -> where('uid = "'.$li['id'].'"') -> find();
		
		if(empty($res)){
			$data['uid'] = $li['id'];

			if($li['type'] == 3){
				$data['oclick'] = 1;
			}else if($li['type'] == 2){
				$data['tclick'] = 1;
			}else if($li['type'] == 1){
				$data['sclick'] = 1;
			}
			M('click') -> data($data) -> add();
		}else{
			if($li['type'] == 3){
			    M('click') -> where('uid = "'.$li['id'].'"') -> setInc('oclick',1);
			}else if($li['type'] == 2){
			    M('click') -> where('uid = "'.$li['id'].'"') -> setInc('tclick',1);
			}else if($li['type'] == 1){
			    M('click') -> where('uid = "'.$li['id'].'"') -> setInc('sclick',1);
			}
		}

		$rr = M('click') -> where('uid = "'.$li['id'].'"') -> find();
		//计算出点击量分数的平均分存入grade
		$r = (int)($rr['oclick']*100 + $rr['tclick']*60 + $rr['sclick']*0);
		$rj = (int)($rr['oclick'] + $rr['tclick'] + $rr['sclick']);
		$gg = ceil($r/$rj);
		
		M('click') -> where('uid = "'.$li['id'].'"') -> setField('grade',$gg);

		//获取用户id，获取点击的精英id，点击精英使用户那有精英id，再别的地方就可以判断用户只能点击一次了
		$auser = M('auser');
		$us = $auser -> select();
		if(empty($us['pid'])){
			$as = session('auser.id');
			$pid = $li['id'];
			M('auser') -> where('id = "'.$as.'"') -> setField('pid',$pid);
		}
		
		
	}
}