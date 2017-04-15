<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
		<title>卓屹金服</title>
		<link rel='icon' href='/Public/zy/images/logo2017.png' type='image/x-ico' />
		<link rel="stylesheet" type="text/css" href="/Public/zy/layer/skin/default/layer.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/zy/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/zy/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="/Public/zy/css/animate.min.css" />
    	<link rel="stylesheet" type="text/css" href="/Public/zy/css/public.css">
    	<script src="/Public/zy/js/jquery.js" type="text/javascript"></script>
	    <script src="/Public/zy/layer/layer.js" type="text/javascript"></script>
        <!--[if lte IE 9]>
        <script src="/Public/zy/js/html5shiv.js" type="text/javascript"></script>
	    <![endif]-->
        <script src="/Public/zy/js/xq_navbar.js" type="text/javascript"></script>
        <!-- <link rel="stylesheet" type="text/css" href="/Public/zy/css/jquery-ui.css"/> -->
	    <!-- <script src="/Public/zy/js/jquery-ui.min.js" type="text/javascript"></script> -->
	    <script src="/Public/zy/js/zyjf.js" type="text/javascript"></script>
	    
	    <!-- 手机访问PC端网站时跳到手机端 -->
		<script src="/Public/yidong.js" type="text/javascript"></script><script type="text/javascript">uaredirect("http://m.zhuoyijinrong.com");</script>
		
	</head>
	<body>
		<div class="ZY_tk_fixed">
			<!-- <div class="zy_zhidian" style="display: none;"> -->
				<div class="zy_zhidian" style="display: none;">
					<div class="zy_zhidian_le">
						<h4>服务咨询</h4>
						<p class="tel">9:00-22:00</p>
						<div class="tel">400-9100-188</div>
					</div>
					<div class="zhidian_ri">
					<h4>岗位咨询</h4>
					<p class="tel">9:00-18:00</p>
					<div class="tel">400-9100-166</div>
					</div>
				</div>
		<!-- 	</div> -->

		<div class="zy_tab_ri_tabka">
		<div class="zy_tab_ri_tabka_position"><a href="/index.php/home/Lianxi/lianxi.html" target="_blank">位置</a></div>
			<div class="zy_tab_tabka_qie_tel" onclick="zhidian_zya(this)">致电</div>
			<div class="zy_tab_ri_tabka_inline" onclick="zhidian_zyb(this)" id="">
				<!-- mibew button -->
				<a id="mibew-agent-button" href="http://101.200.216.198:8080/chat?locale=zh-cn" target="_blank" onclick="Mibew.Objects.ChatPopups['58abaedd183d638f'].open();return false;"><span>在线咨询</span></a>
				<!-- / mibew button -->
			</div>	
		</div>
		</div>
		
		<!--提示信息开始-->
		<div style="height: 40px;background:#979797;" id="hz_tishiz">
			<div id="hz_closz" onclick="close_alert()"></div>
			<div id="hz_tsdivz">
				<span class="zyjf_span1">温馨提示 ：谨防不法分子冒以本公司名义办理信用卡等相关业务！&nbsp;&nbsp;<a href="/index.php/home/Header/alert" target="_blank"><!--更多&gt;&gt;--></a></span>
				<span class="element-1 zyjf_span2" style="margin-left: 60px;">咨询电话 ：400-9100-188/400-9100-166</span>
			</div>
		</div>
		<!--提示信息结束-->
		<div class="hzall">
			<div  id="hzall">
				<div style="width: 100%; margin: auto; z-index: 99;">
				</div>
				<div class="topback">
					<div class="nav nav_zyjf nav_zyjf_shaodw">
						<div class="serecity color_wwl" id="serecity">
							<div class="contain_fix">
								<div class="row_con">
								<div class="row-top1">
									<?php if(is_array($ad)): foreach($ad as $key=>$v): ?><div>
										<dl>
			                                <dt><div style="cursor: default;">
												<?php if($v['type'] == 1): ?>短借垫资
												<?php elseif($v['type'] == 2): ?>
		                                            抵押消费贷
		                                        <?php elseif($v['type'] == 3): ?>
		                                            经营性抵押物业
		                                        <?php elseif($v['type'] == 4): ?>
		                                            抵押经营贷
		                                        <?php elseif($v['type'] == 5): ?>
		                                            房抵净值经营贷
		                                        <?php elseif($v['type'] == 6): ?>
		                                            信用贷
		                                        <?php elseif($v['type'] == 7): ?>
		                                            房抵贷经营性收入
		                                        <?php elseif($v['type'] == 8): ?>
		                                            配套抵押<?php endif; ?>
			                                </div></dt>
			                                <?php if(is_array($v["c"])): foreach($v["c"] as $key=>$vv): ?><dd><a href="<?php echo U('Jingying/fuwuzl',array('id'=>$vv['id']));?>"><?php echo ($vv["product"]); ?></a></dd><?php endforeach; endif; ?>
                                		</dl>
									</div><?php endforeach; endif; ?>	
								</div>
								
								</div>
							</div>
						</div>
						<div class="contain_zz"></div>
						<div class="waibao">
						
						<div class="nav_logo"><a href="<?php echo U('Index/index');?>"><img src="/Public<?php echo ($dd[0]['pic']); ?>" alt="" /></a></div>
					
							<div class="menu xq_bag" id="bar1">
							<ul id="gl xq_navbar">
								<li class="xq_navli">
									<a href="/index.php/home/Index/index">首页</a>
								</li>
								<li class="xq_navli">
									<a href="/index.php/home/Jy/consultant">精英顾问</a>
								</li>
								<li class="xq_navli">
									<a href="/index.php/home/Guanyu/about_us">关于我们</a>
								</li>
								<li class="fuwuzl xq_navli abcd2" onclick="xialacaidan()"><a>所有服务<!--<span class="caret"></span>--></a>
								</li>
								
								
								<li class="xq_navli">
									<a href="/index.php/home/Ping/inline.html">在线评估</a>
								</li>
								 <li class="fuwuzl xq_navli abcd2"><a href="/index.php/home/Bangzhu/jisuanqi">计算器</a>
								</li>
								 <li class="fuwuzl xq_navli abcd2"><a href="/index.php/home/Bangzhu/gonglue">攻略问答</a>
								</li>
								 <li class="fuwuzl xq_navli abcd2"><a href="/index.php/home/Bangzhu/newlist">新闻资讯</a>
								</li>
								

							</ul>
							<div style="clear: both;"></div>
						</div>

						<div class="nav_left_dhf">
								
							<!--未登录时的状态-->
							<?php if(session('auser.id') == null): ?><div class="zhaungtai">
								<a href="<?php echo U('Login/login');?>" class="login_nav" target="_blank" onclick="deng()">登录</a>
								<a href="<?php echo U('Login/register');?>" class="regi_nav" target="_blank" onclick="zhu()">注册</a>
								</div>
							<?php else: ?>
							<!--登录后的状态，-->
	                            <div class="login_after_state">
									<div class="xinxi"><?php echo session('auser.username') ?>欢迎您!</div>
									<a href="<?php echo U('Home/Login/loginOut');?>"><div class="quit">退出</div></a>
									
								</div><?php endif; ?>
							
							<div style="clear: both;"></div>
						</div>
						</div>
					</div>
				</div>
				<!--topback-->
			</div>
		</div>
	</body>
</html>

<script type="text/javascript">
$(function(){
$("#bar1").xq_navbar({"type":"underline","liwidth":"auto","bgcolor":"black","hcolor":"#f0f"});
$('.xq_move').hide()
	});
$('.xq_bag').hover(function(){
	$('.xq_move').show()
},function(){
	$('.xq_move').hide()
})

$('.search_nav').click(function(){
	$('#search_dhf').slideToggle(500);
})


</script>

<!--页面跟踪-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85930367-2', 'auto');
  ga('send', 'pageview');
</script>  
<script>
function deng(){
	var id = 4;
	$.ajax({
		type : 'post',
		url : '<?php echo U('Home/Flow/deng');?>',
		data : {id:id},
		success : function(){

		}
	})
}

function zhu(){
	var id = 5;
	$.ajax({
		type : 'post',
		url : '<?php echo U('Home/Flow/deng');?>',
		data : {id:id},
		success : function(){

		}
	})
}
</script>
<script type="text/javascript" src="http://101.200.216.198:8080/js/compiled/chat_popup.js"></script>
<script type="text/javascript">
Mibew.ChatPopup.init({
	"id":"58abaedd183d638f",
	"url":"http:\/\/101.200.216.198:8080\/chat?locale=zh-cn",
	"preferIFrame":false,
	"modSecurity":false,
	"width":640,
	"height":480,
	"resizable":true,
	"styleLoader":"http:\/\/101.200.216.198:8080\/chat\/style\/popup"
});
</script>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<title></title>
		<link rel="stylesheet" type="text/css" href="/Public/zy/css/help_center.css"/>
	</head>
	<body>
		<!--页面搜索框-->
		<div class="gonglue_bjt">
		<div class="gonglue_search">
			<h3>今天&nbsp;,&nbsp;您有什么需要我们帮助的吗&nbsp;?</h3>
			<form action="<?php echo U('Home/Bangzhu/gonglue');?>" method="get">
				<div class="big_waibao"><input type="text" name="search" value="" placeholder="搜索的问题..." /><button>搜索</button></div>
				<div class="hot_search">
					<?php if(is_array($sou)): foreach($sou as $key=>$ss): ?><a href="javascript:void(0);" type="<?php echo ($ss['product']); ?>" ids="<?php echo ($ss['id']); ?>" onclick="re(this)"><?php echo ($ss['title']); ?></a><?php endforeach; endif; ?>
				</div>

			</form>
		</div>
		</div>
		<!--页面搜索框-->
		
	<div class="help_center">
	<!--<div class="toubu"><a href="<?php echo U('Index/index');?>">卓屹金服</a> > <span>攻略问答</span></div>-->
	<div class="gonglue_out">
	<div class="gonglue_list">
	    <!-- <a href="<?php echo U('Home/Bangzhu/gonglue');?>?product=1" <?php if($product == 1): ?>class="gonglue_active"<?php endif; ?> >抵押经营</a> -->
	    <a href="javascript:void(0);" <?php if($product == 1): ?>class="gonglue_active"<?php endif; ?> type="1">抵押经营</a>
		<a href="javascript:void(0);" <?php if($product == 2): ?>class="gonglue_active"<?php endif; ?> type="2">抵押消费</a>
		<a href="javascript:void(0);" <?php if($product == 3): ?>class="gonglue_active"<?php endif; ?> type="3">公积金</a>
		<a href="javascript:void(0);" <?php if($product == 4): ?>class="gonglue_active"<?php endif; ?> type="4">月供</a>
		<a href="javascript:void(0);" <?php if($product == 5): ?>class="gonglue_active"<?php endif; ?> type="5">保单</a>
		<a href="javascript:void(0);" <?php if($product == 6): ?>class="gonglue_active"<?php endif; ?> type="6">短借</a>
		<a href="javascript:void(0);" <?php if($product == 7): ?>class="gonglue_active"<?php endif; ?> type="7">垫资</a>
		<a href="javascript:void(0);" <?php if($product == 8): ?>class="gonglue_active"<?php endif; ?> type="8">征信</a>
		<a href="javascript:void(0);" <?php if($product == 9): ?>class="gonglue_active"<?php endif; ?> type="9">综合</a>
	</div>
	
	
	<div class="help_center_con">
	<div>
<div class="jyTable">
	<div class="zong">
		<div class="list list1">
			<div class="tabCon" >
<div class="ZYJF_one_left">
	<!--<?php if($search == NULL): ?><div class="gonglue_list_duiy">
			<?php if(strtoupper($product) == '1'): ?>抵押经营
	        <?php elseif(strtoupper($product) == '2'): ?>
	            抵押消费
	        <?php elseif(strtoupper($product) == '3'): ?>
	            公积金
	        <?php elseif(strtoupper($product) == '4'): ?>
	            月供
	        <?php elseif(strtoupper($product) == '5'): ?>
	            保单
	        <?php elseif(strtoupper($product) == '6'): ?>
	            短借
	        <?php elseif(strtoupper($product) == '7'): ?>
	            垫资
	        <?php elseif(strtoupper($product) == '8'): ?>
	            征信
	        <?php elseif(strtoupper($product) == '9'): ?>
	            综合<?php endif; ?>
		</div>
	<?php else: ?>
		<div class="gonglue_list_duiy">
		搜索
		</div><?php endif; ?>-->
		<div class="jq22-container">
				<div class="wwl_shoufq">

			    <dl class="ddl">
				<?php if($res != NULL): if(is_array($res)): foreach($res as $key=>$p): ?><dt><?php echo ($p['title']); ?></dt>
				    	<dd>
							<?php echo ($p['content']); ?>
				    	</dd><?php endforeach; endif; ?>
				<?php else: ?>
					暂无此问题~~~~~~<?php endif; ?>
			    </dl>
		</div>
		</div>	
</div>
		<!--在这里加入致电、位置、在线咨询、预约贷款，放置方式与顶部导航栏相同-->
		<div class="detail_add">
		<ul class="detail_add_ul">
			<li class="detail_cur">致电</li>
			<li>位置</li>
			<li>在线咨询</li>
			<li>预约贷款</li>
		</ul>	
		 <div class="detail_add_div">
		 	<div>
          <div class="detail_zhidain">
		 	<div class="detail_zhidian_left">
		 		<div class="title">9:00-22:00</div>
		 		<h3 class="color_tel">服务咨询</h3>
		 		<div>400-9100-188</div>
		 	</div>
		 	<div class="detail_zhidian_right">
		 		<div class="title">9:00-18:00</div>
				<h3 class="color_tel">岗位咨询</h3>
				<div>400-9100-166</div>
		 	</div>
		 	</div>	
	
		 	</div>
		 	<div style="display: none;">
		 	<div class="detail_left">
		 	<h2 class="color_tel">总部地址</h2>
		 	<div >北京市朝阳区东四环中路41号嘉泰国际大厦B座11层</div>
		 	<h2  class="color_tel">分部地址</h2>
		 	<div>北京市朝阳区西大望路温特莱中心B座202</div>
		 	<h2  class="color_tel">交通方式</h2>
		 	<div>总部：乘坐地铁一号线大望路站E或F口出
		 		乘坐595路英家坟下车即可</div>
		 		<div>分部：乘坐地铁一号线大望路站E或F口出，直走即可</br>
		 	</div>
		 	</div>
		 	<div class="detail_right">
		 	<div class="detail_ditu">
			<div id="allmap">
	        </div>	
		   </div>
		   	</div>
		 		
		 		
		 	</div>
<div style="display: none;">
		 		<div class="inline_detail">
		 			<div class="inline_detail_le">
		 				<h2>服务咨询</h2>
		 				<div>每天 9:00--18:00</div>
		 				<div class="detail_tijiao fuwu_wl">
		 					<a href="tencent://message/?uin=2174136514&Site=客服1&Menu=yes" target="_blank" class="call_me">与我联系</a>

		 					</div>
		 				
		 			</div>
		 			<div class="inline_detail_ri">
		 				<h2>岗位咨询</h2>
		 				<div>每天 9:00--18:00</div>
		 				<div class="detail_tijiao fuwu_dhf">
		 					<a href="tencent://message/?uin=2174136514&Site=客服1&Menu=yes" target="_blank" class="call_me">与我联系</a>
		 				</div>
		 			</div>
		 		</div>
		 	</div>

		 	<div style="display: none;">
		 		<div class="yuyue_dhf">		
		 		<div class="form-inline">
		 		<div class="form-group">
	<label for="name_dhf"  class="margi">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</label>
	<input type="tel" name="ename" class="form-control" id="name_dhf" value="" placeholder="请输入您的姓名" />
	
	</div>
	<div class="form-group">
	<label for="tel_dhf"  class="margi">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：</label>
	<input type="tel" name="phone" class="form-control" id="tel_dhf" value="" placeholder="请输入您的手机号" />
	
	</div>
	</br>
	<div class="form-group">
	<label for="b" class="margi">贷款金额：</label>
	<input type="text" name="money" class="form-control" id="b" value="" placeholder="请输入您的贷款金额" />
	
</div>
</br>
<div class="form-group">
	<label for="input" class="margi">验证码：</label>
	<input type="text" id="input" class="form-control" placeholder="请输入安全码" >
	<div class="yzm_php" style="float:right;width:115px;height:37px;">
							 <img src="<?php echo U('Home/Public/createVCode');?>" style="display:block;margin:0px 0  0 0px;width: 100%;height:37px " onclick="this.src='<?php echo U('Home/Public/createVCode/id');?>'+Math.round(new Date().getTime()/1000)" id="yzm">
							 </div>
	
</div>
</br>
<button type="submit" class="help_submit" onclick="submit()">提交</button>
	</div>
		</div>
		</div>
		</div>
		</div>
<!--在这里加入致电、位置、在线咨询、预约贷款，放置方式与顶部导航栏相同-->
			</div>
			<!--du=iyige jieshu-->
			
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<script src="http://api.map.baidu.com/api?v=2.0&ak=dq2a6dn7Zdc7AXGKWGhqjxN2qMzHn3CQ"></script>


<script type="text/javascript">
(function(){
    $('dd').filter(':nth-child(n+4)').addClass('hideo');
    $('dl').on('click', 'dt', function() {
	    $(this).siblings().next().not('dt').slideUp(200)
	    $(this).next().slideToggle(200);
    });
 })();	 
$(function(){
var st1=116.494836;
var st2=39.922884;
var map = new BMap.Map("allmap");//创建map对象
var point = new BMap.Point(st1,st2);//经纬度
map.centerAndZoom(point,15);//定位显示城市及缩放比例	
var marker = new BMap.Marker(point);  // 创建标注
map.addOverlay(marker);              // 将标注添加到地图中
map.addControl(new BMap.NavigationControl());//添加缩放平移控件
map.enableScrollWheelZoom(true)//启用鼠标滚轮更改显示比例			
	var opts = {
	  width : 200,     // 信息窗口宽度
	  height: 100,     // 信息窗口高度
	  title : "卓屹金服" , // 信息窗口标题
	  enableMessage:true,//设置允许信息窗发送短息
	  message:"亲耐滴，晚上一起吃个饭吧？戳下面的链接看下地址喔~"
	}
	var infoWindow = new BMap.InfoWindow("地址：北京市朝阳区东四环中路嘉泰国际大厦B座1711室可乘坐1号线或14号线F口出", opts);  // 创建信息窗口对象
	marker.addEventListener("click", function(){          
		map.openInfoWindow(infoWindow,point); //开启信息窗口
	});	

})

$('.detail_add_ul>li').click(function(){
	var t=$(this).index();
	$('.detail_add_ul>li').removeClass('detail_cur');
	$(this).addClass('detail_cur');
	$('.detail_add_div>div').hide();
	$('.detail_add_div>div').eq(t).show();
})
	
	function submit()
	{
		var ename = $('#name_dhf').val();
		var phone = $('#tel_dhf').val();
		var money = $('#b').val();
		var code = $('#input').val();
		$.ajax({
			type : 'post',
			url : "<?php echo U('Home/By/add');?>",
			data : {ename:ename,phone:phone,money:money,code:code},
			success : function(data)
			{
				if(data == 1)
				{
					lay('姓名不能为空',5);
				}else if(data == 2){
					lay('手机号不能为空',5);
				}else if(data == 3){
					lay('手机号不正确',5);
				}else if(data == 4){
					lay('贷款金额不能为空不正确',5);
				}else if(data == 5){
					lay('验证码不正确',5);
					document.getElementById("yzm").src="<?php echo U('Home/Public/createVCode/id');?>="+ Math.random();
					
				}else{
					lay('您的信息我们已收到，我们会及时与您联系',1);
				}
			}
		})
	}
	
//	$(function(){ 
//		var windowUrl=window.location.href;
//		$(".gonglue_list>a").each(function(){
//			$(this).removeClass("gonglue_active")
//      var t=$(this).attr('href');
//      if(windowUrl.indexOf(t)!=-1){
//        $(this).addClass('gonglue_active');
//        return;
//      }
// })
//	})

//添加高亮，并返回数据
$('.gonglue_list').on('click','a',function(){
	$('.gonglue_list_duiy').html('');
	$('.ddl').html('');

	$('.gonglue_list>a').removeClass('gonglue_active');
	$(this).addClass('gonglue_active');

	var product = $(this).attr('type');
	// alert(product);
	// $.ajax({
	// 	type : 'post',
	// 	url : '<?php echo U('Home/Bangzhu/ajax2');?>',
	// 	data : {product:product},
	// 	success : function(da){
	// 		if(da==1){
	// 			var pro = '抵押经营';
	// 		}else if(da==2){
	// 			var pro = '抵押消费';
	// 		}else if(da==3){
	// 			var pro = '公积金';
	// 		}else if(da==4){
	// 			var pro = '月供';
	// 		}else if(da==5){
	// 			var pro = '保单';
	// 		}else if(da==6){
	// 			var pro = '短借';
	// 		}else if(da==7){
	// 			var pro = '垫资';
	// 		}else if(da==8){
	// 			var pro = '征信';
	// 		}else if(da==9){
	// 			var pro = '综合';
	// 		}
	// 		var dd = $('.gonglue_list_duiy').append(pro);
			
	// 	}
	// })
	$.ajax({
		type : 'post',
		url : '<?php echo U('Home/Bangzhu/ajax');?>',
		data : {product:product},
		success : function(data){
			
			var de = eval("("+data+")");
			// console.log(de);
			var dat;
			if(de.length!==0){
				$.each(de,function(i,n){
					dat = '<dt>'+n.title+'</dt><dd>'+n.content+'</dd>';
					$('.ddl').append(dat);
				});
			}else{
				dat = '暂无此问题~~~~~~';
				$('.ddl').append(dat);
			}
			$('dd').filter(':nth-child(n)').addClass('hideo');
		}
	})
})

//热搜
function re(obj){
	$('.gonglue_list_duiy').html('');
	$('.ddl').html('');
	var product = $(obj).attr('type');
	var id = $(obj).attr('ids');

	$('.gonglue_list>a').removeClass('gonglue_active');
	$(".gonglue_list>a").each(function(){  //遍历产品
		var inde=$(this).attr("type");
		if(inde==product){           //当产品的type=热搜的product时，给此产品加高亮
			$(this).addClass('gonglue_active');
			return;
		}
	})
	$.ajax({
		type : 'post',
		url : '<?php echo U('Home/Bangzhu/reSou2');?>',
		data : {product:product},
		success : function(da){
			if(da==1){
				var pro = '抵押经营';
			}else if(da==2){
				var pro = '抵押消费';
			}else if(da==3){
				var pro = '公积金';
			}else if(da==4){
				var pro = '月供';
			}else if(da==5){
				var pro = '保单';
			}else if(da==6){
				var pro = '短借';
			}else if(da==7){
				var pro = '垫资';
			}else if(da==8){
				var pro = '征信';
			}else if(da==9){
				var pro = '综合';
			}
			var dd = $('.gonglue_list_duiy').append(pro);
			
		}
	})
	// $(this).addClass('gonglue_active');
	$.ajax({
		type : 'post',
		url : '<?php echo U('Bangzhu/reSou');?>',
		data : {product:product,id:id},
		success : function(dd){
			var de = eval("("+dd+")");

			var dds;
			$.each(de,function(i,n){
				dds = '<dt type='+n.id+'>'+n.title+'</dt><dd>'+n.content+'</dd>';
				$('.ddl').append(dds);

			})
			$('dd').filter(':nth-child(n)').addClass('hideo');

		}
	})
}	

$(".hot_search>a").click(function(){
		$('html,body').animate({scrollTop: '900px'}, 1000);
	})
	
</script>
<!--页面跟踪-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85930367-2', 'auto');
  ga('send', 'pageview');

</script>

<script>
	//统计浏览本攻略问答页面的次数，每次进入或刷新本页面，浏览量+1
	$(function(){
		var id = 17;
		$.ajax({
			type : 'post',
			url : '<?php echo U('Home/Flow/show');?>',
			data : {id:id},
			success : function(data){
				if(data){
					$(document).ready(function() {
					    setInterval(function() {
					    	var did = data;
					        $.ajax({
					            url : '<?php echo U('Home/Flow/index');?>',
					            async: false ,
					            type : 'post',
					            data : {id:did},
					            success: function(msg) {
					                
					            }
					        });
					    }, 3000);
					});
				}
			}
		});
	})
</script>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			.line{
				width: 1422px;height: 1px;background: grey;margin:0px auto 0;
			}
			@media (max-width:1400px){
				.line{
				width: 1200px;
			}
			}
		</style>

	</head>
	<body>
		<div class="footer_dhf">
			<div class="line"></div>
			<div class="footer_dhf_con">
				<div class="footer_dhf_con_left">
					
					<div>
						<ul>
							<li class="ul_li1"><a>快捷导航</a></li>
							<li onclick="location.href='<?php echo U('Home/Jy/consultant');?>'" class="font_self">精英顾问</li>
							<li onclick="location.href='<?php echo U('Ping/inline');?>'" class="font_self"
>在线评估</li>
							<li onclick="location.href='<?php echo U('Bangzhu/gonglue');?>'" class="font_self"
>攻略问答</li>
							<li onclick="location.href='<?php echo U('Bangzhu/jisuanqi');?>'" class="font_self"
>贷款计算器</li>
							
						</ul></div>
					<div>
						<ul>
							<li class="ul_li1"><a>关于我们</a></li>
							<li onclick="location.href='<?php echo U('Guanyu/about_us');?>?id=0'" class="font_self"
>公司简介</li>
							<li onclick="location.href='<?php echo U('Guanyu/about_us');?>?id=1'" class="font_self"
>公司新闻</li>
							<!-- <li><a href="<?php echo U('Guanyu/about_us',array('id'=>1));?>">总经理致辞</a></li> -->
							<li onclick="location.href='<?php echo U('Guanyu/about_us');?>?id=2'" class="font_self"
>组织架构</li>
							<li onclick="location.href='<?php echo U('Guanyu/about_us');?>?id=3'" class="font_self"
>企业文化</li>
							<li onclick="location.href='<?php echo U('Guanyu/about_us');?>?id=4'" class="font_self"
>卓屹优势</li>
							<li onclick="location.href='<?php echo U('Guanyu/about_us');?>?id=5'" class="font_self"
>招贤纳士</li>
						</ul>
					</div>
					
					     <div>
    <ul class="weizhi">
       <li style="font-size: 15px;">联系我们</li>
       <li style="font-size: 12px;">北京朝阳区东四环中路</li>
       <li style="font-size: 12px;">嘉泰国际大厦B座1111室</li>
       <li style="font-size: 12px;">400-9100-188</li>
      </ul> 

      
     </div>
				</div>
				<div class="footer_dhf_con_right">
					<div style="text-align: center;margin-bottom: 10px;">官方微信</div>
					<div class="erweima_foot"></div>
	
				</div>
				<div style="clear: both;"></div>
				<div style="text-align: center;margin-top: 30px;">版权所有：北京卓屹金融服务外包有限公司&nbsp;Copyright©2013-2014&nbsp;京ICP备案16060376号-1</div>
			</div>
		</div>
		</div>
  <script type="text/javascript">
   $(document).ready(function() {
    var tb = new Date().getTime();
    var te = new Date().getTime();
    var s=setInterval(function() {
     te = new Date().getTime();
     if(te - tb > 1000) {
      $('#nb_nodeboard_close').click();
      clearInterval(s);
     }
    }, 200);
   })
  </script>

<!--即时聊天接口-->
	</body>
</html>
<!--页面跟踪-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85930367-2', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" src="http://101.200.216.198:8080/js/compiled/chat_popup.js"></script>
<script type="text/javascript">
Mibew.ChatPopup.init({
	"id":"58abaedd183d638f",
	"url":"http:\/\/101.200.216.198:8080\/chat?locale=zh-cn",
	"preferIFrame":false,
	"modSecurity":false,
	"width":640,
	"height":480,
	"resizable":true,
	"styleLoader":"http:\/\/101.200.216.198:8080\/chat\/style\/popup"
});
</script>