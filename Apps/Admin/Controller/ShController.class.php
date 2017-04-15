<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class ShController extends BaseController {
	public function index()
	{
		$sh = M('sh');
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
			$where = "sname like '%".I('get.search')."%'";
		}else{
			$where = "";
		}
		//查询接收的条数
		$count = $sh -> where($where) -> count();
		//实例化分页类
		$page = new \Think\Page($count,$num);//实例化分页类 传入总记录数和显示记录数
		$show = $page -> show();//分页显示输出
		$limit = $page -> firstRow.','.$page -> listRows;
		$res = $sh -> limit($limit) -> where($where) -> select();

		$data = array();
		foreach ($res as $k=>$v) {
			
				$data[$k]['id']=$v['id'];
				$data[$k]['yid']=$v['yid'];
		        $data[$k]['sname']=$v['sname'];
		        $data[$k]['money']=$v['money'];
		        $data[$k]['pic']=$v['pic'];
		        $data[$k]['sex']=$v['sex'];
		        $data[$k]['position']=$v['position'];
		        $data[$k]['self']=mb_substr($v['self'],0,30);
		        $data[$k]['style']=$v['style'];
		        $data[$k]['title1']=$v['title1'];
		        $data[$k]['title2']=$v['title2'];
		        $data[$k]['title3']=$v['title3'];
		        $data[$k]['title4']=$v['title4'];
		        $data[$k]['title5']=$v['title5'];
		        $data[$k]['case']=mb_substr($v['case'],0,40);
		        $data[$k]['casetwo']=mb_substr($v['casetwo'],0,40);
		        $data[$k]['casethree']=mb_substr($v['casethree'],0,40);
		        $data[$k]['casefour']=mb_substr($v['casefour'],0,40);
		        $data[$k]['casefive']=mb_substr($v['casefive'],0,40);
		        $data[$k]['status']=$v['status'];
		        $data[$k]['time']=$v['time'];

				$t1=str_replace('1','经营类贷款', $v['business']);
	            $t2=str_replace('2','消费类贷款',$t1);
	            $t3=str_replace('3','短期贷款',$t2);
	            $t4=str_replace('4','信用贷款',$t3);

	            $data[$k]['business']=$t4;
			
		}
		
		//分配变量
    	$this -> pagestr = $show;
		$this -> assign("show",$show);
		$this -> assign("sh",$data);
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
		$sh = M("sh");

		// 处理sname
		$dd = $_POST['business'];
		$_POST['business'] = implode(',', $dd);
		
		$sname = I('post.sname');
		$_POST['sname'] = htmlspecialchars(trim($sname));
		//判断姓名不能为空
		$sname = I('post.sname');
		if(empty($sname))
		{
			echo "<script>
				alert('姓名不能为空');
				window.location.href='".U('Admin/Sh/add')."';
				</script>";
				die();
				
		}
			if(strlen(I('post.sname')) < 6)
			{
				echo "<script>
					alert('请输入正确姓名');
					window.location.href='".U('Admin/Sh/add')."';
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
					window.location.href='".U('Admin/Sh/add')."';
				</script>";
				die();
			}
			//处理图片
			$upload = new \Think\Upload();//实例化上传类
			$upload -> maxSize = 3145728;//设置附件上传大小
			$upload -> exts = array('jpg','png','gif','jpeg');//设置附件上传类型
			$upload ->rootPath = './Public/';// 设置附件上传根目录  
			$upload ->savePath = '/Uploads/Sh/';// 设置附件上传子目录  

			$info = $upload -> upload();

			if(!$info) {// 上传错误提示错误信息
		        echo "<script>
						alert('".$upload->getError()."');
						window.location.href='".U('Admin/Sh/add')."';
				</script>";
				die();
				// $this->error($upload->getError());
		    }else{// 上传成功
		    	$_POST["pic"] = $info["pic"]["savepath"].$info["pic"]["savename"];
		    }
		}
				
		
		//过滤数据
		$sh -> create();
		//添加
		$re = $sh -> add();
		
		
	
		if($re){
			echo "<script>
				alert('添加成功');
				window.location.href='".U('Admin/Sh/index')."';
				</script>";
			$data['uid'] = $re;
			// M('click') -> data($data) -> add();
		}

	}

	public function edit()
	{
		$sh = M('sh');
		$id = I('get.id');
		$data = $sh -> where('id = "'.$id.'"') -> find();

		$this -> assign('data',$data);
		$this -> assign('title','精英审核更改');
		$this -> display();
	}

	public function update()
	{
		$sh = M('sh');
		$id = I('post.id');
		$sname = I('post.sname');
		$_POST['sname'] = htmlspecialchars(trim($sname));

		if(!empty($_FILES['pic']['name']))
		{
			if($_FILES['pic']['error'] != 0)
			{
				echo "<script>
					alert('上传头像有误');
					window.location.href='".U('Admin/Sh/edit')."';
				</script>";
				die;
			}
			//处理图片
			$upload = new \Think\Upload();//实例化上传类
			$upload -> maxSize = 3145728;//设置附件上传大小
			$upload -> exts = array('jpeg','jpg','png','gif');//设置图片类型
			$upload -> rootPath = './Public/';		//上传的根目录
			$upload -> savePath = '/Uploads/Sh/';	//上传的子目录

			$info = $upload -> upload();
			
			if(!$info)
			{
				echo "<script>
					alert('".$upload -> getError()."');
					window.location.href='".U('Admin/Sh/edit')."';
				</script>";
				die;
			}else{
				$_POST['pic'] = $info['pic']['savepath'].$info['pic']['savename'];
			}
			//删除头像
			$row = $sh -> where('id = "'.$id.'"') -> find();
			$img = rtrim($_SERVER["SCRIPT_FILENAME"],"index.php")."Public".$row["pic"];
			
			//过滤数据
			$sh -> create();

			//修改
			$res = $sh -> save();

			if($res)
			{
				unlink($img);
				echo "<script>
					alert('修改成功');
					window.location.href='".U('Admin/Sh/index')."';
				</script>";
			}else{
				echo "<script>
					alert('修改失败');
					window.location.href='".U('Admin/Sh/edit',array('id'=>$id))."';
				</script>";
			}
		}else{
			//过滤数据
			$sh -> create();

			//修改
			$res = $sh -> save();

			if($res)
			{
				
				echo "<script>
					alert('修改成功');
					window.location.href='".U('Admin/Sh/index')."';
				</script>";
			}else{
				echo "<script>
					alert('修改失败');
					window.location.href='".U('Admin/Sh/edit',array('id'=>$id))."';
				</script>";
			}
		}
		
	}

	public function delete()
	{
		$sh = M('sh');
		$id = I('get.id');

		//删除头像
		$row = $sh -> where('id = "'.$id.'"') -> find();
		$img = rtrim($_SERVER["SCRIPT_FILENAME"],"index.php")."Public".$row["pic"];
		$dat = M('jy') -> where('id = "'.$id.'"') -> find();
		if($row['pic'] != $dat['pic'])
		{
			unlink($img);
		}

		$res = $sh -> where('id = "'.$id.'"') -> delete();
		if($res)
		{
			
			echo "<script>
					alert('删除成功');
					window.location.href='".U('Admin/Sh/index')."';
				</script>";
		}else{
			echo "<script>
				alert('删除失败');
				window.location.href='".U('Admin/Sh/index')."';
			</script>";
		}
	}

	public function del()
	{
		$sh = M('sh');
		$id = I('post.like');
		if(empty($id))
		{
			echo "<script>
				alert('删除失败,请选中再进行删除');
				window.location.href='".U('Admin/Sh/index')."';
			</script>";
		}
		$did = implode(',',$id);
		$where['id'] = array('in',$did);
		
		//删除数据同时删除头像
		// $row = $sh -> where($where) -> select();
		// foreach($row as $k => $v){
		// 	$img = rtrim($_SERVER["SCRIPT_FILENAME"],"index.php")."Public".$v["pic"];
		// 	unlink($img);
		// }

		//删除数据
		$res = $sh -> where($where) -> delete();
		if($res)
		{
			echo "<script>
					alert('删除成功');
					window.location.href='".U('Admin/Sh/index')."';
				</script>";
		}else{
			echo "<script>
				alert('删除失败');
				window.location.href='".U('Admin/Sh/index')."';
			</script>";
		}
	}

	public function tong()
	{
		$sh = M('sh');
		$id = I('get.id');
		$res = $sh -> where('id = "'.$id.'"') -> find();
		$data['id'] = $res['yid'];
		$data['vname'] = $res['sname'];
		$data['pic'] = $res['pic'];
		$data['sex'] = $res['sex'];
		$data['position'] = $res['position'];
		$data['money'] = $res['money'];
		$data['self'] = $res['self'];
		$data['business'] = $res['business'];
		$data['style'] = $res['style'];
		$data['case'] = $res['case'];
		$data['casetwo'] = $res['casetwo'];
		$data['casethree'] = $res['casethree'];
		$data['casefour'] = $res['casefour'];
		$data['casefive'] = $res['casefive'];
		$data['status'] = $res['status'];
		 

		//判断精英是否存在，不存在就add，存在就save
		$ca = M('jy') -> where('id = "'.$res['yid'].'"') -> find();
		//判断，如果为空的字段，赋予以前的数据
		if(empty($res['sname'])){
			$data['vname'] = $ca['vname'];
		}
		if(empty($res['pic'])){
			$data['pic'] = $ca['pic'];
		}
		if(empty($res['sex'])){
			$data['sex'] = $ca['sex'];
		}
		if(empty($res['position'])){
			$data['position'] = $ca['position'];
		}
		if(empty($res['money'])){
			$data['money'] = $ca['money'];
		}
		if(empty($res['self'])){
			$data['self'] = $ca['self'];
		}
		if(empty($res['business'])){
			$data['business'] = $ca['business'];
		}
		if(empty($res['style'])){
			$data['style'] = $ca['style'];
		}
		if(empty($res['case'])){
            $data['case'] = $ca['case'];
          
        }
        if(empty($res['casetwo'])){
            $data['casetwo'] = $ca['casetwo'];
        }
        if(empty($res['casethree'])){
            $data['casethree'] = $ca['casethree'];
        }
        if(empty($res['casefour'])){
            $data['casefour'] = $ca['casefour'];
        }
        if(empty($res['casefive'])){
            $data['casefive'] = $ca['casefive'];
            
        }
		
		
		if(!empty($ca)){
			//修改时因要更新头像，删除以前头像,头像如果一样则不删除
			if($ca['pic'] == $res['pic'] or $res['pic'] == null){
				M('jy') -> where('id = "'.$ca['id'].'"') -> save($data);
			}else{
				$img = rtrim($_SERVER["SCRIPT_FILENAME"],"index.php")."Public".$ca["pic"];
				unlink($img);
				M('jy') -> where('id = "'.$ca['id'].'"') -> save($data);
			}
			
		}else{
			$aa = M('jy') -> data($data) -> add();

			$data['uid'] = $aa;
			M('click') -> data($data) -> add();

		}
		
		//审核完后在审核页删除此数据
		$ree = $sh -> where('id = "'.$id.'"') -> delete();
		if($ree)
		{
			echo "<script>
				alert('已通过审核');
				window.location.href='".U('Admin/Sh/index')."';
			</script>";
		}else{
			echo "<script>
				alert('审核通过失败');
				window.location.href='".U('Admin/Sh/index')."';
			</script>";
		}
		
	}


}