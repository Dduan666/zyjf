{__NOLAYOUT__}
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>卓屹金服</title>
		<link rel='icon' href='__PUBLIC__/zy/images/zy.ico' type='image/x-ico' />
		<!--<link rel='icon' href='../img/i1.ico' type='image/x-ico' />-->
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/zy/css/registered.css"/>
	</head>
	<body>
		<div class="login_tit_twg">
				<div id="login_logo">
					<a href="{:U('Index/index')}">
				<img src="__PUBLIC__/zy/img/logo.png"/>	
				</a>
				</div>
			</div>
		<div class="login_twg">

			<div class="login_box_twg">
				<div class="messInfo_twg">
					<p class="tips_normal_twg"></p>
				</div>
				<div class="us_twg">
					<div class="login_box_t1_twg">重置密码</div>
					<div class="contain_form">
					<form autocomplete="off" id="registerForm" name="myform" action="{:U('Home/Login/chongzhi')}" method="post">
						
						<div class="login_box_t2_twg">
							<input type="text" name="phone"  placeholder="请输入手机号" id="telphone">
						</div>
						
						<div class="login_box_t_twg">
							<input type="text" class="anquan" name="sjyz" placeholder="请输入手机验证码" id="re_yanzheng" />
							 <input type = "button" class="code" onclick="dj3()" id="sjyzm" value="发送验证码"/> <span id="login-erro"></span>
						</div>
						
						
						<div class="login_box_t2_twg">
							<input type="password" name="password" placeholder="请输入重置密码" id="password" class="zc_password" 
							onkeyup="blur_pwd()"/>
						</div>
						<!-- <div class="err3"></div> -->
						
							<div class="login_box_t2_twg">
							<input type="password" name="confirm_password" placeholder="请确认重置密码" class="confirm_password">
						</div>
						<div class="fanhui"><a href="{:U('Home/Login/login')}">去登陆</a></div>

						<div class="btn2_twg">
							<input type="submit" value="重置" id="zhuce" />
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_dz">版权所有：北京卓屹金融服务有限公司 Copyright©2013-2014 京公网备案15011442</div>
	</body>
</html>
<script src="__PUBLIC__/zy/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/zy/js/jquery.validate.js" type="text/javascript"></script>
<script src="__PUBLIC__/zy/js/registerde.js" type="text/javascript"></script>
<script src="__PUBLIC__/zy/layer/layer.js" type="text/javascript"></script>
<script src="__PUBLIC__/zy/js/zyjf.js" type="text/javascript"></script>
<!-- <script src="__PUBLIC__/zy/js/validate-methods.js" type="text/javascript"></script> -->
<script type="text/javascript">
 
	$(document).ready(function() {
$("#registerForm").validate({
    rules: {
     
      phone:{
        required:true,
        minlength:11,
        maxlength:11
      },
      vcode:{
      	required:true,
      },
      sjyz:{
      	required:true,
      },
      password: {
        required: true,
        minlength:6,
        maxlength:18
      },
      
      confirm_password:{
      	 required: true,
      	 equalTo:'.zc_password'
      }
    },
    messages: {
      
      phone: {
        required: "手机号不能为空",
       minlength: jQuery.format("手机号格式错误"),
       maxlength: jQuery.format("手机号格式错误")
      },
      vcode:{
      	required:"图形验证码不能为空",
      },
      sjyz:{
      	required:"手机验证码不能为空",
      },
      password: {
        required: "",
        minlength: jQuery.format(""),
        maxlength: jQuery.format("")
      },
      
      confirm_password:{
        required: "密码不能为空",
        equalTo: "两次密码不一致"
      }
      
    }

 });
});

	
	var countt=60;//发送验证码
	var codea;
	var aab=document.querySelector('.code');
	function dj(){
		if(countt>0){
			countt--;
			aab.value=countt+'s后再次获取';
			aab.setAttribute('disabled','disabled');
			setTimeout(dj,1000);
		}
		else{
			aab.value='重新获取验证码';
			countt=60;
			aab.removeAttribute('disabled');
		}
	}

	function dj3(){
		
		var telphone = $('#telphone').val();
		var vcode = $('#vcode').val();

		// var img = $('img').attr.('src',$('img').attr('src')+'?rand(0,9)');
		$.ajax({
			type : 'get',
			url : '{:U("Home/Login/add")}',
			data : {tel:telphone,vcode:vcode},
			success : function(data){
				if(data==3){
					lay('手机号不能为空',5);
				}else if(data==4){
					lay('请输入正确手机号',5);
				}else if(data == 1)	
				{ 
				lay('图形验证码错误',5);
				// $('img').attr.('src',$('img').attr('src')+Math.round(new Date().getTime()/1000));
				document.getElementById("yzm").src="/index.php/home/public/createvcode/id="+ Math.random();
				}else{
					lay('发送成功',1);

					dj();
			
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
<script>
	//统计浏览本所有服务页面的次数，每次进入或刷新本页面，浏览量+1
	$(function(){
		var id = 21;
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