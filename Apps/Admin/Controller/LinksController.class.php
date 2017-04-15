<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class LinksController extends BaseController {

	public function index()
	{
		//实例化
		$links = M('links');
		//接收num
		$num = I('get.num');
		if(!empty($num))
		{
			$num = I('get.num');
		}else{
			$num = 5;
		}
		//获取搜索值
		$where = I('get.search');
		if(!empty($where))
		{
			$where = "blogroll like '%".I('get.search')."%'";
		}else{
			$where = "";
		}
		//查询接收的条数
		$count = $links -> where($where) -> count();
		$page = new \Think\Page($count,$num);//实例化分页类
		$show = $page -> show();//分页显示输出
		$limit = $page -> firstRow.','.$page -> listRows;
		//查询数据
		$data = $links -> limit($limit) -> where($where) -> select();

		//分配变量
		$this -> pagestr = $show;
		$this -> assign('links',$data);
		$this -> assign('title','友情链接');
		$this -> display();
	}

	public function add()
	{
		$this -> assign('title','添加友情链接');
		$this -> display();
	}

	public function insert()
	{
		//实例化
		$links = M('links');
		//处理blogroll
		$blogroll = I('post.blogroll');
		$_POST['blogroll'] = htmlspecialchars(trim($blogroll));

		//过滤数据
		$links -> create();
		//添加
		
		if($links -> add())
		{
			echo "<script>
				alert('添加成功');
				window.location.href='".U('Admin/Links/index')."';
			</script>";
		}else{
			echo "<script>
				alert('添加失败');
				window.location.href='".U('Admin/Links/index')."';
			</script>";
			die();
		}
	}

	public function delete()
	{
		//实例化
		$links = M('links');
		//接收ID
		$id = I('get.id');
		//删除
		$dd = $links -> where("id = '".$id."'") -> delete();
		if($dd)
		{
			echo "<script>
				alert('删除成功');
				window.location.href='".U('Admin/Links/index')."';
			</script>";
		}else{
			echo "<script>
				alert('删除失败');
				window.location.href='".U('Admin/Links/index')."';
			</script>";
			die();
		}
	}

	public function del()
	{
		//实例化
		$links = M('links');
		//接收选中的id
		$id = I('post.like');
		if(empty($id))
		{
			echo "<script>
				alert('删除失败');
				window.location.href='".U('Admin/Links/index')."';
			</script>";
			die();
		}
		$did = implode(',',$id);
		$where['id'] = array('in',$did);
		//删除
		$del = $links -> where($where) -> delete();

		if($del)
    	{
    		echo "<script>
				alert('删除成功');
				window.location.href='".U('Admin/Links/index')."';
    			</script>";
    	}else{
    		echo "<script>
    			alert('删除失败');
    			window.location.href='".U('Admin/Links/index')."';
    			</script>";
    			die();
    	}
	}

	public function edit()
	{
		//实例化
		$links = M('links');
		$data = $links -> where("id = '".I('get.id')."'") -> find();

		//分配变量
		$this -> assign('data',$data);
		$this -> assign('title','修改链接');
		$this -> display();
	}

	public function update()
	{
		//实例化
		$links = M('links');
		//开启事务
		$links -> startTrans();
		//处理blogroll
		$blogroll = I('post.blogroll');
		$_POST['blogroll'] = htmlspecialchars(trim($blogroll));
		//过滤数据
		$links -> create();
		//修改
		$res = $links -> save();
		if($res){
			// 提交事务
			$links -> commit();
			echo "<script>
					alert('用户修改成功');
					window.location.href='".U('Admin/Links/index')."';
			</script>";
		}else{
			// 回滚事务
			$links -> rollback();
			echo "<script>
					alert('用户修改失败');
					window.location.href='".U('Admin/Links/index')."';
			</script>";
		}
	}
}