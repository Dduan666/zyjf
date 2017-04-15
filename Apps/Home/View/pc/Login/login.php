{__NOLAYOUT__}
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
		<title>【卓屹金服】登录</title>
		<link rel='icon' href='__PUBLIC__/zy/images/zy.ico' type='image/x-ico' />
		
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/zy/css/login_twg.css" />
		<script src="__PUBLIC__/zy/js/jquery.js" type="text/javascript" charset="utf-8"></script>
		<script src="__PUBLIC__/zy/layer/layer.js" type="text/javascript"></script>
		<script src="__PUBLIC__/zy/js/zyjf.js" type="text/javascript"></script>
		<style type="text/css">
			.login_tit_twg>h1>a{
				text-decoration: none;
			}
		</style>
	</head>

	<body>
		<div class="login_tit_twg">
			<a href="{:U('Index/index')}">
				<div id="login_logo">
				<img src="__PUBLIC__/zy/img/logo.png"/>	
				</div>
				</a>
			</div>
		<div class="login_twg">

			<div class="login_box_twg">
				<div class="messInfo_twg">
					<p class="tips_normal_twg"></p>
				</div>
				<div class="us_twg">
					<div class="login_box_t1_twg">卓屹金服</div>
					<div class="contain_form">
					<form autocomplete="off" id="loginForm" name="myform" action="doLogin" method="post">
						<div class="login_box_t2_twg">
							<input type="text" name="phone"  placeholder="请输入手机号" class="login_user_twg">
						</div>
						<div class="login_box_t2_twg">
							<input type="password" name="password" placeholder="请输入登录密码" class="login_pwd_twg">
						</div>
						<div class="login_box_t_twg">
							<input type="text" id="input" placeholder="请输入安全码" name="vcode" value="">
							<div class="yzm_php" style="float:right;width:175px;height:50px">
							 <img src="{:U('Home/Public/createVCode')}" style="display:block;margin:0px 0  0 0px;width: 100%;height: 50px " onclick="this.src='/index.php/home/public/createvcode/id'+Math.round(new Date().getTime()/1000)">
							 </div>
						</div>
						<div class="login_box_t3_twg">
							<div class="pull_left_twg">
								<input type="checkbox"  checked="checked" class="termsbox_twg" id="a_twg">
								<label for="a_twg">记住我</label>
							</div>
							<div class="pull_right_twg">
								<a href="{:U('Home/Login/forgetmima')}">忘记密码?</a> |
								<a href="{:U('Home/Login/register')}">免费注册</a>
							</div>
						</div>
						<div class="btn2_twg">
							<input type="submit"value="登录" id="submit" onclick="login()" />
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
				<div class="footer_dz">版权所有：北京卓屹金融服务有限公司 Copyright©2013-2014 京公网备案15011442</div>
	</body>
</html>
<script src="__PUBLIC__/zy/js/jquery.validate.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
$("#loginForm").validate({
    rules: {
      phone:{
        required: true,
        minlength: 11
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    messages: {
      phone: {
        required: "手机号不能为空",
        minlength: jQuery.format("用户名只少由 {0} 字符组成")
      },
      password: {
        required: "密码不能为空",
        minlength: jQuery.format("密码只少由 {0} 字符组成")
      }
      
    }

 });
});
// function login(){
// 	var user=$('.login_user_twg').val();
// 	var pwd=$('.login_pwd_twg').val()
// var t=$('#a_twg').prop('checked');
// if(t){
// localStorage.user=user;
// localStorage.pwd=pwd;
// }	
// $('.login_user_twg').val(localStorage.user)
// $('.login_pwd_twg').val(localStorage.pwd)
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
<script>
	//统计浏览本登录页面的次数，每次进入或刷新本页面，浏览量+1
	$(function(){
		var id = 19;
		$.ajax({
			type : 'post',
			url : '{:U('Home/Flow/show')}',
			data : {id:id},
			success : function(data){
				if(data){
					$(document).ready(function() {
					    setInterval(function() {
					    	var did = data;
					        $.ajax({
					            url : '{:U('Home/Flow/index')}',
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