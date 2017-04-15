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
		<title></title>
		<style type="text/css">
		
*,input{
			margin: 0;padding: 0;
		}
			.abjt{
				position: relative;z-index: -1;
				width: 1422px;min-width: 1422px;margin: 0 auto;
			}
			.abjt>img{
				width: 100%;
			}
			#fwzl_big{width: 100%;min-width: 1422px;}
			.fuwuzla{
				width: 1200px;margin: -75px auto 0;
			}
			.fuwuzla .title,.fuwuzla a{
			color:#666666 ;font-size: 14px;text-decoration: none;
			}
			.contain_fwzl{margin-top: 10px;background-color:#FFFFFF!important;
				padding:60px 100px;box-shadow: 0 0 10px #666 ;overflow: hidden;
			}
			.Fwzl_title{
				position: relative;
				width:936px;text-align: center;margin:0 auto 30px ;
			    background-position:center; line-height: 30px;color: #4FC3AE;font-size: 30px;
				background-image:url(img/title.png);background-repeat: no-repeat;
			}
			/*.detail_zl{
				display: flex;display: -webkit-flex;  justify-content: space-between;
				width: 100%;overflow: hidden;flex-wrap:wrap;
			}
			.detail_zl>div{
				
				width: 450px;float: left;
			}*/
			.two_detail{
				width: 100%;overflow: hidden;
			}
			.two_detail_left,.two_detail_right{
				width: 450px;float: left;
			}
			.two_detail_right{
				float: right;
			}
			.Zyjf_detail_title{
				color: #4fc3ae;
                font-size: 16px;
                margin-bottom: 10px;
                }
            .Zyjf_detail_neiy{
            	line-height:35px;
            color: #6b6b6b;font-size: 15px;   
            min-height: 40px;margin-bottom:25px; 	
                }
            .detail_more{
            	float:right;
            	transition: all 0.5s;
            	border: 1px solid #ce9c2d;
              background: #ce9c2d;color: #FFFFFF;text-align: center;line-height: 34px;
              width:100px;border-radius: 34px;  cursor: pointer;	
                margin-top:10px ;
                }
            .detail_more:hover{
            	color: #ce9c2d;background: #FFFFFF;
            }
            .minheight{
            	min-height:400px;
            }
              /*计算器的css由此开始*/  
            .contain_calcuter{
              	text-align: center;
              	width:100%;padding: 90px 100px 40px;box-sizing: border-box;
              	box-shadow: 0 0 10px #666666 ;margin-top:15px;
              	margin-bottom:15px; background-color:
              	#ffffff;
              }
            h2.text_clor{
              	color:#5d5d5d ;
              	font-size: 24px;
              	font-weight: normal;
              	letter-spacing:21px;
              	line-height: 40px;
              }
            h4.text_clor_one{
              	font-size: 16px;
              	line-height: 30px;
              	color: #979797;
              	letter-spacing: 1px;
              	font-weight: normal;
              	margin-bottom: 25px;
              }
            .input_shuru{
              	color:#979797;
              	margin-bottom: 10px;font-size: 0px;
              
              }
            .input_shuru .span_one{
              	letter-spacing:1px;
              	display: inline-block;text-align: left;
              	font-size: 20px;width:280px;line-height: 40px;
              }
            .input_shuru .span_two{
              	display: inline-block;
              	width: 50px;font-size: 20px;
              	line-height: 40px;
              }
            .input_shuru select{padding-left:5px;
              	border: 1px solid #D5D5D5;
              	width:112px;height:35px;
              	color: #979797;font-size:18px;
              }
            .input_shuru input{
                box-sizing: border-box;
                border: 1px solid #D5D5D5;padding: 10px 12px;
              	width:112px;height:35px;font-size: 18px;
              }
            .calcult_js{border: 1px solid #4FC3AE;box-sizing: border-box;line-height: 46px;
              	width: 154px;background-color:#4FC3AE;text-align: center;border-radius: 40px;
              	cursor: pointer;color: #FFFFFF;margin:50px auto;font-size: 24px;
              	transition: all 0.5s;
              }
            .calcult_js:hover{
              	color: #4FC3AE;background: #FFFFFF;
              }
              /*计算器结果css*/
            .jsq_result{
             	display: none;
             }
            .jaq_result_total{
             	width: 500px;
             	font-size:24px;margin: 20px auto;
             }
            .jsq_result_rm{
            	color: #333333;
            	width:150px;display: inline-block;font-size:26px;
            }
            .jsq_danwei,.jsq_result_num{
           	color: #13aeb3;
           }
            .jsq_danwei{
            display: inline-block;
       	width: 50px!important;
       }
            .jsq_result_num{
          display: inline-block;
           }
           span.dian{
           	letter-spacing: 17px;
           }
           .shenyue_new,.zhidian_new{
           	line-height: 28px;text-align: center;
	       width:450px;margin: 50px auto 20px;
	       font-size:18px;
              }



		</style>
	</head>
	<body>
		<div class="abjt"><img src="/Public/zy/img/banner.png"/></div>
		<div id="fwzl_big">
			
		
		<div class="fuwuzla">
			<!-- <div class="title"><a href="">卓屹金服</a> > 服务种类</div> -->
			<div class="contain_fwzl">
              <div class="Fwzl_title"><?php echo ($data['product']); ?></div>
				<!--<div class="detail_zl">
					<div>
						<img src="img/a.png"/>
					</div>
					<div >
						<img src="img/a.png"/>
					</div>
					<div style="height: 100px;">ddd</div>
					<div style="height: 20px;">ddd</div>
					<div style="height: 50px;">ddd</div>
					<div>ddd</div>
				<div>
						<img src="img/b.png"/>
					</div>
					<div >
						<img src="img/b.png"/>
					</div>	
					
				</div>
			</div>-->
			<div class="two_detail">
				<div class="two_detail_left">
					<div><img src="/Public/zy/img/a.png"/></div>
					<div class="minheight height1">
						<div class="Zyjf_detail_title">
							贷款额度
						</div>
						<div class="Zyjf_detail_neiy">
							<?php echo ($data['money']); ?>万
						</div>
						<div class="Zyjf_detail_title">
							贷款期限
						</div>
						<div class="Zyjf_detail_neiy">
							<?php echo ($data['year']); ?>年
						</div>
						<div class="Zyjf_detail_title">
							准入条件
						</div>
						<div class="Zyjf_detail_neiy">
							<?php echo ($data['conts']); ?>
						</div>
						<div class="Zyjf_detail_title">
							还款方式
						</div>
						<div class="Zyjf_detail_neiy">
						
							<?php if(strtoupper($data['mode']) == '1'): ?>等额本金
							<?php elseif(strtoupper($data['mode']) == '2'): ?>
								等额本息
							<?php elseif(strtoupper($data['mode']) == '3'): ?>
								先息后本<?php endif; ?>
						</div>
						
					
					</div>
					<!-- <div class="detail_more">
						more
					</div> -->
					
					

					
					
					<div><img src="/Public/zy/img/b.png"/></div>
				</div>
				<div class="two_detail_right">
					<div><img src="/Public/zy/img/a.png"/></div>
					<div class="minheight height2">
					<?php if(is_array($pc)): foreach($pc as $key=>$p): ?><div class="Zyjf_detail_title">
							<?php echo ($p['like']); ?>
						</div>
						<div class="Zyjf_detail_neiy">
							<?php echo ($p['content']); ?>
						</div><?php endforeach; endif; ?>	
					
					</div>
					<!-- <div class="detail_more">
						more
					</div> -->
					<div><img src="/Public/zy/img/b.png"/></div>
				</div>
			</div>
			
			
		</div>	
		
		
	<div class="contain_calcuter">
		<h2 class="text_clor">计算器，帮助您估算贷款所需支出</h2>
		<h4 class="text_clor_one">Calculator/to help you estimate the cost of loans</h4>
			<div>
			<div class="input_shuru">
				<span class="span_one">您期望的贷款金额是多少呢？</span>
				<input type="text" name="" id="dai_jine" value="" />
				<span class="span_two">万元</span>
			</div>
		    <div class="input_shuru">
				<span class="span_one">您期望的贷款年限是多久呢？</span><select name="" id="dai_nian">
					<option value="0" selected="selected">贷款年限</option>
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
				</select><span class="span_two">年</span>
			</div>
				<div class="calcult_js calcult_one">计算</div>
				
			</div>
			<div class="jsq_result">
			<div class="jaq_result_total">
				<span class="jsq_result_rm">每月还款额</span>
				<span class="jsq_result_num">
					<span class="min_money"></span>--<span class="max_money"></span>
				</span>
				<span class="jsq_danwei">RM</span>
			</div>
			<div class="jaq_result_total">
				<span class="jsq_result_rm">年利率</span>
				<span class="jsq_result_num">
					<span class="min_nian_lilv"></span>--<span class="max_nian_lilv"></span>
				</span><span class="jsq_danwei">%</span>
			</div>	
			
			
			<div class="shenyue_new">在审阅您的详细资料后，我们能为您计算更加准确的 
利率以及支出</div>

<div class="calcult_js tiao">
					预约此贷款
				</div>
				<div class="zhidian_new">
					—— 或致电 010-56291092
				</div>
			</div>
			
			
			
		</div>
		</div>
		</div>

	</body>
	</html>
 <!-- <script src="/Public/zy/js/zyjf.js" type="text/javascript"></script> -->
	<script type="text/javascript">
	$(function(){
var _height1=$(".height1").height();
var _height2=$(".height2").height();
var bodyHeight = Math.max(_height1,_height2);
$(".minheight").css("height",bodyHeight);
$(".tiao").click(function(){
	location.href="<?php echo U('Jy/daishenqing');?>";
})

	})
		

$(".calcult_one").click(function(){
			// var tex=/^[0-9]*$/;//只有数字的正则表达式
		var tex=/^[+\-]?\d+(.\d+)?$/;//数字包括小数点
		var money=$('#dai_jine').val();
	    var month=$('#dai_nian>option:checked').val();
	    if(tex.test(money)==true&&month!=0&&money!=0){
	    	 res()
	    }
	    else{
	    lay("请完善信息",5)	
	    }
		})
		
	function res(){
	$(".calcult_one").html("重新计算");
	$(".jsq_result").slideDown('slow');
	var money=$('#dai_jine').val();
	var month=$('#dai_nian>option:checked').val();
	money=money*10000;
	var shangfu=0;
	var min_nian_lixi;
	var max_nian_lixi;
	if(month<=12){
		min_nian_lixi=4.35;
		max_nian_lixi=min_nian_lixi*(1+shangfu)
	}
	else if(month>12&&month<=60){
		min_nian_lixi=4.75;
		max_nian_lixi=min_nian_lixi*(1+shangfu)
	}
	else{
		min_nian_lixi=4.9;
		max_nian_lixi=min_nian_lixi*(1+shangfu)
	}
	var min_lilv=min_nian_lixi/1200;
	var max_lilv=max_nian_lixi/1200;
	$('.min_nian_lilv').html(min_nian_lixi.toFixed(2));
	$('.max_nian_lilv').html(max_nian_lixi.toFixed(2));
	//在里面写计算结果
	var benjin=money/month;
   //已归还本金累计 benadd
	var benadd;
	var every_yuegong;
	var every_yuegone1;//每月月供的最大值
	for (var i = 1; i<=month; i++){
	benadd=benjin*(i-1);
	every_yuegong=benjin*1+(money-benadd)*min_lilv;
	every_yuegong1=benjin*1+(money-benadd)*max_lilv;
	every_yuegong=every_yuegong.toFixed(2);
	every_yuegong1=every_yuegong1.toFixed(2)
if(i==month){
	$('.min_money').html(every_yuegong)
}
if(i==1){
	$('.max_money').html(every_yuegong1)
}
}


	}


	</script>
<script>
	//统计浏览本所有服务页面的次数，每次进入或刷新本页面，浏览量+1
	$(function(){
		var id = 16;
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