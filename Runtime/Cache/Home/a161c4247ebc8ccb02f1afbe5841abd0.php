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
		 <link rel="stylesheet" type="text/css" href="/Public/zy/css/bootstrap-select.min.css"/>
		 <link rel="stylesheet" type="text/css" href="/Public/zy/css/help_center.css"/>
		 <script src="/Public/zy/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Public/zy/js/bootstrap-select.js" type="text/javascript"></script>
<script src="/Public/zy/js/m97/WdatePicker.js" type="text/javascript"></script>
	</head>
	<body>
	<div class="load_head"></div>	
	<div class="help_center">
		<!-- <div class="toubu"><a href="<?php echo U('Index/index');?>">卓屹金服</a> > <span>计算器</span></div> -->
	<div class="help_center_con">
	<div style="width:1024px;margin: 0 auto;">
<div class="jyTable">
	<div class='zong'>
		<div class="list list1" >
			<div class="tabCon">
			<div class="calculator_con">
		<div class="calculate_start">
			<div class="calculate_tree">
				<!--树状结构**************-->

							<ul class="level2">
								<li onclick="calculator('sponde_ww1',this)" class="GL_JSQ">等额本息</li>
								<li onclick="calculator('sponde_ww2',this)">
									等额本金
								</li>
								<li onclick="calculator('sponde_ww3',this)">
									<div>按月付息</div>
									<div>到期还本</div>
								</li>
								<li onclick="calculator('sponde_ww4',this)">
									提前还款
								</li>
							</ul>
						
				<!--树状结构**************-->
			</div>
			<div class="calculate_tree_sponde">
				<!--房贷计算器******-->
				<div class="calculate_tree_sponde1">
					<div class="calculate_sponde_a sponde_ww1">
						<div class="jisuan">
							<div class="alert_tix">* 利率更新时间2015年10月24日 *</div>
							<table border="1" cellspacing="0" cellpadding="0" id="table_wl">
								<tr>
									<td class="tr_td1">贷款金额:</td>
									<td class="tr_td2"><input type="text" name="" id="fangdai1"/><span>元</span></td>
									<td class="tr_td1">贷款期限:</td>
									<td class="tr_td2">
										<select class="select_tr selectpicker"  onchange="lilv()">
											<option value="0" selected="selected">请选择年限</option>
											<option value="6" >6个月</option>
											<option value="12">1年</option>
											<option value="24">2年</option>
											<option value="36">3年</option>
											<option value="48">4年</option>
											<option value="60">5年</option>
											<option value="120">10年</option>
											<option value="180">15年</option>
											<option value="240">20年</option>
											<option value="300">25年</option>
										</select>
									</td>
								</tr>
								<tr>
									<td class="tr_td1"></td>
									<td class="tr_td2 errotishi">*请完善信息</td>
									<td class="tr_td1"></td>
									<td class="tr_td2"></td>
								</tr>
								<tr>
								<td>年利率：</td>
								<td><input class="nianlilv_one" value="0" /><span>%</span></td>
								<td></td>
								<td></td></tr>
							</table>
					<div class="zy_jiesuan cxjs_one" onclick="jsj_jisuan()">计算</div>
					
						</div>
					</div>
					<!--公积金贷款计算器-->
					<div class="calculate_sponde_a sponde_ww2" style="display: none;">
		
						<div class="jisuan">
							<div class="alert_tix">* 利率更新时间2015年10月24日 *</div>
							<table border="1" cellspacing="0" cellpadding="0" id="table_wl">
								<tr>
									<td class="tr_td1">贷款金额:</td>
									<td class="tr_td2"><input type="text" name="" id="deng_ben"/><span>元</span></td>
									<td class="tr_td1">贷款期限:</td>
									<td class="tr_td2">
										<select class="select_tr2 selectpicker"  onchange="lilv2()">
											<option value="0"  selected="selected">请选择年限</option>
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
										</select>
									</td>
								</tr>
								<tr>
									<td class="tr_td1"></td>
									<td class="tr_td2 errotishi2">*请完善信息</td>
									<td class="tr_td1"></td>
									<td class="tr_td2"></td>
								</tr>
								<tr>
								<td>年利率：</td>
								<td><input type="text" class="nianlilv_two" value="0" />%</td>
								<td></td>
								<td></td></tr>
							</table>
					
					<div class="zy_jiesuan cxjs_two" onclick="jsj_jisuan2()">计算</div>
					
						</div>
					</div>
					<!--组合贷款计算器************-->
					<div class="calculate_sponde_a sponde_ww3" style="display: none;">
						<div class="jisuan">
							<div class="alert_tix">* 利率更新时间2015年10月24日 *</div>
							<table border="1" cellspacing="0" cellpadding="0" id="table_wl">
								<tr>
									<td class="tr_td1">贷款金额:</td>
									<td class="tr_td2"><input type="text" name="" id="deng_ben3"/><span>元</span></td>
									<td class="tr_td1">贷款期限:</td>
									<td class="tr_td2">
										<select class="select_tr3 selectpicker"  onchange="lilv3()" >
											<option value="0" selected="selected">请选择年限</option>
											<option value="6" >6个月</option>
											<option value="12">1年</option>
											<option value="24">2年</option>
											<option value="36">3年</option>
											<option value="48">4年</option>
											<option value="60">5年</option>
											<option value="120">10年</option>
											<option value="180">15年</option>
											<option value="240">20年</option>
											<option value="300">25年</option>
										</select>
									</td>
								</tr>
								<tr>
									<td class="tr_td1"></td>
									<td class="tr_td2 errotishi3">*请完善信息</td>
									<td class="tr_td1"></td>
									<td class="tr_td2"></td>
								</tr>
								<tr>
								<td>年利率：</td>
								<td><input type="text" class="nianlilv_three" value="0"/>%</td>
								<td></td>
								<td></td></tr>
							</table>
					
					<div class="zy_jiesuan cxjs_three" onclick="jsj_jisuan3()">计算</div>
					
						</div>

					</div>
					<!--抵押贷款计算器***********-->
					<div class="calculate_sponde_a sponde_ww4" style="display: none;">	
					<div class="jisuan">
							<div class="alert_tix">* 利率更新时间2015年10月24日 *</div>
							<table border="1" cellspacing="0" cellpadding="0" id="table_wl">
								<tr>
									<td class="tr_td1">贷款金额:</td>
									<td class="tr_td2"><input type="text" name="" id="deng_ben4"/><span>元</span></td>
									<td class="tr_td1">贷款期限:</td>
									<td class="tr_td2">
										<select class="select_tr4 selectpicker"  onchange="lilv4()" >
										<option value="0" selected="selected">请选择年限</option>
											<option value="6" >6个月</option>
											<option value="12">1年</option>
											<option value="24">2年</option>
											<option value="36">3年</option>
											<option value="48">4年</option>
											<option value="60">5年</option>
											<option value="120">10年</option>
											<option value="180">15年</option>
											<option value="240">20年</option>
											<option value="300">25年</option>
										</select>
									</td>
								</tr>
								<tr>
									<td class="tr_td1"></td>
									<td class="tr_td2"></td>
									<td class="tr_td1"></td>
									<td class="tr_td2"></td>
								</tr>
								<tr>
								<td>年利率：</td>
								<td><input class="nianlilv_four" value="0" />%</td>
								<td>还款方式：</td>
								<td><input type="radio" name="AAA" id="wlei" value="1" checked="checked" /><label for="wlei">等额本息</label><!--<input type="radio" name="AAA" id="dhf" value="2" /><label for="dhf">等额本金</label>--></td>
								</tr>
								<tr>
									<td class="tr_td1"></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr style="margin-top:15px ;">
									<td class="tr_td1">首次还款时间</td>
									<td class="tr_td2 "><input type="text" name="" id="m97" class="Wdate" /></td>
									<td class="tr_td1">提前还款时间</td>
									<td class="tr_td2"><input type="text" name="" id="m98" class="Wdate" /></td>
								</tr>
								<tr>
									<td class="tr_td1"></td>
									<td><td class="tr_td2 errotishi4">*请完善信息</td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td class="tr_td1">提前还款金额</td>
									<td class="tr_td2 "><input type="text" id="tiqianhu" style="width: 120px;" />元</td>
									<td class="tr_td1"></td>
									<td class="tr_td2"></td>
								</tr>
							</table>
					
					<div class="zy_jiesuan cxjs_four" onclick="jsj_jisuan4()">计算</div>
					
						</div>
					</div>
					<!--sijieshu-->
				<!--房贷计算器******-->
			</div>
		</div>
	</div>
</div>	
		<div class="jieguoxoianshi">
	<!--		<div class="jieguoxianshi_1">-->
				<div class="xianshi_result">
					
					<div class="calculate_title_result">还款明细<small>12期次以内</small></div>
					<div class="two_table_zy">
								<div class="two_table_zy1">
								<table class="table table-bordered">
									<thead>
								<tr><td>期次(月)</td>
									<td>每月还款额</td>
									<td>月还本金</td>
									<td>月还利息</td>
									<td>剩余本金</td>
								</tr>	
								</thead>
								<tbody class="tbody_zy1">
								</tbody>
								</table>	
								<div class="total_lixi">您应归还的总利息为：<span class="total_span1"></span></div>
								</div>
						</div>

					</div>
				
	<!--		</div>-->
	<!--		<div class="jieguoxianshi_2">-->
				<div class="xianshi_result2">
					<div class="calculate_title_result">还款明细<small>12期次以内</small></div>
					<div class="two_table_zy">
								<div class="two_table_zy1">
								<table class="table table-bordered">
									<thead>
								<tr><td>期次(月)</td>
									<td>每月还款额</td>
									<td>月还本金</td>
									<td>月还利息</td>
									<td>剩余本金</td>
								</tr>	
								</thead>
								<tbody class="tbody_zy2">
								</tbody>
									
								</table>	
								</div>
						</div>

					</div>
		<!--	</div>-->
	<!--		<div class="jieguoxianshi_3">-->
				<div class="xianshi_result3">
					<div class="calculate_title_result">还款明细</div>
					<div class="two_table_zy">
								<div class="two_table_zy1" style="width: 600px;margin: 0 auto;">
								<table class="table">
									<tr>
										<td style="width: 30%;">贷款金额</td>
										<td class="dai_dhf_one"></td>
									</tr>
									<tr>
										<td>还款期数</td>
									<td class="dai_dhf_two"></td>
									</tr>
									<tr><td>每期还款额</td>
										<td class="dai_dhf_three"></td>
										</tr>
									<tr><td>最后一期还款</td>
										<td class="dai_dhf_four"></td>
										
									</tr>
									<tr>
										<td>利息总计</td>
										<td class="dai_dhf_five"></td>
								   </tr>	
								</table>	
								</div>
						</div>
					</div>
		<!--	</div>-->
			<!--4444444444444*****************-->
		<!--	<div class="jieguoxianshi_4">-->
				<div class="xianshi_result4">
					<div class="calculate_title_result">还款明细</div>
					<div class="two_table_zy">
								<div class="two_table_zy1">
									<div style="width:600px;margin: 0 auto;" >
										<table class="table">
											<tr>
												<td style="width: 30%;" class="qiehuan">原月还款额</td>
												<td class="yuanhuan qingk"></td>
											</tr>
											<tr>
												<td>已还款总额</td>
												<td class="yihuanmoney qingk"></td>
											</tr>
											<tr>
												<td>该月一次还款额</td>
												<td class="month_once qingk"></td>
											</tr>
											<tr>
												<td>节省利息支出</td>
												<td class="save_lixi qingk"></td>
											</tr>
												<tr>
												<td>已还利息额</td>
												<td class="yihuan_lixi qingk"></td>
											</tr>
												<tr>
												<td>下月首次还款额</td>
												<td class="after_money qingk"></td>
											</tr>
												
										</table>
									</div>
								</div>
						</div>
					</div>
		<!--	</div>-->
			<!--4*************************-->
			
		</div>
			</div>
		
		
		<!--diergejiehsu-->
			

</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

<script src="/Public/zy/js/zyjf.js" type="text/javascript"></script>
<script src="/Public/zy/js/tab.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){
	$('#m97').click(function(){
	WdatePicker({
		dateFmt:"yyyy/MM",
	});
})
$('#m98').click(function(){
	WdatePicker({
		dateFmt:"yyyy/MM",
	});
})
})
</script>
<script type="text/javascript">
	function lilv(){
	var year1=$('.select_tr>option:checked').val();
	if(year1<=12){
	$('.nianlilv_one').val(5)
}
else if(year1<=60){
	$('.nianlilv_one').val(5.4)
}
else{
	$('.nianlilv_one').val(5.7)
}
}
var js1=false;
var js2=false;
var js3=false;
var js4=false;
var tex=/^[0-9]*$/;	

function jsj_jisuan(){
	var mid = 8;
	$.ajax({		//按钮点击次数
		type : 'post',
		url : '<?php echo U('Home/Flow/deng');?>',
		data : {id:mid},
		success : function(dat){
			
		}
	})
$('.tbody_zy1').html('');
var canshu1;
var meiyueyg;
var month_ben;
var canshu2;
var month_xi;
var sheng_ben;
var t;
var yuelilv;
var jine=$('#fangdai1').val();
var year1=$('.select_tr>option:checked').val();
var sheng_ben1=jine;

if(year1<=6){
	t=6
}else{
	t=12
}
var nianl=$('.nianlilv_one').val();
yuelilv=nianl/1200;
canshu1=Math.pow(1+yuelilv,year1)
meiyueyg=(jine*yuelilv*canshu1)/(canshu1-1)
meiyueyg=meiyueyg.toFixed(2);
var total_lixi=(meiyueyg*year1-jine).toFixed(2);
$('.total_span1').html(total_lixi)
if(tex.test(jine)&&jine!=''&&year1!=0){
js1=true;
}else{
js1=false;	
}
if(js1==true){
	$('.cxjs_one').html('重新计算')
$('.errotishi').hide()
$('.xianshi_result').slideDown()
//写成功之后的计算
for (var i =1; i <=t; i++) {
canshu2=Math.pow(1+yuelilv,i-1)
month_ben=(jine*yuelilv*canshu2/(canshu1-1)).toFixed(2);
month_xi=(meiyueyg-month_ben).toFixed(2);
sheng_ben1=(sheng_ben1-month_ben).toFixed(2);
//console.log(sheng_ben1)
var tr1= "<tr class='tr1'><td>"+i+"</td><td>"+meiyueyg+"</td><td>"+month_ben+"</td><td>"+month_xi+"</td><td>"+sheng_ben1+"</td></tr>";
$('.tbody_zy1').append(tr1)
}
}
else{$('.errotishi').show()
}
}

function lilv2(){
var year2=$('.select_tr2>option:checked').val();
if(year2<=12){
	$('.nianlilv_two').val(5.5)
}
else if(year2<=60){
	$('.nianlilv_two').val(6)
}
else{
	$('.nianlilv_two').val(6.3)
}
}

function jsj_jisuan2(){
	var sid = 9;
	$.ajax({		//按钮点击次数
		type : 'post',
		url : '<?php echo U('Home/Flow/deng');?>',
		data : {id:sid},
		success : function(dat){
			
		}
	})
var t;
var yuelilv2;
var jine2=$('#deng_ben').val();
var year2=$('.select_tr2>option:checked').val();
var nian2=$('.nianlilv_two').val();
yuelilv2=nian2/1200;
if(year2<=6){
	t=6
}else{
	t=12
}
$('.tbody_zy2').html('');
if(tex.test(jine2)&&jine2!=''&&year2!=0){
js2=true;
}else{
js2=false;	
}
if(js2==true){
$('.cxjs_two').html('重新计算')
$('.errotishi2').hide()
$('.xianshi_result2').slideDown()
//写成功之后的计算
var yuegong;
var guibenadd;
var yingben;
var yingli;
yingben=(jine2/year2).toFixed(2);
var shengben;
for (var i =1; i <=t; i++) {
guibenadd=yingben*i;
var add1=yingben*(i-1);
shengben=(jine2-guibenadd).toFixed(2);
var shengben1=(jine2-add1).toFixed(2)
yuegong=((jine2/year2)+shengben1*yuelilv2).toFixed(2);
yingli=(shengben1*yuelilv2).toFixed(2);
var tr1= "<tr class='tr1'><td>"+i+"</td><td>"+yuegong+"</td><td>"+yingben+"</td><td>"+yingli+"</td><td>"+shengben+"</td></tr>";
$('.tbody_zy2').append(tr1)
}
}
else{$('.errotishi2').show()
}
}


function lilv3(){
var year3=$('.select_tr3>option:checked').val();
if(year3<=12){
	$('.nianlilv_three').val(5.5)
}
else if(year3<=60){
	$('.nianlilv_three').val(6)
}
else{
	$('.nianlilv_three').val(6.3)
}
}
function jsj_jisuan3(){

	var nid = 10;
	$.ajax({		//按钮点击次数
		type : 'post',
		url : '<?php echo U('Home/Flow/deng');?>',
		data : {id:nid},
		success : function(dat){
			
		}
	})
var jine3=$('#deng_ben3').val()*1;
var year3=$('.select_tr3>option:checked').val()*1;
var nian3=$('.nianlilv_three').val();
var t;
var yuelilv3;
if(year3<=6){
	t=6
}else{
	t=12
}
yuelilv3=nian3/1200;
$('.tbody_zy3').html('');
if(tex.test(jine3)&&jine3!=''&&year3!=0){
js3=true;
}else{
js3=false;	
}
if(js3==true){
$('.cxjs_three').html('重新计算')	
$('.errotishi3').hide()
$('.xianshi_result3').slideDown()
//写成功之后的计算
var month_xi=(jine3*yuelilv3).toFixed(2)*1;
var last_miney=(month_xi+jine3)*1;
var total_lx=month_xi*year3;
$('.dai_dhf_one').html(jine3);
$('.dai_dhf_two').html(year3);
$('.dai_dhf_three').html(month_xi);
$('.dai_dhf_four').html(last_miney)
$('.dai_dhf_five').html(total_lx);
}
else{$('.errotishi3').show()
}
}

function lilv4(){
var year4=$('.select_tr4>option:checked').val();
if(year4<=12){
	$('.nianlilv_four').val(5.5)
}
else if(year4<=60){
	$('.nianlilv_four').val(6)
}
else{
	$('.nianlilv_four').val(6.3)
}
}
function jsj_jisuan4(){
	var tid = 11;
	$.ajax({		//按钮点击次数
		type : 'post',
		url : '<?php echo U('Home/Flow/deng');?>',
		data : {id:tid},
		success : function(dat){
			
		}
	})
$('.qingk').html('')

var jine4=$('#deng_ben4').val();
var year4=$('.select_tr4>option:checked').val();
var nian4=$('.nianlilv_four').val();
var tq=$('#tiqianhu').val()*1;
var band=jine4-tq;
var t;
var dhf_pow;
var yuelilv4;
if(year4<=6){
	t=6
}else{
	t=12
}
yuelilv4=nian4/1200;
if(tex.test(jine4)&&jine4!=''&&year4!=0&&tq!=''&&tex.test(tq)){
	if(band<0){
		lay("提前还款金额要小于贷款金额！",5);
		return;
	}
js4=true;
}else{
js4=false;	
}
if(js4==true){
$('.cxjs_four').html('重新计算')
$('.errotishi4').hide()

//写成功之后的计算
//这里计算两个年份之间的差
var date1 =$('#m97').val();
var date2 = $('#m98').val();
date1 = date1.split('/');
date1 = parseInt(date1[0]) * 12 + parseInt(date1[1]);
date2 = date2.split('/');
date2 = parseInt(date2[0]) * 12 + parseInt(date2[1]);
var m =date2 - date1;
//这里计算两个年份之间的差
if(m<=0||m>year4){
lay('请选择正确的提前还款日期',5)
}else{
$('.xianshi_result4').slideDown();
var val=$('input:radio[name="AAA"]:checked').val();
if(val==1){
$('.qiehuan').html('原月还款额');
//写等额本息的计算内容
var dhf_pow_2;
var month_ben_d=0;
var month_xi_d=0;
var sheng_ben1_d=jine4;
dhf_pow=Math.pow(1+yuelilv4,year4);
var dhf_month_ben=(jine4*yuelilv4*dhf_pow/(dhf_pow-1)).toFixed(2);
$('.yuanhuan').html(dhf_month_ben);
var yihuan=dhf_month_ben*m;
$('.yihuanmoney').html(yihuan.toFixed(2));
var month_once=dhf_month_ben*1+tq*1;
$('.month_once').html(month_once.toFixed(2));
//之前的总利息为before_lixi
var before_lixi=0;
for (var i =1; i <=year4; i++) {
dhf_pow_2=Math.pow(1+yuelilv4,i-1)
month_ben_d=(jine4*yuelilv4*dhf_pow_2/(dhf_pow-1)).toFixed(2);
before_lixi=before_lixi+(dhf_month_ben-month_ben_d);	
}
//alert(before_lixi.toFixed(2))
var month_ben_af;
var dhf_pow_3;
for (var i =1; i <=m; i++) {
dhf_pow_3=Math.pow(1+yuelilv4,i-1)
month_ben_af=(jine4*yuelilv4*dhf_pow_3/(dhf_pow-1)).toFixed(2);
month_xi_d=month_xi_d+(dhf_month_ben-month_ben_af);
sheng_ben1_d=sheng_ben1_d-month_ben_af;
}
sheng_ben1_d=sheng_ben1_d.toFixed(2);
$('.yihuan_lixi').html(month_xi_d.toFixed(2));
var after_year=year4-m;
//已求出剩余本金为sheng_ben1_d-tq;
var after_money=sheng_ben1_d-tq;
var after_lixi=0;
var after_month_jine;//以后的每月所还本金
if(after_money<0){
	lay('您的提前还款额大于剩余要还的金额！！',5)
	return false;
}
//求剩下的还款月数after_year
var after_pow=Math.pow(1+yuelilv4,after_year);
var after_month_ben=(after_money*yuelilv4*after_pow/(after_pow-1)).toFixed(2);
$('.after_money').html(after_month_ben);
for (var i =1; i <=after_year; i++) {
dhf_pow_2=Math.pow(1+yuelilv4,i-1)
after_month_jine=(after_money*yuelilv4*dhf_pow_2/(after_pow-1)).toFixed(2);
after_lixi=after_lixi*1+(after_month_ben*1-after_month_jine*1);	
}
after_lixi=after_lixi.toFixed(2);
var lixi_cha=before_lixi-after_lixi-month_xi_d.toFixed(2);
$('.save_lixi').html(lixi_cha.toFixed(2))

}

}
}
else{$('.errotishi4').show()
}
}

//两个日期

	function calculator(aaa, obj) {
		$('.calculate_tree_sponde1>div').hide();
		$('.calculate_tree>ul>li').removeClass('GL_JSQ')
		$('.' + aaa).show();
		$(obj).addClass('GL_JSQ')
		$('.jieguoxoianshi>div').hide()
	}	
$(window).scroll(function(){
var position =  $(document).scrollTop();
 if(position>20&&position<1000){
	  $('.new_animate1').addClass('animated fadeInLeft');
    setTimeout(function(){
 
        $('.new_animate1').removeClass('fadeInLeft');
    }, 5000);
    $('.new_animate2').addClass('animated fadeInRight');
    setTimeout(function(){
 
        $('.new_animate2').removeClass('fadeInRight');
    },5000);               
	}
})	
$('.detail_add_ul>li').click(function(){
	var t=$(this).index();
	$('.detail_add_ul>li').removeClass('detail_cur');
	$(this).addClass('detail_cur');
	$('.detail_add_div>div').hide();
	$('.detail_add_div>div').eq(t).show();
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
	//统计浏览计算器页面的次数，每次进入或刷新本页面，浏览量+1
	$(function(){
		var jid = 14;
		$.ajax({
			type : 'post',
			url : '<?php echo U('Home/Flow/show');?>',
			data : {id:jid},
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