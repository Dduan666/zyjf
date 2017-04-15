<?php
namespace Home\Controller;
use Home\Common\HomeController;
header('content-type:text/html;charset=utf-8;');
class FlowController extends HomeController {
	//首页浏览次数
    public function show()
    {
    	 //获得访客真实ip
        if(!empty($_SERVER["HTTP_CLIENT_IP"])){   
		    $ip = $_SERVER["HTTP_CLIENT_IP"];
		}
		if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ //获取代理ip
		    $ips = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
		}
		if($ip){
		    $ips = array_unshift($ips,$ip); 
		}
		   
		$count = count($ips);
		for($i=0;$i<$count;$i++){   
		    if(!preg_match("/^(10|172\.16|192\.168)\./i",$ips[$i])){//排除局域网ip
		    $ip = $ips[$i];
		    break;    
	    	}  
		}  
	    $tip = empty($_SERVER['REMOTE_ADDR']) ? $ip : $_SERVER['REMOTE_ADDR']; 

	 //    if($tip=="127.0.0.1"){ //获得本地真实IP
		//     return $this->get_onlineip();   
		// }else{
		//     return $tip; 
		// }
		$id = I('post.id');
        // $sip = '182.50.115.149';

        $flow = M('flow');
        $res = $flow -> where('id = "'.$id.'"') -> find();
        //浏览量为0或null时改为1，不为0时自动加1
        if(empty($res['flow']))
        {
            // if($ip !== $sip){
                M('flow') -> where('id = "'.$id.'"') -> setField('flow','1');
            // }
            	$data['ip'] = $tip;
            	$data['time'] = time();
            	$data['fid'] = $id;
            	$res = M('flow_ip') -> data($data) -> add();
            	echo $res;
        }else{
            // if($ip !== $sip){
                M('flow') -> where('id = "'.$id.'"') -> setInc('flow',1);
            // }
            	$data['ip'] = $tip;
            	$data['time'] = time();
            	$data['fid'] = $id;
            	$res = M('flow_ip') -> data($data) -> add();
            	echo $res;
        }
        
    }

    public function index(){
    	$id = I('post.id');
    	$fip = M('flow_ip');
    	$res = $fip -> where('id = "'.$id.'"') -> find();
    	// echo $res['date'];
    	if($res){
    		$data['date'] = time();
    		$fip -> where('id = "'.$id.'"') -> save($data);
    	}
    }
   //  // 获得本地真实IP
  	// function get_onlineip() {
  	// 	$tip == "127.0.0.1";
  	// 	$url = 'http://www.ip138.com/ips138.asp?ip='.$tip;
   //      $mip = file_get_contents($url);
   //      var_dump($mip);
   //      if($mip){
   //          preg_match("/\[.*\]/",$mip,$dip);
   //          $p = array("/\[/","/\]/");

   //          return preg_replace($p,"",$dip[0]);
   //      }else{
   //      	return "获取本地IP失败！";
   //      }
   //  }
    //精英顾问页浏览次数
    public function gu()
    {
        //获得访客真实ip
        if(!empty($_SERVER["HTTP_CLIENT_IP"])){   
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ //获取代理ip
            $ips = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
        }
        if($ip){
            $ips = array_unshift($ips,$ip); 
        }
           
        $count = count($ips);
        for($i=0;$i<$count;$i++){   
            if(!preg_match("/^(10|172\.16|192\.168)\./i",$ips[$i])){//排除局域网ip
            $ip = $ips[$i];
            break;    
            }  
        }  
        $tip = empty($_SERVER['REMOTE_ADDR']) ? $ip : $_SERVER['REMOTE_ADDR']; 

        $id = I('post.id');
        // var_dump($id);
        $flow = M('flow');
        $res = $flow -> where('id = "'.$id.'"') -> find();
        //浏览量为0或null时改为1，不为0时自动加1
        if(empty($res['flow']))
        {
            
                M('flow') -> where('id = "'.$id.'"') -> setField('flow','1');
           
                $data['ip'] = $tip;
                $data['time'] = time();
                $data['fid'] = $id;
                $res = M('flow_ip') -> data($data) -> add();
                echo $res;
              
        }else{
            
                M('flow') -> where('id = "'.$id.'"') -> setInc('flow',1);
           
                $data['ip'] = $tip;
                $data['time'] = time();
                $data['fid'] = $id;
                $res = M('flow_ip') -> data($data) -> add();
                echo $res;
        }
        
    }
    //评估页浏览次数
    public function ping()
    {
        //获得访客真实ip
        if(!empty($_SERVER["HTTP_CLIENT_IP"])){   
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ //获取代理ip
            $ips = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
        }
        if($ip){
            $ips = array_unshift($ips,$ip); 
        }
           
        $count = count($ips);
        for($i=0;$i<$count;$i++){   
            if(!preg_match("/^(10|172\.16|192\.168)\./i",$ips[$i])){//排除局域网ip
            $ip = $ips[$i];
            break;    
            }  
        }  
        $tip = empty($_SERVER['REMOTE_ADDR']) ? $ip : $_SERVER['REMOTE_ADDR']; 

        $id = I('post.id');
        // var_dump($id);
        $flow = M('flow');
        $res = $flow -> where('id = "'.$id.'"') -> find();
        //浏览量为0或null时改为1，不为0时自动加1
        if(empty($res['flow']))
        {
            
                M('flow') -> where('id = "'.$id.'"') -> setField('flow','1');
           
                $data['ip'] = $tip;
                $data['time'] = time();
                $data['fid'] = $id;
                $res = M('flow_ip') -> data($data) -> add();
                echo $res;
              
        }else{
            
                M('flow') -> where('id = "'.$id.'"') -> setInc('flow',1);
           
                $data['ip'] = $tip;
                $data['time'] = time();
                $data['fid'] = $id;
                $res = M('flow_ip') -> data($data) -> add();
                echo $res;
        }
        
    }
//按钮的点击次数
    public function deng()
    {
		//获得访客真实ip
        if(!empty($_SERVER["HTTP_CLIENT_IP"])){   
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ //获取代理ip
            $ips = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
        }
        if($ip){
            $ips = array_unshift($ips,$ip); 
        }
           
        $count = count($ips);
        for($i=0;$i<$count;$i++){   
            if(!preg_match("/^(10|172\.16|192\.168)\./i",$ips[$i])){//排除局域网ip
            $ip = $ips[$i];
            break;    
            }  
        }  
        $tip = empty($_SERVER['REMOTE_ADDR']) ? $ip : $_SERVER['REMOTE_ADDR']; 

        $id = I('post.id');
        // var_dump($id);
        $flow = M('flow');
        $res = $flow -> where('id = "'.$id.'"') -> find();
        //浏览量为0或null时改为1，不为0时自动加1
        if(empty($res['flow']))
        {
            
                M('flow') -> where('id = "'.$id.'"') -> setField('flow','1');
           
                $data['ip'] = $tip;
                $data['time'] = time();
                $data['fid'] = $id;
                $res = M('flow_ip') -> data($data) -> add();
                echo $res;
              
        }else{
            
                M('flow') -> where('id = "'.$id.'"') -> setInc('flow',1);
           
                $data['ip'] = $tip;
                $data['time'] = time();
                $data['fid'] = $id;
                $res = M('flow_ip') -> data($data) -> add();
                echo $res;
        }
        
    }
}