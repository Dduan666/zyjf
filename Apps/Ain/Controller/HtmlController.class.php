<?php
namespace Ain\Controller;
use Ain\Common\DscController;
header('content-type:text/html;charset=utf-8;');
class HtmlController extends DscController {
    public function index(){
        
        $jid = session('user_business.jid');
        $jy = M('jy');
        $data = $jy -> where('id = "'.$jid.'"') -> find();

        //业务页显示预约电话，显示被预约精英的和无指定精英的预约
        $yu = M('zaixian');
        $where = "did = '".$jid."' or did = ''";
        // $jj = $yu -> where($where) -> order('time desc') -> select();
        $jj = $yu
            -> alias('y')
            -> join('left join __JY__ j on y.did=j.id')
            -> field('y.*,j.vname')
            -> limit($limit) 
            -> where($where)
            -> order('did asc,time desc') 
            -> select();
        foreach ($jj as $k => $v) {
            $dd[$k]['id'] = $v['id'];
            $dd[$k]['vname'] = $v['vname'];
            $dd[$k]['phone'] = $v['phone'];
            $dd[$k]['did'] = $v['did'];
            $dd[$k]['time'] = $v['time']+60*60*24;
            $dd[$k]['xtime'] = time();

        }
    	// 分配变量
        $this -> assign('dd',$dd); 
    	$this -> assign('data',$data);//分配权限
	    $this -> assign("title","后台首页");
        // 解析模板
	    // Ain/Index/index.html
        $this -> display();
    }

    public function ajax()
    {
        $dd['yid'] = I('post.jid');
        $dd['case'] = I('post.case');
        $dd['casetwo'] = I('post.casetwo');
        $dd['casethree'] = I('post.casethree');
        $dd['casefour'] = I('post.casefour');
        $dd['casefive'] = I('post.casefive');
        $dd['time'] = time();
        

        $sh = M('sh');
        $as = $sh -> where('yid = "'.$dd['yid'].'"') -> find();
        if(!empty($as)){

            $da = $sh -> where('yid = "'.$dd['yid'].'"') -> data($dd) -> save();

        }else{
            $da = $sh -> data($dd) -> add();
        }
        
    }

    public function pic()
    {

        //实例化
        $sh = M('sh');
        
        $id = session('user_business.jid');
        if(!empty($_FILES['pic']['name'])){
            //判断是否上传头像
            if($_FILES['pic']['error'] != 0)
            {
                // $this -> error("上传头像有误");
                echo "<script>
                    alert('上传头像有误');
                    window.location.href='".U('Ain/Html/index')."';
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
                    window.location.href='".U('Ain/Html/index')."';
                </script>";
                die();
            }else{
                $_POST["pic"] = $info["pic"]["savepath"].$info["pic"]["savename"];
            }
            //删除头像
            $row = $sh -> where("yid = '".$id."'") -> find();
            if(!empty($row)){
                $img = rtrim($_SERVER["SCRIPT_FILENAME"],"index.php")."Public".$row["pic"];
                //过滤数据
                $sh -> create();
                //修改表
                $ree = $sh -> where('yid = "'.$id.'"') -> save();

                if($ree)
                {
                    unlink($img);
                    echo "<script>
                            alert('头像提交成功，等待审核');
                            window.location.href='".U('Ain/Html/index')."';
                    </script>";
                }else{
                    echo "<script>
                            alert('头像修改失败');
                            window.location.href='".U('Ain/Html/index')."';
                    </script>";
                }
            }else{
                $_POST['yid'] = $id;
                $_POST['time'] = time();
                $rr = $sh -> data($_POST) -> add();
                if($rr)
                {
                    echo "<script>
                            alert('头像成功,等待审核');
                            window.location.href='".U('Ain/Html/index')."';
                    </script>";
                }else{
                    echo "<script>
                            alert('头像修改失败');
                            window.location.href='".U('Ain/Html/index')."';
                    </script>";
                }
            }
        
        }else{
            echo "<script>
                        alert('请上传你的头像');
                        window.location.href='".U('Ain/Html/index')."';
                </script>";
        }
    } 

    public function add()
    {
        $jid = I('post.jid');
        $jy = M('jy');
        $sh = M('sh');

        $dd['sname'] = I('post.vname');
        $dd['sex'] = I('post.sex');
        $dd['position'] = I('post.position');
        $dd['money'] = I('post.money');
        $dd['self'] = I('post.self');
        $dd['business'] = I('post.business');
        $dd['style'] = I('post.style');
        $dd['time'] = time();
        
        $aa = $jy -> where('id = "'.$jid.'"') -> find();

        if(empty($dd['sname']))
        {
            $dd['sname'] = $aa['vname'];
        }
        if(empty($dd['sex']))
        {
            $dd['sex'] = $aa['sex'];
        }
        if(empty($dd['position']))
        {
            $dd['position'] = $aa['position'];
        }
        if(empty($dd['money']))
        {
            $dd['money'] = $aa['money'];
        }
        if(empty($dd['self']))
        {
            $dd['self'] = $aa['self'];
        }
        if(empty($dd['business']))
        {
            $dd['business'] = $aa['business'];

        }
        if(empty($dd['style']))
        {
            $dd['style'] = $aa['style'];
        }

        $ss = $sh -> where('yid = "'.$jid.'"') -> find();
        if(!empty($ss))
        {
            $da = $sh -> where('yid = "'.$jid.'"') -> data($dd) -> save();
        }else{
            $dd['yid'] = I('post.jid');

            $da = $sh -> data($dd) -> add();
        }
        
        if($da)
        {
            echo 1;
        }else{
            echo 2;
        }

    }
    public function pass()
    {
        $id = I('post.jid');
        $data['password'] = I('post.password');
        $repassword = I('post.repassword');
        if(empty($data['password']))
        {
            echo 1;
            return ;
        }
        if(empty($repassword))
        {
            echo 2;
            return ;
        }
        if(strlen($data['password']) < 6)
        {
            echo 3;
            return ;
        }
        if($data['password'] !== $repassword)
        {
            echo 4;
            return ;    
        }
        $user_business = M('user_business');
        //处理密码
        $_POST['password'] = md5(trim($data['password']));

        $res = $user_business -> where('jid = "'.$id.'"') -> save($_POST);
        
    }

    public function edit()
    {
        $id = I('post.id');

        $yu = M('zaixian');
        $ss = $yu -> where('id = "'.$id.'"') -> find();
        //判断此单是否已被抢(多人同时登陆下不会时时刷新,防止被抢的单子再次被抢)
        if(!empty($ss['did']))
        {
            echo "1";
            return false;
        }

        //把已抢的单子添上自己姓名，使这个单子不再在他人列表显示
        $did = session('user_business.jid');
        $yu -> did = $did;
        $res = $yu -> where('id = "'.$id.'"') -> save();
        if($res)
        {
            echo "2";
            return ;
        }else{
            echo "3";
            return ;
        }
    
    }

}