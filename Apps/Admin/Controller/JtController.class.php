<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class JtController extends BaseController {
	public function index()
	{
		$jt = M('jt');
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
		$count = $jt -> where($where) -> count();
		//实例化分页类
		$page = new \Think\Page($count,$num);//实例化分页类 传入总记录数和显示记录数
		$show = $page -> show();//分页显示输出
		$limit = $page -> firstRow.','.$page -> listRows;
		$data = $jt -> limit($limit) -> where($where) -> select();
		
		//分配变量
    	$this -> pagestr = $show;
		$this -> assign("show",$show);
		$this -> assign("jt",$data);
		$this -> assign('title','精英顾问图列表');
		//解析模板
		$this -> display();
	}

	public function add()
	{
		//分配变量
		$this -> assign('title','精英顾问图添加');
		//解析模板
		$this -> display();
	}

	public function insert()
	{
		//实例化
		$jt = M("jt");
		
		
		//处理图片
		$upload = new \Think\Upload();//实例化上传类
		$upload -> maxSize = 3145728;//设置附件上传大小
		$upload -> exts = array('jpg','png','gif','jpeg');//设置附件上传类型
		$upload ->rootPath = './Public/';// 设置附件上传根目录  
		$upload ->savePath = '/Uploads/jt/';// 设置附件上传子目录  

		$info = $upload -> upload();
		if(!$info) {// 上传错误提示错误信息
	        echo "<script>
					alert('".$upload->getError()."');
					window.location.href='".U('Admin/Jt/add')."';
			</script>";
			die();
			// $this->error($upload->getError());
	    }else{// 上传成功
	    	$_POST["pic"] = $info["pic"]["savepath"].$info["pic"]["savename"];
	        echo "<script>
				alert('添加成功');
				window.location.href='".U('Admin/Jt/index')."';
				</script>";
	    }
		//过滤数据
		$jt -> create();
		//添加
		$jt -> add();

	}

	//修改
	public function edit()
	{
		//接收ID
		$id = I('get.id');
		//实例化
		$jt = M('jt');
		//查询
		$data = $jt -> where("id = '".$id."'") -> find();
		//分配变量
		$this -> assign('title','精英顾问图更改');
		$this -> assign('jt','精英顾问图更改');
		$this -> assign('data',$data);
		$this -> display();
	}
	//执行更改
	public function update()
	{
		
		//实例化
		$jt = M('jt');
		//开启事务
		$jt -> startTrans();
		

		if(!empty($_FILES['pic']['name'])){
			//判断是否上传头像
			if($_FILES['pic']['error'] != 0)
			{
				// $this -> error("上传头像有误");
				echo "<script>
					alert('上传头像有误');
					window.location.href='".U('Admin/Jt/index')."';
				</script>";
				die();
			}

			//处理图片
			//实例化上传类
			$upload = new \Think\Upload();
			$upload -> maxSize = 3145728;//设置附件上传大小
			$upload -> exts = array('jpg','jpeg','png','gif');//设置上传类型
			$upload -> rootPath = './Public/';//设置附件上传根目录
			$upload -> savePath = '/Uploads/jt/';//设置附件上传子目录
			//上传文件
			$info = $upload -> upload();

			if(!$info)
			{
				//上传错误提示错误信息
				//$this -> error($upload -> getError());
				echo "<script>
					alert('".$upload -> getError()."');
					window.location.href='".U('Admin/Jt/index')."';
				</script>";
				die();
			}else{
				$_POST["pic"] = $info["pic"]["savepath"].$info["pic"]["savename"];
			}
			//删除头像
			$row = $jt -> where("id = '".$_POST['id']."'") -> find();
			$img = rtrim($_SERVER["SCRIPT_FILENAME"],"index.php")."Public".$row["pic"];
			//过滤数据
			$jt -> create();
			//修改表
			$ree = $jt -> save();
			if($ree)
			{
				//提交事务
				$jt -> commit();
				unlink($img);
				echo "<script>
						alert('修改成功');
						window.location.href='".U('Admin/Jt/index')."';
				</script>";
			}else{
				//回滚事务
				$jt -> rollback();
				echo "<script>
						alert('修改失败');
						window.location.href='".U('Admin/Jt/index')."';
				</script>";
			}
		}else{
			//过滤数据
			//修改表
			$ree = $jt -> save();

			if($ree)
			{
				//提交事务
				$jt -> commit();
				
				echo "<script>
						alert('修改成功');
						window.location.href='".U('Admin/Jt/index')."';
				</script>";
			}else{
				//回滚事务
				$jt -> rollback();
				echo "<script>
						alert('修改失败');
						window.location.href='".U('Admin/Jt/index')."';
				</script>";
			}
		}
		

	}
}