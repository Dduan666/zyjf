<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class UserController extends BaseController {

	public function index()
	{
		//实例化
		$user = M('user');
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
			$where = "name like '%".I('get.search')."%'";
		}else{
			$where = "";
		}
		//接收查询的条数
		$count = $user -> where($where) -> count();
		//实例化分页，传入总记录数和显示条数
		$page = new \Think\Page($count,$num);
		$show = $page -> show();//分页显示输出
		$limit = $page -> firstRow.','.$page -> listRows;
		$dd = $user -> limit($limit) -> where($where) -> select();

		//分配变量
		$this -> pagestr = $show;
		$this -> assign('user',$dd);
		$this -> assign('title','管理员列表');
		$this -> display();
	}

	public function add()
	{
		$this -> assign('title','管理员添加');
		$this -> display();
	}

	public function insert()
	{
		//实例化
		$user = M('user');
		//处理name
		$name = I('post.name');
		$_POST['name'] = htmlspecialchars(trim($name));
		//判断用户名是否存在
		$row = $user -> where(array('name' => $name)) -> find();
		if($row)
		{
			$this -> error('用户名已存在，请您更换!','',1);
		}
		//处理密码
		$password = I('post.password');
		$_POST['password'] = md5(trim($password));
		//获取当前时间
		$addtime = I('post.addtime');
		$_POST['addtime'] = time();
		//过滤数据
		
		$user -> create();
		//添加
		$res = $user -> add();
		if($res)
		{
			// $this -> redirect('/Admin/User/index');
			echo "<script>
				alert('添加成功');
				window.location.href='".U('Admin/User/index')."';
    			</script>";
			
		}else{
			$this -> error('添加失败');
		}
	}

	public function delete()
	{
		//实例化
		$user = M('user');
		$id = I('get.id');
		$ad = $user -> where("id = '".$id."'") -> find();
		if($ad['rank'] == 5)
		{
			echo "<script>
				alert('超级管理员不可以删除');
				window.location.href='".U('Admin/User/index')."';
    			</script>";
    			die;
		}else{
			$da = $user -> where("id = '".$id."'") -> delete();
			// 判断是否删除成功
	    	if($da)
	    	{
	    		echo "<script>
					alert('删除成功');
					window.location.href='".U('Admin/User/index')."';
	    			</script>";
	    			// die();
	    	}else{
	    		echo "<script>
	    			alert('删除失败');
	    			window.location.href='".U('Admin/User/index')."';
	    			</script>";
	    	}
	    }

	}

	public function del()
	{
		//实例化
		$user = M('user');
		//接收ID
		$id = I('post.like');
		$did = implode(',',$id);
		//in 方法
		$where['id'] = array('in',$did);
		$ad = $user -> where($where) ->field('rank')-> select();
		foreach($ad as $k => $v)
		{
			foreach ($v as $a => $l) {
			
				if($l == 5)
				{
					echo "<script>
						alert('超级管理员不可删除');
						window.location.href='".U('Admin/User/index')."';
		    			</script>";
		    			die;
				}
			}
		}
		
		//查询
		$res = $user -> where($where) -> delete();
		//判断
		if($res)
		{
			echo "<script>
				alert('删除成功');
				window.location.href='".U('Admin/User/index')."';
			</script>";
		}else{
			echo "<script>
				alert('删除失败');
				window.location.href='".U('Admin/User/index')."';
			</script>";
		}

		
	}

	public function edit()
	{
		//实例化
		$user = M('user');
		//查询
		
		$data = $user -> where("id = '".I('get.id')."'") -> find();
		if($data['rank'] == 5)
		{
			echo "<script>
				alert('超级管理员不可更改');
				window.location.href='".U('Admin/User/index')."';
    			</script>";
    			
		}
		//分配变量
		$this -> assign('data',$data);
		$this -> assign('title','管理员编辑');
		$this -> display();
	}

	public function update()
	{
		//实例化
		$user = M('user');

		//处理name
		$name = I('post.name');
		$_POST['name'] = htmlspecialchars(trim($name));
		$password = I('post.password');
		$_POST['password'] = md5(trim($password));
		//过滤数据
		$user -> create();
		//修改
		$res = $user -> save();
		//判断
		if($res)
		{
			echo "<script>
				alert('修改成功');
				window.location.href='".U('Admin/User/index')."';
			</script>";
		}else{
			echo "<script>
				alert('修改失败');
				window.location.href='".U('Admin/User/index')."';
			</script>";
		}
	}

	
}