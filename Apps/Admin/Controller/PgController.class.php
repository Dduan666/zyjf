<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class PgController extends BaseController {
	public function index()
	{

		
		//实例化
    	$pg = M('pg');
    	
    	//查询用户数据

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
    		$where = "phone like '%".I('get.search')."%'";
    	}else{
    		$where = "";
    	}
    	//查询接受的条数
    	$count = $pg -> where($where) -> count();
    	
    	$page = new \Think\Page($count,$num);//实例化分页类 传入总记录数和显示记录数
    	$show = $page -> show();//分页显示输出
		$limit = $page->firstRow.','.$page->listRows;
    	// $data = $auser -> query("select * from lamp_auser order by id ASC limit ".$limit);
		$data = $pg -> limit($limit) -> where($where) -> order('time desc') -> select();
		// echo $auser -> _sql();
    	//分配变量
    	$this -> pagestr = $show;
		// $this -> assign("show",$show);
    	
    	$this -> assign("pg",$data);
        $this -> assign("title","未评估完列表页");
        //解析模板
        $this -> display();
	}

	public function delete()
	{
		//接收ID
    	$id = $_GET['id'];
    	
    	// 实例化
    	$pg = M('pg');

    	//按ID删除
    	$res = $pg -> where("id = '".$id."'") -> delete();
    	// 判断是否删除成功
    	if($res)
    	{
    		echo "<script>
				alert('删除成功');
				window.location.href='".U('Admin/Pg/index')."';
    			</script>";
    			// die();
    	}else{
    		echo "<script>
    			alert('删除失败');
    			window.location.href='".U('Admin/Pg/index')."';
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
    			window.location.href='".U('Admin/Pg/index')."';
    			</script>";
    			die();
    	}
    	//转为字符串
    	$did = implode(',',$id);
    	//in 方法
    	$where['id'] = array('in',$did);
    	//实例化
    	$pg = M('pg');
    	
    	$res1 = $pg -> where($where) -> delete();
    	
    	if($res1)
    	{
    		echo "<script>
				alert('删除成功');
				window.location.href='".U('Admin/Pg/index')."';
    			</script>";
    	}else{
    		echo "<script>
    			alert('删除失败');
    			window.location.href='".U('Admin/Pg/index')."';
    			</script>";
    			die();
    	}
	}
    //------------手机评估----------------
    public function index2()
    {

        
        //实例化
        $pgyd = M('pg_yd');
        
        //查询用户数据

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
            $where = "phone like '%".I('get.search')."%'";
        }else{
            $where = "";
        }
        //查询接受的条数
        $count = $pgyd -> where($where) -> count();
        
        $page = new \Think\Page($count,$num);//实例化分页类 传入总记录数和显示记录数
        $show = $page -> show();//分页显示输出
        $limit = $page->firstRow.','.$page->listRows;
        // $data = $auser -> query("select * from lamp_auser order by id ASC limit ".$limit);
        $data = $pgyd -> limit($limit) -> where($where) -> order('time desc') -> select();
        // echo $auser -> _sql();
        //分配变量
        $this -> pagestr = $show;
        // $this -> assign("show",$show);
        
        $this -> assign("pgyd",$data);
        $this -> assign("title","未评估完列表页");
        //解析模板
        $this -> display();
    }

    public function delet()
    {
        //接收ID
        $id = $_GET['id'];
        
        // 实例化
        $pgyd = M('pg_yd');

        //按ID删除
        $res = $pgyd -> where("id = '".$id."'") -> delete();
        // 判断是否删除成功
        if($res)
        {
            echo "<script>
                alert('删除成功');
                window.location.href='".U('Admin/Pg/index2')."';
                </script>";
                // die();
        }else{
            echo "<script>
                alert('删除失败');
                window.location.href='".U('Admin/Pg/index2')."';
                </script>";
        }
        
    }

    public function dels()
    {
        //接收ID
        $id = $_POST['like'];
        if(empty($id)){
            echo "<script>
                alert('删除失败');
                window.location.href='".U('Admin/Pg/index2')."';
                </script>";
                die();
        }
        //转为字符串
        $did = implode(',',$id);
        //in 方法
        $where['id'] = array('in',$did);
        //实例化
        $pgyd = M('pg_yd');
        
        $res1 = $pgyd -> where($where) -> delete();
        
        if($res1)
        {
            echo "<script>
                alert('删除成功');
                window.location.href='".U('Admin/Pg/index2')."';
                </script>";
        }else{
            echo "<script>
                alert('删除失败');
                window.location.href='".U('Admin/Pg/index2')."';
                </script>";
                die();
        }
    }

}