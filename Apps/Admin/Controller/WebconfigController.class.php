<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class WebconfigController extends BaseController {
	public function index()
	{
		$webconfig = M('webconfig');
		
		$data = $webconfig -> find();
		//分配变量
		$this -> assign("data",$data);
		$this -> assign('title','网站配置');
		//解析模板
		$this -> display();
	}

	
	//修改
	// public function edit()
	// {
	// 	//接收ID
	// 	$id = I('get.id');
	// 	//实例化
	// 	$webconfig = M('webconfig');
	// 	//查询
	// 	$data = $webconfig -> where("id = '".$id."'") -> find();
	// 	//分配变量
	// 	$this -> assign('title','精英更改');
	// 	$this -> assign('webconfig','精英更改');
	// 	$this -> assign('data',$data);

	// 	$this -> display();
	// }
	//执行更改
	public function update()
	{
		//实例化
		$webconfig = M('webconfig');
		$da = $webconfig -> find();

		
		//开启事务
		$webconfig -> startTrans();
		
		if(!empty($_FILES['pic']['name'])){
			//判断是否上传头像
			if($_FILES['pic']['error'] != 0)
			{
				// $this -> error("上传头像有误");
				echo "<script>
					alert('上传头像有误');
					window.location.href='".U('Admin/Webconfig/index')."';
				</script>";
				die();
			}

			//处理图片
			//实例化上传类
			$upload = new \Think\Upload();
			$upload -> maxSize = 3145728;//设置附件上传大小
			$upload -> exts = array('jpg','jpeg','png','gif');//设置上传类型
			$upload -> rootPath = './Public/';//设置附件上传根目录
			$upload -> savePath = '/Uploads/Logo/';//设置附件上传子目录
			//上传文件
			$info = $upload -> upload();
			if(!$info)
			{
				//上传错误提示错误信息
				//$this -> error($upload -> getError());
				echo "<script>
					alert('".$upload -> getError()."');
					window.location.href='".U('Admin/Webconfig/index')."';
				</script>";
				die();
			}else{
				$_POST["pic"] = $info["pic"]["savepath"].$info["pic"]["savename"];
			}
			//删除头像
			$row = $webconfig -> where("id = '".$_POST['id']."'") -> find();
			$img = rtrim($_SERVER["SCRIPT_FILENAME"],"index.php")."Public".$row["pic"];
		
			//过滤数据
			$webconfig -> create();
			//修改表
			$ree = $webconfig -> save();

			if($ree)
			{
				//提交事务
				$webconfig -> commit();
				unlink($img);
				echo "<script>
						alert('用户修改成功');
						window.location.href='".U('Admin/Webconfig/index')."';
				</script>";
			}else{
				//回滚事务
				$webconfig -> rollback();
				echo "<script>
						alert('用户修改失败');
						window.location.href='".U('Admin/Webconfig/index')."';
				</script>";
			}
		}else{
			//过滤数据
			$webconfig -> create();
			//修改表
			$ree = $webconfig -> save();

			if($ree)
			{
				//提交事务
				$webconfig -> commit();
				
				echo "<script>
						alert('用户修改成功');
						window.location.href='".U('Admin/Webconfig/index')."';
				</script>";
			}else{
				//回滚事务
				$webconfig -> rollback();
				echo "<script>
						alert('用户修改失败');
						window.location.href='".U('Admin/Webconfig/index')."';
				</script>";
			}
		}

	}
}