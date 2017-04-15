<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class ServeController extends BaseController {
	//显示
	public function index()
	{
		//实例化
		$serve = M('serve');
		$num = I('get.num');
		if($num)
		{
			$where = 'type = "'.$num.'"';
		}else{
			$where = '';
		}

		//数据条数
		$count = $serve -> where($where) -> count();
		//分页
		$page = new \Think\Page($count,8);
		$show = $page -> show();  //分页显示输出
		$limit = $page -> firstRow.','.$page -> listRows;
		$re = $serve -> where($where) -> limit($limit) -> select();
		
		$this -> pagestr = $show;
		$this -> assign('serve',$re);
		$this -> assign('title','服务产品列表');
		$this -> display();
	}
	//添加
	public function add()
	{
		$this -> assign('title','服务产品添加');
		$this -> display();
	}

	public function insert()
	{
		//实例化
		$serve = M('serve');

		$type = I('post.type');
		$name = I('post.name');
		$_POST['name'] = htmlspecialchars(trim($name));
		//查出服务下的一个产品进行判断，使添加的产品不重复
		$row = $serve -> where("type='%d' and name='%s'",array($type,$name)) -> find();
		if($row)
		{
			echo "<script>
				alert('添加的产品重复');
				window.location.href='".U('Admin/Serve/add')."';
			</script>";
			die;
		}

		$time = I('post.time');
		$_POST['time'] = time();
		//过滤
		$serve -> create();
		//添加
		$res = $serve -> add();
		//判断
		if($res)
		{
			echo "<script>
				alert('添加成功');
				window.location.href='".U('Admin/Serve/index')."';
			</script>";
		}else{
			echo "<script>
				alert('添加失败');
				window.location.href='".U('Admin/Serve/add')."';
			</script>";
		}
	}
	//编辑
	public function edit()
	{
		$serve = M('serve');
		$id = I('get.id');
		$data = $serve -> where('id = "'.$id.'"') -> find();

		$this -> assign('data',$data);
		$this -> assign('title','服务产品更改');
		$this -> display();
	}
	//修改
	public function update()
	{
		$serve = M('serve');
		$id = I('post.id');
		$name = I('post.name');
		$_POST['name'] = htmlspecialchars(trim($name));
		
		$serve -> create();

		$res = $serve -> save();
		
		if($res)
		{
			echo "<script>
				alert('修改成功');
				window.location.href='".U('Admin/Serve/index')."';
			</script>";
		}else{
			echo "<script>
				alert('修改失败');
				window.location.href='".U('Admin/Serve/edit',array('id'=>$id))."';
			</script>";
		}
	}
	//删除
	public function delete()
	{
		$serve = M('serve');
		$id = I('get.id');
		$res = $serve -> where('id = "'.$id.'"') -> delete();
		if($res)
		{
            echo "1";
            return ;
        }else{
            echo "2";
            return ;
        }
	}
	//批量删除
	public function del()
	{
		$serve = M('serve');
		$id = I('post.id');
		if(empty($id))
		{
			echo "<script>
				alert('删除失败，请选中再删除');
				window.location.href='".U('Admin/Serve/index')."';
			</script>";
		}
		$sid = implode(',',$id);
		$where['id'] = array('in',$sid);
		
		$res = $serve -> where($where) -> delete();
		if($res)
		{
            echo "1";
            return ;
        }else{
            echo "2";
            return ;
        }
    }
	
}