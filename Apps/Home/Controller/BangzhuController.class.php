<?php
namespace Home\Controller;
use Home\Common\HomeController;
header('content-type:text/html;charset=utf-8;');
class BangzhuController extends HomeController {
    //新闻资讯
    public function newlist()
    {
    	//实例化
    	$notice = M('notice');
    	
        $count = $notice -> where('team <> 1') -> count();
        // 实例化分页，传入总记录数和显示条数
        $page = new \Think\Page($count,8);
        $show = $page -> show();//分页显示输出
        $limit = $page -> firstRow.','.$page -> listRows;
        
        
        $as = $notice -> where('team <> 1') -> order('time desc') -> limit($limit) -> select();

        //分配变量
        $this -> pagestr = $show;
        $this -> assign('nav',$as);
        $this -> display();
    }
    //新闻资讯详情页
    public function newlist_xqy()
    {
        $id = I('get.id');
        $notice = M('notice');
        $data = $notice -> where('id = "'.$id.'"') -> find();
        $data['content'] = htmlspecialchars_decode($data['content']);

        $this -> assign('data',$data);
        $this -> display();
    }
    //攻略问答
    public function gonglue()
    {
        $problem = M('problem');
        $product = 1;  //页面打开默认第一个产品攻略，其余的产品攻略用ajax
        $search = I('get.search');
        if(!empty($search)){  //当搜索不为空时，显示搜索到的内容
            $product = 1;
            $where = "title like '%".$search."%'";
        }else if(!empty($product)){
            $where = 'product = "'.$product.'"';
        }else{
            $where = 'product = 1';
        }

        $pp = $problem -> where($where) -> select();
        $res = array();
        foreach ($pp as $k => $v) {
            $res[$k]['id'] = $v['id'];
            $res[$k]['product'] = $v['product'];
            $res[$k]['title'] = $v['title'];
            $res[$k]['content'] = htmlspecialchars_decode($v['content']);
        }
        //查询热搜问题
        $sou = $problem -> where('status = 1') -> select();

        $this -> assign('sou',$sou);
        $this -> assign('search',$search);
        $this -> assign('product',$product);
        $this -> assign('res',$res);
        $this -> display();
    }
    //攻略问答所属产品下的问题
    public function ajax()
    {
        $product = I('post.product');
        $problem = M('problem');
        $pp = $problem -> where('product = "'.$product.'"') -> select();
        $res = array();
        foreach ($pp as $k => $v) {
            $res[$k]['id'] = $v['id'];
            $res[$k]['product'] = $v['product'];
            $res[$k]['title'] = $v['title'];
            $res[$k]['content'] = htmlspecialchars_decode($v['content']);
        }
        // $res['pro'] = $product;
        
        $ds = json_encode($res);
        $this -> ajaxReturn($ds);
       
    }

    // public function ajax2()
    // {
    //     $product = I('post.product');
    //     if($product){
    //         echo $product;
    //     }
    // }

    //热搜
    public function reSou()
    {
        $product = I('post.product');
        $id = I('post.id');
        $problem = M('problem');

        $pp = $problem -> where('product = "'.$product.'"') -> select();
        $res = array();
        foreach ($pp as $k => $v) {
            $res[$k]['id'] = $v['id'];
            $res[$k]['status'] = $v['status'];
            $res[$k]['product'] = $v['product'];
            $res[$k]['title'] = $v['title'];
            $res[$k]['content'] = htmlspecialchars_decode($v['content']);
        }
        $dd = json_encode($res);
        $this -> ajaxReturn($dd);
    }
    public function reSou2()
    {
        $product = I('post.product');
        if($product){
            echo $product;
        }
    }
}