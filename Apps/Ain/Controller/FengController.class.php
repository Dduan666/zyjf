<?php
namespace Ain\Controller;
use Ain\Common\DscController;
header('content-type:text/html;charset=utf-8;');
class FengController extends DscController {

    public function fengkong_main(){
        $feng = M('serve_class');
        $data = $feng -> select();

        $feng = M('serve_class');
        
        // 1 0
        //   3 1
        //   4 1
        // 2 0
        //   5 2
        //   6 2
      
        $sel = $feng
            -> where('pid = 0')
            -> order('pid asc')
            -> select();
        foreach ($sel as $k => $v) {
            
            $val = $feng -> where('pid = "'.$v['id'].'"') -> select();
            $sel[$k]['c'] = $val;
           
        }
       
        $this -> assign('sel',$sel);
        // 解析模板
        $this -> display();
    }

//-----------分类管理---------------------------------------------------------------------

    public function fengkong_right_fenlei(){
        
        $feng = M('serve_class');
        //查询数据，在前台分类添加显示上级分类
        $data = $feng -> where('pid = 0') -> select();

        //查询接受的条数
        $count = $feng -> where('pid <> 0') -> count();
        
        $page = new \Think\Page($count,8);//实例化分页类 传入总记录数和显示记录数
        $show = $page -> show();//分页显示输出
        $limit = $page->firstRow.','.$page->listRows;
        //查询数据在列表显示
        $res = $feng
            -> alias('c1')
            -> join('right join __SERVE_CLASS__ c2 on c1.id = c2.pid')
            -> order('pid asc,sort')
            -> where('c2.pid != 0')
            -> limit($limit)
            -> field('c2.*,c1.class as cname')
            -> select();
        //修改，接收传来的id
        $id = I('post.id');
        $dd = $feng -> where('id = "'.$id.'"') -> find();
        
        // 解析模板
        $this -> pagestr = $show;
        $this -> assign('dd',$dd);
        $this -> assign('data',$data);
        $this -> assign('res',$res);
        $this -> display();
    }

    public function editCate(){
        $id = I('post.id');
        $feng = M('serve_class');
        $dd = $feng -> where('id = "'.$id.'"') -> find();
        $dd['cate']=$feng->where('pid=0')->select();

        $this->ajaxReturn($dd);
    }

    //修改
    public function updateCate()
    {
        $serve_class = M('serve_class');
        $data = I('post.');
        $res = $serve_class -> where($data) -> find();
        if($res){
            echo '1';
            return ;
        }else{
            $da = $serve_class -> where('id = "'.$data['id'].'"') -> find();
            $serve_class -> where('id = "'.$data['id'].'"') -> save($data);
            echo '2';
        }

    }

    //添加分类
    public function add()
    {
        $post = I('post.');
        $feng = M('serve_class');
        if(empty($post['class']))
        {
            echo '1';
            return ;
        }
        if(empty($post['sort']))
        {
            echo '2';
            return ;
        }
        $res = $feng -> where('pid = "'.$post['pid'].'" AND class = "'.$post['class'].'"') -> find();
        if(!empty($res))
        {
            echo '3';
            return ;
        }
        $feng -> data($post) -> add();
    }

    //删除
    public function dele()
    {
        $id = I('post.id');
        $data = M('serve_class');
        $res = $data -> where('id = "'.$id.'"') -> delete();
        if($res){
            echo '1';
            return ;
        }else{
            echo '2';
            return ;
        }
    }
    
//-----------产品信息变更---------------------------------------------------------------

    public function fengkong_right0()
    {
        $id = I('get.id');
        $feng = M('serve_class');
        $data = $feng -> where('pid = 0') -> select();

        $res = M('serve_product')
            -> alias('p')
            -> join('left join __SERVE_CLASS__ c on p.cid=c.id')
            -> where('cid = "'.$id.'"')
            -> field('p.*,c.class')
            -> select();

        // 解析模板
        $this -> assign('res',$res);
        $this -> assign('data',$data);
        $this -> display();
    }

//ajax查询出分类名称拼接进去
    public function fengkong_ajax()
    {
        $pid = I('post.pid');
        $chan = M('serve_class') -> where('pid = "'.$pid.'"') -> select();
        if($chan){
            $a = json_encode($chan);
            $this->ajaxReturn($a,'JSON');
        }
    }

//ajax查询出前台分类名称
    // public function fengkong_ajax2()
    // {
    //     $pid = I('post.pid');
    //     $serve = M('serve') -> where('type = "'.$pid.'"') -> select();
    //     if($serve){
    //         $a = json_encode($serve);
    //         $this->ajaxReturn($a,'JSON');
    //     }
    // }

//ajax进行添加
    public function productAjax()
    {
        $data = I('post.');
        $data['conts'] = htmlspecialchars(str_replace(array("\n"," "), array("</br>","&nbsp;"), $data['conts']));//回车换行改为</br>形式，再转为实体存到数据库，前台拿出时用htmlspecialchars_decode(),实现换行

        $product=M('serve_product');
        $sort = $product -> where('cid = "'.$data['cid'].'"') -> find();
        $nos = $product -> where('nid = "'.$data['nid'].'" AND product = "'.$data['product'].'"') -> find();

        if(empty($data['cid'])){
            echo '1';//选择分类名称
            return ;
        }
        if(empty($data['nid'])){
            echo '2';//选择前台显示的分类
            return ;
        }
        if(empty($data['product'])){
            echo '3';//填写产品名称
            return ;
        }
        if($data['product'] == $sort['product']){
            echo '4';//此产品已存在
            return ;
        }
        if(!empty($nos)){
            echo '12'; //前台分类下此产品已存在
            return ;
        }
        if(empty($data['money'])){
            echo '5';//填写最大金额
            return ;
        }
        if(empty($data['year'])){
            echo '6';//填写最大贷款期限
            return ;
        }
        if(empty($data['conts'])){
            echo '7';//填写准入条件
            return ;
        }
        if(empty($data['sort'])){
            echo '8';//填写序号
            return ;
        }
        if($data['sort'] == $sort['sort']){
            echo '9';//此分类下序号已存在
            return ;
        }
        
        // $product->create();
        $res = $product -> add($data);
        
        if($res){
            //添加到前台显示页
            $da['type'] = $data['nid'];
            $da['spid'] = $res;
            $da['name'] = $data['product'];
            $da['time'] = time();
            M('serve') -> data($da) -> add();
            //添加成功后对无限添加进行添加，前台页面有个隐藏的input，所以$i从1开始
            for($i=1;$i<count($data['like']);$i++){
                $dd[$i]['like']=$data['like'][$i];
                $dd[$i]['content']=$data['content'][$i];
                
            }

            foreach ($dd as $k => $v) {
                $v;
                $v['sid'] = $res;
                $v['content'] = htmlspecialchars(str_replace(array("\n"," "),array("</br>","&nbsp;"), $v['content']));
                M('serve_product_con') -> data($v) -> add();
            }
            echo '10';//添加成功
            return ;
        }else{
            echo '11';//添加失败
            return ;
        }
        
    }
    
    //修改显示
    public function edit()
    {
        $id = I('post.id');

        $product = M('serve_product');
        $data = $product -> where('id = "'.$id.'"') -> find();
        $data['conts'] = str_replace(array("</br>","&nbsp;"),array("\n"," "),htmlspecialchars_decode($data['conts']));
        $data['p'] = M('serve_product_con') -> where('sid = "'.$data['id'].'"') -> select(); 
        $data['p_con'] = array();
        foreach ($data['p'] as $k => $v) {
            $data['p_con'][$k]['id'] = $v['id'];
            $data['p_con'][$k]['sid'] = $v['sid'];
            $data['p_con'][$k]['like'] = $v['like'];
            $data['p_con'][$k]['content'] = str_replace(array("</br>","&nbsp;"),array("\n"," "),htmlspecialchars_decode($v['content']));
        } 

        $data['fid'] = M('serve_class') -> where('id = "'.$data['cid'].'"') -> getField('pid');
        $data['fclass'] = M('serve_class') -> where('id = "'.$data['fid'].'"') -> getField('class');
        // $data['qid'] = M('serve') -> where('id = "'.$data['nid'].'"') -> getField('type');
        $data['qclass'] = M('serve') -> where('id = "'.$data['nid'].'"') -> getField('name');
        $data['nav'] = M('serve_class') -> where('pid = "'.$data['fid'].'"')->select();
        $data['con'] = M('serve') -> where('type = "'.$data['qid'].'"') -> select();
        // $data['count'] = M('serve_product_con') -> where('sid = "'.$id.'"') -> count();
        $data['tiao'] = M('serve_product_con') -> where('sid = "'.$id.'"') -> count();//查出无限添加的条数

        if($data){
            $this -> ajaxReturn($data);
        }
        // return $id;
    }
    // function editServe()
    // {
    //     $dt = $this -> edit();
    // }

    //修改执行
    public function productGai()
    {
        
        // $returnResult=0;
        $sy = I('post.');
        $sy['conts'] = htmlspecialchars(str_replace(array("\n"," "),array("</br>","&nbsp;"),$sy['conts']));
        if(empty($sy['product'])){
            echo 2; //产品名称不能为空
            return ;
        }
        if(empty($sy['money'])){
            echo 3; //贷款金额不能为空
            return ;
        }
        if(empty($sy['year'])){
            echo 4; //贷款年限不能为空
            return ;
        }
        if(empty($sy['conts'])){
            echo 5;
            return ;
        }
        if(empty($sy['sort'])){
            echo 6; //产品的序号不能为空
            return ;
        }
        $product = M('serve_product') -> where('cid = "'.$sy['cid'].'"') -> select();
        $sort = M('serve_product') -> where('id = "'.$sy['id'].'"') -> find();
        
        foreach ($product as $k => $v) {
            if($v['product']==$sort['product']){
                unset($v['product']); // 去除本条数据的产品名称
            }
            if($v['product'] == $sy['product']){
                echo 7;  //此分类下的产品名称已存在
                return ;
            }
            // var_dump($v['sort']);
            if($v['sort'] == $sort['sort']){
                unset($v['sort']); // 去除本条数据的序号
            }
            if($v['sort'] == $sy['sort']){
                echo 8;  //此分类下的序号已存在
                return ;
            }
        }
        
        $sy['status'] = I('post.status');
        
        $product = M('serve_product');
        $data = $product -> where('id = "'.$sy['id'].'"') -> find();
        $data['con'] = M('serve_product_con') -> where('sid = "'.$data['id'].'"') -> select();
        
        $product -> create();
        $save = $product -> where('id = "'.$sy['id'].'"') -> data($sy) -> save()?1:0;
        //如果显示类型、产品名称修改后，对前台显示类型、产品进行修改
        if($save){
            $sda['type'] = $sy['nid'];
            $sda['name'] = $sy['product'];
            $serve_save = M('serve') -> where('spid = "'.$sy['id'].'"') -> save($sda);
        }
        
        //比较无限添加的条数，看是否删除了
        $re = M('serve_product_con') -> where('sid = "'.$sy['id'].'"') -> count();
        $dels = $re<$sy['tiao']?1:0;
        
        //修改无限添加的部分
        $dList=M('serve_product_con');
        $item='';
        foreach($sy['lis'] as $k => $v){
            $dd['id'] = (string)$k;
            $dd['like'] = $v;
            $dd['content'] = htmlspecialchars(str_replace(array("\n"," "),array("</br>","&nbsp;"), $sy['cos'][$k]));
            
            $des = $dList -> where('id = "'.$dd['id'].'"') -> data($dd) -> save();

            $item[]=$des;

            //数组里的值都修改为空时，删除这条数据,删除一定放到修改下面，不然会影响下面的判断
            if(empty($dd['like']) && empty($dd['content'])){
                M('serve_product_con') -> where('id = "'.$dd['id'].'"') -> delete();
                // continue;//结束这次循环
            }
        }
        //把所有的修改返回条数放到$item数组中，判断，只要不都为0，就修改成功返回1
        // if($item){
        //     foreach ($item as $k => $v) {
        //         if($v==1){
        //             echo 1;                 
        //             return ;
        //         }
        //     }
        //     echo 0;
        //     return ;
        // }

        //修改时进行的新的添加，前台页面有个隐藏的input，所以$i从1开始
        for($i=1;$i<count($sy['like']);$i++){
            $dds[$i]['like'] = $sy['like'][$i];
            $dds[$i]['content'] = htmlspecialchars(str_replace(array("\n"," "), array("</br>","&nbsp;"), $sy['content'][$i]));
        }
        
        foreach ($dds as $k => $v) {
            $v;
            //数组里的值都为空时，去除此数组
            if(empty($v['like']) && empty($v['content'])){
                unset($v);
                continue;//结束这次循环
            }
            $v['sid'] = $sy['id'];
           $add = M('serve_product_con') -> data($v) -> add()?1:0; 
        }
       
        if($item){
            foreach ($item as $k => $v) {
                
                if($v==1){
                    echo 1;
                    return ;
                }else{
                    
                    if($save == 1 || $dels == 1 || $add == 1){
                        echo 1;
                        return ;
                    }
                }
            }
        }else{
            if($save == 1 || $dels == 1 || $add == 1){
                echo 1;
                return ;
            }else{
                echo 0;
                return ;
            }
        }

    }
    //删除产品
    public function prodel(){
        if(IS_POST){
            $id = I('post.id');
            $pro = M('serve_product');
            $con = M('serve_product_con');
            $des = $pro -> where('id = "'.$id.'"') -> delete();
            $nes = $con -> where('sid = "'.$id.'"') -> delete();
            echo 1;
        }
    }
    //删除无限添加得到的这条数据
    public function deles(){
        $id = I('post.id');
        $del = M('serve_product_con') -> where('id = "'.$id.'"') -> delete();
        if($del){
            echo 1;
            return ;
        }else{
            echo 0;
            return ;
        }
    }

    public function fengkong_right_moren()
    {
        
        
        // 解析模板
        // Ain/Index/index.html
        $this -> display();
    }

//----------------遍历出左侧导航栏------------------------------------------------   
    // public function fengkong_left()
    // {
    //     $feng = M('serve_class');
        
    //     // 1 0
    //     //   3 1
    //     //   4 1
    //     // 2 0
    //     //   5 2
    //     //   6 2
      
    //     $sel = $feng
    //         -> where('pid = 0')
    //         -> order('pid asc')
    //         -> select();
           
    //     foreach ($sel as $k => $v) {
            
    //         $val = $feng -> where('pid = "'.$v['id'].'"') -> select();
    //         $sel[$k]['c'] = $val;
           
    //     }
       
    //     $this -> assign('sel',$sel);
        
    //     $this -> display();
    // }
}