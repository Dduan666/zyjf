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
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>【卓屹金服】</title>
</head>
<body>
<div class="about-us-wwl">
	<div class="about-us-con" id="page" type="<?php echo ($pa); ?>">
		<!-- <div class="about_us_gywm"><a href="<?php echo U('Index/index');?>">卓屹金服</a>>>关于我们</div> -->
		<div class="about-us-left">
			<div class="big_div">
				<ul class="about-us-jianjie">
					
					<li class="red_dhf">公司简介</li>
					<li >公司新闻</li>
					<li >组织架构</li>
					<li >企业文化</li>
					<li >卓屹优势</li>
					<li >招贤纳士</li>
				</ul>
			</div>
		</div>
		<div class="about-us-right">
			<div class="about-us-right-2">
<div class="about_us_tab1_img"><img src="/Public/zy/img/gywm(3).png" alt="tupian"/></div>
<div class="about_us_tab1_wenzi">
	<div class="about_us_title">企业介绍</div>
	<div class="about_us_detial">
	北京卓屹金融服务有限公司成立于2014年，是由资深投资、理财专家组建的一家专业化资产管理机构。专注于中小微企业贷款、房屋车辆抵押消费贷款、三方理财、资产证券化等领域，公司由原北京民营投资担保龙头企业总裁掌舵，管理层多数来自各大银行总行及互联网金融行业知名品牌公司，现员工 200人左右，每月为100余家企业、个人解决资金难问题，与银行合作放贷2-3亿规模	
	</div>
	
	<div class="about_us_title">企业愿景</div>
	<div class="about_us_detial">
	坚持在金融信息服务领域中，成为最专业最信赖的领航者
	</div>
	<div class="about_us_title">公司理念</div>
	<div class="about_us_detial">
	帮助客户，为客户提供最好的金融居间服务是卓屹金服存在的唯一理由，解决客户需求是卓屹金服发展的原动力
	</div>
		<div class="about_us_title">企业价值观</div>
	<div class="about_us_detial">
	忘己利他；即：忘掉自己，利益他人。不论是面对客户还是同事，我们都要做到忘己利他
	</div>
</div>
			</div>
			<!--将公司新闻移到这里-->
			
			<div class="about-us-right-5">
<div class="new_a style_yanshi">
<ul class="gsxixun">
<?php if(is_array($av)): foreach($av as $key=>$a): ?><li>
			<a class="dkgl_new" href="<?php echo U('Bangzhu/newlist_xqy',array('id'=>$a['id']));?>"><?php echo ($a['title']); ?></a>
			<span class="span_new2"><?php echo ($a['time']); ?></span>
		</li><?php endforeach; endif; ?>
	</ul>
	<div class="productPage">
	    <?php echo ($pagestr); ?>
	</div>
</div>
</div>
			<!--将公司新闻移到这里-->
			
			<div class="about-us-right-1" style="display: none;">
				<div class="zzjg" style="width:789px;height: 402px;margin-bottom: 120px;">
					<img style="width:100%;height:100%;" src="/Public/zy/img/zzjg.png"/>
				</div>
				
				<div class="zjlizhici">
					<div class="zjlizhici_img"><img src="/Public/zy/img/gywm(2).png" alt="总经理图片"/></div>
					<div class="zjlizhici_wenzi">
						<div class="about_us_title">总经理致辞</div>
						<div class="about_us_detial" style="text-indent: 30px;">我们知道，今年贷款行业的竞争越来越激烈，国内形势也越来越严峻，贷款在国家的调控政策和银行限贷政策收紧的影响下，呈现一片不景气态势。怎样顺时而动，因机而发，是大家在今年肩负的职责，公司要发展，公司要前进，我们目前做的还远远不够，我们离先进的贷款投资管理人还相差甚远，我们还有很长的一段路要走。为了实现公司更好、更快发展的目标，我们需要在以下几个方面加强工作力度：</div>
					</div>
				</div>
		<div class="about_us_detial">1、我们要提升公司管理，打造企业品牌，内强素质，外树形象，才能开拓前进的道路。所以我们须在现有的基础上，完备各项管理制度，完善投融资流程，规范各种办事程序，强化各级管理人员、甚至是每一个普通员工的执行力，管理不可能会有丝毫的松懈，只有进一步的加强。</div>	
		<div class="about_us_detial">2、我们要形成企业核心业务优势。目前公司业务主要集中在贷款，项目投资、理财三大方向，以长远发展考虑，贷款、质押才能符合企业可持续性发展的根本需求，我们要在这两个方面加强学习和实践。</div>	
		<div class="about_us_detial">3、我们要加强团队建设、保持团队团结。有会谋略的将军，还需有去打仗的兵。公司战略决策是否能达到预期目标，需要优秀的专业人才去有效执行;团队的团结才可以使遇到的问题迎刃而解，同事融洽相处，才能是工作开心，只有保持各方面的团结协作，才能更好的完成企业目标。</div>	
		<div class="about_us_title">总结</div>
		<div class="about_us_detial">回顾过去，展望未来，面临着新的挑战，我们不仅应该具有完成挑战的勇气，我们更应该具有超越挑战的智慧!我相信，脚踏实地山让路，持之以恒海可移。愿我们意气风发、斗志昂扬，以执行力为以后工作的主导思想，以细节管理为工作的基本方法，坚持在金融信息服务领域中，成为最专业最信赖的领航者；携手并肩、团结一致，向着更高更远的目标奋进!让我们信心百倍，鼓足干劲，朝着更新更美的梦想冲刺!（韩超）</div>	
			</div>
			<!--yi结束*************-->
			

			<div class="about-us-right-3" style="display: none;">
				<div class="about_us_tab1_img"><img src="/Public/zy/img/gywm(1).png" alt="tupian"/></div>
<div class="about_us_tab1_wenzi">
	<div class="about_us_title">企业精神</div>
	<div class="about_us_detial">
	无论遇到任何困难险阻，我们始终用旺盛的斗争心
	</br>洋溢的热情，一心一意，不屈不挠，挑战极限，直到成功
	</div>
	
	<div class="about_us_title">企业育人观</div>
	<div class="about_us_detial">
	小善如大恶，大善似无情
	</div>
	<div class="about_us_title">事业价值观</div>
	<div class="about_us_detial">
	忠实守信、求真务实、拼命精进、专注专业、狼性带头、舍己利他
	</div>
		<div class="about_us_title">团队精神</div>
	<div class="about_us_detial">
	胜则举杯相庆，败则拼死相救
	</div>
	<div class="about_us_title">企业口号</div>
	<div class="about_us_detial">
	一心一意，不屈不挠；挑战极限，直到成功
	</div>

<!-- 		<div id="">
		公司始终坚持有所为有所不为的经营原则，秉承以诚信立足市场、以服务赢得发展的经营理念;致力于普惠金融产品的创新，为中国高成长性人群提供方便快捷的金融咨询等相关服务;为个人客户推荐广泛的借款资金渠道，同时进行合理全面的财务规划，并量身设计最优的借款解决方案;另外为客户和合作伙伴提供行业研究、创业咨询、行业培训、渠道拓展、企业融资等一系列增值服务，为他们的成长与发展提供助力。
 易经有云：举而措之天下之民，谓之事业！卓屹金服以帮助客户，为客户提供最好的金融居间服务为使命，全员树立忘己利他的企业价值观，对内则遵循“小善如大恶，大善似无情”的育人观念，作为一家具有社会责任感的企业，卓屹自创办以来，积极参与公益、爱心、慈善事业，以领先行业的金融服务水平，受到客户与合作银行的一致好评。企业管理者专业、高度的金融观点被多家财经媒体刊登转载。未来在金融信息服务领域中，卓屹金服将成为最专业、最信赖的领航者。
	</div> -->
</div>
			</div>

			<div class="about-us-right-4" style="display: none;">
					<div class="about_us_title">国家政策扶持：</div>
	<div class="about_us_detial">
	2008年12月，银监会发布了《关于银行建立小企业金融服务专营机构的指导意见》，一年以后国务院发布了《关于进一步促进中小企业发展的若干意见》，其中第6条指出，商业银行要建立为小企业金融服务的专营机构，逐步提高中小企业中长期贷款的规模和比重。2014年9月，李克强总理在达沃斯论坛上提出了“万众创业、大众创新”，再次彰显了对于对于中小微企业扶持的决心。
	</div>
		<div class="about_us_title">行业蓬勃发展：</div>
	<div class="about_us_detial">
	从数据上看，北京2015年全年民间贷款3649.91亿元，2016年截止6月底，已突破2630亿。卓屹金服预计未来 5 年社会消费水平能够保持 10%的年均增长、消费信贷规模保持年均 20%以上增速，预计到 2020 年消费信贷规模将达到 10.24 万亿元。 。民间金融规模之大，意味着它将成为未来金融业不可小觑的市场，将是未来的“蓝海”。
	</div>
	<div class="about_us_title">优秀的公司管理团队:</div>
	<div class="about_us_detial">
	公司创办者来自投资担保行业领军企业的集团高管，公司管理层多数来自各大银行总行及互联网金融行业知名品牌公司；并且具备敏锐的市场洞察力、快速的市场反应能力，以及丰富的团队创建和领导经验。
	</div>
	<div class="about_us_title">强大的营销能力：</div>
	<div class="about_us_detial">
	一是管理层营销经验丰富，经常性、多形式开展营销分析及培训；全体人员专注于高品质金融服务，实战经验丰富，开发客户能力过硬，能有效解决银行或机构销售团队欠缺的短板；二是公司现有营销团队200人左右，年底达到300人规模，且掌握的优质客户资源丰富，根据当前市场空间，预计公司每年至少可完成200亿元规模；三是公司内部有专业的风险控制团队，能够有效把控风险，竭诚实现与合作伙伴的互利共赢。
	</div>
	</div>
			<div class="about-us-right-8" style="display: none;">
				<div class="about_us_title">招贤纳士</div>
				<div class="zhaoxian">我们是一支在金融领域非常优秀的团队！我们有梦有理想，我们积极乐观，脚踏实地，充满激情！如果你也和我们一样，那么欢迎你加入我们的团队！我们会为你提供，在全新的互联网金融行业里开启个人事业的机会，富有竞争力的薪酬待遇，轻松惬意的工作氛围和充满活力的团队文化，完善的培训体系和更多的晋升机会。</div>
				<div class="zhaoxian">请发送您的简历至<span style="color:#cd9c2d;">zhuoyijinfu@sina.com</span>，标题请注明所申请职位。</div>
				<div class="ZXNS_big_div">
			<div class="ZXNS_title">
				<div class="ZXNS_title">
				<div class="zxns_title_left">招聘专员</div>
				<div class="zxns_title_right"><span>北京</span><span class="bianhuan_1"></span></div>
			</div>
			</div>
		<ul>
			<li>
				<h4>岗位职责：</h4>
			<div>1、确定公司年度招聘计划以及预算，与部门沟通招聘需求负责招聘工作；</br>

2、选择并且维护招聘渠道，并拓展新的招聘渠道，发布招聘广告、参加各种招聘会；</br>

3、组织、安排面试，并且进行人力资源初试；</br>

4、进行薪资谈判、安排候选人入职，以及安排体检；</br>

5、候选人进入公司后，对试用期员工进行试用期沟通；</br>

6、领导交办的其他事情。</div>
			<h4>任职资格</h4>
			<div>
1、大专以上学历，人力资源、行政管理、英语等相关专业；</br>

2、至少一年以上人力资源等相关工作经验；</br>

3、熟练使用办公软件；熟悉人力资源系统以及了解劳动合同法及相关人事政策法规的优先考虑；</br>

4、具备强烈的责任感，事业心，优秀的沟通能力，耐心、细心，以及严谨的逻辑思维能力。
		</div>
			</li>
			
		</ul>
		</div>
		<div class="ZXNS_big_div">
			<div class="ZXNS_title">
				<div class="zxns_title_left">招聘主管</div>
				<div class="zxns_title_right"><span>北京</span><span class="bianhuan_1"></span></div>
			</div>
		<ul>
			<li>
			<h4>岗位职责</h4>	
			<div>1、完善企业招聘制度、招聘体系及招聘流程；</br>

2、分析公司人力资源需求，参与制定招聘计划并组织实施；</br>

3、拟定招聘方案，组织实施招聘活动；</br>

4、甄别、选择、建立和维护合适的招聘渠道；</br>

5、进行工作分析，完成职位说明书以及简历甄别和招聘测试、面试、筛选、录用等；</br>

6、制定招聘预算并控制执行；</br>

7、分析、评估招聘效果；</br>

8、建立后备人才选拔方案和人才储备机制。</div>
<h4>任职资格：</h4>
<div>
	1、人力资源管理或相关专业，大专以上学历；</br>

2、一年以上人力资源管理经验，一年以上招聘工作经验，对该领域及相关领域工作经验者优先；</br>

3、熟悉招聘流程，熟练运用各种招聘工具和手段，丰富的招聘经验及技巧，熟悉国家相关法律法规；</br>

4、具有良好的职业道德和职业操守及良好的团队合作意识；</br>

5、优秀的语言表达及沟通能力，协调能力、亲和力和明锐的洞察能力和分析判断力
</div>
			</li>
			
		</ul>
		</div>
		<div class="ZXNS_big_div">
			<div class="ZXNS_title">
				<div class="zxns_title_left">
				<div>风险控制经理</div><div class="hot_img"></div></div>
				<div class="zxns_title_right"><span>北京</span><span class="bianhuan_1"></span></div>
			</div>
		<ul>
			<li>
				<h4>岗位职责</h4>
<div>
	1、全面负责公司风险管理部的日常管理工作。</br>
2、建立完善公司项目风险管理控制体系，制定项目风险管理政策，完善，执行风险管理措施。</br>
3、审核及评价担保项目，监管项目实施过程和在保项目，提出风险预警，控制项目风险。</br>
4、制定贷后监管措施，制定呆滞贷款，呆账贷款，以核销呆账等清收计划。</br>
5、负责公司风险控制体系的维护和具体运行。</br>
6、参与产品改良，优化产品风险控制措施，优化业务风险控制操作流程。</br>
7、完成公司领导交办的其他工作。</div>
	<h4>任职资格：</h4>
	<div>1、专科及以上学历，金融，审计，财务，经济等相关专业。</br>
2、具有3年以上金融行业风险管理工作经验。</br>
3、对中小企业项目审计，评审，贷后风险管理有丰富的经验。</br>
4、熟悉经济金融政策，法律法规，熟悉各类业务处理流程，有较强的财务分析能力及判断力。</div>
			</li>
			
		</ul>
		</div>
		<div class="ZXNS_big_div">
			<div class="ZXNS_title">
				<div class="zxns_title_left">会计</div>
				<div class="zxns_title_right"><span>北京</span><span class="bianhuan_1"></span></div>
			</div>
		<ul>
			<li>
				<h4>岗位职责</h4>
<div>
	1、审核会计凭证、报表、帐本的合理、合法性、准确性，相关数据的一致性、帐证相等性、帐帐相等性。 </br>
2、负责组织公司KPI年度、月度预算编制以及月度预算分解。</br> 
3、负责预算控制。根据公司预算分解制定内各部门预算，对预算执行情况及ＫＰＩ完成情况进行月度绩效确认评价、考核，向公司经营管理层报告并提出改善方案。 </br>
4、根据收入会计、成本会计的转帐凭证进行登记帐簿，计算损益及帐务处理。</br> 
5、根据总帐及有关帐户编制年度、月度“资产负债表”、“损益表”和“现金流量表”。</br> 
6、负责财务分析，并组织、提供各种月度经营分析报告资料及改善方案。 </br>
7、负责组织、提供销售收入、营业成本、制造、物流、营运资金及其他费用专题性财务分析。</br> 
8、负责制度流程体系管理，组织建立、完善商品利益成本管理体系和管理基准，参加财务管理改善的各种活动。 </br>
9、参与合同审核会签，对合同涉及到的费用进行预控、跟踪。</div>
	<h4>任职资格：</h4>
	<div>1.专科以上学历，性别不限，3年以上企业财务工作经验至少1年以上往来帐会计工作经验；</br>
2.具有金融行业工作经验者优先；</br>
3.基本素质熟悉会计核算和会计法规；熟悉经济法、税法的有关知识；良好的计算能力、统计能力；</br>
4.具备一定的判断力了解本行业、本企业的运作、财务系统；熟练操作财务软件和办公软件；</br>
5.基本能力良好的口头及书面表达能力责任感强、积极主动、有效率；具有较强的分析、人际交往和谈判能力；具备良好的沟通、协调、学习能力富有团队精神；</div>
	</li>
		</ul>
		</div>
		<div class="ZXNS_big_div">
			<div class="ZXNS_title">
				<div class="zxns_title_left">数据统计员</div>
				<div class="zxns_title_right"><span>北京</span><span class="bianhuan_1"></span></div>
			</div>
		<ul>
			<li>
				<h4>岗位职责</h4>
<div>
	  1、销售数据分析的建立，数据分析报表的整合和规范、优化</br>
      2、建立部门每日、周、月、季、年度数据分析报表</br>
      3、研究数据分析的方法，做到报表制作简单、方便、实用</br>
      4、公司整体销售与库存数据分析，提出相关行销改善策略，呈报高管决策</div>
	<h4>任职资格：</h4>
	<div>
		  1.统计、市场营销或相关专业大专以上学历</br>
          2.受过市场营销、产业经济、财务统计等方面的培训者优先</br>
          3.1年以上呼叫中心相关工作经验</br>
          4.对市场营销工作有所了解</br>
          5.熟练掌握统计软件</br>
          6.熟练操作办公软件
	</div>
			</li>
			
		</ul>
		</div>
		<div class="ZXNS_big_div">
			<div class="ZXNS_title">
				<div class="zxns_title_left">P2P业务支持</div>
				<div class="zxns_title_right"><span>北京</span><span class="bianhuan_1"></span></div>
			</div>
		<ul>
			<li>
				<h4>岗位职责</h4>
<div>
	   1、负责公司销售合同等文件资料的管理、归类、整理、建档和保管。</br>
       2、负责各类销售指标的月度、季度统计报表和报告的制作、编写，并随时汇报销售动态。</br>
       3、负责收集、整理、归纳市场行情，提出分析报告。</br>
       4、协助销售经理做好电话来访工作，在销售人员缺席时及时转告客户信息，妥善处理。</br>
       5、协助销售经理做好部门内务、各种内部会议的记录等工作。</br>
       6、完成等到安排的其他工作。</div>
	<h4>任职资格：</h4>
	<div>
		   1、本科及以上学历，金融、财务、管理等相关专业；</br>
           2、熟练掌握个人及家庭理财相关知识和技能；</br>
           3、具有极强的学习、创新及沟通能力；</br>
           4、具有有一定的客户服务经验；</br>
           5、具有良好的公关策划与实施能力；</br>
           6、具有良好的书面表达能力。
	</div>
			</li>
			
		</ul>
		</div>
		<div class="ZXNS_big_div">
			<div class="ZXNS_title">
				<div class="zxns_title_left"><div>客户经理</div><div class="hot_img"></div></div>
				<div class="zxns_title_right"><span>北京</span><span class="bianhuan_1"></span></div>
			</div>
		<ul>
			<li>
				<h4>岗位职责</h4>
<div>
	  1、根据公司提供的客户电话，向客户推广公司的产品服务，以多种形式进行新客户开发；</br>
2、对客户咨询提供专业的答复,并向客户介绍自己产品的优势;</br>
3、通过电话负责客户的约访工作；</br>
4、定期做客户回访,做好老客户维护和再开发</br>
5、协助配合销售团队，创造销售业绩，完成销售经理制定的销售目标。</br>
6、根据一线工作了解到的客户反馈,向公司提出产品及流程优化建议。
</div>
	<h4>任职资格：</h4>
	<div>
1、普通话标准，具有良好的客户沟通、人际交往及维系客户关系的能力</br>
2、具备一定的市场分析及判断能力,良好的客户服务意识</br>
3、诚实守信,为人谦虚、勤奋努力,具有高度的团队合作精神和高度的工作热情;</br>
4、有强烈的创业意识,愿与公司一同发展。</br>
5、熟悉电话销售或客户服务的业务模式，有电话销售经验者优先。

	</div>
	<h4>回报：</h4>
	<div>
1、良好的职业发展：员工职业生涯规划+纵向晋升（客户经理——大客户经理——团队经理）</br>
2、规范的社会保障：按国家规定标准缴纳五险+带薪休假等</br>
3、极具人性化的公司：带薪培训、生日party、节日礼物、带薪病假、年会、不定期员工聚餐、员工内部推荐、内部调岗、应有尽有
	</div>
	</li>
		</ul>
		</div>	
		</div>
		</div>
	</div>

</div>

</div>

</div>
</div>
<div class="load_foot"></div>
</body>
</html>
<script src="/Public/zy/js/zyjf.js" type="text/javascript"></script>
<script type="text/javascript">
	$('.ZXNS_big_div>div').click(function(){
	$(this).parent().siblings().find('.ZXNS_title').removeClass('ZXNS_title_click')		
	$(this).parent().siblings().find('.bianhuan_1').removeClass('zxns_rotate')	
	$(this).next().slideToggle(300);
	$(this).parents('.ZXNS_big_div').siblings().find('ul').slideUp(300)
	$(this).toggleClass('ZXNS_title_click')
    $(this).find('.bianhuan_1').toggleClass('zxns_rotate')
})


$(function(){
	$('.about-us-jianjie li').click(function(){
		var t = $(this).index();
		window.location.href='/index.php/Home/Guanyu/about_us.html?id='+t;
	});
	var page = $('#page').attr('type');
	$('.about-us-right>div').eq(page).show().siblings().hide();
	$('.about-us-jianjie li').eq(page).addClass('red_dhf').siblings().removeClass('red_dhf');
})

// 	function traa(aaa,obj){
// 	$('.about-us-right>div').hide();
// 	$('.'+aaa).show()
// 	$('.about-us-jianjie>li').removeClass('red_dhf')
// 	$(obj).addClass('red_dhf');
// }
	
	
// 	function getParam(pname) { 
//     var params = location.search.substr(1); // 获取参数 并且去掉？ 
//     var ArrParam = params.split('&');
//     if(location.search==''){
//     	return 0;
//     }
//     else if (ArrParam.length == 1) {
//         //只有一个参数的情况 
//         return params.split('=')[1]; 
//     } 
//     else { 
//          //多个参数参数的情况 
//         for (var i = 0; i < ArrParam.length; i++) { 
//             if (ArrParam[i].split('=')[0] == pname) { 
//                 return ArrParam[i].split('=')[1]; 
//             } 
//         } 
//     } 
// }  
//   $(function() { 
//     var mao =getParam("m"); //获取下标值
//     $('.about-us-right>div').eq(mao).show(). siblings().hide()
// $('.about-us-jianjie>li').eq(mao).addClass('red_dhf').siblings().removeClass('red_dhf');

// });

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
	//统计浏览本精英关于我们页面的次数，每次进入或刷新本页面，浏览量+1
	$(function(){
		var id = 15;
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