<?php
namespace Home\Controller;
use Home\Common\HomeController;
header('content-type:text/html;charset=utf-8;');
class PgController extends HomeController {
    public function index(){
       $po['acode'] = I('post.acode');

		//实例化
    	// $pg = M('pg');
    	// $pg -> data($po) -> add();
    	$yz = session('yzm');
    	if(empty($po['acode']))
        {
            echo '1';
            return false;
        }
    	if($yz != $po['acode'])
    	{
    		echo '2';
    		return false;
    	}
    }

    public function index2()
    {
        $pp = I('post.');
        $pp['time'] = time();
        session('yzm',null);
        
        $pg = M('pg');
        $pg -> data($pp) -> add();

        $da['phone'] = $pp['phone'];
        $da['time'] = time();
        $zai = M('zaixian') -> data($da) -> add();

    }

    public function fs()
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


    	session('yzm',null);
    	$phone = trim(I('post.phone'));
    	$wuye = I('post.wuye');
    	$dan = I('post.dan');
    	$zong = I('post.zong');

    	if($phone){
        $add = $this->sendTemplateSMS($phone,array($wuye,$dan,$zong),"135693",$accountSid,$accountToken,$appId,$serverIP,$serverPort,$softVersion);//手机号码，替换内容数组，模板ID
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