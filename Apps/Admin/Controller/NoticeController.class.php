<?php
namespace Admin\Controller;
use Admin\Common\BaseController;
header('content-type:text/html;charset=utf-8;');
class NoticeController extends BaseController {
    public function index()
    {
        //实例化
        $notice = M('notice');
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
            $where = "team like '%".I('get.search')."%'";
        }else{
            $where = '';
        }

        //计算条数
        $count = $notice -> where($where) -> count();
        $page = new \Think\Page($count,$num);//实例化分页类  显示的总条数和页数
        $show = $page -> show();//分页显示输出
        $limit = $page -> firstRow.','.$page -> listRows;
        //查询
        $rr = $notice ->where($where) -> limit($limit) -> select();
        $data = array();
        foreach($rr as $k=>$v)
        {
            $data[$k]['id'] = $v['id'];
            $data[$k]['team'] = $v['team'];
            $data[$k]['pic'] = $v['pic'];
            $data[$k]['vpic'] = $v['vpic'];
            $data[$k]['title'] = $v['title'];
            $data[$k]['tit'] = $v['tit'];
            $data[$k]['content'] = mb_substr($v['content'],0,50);
            $data[$k]['time'] = $v['time'];
        }

        //分配变量
        $this -> pagestr = $show;
        $this -> assign('notice',$data);
        $this -> assign("title","资讯管理");
    	$this -> display();
    }

    public function add()
    {
        $this -> assign('title','资讯添加');
        $this -> display();

    }

    public function insert()
    {
        //实例化
        $notice = M('notice');

        if(!empty($_FILES['pic']['name']) || !empty($_FILES['vpic']['name'])){
            //判断是否上传头像
            if($_FILES['pic']['error'] != 0 && $_FILES['vpic']['error'] != 0)
            {
                // $this -> error("上传头像有误");
                echo "<script>
                    alert('上传头像有误');
                    window.location.href='".U('Admin/Notice/index')."';
                </script>";
                die();
            }
            //处理图片
            $upload = new \Think\Upload();//实例化上传类
            $upload -> maxSize = 3145728;//设置附件上传大小
            $upload -> exts = array('jpg','png','gif','jpeg');//设置附件上传类型
            $upload ->rootPath = './Public/';// 设置附件上传根目录  
            $upload ->savePath = '/Uploads/notice/';// 设置附件上传子目录  

            $info = $upload -> upload();
            if(!$info) {// 上传错误提示错误信息
                echo "<script>
                        alert('".$upload->getError()."');
                        window.location.href='".U('Admin/Notice/add')."';
                </script>";
                die();
                // $this->error($upload->getError());
            }else{// 上传成功
                $_POST["pic"] = $info["pic"]["savepath"].$info["pic"]["savename"];
                $_POST["vpic"] = $info["vpic"]["savepath"].$info["vpic"]["savename"];
            }
            //添加
            $notice -> create();
            $res = $notice -> add();
            if($res){
                // $this -> redirect('/Admin/Notice/index');
                echo "<script>
                    alert('添加成功');
                    window.location.href='".U('Admin/Notice/index')."';
                </script>";
            }else{
                echo "<script>
                    alert('添加失败');
                    window.location.href='".U('Admin/Notice/add')."';
                </script>";
            
            }
        }else{

            //过滤数据
            $notice -> create();
            //执行修改
            $up = $notice -> add();
            if($up)
            {
                echo "<script>
                    alert('添加成功');
                    window.location.href='".U('Admin/Notice/index')."';
                </script>";
            }else{
                echo "<script>
                    alert('添加失败');
                    window.location.href='".U('Admin/Notice/index')."';
                </script>";
            }
        }
    }

    public function delete()
    {
        //实例化
        $notice = M('notice');
        //接收传来的ID
        $id = I('get.id');

        //删除
        $delete = $notice -> where("id = '".$id."'") -> delete();
        
        //判断
        if($delete)
        {
            echo "<script>
                alert('删除成功');
                window.location.href='".U('Admin/Notice/index')."';
            </script>";
        }else{
            echo "<script>
                alert('删除失败');
                window.location.href='".U('Admin/Notice/index')."';
            </script>";
        }
    }

    public function del()
    {
        //实例化
        $notice = M('notice');
        //接收like
        $did = I('post.like');
        //判断是否选中like
        if(empty($did))
        {
            echo "<script>
                alert('删除失败,请选中再删除');
                window.location.href='".U('Admin/Notice/index')."';
            </script>";
            die();
        }

        //转为字符串
        $id = implode(',',$did);
        //使用in方法
        $where['id'] = array('in',$id);
        //执行删除
        $del = $notice -> where($where) -> delete();
        //判断
        if($del)
        {
            echo "<script>
                alert('删除成功');
                window.location.href='".U('Admin/Notice/index')."';
            </script>";
        }else{
            echo "<script>
                alert('删除失败');
                window.location.href='".U('Admin/Notice/index')."';
            </script>";
        }
    }

    public function edit()
    {
        //实例化
        $notice = M('notice');
        //查询
        $data = $notice -> where("id = '".$_GET["id"]."'") -> find();
        $data['content'] = htmlspecialchars_decode($data['content']);
        //分配变量
        $this -> assign('data',$data);
        $this -> assign('title','资讯修改');
        $this -> display();
    }
    
    public function update()
    {
        //实例化
        $notice = M('notice');
        $content = I('post.content');
        $_POST['contetn'] = htmlspecialchars(trim($content));
        //开启事务
        // $notice -> startTrans();
        

        if(!empty($_FILES['pic']['name']) || !empty($_FILES['vpic']['name'])){
            //判断是否上传头像
            if($_FILES['pic']['error'] != 0 && $_FILES['vpic']['error'] != 0)
            {
                // $this -> error("上传头像有误");
                echo "<script>
                    alert('上传头像有误');
                    window.location.href='".U('Admin/Notice/index')."';
                </script>";
                die();
            }

            //处理图片
            //实例化上传类
            $upload = new \Think\Upload();
            $upload -> maxSize = 3145728;//设置附件上传大小
            $upload -> exts = array('jpg','jpeg','png','gif');//设置上传类型
            $upload -> rootPath = './Public/';//设置附件上传根目录
            $upload -> savePath = '/Uploads/notice/';//设置附件上传子目录
            //上传文件
            $info = $upload -> upload();

            if(!$info)
            {
                //上传错误提示错误信息
                //$this -> error($upload -> getError());
                echo "<script>
                    alert('".$upload -> getError()."');
                    window.location.href='".U('Admin/Notice/index')."';
                </script>";
                die();
            }else{
                $_POST["pic"] = $info["pic"]["savepath"].$info["pic"]["savename"];
                $_POST["vpic"] = $info["vpic"]["savepath"].$info["vpic"]["savename"];
            }

            //删除头像
            $row = $notice -> where("id = '".$_POST['id']."'") -> find();
            $pic['pic'] = I('post.pic');
            $pic['vpic'] = I('post.vpic');
            //if(!empty($pic) && !empty($vpic)){
            //    $img = $_POST["pic"];
            //    $imgs = $_POST["vpic"];

            //}else if(!empty($vpic)){
             //   $imgs = $_POST["vpic"];
            //}else if(!empty($pic)){
            //    $img = $_POST["pic"];
           // }
			
 
            //过滤数据
            $notice -> create();
			
            //修改表
            if(!empty($img) && !empty($imgs)){
                $ree = $notice -> where("id = '".$_POST['id']."'") -> data(array('pic'=>$img,'vpic'=>$imgs)) -> save();
                
            }else if(!empty($img)){
                $ree = $notice -> where("id = '".$_POST['id']."'") -> data(array('pic'=>$img)) -> save();
            }else if(!empty($imgs)){
                $ree = $notice -> where("id = '".$_POST['id']."'") -> data(array('vpic'=>$imgs)) -> save();
            }
           
            
            if($ree)
            {
                //提交事务
                // $notice -> commit();
                echo "<script>
                        alert('用户修改成功');
                        window.location.href='".U('Admin/Notice/index')."';
                </script>";
            }else{
                //回滚事务
                // $notice -> rollback();
                echo "<script>
                        alert('用户修改失败');
                        window.location.href='".U('Admin/Notice/index')."';
                </script>";
            }
        }else{
            //过滤数据
            $notice -> create();
            //执行修改
            $up = $notice -> save();
            if($up)
            {
                echo "<script>
                    alert('修改成功');
                    window.location.href='".U('Admin/Notice/index')."';
                </script>";
            }else{
                echo "<script>
                    alert('修改失败');
                    window.location.href='".U('Admin/Notice/index')."';
                </script>";
            }
        }
        
       
    }
}