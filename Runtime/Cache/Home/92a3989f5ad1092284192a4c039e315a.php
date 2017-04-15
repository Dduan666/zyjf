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
		<title>【卓屹金服】</title>
        <link rel="stylesheet" type="text/css" href="/Public/zy/css/inline.css"/>
        <link rel="stylesheet" type="text/css" href="/Public/zy/css/bootstrap-select.min.css"/>
        <style type="text/css">
        	.hiSlider-btn-prev,.hiSlider-btn-next{
        		color: transparent;
        		/*display: none;*/
        	}
        </style>
	</head>
	<body>
		<div class="inline_contain">
		<!--<form>-->
		<div class="inline_con">
			<!--<div class="inline_position">
			<a href="<?php echo U('Index/index');?>">卓屹金服</a><span> > 在线评估</span>
           </div>-->
        <div class="img_bjt">
        	<img src="/Public/zy/pimg/bann.png"/>
        </div>
        
        
        
<div class="inline_step shang">
	<h3 class="style_hei"><img src="/Public/zy/pimg/fcpg.png"/></h3>
<div class="inline_step1">
	<select id="quxian" name="cheng" class="selectpicker bixuan">
		<option value="">请选择区县</option><!--3-->
	</select>	
	<select name="xiaoqu" id="xiaoqu" class="selectpicker bixuan" data-live-search="true">
		<option value="">所在小区</option><!--1-->
	</select>
	</div>

	<div class="inline_step1 " >
<select id="loudong" name="lou" class="selectpicker bixuan">
	<option value="">所在楼栋</option><!--2-->
</select>
<select id="fangwuleixing" name="jia" class="selectpicker bixuan">
	<option value="">房屋类型</option><!--4-->
</select>
</div>

<div class="inline_step1">
<select id="guihua" name="yongtu" class="selectpicker bixuan">
<option value="">房地产用途</option><!--5-->
</select>

<select id="jzlx" name="leixing" class="selectpicker">
<option value="">建筑类型</option>
</select>
</div>

<div class="inline_step1">
	<select id="jzjg" name="jiegou" class="selectpicker">
<option value="">建筑结构</option>
</select>
<select id="hxjg" name="huxing" class="selectpicker">
<option value="">户型结构</option>
</select>
</div>


<div class="inline_step1">
<select id="jzxs" name="xingshi" class="selectpicker">
<option value="">建筑形式</option>
</select>

<select id="chaox" name="chaoxiang" class="selectpicker">
<option value="">朝向</option><!--6-->
</select>
</div>



<div class="inline_step1">
<input type="text" name="cengshu" id="louceng" placeholder="所在楼层" class="bixuan2"/><!--9-->
<input type="text" id="all_louceng" name="zongceng" placeholder="总楼层" class="bixuan2"/><!--10-->
</div>

<div class="inline_step1 inline_spe">
<input type="text" id="year1" name="nianfen" class="Wdate" class="bixuan2" placeholder="请输入竣工日期！"/><!--11-->
<div class="input-group div_wwl1">
  <input type="text" placeholder="请输入面积" name="daxiao" id="mianji" class="form-control bixuan2"/>
  <span class="input-group-addon">平方米</span>
  
</div>

</div>



<div class="inline_step2 inline_button"  onclick="sumbit_a()">
提交
</div>

</div>	


<!--inline_con1现在处于none状态-->
<div class="inline_con1 shang">
	<!--<form>-->
		<h3><img src="/Public/zy/pimg/dear.png"/></h3>
		<div class="green_input">
			<div class="sjhao">手机号</div><div><input type="text" name="phone" id="sjha" value=""  /></div>
		<div class="error1">错误信息提示</div>	
		</div>
	  
    <div class="green_input">
      <div class="yanzehgngma">验证码</div><div><input type="text" name="" class="yzm" id="sjyz" value=""/></div><div class="skyzm_a"><input type = "button" class="code" onclick="dj()" value="发送验证码"/></div>
      <div class="error2">错误信息提示</div>  
    </div>

		
		<div class="form_tj">
			<div class="btn_sub"  onclick="submit_wwl()" />
				<input type="submit" name="" id="inline_submit" value="提交" />
		</div>
			<div class="btn_new1" onclick="new_pg()">重新评估</div>
		</div>
		</div>
 	
 	<!--在这里添加评估结果-->
 	<div class="gai_result shang">
 		<h3><img src="/Public/zy/pimg/result.png"/></h3>
 		
 		<div class="gai_result_common1"><span class="pgwydz">评估物业地址：</span>北京市<span class="quxian"></span><span class="xiaoqu"></span><span class="louhao"></span><span class="mianji"></span></div>
		<div class="class_jieguo">
			<div class="class_jieguo_con">
			<div class="danjia_re"><div class="widt">评估单价(元/平米)</div><div class="result_1"></div></div>
			<div class="zongjiua_re">
				<div class="widt">评估总价(元)</div><div class="result_2"></div></div>
		</div>
		</div>
		<div class="detail_messag">
			<div>
				<span class="title_detail">省&nbsp;市&nbsp;区</span>
				<span class="title_detaila chuanzhi1"></span>
			</div>
			<div>
				<span class="title_detail">面&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;积</span>
				<span class="title_detaila chuanzhi2"></span>
			</div>
			<div>
				<span class="title_detail">所在楼层</span>
				<span class="title_detaila chuanzhi3"></span>
			</div>
			<div>
				<span class="title_detail">房屋朝向</span>
				<span class="title_detaila chuanzhi4"></span>
			</div>
			<div>
				<span class="title_detail">竣工年份</span>
				<span class="title_detaila chuanzhi5"></span>
			</div>
			<div>
				<span class="title_detail">物业类型</span>
				<span class="title_detaila chuanzhi6"></span>
			</div>

			
		</div>
		</div>
		
		<div class="lunbotu_line">
		
		<div class="line_left">
			<div class="telphone">
				<div class="aaa">
				如有问题,请致电:	
				</div>
				<div class="bbb">
				<div><img src="/Public/zy/pimg/shiliang.png"/></div>
					<div class="lin_hei">
						410-900-0188
					</div>
				</div>
				
			</div>
			
			
		</div>
		<div class="line_right">
			
			<div class="zixun_one">
		    
		    <div class="wenzi_intro">
		    	<div class="wenzi_title_jia">
		    		<span class="mamama">精英顾问:</span><span>
		    <ul class="hiSlider hiSlider2">
		    <?php if(is_array($res)): foreach($res as $key=>$rr): ?><li class="hiSlider-item">
		        	<span ><?php echo ($rr['vname']); ?></span>
		        </li><?php endforeach; endif; ?>
		    </ul>
		    		</span>
		    	</div>
		    	<div class="wenzi_title_jia">
		    		<span class="mamama">成交额度:</span><span>
		    <ul class="hiSlider hiSlider2">
		    <?php if(is_array($res)): foreach($res as $key=>$rr): ?><li class="hiSlider-item"><span>
		        	<?php echo ($rr['money']); ?>
		        </span>万</li><?php endforeach; endif; ?>
		    </ul>
		    		</span>
		    	</div>
		    	<div class="wenzi_title_jia">
		    		<span class="mamama">服务评级:</span><span>
		    	<ul class="hiSlider hiSlider2">
		    	<?php if(is_array($res)): foreach($res as $key=>$rr): ?><li class="hiSlider-item">
		        	<?php if($rr["grade"] == null): ?><img src="/Public/zy/img/grade1.png" alt="" />
					<?php elseif($rr["grade"] <= 20): ?>
						<img src="/Public/zy/img/grade5.png" alt="" />
					<?php elseif($rr["grade"] > 20 && $rr["grade"] <= 45): ?>
						<img src="/Public/zy/img/grade4(1).png" alt="" />
					<?php elseif($rr["grade"] > 45 && $rr["grade"] <= 60): ?>
						<img src="/Public/zy/img/grade3(2).png" alt="" />
					<?php elseif($rr["grade"] > 60 && $rr["grade"] <= 85): ?>
						<img src="/Public/zy/img/grade2.png" alt="" />
					<?php elseif($rr["grade"] > 85 && $rr["grade"] <= 100): ?>
						<img src="/Public/zy/img/grade1.png" alt="" /><?php endif; ?>
				</li><?php endforeach; endif; ?>
		    </ul>
		    		</span>
		    	</div>
		    </div>
		    <div class="tupian_intro">
		    	<div class="tu_waibao">
		    		<ul class="hiSlider hiSlider2">
		    	<?php if(is_array($res)): foreach($res as $key=>$rr): ?><li class="hiSlider-item"><img src="/Public<?php echo ($rr['pic']); ?>"/></li><?php endforeach; endif; ?>
		    </ul>
		    		
		    		
		    	</div>
		    	
		    </div>

				
				
				
			</div>
			
			
			
			
			
		</div>
		
		</div>
		
		
		</div>
</div>

	</body>
</html>
<script src="/Public/zy/js/jquery.hiSlider.min.js" type="text/javascript"></script>
<script src="/Public/zy/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Public/zy/js/bootstrap-select.js" type="text/javascript"></script>
<script src="/Public/zy/js/m97/WdatePicker.js" type="text/javascript"></script>
<script type="text/javascript">
$('.hiSlider2').hiSlider({
	        isFlexible: true,
	        mode: 'fade',
	        isSupportTouch: false,
	        isShowTitle: false,
	        isShowPage: false,
	        intervalTime:5000,
	        titleAttr: function(curIdx){
	            return $('img', this).attr('alt');
	        }
	    });















$(function(){
	$('#year1').click(function(){
	WdatePicker({
		dateFmt:"yyyy",
	});
})
})
/* 当前页面高度 */
function pageHeight() {
    return document.body.scrollHeight;
}
/* 当前页面宽度 */
function pageWidth() {
    return document.body.scrollWidth;
}
$(function(){
  $(".quanbing").height(pageHeight());
  $(".quanbing").width(pageWidth());
})

var state;
var state2;
function sumbit_a(){
		$('select').parents('.btn-group').removeClass('tishi')
		$('.bixuan2').removeClass('tishi')
    $('select').each(function (){
        if ($('option:selected', this).val() =='') {
            state=false;
          $(this).parents('.btn-group').addClass('tishi')
            return false;
        }
        else{
        state=true;	
        }
});
if( state==true){
	$('.bixuan2').each(function () {
        if ($( this).val() ==''){
            state2=false;
            $(this).addClass('tishi')
            return false;
        }
        else{
        state2=true;	
        }
});
}
if(state&&state2){
 // 在这里写输入数据库的内容
var Area_nei=$('#quxian>option:checked').html();//a
var project_name=$('#xiaoqu>option:checked').html()//b
var building_name=$('#loudong>option:checked').html();//c
var bui_mianji=$('#mianji').val();//j
var roomtype=$('#fangwuleixing>option:checked').val();//e
var louceng=$('#louceng').val();//g
var all_louceng=$('#all_louceng').val();//h
var year1=$('#year1').val();//i 
var toward=$('#chaox>option:checked').html();//f
var usertype=$('#guihua>option:checked').html();//d
//var TradePrice=$('#cjjg').val();//k
var ArchitecturalForm=$('#jzxs>option:checked').html();
var ArchitecturalStructure=$('#jzjg>option:checked').html();
var ArchitecturalType=$('#jzlx>option:checked').html();
var RoomStructure=$('#hxjg>option:checked').html();
var name = $('#name_w').val();
//money:TradePrice,
var postdata = {cheng:Area_nei,xiaoqu:project_name,lou:building_name,daxiao:bui_mianji,cengshu:louceng,zongceng:all_louceng,nianfen:year1,yongtu:usertype,jia:roomtype,chaoxiang:toward,xingshi:ArchitecturalForm,jiegou:ArchitecturalStructure,leixing:ArchitecturalType,huxing:RoomStructure,cname:name};
$.ajax({
  type : 'post',
  url : '<?php echo U('Home/Ping/index');?>',
  data : postdata,
  success : function(msg){
        $('.inline_step').hide();
        $('.inline_con1').show(); 
  }

})

}
else{
$('.quanbing').css('display','block');
$('.tk_yanz').css('display','block');
lay("请完善您的信息",5)

}
}

  $(function(){
        var postdata = { Apikey: '07b7189c54b0ce1ce78eb048509d479c', Salt: new Date().getTime(), AreaName: 'aaa' };
        $.ajax({
            type: "post",
            url: "http://www.sjviss.com:8033/api/region/get",
            data: postdata,
            success: function (data, status) {
//              console.log("post:" + data);
               var data2=JSON.parse(data);
               var arr=data2.data;
               var str;
               for (var i = 2; i < arr.length; i++) {
                str+='<option value="'+arr[i].id+'">'+arr[i].name+'</option>';
               }
               $('#quxian').append(str);
               $('#quxian').selectpicker('refresh');
               $('#quxian').show();
               
            }
        });
      })
    $('#quxian').change(function(){
    	$('#xiaoqu>option:gt(0)').remove();
    	var AreaID=$(this).val();
        var postdata = { Apikey: '07b7189c54b0ce1ce78eb048509d479c', Salt: new Date().getTime(), AreaID: AreaID };
        $.ajax({
            type: "post",
            url: "http://www.sjviss.com:8033/api/project/get",
            data: postdata,
            success: function (data, status) {
//              console.log("post:" + data);
               var data2=JSON.parse(data);
               var arr=data2.data;
               var str;
               for (var i = 0; i < arr.length; i++) {
                str+='<option value="'+arr[i].projectid+'">'+arr[i].projectname+'</option>';
               }
               $('#xiaoqu').append(str);
                $('#xiaoqu').selectpicker('refresh');
               $('#xiaoqu').show();
                
            }
        });
    })
    $('#xiaoqu').change(function(){
    	$('#loudong>option:gt(0)').remove();
    	var louID=$(this).val();
        var postdata = { Apikey: '07b7189c54b0ce1ce78eb048509d479c', Salt: new Date().getTime(), ProjectID: louID };
        $.ajax({
            type: "post",
            url: "http://www.sjviss.com:8033/api/building/get",
            data: postdata,
            success: function (data, status){
//              console.log("post:" + data);
               var data2=JSON.parse(data);
               var arr=data2.data;
               var str;
               for (var i = 0; i < arr.length; i++) {
                str+='<option value="'+arr[i].buildingid+'">'+arr[i].buildingno+'</option>';
               }
               $('#loudong').append(str);
                 $('#loudong').selectpicker('refresh');
               $('#loudong').show();
            }
        });
    })
  $(function(){
        var postdata = { Apikey: '07b7189c54b0ce1ce78eb048509d479c', Salt: new Date().getTime(), Code: 'HOUSE_TYPE' };
        $.ajax({
           type: "post",
            url: "http://www.sjviss.com:8033/api/datadictionary/get",
            data: postdata,
            success: function (data, status) {
//              console.log("post:" + data);
               var data2=JSON.parse(data);
               var arr=data2.data;
               var str;
               for (var i = 0; i < arr.length; i++) {
                str+='<option value="'+arr[i].Code+'">'+arr[i].Name+'</option>';
               }
               $('#fangwuleixing').append(str);
               $('#fangwuleixing').selectpicker('refresh');
               $('#fangwuleixing').show();
            }
        });
    })
    $(function(){
        var postdata = { Apikey: '07b7189c54b0ce1ce78eb048509d479c', Salt: new Date().getTime(), Code: 'REAL_ESTATE_USE' };
        $.ajax({
           type: "post",
            url: "http://www.sjviss.com:8033/api/datadictionary/get",
            data: postdata,
            success: function (data, status) {
//              console.log("post:" + data);
               var data2=JSON.parse(data);
               var arr=data2.data;
               var str;
               for (var i = 0; i < arr.length; i++) {
                str+='<option value="'+arr[i].Code+'">'+arr[i].Name+'</option>';
               }
               $('#guihua').append(str);
                 $('#guihua').selectpicker('refresh');
               $('#guihua').show();
            }
        });
    })
      
    $(function(){
        var postdata = { Apikey: '07b7189c54b0ce1ce78eb048509d479c', Salt: new Date().getTime(), Code: 'ARCHITECTURAL_TYPE' };
        $.ajax({
           type: "post",
           url: "http://www.sjviss.com:8033/api/datadictionary/get",
           data: postdata,
           success: function (data, status) {
//              console.log("post:" + data);
               var data2=JSON.parse(data);
               var arr=data2.data;
               var str;
               for (var i = 0; i < arr.length; i++) {
                str+='<option value="'+arr[i].Code+'">'+arr[i].Name+'</option>';
               }
               $('#jzlx').append(str);
                 $('#jzlx').selectpicker('refresh');
               $('#jzlx').show();
            }
        });
    })
      $(function(){
        var postdata = { Apikey: '07b7189c54b0ce1ce78eb048509d479c', Salt: new Date().getTime(), Code: 'ARCHITECTURAL_STRUCTURE' };
        $.ajax({
           type: "post",
            url: "http://www.sjviss.com:8033/api/datadictionary/get",
            data: postdata,
            success: function (data, status) {
//              console.log("post:" + data);
               var data2=JSON.parse(data);
               var arr=data2.data;
               var str;
               for (var i = 0; i < arr.length; i++) {
                str+='<option value="'+arr[i].Code+'">'+arr[i].Name+'</option>';
               }
               $('#jzjg').append(str);
               $('#jzjg').selectpicker('refresh');
               $('#jzjg').show();
            }
        });
    })  
 $(function(){
        var postdata = { Apikey: '07b7189c54b0ce1ce78eb048509d479c', Salt: new Date().getTime(), Code: 'ROOM_STRUCTURE' };
        $.ajax({
           type: "post",
            url: "http://www.sjviss.com:8033/api/datadictionary/get",
            data: postdata,
            success: function (data, status) {
//              console.log("post:" + data);
               var data2=JSON.parse(data);
               var arr=data2.data;
               var str;
               for (var i = 0; i < arr.length; i++) {
                str+='<option value="'+arr[i].Code+'">'+arr[i].Name+'</option>';
               }
               $('#hxjg').append(str);
                 $('#hxjg').selectpicker('refresh');
               $('#hxjg').show();
            }
        });
    })      
  $(function(){
        var postdata = { Apikey: '07b7189c54b0ce1ce78eb048509d479c', Salt: new Date().getTime(), Code: 'ARCHITECTURAL_FORM' };
        $.ajax({
           type: "post",
            url: "http://www.sjviss.com:8033/api/datadictionary/get",
            data: postdata,
            success: function (data, status) {
//              console.log("post:" + data);
               var data2=JSON.parse(data);
               var arr=data2.data;
               var str;
               for (var i = 0; i < arr.length; i++) {
                str+='<option value="'+arr[i].Code+'">'+arr[i].Name+'</option>';
               }
               $('#jzxs').append(str);
                 $('#jzxs').selectpicker('refresh');
               $('#jzxs').show();
            }
        });
    })    
   $(function(){
        var postdata = { Apikey: '07b7189c54b0ce1ce78eb048509d479c', Salt: new Date().getTime(), Code: 'MAIN_TOWARDS' };
        $.ajax({
           type: "post",
            url: "http://www.sjviss.com:8033/api/datadictionary/get",
            data: postdata,
            success: function (data, status) {
//              console.log("post:" + data);
               var data2=JSON.parse(data);
               var arr=data2.data;
               var str;
               for (var i = 0; i < arr.length; i++) {
                str+='<option value="'+arr[i].Code+'">'+arr[i].Name+'</option>';
               }
               $('#chaox').append(str);
                 $('#chaox').selectpicker('refresh');
               $('#chaox').show();
            }
        });
    })


function submit_wwl(){
  var Area_nei=$('#quxian>option:checked').html();//a
  var project_name=$('#xiaoqu>option:checked').html()//b
  var building_name=$('#loudong>option:checked').html();//c
  var bui_mianji=$('#mianji').val();//j
  var roomtype=$('#fangwuleixing>option:checked').val();//e
  var louceng=$('#louceng').val();//g
  var all_louceng=$('#all_louceng').val();//h
  var year1=$('#year1').val();//i 
  var toward=$('#chaox>option:checked').html();//f
  var usertype=$('#guihua>option:checked').html();//d
//var TradePrice=$('#cjjg').val();//k
  var ArchitecturalForm=$('#jzxs>option:checked').html();
  var ArchitecturalStructure=$('#jzjg>option:checked').html();
  var ArchitecturalType=$('#jzlx>option:checked').html();
  var RoomStructure=$('#hxjg>option:checked').html();
  var cname = $('#name_w').val();
  var phone = $('#sjha').val();
//money:TradePrice,
  var acode = $('#sjyz').val();
  
  $.ajax({
    type : 'post',
    url : '<?php echo U('Home/Pg/index');?>',
    data : {acode:acode},
    success : function(msg){
      
       if(msg == 1)
      {
		    lay("手机验证码不能为空",5);
        return false;
      }else if(msg == 2)
       {
       	lay("手机验证码错误,重新获取验证码",5);
        return false;
       }else{
        var wuyedizhi;

var sjha=$('#sjha').val();
var reg = /^[1][3578][0-9]{9}$/;
var Area=$('#quxian>option:checked').val();//a
var Area_nei=$('#quxian>option:checked').html();//a
var project=$('#xiaoqu>option:checked').val();//b
var project_name=$('#xiaoqu>option:checked').html()//b
var building=$('#loudong>option:checked').val();//c
var building_name=$('#loudong>option:checked').html();//c
var bui_mianji=$('#mianji').val();//j
var roomtype=$('#fangwuleixing>option:checked').val();//e
var louceng=$('#louceng').val();//g
var all_louceng=$('#all_louceng').val();//h
var year1=$('#year1').val();//i 
var toward=$('#chaox>option:checked').val();//f
var toward_name=$('#chaox>option:checked').html();//f
var usertype=$('#guihua>option:checked').val();//d
//var TradePrice=$('#cjjg').val();//k
//下面是非必选
var ArchitecturalForm=$('#jzxs>option:checked').val();
var ArchitecturalStructure=$('#jzjg>option:checked').val();
var ArchitecturalType=$('#jzlx>option:checked').val();
var ArchitecturalType_name=$('#jzlx>option:checked').html();
var RoomStructure=$('#hxjg>option:checked').val();
//TradePrice:TradePrice,
var postdata = {Apikey: '0ca175b9c0f726a831d89',Salt:new Date().getTime(),AreaID: Area,AreaName:Area_nei,ProjectID:project,ProjectName:project_name,BuildingID:building,BuildingNo:building_name,Buildingarea:bui_mianji,Floor:louceng,TotalFloor:all_louceng,CompletionDate:year1,UseType:usertype,RoomType :roomtype,Towards:toward,ArchitecturalForm:ArchitecturalForm,ArchitecturalStructure:ArchitecturalStructure,ArchitecturalType:ArchitecturalType,RoomStructure:RoomStructure};
//console.log(postdata)
if(sjha!=''||reg.test(sjha)){
           $.ajax({
               type: "post",
               url: "http://www.sjviss.com:8033/api/appraisal/get",
               data: postdata,
               success: function (data, status){
                $('.result_1').html('')
                  $('.result_2').html('')
                 var data2=JSON.parse(data);
                 var arr=data2.data;
                 var ZYpgjg;
                 ZYpgjg=arr.AppraisalPrice;
                ZYpgjg=ZYpgjg.toFixed(2);             //单价（元/平米）
                //在这里显示结果
                $('.quxian').html(Area_nei);
                $('.xiaoqu').html(project_name);
                $('.louhao').html(building_name)
                $('.result_1').html(ZYpgjg);
                $('.mianji').html(bui_mianji+'㎡'); //面积
                wuyedizhi=Area_nei+project_name+building_name;      //拼接的地址
                console.log(wuyedizhi);

             var total_money=ZYpgjg*bui_mianji*1;         //总价
             total_money=total_money.toFixed(2);
             $('.result_2').html(total_money);
             $('.chuanzhi1').html('北京市'+Area_nei);
             $('.chuanzhi2').html(bui_mianji+'㎡');
             $('.chuanzhi3').html(louceng);
              $('.chuanzhi4').html(toward_name);
             $('.chuanzhi5').html(year1);
             $('.chuanzhi6').html(ArchitecturalType_name);
         
               //在这里显示结果
             $('.inline_step').hide();
             $('.inline_con1').hide();
             $('.gai_result').show();
             var pdata = {cheng:Area_nei,xiaoqu:project_name,lou:building_name,daxiao:bui_mianji,cengshu:louceng,zongceng:all_louceng,nianfen:year1,yongtu:usertype,jia:roomtype,chaoxiang:toward,xingshi:ArchitecturalForm,jiegou:ArchitecturalStructure,leixing:ArchitecturalType,huxing:RoomStructure,cname:cname,phone:phone,price:ZYpgjg};
             $.ajax({
                type : 'post',
                url : '<?php echo U('Home/Pg/index2');?>',
                data : pdata,
                success : function(msg){
                	
                }
              });
              $.ajax({
                type : 'post',
                url : '<?php echo U('Home/Pg/fs');?>',
                data : {wuye:wuyedizhi,dan:ZYpgjg,zong:total_money,phone:phone},
                success : function(dd){
                 lay("稍后我们会把评估结果发送至您的手机,请注意查收",1)
                }
              })


               },
              error:function(){
            lay("对不起!出现了未知错误",5)
           }
   })



 }




       }
    }

  })
}
  function new_pg(){
  	alert(111)
     $('.inline_step').show();
     $('.inline_con1').hide()
  }

var countt=60;//发送验证码
var codea;
	var aab=document.querySelector('.code');
	function dj2(){
		if(countt>0){
			countt--;
			aab.value=countt+'s后再次获取';
			aab.setAttribute('disabled','disabled');
			setTimeout(dj2,1000);
		}
		else{
			aab.value='重新获取验证码';
			countt=60;
			aab.removeAttribute('disabled');
		}
	}
	function dj(){
    var telphone = $('#sjha').val();
    $.ajax({
      type : 'get',
      url : '<?php echo U("Home/Ping/add");?>',
      data : {tel:telphone},
      success : function(data){
        if(data == 2){
        	 lay("手机号不能为空",3)
        }else if(data == 3){
        	 lay("请输入正确手机号",3)
        }
        else{
        	 lay("验证码发送成功",1)
		  dj2();
        }
      }
    })
  }
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