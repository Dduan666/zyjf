<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class AuserController extends BaseController {
    public function index()
    {
        
    	//实例化
    	$auser = M('auser');
    	//查询用户数据
    	// $value = $auser -> query("select * from lamp_auser"); 

    	//接受num值
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
    		$where = "username like '%".I('get.search')."%'";
    	}else{
    		$where = "";
    	}
    	//查询接受的条数
    	$count = $auser -> where($where) -> count();
    	
    	$page = new \Think\Page($count,$num);//实例化分页类 传入总记录数和显示记录数
    	$show = $page -> show();//分页显示输出
		$limit = $page->firstRow.','.$page->listRows;
    	// $data = $auser -> query("select * from lamp_auser order by id ASC limit ".$limit);
		$data = $auser -> limit($limit) -> where($where) -> select();
		// echo $auser -> _sql();
    	//分配变量
    	$this -> pagestr = $show;
		// $this -> assign("show",$show);
    	
    	$this -> assign("auser",$data);
        $this -> assign("title","用户列表页");
        //解析模板
        $this -> display();
    }

    //添加
    public function add()
    {
    	//分配变量
    	$this -> assign("title","添加用户");
    	//解析模板
    	$this -> display();
    }

    //执行添加
    public function insert()
    {
    	//实例化
    	$auser = M("auser");
    	//查询数据库
    	$data = $auser -> select();
    	$phone = I('post.phone');
    	// $a = $auser -> getField('phone',true);
    	$da = $auser -> where("phone = '".$phone."'") -> getField('id',true);

    	
    	// 处理username
		$username = I('post.username');
		$_POST['username'] = htmlspecialchars(trim($username));
    	//封装邮箱
    	function check_email($email){
			if(ereg('^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+',$email)){
				return true;
			}else{
				return false;
			}
		}
		//封装手机号
		function inphone($phone){
			if(preg_match('/^[1][3458][0-9]{9}$/',$phone)){
				return true;
			}else{
				return false;
			}
		}
		
		// 判断用户名是否为空
        $username = I('post.username');
        $password = I('post.password');
        $uname = I('post.uname');
		if(!empty($username) && !empty($password) && !empty($uname))
		{
			if(strlen(I('post.username')) < 6){
				echo "<script>
					alert('用户名不能少于6位');
					window.location.href='".U('Admin/Auser/add')."';
					</script>";
					die();
			}else{
				if(strlen(I('post.password')) < 6){
					echo "<script>
						alert('密码不能少于6位');
						window.location.href='".U('Admin/Auser/add')."';
						</script>";
						die();
				}else{
				
					if(I('post.password') !== I('post.repassword'))
					{
						echo "<script>
							alert('密码与确认密码不一致');
							window.location.href='".U('Admin/Auser/add')."';
							</script>";
							die();
					}else{
						
						if(check_email(I('post.email')))
						{
							
							if(inphone(I('post.phone')))
							{
								
								if($da == null)
								{
									echo "<script>
										alert('添加成功');
										window.location.href='".U('Admin/Auser/index')."';
										</script>";
								}else{
									echo "<script>
										alert('该手机号已添加');
										window.location.href='".U('Admin/Auser/add')."';
										</script>";
										die();
									
								}
							}else{
								echo "<script>
									alert('请输入正确手机号');
									window.location.href='".U('Admin/Auser/add')."';
									</script>";
									die();
							}
						}else{
							echo "<script>
								alert('请输入正确邮箱');
								window.location.href='".U('Admin/Auser/add')."';
								</script>";
								die();
						}
					}
				}
			}
		}else{
			
			echo "<script>
					alert('用户名或密码或姓名不能为空');
					window.location.href='".U('Admin/Auser/add')."';
			</script>";
			die();
		}

		// 处理username
		// $username = I('post.username');
		// $_POST['username'] = htmlspecialchars(trim($username));
		
		// 处理password
		$password = I('post.password');
        // $_POST['password'] = md5($password);
		$_POST['password'] = md5(trim($password));

		
		//过滤数据
		$auser -> create();
		//添加用户
		$auser -> add();

		
    }

    //删除
    public function delete()
    {
    	//接收ID
    	$id = $_GET['id'];
    	
    	// 实例化
    	$auser = M('auser');

    	//按ID删除
    	$res = $auser -> where("id = '".$id."'") -> delete();
    	// 判断是否删除成功
    	if($res)
    	{
    		echo "<script>
				alert('删除成功');
				window.location.href='".U('Admin/Auser/index')."';
    			</script>";
    			// die();
    	}else{
    		echo "<script>
    			alert('删除失败');
    			window.location.href='".U('Admin/Auser/index')."';
    			</script>";
    	}
    	
    }

    public function del()
    {
    	//接收ID
    	$id = $_POST['like'];
    	if(empty($id)){
    		echo "<script>
    			alert('删除失败');
    			window.location.href='".U('Admin/Auser/index')."';
    			</script>";
    			die();
    	}
    	//转为字符串
    	$did = implode(',',$id);
    	//in 方法
    	$where['id'] = array('in',$did);
    	//实例化
    	$auser = M('auser');
    	
    	$res1 = $auser -> where($where) -> delete();
    	
    	if($res1)
    	{
    		echo "<script>
				alert('删除成功');
				window.location.href='".U('Admin/Auser/index')."';
    			</script>";
    	}else{
    		echo "<script>
    			alert('删除失败');
    			window.location.href='".U('Admin/Auser/index')."';
    			</script>";
    			die();
    	}
    }

    //修改用户界面
    public function edit()
    {
    	//实例化
    	$auser = M('auser');
    	//查询
    	$data = $auser -> where("id = '".$_GET["id"]."'") -> find();
    	//分配变量
    	$this -> assign('data',$data);
    	$this -> assign('title','用户修改');
    	//解析模板
    	$this -> display();
    }

    public function update()
    {
    	//实例化
    	$auser = M('auser');
    	//开启事务
		$auser -> startTrans();
    	// 处理username
		$username = I('post.username');
		$_POST['username'] = htmlspecialchars(trim($username));
		// 过滤数据 只能过滤$_POST中的数据
		$auser -> create();
		// 修改表
		$res1 = $auser -> save();

		if($res1){
			// 提交事务
			$auser -> commit();
			echo "<script>
					alert('用户修改成功');
					window.location.href='".U('Admin/Auser/index')."';
			</script>";
		}else{
			// 回滚事务
			$auser -> rollback();
			echo "<script>
					alert('用户修改失败');
					window.location.href='".U('Admin/Auser/index')."';
			</script>";
		}
    }


}