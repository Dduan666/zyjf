<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
		<title>【卓屹金服】</title>
		<link rel="stylesheet" type="text/css" href="/Public/zynw/css/b_head.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/zynw/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/zynw/css/jquery-ui.css"/>
		
    	<script src="/Public/zynw/js/jquery.js" type="text/javascript"></script>
    	<script src="/Public/zynw/js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="/Public/zynw/js/html5shiv.js" type="text/javascript"></script>
        <script src="/Public/zynw/js/respond.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="head">
		   <div class="head_back">
		   	<div class="head_logo">
		   		<img src="/Public/zynw/img/logo.png"/>
		   	</div>
				<div class="bl-vernav-warp">
			  <div class="auxline"></div>
			<ul class="bl-vernav vernav-level">
				<li class="cur">
					<?php if(session('user_business.rank') == 1): ?><a class="one" href="<?php echo U('Html/index');?>" target="_parent">业务管理</a>
					<?php else: ?>
						<a class="one" href="javascript:void(0);" onclick="quan()" target="_parent">业务管理</a><?php endif; ?>
				</li>
				<li onclick="chuxian()">
					<?php if(session('user_business.rank') == 2): ?><a class="one" href="<?php echo U('Feng/fengkong_main');?>" target="_parent">风控管理</a>
					<?php else: ?>
						<a class="one" href="javascript:void(0);" onclick="xian()" target="_parent">风控管理</a><?php endif; ?>
				
				</li>
				<li>
					<a class="one" target="_parent">人力资源</a>
				</li>
				<li>
					<a class="one" target="_parent">财务会计</a>
				</li>
				<li>
					<a class="one" target="_parent">会议安排</a>
				</li>
								<li>
					<a class="one" target="_parent">统计数据</a>
				</li>
				<!-- <li>
					<a class="one" target="_parent">提醒</a>
				</li> -->
				<li>
					<?php if(session('user_business.rank') == 1): ?><a class="one" target="_blank" 
						href="http://web.zhuoyijinrong.com?id=<?php echo session('user_business.id');?>&name=<?php echo session('user_business.name');?>&token=<?php echo session('user_business.token');?>">考试与培训</a>
					<?php else: ?>
						<a class="one" target="_blank" 
						href="http://web.zhuoyijinrong.com/Exam?id=<?php echo session('user_business.id');?>&name=<?php echo session('user_business.name');?>&token=<?php echo session('user_business.token');?>">考试与培训</a><?php endif; ?>
					
				</li>
			</ul>
		</div>
		<div class="head_right">
			<div></div>

			<div class="zhu_btn btn_a" onclick="forget()"> <a>重置密码</a></div>
			<div class="den_btn btn_a"><a href="<?php echo U('Ain/Login/loginOut');?>">退出</a></div>

			<!-- <div class="den_btn btn_a"><a>修改密码</a></div>
			<div class="zhu_btn btn_a"> <a href="<?php echo U('Admin/Login/loginOut');?>">退出</a></div> -->
		</div>
		<div style="clear: both;"></div>
       </div>
       </div>
	</body>
</html>
<script type="text/javascript">
			$(function() {
				var verNav = $(".bl-vernav");
					line = verNav.siblings(".auxline")
				curY = verNav.children("li.cur").position().left;
				verNav.find("li").mouseenter(function() {
					$(".auxline").show();
        //设置辅助线初始化高度和宽度;要适应容器
//      stop就是暂停，stop(true)就是当前停止，后面的继续,stop(true,true)就是结束
//停止当前对象的动画，用500ms时间把当前对象移动，同时停止当前对象同层次的对象正在进行的动画，
line.height($(this).outerHeight() - 1).width($(this).outerWidth());
						var thisY = $(this).position().left;
						line.stop(true).animate({
							left: thisY
						}, 300);
						return false
					})
//					.end()
					.mouseleave(function() {
					$(".auxline").hide();
						line.stop(true).animate({
							left: curY
						}, 300)
					}).trigger("mouseleave");

			});
			function chuxian(){
			$('.tab_yewgl').fadeToggle()
			$('.auxline').fadeToggle()
			}
function quan(){
	alert('权限不足!');
}
function xian(){
	alert('权限不足!');
}
</script>