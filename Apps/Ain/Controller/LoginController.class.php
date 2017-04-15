<?php
namespace Ain\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8;');
//登录控制器
class LoginController extends Controller {

	//输出登录页面
    public function login(){
        // if(session('user_business')){
        //     $this->redirect('/Ain/Index/index');
        // }
        $this -> display();
    }

    //验证登录信息
    public function doLogin()
    {
    	//1.实例化model类
    	$user_business = M('user_business');
        $post = I('post.');
    	//2.根据用户名和密码直接查询数据
    	$where = array(
            'name' => $post['name'],
        );

    	$data = $user_business -> where("name='%s'",$post['name']) -> find();   //查询一条数据
    	

    	if($data){
            $verify = new \Think\Verify();
            if(!$verify -> check($post['vcode']))
            {
                echo "<script>
                alert('验证码输入错误');
                window.location.href='".U('Ain/Login/login')."';
                </script>";
                die();
            }
            
            if(md5($post['password']) != $data['password']){
                // $this -> error('用户密码错误');
                echo "<script>
                alert('用户密码错误');
                window.location.href='".U('Ain/Login/login')."';
                </script>";
                die();
            }
            if(!$data['id'])
            {
                // $this -> error('登录失败');
                echo "<script>
                alert('登录失败');
                window.location.href='".U('Ain/Login/login')."';
                </script>";
                die();
            }else if($data['status'] != 1){
                // $this -> error('此管理员已被禁用');
                echo "<script>
                alert('此业务管理员已被禁用');
                window.location.href='".U('Ain/Login/login')."';
                </script>";
                die();
            }else{
                unset($data['password']);
                $data['token'] = md5(time());
                session('user_business',$data);
                // $_SESSION['id'] = $data['id'];
                //修改登录信息
                $da['lasttime'] = time();
                $da['token'] = $data['token'];
                $ids = $data['id'];
                M('user_business') ->where("id = $ids") -> save($da);
                if($data['rank'] == 2){
                    $this -> success('登录成功',U('Ain/Feng/fengkong_main'),1);
                }else{
                    $this -> success('登录成功',U('Ain/Html/index'),1);
                }
            }
                       	
    	}else{
    		// $this -> error('登录失败,用户名或密码错误');
            echo "<script>
                alert('登录失败,用户名或密码错误');
                window.location.href='".U('Ain/Login/login')."';
                </script>";
                die(); 
    	}
    }

    public function loginOut()
    {
        session('user_business',null);
        $this->redirect('Login/login');
    }
}










//     //验证注册信息
//     public function Loginzhuce()
//     {
        
//         $this -> display();     
//     }

//     public function doLoginzhuce()
//     {
//         $user_business = M("user_business");

//         //处理name
//         $name = I('post.name');
//         $_POST['name'] = htmlspecialchars(trim($name));
 
        
//         // 向数据库添加数据
//         // 处理password
//         $password = I('post.password');
//         $_POST['password'] = md5(trim($password));
//         // var_dump($_POST);

//         //过滤数据
//         $user_business -> create();
//         // 添加用户
//         $uid = $user_business -> add();

       
//         if($uid){
//             $this -> success('添加成功',U('Ain/Login/login'));
//         }else{
//             $this -> error('添加失败');
//         }

//     }
