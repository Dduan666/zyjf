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
		<link rel="stylesheet" type="text/css" href="/Public/zy/css/jingyingdai.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/zy/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/zy/css/bootstrap-select.min.css"/>
		<script src="/Public/zy/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="/Public/zy/js/bootstrap-select.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="load_head"></div>
		<div class="jingyingdai">
		<div class="jingyingdai_con">
				<div class="JY_child_one_right">
					<div class="JY-toubu"><a href="<?php echo U('Index/index');?>">卓屹金服</a> > 标准经营贷款-抵押经营贷</div>
					<div class="tab_dhf JY_child_one_1 JY_child_one_right_active">产品A</div>
					<div class="tab_dhf JY_child_one_2">产品B</div>
					<div class="tab_dhf JY_child_one_3">产品C</div>
					<div class="tab_dhf JY_child_one_4">产品D</div>
					<div class="tab_dhf JY_child_one_5">产品E</div>
					<div class="tab_dhf JY_child_one_6">产品F</div>
					<div class="tab_dhf JY_child_one_7">产品G</div>
				</div>
		<div class="JY_child_one_left">
			<!--1-->
			<div class="JY_child_one__le1">
				<div class="waibao_dhf">
			<div class="JY_title_1">抵押经营贷A</div>
			<div class="table_bor"> 
		<table class="table table-bordered" style="text-align: center;" >
		<tr>
		 <td class="biaoti_dhf">贷&nbsp;款&nbsp;额&nbsp;度</td>
		
		 <td colspan="3" style="text-align: left;">500万</td>
		</tr>
		<tr>
		 <td class="biaoti_dhf">贷&nbsp;款&nbsp;期&nbsp;限</td>
		 
		 <td colspan="3" style="text-align: left;">20年</td>
		</tr>
			<tr>
			<td rowspan="3" class="biaoti_dhf">准&nbsp;入&nbsp;条&nbsp;件</td>
			<td colspan="3" style="text-align: left;">1.年龄+授信期<65</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;"><!--2、征信：贷款近两年不得累6或2次连2或一次连3；信用卡单笔逾期低于450，视为未逾期；当前不得有逾期-->
				<table class="table">
					<tr>
						<td rowspan="4" style="width: 110px;">2、征信</td>
					</tr>
					<tr><td>贷款近两年不得累6或2次连2或一次连3；</td></tr>
					<tr><td>信用卡单笔逾期低于450，视为未逾期；</td></tr>
					<tr><td>当前不得有逾期</td></tr>
				</table>
</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">
				<table class="table">
					<tr>
						<td rowspan="4" style="width: 110px;">3.公司要求</td>
					</tr>
					<tr><td>公司注册满一年</td></tr>
					<tr><td>从业2年，可以做实际控股人、抵贷不一。</td></tr>
					<tr><td>抵押人年龄55岁以上且家庭资产唯一住房，不予准入</td></tr>
				</table>
</td>
		</tr>
		</table>
		<div style="width:100%;height: 1px;background:gray ;margin: 6px auto;"></div>
		<table class="table">
		<tr>
			<td rowspan="4" class="biaoti_dhf_2">抵&nbsp;押&nbsp;物&nbsp;要&nbsp;求</td>
			<td colspan="3" style="text-align: left;">
				<table border="0" cellspacing="" cellpadding="">
					
					<tr><td style="width: 110px;">1.房龄</td>
						<td>最高不超30年,学区房35年</td>
					</tr>
				</table>
				</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">
				<table class="table">
					<tr><td rowspan="3" style="width: 110px;">2.产权性质</td></tr>
					<tr><td>住宅、70年酒店式公寓、70年别墅、商住两用、临街底商</td></tr>
					<tr><td>(小区底商、公寓式酒店、经济适用房、按经济适用房管理都不做)</td></tr>
				</table>
</td>
		</tr>
		<tr>
			<td colspan="3" >
							<table class="table">
					<tr><td rowspan="3" style="width: 110px;">3.使用性质</td></tr>
					<tr><td>住宅最高7.5成、临街底商5.5成</td></tr>
					<tr><td>酒店式公寓、70年产权别墅、商住两用6成</td></tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">
			<table class="table">
					<tr><td rowspan="3" style="width: 110px;">4.区域</td></tr>
					<tr><td>六环内，回龙观、天通苑、通州、昌平、大兴</td></tr>
					<tr><td>顺义中央别墅区、亦庄经济开发区</td></tr>
			</table>
			</td>
		</tr>
		</table>
		</div>
		<div class="JY_down_up">
			<div class="JY_down_up_cen click_more1">
				<div class="JY_tubiao_down_up"><img src="/Public/zy/img/fuwz-jiantou.png"/></div>
				<!--<div class="JY_wenzi_down_up "><b></b>点击查看更多信息</div>-->
			</div>	
			</div>	
		<div class="JY_table_tog table_more1">
	<table class="table table-bordered"  >
		<tr>
			<td rowspan="4" class="biaoti_dhf">准&nbsp;备&nbsp;材&nbsp;料</td>
			<td colspan="3" style="text-align: left;">1、身份证、户口本等个人资料</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2、企业五证、公司章程、近三个月上下游合同各三份</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3、房本+其他资产证明
</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">4、个人流水（不要求真实性）+公司流水（不强执提供，但必须真实）公司和房子都要下户
</td>
		</tr>
<tr>
			<td class="biaoti_dhf">流&nbsp;水&nbsp;要&nbsp;求</td>
			<td colspan="3" style="text-align: left;">负债+贷款总金额两倍</td>
</tr>
		<tr>
			<td class="biaoti_dhf">还&nbsp;款&nbsp;方&nbsp;式</td>
			<td colspan="3" style="text-align: left;">5年月息年本；10年等额本息或1/n</td>
		</tr>
		<tr>
			<td class="biaoti_dhf">认&nbsp;可&nbsp;评&nbsp;估</td>
			<td colspan="3" style="text-align: left;">世联、仁达、首家、国策、杜鸣、大地、戴德梁行</td>
	</tr>
	
	</table>
		</div>	
			
		</div>
		<div class="waibao_dhf">
		<div class="jingyingdai_jisuan">
		<h2>计算器/帮助您估算贷款所需支出</h2>
		<div class="small_title">Calculator/to help you estimate the cost of loans</div>
		<div class="JY_1_jsq">
			<div class="loan_money">您期望的贷款金额是多少呢？</div>
			<div class="loan_money1"><input type="text" id="JY_money" class="input_1"  onblur="xf_momey1()"/><span>万元</span></div>
			</div>
			<div class="JY_alert jy_alert_1">*请输入正确的金额哦！</div>
			<div class="JY_1_jsq">
			<div class="loan_money">您期望的贷款年限是多久呢？</div>
			<div class="loan_money1">
				<select id="JY_1_wwl" class="select_1 selectpicker">
					<option value="0" selected="selected">请选择</option>
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
			<div class="JY_jisuan jy_jisuan_1">计算</div>
		</div>	
		<div class="JY_result jy_result_1">
						<h2>每月还款额</h2>
					<h1 class="green_h"><span class="a_min_money"></span>--<span class="a_max_money"></span>RMB</h1>
					<h2 class="green_h">年利率：<span class="a_min_nian_lilv"></span>--<span class="a_max_nian_lilv"></span>%</h2>
					<div class="shenyue">在审阅您的详细资料后，我们能为您计算更加准确的
						</br>利率以及支出</div>
					<button class="JY1-YUYUE">预约此贷款</button>
					<div class="zhidian">—— 或致电  400-9100-188/400-9100-166</div>
		</div>
			</div>
		</div>
		<!--1-->
		<div style="display: none;">
			<div class="waibao_dhf">
					<div class="JY_title_1">抵押经营贷B</div>
			<div class="table_bor"> 
		<table class="table table-bordered" style="text-align: center;" >
		<tr>
		 <td class="biaoti_dhf">贷&nbsp;款&nbsp;额&nbsp;度</td>
		
		 <td colspan="3" style="text-align: left;">额度上限：1000万</td>
		</tr>
		<tr>
		 <td class="biaoti_dhf">贷&nbsp;款&nbsp;期&nbsp;限</td>
		 
		 <td colspan="3" style="text-align: left;">最长20年等额本息</td>
		</tr>
			<tr>
			<td rowspan="5" class="biaoti_dhf">准&nbsp;入&nbsp;条&nbsp;件</td>
			<td colspan="3" style="text-align: left;">1、法人、股东、或个体。年满22周岁、贷款到期时年龄不超70</td>
		    </tr>
		<tr>
			<td colspan="3" style="text-align: left;">2、具有完全民事行为能力的自然人</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3、本人及配偶近2年无不良信用记录（原则上不得连3累6）
</td>
		</tr>
				<tr>
			<td colspan="3" style="text-align: left;">4、具有合法稳定的收入来源，包含经营收入、租金收入、薪资收入及分红收入等
</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">5、符合本规程要求标准的抵押房屋
</td>
		</tr>
		</table>
		<div style="width:100%;height: 1px;background:gray ;margin: 15px auto;"></div>
		<table class="table">
		<tr>
			<td rowspan="3" class="biaoti_dhf_2">抵&nbsp;押&nbsp;物&nbsp;要&nbsp;求</td>
			<td colspan="3" style="text-align: left;">1、房产类型包括住宅（含别墅）或商用房（含商住两用房、办公用房、独立分割式商铺</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2、抵押物房龄符合条件（其中：经营贷款期限5年以上抵押物房龄不超过25年，5年以内贷款不超过30年，消费贷房龄与贷款之和不超45年，长期清晰无法律纠纷，未设定抵押，地理位置良好易于变现。其中商用房已投入使用，不存在空置）商用房不能空置住宅可以。
</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3、抵押物范围六环内</td>
		</tr>
		</table>
		</div>
		<div class="JY_down_up">
			<div class="JY_down_up_cen click_more2">
				<div class="JY_tubiao_down_up"><img src="/Public/zy/img/fuwz-jiantou.png"/></div>
				<!--<div class="JY_wenzi_down_up"><b></b>点击查看更多信息</div>-->
			</div>	
			</div>	
		<div class="JY_table_tog table_more2">
	<table class="table table-bordered" style="text-align: center;" >
		<tr>
			<td rowspan="3" class="biaoti_dhf">公&nbsp;司&nbsp;要&nbsp;求</td>
			<td colspan="3" style="text-align: left;">1、公司成立一年以上，非限制行业（限制行业：主营业务钢材贸易、煤炭、投资担保、船舶）</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2、股东房产抵押用款的，股东在公司章程中体现至少一年以上。占股无要求，法人不占股也可以。</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3、公司名下房产作抵押的，贷款到期不超营业执照有效期
</td>
		</tr>
		<tr>
			<td rowspan="3" class="biaoti_dhf">注&nbsp;意&nbsp;事&nbsp;项</td>
			<td colspan="3" style="text-align: left;">1、流水及基本材料真实</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2、评估1000万以上需双评，2家评估公司出，高的那个出预评，低的那个出正式。</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3、均需提供用款企业作担保
</td>
		</tr>
<tr>
	<td class="biaoti_dhf">放&nbsp;款&nbsp;方&nbsp;式</td>
			<td colspan="3" style="text-align: left;">受托支付</td>
		</tr>
		<tr>
			<td class="biaoti_dhf">还&nbsp;款&nbsp;方&nbsp;式</td>
			<td colspan="3" style="text-align: left;">等额本息、等额本金，提前还款无限制</td>
		</tr>
		<tr>
			<td class="biaoti_dhf">认&nbsp;可&nbsp;评&nbsp;估</td>
			<td colspan="3" style="text-align: left;">华信、仁达、杜鸣、康正、首佳、大地</td>
	</tr>
	</table>
		</div>
		</div>
		<div class="waibao_dhf">
		<div class="jingyingdai_jisuan">
		<h2>计算器/帮助您估算贷款所需支出</h2>
		<div class="small_title">Calculator/to help you estimate the cost of loans</div>
		<div class="JY_1_jsq">
			<div class="loan_money">您期望的贷款金额是多少呢？</div>
			<div class="loan_money1"><input type="text" id="JY_money" class="input_2"  onblur="xf_momey2()"/><span>万元</span></div>
			</div>
			<div class="JY_alert jy_alert_2">*请输入正确的金额哦！</div>
			<div class="JY_1_jsq">
			<div class="loan_money">您期望的贷款年限是多久呢？</div>
			<div class="loan_money1">
				<select name="" id="JY_1_wwl" class="select_2 selectpicker">
						<option value="0" selected="selected">请选择</option>
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
			<div class="JY_jisuan jy_jisuan_2">计算</div>
		</div>	
		<div class="JY_result jy_result_2">
						<h2 >每月还款额</h2>
					<h1 class="green_h"><span class="b_min_money"></span>--<span class="b_max_money"></span>RMB</h1>
					<h2 class="green_h">年利率：<span class="b_min_nian_lilv"></span>--<span class="b_max_nian_lilv"></span>%</h2>
					<div class="shenyue">在审阅您的详细资料后，我们能为您计算更加准确的
						</br>利率以及支出</div>
					<button class="JY1-YUYUE">预约此贷款</button>
					<div class="zhidian">—— 或致电  400-9100-188/400-9100-166</div>
		</div>	
		</div>	
			
		</div>
		<div style="display: none;">
			<div class="waibao_dhf">
				<div class="JY_title_1" >抵押经营贷C</div>
			<div class="table_bor"> 
		<table class="table table-bordered" style="text-align: center;" >
		<tr>
		 <td class="biaoti_dhf">贷&nbsp;款&nbsp;额&nbsp;度</td>
		 <td colspan="3" style="text-align: left;">1.额度上限：1500万（200~1500）</td>
		</tr>
			<tr>
			<td rowspan="2" class="biaoti_dhf">准&nbsp;入&nbsp;条&nbsp;件</td>
			<td colspan="3" style="text-align: left;">1.年龄：不超65岁</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2.征信：2年内不能超过6次逾期（贷款+信用卡），每次逾期不能超过一个月
</td>
		</tr>
<!-- 		<tr>
			<td rowspan="2" class="biaoti_dhf">准&nbsp;入&nbsp;条&nbsp;件</td>
			<td colspan="3" style="text-align: left;">1.年龄:不超70岁</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2.可做直系亲属之间的抵贷不一 60岁以上要有二套
</td>
		</tr> -->
		
			</table>
		<div style="width:100%;height: 1px;background:gray ;margin: 15px auto;"></div>
		<table class="table">
			<tr>
			<td rowspan="3" class="biaoti_dhf_2">抵&nbsp;押&nbsp;物&nbsp;要&nbsp;求</td>
			<td colspan="3" style="text-align: left;">1.房龄：不超过20年</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2.产权性质：只做商品房、住宅、办公、酒店、别墅。
</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3.区域：城六区、昌平、大兴、通州</td>
		</tr>
		</table>
		</div>
		<div class="JY_down_up">
			<div class="JY_down_up_cen click_more3">
				<div class="JY_tubiao_down_up"><img src="/Public/zy/img/fuwz-jiantou.png"/></div>
			</div>	
			</div>	
		<div class="JY_table_tog table_more3">
	<table class="table table-bordered" style="text-align: center;" >
		<tr>
			<td rowspan="4" class="biaoti_dhf">准&nbsp;备&nbsp;材&nbsp;料</td>
			<td colspan="3" style="text-align: left;">1、身份证、户口本等个人资料</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2企业五证，公司章程，16年财务报表，上下游合同</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3.房本+个人资产证明
</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">4.个人流水（非必要条件），公司流水
</td>
		</tr>
<tr>
			<td class="biaoti_dhf">流&nbsp;水&nbsp;要&nbsp;求</td>
			<td colspan="3" style="text-align: left;">无要求，不提供流水。提供财务报表（资产负债表、现金流量表近一年）</td>
</tr>
<tr>
			<td class="biaoti_dhf">放&nbsp;款&nbsp;方&nbsp;式</td>
			<td colspan="3" style="text-align: left;">受托支付，做强执公证</td>
		</tr>
		<tr>
			<td class="biaoti_dhf">还&nbsp;款&nbsp;方&nbsp;式</td>
			<td colspan="3" style="text-align: left;">3年月息年本或5年等额本息</td>
		</tr>
		<tr>
			<td class="biaoti_dhf">认&nbsp;可&nbsp;评&nbsp;估</td>
			<td colspan="3" style="text-align: left;">仁达、世联、国策、国地</td>
	</tr>
	
	</table>
		</div>	
		</div>
		<div class="waibao_dhf">
		<div class="jingyingdai_jisuan">
		<h2>计算器/帮助您估算贷款所需支出</h2>
		<div class="small_title">Calculator/to help you estimate the cost of loans</div>
		<div class="JY_1_jsq">
			<div class="loan_money">您期望的贷款金额是多少呢？</div>
			<div class="loan_money1"><input type="text" id="JY_money" class="input_3" onblur="xf_momey3()"/><span>万元</span></div>
			</div>
			<div class="JY_alert jy_alert_3">*请输入正确的金额哦！</div>
			<div class="JY_1_jsq">
			<div class="loan_money">您期望的贷款年限是多久呢？</div>
			<div class="loan_money1">
				<select name="" id="JY_1_wwl" class="select_3 selectpicker">
					<option value="0" selected="selected">请选择</option>
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
			<div class="JY_jisuan jy_jisuan_3">计算</div>
		</div>	
		<div class="JY_result jy_result_3">
						<h2 >每月还款额</h2>
					<h1 class="green_h"><span class="c_min_money"></span>--<span class="c_max_money"></span>RMB</h1>
					<h2 class="green_h">年利率：<span class="c_min_nian_lilv"></span>--<span class="c_max_nian_lilv"></span>%</h2>
					<div class="shenyue">在审阅您的详细资料后，我们能为您计算更加准确的
						</br>利率以及支出</div>
					<button class="JY1-YUYUE">预约此贷款</button>
					<div class="zhidian">—— 或致电  400-9100-188/400-9100-166</div>
				
		</div>
		</div>
		</div>
		<div style="display: none;">
			<div class="waibao_dhf">
						<div class="JY_title_1">抵押经营贷D</div>
			<div class="table_bor"> 
		<table class="table table-bordered" style="text-align: center;" >
		<tr>
		 <td class="biaoti_dhf">贷&nbsp;款&nbsp;额&nbsp;度</td>
		
		 <td colspan="3" style="text-align: left;">上限500万</td>
		</tr>
		<tr>
		 <td class="biaoti_dhf">贷&nbsp;款&nbsp;期&nbsp;限</td>
		 
		 <td colspan="3" style="text-align: left;">10年</td>
		</tr>
			<tr>
			<td rowspan="2" class="biaoti_dhf">准&nbsp;入&nbsp;条&nbsp;件</td>
			<td colspan="3" style="text-align: left;">
				<table class="table">
					<tr>
						<td rowspan="2" style="width: 20px;">1、</td>
					</tr>
					<tr><td>男女70岁</td></tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">
				<table class="table">
					<tr>
						<td rowspan="3" style="width: 20px;">2、</td>
					</tr>
					<tr><td>必须为公司股东且占股10%以上</td></tr>
					<tr><td>流水覆盖贷款额月供1.3倍，公司成立2年以上。</td></tr>
				</table>
</td>
		</tr>
		</table>
		<div style="width:100%;height: 1px;background:gray ;margin: 6px auto;"></div>
		<table class="table">
		<tr>
			<td rowspan="3"  class="biaoti_dhf_2">抵&nbsp;押&nbsp;物&nbsp;要&nbsp;求</td>
			<td colspan="3" style="text-align: left;">1、房龄不超过20年</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2.40平米以上，
</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3.只做正常商品房（配套公建、办公、商住两用、别墅、公寓）</td>
		</tr>
		</table>
		</div>
		<div class="JY_down_up">
			<div class="JY_down_up_cen click_more4">
				<div class="JY_tubiao_down_up"><img src="/Public/zy/img/fuwz-jiantou.png"/></div>
			<!--	<div class="JY_wenzi_down_up"><b></b>点击查看更多信息</div>-->
			</div>	
			</div>	
		<div class="JY_table_tog table_more4">
	<table class="table table-bordered" style="text-align: center;" >
		<tr>
			<td rowspan="2"  class="biaoti_dhf">准&nbsp;备&nbsp;材&nbsp;料</td>
			<td colspan="3" style="text-align: left;">1、个人资料：夫妻双方身份证、户口本、结婚证、收入证明、近一年流水</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2、公司资料：公司五证、上下游合同各3份、用途材料、财务报表去年年报及今年近一个月月报</td>
		</tr>
	</table>
		</div>	
		</div>
		<div class="waibao_dhf">
		<div class="jingyingdai_jisuan">
		<h2>计算器/帮助您估算贷款所需支出</h2>
		<div class="small_title">Calculator/to help you estimate the cost of loans</div>
		<div class="JY_1_jsq">
			<div class="loan_money">您期望的贷款金额是多少呢？</div>
			<div class="loan_money1"><input type="text" id="JY_money" class="input_4"  onblur="xf_momey4()"/><span>万元</span></div>
			</div>
			<div class="JY_alert jy_alert_4">*请输入正确的金额哦！</div>
			<div class="JY_1_jsq">
			<div class="loan_money">您期望的贷款年限是多久呢？</div>
			<div class="loan_money1">
				<select name="" id="JY_1_wwl" class="select_4 selectpicker">
					<option value="0" selected="selected">请选择</option>
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
			<div class="JY_jisuan jy_jisuan_4">计算</div>
		</div>	
		<div class="JY_result jy_result_4">
						<h2 >每月还款额</h2>
					<h1 class="green_h"><span class="d_min_money"></span>--<span class="d_max_money"></span>RMB</h1>
					<h2 class="green_h">年利率：<span class="d_min_nian_lilv"></span>--<span class="d_max_nian_lilv"></span>%</h2>
					<div class="shenyue">在审阅您的详细资料后，我们能为您计算更加准确的
						</br>利率以及支出</div>
					<button class="JY1-YUYUE">预约此贷款</button>
					<div class="zhidian">—— 或致电  400-9100-188/400-9100-166</div>
				
		</div>
		</div>
		</div>
		<div style="display: none;">
			<div class="waibao_dhf">
					<div class="JY_title_1" >抵押经营贷E</div>
			<div class="table_bor"> 
		<table class="table table-bordered" style="text-align: center;" >
		<tr>
		 <td class="biaoti_dhf">贷&nbsp;款&nbsp;额&nbsp;度</td>
		
		 <td colspan="3" style="text-align: left;">1800万</td>
		</tr>
			<tr>
			<td rowspan="3" class="biaoti_dhf">准&nbsp;入&nbsp;条&nbsp;件</td>
			<td colspan="3" style="text-align: left;">1.年龄：年龄不超65岁</td>
		    </tr>
		<tr>
			<td colspan="3" style="text-align: left;">2.征信:近两年不得连3累3，征信上显示互保，联保不做</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3.公司要求：最好注册1年以上，新注册也可以
</td>
		</tr>
		
			</table>
		<div style="width:100%;height: 1px;background:gray ;margin: 6px auto;"></div>
		<table class="table">
			<tr>
			<td rowspan="4" class="biaoti_dhf_2">抵&nbsp;押&nbsp;物&nbsp;要&nbsp;求</td>
			<td colspan="3" style="text-align: left;">1.房龄：不超20年</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2.产权性质：商品房住宅、商业
</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3.使用性质：住宅7成、别墅6成、商业5成</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">4.所在区域：城六区、近郊可以，远郊4-5成</td>
		</tr>
		</table>
		</div>
		<div class="JY_down_up">
			<div class="JY_down_up_cen click_more5">
				<div class="JY_tubiao_down_up"><img src="/Public/zy/img/fuwz-jiantou.png"/></div>
				<!--<div class="JY_wenzi_down_up"><b></b>点击查看更多信息</div>-->
			</div>	
			</div>	
		<div class="JY_table_tog table_more5">
	<table class="table table-bordered" style="text-align: center;" >
		<tr>
			<td rowspan="3" class="biaoti_dhf">准&nbsp;备&nbsp;材&nbsp;料</td>
			<td colspan="3" style="text-align: left;">1.个人资料，房本，公司上下游合同</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2.公司五证+验资报告、公司章程、财务报表</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3.个人及公司流水+其他资产证明
</td>
		</tr>

		<tr>
			<td class="biaoti_dhf">还&nbsp;款&nbsp;方&nbsp;式</td>
			<td colspan="3" style="text-align: left;">10年等额本息，月息年本</td>
		</tr>
		<tr>
			<td class="biaoti_dhf">认&nbsp;可&nbsp;评&nbsp;估</td>
			<td colspan="3" style="text-align: left;">仁达、世联、国策</td>
	</tr>
	</table>
		</div>	
		</div>
		<div class="waibao_dhf">
		<div class="jingyingdai_jisuan">
		<h2>计算器/帮助您估算贷款所需支出</h2>
		<div class="small_title">Calculator/to help you estimate the cost of loans</div>
		<div class="JY_1_jsq">
			<div class="loan_money">您期望的贷款金额是多少呢？</div>
			<div class="loan_money1"><input type="text" id="JY_money" class="input_5" onblur="xf_momey5()"/><span>万元</span></div>
			</div>
			<div class="JY_alert jy_alert_5">*请输入正确的金额哦！</div>
			<div class="JY_1_jsq">
			<div class="loan_money">您期望的贷款年限是多久呢？</div>
			<div class="loan_money1">
				<select name="" id="JY_1_wwl" class="select_5 selectpicker">
					<option value="0" selected="selected">请选择</option>
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
			<div class="JY_jisuan jy_jisuan_5">计算</div>
		</div>	
		<div class="JY_result jy_result_5">
						<h2 >每月还款额</h2>
					<h1 class="green_h"><span class="e_min_money"></span>--<span class="e_max_money"></span>RMB</h1>
					<h2 class="green_h">年利率：<span class="e_min_nian_lilv"></span>--<span class="e_max_nian_lilv"></span>%</h2>
					<div class="shenyue">在审阅您的详细资料后，我们能为您计算更加准确的
						</br>利率以及支出</div>
					<button class="JY1-YUYUE">预约此贷款</button>
					<div class="zhidian">—— 或致电  400-9100-188/400-9100-166</div>
				
		</div>	
		</div>
		</div>
		<!--*********************-->
		<div style="display: none;">
			<div class="waibao_dhf">
					<div class="JY_title_1">抵押经营贷F</div>
			<div class="table_bor"> 
		<table class="table table-bordered" style="text-align: center;" >
		<tr>
		 <td class="biaoti_dhf">贷&nbsp;款&nbsp;额&nbsp;度</td>
		
		 <td colspan="3" style="text-align: left;">额度上限：1000万</td>
		</tr>
			<tr>
			<td rowspan="7" class="biaoti_dhf">准&nbsp;入&nbsp;条&nbsp;件</td>
			<td colspan="3" style="text-align: left;">（1）	北京公司，未涉及银行禁入行业</td>
		    </tr>
		<tr>
			<td colspan="3" style="text-align: left;">（2）	夫妻未涉及投资任职禁入行业</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">（3）	家庭资产负债比<80%
</td>
		</tr>
				<tr>
			<td colspan="3" style="text-align: left;">（4）	近六个月家庭流水加公司流水收入覆盖本笔金额加家庭负债
</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">（5）	不抵押人年龄超过55需要提供2套居所证明,可接受实际控制人
</td>
		</tr>
						<tr>
			<td colspan="3" style="text-align: left;">（6）	不接受非直系亲属抵押人借款人一起借款
</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">（7）	如能证明亲属关系实际控制人6成+强执。如不能5成加强执
</td>
		</tr>

		</table>
		<div style="width:100%;height: 1px;background:gray ;margin: 6px auto;"></div>
		<table class="table">
		<tr>
			<td rowspan="2" class="biaoti_dhf_2">抵&nbsp;押&nbsp;物&nbsp;要&nbsp;求</td>
			<td colspan="3" style="text-align: left;">1、北京房产，不认经适房、小产权房、地下室、半地下等非正常房产</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2、房龄原则不超20年25年以内可酌情。
</td>
		</tr>
		</table>
		</div>
		<div class="JY_down_up">
			<div class="JY_down_up_cen click_more6">
				<div class="JY_tubiao_down_up"><img src="/Public/zy/img/fuwz-jiantou.png"/></div>
				<!--<div class="JY_wenzi_down_up"><b></b>点击查看更多信息</div>-->
			</div>	
			</div>	
		<div class="JY_table_tog table_more6">
	<table class="table table-bordered" style="text-align: center;" >
		<tr>
			<td rowspan="4" class="biaoti_dhf">准&nbsp;备&nbsp;材&nbsp;料</td>
			<td colspan="3" style="text-align: left;">1.夫妻双方身份证、户口本、结婚证/离婚证+离婚协议/法院判决书/死亡证明</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2.房产证、原是购房合同（若离婚时间在购房后）</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3.公司材料：营业执照、税务登记证、组织机构代码（副本）、特殊经营许可证、公司章程，场地租赁合同，近半年流水及对公流水（*） 面签时带公章
</td>
		</tr><tr>
			<td colspan="3" style="text-align: left;">4.近期上下游合同至少各两份
</td></tr>
		<tr>
	<td class="biaoti_dhf">特&nbsp;别&nbsp;注&nbsp;意</td>
			<td colspan="3" style="text-align: left;">以上面签时均提供原件</td>
		</tr>
		<tr>
			<td class="biaoti_dhf">还&nbsp;款&nbsp;方&nbsp;式</td>
			<td colspan="3" style="text-align: left;">不用不计息用多少收多少，单笔最长5年，每月还月供，5年到期还剩余本金。资质够好可做20年授信，10年单笔提款</td>
		</tr>
		<tr>
			<td class="biaoti_dhf">认&nbsp;可&nbsp;评&nbsp;估</td>
			<td colspan="3" style="text-align: left;">华信、仁达、杜鸣、康正、首佳、大地</td>
	</tr>
	</table>
		</div>	
		</div>
		<div class="waibao_dhf">
		<div class="jingyingdai_jisuan">
		<h2>计算器/帮助您估算贷款所需支出</h2>
		<div class="small_title">Calculator/to help you estimate the cost of loans</div>
		<div class="JY_1_jsq">
			<div class="loan_money">您期望的贷款金额是多少呢？</div>
			<div class="loan_money1"><input type="text" id="JY_money" class="input_6"  onblur="xf_momey6()"/><span>万元</span></div>
			</div>
			<div class="JY_alert jy_alert_6" >*请输入正确的金额哦！</div>
			<div class="JY_1_jsq">
			<div class="loan_money">您期望的贷款年限是多久呢？</div>
			<div class="loan_money1">
				<select name="" id="JY_1_wwl" class="select_6 selectpicker">
					<option value="0" selected="selected">请选择</option>
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
			<div class="JY_jisuan jy_jisuan_6">计算</div>
		</div>	
		<div class="JY_result jy_result_6">
						<h2 >每月还款额</h2>
					<h1 class="green_h"><span class="f_min_money"></span>--<span class="f_max_money"></span>RMB</h1>
					<h2 class="green_h">年利率<span class="f_min_nian_lilv"></span>--<span class="f_max_nian_lilv"></span>%</h2>
					<div class="shenyue">在审阅您的详细资料后，我们能为您计算更加准确的
						</br>利率以及支出</div>
					<button class="JY1-YUYUE">预约此贷款</button>
					<div class="zhidian">—— 或致电  400-9100-188/400-9100-166</div>
		</div>	
			
			</div>
		</div>
		<!--*********************-->
		<div style="display: none;">
			<div class="waibao_dhf">
					<div class="JY_title_1" >抵押经营贷G</div>
			<div class="table_bor"> 
		<table class="table table-bordered" style="text-align: center;" >
		<tr>
		 <td class="biaoti_dhf">贷&nbsp;款&nbsp;额&nbsp;度</td>
		
		 <td colspan="3" style="text-align: left;">上限1000万</td>
		</tr>
			<tr>
			<td rowspan="4" class="biaoti_dhf">准&nbsp;入&nbsp;条&nbsp;件</td>
			<td colspan="3" style="text-align: left;">1.年龄：20--60岁，授信<65岁</td>
		    </tr>
		<tr>
			<td colspan="3" style="text-align: left;">2.征信；贷款近2年内不得累6；信用卡不得累9；最长逾期不得超过30天</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">3.借款人或配偶为企业法定代表人、实际经营者、持股比例10%以上的股东或实际控制人
</td>
		</tr>
				<tr>
			<td colspan="3" style="text-align: left;">4.公司注册半年以上
</td>
		</tr>
		</table>
		<div style="width:100%;height: 1px;background:gray ;margin: 6px auto;"></div>
		<table class="table">
		<tr>
			<td rowspan="4" class="biaoti_dhf_2">抵&nbsp;押&nbsp;物&nbsp;要&nbsp;求</td>
			<td colspan="3" style="text-align: left;">
			<table class="table">
				<tr>
					<td rowspan="2" style="width: 110px;">1.房龄</td>
				</tr>
				<tr>
					<td>房龄要小于25年</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">
<table class="table">
				<tr>
					<td rowspan="6" style="width: 110px;">2.产权性质</td>
				</tr>
								<tr>
			<td colspan="3" >4北京唯一住房面积大于70平或者总价大于300万
</td>
		</tr>
				<tr>
					<td>厂房、两限房、军产房、小产权房、地下室、空置毛坯不接</td>
				</tr>
				<tr>
					<td>08年4月以前的经济适用房</td>
				</tr>
				<tr>
					<td>隔断、打通降成；</td>
				</tr>
				<tr>
					<td>按经济适用房管理、央产房、成本价房、房改房、标准房、优惠价房提供原始购房合同、允许抵押上市降成</td>
				</tr>

			</table>

</td>
		</tr><tr>
			<td colspan="3" style="width: 110px;">3.区域；延庆、平谷不做。
</td>
		</tr>
		
		</table>
		</div>
		<div class="JY_down_up">
			<div class="JY_down_up_cen click_more7">
				<div class="JY_tubiao_down_up"><img src="/Public/zy/img/fuwz-jiantou.png"/></div>
				<!--<div class="JY_wenzi_down_up"><b></b>点击查看更多信息</div>-->
			</div>	
			</div>	
		<div class="JY_table_tog table_more7">
	<table class="table table-bordered" style="text-align: center;" >
		<tr>
			<td rowspan="2" class="biaoti_dhf">客户准备材料</td>
			<td colspan="3" style="text-align: left;">1.个人资料：夫妻双方身份证、户口本、结婚证/离婚证+离婚协议/法院判决书/死亡证明
房本、行驶本、其它房产证明</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: left;">2.夫妻双方收入证明、银行卡流水半年、非本地人提供暂住证或近三个月水电费发票</td>
		</tr>
		<tr>
			<td rowspan="1" class="biaoti_dhf">公司准备材料</td>
			<td colspan="3" style="text-align: left;">1.营业执照副本、组织机构代码、税务登记证、其它特殊许可证、公司章程、验资报告、去银行面签带上公章
</td>
		</tr>
		<tr>
	<td class="biaoti_dhf">特别注意</td>
			<td colspan="3" style="text-align: left;">以上面签时均提供原件</td>
		</tr>
		<tr>
			<td class="biaoti_dhf">还款方式</td>
			<td colspan="3" style="text-align: left;">不用不计息用多少收多少，单笔最长5年，每月还月供，5年到期还剩余本金。资质够好可做20年授信，10年单笔提款</td>
		</tr>
		<tr>
			<td class="biaoti_dhf">认可评估</td>
			<td colspan="3" style="text-align: left;">华信、仁达、杜鸣、康正、首佳、大地</td>
	</tr>
	</table>
		</div>	
		</div>
		<div class="jingyingdai_jisuan">
		<h2>计算器/帮助您估算贷款所需支出</h2>
		<div class="small_title">Calculator/to help you estimate the cost of loans</div>
		<div class="JY_1_jsq">
			<div class="loan_money">您期望的贷款金额是多少呢？</div>
			<div class="loan_money1"><input type="text" id="JY_money" class="input_7" onblur="xf_momey7()"/><span>万元</span></div>
			</div>
			<div class="JY_alert jy_alert_7">*请输入正确的金额哦！</div>
			<div class="JY_1_jsq">
			<div class="loan_money">您期望的贷款年限是多久呢？</div>
			<div class="loan_money1">
				<select name="" id="JY_1_wwl" class="select_7 selectpicker">
					<option value="0" selected="selected">请选择</option>
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
			<div class="JY_jisuan jy_jisuan_7">计算</div>
		</div>	
		<div class="JY_result jy_result_7">
						<h2 >每月还款额</h2>
					<h1 class="green_h"><span class="g_min_money"></span>--<span class="g_max_money"></span>RMB</h1>
					<h2 class="green_h">年利率：<span class="g_min_nian_lilv"></span>--<span class="g_max_nian_lilv"></span>%</h2>
					<div class="shenyue">在审阅您的详细资料后，我们能为您计算更加准确的
						</br>利率以及支出</div>
					<button class="JY1-YUYUE">预约此贷款</button>
					<div class="zhidian">—— 或致电  400-9100-188/400-9100-166</div>
		</div>
		</div>
		</div>
		</div>
		</div>	
		</div>
		<div class="load_foot"></div>
	</body>
</html>
 <script src="/Public/zy/js/zyjf.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$('.click_more1').click(function(){
		$(".table_more1").slideToggle('slow');
		$('.click_more1 .JY_tubiao_down_up').toggleClass('JY_tubiao_ro')
	})
	$('.click_more2').click(function(){
		$(".table_more2").slideToggle('slow');
		$('.click_more2 .JY_tubiao_down_up').toggleClass('JY_tubiao_ro')
	})
	$('.click_more3').click(function(){
		$(".table_more3").slideToggle('slow');
		$('.click_more3 .JY_tubiao_down_up').toggleClass('JY_tubiao_ro')
	})
	$('.click_more4').click(function(){
		$(".table_more4").slideToggle('slow');
		$('.click_more4 .JY_tubiao_down_up').toggleClass('JY_tubiao_ro')
	})
		$('.click_more5').click(function(){
		$(".table_more5").slideToggle('slow');
		$('.click_more5 .JY_tubiao_down_up').toggleClass('JY_tubiao_ro')
	})
			$('.click_more6').click(function(){
		$(".table_more6").slideToggle('slow');
		$('.click_more6 .JY_tubiao_down_up').toggleClass('JY_tubiao_ro')
	})
			$('.click_more7').click(function(){
		$(".table_more7").slideToggle('slow');
		$('.click_more7 .JY_tubiao_down_up').toggleClass('JY_tubiao_ro')
	})
//			产品[A计算]
var re1_fag1=false;
var re1_fag2=false;
var re1_fag3=false;
var re1_fag4=false;
var re1_fag5=false;
var re1_fag6=false;
var re1_fag7=false;
var tex=/^[0-9]*$/;
//			产品[a计算]
function xf_momey1(){
	var mon=$('.input_1').val();
	if(mon==''||tex.test(mon)==false){
	re1_fag1=false;	
	$('.jy_alert_1').show();
	}
	else{
	re1_fag1=true;	
	$('.jy_alert_1').hide();
	}
}
$('.jy_jisuan_1').click(function(){
	var a_money=$('.input_1').val();
	a_money=a_money*10000;
	var a_month=$('.select_1>option:checked').val();
	var a_shangfu=0.33;
	var a_min_nian_lilv;
	var a_max_nian_lilv;
	if(a_month<=12){
		a_min_nian_lilv=4.35;
		a_max_nian_lilv=a_min_nian_lilv*(1+a_shangfu)
	}
	else if(a_month>12&&a_month<=60){
		a_min_nian_lilv=4.75;
		a_max_nian_lilv=a_min_nian_lilv*(1+a_shangfu)
	}
	else{
		a_min_nian_lilv=4.9;
		a_max_nian_lilv=a_min_nian_lilv*(1+a_shangfu)
	}
	var a_min_lilv=a_min_nian_lilv/1200;
	var a_max_lilv=a_max_nian_lilv/1200;
	$('.a_min_nian_lilv').html(a_min_nian_lilv.toFixed(2));
	$('.a_max_nian_lilv').html(a_max_nian_lilv.toFixed(2))
	
	if(re1_fag1){
		if($('.select_1>option:checked').val()==0){
		$('.jy_alert_1').show();
		$('.jy_alert_1').html('请选择年限')
	}
		else{
			$('.jy_jisuan_1').html('重新计算')
			$('.jy_alert_1').hide();
			$(".jy_result_1").slideDown('slow');
//			在里面写计算结果
var a_canshu=Math.pow(1+a_min_lilv,a_month);
a_huankuan=a_money*a_min_lilv*a_canshu/(a_canshu-1);
$('.a_min_money').html(a_huankuan.toFixed(2));
var a_max_canshu=Math.pow(1+a_max_lilv,a_month);
a_max_huankuan=a_money*a_max_lilv*a_max_canshu/(a_max_canshu-1);
$('.a_max_money').html(a_max_huankuan.toFixed(2));
		}
	}
	else{
	$('.jy_alert_1').show();
	$('.jy_alert_1').html('请输入金额')
	}
})

//			产品[b计算]

function xf_momey2(){
	var mon=$('.input_2').val();
	if(mon==''||tex.test(mon)==false){
	re1_fag2=false;	
	$('.jy_alert_2').show();
	}
	else{
	re1_fag2=true;	
	$('.jy_alert_2').hide();
	}
}
$('.jy_jisuan_2').click(function(){
	var b_money=$('.input_2').val();//等额本金上浮0.2--0.3
	b_money=b_money*10000;
	var b_month=$('.select_2>option:checked').val();
	var b_shangfu=0.3;
	var b_min_nian_lixi;
	var b_max_nian_lixi;
	if(b_month<=12){
		b_min_nian_lixi=4.35;
		b_max_nian_lixi=b_min_nian_lixi*(1+b_shangfu)
	}
	else if(b_month>12&&b_month<=60){
		b_min_nian_lixi=4.75;
		b_max_nian_lixi=b_min_nian_lixi*(1+b_shangfu)
	}
	else{
		b_min_nian_lixi=4.9;
		b_max_nian_lixi=b_min_nian_lixi*(1+b_shangfu)
	}
	var b_min_lilv=b_min_nian_lixi/1200;
	var b_max_lilv=b_max_nian_lixi/1200;
	$('.b_min_nian_lilv').html(b_min_nian_lixi.toFixed(2));
	$('.b_max_nian_lilv').html(b_max_nian_lixi.toFixed(2))
	
	
	if(re1_fag2){
		if($('.select_2>option:checked').val()==0){
		$('.jy_alert_2').show();
		$('.jy_alert_2').html('请选择年限')
	}
		else{
			$('.jy_jisuan_2').html('重新计算')
			$('.jy_alert_2').hide();
			$(".jy_result_2").slideDown('slow');
//			在里面写计算结果
var b_benjin=b_money/b_month;
//已归还本金累计 benadd
var b_benadd;
var b_every_yuegong;
var b_every_yuegone1;
for (var i = 1; i<=b_month; i++){
b_benadd=b_benjin*(i-1);
b_every_yuegong=b_benjin*1+(b_money-b_benadd)*b_min_lilv;
b_every_yuegong1=b_benjin*1+(b_money-b_benadd)*b_max_lilv;
b_every_yuegong=b_every_yuegong.toFixed(2);
b_every_yuegong1=b_every_yuegong1.toFixed(2)
if(i==b_month){
	$('.b_min_money').html(b_every_yuegong)
}
if(i==1){
	$('.b_max_money').html(b_every_yuegong1)
}
}
		}
	}
	else{
	$('.jy_alert_2').show();
	$('.jy_alert_2').html('请输入金额')
	}
})


//			产品[c计算]

function xf_momey3(){
	var mon=$('.input_3').val();
	if(mon==''||tex.test(mon)==false){
	re1_fag3=false;	
	$('.jy_alert_3').show();
	}
	else{
	re1_fag3=true;	
	$('.jy_alert_3').hide();
	}
}
$('.jy_jisuan_3').click(function(){
	var c_money=$('.input_3').val();
	c_money=c_money*10000;
	var c_month=$('.select_3>option:checked').val();
	var c_shangfu=0.35;
	var c_min_nian_lilv;
	var c_max_nian_lilv;
	if(c_month<=12){
		c_min_nian_lilv=4.35;
		c_max_nian_lilv=c_min_nian_lilv*(1+c_shangfu)
	}
	else if(c_month>12&&c_month<=60){
		c_min_nian_lilv=4.75;
		c_max_nian_lilv=c_min_nian_lilv*(1+c_shangfu)
	}
	else{
		c_min_nian_lilv=4.9;
		c_max_nian_lilv=c_min_nian_lilv*(1+c_shangfu)
	}
	var c_min_lilv=c_min_nian_lilv/1200;
	var c_max_lilv=c_max_nian_lilv/1200;
	$('.c_min_nian_lilv').html(c_min_nian_lilv.toFixed(2));
	$('.c_max_nian_lilv').html(c_max_nian_lilv.toFixed(2))
	
	if(re1_fag3){
		if($('.select_3>option:checked').val()==0){
		$('.jy_alert_3').show();
		$('.jy_alert_3').html('请选择年限')
	}
		else{
			$('.jy_jisuan_3').html('重新计算')
			$('.jy_alert_3').hide();
			$(".jy_result_3").slideDown('slow');
//			在里面写计算结果
var c_canshu=Math.pow(1+c_min_lilv,c_month);
c_huankuan=c_money*c_min_lilv*c_canshu/(c_canshu-1);
$('.c_min_money').html(c_huankuan.toFixed(2));
var c_max_canshu=Math.pow(1+c_max_lilv,c_month);
c_max_huankuan=c_money*c_max_lilv*c_max_canshu/(c_max_canshu-1);
$('.c_max_money').html(c_max_huankuan.toFixed(2));


		}
	}
	else{
	$('.jy_alert_3').show();
	$('.jy_alert_3').html('请输入金额')
	}
})

//			产品[d计算]

function xf_momey4(){
	var mon=$('.input_4').val();
	if(mon==''||tex.test(mon)==false){
	re1_fag4=false;	
	$('.jy_alert_4').show();
	}
	else{
	re1_fag4=true;	
	$('.jy_alert_4').hide();
	}
}
$('.jy_jisuan_4').click(function(){
	var d_money=$('.input_4').val();//等额本金上浮0.35
	d_money=d_money*10000;
	var d_month=$('.select_4>option:checked').val();
	var d_shangfu=0.35;
	var d_min_nian_lixi;
	var d_max_nian_lixi;
	if(d_month<=12){
		d_min_nian_lixi=4.35;
		d_max_nian_lixi=d_min_nian_lixi*(1+d_shangfu)
	}
	else if(d_month>12&&d_month<=60){
		d_min_nian_lixi=4.75;
		d_max_nian_lixi=d_min_nian_lixi*(1+d_shangfu)
	}
	else{
		d_min_nian_lixi=4.9;
		d_max_nian_lixi=d_min_nian_lixi*(1+d_shangfu)
	}
	var d_min_lilv=d_min_nian_lixi/1200;
	var d_max_lilv=d_max_nian_lixi/1200;
	$('.d_min_nian_lilv').html(d_min_nian_lixi.toFixed(2));
	$('.d_max_nian_lilv').html(d_max_nian_lixi.toFixed(2))
	
	if(re1_fag4){
		if($('.select_4>option:checked').val()==0){
		$('.jy_alert_4').show();
		$('.jy_alert_4').html('请选择年限')
	}
		else{
			$('.jy_jisuan_4').html('重新计算')
			$('.jy_alert_4').hide();
			$(".jy_result_4").slideDown('slow');
//			在里面写计算结果
var d_benjin=d_money/d_month;
//已归还本金累计 benadd
var d_benadd;
var d_every_yuegong;
var d_every_yuegone1;
for (var i = 1; i<=d_month; i++){
d_benadd=d_benjin*(i-1);
d_every_yuegong=d_benjin*1+(d_money-d_benadd)*d_min_lilv;
d_every_yuegong1=d_benjin*1+(d_money-d_benadd)*d_max_lilv;
d_every_yuegong=d_every_yuegong.toFixed(2);
d_every_yuegong1=d_every_yuegong1.toFixed(2)
if(i==d_month){
	$('.d_min_money').html(d_every_yuegong)
}
if(i==1){
	$('.d_max_money').html(d_every_yuegong1)
}
}

		}
	}
	else{
	$('.jy_alert_4').show();
	$('.jy_alert_4').html('请输入金额')
	}
})
//			产品[e计算]
function xf_momey5(){
	var mon=$('.input_5').val();
	if(mon==''||tex.test(mon)==false){
	re1_fag5=false;	
	$('.jy_alert_5').show();
	}
	else{
	re1_fag5=true;	
	$('.jy_alert_5').hide();
	}
}
$('.jy_jisuan_5').click(function(){
	var e_money=$('.input_5').val();
	e_money=e_money*10000;
	var e_month=$('.select_5>option:checked').val();
	var e_min_shangfu=0.3;
	var e_max_shangfu=0.4;
	var e_min_nian_lixi;
	var e_max_nian_lixi;
	if(e_month<=12){
		e_min_nian_lixi=4.35*(1+e_min_shangfu);
		e_max_nian_lixi=4.35*(1+e_max_shangfu)
	}
	else if(e_month>12&&e_month<=60){
		e_min_nian_lixi=4.75*(1+e_min_shangfu);
		e_max_nian_lixi=4.75*(1+e_max_shangfu)
	}
	else{
		e_min_nian_lixi=4.9*(1+e_min_shangfu);
		e_max_nian_lixi=4.9*(1+e_max_shangfu)
	}
	var e_min_lilv=e_min_nian_lixi/1200;
	var e_max_lilv=e_max_nian_lixi/1200;
	$('.e_min_nian_lilv').html(e_min_nian_lixi.toFixed(2));
	$('.e_max_nian_lilv').html(e_max_nian_lixi.toFixed(2));
	
	if(re1_fag5){
		if($('.select_5>option:checked').val()==0){
		$('.jy_alert_5').show();
		$('.jy_alert_5').html('请选择年限')
	}
		else{
			$('.jy_jisuan_5').html('重新计算')
			$('.jy_alert_5').hide();
			$(".jy_result_5").slideDown('slow');
//			在里面写计算结果

var e_canshu=Math.pow(1+e_min_lilv,e_month);
e_huankuan=e_money*e_min_lilv*e_canshu/(e_canshu-1);
$('.e_min_money').html(e_huankuan.toFixed(2));
var e_max_canshu=Math.pow(1+e_max_lilv,e_month);
e_max_huankuan=e_money*e_max_lilv*e_max_canshu/(e_max_canshu-1);
$('.e_max_money').html(e_max_huankuan.toFixed(2));
		}
	}
	else{
	$('.jy_alert_5').show();
	$('.jy_alert_5').html('请输入金额')
	}
})

//			产品[f计算]
function xf_momey6(){
	var mon=$('.input_6').val();
	if(mon==''||tex.test(mon)==false){
	re1_fag6=false;	
	$('.jy_alert_6').show();
	}
	else{
	re1_fag6=true;	
	$('.jy_alert_6').hide();
	}
}
$('.jy_jisuan_6').click(function(){
	var f_money=$('.input_6').val();//等额本金上浮0.2--0.3
	f_money=f_money*10000;
	var f_month=$('.select_6>option:checked').val();
	var f_shangfu=0.25;
	var f_min_nian_lixi;
	var f_max_nian_lixi;
	if(f_month<=12){
		f_min_nian_lixi=4.35;
		f_max_nian_lixi=f_min_nian_lixi*(1+f_shangfu)
	}
	else if(f_month>12&&f_month<=60){
		f_min_nian_lixi=4.75;
		f_max_nian_lixi=f_min_nian_lixi*(1+f_shangfu)
	}
	else{
		f_min_nian_lixi=4.9;
		f_max_nian_lixi=f_min_nian_lixi*(1+f_shangfu)
	}
	var f_min_lilv=f_min_nian_lixi/1200;
	var f_max_lilv=f_max_nian_lixi/1200;
	$('.f_min_nian_lilv').html(f_min_nian_lixi.toFixed(2));
	$('.f_max_nian_lilv').html(f_max_nian_lixi.toFixed(2));
	if(re1_fag6){
		if($('.select_6>option:checked').val()==0){
		$('.jy_alert_6').show();
		$('.jy_alert_6').html('请选择年限')
	}
		else{
			$('.jy_jisuan_6').html('重新计算')
			$('.jy_alert_6').hide();
			$(".jy_result_6").slideDown('slow');
//			在里面写计算结果
var f_benjin=f_money/f_month;
//已归还本金累计 benadd
var f_benadd;
var f_every_yuegong;
var f_every_yuegone1;
for (var i = 1; i<=f_month; i++){
f_benadd=f_benjin*(i-1);
f_every_yuegong=f_benjin*1+(f_money-f_benadd)*f_min_lilv;
f_every_yuegong1=f_benjin*1+(f_money-f_benadd)*f_max_lilv;
f_every_yuegong=f_every_yuegong.toFixed(2);
f_every_yuegong1=f_every_yuegong1.toFixed(2)
if(i==f_month){
	$('.f_min_money').html(f_every_yuegong)
}
if(i==1){
	$('.f_max_money').html(f_every_yuegong1)
}
}
		}
	}
	else{
	$('.jy_alert_6').show();
	$('.jy_alert_6').html('请输入金额')
	}
})
//			产品[g计算]
function xf_momey7(){
	var mon=$('.input_7').val();
	if(mon==''||tex.test(mon)==false){
	re1_fag7=false;	
	$('.jy_alert_7').show();
	}
	else{
	re1_fag7=true;	
	$('.jy_alert_7').hide();
	}
}
$('.jy_jisuan_7').click(function(){
	var g_money=$('.input_7').val();
	g_money=g_money*10000;
	var g_month=$('.select_7>option:checked').val();
	var g_min_shangfu=0.3;
	var g_max_shangfu=0.4;
	var g_min_nian_lixi;
	var g_max_nian_lixi;
	if(g_month<=12){
		g_min_nian_lixi=4.35*(1+g_min_shangfu);
		g_max_nian_lixi=4.35*(1+g_max_shangfu)
	}
	else if(g_month>12&&g_month<=60){
		g_min_nian_lixi=4.75*(1+g_min_shangfu);
		g_max_nian_lixi=4.75*(1+g_max_shangfu)
	}
	else{
		g_min_nian_lixi=4.9*(1+g_min_shangfu);
		g_max_nian_lixi=4.9*(1+g_max_shangfu);
	}
	var g_min_lilv=g_min_nian_lixi/1200;
	var g_max_lilv=g_max_nian_lixi/1200;
	$('.g_min_nian_lilv').html(g_min_nian_lixi.toFixed(2));
	$('.g_max_nian_lilv').html(g_max_nian_lixi.toFixed(2));
	
	if(re1_fag7){
		if($('.select_7>option:checked').val()==0){
		$('.jy_alert_7').show();
		$('.jy_alert_7').html('请选择年限')
	}
		else{
			$('.jy_jisuan_7').html('重新计算')
			$('.jy_alert_7').hide();
			$(".jy_result_7").slideDown('slow');
//			在里面写计算结果
var g_canshu=Math.pow(1+g_min_lilv,g_month);
g_huankuan=g_money*g_min_lilv*g_canshu/(g_canshu-1);
$('.g_min_money').html(g_huankuan.toFixed(2));
var g_max_canshu=Math.pow(1+g_max_lilv,g_month);
g_max_huankuan=g_money*g_max_lilv*g_max_canshu/(g_max_canshu-1);
$('.g_max_money').html(g_max_huankuan.toFixed(2));


		}
	}
	else{
	$('.jy_alert_7').show();
	$('.jy_alert_7').html('请输入金额')
	}
})
$('.JY1-YUYUE').click(function(){
	location.href='<?php echo U('Jy/daishenqing');?>'
})
$('.JY_child_one_right>div').not('.JY-toubu').click(function(){
	$('.JY_child_one_right>div').removeClass('JY_child_one_right_active')
	$(this).addClass('JY_child_one_right_active')
	var index=$(this).index();
	index=index-1;
	$('.JY_child_one_left>div').hide();
$('.JY_child_one_left>div').eq(index).fadeIn();
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