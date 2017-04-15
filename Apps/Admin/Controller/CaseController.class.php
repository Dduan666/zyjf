<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class CaseController extends BaseController {
	public function index()
	{
		//实例化
		$case = M('case');
		//接收num
		$num = I('get.num');
		if(!empty($num))
		{
			$num = I('get.num');
		}else{
			$num = 5;
		}
		//获取搜索值 where title like '%...%';
		$where = I('get.search');
		if(!empty($where))
		{
			$where = "title like '%".I('get.search')."%'";
		}else{
			$where = "";
		}
		//查询接受的条数
		$count = $case -> where($where) -> count();
		$page = new \Think\Page($count,$num);//实例化分页类
		$show = $page -> show();//显示分页类
		$limit = $page -> firstRow.','.$page -> listRows;

		//查询数据库
		$data = $case -> limit($limit) -> where($where) -> select();
		//分配变量
		$this -> pagestr = $show;
		$this -> assign('case',$data);
		$this -> assign('title','成功案例');
		//解析模板
		$this -> display();
	}

	//添加
	public function add()
	{
		//分配变量
		$this -> assign('title','案例添加');
		//解析模板
		$this -> display();
	}

	//执行添加
	public function insert()
	{
		//实例化
		$case = M('case');
		//处理title
		$title = I('post.title');
		$_POST['title'] = htmlspecialchars(trim($title));
		//过滤数据
		$case -> create();
		//添加
		if($case -> add())
		{
			echo "<script>
				window.location.href='".U('Admin/Case/index')."';
			</script>";
		}	
	}

	//修改
	public function edit()
	{
		//实例化
		$case = M('case');
		//查询出所要修改的数据
		$data = $case -> where("id = '".I('get.id')."'") -> find();
		//分配变量
		$this -> assign('data',$data);
		$this -> assign('title','案例修改');
		//解析模板
		$this -> display();
	}

	//执行修改
	public function update()
	{
		//实例化
		$case = M('case');
		//开启事务
		$case -> startTrans();
		//处理title
		$title = I('post.title');
		$_POST['title'] = htmlspecialchars(trim($title));
		//过滤数据
		$case -> create();
		//修改表
		$res = $case -> save();
		
		if($res)
		{
			//提交事务
			$case -> commit();
			echo "<script>
				alert('修改成功');
				window.location.href='".U('Admin/Case/index')."';
			</script>";
		}else{
			//事务回滚
			$case -> rollback();
			echo "<script>
				alert('修改失败');
				window.location.href='".U('Admin/Case/index')."';
			</script>";
		}
	}

	//删除
	public function delete()
	{
		//实例化
		$case = M('case');
		//获取id
		$id = I('get.id');
		//按ID删除
		$dd = $case -> where("id = '".$id."'") -> delete();
		//判断
		if($dd)
		{
			echo "<script>
				alert('删除成功');
				window.location.href='".U('Admin/Case/index')."';
			</script>";
		}else{
			echo "<script>
				alert('删除失败');
				window.location.href='".U('Admin/Case/index')."';
			</script>";
		}

	}

	//批量删除
	public function del()
	{
		//实例化
		$case = M('case');

		//获取多个id
		$uid = I('post.like');
		if(empty($uid))
		{
			echo "<script>
    			alert('删除失败');
    			window.location.href='".U('Admin/Case/index')."';
    			</script>";
    			die();
		}
		//转为字符串
		$did = implode(',',$uid);
		//in 方法
		$where['id'] = array('in',$did);
		
		//查询并删除
		$res1 = $case -> where($where) -> delete();
		//判断
		if($res1)
		{
			echo "<script>
				alert('删除成功');
				window.location.href='".U('Admin/Case/index')."';
			</script>";
		}else{
			echo "<script>
				alert('删除失败');
				window.location.href='".U('Admin/Case/index')."';
			</script>";
			die();
		}
	}

}