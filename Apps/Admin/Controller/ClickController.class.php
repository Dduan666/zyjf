<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class ClickController extends BaseController {
	public function index()
	{
		
		//实例化
		$click = M('click');
		//接收num值
		$num = I('get.num');
		//判断
		if(!empty($num))
		{
			$num = I('get.num');
		}else{
			$num = 5;
		}
		// //获取搜索的值
		// $where = I('get.search');
		// if(!empty($where))
		// {
		// 	$where = "id like '%".I('get.search')."%'";
		// }else{
		// 	$where = "";
		// }
		//接收查询的条数
		$count = $click -> count();
		//实例化分页，传入总记录数和显示条数
		$page = new \Think\Page($count,$num);
		$show = $page -> show();//分页显示输出
		$limit = $page -> firstRow.','.$page -> listRows;
		// $data = $user -> limit($limit) -> where($where) -> select();

		//查询
		$data = $click
		-> alias('c')
		-> limit($limit)
		-> join('left join __JY__ j on c.uid = j.id')
		-> field('c.id,c.uid,c.oclick,c.tclick,c.sclick,c.grade,j.vname')
		-> select();
		
		//分配变量
		$this -> pagestr = $show;
		$this -> assign('click',$data);
		$this -> assign('title','精英评价');
		$this -> display();
	}

	public function add(){
		//实例化
		$click = M('click');
		//查询
		// $dd = $click -> select();

		// $data = M('jy') -> select();
		$data = M('jy')
				-> alias('j')
				-> join('left join __CLICK__ c on j.id = c.uid')
				-> field('j.id,j.vname,c.uid,c.oclick,c.tclick,c.sclick')
				-> select();
		
		//分配变量
		$this -> assign('data',$data);
		// $this -> assign('dd',$dd);

		$this -> assign('title','评价添加');
		$this -> display();
	}

	public function insert(){
		//实例化
		$click = M('click');

		$click -> create();
		
		$res = $click -> add();
		if($res){
            // $this -> redirect('/Admin/Notice/index');
            echo "<script>
                alert('添加成功');
                window.location.href='".U('Admin/Click/index')."';
            </script>";
        }else{
            echo "<script>
                alert('添加失败');
                window.location.href='".U('Admin/Click/add')."';
            </script>";
        }
	}

	public function edit()
	{
		//实例化
		$click = M('click');
		$data = $click 
				-> alias('c')
				-> join('left join __JY__ j on c.uid = j.id')
				-> where("c.id = '".I('get.id')."'")
				-> field('c.id,c.uid,c.oclick,c.tclick,c.sclick,j.vname') 
				-> find();
				
		// $da = M('jy') -> select();
		//分配变量
		$this -> assign('data',$data);
		// $this -> assign('jy',$da);
		$this -> assign('title','评价修改');
		$this -> display();

	}

	public function update()
	{
		$click = M('click');

		// $click['grade'] = (integer)($click['oclick']*100 + $click['tclick']*60 + $click['sclick']);
	
		
		$click -> create();

		$res = $click -> save();

		if($res)
		{
			echo "<script>
				alert('修改成功');
				window.location.href='".U('Admin/Click/index')."';
			</script>";
		}else{
			echo "<script>
				alert('修改失败');
				window.location.href='".U('Admin/Click/edit')."';
			</script>";
		}
	}

	public function delete()
	{
		//实例化
		$click = M('click');
		//接收ID
		$id = I('get.id');
		//执行删除
		$delete = $click -> where('id = "'.$id.'"') -> delete();
		//判断是否删除成功
		if($delete)
		{
			echo "<script>
				alert('删除成功');
				window.location.href='".U('Admin/Click/index')."';
			</script>";
		}else{
			echo "<script>
				alert('删除失败');
				window.location.href='".U('Admin/Click/index')."';
			</script>";
		}
	}

	public function del()
	{
		//实例化
		$click = M('click');
		//接收like
		$did = I('post.like');
		//判断接到的like是否为空
		if(empty($did))
		{
			echo "<script>
				alert('您还未选中，请先选中再删除');
				window.location.href='".U('Admin/Click/index')."';
			</script>";
			die();
		}
		//转为字符串
		$uid = implode(',',$did);
		//用in方法
		$where['id'] = array('in',$uid);

		$del = $click -> where($where) -> delete();
		//判断删除是否成功
		if($del)
		{
			echo "<script>
				alert('批量删除成功');
				window.location.href='".U('Admin/Click/index')."';
			</script>";
		}else{
			echo "<script>
				alert('批量删除失败');
				window.location.href='".U('Admin/Click/index')."';
			</script>";
		}
	}

	
}