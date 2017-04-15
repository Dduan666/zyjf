<?php
namespace Common\Controller;
use Think\Controller;
class InitController extends Controller {
	
	public function __construct(){
		parent::__construct();
		$this -> _all_task();
	}

	/* 处理全局任务 */
	public function _all_task(){
		/* 任务 */
	}
}