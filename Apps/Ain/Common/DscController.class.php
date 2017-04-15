<?php
/**********************************
* Filename:     BaseController.php
* Revision:     V1.0
* Date:         2016/06/16
* Author:       bug
* Email:        18610088892@163.com
* Description:  公共处理器
* Notes:        Public Controller
**********************************/
namespace Ain\Common;
use Common\Controller\InitController;

class DscController extends InitController 
{
	public function _initialize(){
		GLOBAL $_G;
		$_G['user_business'] = session('user_business');
		$this->id = $_G['user_business']['id'];
		$this->__isLogin();
		//权限控制
		// if($this->id!=C('ADMINISTRATOR')){
		// 	$rule_name=MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
		// 	if(!in_array($rule_name,C('NOT_AUTH_ACTION'))){
		// 		$auth=new \Think\Auth();
		// 		$result=$auth->check($rule_name,$this->id);
		// 		if(!$result){
		// 			$this->error('您没有权限访问',U('Index/index'));
		// 		}
		// 	}
		// }

    }
	function __isLogin(){
		if(empty($this->id)&&!isset($this->id)){
			// $this->redirect('Login/login');
			echo "<script>
                
                 window.location.href='".U('Ain/Login/login')."';
            	</script>";
		}
	}
	
}
