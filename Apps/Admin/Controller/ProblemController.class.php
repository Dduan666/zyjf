<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class ProblemController extends BaseController {
    public function index()
    {
        //实例化
        $problem = M('problem');
        //接收num
        $num = I('get.num');
        if(!empty($num))
        {
            $num = I('get.num');
        }else{
            $num = 5;
        }
        //获取search的值
        $where = I('get.search');
        if(!empty($where))
        {
            $where = "title like '%".I('get.search')."%'";
        }else{
            $where = '';
        }

        //计算条数
        $count = $problem -> where($where) -> count();
        $page = new \Think\Page($count,$num);//实例化分页类  显示的总条数和页数
        $show = $page -> show();//分页显示输出
        $limit = $page -> firstRow.','.$page -> listRows;
        //查询
        $rr = $problem ->where($where) -> limit($limit) -> select();
        $data = array();
        foreach($rr as $k=>$v)
        {
            $data[$k]['id'] = $v['id'];
            $data[$k]['product'] = $v['product'];
            $data[$k]['title'] = $v['title'];
            $data[$k]['content'] = mb_substr($v['content'],0,50);
        }

        //分配变量
        $this -> pagestr = $show;
        $this -> assign('problem',$data);
        $this -> assign("title","攻略问答管理");
    	$this -> display();
    }

    public function add()
    {
        $this -> assign('title','攻略添加');
        $this -> display();

    }

    public function insert()
    {
        //实例化
        $problem = M('problem');

        //过滤数据
        $problem -> create();
        //执行修改
        $up = $problem -> add();
        if($up)
        {
            echo "<script>
                alert('添加成功');
                window.location.href='".U('Admin/Problem/index')."';
            </script>";
        }else{
            echo "<script>
                alert('添加失败');
                window.location.href='".U('Admin/Problem/index')."';
            </script>";
        }
        
    }

    public function delete()
    {
        //实例化
        $problem = M('problem');
        //接收传来的ID
        $id = I('get.id');

        //删除
        $delete = $problem -> where("id = '".$id."'") -> delete();
        
        //判断
        if($delete)
        {
            echo "<script>
                alert('删除成功');
                window.location.href='".U('Admin/Problem/index')."';
            </script>";
        }else{
            echo "<script>
                alert('删除失败');
                window.location.href='".U('Admin/Problem/index')."';
            </script>";
        }
    }

    public function del()
    {
        //实例化
        $problem = M('problem');
        //接收like
        $did = I('post.like');
        //判断是否选中like
        if(empty($did))
        {
            echo "<script>
                alert('删除失败,请选中再删除');
                window.location.href='".U('Admin/Problem/index')."';
            </script>";
            die();
        }

        //转为字符串
        $id = implode(',',$did);
        //使用in方法
        $where['id'] = array('in',$id);
        //执行删除
        $del = $problem -> where($where) -> delete();
        //判断
        if($del)
        {
            echo "<script>
                alert('删除成功');
                window.location.href='".U('Admin/Problem/index')."';
            </script>";
        }else{
            echo "<script>
                alert('删除失败');
                window.location.href='".U('Admin/Problem/index')."';
            </script>";
        }
    }

    public function edit()
    {
        //实例化
        $problem = M('problem');
        //查询
        $data = $problem -> where("id = '".$_GET["id"]."'") -> find();
        $data['content'] = htmlspecialchars_decode($data['content']);
        //分配变量
        $this -> assign('data',$data);
        $this -> assign('title','攻略问答修改');
        $this -> display();
    }
    
    public function update()
    {
        //实例化
        $problem = M('problem');
        $content = I('post.content');
        $_POST['contetn'] = htmlspecialchars(trim($content));
        //开启事务
        // $problem -> startTrans();
        
        //过滤数据
        $problem -> create();
        //执行修改
        $up = $problem -> save();
        if($up)
        {
            echo "<script>
                alert('修改成功');
                window.location.href='".U('Admin/Problem/index')."';
            </script>";
        }else{
            echo "<script>
                alert('修改失败');
                window.location.href='".U('Admin/Problem/index')."';
            </script>";
        }
        
    }
}