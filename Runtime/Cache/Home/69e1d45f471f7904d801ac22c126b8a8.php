<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
		<title>卓屹金服</title>
		<link rel='icon' href='/Public/zy/images/zy.ico' type='image/x-ico' />
		
		<link rel="stylesheet" type="text/css" href="/Public/zy/css/login_twg.css" />
		<script src="/Public/zy/js/jquery.js" type="text/javascript" charset="utf-8"></script>
		<style type="text/css">
			
		</style>
	
	</head>

	<body>
		
				<div class="us_twg">
					<div class="contain_form">
						
						<a class="log_login" href="<?php echo U('Index/index');?>"><img src="/Public/zy/pimg/logo.png"/></a>
					<form autocomplete="off" id="loginForm" name="myform" action="doLogin" method="post">
						<div class="login_box_t2_twg">
							<span class="logo_icon logo_yhm"></span>
							<input type="text" name="phone"  placeholder="手机号" class="login_user_twg">
						</div>
						<div class="login_box_t2_twg">
							<span class="logo_icon logo_mima"></span>
							<input type="password" name="password" placeholder="登录密码" class="login_pwd_twg">
						</div>
						<div class="login_box_t2_twg">
							<span class="logo_icon logo_anqum"></span>
							<input type="text" class="anqum" id="input" placeholder="验证码" name="vcode" value="">
							<div class="yzm_php" style="float:right;width:126px;height:40px;margin-top: 5px;">
							 <img src="<?php echo U('Home/Public/createVCode');?>" style="display:block;margin:0px 0  0 0px;width: 100%;height:100%; " onclick="this.src='/index.php/home/public/createvcode/id'+Math.round(new Date().getTime()/1000)">
							 </div>
						</div>
						<div class="login_box_t3_twg">
							<div class="pull_left_twg">
								<input type="checkbox"  checked="checked" class="termsbox_twg" id="a_twg">
								<label for="a_twg">记住我</label>
							</div>
							<div class="pull_right_twg">
								<a href="<?php echo U('Home/Login/forgetmima');?>">忘记密码?</a> |
								<a href="<?php echo U('Home/Login/register');?>">免费注册</a>
							</div>
						</div>
						<div class="btn2_twg">
							<input type="submit" value="登录" id="submit" onclick="login()" />
						</div>
					</form>
					</div>
				</div>
<div class="footer">版权所有：北京卓屹金融服务有限公司 Copyright©2013-2014 京公网备案15011442</div>
	</body>
</html>
<script src="/Public/zy/js/jquery.validate.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
$("#loginForm").validate({
    rules: {
      username:{
        required: true,
        minlength: 1
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    messages: {
      username: {
        required: "用户名不能为空",
        minlength: jQuery.format("用户名只少由 {0} 字符组成")
      },
      password: {
        required: "密码不能为空",
        minlength: jQuery.format("密码只少由 {0} 字符组成")
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