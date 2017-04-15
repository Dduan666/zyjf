<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
		<title>【卓屹金服】</title>
		<link rel="stylesheet" type="text/css" href="/Public/zynw/css/b_head.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/zynw/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/zynw/css/jquery-ui.css"/>
		
    	<script src="/Public/zynw/js/jquery.js" type="text/javascript"></script>
    	<script src="/Public/zynw/js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="/Public/zynw/js/html5shiv.js" type="text/javascript"></script>
        <script src="/Public/zynw/js/respond.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="head">
		   <div class="head_back">
		   	<div class="head_logo">
		   		<img src="/Public/zynw/img/logo.png"/>
		   	</div>
				<div class="bl-vernav-warp">
			  <div class="auxline"></div>
			<ul class="bl-vernav vernav-level">
				<li class="cur">
					<?php if(session('user_business.rank') == 1): ?><a class="one" href="<?php echo U('Html/index');?>" target="_parent">业务管理</a>
					<?php else: ?>
						<a class="one" href="javascript:void(0);" onclick="quan()" target="_parent">业务管理</a><?php endif; ?>
				</li>
				<li onclick="chuxian()">
					<?php if(session('user_business.rank') == 2): ?><a class="one" href="<?php echo U('Feng/fengkong_main');?>" target="_parent">风控管理</a>
					<?php else: ?>
						<a class="one" href="javascript:void(0);" onclick="xian()" target="_parent">风控管理</a><?php endif; ?>
				
				</li>
				<li>
					<a class="one" target="_parent">人力资源</a>
				</li>
				<li>
					<a class="one" target="_parent">财务会计</a>
				</li>
				<li>
					<a class="one" target="_parent">会议安排</a>
				</li>
								<li>
					<a class="one" target="_parent">统计数据</a>
				</li>
				<!-- <li>
					<a class="one" target="_parent">提醒</a>
				</li> -->
				<li>
					<?php if(session('user_business.rank') == 1): ?><a class="one" target="_blank" 
						href="http://web.zhuoyijinrong.com?id=<?php echo session('user_business.id');?>&name=<?php echo session('user_business.name');?>&token=<?php echo session('user_business.token');?>">考试与培训</a>
					<?php else: ?>
						<a class="one" target="_blank" 
						href="http://web.zhuoyijinrong.com/Exam?id=<?php echo session('user_business.id');?>&name=<?php echo session('user_business.name');?>&token=<?php echo session('user_business.token');?>">考试与培训</a><?php endif; ?>
					
				</li>
			</ul>
		</div>
		<div class="head_right">
			<div></div>

			<div class="zhu_btn btn_a" onclick="forget()"> <a>重置密码</a></div>
			<div class="den_btn btn_a"><a href="<?php echo U('Ain/Login/loginOut');?>">退出</a></div>

			<!-- <div class="den_btn btn_a"><a>修改密码</a></div>
			<div class="zhu_btn btn_a"> <a href="<?php echo U('Admin/Login/loginOut');?>">退出</a></div> -->
		</div>
		<div style="clear: both;"></div>
       </div>
       </div>
	</body>
</html>
<script type="text/javascript">
			$(function() {
				var verNav = $(".bl-vernav");
					line = verNav.siblings(".auxline")
				curY = verNav.children("li.cur").position().left;
				verNav.find("li").mouseenter(function() {
					$(".auxline").show();
        //设置辅助线初始化高度和宽度;要适应容器
//      stop就是暂停，stop(true)就是当前停止，后面的继续,stop(true,true)就是结束
//停止当前对象的动画，用500ms时间把当前对象移动，同时停止当前对象同层次的对象正在进行的动画，
line.height($(this).outerHeight() - 1).width($(this).outerWidth());
						var thisY = $(this).position().left;
						line.stop(true).animate({
							left: thisY
						}, 300);
						return false
					})
//					.end()
					.mouseleave(function() {
					$(".auxline").hide();
						line.stop(true).animate({
							left: curY
						}, 300)
					}).trigger("mouseleave");

			});
			function chuxian(){
			$('.tab_yewgl').fadeToggle()
			$('.auxline').fadeToggle()
			}
function quan(){
	alert('权限不足!');
}
function xian(){
	alert('权限不足!');
}
</script>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="/Public/zynw/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/zynw/css/jquery-ui.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/zynw/css/yewu.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/zynw/css/gdt.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/zynw/css/calendar.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/zynw/css/gairili.css"/>
	    <script src="/Public/zynw/js/jquery.js" type="text/javascript"></script>
	    <script src="/Public/zynw/js/jquery-ui.min.js" type="text/javascript"></script>
		<!--[if lte IE 6]>
		<script src="/Public/zynw/js/html5shiv.js" type="text/javascript"></script>
		<script src="/Public/zynw/js/respond.js" type="text/javascript"></script>
		<![endif]-->
		
	</head>

	<body>
		<div class="load_head"></div>
			<div class="fu_contain">
						<!--副主题的左部分-->
				<div class="fu_contain_left">
					<div class="list_detali">
			<div class="yuyue_list content_3 content">
				<div class="tltle">预约信息</div>
				<table class="table table-bordered">
					<tr>
						<td>预约</td>
						<td>姓名</td>
						<td>电话</td>
						<td>状态</td>
					</tr>
					<?php if(is_array($dd)): foreach($dd as $key=>$value): ?><tr>
                    <td style="color:red;">
                    	<?php if($value['time'] < $value['xtime']): else: ?>
                    		新<?php endif; ?> 
                    </td>
                    <td value="<?php echo ($value['did']); ?>"><?php echo ($value['vname']); ?></td>
                    
                    <th><?php echo ($value['phone']); ?></th>
                    <td>
	                    <?php if($value['did'] == 0): ?><a><button type='button' id="<?php echo ($value['id']); ?>" class='btn btn-success' name='sta[]' onclick="kk(this);"><i class="fa fa-edit"></i>未抢</button></a>
	                    <?php else: ?>
	                    	<button type='button' class='btn btn-default' disabled="disabled" name='sta[]'><i class="fa fa-trash-o"></i>专属</button><?php endif; ?>
                    </td>
                </tr><?php endforeach; endif; ?>
				</table>
			</div>
			</div>
				</div>
						<!--副主题的you部分-->
				<div class="fu_contain_right">
					<div class="personal_details">
			<div class="personal_details_con">
				<div class="icon_top clearfix">
					<div class="icon_top_one">
						<div class="header_img">
							<img src="/Public<?php echo ($data['pic']); ?>"/>
						</div>
						<div class="icon_top_two">
							<div class="title">
								<?php echo ($data['vname']); ?>
							</div>
							<div>部门经理</div>
							<div class="wszl" onclick="wszl()">完善资料</div>
							
						</div>
					</div>
					<div class="icon_top_three">
						<div class="icon_top_three_one">成交金额<span><?php echo ($data['money']); ?></span>万元</div>
						<div>浏览次数<span><?php echo ($data['pv']); ?></span>次</div>
					</div>
				</div>
				<div class="top_bottom">
					 <input type="file" class="order_file" style="display: none;">
                      <span  id="button_save" class="order_input text" >图片上传</span>
					<span id="case_zhuan" onclick="anli()">撰写案例</span>
				</div>
			</div>
		</div>
					
				</div>
			</div>
			
			<div class="zhu_contain">
				<div class="zhu_contain_left">
				<div class="zhuti_left">
    <div class="calander_big">
	<div class="shouye_title">日历</div>
		<div class="calendar_1">
			<div id="demo">
            <div id="ca"></div>
            <div id="dd"></div>
            </div>
		</div>
</div>

<div class="zhuti_left_nav">
	<div class="shouye_title">客户管理</div>
	<ul class="tree">
    <li class="nosanjiao">
  	<span class="cpxxbg"><a href="<?php echo U('Html/yewu_moren');?>" target="right">留言管理</a></span>
  </li>

   	
  <li><span class="cpxxbg">客户关系管理</span>
    <ul class="second_ul">
      <li class="first_li nosanjiao"><a href="javascript:void(0);" target="right">信息创建</a>
        <!--<ul class="show_ul fenlei_ul">
          <li><a >大额消费信托</a></li>
          <li><a >房抵贷经营性</a></li>
          <li><a >标准抵押经营贷</a></li>
          <li><a>房抵净值经营贷</a></li>
        </ul>-->
      </li>
      <!--------- ----
      	nosanjiao :若二级下不在分类  则在li first_li里面增加class nosanjiao 来去掉所带的三角符号
      	------------ -->
     
      <li class="first_li nosanjiao"><a href="<?php echo U('Html/yewu_genjin');?>" target="right">信息跟进</a>
        <!--<ul class="fenlei_ul">
          <li><a href="" type="21">经营贷</a></li>
        </ul>-->
      </li>
      <li class="first_li nosanjiao">
      	<a href="javascript:void(0);" target="right">面谈邀约</a>
      </li>
            <li class="first_li nosanjiao">
      	<a href="javascript:void(0);" target="right">信息补全</a>
      </li>
            <li class="first_li nosanjiao">
      	<a href="javascript:void(0);" target="right">合同签约</a>
      </li>
            <li class="first_li nosanjiao">
      	<a href="javascript:void(0);" target="right">银行匹配</a>
      </li>
            <li class="first_li nosanjiao">
      	<a href="javascript:void(0);" target="right">银行客户管理</a>
      </li>
            <li class="first_li nosanjiao">
      	<a href="javascript:void(0);" target="right">民间客户管理</a>
      </li>
                  <li class="first_li nosanjiao">
      	<a href="javascript:void(0);" target="right">保险客户管理</a>
      </li>
                  <li class="first_li nosanjiao">
      	<a href="javascript:void(0);" target="right">理财客户管理</a>
      </li>
    </ul>
  </li>
  <li>
  	<span class="cpxxbg">收益分析</span>
  <ul class="second_ul ">
  	<li class="wusanjiao">ewrw</li>
  	<li class="wusanjiao">rwer</li>
  	</ul>
  </li>
</ul>
	
</div>
<div class="current_alert">
<div class="title">事件提醒</div>	
<div class="curent">
	
</div>

</div>

<div class="current_alert">
<div class="title">近期活动</div>	
<div class="curent">
	
</div>

</div>

		</div>
				</div>
				<div class="zhu_contain_right">
					<iframe name="right" src="<?php echo U('Html/yewu_moren');?>" width="100%" height="100%" scrolling="no" frameborder="0" id="right"></iframe>
					
				</div>
				
				
			</div>
			
	<div style="background: #333333;color: #FFFFFF;text-align: center;font-size: 15px;line-height: 30px;">
		北京卓屹金融服务外包有限公司
		
	</div>	
	
				<!--案例输入--> 
			<div id="dialog_confirm1" title="请撰写您的案例？"style="display: none;">
				<div>第一次填写时，请按顺序填写</div>
			   
			    <div>成功案例一:</div>
			 <textarea name="" rows="" cols="" id="in1" class="case"><?php echo ($data['case']); ?></textarea>
		
			    <div>成功案例二:</div>
			 <textarea name="" rows="" cols="" id="in1" class="casetwo"><?php echo ($data['casetwo']); ?></textarea>
		
			    <div>成功案例三:</div>
			 <textarea name="" rows="" cols="" id="in1" class="casethree"><?php echo ($data['casethree']); ?></textarea>
			 <div>成功案例四:</div>
			 <textarea name="" rows="" cols="" id="in1" class="casefour"><?php echo ($data['casefour']); ?></textarea>
		
			    <div>成功案例五:</div>
			 <textarea name="" rows="" cols="" id="in1" class="casefive"><?php echo ($data['casefive']); ?></textarea>
</div>
		
		<!--信息完善的弹窗-->
			<div id="xinWan" title="请完善您的信息？"style="display:none;">
<form action="<?php echo U('Ain/Html/save');?>" method="post" enctype="multipart/form-data">

<table class="table table-bordered wansha" >
	<tr>
		<td>姓名：</td>
		<td><input type="text" name="vname" id="vname" value="<?php echo ($data['vname']); ?>" /></td>
<td>性别：</td>
		<td><input type="radio" name="man" id="man" value="1" <?php if(strtoupper($data['sex']) == '1'): ?>checked<?php endif; ?>/><label for="man" class="sex">男</label><input type="radio" name="man" id="woman" value="2" <?php if(strtoupper($data['sex']) == '2'): ?>checked<?php endif; ?>/><label for="woman" class="sex">女</label></td>
		
	</tr>
	<tr>
		<td>职务：</td>
		<td>
			<select id="position">
				<option value="0" disabled="true" selected="selected">请选择</option>
				<option value="1" <?php if(strtoupper($data['position']) == '1'): ?>selected<?php endif; ?>>业务经理</option>
				<option value="2" <?php if(strtoupper($data['position']) == '2'): ?>selected<?php endif; ?>>部门主管</option>
				<option value="3" <?php if(strtoupper($data['position']) == '3'): ?>selected<?php endif; ?>>部门经理</option>
			</select>
		</td>
		<td>成交额度：</td>
		<td><input type="text" id="money" placeholder="请输入额度" value="<?php echo ($data['money']); ?>"/><span>万元</span></td>
	</tr>
	<tr>
		<td>擅长业务：</td>
		<td colspan="3">
			<!--<select id="business">
				<option value="0" disabled="true" selected="selected">请选择</option>
				<option value="1">标准经营类贷款</option>
				<option value="2">标准消费类贷款</option>
				<option value="3">短借垫资</option>
				<option value="4">信用贷款</option>
			</select>-->
			<input type="checkbox" name="fuxuan" id="jingying" onclick="return checkDate(2)"
 value="1" <?php if(strtoupper($data['business']) == '1'): ?>checked<?php endif; ?>/><label for="jingying">标准经营类贷款</label>
			<input type="checkbox" name="fuxuan" id="xiaofei" onclick="return checkDate(2)"
 value="2" <?php if(strtoupper($data['business']) == '2'): ?>checked<?php endif; ?>/><label for="xiaofei">标准消费类贷款</label>
			<input type="checkbox" name="fuxuan" id="duanjie" onclick="return checkDate(2)"
 value="3" <?php if(strtoupper($data['business']) == '3'): ?>checked<?php endif; ?>/><label for="duanjie">短借垫资</label>
			<input type="checkbox" name="fuxuan" id="xinyong" onclick="return checkDate(2)"
 value="4" <?php if(strtoupper($data['business']) == '4'): ?>checked<?php endif; ?>/><label for="xinyong">信用贷款</label>

		</td>
		
	</tr>
	<tr>
		<td>行事风格：</td>
		<td colspan="4">
			<div class="big_div2"></div>
		</td>
		
		
	</tr>
	<tr>
	<td colspan="4">
	<div class="big_div">
		<div>沉着稳重</div>
		<div>踏实细心</div>
		<div>当机立断</div>
		<div>认真负责</div>
		<div>诚实守信</div>
		<div>雷厉风行</div>
		<div>考虑全面</div>
		<div>尽职敬业</div>
		<div>讲求原则</div>
		<div>做事果断</div>
	</div></td>	
	</tr>
	<tr>
		<td>个人介绍：</td>
		<td colspan="3"><textarea id="self" style="width: 100%;height: 100%;" value=""><?php echo ($data['self']); ?></textarea></td>

	</tr>
	</table>

</form>
    </div>
	<!--修改密码yangs-->
<div id="xiuMa" title="忘记密码？"style="display:none;">
	<div class="xiou">
<label for="new_mima">新密码:</label><input type="password" name="password" id="new_mima" class="paw" value="" placeholder="请输入至少6位的密码"/>
</div>
	<div class="xiou">
<label for="con_mima">确认密码:</label><input type="password" name="repassword" id="con_mima" class="repaw" value="" placeholder="请输入至少6位的确认密码"/>
</div>
    </div>
		
		
	</body>
</html>

<script src="/Public/zynw/js/gdt.min.js" type="text/javascript"></script>
<script src="/Public/zynw/js/calendar.js" type="text/javascript"></script>
	<script>
	//根据权限设置，无此页权限的话，即时输入URL地址也返回上一级
		$(function(){
			if(<?php echo session('user_business.rank') ?> != 1){
				history.go(-1);
			}
		})
	</script>
<script type="text/javascript">


$(function(){
	  $(".second_ul").hide();
	// $(".load_head").load("../html/bhead.html")
//	$('.second_ul>li').addClass("tree-closed");
    $(".tree>li").not('.nosanjiao').addClass("tree-closed");
    $(".second_ul>li").not('.nosanjiao').addClass("tree-closed");
})

//左侧的导航部分的js

$(".tree").on("click","li",function(){
	$(this).find('.second_ul').slideToggle();
	$(this).siblings().find(".second_ul").slideUp()
	$(".tree>li>ul>li>ul>li").find('a').removeClass('wl_active');
})

	$(".second_ul").on("click","li",function(){
		event.stopPropagation();
		$(this).find('ul').slideToggle();
		$(this).siblings().find("ul").slideUp()
//		$(this).toggleClass("tree-opened").siblings().removeClass('tree-opened')
	})
	$(".first_li>ul").on("click","li",function(){
		event.stopPropagation();
		$(".first_li>ul>li").find('a').removeClass('wl_active');
		$(this).find('a').addClass('wl_active');
	})
	
	
	//	图片上传部分
$('.order_input').off().on('click',function(){
		$(".order_file").click();
	});
	$(".order_file").change(function(){
		if($(".order_file").val()==""){
			$(".order_input").html("图片上传")
		}else{
		$(".order_input").html($(".order_file").val())	
		}
	})
	//	图片上传部分
//	日历的js部分
	$('#ca').calendar({
        width: 320,
        height: 320,
        data: [
			{
			  date: '2015/12/24',
			  value: 'Christmas Eve'
			},
			{
			  date: '2015/12/25',
			  value: 'Merry Christmas'
			},
			{
			  date: '2016/01/01',
			  value: 'Happy New Year'
			}
		],
        onSelected: function (view, date, data) {
            console.log('view:' + view)
            alert('date:' + date)
            console.log('data:' + (data || 'None'));
        }
    });

    $('#dd').calendar({
        trigger: '#dt',
        zIndex: 999,
		format: 'yyyy-mm-dd',
        onSelected: function (view, date, data) {
            console.log('event: onSelected')
        },
        onClose: function (view, date, data) {
            console.log('event: onClose')
            console.log('view:' + view)
            console.log('date:' + date)
            console.log('data:' + (data || 'None'));
        }
    });
	//	日历的js部分
	


</script>
<script type="text/javascript">
//业务只能选两个
function  checkDate(n){
    var checkedCount=0; 
    var len=$('input[type="checkbox"]');
	for(var i=0;i<len.length ;i ++){ 
	  	if(len[i].checked){ 
	    	checkedCount++; 

	    } 
	} 
	if(checkedCount>n){ 
		alert("亲!选您最专业的两个业务哦!"); 
    	return false; 
  	} 
} 

//密码修改	
function forget(){
	$( "#xiuMa" ).dialog({
       	draggable:true,
       	modal:true,
       	resizable:false,
       	minWidth: 400,
       	minHeight:400,
       	buttons:{
       		"确定":function(){
       			$(this).dialog("close")
       			var jid = '<?php echo (int)session('user_business.jid');?>';
       			var password = $('.paw').val();
       			var repassword = $('.repaw').val();
       			$.ajax({
       				type : 'post',
       				url : '<?php echo U('Ain/Html/pass');?>',
       				data : {jid:jid,password:password,repassword:repassword},
       				success : function(data){
       					
       					if(data == 1){
       						alert('密码不能为空');
       					}else if(data == 2){
       						alert('确认密码不能为空');
       					}else if(data == 3){
       						alert('密码不能少于6位');
       					}else if(data == 4){
       						alert('密码与确认密码不一致');
       					}else{
       						alert('密码修改成功');
       					}
       				}
       			})
       		},
       		"取消":function(){
       			$(this).dialog("close")
       		}
       	 }
       });	
}
//  案例撰写
function anli(){
   $( "#dialog_confirm1" ).dialog({
   	draggable:true,
   	modal:true,
   	resizable:false,
   	minWidth: 800,
   	maxHeight: 600,
   	buttons:{
   		"确定":function(){
   			
   			$(this).dialog("close")
   			
   			var jid = '<?php echo (int)session('user_business.jid');?>';
   			var case1 = $('.case').val();
   			var casetwo = $('.casetwo').val();

   			var casethree = $('.casethree').val();
   			var casefour = $('.casefour').val();
   			var casefive = $('.casefive').val();

   			// alert(jid);
   			// alert(casethree);

   			$.ajax({
   				type : 'post',
   				url : '<?php echo U('Ain/Html/ajax');?>',
   				data : {jid:jid,case:case1,casetwo:casetwo,casethree:casethree,casefour:casefour,casefive:casefive},
   				success : function(data){
   					
   					alert('添加成功');
   				}
   			})
   		},
   		"取消":function(){
   			$(this).dialog("close")
   		}
   	 }
   });
}


//on事件  针对于增删节点数，$里面是一直存在的节点，on里面第二个参数是绑定新增的
	$('.big_div2').on('click','div',function(){
		$(this).remove()                       
	})

var ttt=false;
	$('.big_div>div').click(function(){
		ttt=true;
		
     var val=$(this).html();
	var t=false;
	$('.big_div2>div').each(function(){
		
		if(val==$(this).html()){
			t=true;
			return false//在each中退出循环
		}
		})
	if(t){
		alert('不要重复添加')
		return ;
	}
	var length=$('.big_div2>.div1').length;
		if(length>1){
			alert("最多选择两个o！")
			return ;
		}
	var div1="<div class='div1'>"+val+"</div>"
		$('.big_div2').append(div1)
		
	})


function wszl(){
$( "#xinWan" ).dialog({
       	draggable:true,
       	modal:true,
       	resizable:false,
       	minWidth: 800,
       	minHeight:400,
       	buttons:{
       		"确定":function(){
				var style="";
       			var t=$('.big_div2>.div1').length;
	       			if(t==1){
	       				style=$('.div1').html();
	       			}else{
						style=$('.big_div2>.div1').eq(0).html()+","+$('.big_div2>.div1').eq(1).html()
	       			}

       			

       			$(this).dialog("close")

       			// var vname = $('#vname').val();
       			var jid = '<?php echo (int)session('user_business.jid');?>';
       			var vname = $('#vname').val();
       			var sex = $("input[name='man']:checked").val();
       			var position = $('#position').val();
       			var business = document.getElementsByName("fuxuan");//获取name值相同的个数
       			var s=''; 
				for(var i=0; i<business.length; i++){ 
					if(business[i].checked) s+=business[i].value+','; //如果选中，将value添加到变量s中 
				} 
				if(ttt==false){
					$('.big_div2').html("")
					style=$('.big_div2').html();
				}
       			var money = $('#money').val();
       			var self = $('#self').val();
       			$.ajax({
       				type : 'post',
       				url : '<?php echo U('Ain/Html/add');?>',
       				data : {jid:jid,style:style,vname:vname,sex:sex,position:position,business:s,money:money,self:self},
       				success : function(data){
       					
       					if(data == 1)
       					{
       						alert('编辑成功');
       					}else{
       						alert('编辑失败');
       					}
       				}
       			})
       		},
       		"取消":function(){
       			$(this).dialog("close")
       		}
       	 }
       });	
	
}
</script>
<script type="text/javascript">
	(function($){
			$(window).load(function(){
				$(".content_3").mCustomScrollbar({
					scrollInertia:600,
					autoDraggerLength:false

				});
				
//				$(".content_4").mCustomScrollbar({
//mouseWheel:false
//
//				});

//		$(".content_2").mCustomScrollbar({
//
//					scrollInertia:150
//          });		
				
				});
    })(jQuery);
</script>
<script type="text/javascript">
	
	//	iframe的高度自适应部分
$(function(){
	 var frame = document.getElementById("right")
    var _reSetIframe = function(){
        try {
            var frameContent = frame.contentWindow.document,
bodyHeight = Math.max(frameContent.body.scrollHeight,frameContent.documentElement.scrollHeight);
            if (bodyHeight != frame.height){
                frame.height = bodyHeight;
            }
        }
        catch(ex) {
        	console.log(bodyHeight)
            frame.height = 500;
        }
    }
    if(frame.addEventListener){
        frame.addEventListener("load",function(){setInterval(_reSetIframe,200);},false);
    }else{
        frame.attachEvent("onload",function(){setInterval(_reSetIframe,200);});
    }
});
//	iframe的高度自适应部分
</script>
<script>
function kk(obj)
{
	var id;//prop
	id=$(obj).parents('tr').find('a>button').attr('id')

	$.ajax({
		type : 'post',
		url : '<?php echo U('Ain/Html/edit');?>',
		data : {id:id},
		success : function(data){
			
			if(data==1)
			{
				alert('下手慢了，此单已被抢！');
				window.location.href="<?php echo U('Ain/Html/index');?>";
			}else if(data==2){
				alert('抢单成功');
				window.location.href="<?php echo U('Ain/Html/index');?>";
			}else{
				alert('抢单失败');
			}
		}
	})

}

</script>