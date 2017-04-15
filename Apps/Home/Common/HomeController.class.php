<?php
namespace Home\Common;
use  Common\Controller\InitController;

class HomeController extends InitController{
	function __construct(){
		parent::__construct();
		$this -> _logo();
		$this -> header();
	}

	public function _logo()
	{
		$logo = M('webconfig');
		$dd = $logo -> select();

		$this -> assign('dd',$dd);
		// $this -> display();
	}

	public function header()
    {
    	$serve = M('serve');
        $product = M('serve_product');
        $resd = $serve -> getField('type',true);
        // $resd = $serve -> select(); 
        $ds = array_unique($resd);
        $ad = array();
        foreach ($ds as $k => $v) {
        	$dn['type'] = $v;
        	$ad[] = $dn;
        }
        foreach ($ad as $k => $v) {
        	$val = $product -> where('nid = "'.$v['type'].'"') -> select();
        	$ad[$k]['c'] = $val;

        }
        $this -> assign('ad',$ad);
    }
}