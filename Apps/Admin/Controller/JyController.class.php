<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class JyController extends BaseController {
	public function index()
	{
		$jy = M('jy');
		//接收num
		$num = I('get.num');
		if(!empty($num))
		{
			$num = I('get.num');
		}else{
			$num = 5;
		}
		// 获取搜索的值 where username like '%.....%'
		$wh = I('get.search');
		if(!empty($wh))
		{
			$where = "vname like '%".I('get.search')."%'";
		}else{
			$where = "";
		}
		// import('ORG.Util.Page');// 导入分页类
		//分页跳转的时候保存查询条件
		// foreach($where as $key=>$val) {
			
		//     $page->parameter.="$key=".urlencode($wh)."&";//赋值给Page

		// }
		
		
		//查询接收的条数
		$count = $jy -> where($where) -> count();
		//实例化分页类
		$page = new \Think\Page($count,$num);//实例化分页类 传入总记录数和显示记录数
		$show = $page -> show();//分页显示输出
		$limit = $page -> firstRow.','.$page -> listRows;
		$res = $jy -> limit($limit) -> where($where) -> select();
		

		$data = array();
		foreach ($res as $k=>$v) {
			
				$data[$k]['id']=$v['id'];
		        $data[$k]['vname']=$v['vname'];
		        $data[$k]['money']=$v['money'];
		        $data[$k]['pic']=$v['pic'];
		        $data[$k]['sex']=$v['sex'];
		        $data[$k]['position']=$v['position'];
		        $data[$k]['self']=mb_substr($v['self'],0,50);
		        $data[$k]['style']=$v['style'];
		        $data[$k]['title1']=$v['title1'];
		        $data[$k]['title2']=$v['title2'];
		        $data[$k]['title3']=$v['title3'];
		        $data[$k]['title4']=$v['title4'];
		        $data[$k]['title5']=$v['title5'];
		        $data[$k]['case']=mb_substr($v['case'],0,50);
		        $data[$k]['casetwo']=mb_substr($v['casetwo'],0,50);
		        $data[$k]['casethree']=mb_substr($v['casethree'],0,50);
		        $data[$k]['casefour']=mb_substr($v['casefour'],0,50);
		        $data[$k]['casefive']=mb_substr($v['casefive'],0,50);
		        $data[$k]['status']=$v['status'];

				$t1=str_replace('1','经营类贷款', $v['business']);
	            $t2=str_replace('2','消费类贷款',$t1);
	            $t3=str_replace('3','短期贷款',$t2);
	            $t4=str_replace('4','信用贷款',$t3);

	            $data[$k]['business']=$t4;
			
		}
		
		//分配变量
    	$this -> pagestr = $show;
		$this -> assign("show",$show);
		$this -> assign("jy",$data);
		$this -> assign('title','精英列表');
		//解析模板
		$this -> display();
	}

	public function add()
	{
		//分配变量
		$this -> assign('title','精英添加');
		//解析模板
		$this -> display();
	}

	public function insert()
	{
		//实例化
		$jy = M("jy");
		//查询数据库
		// $data = $jy -> select();

		// 处理vname
		$dd = $_POST['business'];
		$_POST['business'] = implode(',', $dd);
		
		$vname = I('post.vname');
		$_POST['vname'] = htmlspecialchars(trim($vname));
		//判断各项不能为空
		$vname = I('post.vname');
		$self = I('post.self');
		$business = I('post.business');
		$style = I('post.style');
		$case = I('post.case');
		if(empty($vname))
		{
			echo "<script>
				alert('姓名不能为空');
				window.location.href='".U('Admin/Jy/add')."';
				</script>";
				die();
				
		}
			if(strlen(I('post.vname')) < 6)
			{
				echo "<script>
					alert('请输入正确姓名');
					window.location.href='".U('Admin/Jy/add')."';
					</script>";
					die();
			}
		if(!empty($_FILES['pic']['name'])){	
			//判断是否上传头像
			if($_FILES['pic']['error'] != 0)
			{
				// $this -> error("上传头像有误");
				echo "<script>
					alert('上传头像有误');
					window.location.href='".U('Admin/Jy/add')."';
				</script>";
				die();
			}
			//处理图片
			$upload = new \Think\Upload();//实例化上传类
			$upload -> maxSize = 3145728;//设置附件上传大小
			$upload -> exts = array('jpg','png','gif','jpeg');//设置附件上传类型
			$upload ->rootPath = './Public/';// 设置附件上传根目录  
			$upload ->savePath = '/Uploads/upload/';// 设置附件上传子目录  

			$info = $upload -> upload();
			if(!$info) {// 上传错误提示错误信息
		        echo "<script>
						alert('".$upload->getError()."');
						window.location.href='".U('Admin/Jy/add')."';
				</script>";
				die();
				// $this->error($upload->getError());
		    }else{// 上传成功
		    	$_POST["pic"] = $info["pic"]["savepath"].$info["pic"]["savename"];
		   //      echo "<script>
					// alert('添加成功');
					// window.location.href='".U('Admin/Jy/index')."';
					// </script>";
		    }
		}	
		
		//过滤数据
		$jy -> create();
		//添加
		$re = $jy -> add();
		
		
	
		if($re){
			echo "<script>
				alert('添加成功');
				window.location.href='".U('Admin/Jy/index')."';
				</script>";
			$data['uid'] = $re;
			M('click') -> data($data) -> add();
		}


	}

	//删除
	public function delete()
	{
		//接收ID
		$id = I('get.id');
		//实例化
		$jy = M('jy');
		//删除头像
		$row = $jy -> where("id = '".$_GET['id']."'") -> find();
		$img = rtrim($_SERVER["SCRIPT_FILENAME"],"index.php")."Public".$row["pic"];
		//按ID删除
		$res = $jy -> where("id = '".$id."'") -> delete();

		//判断是否删除成功
		if($res)
		{
			unlink($img);
			echo "<script>
				alert('删除成功');
				window.location.href='".U('Admin/Jy/index')."';
			</script>";
			//同时删除评价表的信息
			M('click') -> where('uid = "'.$id.'"') -> delete();
			//同时删除管理表信息
			M('user') -> where('jid = "'.$id.'"') -> delete();
		}else{
			echo "<script>
				alert('删除失败');
				window.location.href='".U('Admin/Jy/index')."';
			</script>";
			// die();
		}
	}
	//批量删除
	public function del()
	{
		//接收ID
		$id = I('post.like');
		
		//判断没选中的情况
		if(empty($id))
		{
			echo "<script>
				alert('删除失败');
				window.location.href='".U('Admin/Jy/index')."';
			</script>";
		}

		//转为字符串
		$sid = implode(',',$id);
		
		//in 方法
		$where['id'] = array('in',$sid);

		$wh['uid'] = array('in',$sid);

		$whe['jid'] = array('in',$sid);
		
		//实例化
		$jy = M('jy');
		// 删除头像
		// $row = $jy -> where("id",$sid) -> select();
		$row = $jy -> where($where) -> select();
		// $img = rtrim($_SERVER["SCRIPT_FILENAME"],"index.php")."Public".$row["pic"];
		foreach($row as $k => $v){
			// echo $v;
			$img = rtrim($_SERVER["SCRIPT_FILENAME"],"index.php")."Public".$v["pic"];
			unlink($img);
		}
		
		//删除
		$dd = $jy -> where($where) -> delete();
		//判断
		if($dd)
		{
            echo "<script>
				alert('删除成功');
				window.location.href='".U('Admin/Jy/index')."';
			</script>";
			//同时删除评价表的信息
			M('click') -> where($wh) -> delete();
			//同时删除管理表信息
			M('user') -> where($whe) -> delete();
            
		}else{
			echo "<script>
				alert('删除失败');
				window.location.href='".U('Admin/Jy/index')."';
			</script>";
		}
	}

	//修改
	public function edit()
	{
		//接收ID
		$id = I('get.id');
		//实例化
		$jy = M('jy');
		//查询
		$data = $jy -> where("id = '".$id."'") -> find();
		//分配变量
		$this -> assign('title','精英更改');
		$this -> assign('jy','精英更改');
		$this -> assign('data',$data);

		$this -> display();
	}
	//执行更改
	public function update()
	{
		//实例化
		$jy = M('jy');
		//开启事务
		$jy -> startTrans();
		$id = I('post.id');

		//处理vname
		$vname = I('post.vname');
		$_POST['vname'] = htmlspecialchars(trim($vname));
		
		if(!empty($_FILES['pic']['name'])){
			//判断是否上传头像
			if($_FILES['pic']['error'] != 0)
			{
				// $this -> error("上传头像有误");
				echo "<script>
					alert('上传头像有误');
					window.location.href='".U('Admin/Jy/index')."';
				</script>";
				die();
			}

			//处理图片
			//实例化上传类
			$upload = new \Think\Upload();
			$upload -> maxSize = 3145728;//设置附件上传大小
			$upload -> exts = array('jpg','jpeg','png','gif');//设置上传类型
			$upload -> rootPath = './Public/';//设置附件上传根目录
			$upload -> savePath = '/Uploads/upload/';//设置附件上传子目录
			//上传文件
			$info = $upload -> upload();
			if(!$info)
			{
				//上传错误提示错误信息
				//$this -> error($upload -> getError());
				echo "<script>
					alert('".$upload -> getError()."');
					window.location.href='".U('Admin/Jy/index')."';
				</script>";
				die();
			}else{
				$_POST["pic"] = $info["pic"]["savepath"].$info["pic"]["savename"];
			}
			//删除头像
			$row = $jy -> where("id = '".$_POST['id']."'") -> find();
			$img = rtrim($_SERVER["SCRIPT_FILENAME"],"index.php")."Public".$row["pic"];
			//过滤数据
			$jy -> create();
			//修改表
			$ree = $jy -> save();

			if($ree)
			{
				//提交事务
				$jy -> commit();
				unlink($img);
				echo "<script>
						alert('用户修改成功');
						window.location.href='".U('Admin/Jy/index')."';
				</script>";
			}else{
				//回滚事务
				$jy -> rollback();
				echo "<script>
						alert('用户修改失败');
						window.location.href='".U('Admin/Jy/edit',array('id'=>$id))."';
				</script>";
			}
		}else{

			//过滤数据
			$jy -> create();
			//修改表
			
			$ree = $jy -> save();
			
			if($ree)
			{
				//提交事务
				$jy -> commit();
				
				echo "<script>
						alert('用户修改成功');
						window.location.href='".U('Admin/Jy/index')."';
				</script>";
			}else{
				//回滚事务
				$jy -> rollback();
				echo "<script>
						alert('用户修改失败');
						window.location.href='".U('Admin/Jy/edit',array('id'=>$id))."';
				</script>";
			}
		}

	}
}