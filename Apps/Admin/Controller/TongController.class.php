<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class TongController extends BaseController {
	//页面流量统计
	public function index()
	{
		//实例化
		$tong = M('flow');
		//接收num值
		$num = I('get.num');
		//判断
		if(!empty($num))
		{
			$num = I('get.num');
		}else{
			$num = 10;
		}
		//获取搜索的值
		$where = I('get.search');
		if(!empty($where))
		{
			$where = "page like '%".$where."%'";
		}else{
			$where = "";
		}
		//接收查询的条数
		$count = $tong -> where($where) -> count();
		//实例化分页，传入总记录数和显示条数
		$page = new \Think\Page($count,$num);
		$show = $page -> show();//分页显示输出
		$limit = $page -> firstRow.','.$page -> listRows;
		$dd = $tong -> limit($limit) -> where($where) -> select();

		//分配变量
		$this -> pagestr = $show;
		$this -> assign('tong',$dd);
		$this -> assign('title','流量统计列表');
		$this -> display();
	}
	
	//用户IP统计
	public function flow()
	{
		//实例化
		$flow = M('flow_ip');
		//接收num值
		$num = I('get.num');
		//判断
		if(!empty($num))
		{
			$num = I('get.num');
		}else{
			$num = 5;
		}
		//获取搜索的值
		$where = I('get.search');
		if(!empty($where))
		{
			$where = "page like '%".$where."%'";
		}else{
			$where = "";
		}
		//接收查询的条数
		$count = $flow -> count();
		//实例化分页，传入总记录数和显示条数
		$page = new \Think\Page($count,$num);
		$show = $page -> show();//分页显示输出
		$limit = $page -> firstRow.','.$page -> listRows;
		$dd = $flow -> alias('f') -> limit($limit) -> join('left join __FLOW__ t on f.fid=t.id') -> field('f.*,t.page') -> where($where) -> select();
		$flow = array();
		foreach ($dd as $k => $v) {
			$flow[$k]['id'] = $v['id'];
			$flow[$k]['fid'] = $v['fid'];
			$flow[$k]['ip'] = $v['ip'];
			$flow[$k]['page'] = $v['page'];
			// $flow[$k]['time'] = $v['time'];
			$flow[$k]['time'] = date("H:i:s",$v['time']);
			$flow[$k]['date'] = date("H:i:s",$v['date']);
			$flow[$k]['td'] = $v['date']-$v['time'];
		}

		//分配变量
		$this -> pagestr = $show;
		$this -> assign('flow',$flow);
		$this -> assign('title','流量统计列表');
		$this -> display();
	}
}