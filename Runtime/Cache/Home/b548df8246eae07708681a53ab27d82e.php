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
		<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
		<title>卓屹金服</title>
		<link rel="stylesheet" type="text/css" href="/Public/zy/css/consultant-child.css" />
	</head>
	<body>
		<div class="zyjf_child_consultant">
			<div class="zyjf_child_consultant_con">
				<div class="child_xiaoshou">
					<a href="<?php echo U('Index/index');?>">卓屹金服</a>
					<span> > </span>
					<a href="<?php echo U('Jy/consultant');?>">精英顾问</a>
					<span> > </span><span>详情页</span>
				</div>
				<div class="xiaohsou_gai">
					<div class="xiaoshou-gai_left">
						<div class="xiaoshou_gai_touxiang"><img src="/Public<?php echo ($jy['pic']); ?>" /></div>
						<div class="gai_right">
						<div class="xiaoshou_gai_name" style="margin-bottom:20px;">
							<div class="xiaoshou_gai_name_le name"><?php echo ($jy['vname']); ?></div>
							<div class="yewujingli">
								<?php if($jy["position"] == 1): ?>业务经理
								<?php elseif($jy["position"] == 2): ?>	
									部门主管
								<?php elseif($jy["position"] == 3): ?>
									部门经理<?php endif; ?>
							</div>
							<div class="chat_jy">
								<!-- mibew button -->
								<a id="mibew-agent-button" href="http://101.200.216.198:8080/chat?locale=zh-cn" target="_blank" onclick="Mibew.Objects.ChatPopups['58abaedd183d638f'].open();return false;"><span></span></a>
								<!-- / mibew button -->
							</div>
						</div>
						<!--<div class="xiaoshou_gai_xiangqing">
							<div class="xiaoshou_gai_xiangqing_le">服务评级：</div>
							<div class="xiaoshou_gai_xiangqing_ri"><img src="/Public/zy/img/biaoqing.png" /></div>
						</div>-->
						
						<div class="xiaoshou_gai_xiangqing">
							<div class="xiaoshou_gai_xiangqing_le">成交额度</div>
							<div class="xiaoshou_gai_xiangqing_ri"><span><?php echo ($jy["money"]); ?></span><span>万</span></div>
						</div>

						<!--<div class="xiaoshou_gai_xiangqing">
							<div class="xiaoshou_gai_xiangqing_le">行事风格：</div>
							<div class="xiaoshou_gai_xiangqing_ri"><?php echo ($jy["style"]); ?></div>
						</div>-->
						<div class="xiaoshou_gai_xiangqing">
							<div class="xiaoshou_gai_xiangqing_le">擅长业务</div>
							<div class="xiaoshou_gai_xiangqing_ri">
								<?php echo ($jy["business"]); ?>
							</div>
						</div>
						
						
													<div class="xiaoshou_strat">
								<span class="xiaoshou_strat_one">服务评级</span>
								<span class="">
									<?php if($jy["grade"] == null): ?><img src="/Public/zy/img/grade1.png" alt="" />
									<?php elseif($jy["grade"] <= 20): ?>
										<img src="/Public/zy/img/grade5.png" alt="" />
									<?php elseif($jy["grade"] > 20 && $jy["grade"] <= 45): ?>
										<img src="/Public/zy/img/grade4(1).png" alt="" />
									<?php elseif($jy["grade"] > 45 && $jy["grade"] <= 60): ?>
										<img src="/Public/zy/img/grade3(2).png" alt="" />
									<?php elseif($jy["grade"] > 60 && $jy["grade"] <= 85): ?>
										<img src="/Public/zy/img/grade2.png" alt="" />
									<?php elseif($jy["grade"] > 85 && $jy["grade"] <= 100): ?>
										<img src="/Public/zy/img/grade1.png" alt="" /><?php endif; ?>
								</span>
							</div>
							
							<div class="xiaoshou_strat">
								<span class="xiaoshou_strat_one">请您评价</span>
								<div onclick="addzan(<?php echo ($jy["id"]); ?>,'3')" class="xiaoliana1 xiaoliana"></div>
								<div onclick="addzan(<?php echo ($jy["id"]); ?>,'2')" class="xiaoliana2 xiaoliana"></div>
								<div onclick="addzan(<?php echo ($jy["id"]); ?>,'1')" class="xiaoliana3 xiaoliana"></div>
							</div>

						
						<div style="clear: both;"></div>
						</div>
						<div class="xiaoshou_gai_toori">
					<div class="xingge_jieshao">
						<!--遍历类名huangguan即可-->
 						<div class="huangguan">
							<span><img src="/Public/zy/img/huangguan.png"/></span>
							<span >
								<?php echo ($jy['one']); ?>
							</span>
						</div>
						<div class="huangguan">
							<span><img src="/Public/zy/img/huangguan.png"/></span>
							<span >
								<?php echo ($jy['two']); ?>
							</span>
						</div>	
							
							
					</div>
					<div class="xiaoshou_gai_xiangqing">
							<!--<div class="xiaoshou_gai_xiangqing_le">个人介绍：</div>-->
							<div class="xiaoshou_gai_spe"><?php echo ($jy["self"]); ?></div>
						</div>
							
						</div>
					</div>
					<div class="xiaoshou-gai_right">
						<ul class="case_ul">
							<li>
								<div class="title_zyjf">
									<div class="case_li_left">
										<?php if($jy['title1'] == 1): ?>成功案例一<?php endif; ?>
									</div>
									<div class="case_li_rifht bjtu"></div>
								</div>
								<div class="case-con"><?php echo ($jy['case']); ?></div>
							</li>
							<?php if($jy['casetwo'] != null): ?><li>
								<div class="title_zyjf">
									<div class="case_li_left">
										<?php if($jy['title2'] == 2): ?>成功案例二<?php endif; ?>
									</div>
									<div class="case_li_rifht bjtu"></div>
								</div>
								<div class="case-con"><?php echo ($jy['casetwo']); ?></div>
							</li><?php endif; ?>
							<?php if($jy['casethree'] != null): ?><li>
								<div class="title_zyjf">
									<div class="case_li_left">
										<?php if($jy['title3'] == 3): ?>成功案例三<?php endif; ?>
									</div>
									<div class="case_li_rifht bjtu"></div>
								</div>
								<div class="case-con"><?php echo ($jy['casethree']); ?></div>
							</li><?php endif; ?>
						</ul>
						
						
					</div>

					<div style="clear: both;"></div>
				</div>
				<div class="yuyue_xiaoshou_gai">
<div class="xiaoshou_gai_tel">24小时贷款热线：<span>400-9100-188</span></div>
	<div>或输入您的手机号，我们将会与您取得联系</div>
	<div class="shuru_tel">

	<input type="text" class="shuru_input" name="phone" id="phone" ww="<?php echo ($jy['id']); ?>"/>	
		<input type="submit"  class="shuru_sub" value="提交" onclick="submit()" />
	</div>
	<div class="xiaoshou_gai_tela">当然，您也可以直接拨打我们的电话：</div>
	<div class="xiaoshou_gai_tela">400-9100-188</div>
	<div class="xiaoshou_gai_tela">我们将给您提供更加细致的服务</div>
	<div class="zaixianyy"><a href="<?php echo U('Jy/daishenqing',array('id'=>$jy['id']));?>">在线预约</a></div>
	
</div>
			</div>
		</div>


	</body>

</html>
<script src="/Public/zy/js/zyjf.js" type="text/javascript"></script>
<script type="text/javascript">

	function submit()
	{
		var phone = $('#phone').val();
		var id = $('#phone').attr('ww');
		$.ajax({
			type : 'post',
			url : '<?php echo U('Home/Yu/add');?>',
			data : {phone:phone,id:id},
			success : function(data){
				
				if(data==1){
					lay("请填写正确的手机号",5)
				}else if(data==2){				
					lay("我们将尽快与您取得联系",1)
				}else if(data==3){
					lay("您已预约成功，请耐心等待!",5)
					
				}else if(data==4){
					lay("请填写正确的手机号",5)
					
				}
			}
		})
	}

$('.case_ul li').click(function(){  
	$('.case_ul li .case_li_left').removeClass('gaoliang');
	$(this).find('.case_li_left').toggleClass('gaoliang');
	$(this).siblings().find('.bjtu').removeClass('case_li_rifht_click');
    $(this).find('.bjtu').toggleClass('case_li_rifht_click');
	$(this).siblings().find('.case-con').slideUp(300)
	$(this).find('.case-con').slideToggle(300);

})


//统计浏览本精英顾问页面的次数，每次进入或刷新本页面，浏览量+1
$(function(){
	var id = $('#phone').attr('ww');
	$.ajax({
		type : 'post',
		url : '<?php echo U('Home/Jy/liu');?>',
		data : {id:id},
		success : function(data){
			
		}
	});
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
//服务评价
var busy = false;
var uid = '<?php echo (int)session('auser.id');?>';
var pid = '<?php echo (int)session('auser.pid');?>';

function addzan(id,type){
	if(uid==0){

		lay("请先登录",5)
		return ;
	}
	$.ajax({
		'type' : 'get' ,
		'url' : '<?php echo U("Home/Click/ajax");?>', 
		data : {id:id,type:type,pid:pid} ,
		success : function(data){
			if(data == '1'){
				lay("亲，只能评论一次哦！",1)
			}else{
				lay("恭喜您，评论成功！",1)
			}
		}
	});
	
}
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