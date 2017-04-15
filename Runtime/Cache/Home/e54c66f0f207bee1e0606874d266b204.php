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
		<link rel="stylesheet" type="text/css" href="/Public/zy/css/xiaofeidai.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/zy/css/bootstrap-select.min.css"/>
		<script src="/Public/zy/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="/Public/zy/js/bootstrap-select.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="zhuoyidai">
		<div class="zhuoyidai_con">
			<div class="XF-toubu"><a href="<?php echo U('Index/index');?>">卓屹金服</a> > 个人消费贷</div>
		<div class="XF_child_one_left">
			<div class="waibao_dhf">
			<div class="xf_title_1">个人消费贷</div>
			<div class="table_bor">
		<table class="table table-bordered" style="text-align: center;" >
		<tr>
		 <td class="biaoti_dhf">贷&nbsp;款&nbsp;额&nbsp;度</td>
		
		 <td colspan="2" style="text-align: left;">住宅夫妻两人最高100+100；商业100</td>
		</tr>
		<tr>
		 <td class="biaoti_dhf">贷&nbsp;款&nbsp;期&nbsp;限</td>
		 
		 <td colspan="2" style="text-align: left;">额度及单笔授信期限均不超过10年</td>
		</tr>
		<tr>
			<td rowspan="5" class="biaoti_dhf">准&nbsp;入&nbsp;条&nbsp;件</td>
			<td colspan="3" style="text-align: left;">1、法人、股东、或个体。年满22周岁、贷款到期时年龄不超70</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2、具有完全民事行为能力的自然人</td>
			
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3、本人及配偶近2年无不良信用记录</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">4、具有合法稳定的收入来源，包含经营收入、租金收入、薪资收入及分红收入等</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">5、符合本规程要求标准的抵押房屋</td>
		</tr>
		<tr>
			<td rowspan="6" class="biaoti_dhf_2">抵&nbsp;押&nbsp;物&nbsp;要&nbsp;求</td>
			<td colspan="3" style="text-align: left;">1、房产类型包括住宅（含别墅）或商用房（含商住两用房、办公用房、独立分割式商铺</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2、商用房已投入使用，不存在空置</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3、经营贷款期限5年以上抵押物房龄不超过25年</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">4、5年以内贷款不超过30年，消费贷房龄与贷款之和不超45年</td>
		</tr><tr>
			<td colspan="3" style="text-align: left;">5、长期清晰无法律纠纷，未设定抵押，地理位置良好易于变现</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">6、抵押物范围六环内</td>
		</tr>
		</table>	
		</div>
		<div class="xf_down_up">
			<div class="xf_down_up_cen">
				<div class="xf_tubiao_down_up"><img src="/Public/zy/img/fuwz-jiantou.png"/></div>
				
			</div>	
			</div>	
		<div class=" xf_table_tog">
	<table class="table table-bordered" style="text-align: center;" >
		<tr>
			<td rowspan="2" class="biaoti_dhf_2">工作单位要求</td>

			<td colspan="3" style="text-align: left;">单位工作半年以上，非限制行业</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">股东或法人作为消费贷款借款人的，股东在公司章程中体现至少一年以上，并提供全套企业材料</td>
		</tr>
		<tr>
			<td rowspan="2" class="biaoti_dhf">注&nbsp;意&nbsp;事&nbsp;项</td>
			<td colspan="3" style="text-align: left;">1、30万以上必须提供发票，网上核查</td>
		</tr>
		<tr>
		<td colspan="3" style="text-align: left;">2、100+100必须为夫妻名下房产</td>
		</tr>
		
		<tr>
			<td class="biaoti_dhf">认&nbsp;可&nbsp;评&nbsp;估</td>
			<td colspan="3" style="text-align: left;">华信、仁达、杜鸣、康正、首佳、大地</td>
		</tr>
		<tr>
			<td class="biaoti_dhf">放&nbsp;款&nbsp;方&nbsp;式</td>
			<td colspan="3" style="text-align: left;">三方受托支付</td>
		</tr>
		<tr>
			<td class="biaoti_dhf">还&nbsp;款&nbsp;方&nbsp;式</td>
			<td colspan="3" style="text-align: left;">10年等额本息</td>
		</tr>
	</table>
		</div>	
		</div>
		<div class="waibao_dhf">
		<div class="xiaofeidai_jisuan">
		<h2>计算器/帮助您估算贷款所需支出</h2>
		<div class="small_title">Calculator/to help you estimate the cost of loans</div>
		<div class="xf_1_jsq">
			<div class="loan_money">您期望的贷款金额是多少呢？</div>
			<div class="loan_money1"><input type="text" id="xf_money"  onblur="xf_momey()"/><span>万元</span></div>
			</div>
			<div class="xf_alert" >*请输入正确的金额哦！</div>
			<div class="xf_1_jsq">
			<div class="loan_money">您期望的贷款年限是多久呢？</div>
			<div class="loan_money1">
				<select name="" id="xf_1_wwl" class="selectpicker">
			        <option value="0">请选择</option>
					<option value="6">6个月</option>
					<option value="12">1年</option>
					<option value="24">2年</option>
					<option value="36">3年</option>
					<option value="48">4年</option>
					<option value="60">5年</option>
					<option value="120">10年</option>
					<option value="180">15年</option>
					<option value="240">20年</option>
					<option value="300">25年</option>
					<option value="360">30年</option>
				</select>
			</div>
			</div>
			<div class="XF_jisuan">计算</div>
		</div>	
		<div class="XF_result">
						<h2 >每月还款额</h2>
					<h1 class="green_h"><span class="money"></span>RMB</h1>
					<h2 class="green_h">年利率：<span class="nianlilv"></span>%</h2>
					<div class="shenyue">在审阅您的详细资料后，我们能为您计算更加准确的
						</br>利率以及支出</div>
					<button class="XF1-YUYUE">预约此贷款</button>
					<div class="zhidian">—— 或致电  400-9100-188/400-9100-166</div>
				<!--<h3 style="text-align: left;">明细介绍</h3>	
			<table class="table  table_self">
			<tr>
				<td>贷款总额 </td>
				<td><span class="num_a">100</span><span>元</span></td>
			</tr>
			<tr>
				<td>还款月数 </td>
				<td> <span class="num_a">100</span><span>元</span></td>
			</tr>
			<tr>
				<td>每月还款  </td>
				<td> <span class="num_a">100</span><span>元</span></td>
			</tr>	
			<tr>
				<td>总支付利息 </td>
				<td> <span class="num_a">100</span><span>元</span></td>
			</tr><tr>
				<td>本息合计</td>
				<td> <span class="num_a">100</span><span>元</span></td>
			</tr>		
			</table>-->
		</div>
		</div>
		</div>
		<div class="XF_child_one_right"></div>
		
		</div>	
		</div>
	</body>
</html>
<script src="/Public/zy/js/zyjf.js" type="text/javascript"></script>
<script type="text/javascript">
	$('.xf_down_up_cen').click(function(){
		$(".xf_table_tog").slideToggle('slow');
		$('.xf_tubiao_down_up').toggleClass('xf_tubiao_ro')
	})
var re1_fag=false;
var tex=/^[0-9]*$/;
function xf_momey(){
	var mon=$('#xf_money').val();
	if(mon==''||tex.test(mon)==false){
	re1_fag=false;	
	$('.xf_alert').show();
	}
	else{
	re1_fag=true;	
	$('.xf_alert').hide();
	}
}

$('.XF_jisuan').click(function(){
	var month=$('#xf_1_wwl>option:checked').val();
	var money=$('#xf_money').val();
	money=money*10000;
	var min_nian_lixi;
	var max_nian_lixi;
	if(month<=12){
		min_nian_lixi=4.35;
		max_nian_lixi=min_nian_lixi*(1+0.3)
	}
	else if(month>12&&month<=60){
		min_nian_lixi=4.75;
		max_nian_lixi=min_nian_lixi*(1+0.3)
	}
	else{
		min_nian_lixi=4.9;
		max_nian_lixi=min_nian_lixi*(1+0.3)
	}
	$('.nianlilv').html(max_nian_lixi.toFixed(2))
	var lilv=max_nian_lixi/1200;
	var huankuan;
	if(re1_fag){
		if($('#xf_1_wwl>option:checked').val()==0){
		$('.xf_alert').show();
		$('.xf_alert').html('请选择年限')
	}
		else{
			$('.XF_jisuan').html('重新计算')
			$('.xf_alert').hide();
			$(".XF_result").slideDown('slow');
//			在里面写计算结果
var canshu=Math.pow(1+lilv,month);
var canshu1=Math.pow(1+lilv,month);
huankuan=money*lilv*canshu/(canshu1-1);
$('.money').html(huankuan.toFixed(2))
		}
	}
	else{
	$('.xf_alert').show();
	$('.xf_alert').html('请输入金额')
	}
})

$('.XF1-YUYUE').click(function(){
	location.href='<?php echo U('Jy/daishenqing');?>'
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