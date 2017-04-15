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
		<link rel="stylesheet" type="text/css" href="/Public/zy/css/animate.min.css"/>
      <!--  <link rel="stylesheet" href="/Public/zy/css/main.css" />-->
        <title>卓屹金服</title>
 
	</head>
	<body>
		<!--导航结束-->
		<!--<div class="wwldhf">-->
			<div id="bgz">
				
			
			<div class="lunbotu_wai">
	    <div class="lunbotu" >
           
	    
	    </div>
            </div>
		<!--服务种类-->
		<div class="daikuanzl">
			<div class="daikuanzi_one">
			<div class="zy_baowei">
				<div id="gwzl_wapper">
				
					<div class="title">服&nbsp;务&nbsp;种&nbsp;类</div>
					<div class="eng_fu">Service category</div>
				</div>
				
				<div class="new_list_fuwu">
					<a href="javascript:void(0)"><img src="/Public/zy/img/20.png"/></a>
					<a href="javascript:void(0)"><img src="/Public/zy/img/23.png"/></a>
					<a href="javascript:void(0)"><img src="/Public/zy/img/24.png"/></a>
					<a href="javascript:void(0)"><img src="/Public/zy/img/25.png"/></a>
					<a href="javascript:void(0)"><img src="/Public/zy/img/26.png"/></a>
					<a href="javascript:void(0)"><img src="/Public/zy/img/27.png"/></a>
					
				</div>
				
			</div>
			</div>
			</div>
		<!--</div>-->
		<div class="sucess_case">
		<div class="sucess_case_con">

		<div class="sucess_detail">
			<div class="sucess_detail_left" id="sucess_detail_le">
<div class="sucess_case_xin">
	<div class="sucessCase_le">
		<div class="sucess_case_xin_top">
			<img src="/Public/zy/img/lansede.jpg"/>
			<div class="cace_big_title">
				[通州批贷七成案例]
			</div>
		</div>
		<a href="<?php echo U('Home/Gs/sucess_case1',array('id'=>$go[0]['id']));?>">
		<div class="sucess_case_xin_center">
			<div>
			
				<?php echo ($con); ?>...
			
		
			</div>
			
		</div>
	<div class="sucess_case_xin_bottom">
	<a href="<?php echo U('Home/Gs/sucess_case1',array('id'=>$go[0]['id']));?>"><span class="xqxq">详情</span><span class="yanj">>></span></a>
	</div>
		</a>
	</div>
	<div class="sucessCase_ri">
		<div class="sucess_case_xin_top">
			<img src="/Public/zy/img/lvsede.jpg"/>
			<div class="cace_big_title">
				[东城批贷八成案例]
			</div>
		</div>
		<a href="<?php echo U('Home/Gs/sucess_case1',array('id'=>$go[1]['id']));?>">
		<div class="sucess_case_xin_center">
			<div>
				
				<?php echo ($go[8]['content']); ?>...
			  
			</div>
		</div>
		<div class="sucess_case_xin_bottom"><a href="<?php echo U('Home/Gs/sucess_case1',array('id'=>$go[1]['id']));?>"><span class="xqxq">详情</span><span class="yanj">>></span></a></div>
		</a>
	</div>
</div>

</div>
<!--<div class="sucess_more"><a href="<?php echo U('Home/Gs/company_case');?>">更多>></a></div>-->
</div>	
</div>
		</div>	
		<!--<div class="form_add">
			<div class="form_add_one">
	    	
		    <div class="btn_click">
			    <a href="<?php echo U('Login/register');?>">立即注册</a>
			    <a class="margin-ri" href="<?php echo U('Jy/daishenqing');?>">在线预约</a>
		    </div>

		    </div>
	    </div>-->
	    
	    
	    
	    
	    <div class="form_add_other">
	    	<div class="form_add_other_one">
	    	<div id="other_one">
	    		<img src="/Public/zy/img/test.jpg"/>
	    		
	    	</div>
		    <div class="btn_click_other">
			    <a href="<?php echo U('Login/register');?>">立即注册</a>
			    <a class="margin-ri" href="<?php echo U('Jy/daishenqing');?>">在线预约</a>
		    </div>

		    </div>
	    </div>

		<!--服务种类-->
		<!--销售精英**************-->
	<div class="zy_sales">
	<div class="zy_sales_con">
	<div id="wrapper">
					<div class="title">精&nbsp;英&nbsp;顾&nbsp;问</div>
					<div>Consultant</div>
				</div>
<div class="sales_show">

<?php if(is_array($res)): $i = 0; $__LIST__ = array_slice($res,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/Jy/consultant_2',array('id'=>$v['id']));?>">
	<!--***********-->
	
	<div class="sales_img_dhf">
		<!-- <img src="/Public/zy/img/zhaopian1.png"/> -->
		<img src="/Public/<?php echo ($v['pic']); ?>" />
	</div>
	<div class="wenziqiehuan">
		<!--<div class="wenziqiehuan_nei">
			<div class="weilei_dhf">个人介绍：</div>
			<div class="weilei_dhf1"><?php echo ($v["self"]); ?></div>
		</div>-->
		<div class="wenziqiehuan_nei">
			<div class="weilei_dhf">行事风格：</div>
			<div class="weilei_dhf1"><?php echo ($v["style"]); ?></div>
		</div>
			<div class="wenziqiehuan_nei">
			<div class="weilei_dhf">擅长业务：</div>
			<div class="weilei_dhf1">
				<?php echo ($v["business"]); ?>
			</div>
		</div>
		</div>
	<div class="sales_wenzi_dhf">
		<div class="sales_weniz_nei name">
			<div class="top_onewwl"><!--<span class="top_one_xing">姓</span><span class="top_one_ming">名：</span>-->部门经理：</div>
			<div class="top_two"><?php echo ($v["vname"]); ?></div>
		</div>
		<div class="sales_weniz_nei edu">
		<div class="top_one">成交额度：</div>
			<div class="top_two"><span><?php echo ($v["money"]); ?></span>万</div>	
		</div>
		<div class="sales_weniz_nei atar">
		<div class="top_one">服务评级：</div>
			<div class="top_two">
				<?php if($v["grade"] == null): ?><img src="/Public/zy/img/grade1.png" alt="" />
				<?php elseif($v["grade"] <= 20): ?>
					<img src="/Public/zy/img/grade5.png" alt="" />
				<?php elseif($v["grade"] > 20 && $v["grade"] <= 45): ?>
					<img src="/Public/zy/img/grade4(1).png" alt="" />
				<?php elseif($v["grade"] > 45 && $v["grade"] <= 60): ?>
					<img src="/Public/zy/img/grade3(2).png" alt="" />
				<?php elseif($v["grade"] > 60 && $v["grade"] <= 85): ?>
					<img src="/Public/zy/img/grade2.png" alt="" />
				<?php elseif($v["grade"] > 85 && $v["grade"] <= 100): ?>
					<img src="/Public/zy/img/grade1.png" alt="" /><?php endif; ?>
			</div>	
		</div>	
		</div>
	
		<!--******************-->
</a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
	</div>	
	</div>	

		<!--成功案例**************-->

		<div class="zyjf_bottom_dhf">
			<!--删除部分在这重新写回-->
			<div id="wrapper">
					<div class="title" style="color:#ffffff;">合&nbsp;作&nbsp;机&nbsp;构</div>
					<div style="color:#ffffff;">Cooperative Organization</div>
				</div>
			<div class="hzjg_dhf">
			<div class="hzjg1"></div>
			<div class="hzjg2"></div>
			<div class="hzjg3"></div>
			<div class="hzjg4"></div>
			<div class="hzjg5"></div>
			<div class="hzjg6"></div>
			<div class="hzjg7"></div>
			<div class="hzjg8"></div>
			<div class="hzjg9"></div>
			<div class="hzjg10"></div>
			<div class="hzjg11"></div>
			<div class="hzjg12"></div>
			<div class="hzjg13"></div>
			<div class="hzjg14"></div>
			<div class="hzjg15"></div>
			<div class="hzjg16"></div>
			<div class="hzjg17"></div>
			<div class="hzjg18"></div>
			</div>
		</div>
	<!--	</div>-->
		<!--底部-->
		</div>
</body>		
</html>



 <script src="/Public/zy/js/zyjf.js" type="text/javascript" charset="utf-8"></script>
<script src="/Public/zy/js/picMove.js"></script>
<script type="text/javascript">
 $(document).ready(function () {
        var list = [{
            imgUrl: '/Public<?php echo ($dl[0]["pic"]); ?>',
            href: '#'
            }, {
            imgUrl: '/Public<?php echo ($dl[1]["pic"]); ?>',
            href: '#'
            }, {
            imgUrl: '/Public<?php echo ($dl[2]["pic"]); ?>',
            href: '#'
            }, {
            imgUrl: '/Public<?php echo ($dl[3]["pic"]); ?>',
            href: '#'
            }]
        var wid=$('.lunbotu').width;
        var hei=$('.lunbotu').height;
        
        $('.lunbotu').fade({
            url: list,
            boxWid:wid,
            boxHei:hei
        }).css({
            margin:'0 auto'
        })
    })
$('.meng_more').click(function(){
//	$(this).toggleClass('meng_more_zhuang')
$('.sales_show_mengceng').hide()
var h_header=$('.sales_show_zhanshi').css("height","auto").height();
//$('.sales_show_zhanshi').show()
$('.sales_show_zhanshi').animate({height:h_header},3000);
//$('.sales_show_zhanshi').slideDown(1000);
//$('.sucess_case').slideDown(1000)

})
// if(navigator.appName=="Microsoft Internet Explorer"){
// 	$('.daikuanzl').hide();
// 	$('.IE_daikuanzl').show()
// }else{
//$('.daikuanzl').show();
// 	$('.IE_daikuanzl').hide()
// }

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