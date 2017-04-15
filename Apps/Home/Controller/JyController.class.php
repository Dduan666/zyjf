<?php
namespace Home\Controller;
use Home\Common\HomeController;
header('content-type:text/html;charset=utf-8;');
class JyController extends HomeController {
    public function consultant_2()
    {

    	$id = $_GET['id'];//接收首页精英或顾问页精英传来的id

    	$jy = M('jy') -> where('id = "'.$id.'"') -> find();//查出这个精英的数据
        $jy['grade'] = M('click') -> where('uid = "'.$id.'"') -> getField('grade');
        $jy['style'] = str_replace(array(',',' '),',',$jy['style']);
        $jy['style'] = explode(',',$jy['style']);
        $jy['one'] = $jy['style'][0];
        $jy['two'] = $jy['style'][1];
        // var_dump($jy['two']);
        $t1=str_replace('1','标准经营类贷款', $jy['business']);
        $t2=str_replace('2','标准消费类贷款',$t1);
        $t3=str_replace('3','短期贷款',$t2);
        $t4=str_replace('4','信用贷款',$t3);

        $jy['business']=$t4;

        $this -> assign('jy',$jy);
        $this -> display();
    }

    public function consultant()
    {
    	$ap = I('get.');

    	//实例化
    	$jy = M('jy');
    	// $v=$_GET['business'];

        $business = (int)I('get.business',0);
        $sex = (int)I('get.sex',0);

        
    	
    	if(!empty($business) && !empty($sex)){
            $where = "business like '%".$business."%' and sex like '%".$sex."%' and status = '1'";
        }else if(!empty($business)){
            $where = "business like '%".$business."%' and status = '1'";
        }else if(!empty($sex)){
            $where = "sex like '%".$sex."%' and status = '1'";
        }else{
            $where = "status = '1'";
        }


    	//查询总的条数
		$count = $jy -> where($where) -> count();
		//实例化分页，传入总记录数和显示条数
		$page = new \Think\Page($count,8);
		$show = $page -> show();//分页显示输出
		$limit = $page -> firstRow.','.$page -> listRows;
		
		$data = $jy 
            -> alias('j')
            -> join('left join __CLICK__ c on j.id = c.uid')
            -> limit($limit) 
            -> where($where)
            -> field('j.*,c.grade') 
            -> order('j.money desc')
            -> select();
		/*$data = $jy -> limit($limit) -> where($where) -> order('money desc') -> select();*/
		
        $res = array();
        foreach($data as $k=>$v){
            $res[$k]['id']=$v['id'];
            $res[$k]['vname']=$v['vname'];
            $res[$k]['money']=$v['money'];
            $res[$k]['pic']=$v['pic'];
            $res[$k]['self']=$v['self'];
            $res[$k]['style']=$v['style'];
            $res[$k]['grade']=$v['grade'];

            $t1=str_replace('1', '标准经营类贷款', $v['business']);
            $t2=str_replace('2','标准消费类贷款',$t1);
            $t3=str_replace('3','短期贷款',$t2);
            $t4=str_replace('4','信用贷款',$t3);

            $res[$k]['business']=$t4;

        }

		$aa = M('jt') -> select();//精英顾问展示图

		//分配变量
		$this -> pagestr = $show;
        $this -> assign('res',$res);
        $this -> assign('aa',$aa);
        $this -> assign('business',$business);
        $this -> assign('sex',$sex);
        
        $this -> display();
    }

    public function daishenqing()
    {
        $id = I('get.id');
        $bu = I('get.bu');
        $jj = M('jy') -> where('id = "'.$id.'"') -> find();
        $cc = M('case') -> where('bu = "'.$bu.'"') -> find();
        
        $this -> assign('jj',$jj);
        $this -> assign('cc',$cc);
        $this -> display();
    }

    public function add()
    {

        $zaixian = M('zaixian');
        $yue = I('post.');
        $yue['time'] = time();
        $yan = session('yzmss');
        var_dump($yan);
        if($yue['yan'] != $yan){
            echo "<script>
                alert('验证码错误，请输入正确验证码！');
                window.location.href='".U('Home/Jy/daishenqing')."';
            </script>";
            die;
        }
        $_POST['tname'] = htmlspecialchars(trim($yue['tname']));

        $zaixian -> create();
        $res = $zaixian -> add($yue);

        if($res)
        {
            echo "<script>
                alert('预约成功，我们会及时与您联系');
                window.location.href='".U('Home/Index/index')."';
            </script>";
            session('yzmss',null);
        }else{
            echo "<script>
                alert('预约失败');
                window.location.href='".U('Home/Jy/daishenqing')."';
            </script>";
        }

    }

    public function liu()
    {
        //获取ip地址
        $ip = getenv('REMOTE_ADDR');
        $sip = '182.50.115.149';

        $id = I('post.id');
        $jy = M('jy');
        $res = $jy -> where('id = "'.$id.'"') -> find();
        //浏览量为0或null时改为1，不为0时自动加1
        if(empty($res['pv']))
        {
            if($ip !== $sip){
                M('jy') -> where('id = "'.$id.'"') -> setField('pv','1');
            }
            
        }else{
            if($ip !== $sip){
                M('jy') -> where('id = "'.$id.'"') -> setInc('pv',1);
            }
            
        }
        
    }

    public function yan()
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
        
        $phone = trim(I('post.tel'));

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
            echo '1';
            return false;
        }
        if(!inphone($phone)){
            echo '2';
            return false;
        }
       
        $rand = rand(1000,9999);
        session('yzmss',$rand);
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