<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class PingController extends BaseController {
	public function index()
	{


		//实例化
    	$ping = M('ping');

    	//接受num值
        $num = I('get.num');
    	if(!empty($num))
    	{
    		$num = I('get.num');
    	}else{
    		$num = 5;
    	}

    	// 获取搜索的值 where username like '%.....%'
        $where = I('get.search');
    	if(!empty($where))
    	{
    		$where = "cname like '%".I('get.search')."%'";
    	}else{
    		$where = "";
    	}
    	//查询接受的条数
    	$count = $ping -> where($where) -> count();
    	
    	$page = new \Think\Page($count,$num);//实例化分页类 传入总记录数和显示记录数
    	$show = $page -> show();//分页显示输出
		$limit = $page->firstRow.','.$page->listRows;
    	// $data = $auser -> query("select * from lamp_auser order by id ASC limit ".$limit);
		$data = $ping -> limit($limit) -> where($where) -> select();
		// echo $auser -> _sql();
    	//分配变量
    	$this -> pagestr = $show;
		// $this -> assign("show",$show);
    	
    	$this -> assign("ping",$data);
        $this -> assign("title","未评估完列表页");
        //解析模板
        $this -> display();
	}

	public function delete()
	{
		//接收ID
    	$id = $_GET['id'];
    	
    	// 实例化
    	$ping = M('ping');

    	//按ID删除
    	$res = $ping -> where("id = '".$id."'") -> delete();
    	// 判断是否删除成功
    	if($res)
    	{
    		echo "<script>
				alert('删除成功');
				window.location.href='".U('Admin/Ping/index')."';
    			</script>";
    			// die();
    	}else{
    		echo "<script>
    			alert('删除失败');
    			window.location.href='".U('Admin/Ping/index')."';
    			</script>";
    	}
    	
	}

	public function del()
	{
		//接收ID
    	$id = $_POST['like'];
    	if(empty($id)){
    		echo "<script>
    			alert('删除失败');
    			window.location.href='".U('Admin/Ping/index')."';
    			</script>";
    			die();
    	}
    	//转为字符串
    	$did = implode(',',$id);
    	//in 方法
    	$where['id'] = array('in',$did);
    	//实例化
    	$ping = M('ping');
    	
    	$res1 = $ping -> where($where) -> delete();
    	
    	if($res1)
    	{
    		echo "<script>
				alert('删除成功');
				window.location.href='".U('Admin/Ping/index')."';
    			</script>";
    	}else{
    		echo "<script>
    			alert('删除失败');
    			window.location.href='".U('Admin/Ping/index')."';
    			</script>";
    			die();
    	}
	}

}