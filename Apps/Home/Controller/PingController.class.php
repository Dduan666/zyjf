<?php
namespace Home\Controller;
use Home\Common\HomeController;
header('content-type:text/html;charset=utf-8;');
class PingController extends HomeController {
    public function inline()
    {
        $jy = M('jy');
        $res = $jy -> alias('j') -> join('left join __CLICK__ c on j.id=c.uid') ->field('j.*,c.grade') -> select();
        
        $this -> assign('res',$res);
        $this -> display();
    }

    public function index(){
        // $this -> display();
        // 
        $po = I('post.');

		//实例化
    	$ping = M('ping');
    	$ping -> data($po) -> add();

    	//查询用户数据
    	// $sid = session('auser.id');
    	
     //    if($sid == null)
     //    {
     //    	echo 1;
     //    	return false;
            
     //    }
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
        // $vcode = I('get.vcode');
        //封装手机号
        function inphone($phone){
            if(preg_match('/^[1][3458][0-9]{9}$/',$phone)){
                return true;
            }else{
                return false;
            }
        }

        if($phone == null)
        {
            echo '2';
            return false;
        }
        if(!inphone($phone)){
            echo '3';
            return false;
        }
        // $verify = new \Think\Verify();
        // if(!$verify -> check($vcode))
        // {
        //     echo '1';
        //     return false;
        // }

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
}