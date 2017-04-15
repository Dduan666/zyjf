<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class TypeController extends BaseController {
	public function index()
	{
		$type = M('type');
		//接收num
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
			$where = "id like '%".I('get.search')."%'";
		}else{
			$where = "";
		}
		//查询接收的条数
		$count = $type -> where($where) -> count();
		//实例化分页类
		$page = new \Think\Page($count,$num);//实例化分页类 传入总记录数和显示记录数
		$show = $page -> show();//分页显示输出
		$limit = $page -> firstRow.','.$page -> listRows;
		$data = $type -> limit($limit) -> where($where) -> select();
		
		//分配变量
    	$this -> pagestr = $show;
		$this -> assign("show",$show);
		$this -> assign("type",$data);
		$this -> assign('title','服务列表');
		//解析模板
		$this -> display();
	}

	public function add()
	{
		//分配变量
		$this -> assign('title','服务添加');
		//解析模板
		$this -> display();
	}

	public function insert()
	{
		//实例化
		$type = M("type");
		
		
		//处理图片
		$upload = new \Think\Upload();//实例化上传类
		$upload -> maxSize = 3145728;//设置附件上传大小
		$upload -> exts = array('jpg','png','gif','jpeg');//设置附件上传类型
		$upload ->rootPath = './Public/';// 设置附件上传根目录  
		$upload ->savePath = '/Uploads/img/';// 设置附件上传子目录  

		$info = $upload -> upload();
		if(!$info) {// 上传错误提示错误信息
	        echo "<script>
					alert('".$upload->getError()."');
					window.location.href='".U('Admin/Type/add')."';
			</script>";
			die();
			// $this->error($upload->getError());
	    }else{// 上传成功
	    	$_POST["pic"] = $info["pic"]["savepath"].$info["pic"]["savename"];
	    	$_POST["cover"] = $info["cover"]["savepath"].$info["cover"]["savename"];
	        echo "<script>
				alert('添加成功');
				window.location.href='".U('Admin/Type/index')."';
				</script>";
	    }
		//过滤数据
		$type -> create();
		//添加
		$type -> add();

	}

	//修改
	public function edit()
	{
		//接收ID
		$id = I('get.id');
		//实例化
		$type = M('type');
		//查询
		$data = $type -> where("id = '".$id."'") -> find();
		//分配变量
		$this -> assign('title','服务更改');
		$this -> assign('type','服务更改');
		$this -> assign('data',$data);
		$this -> display();
	}
	//执行更改
	public function update()
	{
		
		//实例化
		$type = M('type');
		//开启事务
		$type -> startTrans();
		

		if(!empty($_FILES['pic']['name']) || !empty($_FILES['cover']['name'])){
			//判断是否上传头像
			if($_FILES['pic']['error'] != 0 && $_FILES['cover']['error'] != 0)
			{
				// $this -> error("上传头像有误");
				echo "<script>
					alert('上传头像有误');
					window.location.href='".U('Admin/Type/index')."';
				</script>";
				die();
			}

			//处理图片
			//实例化上传类
			$upload = new \Think\Upload();
			$upload -> maxSize = 3145728;//设置附件上传大小
			$upload -> exts = array('jpg','jpeg','png','gif');//设置上传类型
			$upload -> rootPath = './Public/';//设置附件上传根目录
			$upload -> savePath = '/Uploads/img/';//设置附件上传子目录
			//上传文件
			$info = $upload -> upload();

			if(!$info)
			{
				//上传错误提示错误信息
				//$this -> error($upload -> getError());
				echo "<script>
					alert('".$upload -> getError()."');
					window.location.href='".U('Admin/Type/index')."';
				</script>";
				die();
			}else{
				$_POST["pic"] = $info["pic"]["savepath"].$info["pic"]["savename"];
				$_POST["cover"] = $info["cover"]["savepath"].$info["cover"]["savename"];
			}
			//删除头像
			$row = $type -> where("id = '".$_POST['id']."'") -> find();
			$pic = I('post.pic');
			$cover = I('post.cover');
			if(!empty($pic) && !empty($cover)){
				$img = $_POST["pic"];
				$imgs = $_POST["cover"];

			}else if(!empty($cover)){
				$imgs = $_POST["cover"];
			}else if(!empty($pic)){
				$img = $_POST["pic"];
			}
			//过滤数据
			$type -> create();
			//修改表
			if(!empty($img) && !empty($imgs)){
				$ree = $type -> where("id = '".$_POST['id']."'") -> data(array('pic'=>$img,'cover'=>$imgs)) -> save();
				
			}else if(!empty($img)){
				$ree = $type -> where("id = '".$_POST['id']."'") -> data(array('pic'=>$img)) -> save();
			}else if(!empty($imgs)){
				$ree = $type -> where("id = '".$_POST['id']."'") -> data(array('cover'=>$imgs)) -> save();
			}
			
			
			if($ree)
			{
				//提交事务
				$type -> commit();
				echo "<script>
						alert('用户修改成功');
						window.location.href='".U('Admin/Type/index')."';
				</script>";
			}else{
				//回滚事务
				$type -> rollback();
				echo "<script>
						alert('用户修改失败');
						window.location.href='".U('Admin/Type/index')."';
				</script>";
			}
		}else{
			//过滤数据
			// $type -> create();
			//修改表
			$ree = $type -> save();

			if($ree)
			{
				//提交事务
				$type -> commit();
				
				echo "<script>
						alert('用户修改成功');
						window.location.href='".U('Admin/Type/index')."';
				</script>";
			}else{
				//回滚事务
				$type -> rollback();
				echo "<script>
						alert('用户修改失败');
						window.location.href='".U('Admin/Type/index')."';
				</script>";
			}
		}
		

	}
}