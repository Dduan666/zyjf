<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class ByController extends BaseController {
    public function index(){
        
        

        $yu = M('by');
        $num = I('get.num');
        if(!empty($num)){
            $num = I('get.num');
        }else{
            $num = 5;
        }

        $where = I('get.search');
        if(!empty($where))
        {
            $where = "ename like '%".I('get.search')."%'";
        }else{
            $where = "";
        }

        $count = $yu -> where($where) -> count();
        $page = new \Think\Page($count,$num);
        $show = $page ->show();
        $limit = $page -> firstRow.','.$page -> listRows;
        $dd = $yu -> limit($limit) -> where($where) -> select();


        //分配变量
        $this -> pagestr = $show;
        $this -> assign('dd',$dd);
	    $this -> assign("title","手机预约");
        $this -> display();
    }

    public function delete()
    {
        $de = M('by');
        $id = I('get.id');

        $res = $de -> where('id = "'.$id.'"') -> delete();

        if($res)
        {
            echo "<script>
                alert('删除成功');
                window.location.href='".U('Admin/by/index')."';
                </script>";
                // die();
        }else{
            echo "<script>
                alert('删除失败');
                window.location.href='".U('Admin/by/index')."';
                </script>";
        }
    }

    public function del()
    {
        //实例化
        $user = M('by');
        //接收ID
        $id = I('post.like');
        $did = implode(',',$id);
        //in 方法
        $where['id'] = array('in',$did);
        //查询
        $res = $user -> where($where) -> delete();
        //判断
        if($res)
        {
            echo "<script>
                alert('删除成功');
                window.location.href='".U('Admin/by/index')."';
            </script>";
        }else{
            echo "<script>
                alert('删除失败');
                window.location.href='".U('Admin/by/index')."';
            </script>";
        }
    }
    

}