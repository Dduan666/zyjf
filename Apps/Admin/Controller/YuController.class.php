<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class YuController extends BaseController {
    // public function index(){
        
        

    //     $yu = M('yu');
    //     $num = I('get.num');
    //     if(!empty($num)){
    //         $num = I('get.num');
    //     }else{
    //         $num = 5;
    //     }

    //     $where = I('get.search');
    //     if(!empty($where))
    //     {
    //         $where = "phone like '%".I('get.search')."%'";
    //     }else{
    //         $where = "";
    //     }

    //     $count = $yu -> where($where) -> count();
    //     $page = new \Think\Page($count,$num);
    //     $show = $page ->show();
    //     $limit = $page -> firstRow.','.$page -> listRows;
    //     $dd = $yu -> limit($limit) -> where($where) -> order('time desc') -> select();


    //     //分配变量
    //     $this -> pagestr = $show;
    //     $this -> assign('dd',$dd);
	   //  $this -> assign("title","手机预约");
    //     $this -> display();
    // }

    // public function delete()
    // {
    //     $de = M('yu');
    //     $id = I('get.id');

    //     $res = $de -> where('id = "'.$id.'"') -> delete();

    //     if($res)
    //     {
    //         echo "<script>
    //             alert('删除成功');
    //             window.location.href='".U('Admin/Yu/index')."';
    //             </script>";
    //             // die();
    //     }else{
    //         echo "<script>
    //             alert('删除失败');
    //             window.location.href='".U('Admin/Yu/index')."';
    //             </script>";
    //     }
    // }

    // public function del()
    // {
    //     //实例化
    //     $user = M('Yu');
    //     //接收ID
    //     $id = I('post.like');
    //     $did = implode(',',$id);
    //     //in 方法
    //     $where['id'] = array('in',$did);
    //     //查询
    //     $res = $user -> where($where) -> delete();
    //     //判断
    //     if($res)
    //     {
    //         echo "<script>
    //             alert('删除成功');
    //             window.location.href='".U('Admin/Yu/index')."';
    //         </script>";
    //     }else{
    //         echo "<script>
    //             alert('删除失败');
    //             window.location.href='".U('Admin/Yu/index')."';
    //         </script>";
    //     }
    // }
    
// ------------在线预约部分------------
 

    public function index2()
    {
        $yu = M('zaixian');
        $num = I('get.num');
        if(!empty($num)){
            $num = I('get.num');
        }else{
            $num = 5;
        }

        $where = I('get.search');
        if(!empty($where))
        {
            $where = "tname like '%".I('get.search')."%'";
        }else{
            $where = "";
        }

        $count = $yu -> where($where) -> count();
        $page = new \Think\Page($count,$num);
        $show = $page ->show();
        $limit = $page -> firstRow.','.$page -> listRows;
        $dd = $yu
            -> alias('y')
            -> join('left join __JY__ j on y.did=j.id')
            -> field('y.*,j.vname')
            -> limit($limit) 
            -> where($where)
            -> order('time desc') 
            -> select();


        //分配变量
        $this -> pagestr = $show;
        $this -> assign('dd',$dd);
        $this -> assign("title","在线预约");
        $this -> display();
    }

    public function delete2()
    {
        $de = M('zaixian');
        $id = I('get.id');

        $res = $de -> where('id = "'.$id.'"') -> delete();

        if($res)
        {
            echo "<script>
                alert('删除成功');
                window.location.href='".U('Admin/Yu/index2')."';
                </script>";
                // die();
        }else{
            echo "<script>
                alert('删除失败');
                window.location.href='".U('Admin/Yu/index2')."';
                </script>";
        }
    }

    public function del2()
    {
        //实例化
        $user = M('zaixian');
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
                window.location.href='".U('Admin/Yu/index2')."';
            </script>";
        }else{
            echo "<script>
                alert('删除失败');
                window.location.href='".U('Admin/Yu/index2')."';
            </script>";
        }
    }
}