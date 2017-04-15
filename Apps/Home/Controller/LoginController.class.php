<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8;');
class LoginController extends Controller {
    public function login(){
        $this -> display();
    }

    public function doLogin()
    {
    	$auser = M('auser');
    	$post = I('post.');

    	$where = array(
            'phone' => $post['phone'],
    	);

    	$data = $auser -> where("phone='%s'",$post['phone']) -> find();

    	if($data){
    		$verify = new \Think\Verify();
            if(!$verify -> check($post['vcode']))
            {
                echo "<script>
                alert('验证码输入错误');
                window.location.href='".U('Home/Login/login')."';
                </script>";
                die();
            }
            if(md5($post['password']) != $data['password']){
                // $this -> error('用户密码错误');
                echo "<script>
                alert('用户密码错误');
                window.location.href='".U('Home/Login/login')."';
                </script>";
                die();
            }else if($data['status'] != 1){
                // $this -> error('此管理员已被禁用');
                echo "<script>
                alert('此用户已被禁用');
                window.location.href='".U('Home/Login/login')."';
                </script>";
                die();
            }else{
            	unset($data['password']);
                session('auser',$data);
                //修改登录信息
                $da['time'] = time();
                $da['id'] = $data['id'];
                M('auser') -> save($da);
                // exit;
               // $this -> success('登录成功',U('Home/Index/index'),1);
               echo "<script>
                window.location.href='".U('Home/Index/index')."';
                </script>";
            }
    	}else{
    		// $this -> error('登录失败,用户名或密码错误');
            echo "<script>
                alert('登录失败,用户名或密码错误');
                window.location.href='".U('Home/Login/login')."';
                </script>";
                die(); 
    	}
    }

    //	写一个退出跳出销毁session跳转到index
    public function loginOut()
    {
        session('auser',null);
        $this->redirect('Index/index');
    }

    public function zhuce()
    {
        $auser = M('auser');
        // $po['username'] = htmlspecialchars(trim(I('post.username')));
        $po['password'] = md5(trim(I('post.password')));
        $po['email'] = I('post.email');
        $po['phone'] = I('post.phone');
        $po['sjyz'] = I('post.sjyz');
        $po['time'] = time();
        
        
        //检验手机验证码
        $aa = session('yzm');
        if($aa != $po['sjyz'])
        {
            echo "<script>
                alert('手机验证码错误!');
                window.location.href='".U('Home/Login/register')."';
            </script>";
        }else{
            if($auser -> data($po) -> add())
            {
                $ree = $auser -> where('phone = "'.$po['phone'].'"') -> find();
               
                unset($ree['password']);
                session('auser',$ree);
                session('yzm',null);
                echo "<script>
                    alert('注册成功，欢迎来到卓屹金服!');
                    window.location.href='".U('Home/Index/index')."';
                </script>";
            }else{
                echo "<script>
                    alert('注册失败，请重新填写!');
                    window.location.href='".U('Home/Login/register')."';
                </script>";
            }
        }
       
        
        
        
      
    }
   
   public function register()
   {
        $this -> display();
   } 


   public function add()
   {
       include_once("ThinkPHP/Library/Think/SDK/CCPRestSDK.php");

        //主帐号
        $accountSid= '8aaf07085861d3a101586242f66901aa';

        //主帐号Token
        $accountToken= 'e3c321d3787b4093a68a31f6f425a050';

        //应用Id
        $appId='8aaf07085861d3a101586242f71f01b0';

        //请求地址，格式如下，不需要写https://
        $serverIP='app.cloopen.com';

        //请求端口 
        $serverPort='8883';

        //REST版本号
        $softVersion='2013-12-26';
        
        $phone = trim(I('get.tel'));
        


        $auser = M('auser');
        // $ph = $auser -> where('phone = "'.$phone.'"') -> find();
        //封装手机号
        function inphone($phone){
            if(preg_match('/^[1][3458][0-9]{9}$/',$phone)){
                return true;
            }else{
                return false;
            }
        }
        // if($ph)
        // {
        //     echo '2';
        //     return false;
        // }
         if($phone == null)
        {
            echo '3';
            return false;
        }
        if(!inphone($phone)){
            echo '4';
            return false;
        }
       
        $rand = rand(1000,9999);
        session('yzm',$rand);
        if($phone){
        $add = $this->sendTemplateSMS($phone,array($rand,'10'),"138280",$accountSid,$accountToken,$appId,$serverIP,$serverPort,$softVersion);//手机号码，替换内容数组，模板ID
        
        }
   }

   function sendTemplateSMS($to,$datas,$tempId)
    {

         // 初始化REST SDK
         global $accountSid,$accountToken,$appId,$serverIP,$serverPort,$softVersion;
         
          $serverIP='app.cloopen.com';
           $serverPort='8883';
           $softVersion='2013-12-26';
           //主帐号
        $accountSid= '8aaf07085861d3a101586242f66901aa';

        //主帐号Token
        $accountToken= 'e3c321d3787b4093a68a31f6f425a050';

        //应用Id
        $appId='8aaf07085861d3a101586242f71f01b0';
         $rest = new \Think\SDK\REST($serverIP,$serverPort,$softVersion);
         $rest->setAccount($accountSid,$accountToken);
         $rest->setAppId($appId);
        
         // 发送模板短信
         echo "Sending TemplateSMS to $to <br/>";
         $result = $rest->sendTemplateSMS($to,$datas,$tempId);
         if($result == NULL ) {
             echo "result error!";
             break;
         }
         if($result->statusCode!=0) {
             echo "error code :" . $result->statusCode . "<br>";
             echo "error msg :" . $result->statusMsg . "<br>";
             //TODO 添加错误处理逻辑
         }else{
             echo "Sendind TemplateSMS success!<br/>";
             // 获取返回信息
             $smsmessage = $result->TemplateSMS;
             echo "dateCreated:".$smsmessage->dateCreated."<br/>";
             echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";
             //TODO 添加成功处理逻辑
         }
    }



    public function chongzhi()
    {
        //实例化
        $auser = M('auser');
        $tel = I('post.phone');
        $sjyz = I('post.sjyz');
        $data['password'] = md5(trim(I('post.password')));
     
        if(session('yzm') != $sjyz)
        {
            echo "<script>
                alert('手机验证码错误!');
                window.location.href='".U('Home/Login/register')."';
            </script>";
        }
        
        $www = $auser -> where('phone = "'.$tel.'"') -> data($data) -> save();
        
        if($www)
        {
            echo "<script>
                alert('密码重置成功，请登录!');
                window.location.href='".U('Home/Login/login')."';
            </script>";
        }else{
            echo "<script>
                alert('密码重置失败，请重新重置!');
                window.location.href='".U('Home/Login/forgetmima')."';
            </script>";
        }
    }

    // public function username()
    // {
    //     $auser = M('auser');
    //     $username = htmlspecialchars(trim(I('get.username')));

    //     $res = $auser -> where('username = "'.$username.'"') -> find();
    //     if($res){
    //         echo '1';
    //         return false;
    //     }
    // }
}