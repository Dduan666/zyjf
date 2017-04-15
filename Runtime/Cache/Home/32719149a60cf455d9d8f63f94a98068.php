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
		<!--<link rel="stylesheet" type="text/css" href="/Public/zy/css/login_twg.css"/>-->
        <style type="text/css">
			.apply_dai{
				width: 100%;
				min-width: 1422px;
				margin: 0 auto;
			/*	height: 660px;*/
			}
			.apply_dai_con {
				overflow: hidden;
				width: 1200px;
				height: 700px;
				margin: 30px auto;
				box-shadow: 0 0 10px rgb(204, 204, 205);
				background: url(/Public/zy/pimg/shenqbjt.png) no-repeat;
			}
			.dai_sq_biaodan {
				/*position: relative;*/
				width: 100%;
				width: 520px;
				height: 480px;
				padding: 90px 80px;
				box-sizing: border-box;
				background: rgba(255,255,255,0.2);
				border-radius: 10px;
				margin: 100px auto;
				
			}
			
			.login_box_t1_twg{
	margin-top: 30px;
    color:#5d5d5d;
    font-size:20px;
    margin-bottom: 20px;
    text-align: center;
}
.login_box_t2_twg{
	overflow: hidden;position: relative;
	width: 100%;
	box-sizing: border-box;
	margin-bottom: 20px;
}
.logo_icon{
	background:#FFFFFF;border-radius:6px 0 0 6px;
	display: block;float: left;width:55px;height: 52px;
	
}
.zhu_user{
	background-image:url(/Public/zy/pimg/ren.png);
}
.zhu_sjh{
	background-image:url(/Public/zy/pimg/zhuyi.png);
}
.zhu_yzm{
	background-image:url(/Public/zy/pimg/zhuer.png);
}



.login_user_twg,.login_pwd_twg,.zc_password,.anquan{
	background: #FFFFFF;
border: none;display: block;border-radius: 0px 6px 6px 0;
width:303px;float: left;height: 52px;padding: 10px 10px;box-sizing: border-box;
}

.anqum{
	background: #FFFFFF;
border: none;display: block;border-radius: 0px 6px 6px 0;
width:165px;float: left;height: 52px;padding: 10px 10px;box-sizing: border-box;	
}
.login_box_t3_twg{
	margin-bottom: 20px;
	overflow: hidden;
	width: 100%;
	font-size: 15px;
}
.login_box_t3_twg label{
	margin-left: 5px;
}

#code{background: #dbdbdb;
	height: 53px!important;
	word-spacing: 13px;cursor: pointer;
}
.login_box_t_twg span{
display: inline-block;
width:200px;
height:30px;

}
#submit{
    cursor: pointer;
    color: #FFFFFF;
    text-align: center;
    line-height: 50px;
    font-size: 23px;
    letter-spacing:5px;
    width:100%;
    height: 50px;
    background:#006034;
    border-radius:5px;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    margin: 20px auto;
    transition:all 0.5s;
   border: none;display: block;
}
#submit:hover{
	background: #FFFFFF;color:#006034;
}
	.sjyzm{
	cursor: pointer;
	position: absolute;right:10px;top: 0;
	width: 96px;height:30px;margin-top:10px;
	border: none;background: #4fc3ae;color: #FFFFFF;
transform: all 0.5s;border: 1px solid #4fc3ae;
font-size: 14px;
border-radius: 2px;
}
.sjyzm:hover{
	background:#FFFFFF;color:#4fc3ae;
}	
			
	.daisq_sub {
	cursor: pointer;
	color: #FFFFFF;
	text-align: center;
	line-height: 50px;
	font-size: 21px;
	width: 200px;
	height: 50px;
	background:#4FC3AE;
	border: none;
	box-sizing: border-box;
	border-radius:6px;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	margin: 50px auto;
	transition:all 0.5s;
   display: block;
			}
.daisq_sub:hover{color:#4FC3AE ;background: #FFFFFF;
			
				box-shadow: 0 0 10px rgb(205,205,205);
}		
			
	label.error{font-size: 14px;
	color: red;font-weight: normal;
}			
	
		</style>
	</head>

	<body>
		<div class="apply_dai">
			<div class="apply_dai_con">
				<!--贷款申请内容*******************-->
				<div class="dai_sq_biaodan">
					
		     <form id="form_tijiao" action="<?php echo U('Home/Jy/add');?>" method="post">
								<input type="text" style="display:none;" id="" name="did" placeholder="" value="<?php echo ($jj['id']); ?>" />
								<input type="text" style="display:none;" id="" name="part" placeholder="" value="<?php echo ($cc['bu']); ?>" />
					
					<div class="login_box_t2_twg">
					<span class="logo_icon zhu_user"></span>
					<input type="text" name="tname" id="name_biaodan"  placeholder="姓名" class="login_user_twg">
					</div>	
					
					<div class="login_box_t2_twg">
					<span class="logo_icon zhu_sjh"></span>
					<input type="text" id="tel_biaodan" name="phone" class="phone login_user_twg" placeholder="手机号">
					</div>	
							
					<div class="login_box_t2_twg">
					<span class="logo_icon zhu_yzm"></span>
					<input type="text" class="anquan" placeholder="手机验证码"  id="yzm_biaodan" name="yan">
					<input type = "button" class="code sjyzm" onclick="dj3()" id="sjyzm" value="发送验证码"/>
					</div>
						
						
						
						
						
						
						
						
						
						
						
						
							
							<!--<span class="name_erro erroww"></span>
							
							<div class="biandan_wwl">
								<label for="tel_biaodan" class="_label2"></label>
								<input type="text" id="tel_biaodan" name="phone" class="phone" placeholder="手机号"  />
							</div>
							<span class="tel_erro erroww"></span>
							<div class="yzmf">
								<div class="biandan_wwl_yam">
									<label for="yam_biaodan" class="_label3"></label>
									<input type="text" id="yzm_biaodan" name="yan" placeholder="验证码"  />
								</div>
								<div class="yanzheng_fan">
									<input type = "button" class="code" onclick="dj3()" id="sjyzm" value="发送验证码"/>

								</div>
							</div>
							<span class="yam_erro erroww yyyy" style="display:none;"></span>-->
							<div><input type="submit" value="提交" class="daisq_sub" /></div>
						</form>

				</div>
			</div>
		</div>
	</body>
</html>
<script src="/Public/zy/js/zyjf.js" type="text/javascript" charset="utf-8"></script>
<script src="/Public/zy/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
	var countt=60;//发送验证码
	var codea;
	var aab=document.querySelector('.code');
	function dj(){
		if(countt>0){
			countt--;
			aab.value=countt+'s后再次获取';
			aab.setAttribute('disabled','disabled');
			setTimeout(dj,1000);
		}
		else{
			aab.value='再次获取';
			countt=60;
			aab.removeAttribute('disabled');
		}
	}

	function dj3(){

		var phone = $('.phone').val();
		$.ajax({
			type : 'post',
			url : '<?php echo U('Home/Jy/yan');?>',
			data : {tel:phone},
			success : function(data){
				if(data==1){
					lay('请填写手机号！',5);
				}else if(data==2){
					lay('请填写正确的手机号!',5);
				}else{
					dj();
					lay('发送成功！',1);
				}
			}
		})
	}
	
	
</script>
<script>
$(document).ready(function() {
$("#form_tijiao").validate({
    rules: {
     tname:{
        required: true,
        minlength: 1
      },
      phone: {
        required: true,
        minlength: 11,
        maxlength:11,
      },
      yan:{
      	 required: true,
         minlength: 4,
         maxlength:4,
      }

    },
    messages: {
      tname: {
        required: "姓名不能为空哦",
        minlength: jQuery.format("姓名至少由1个字符组成")
      },
      phone: {
        required: "手机号不能为空",
        minlength: jQuery.format("请填写正确的手机号"),
         maxlength: jQuery.format("请填写正确的手机号")
      },
      yan: {
        required: "验证码不能为空",
        minlength: jQuery.format("请填写正确的验证码"),
         maxlength: jQuery.format("请填写正确的验证码")
      }
  
      
    }

 });
});



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