var high=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d]{6,18}$/;
var cent=/^(?=.*\d)(?=.*[a-z])[a-z\d]{6,18}$/;
var low1=/^(?=.*\d)[\d]{6,18}$/;
var low2=/^(?=.*[a-z])[a-z]{6,18}$/;
var ccc=/^[0-9A-Za-z]{6,20}$/;
var st=false;
function blur_pwd(){
	var pwd=$('.zc_password').val();
	if(ccc.test(pwd)==false){
	$('.err3').html('密码要在6-18位之间且由数字或字母组成');
	$('.err3').css('color','red');
	$('#weak').css('background','')
	$('#medium').css('background','')
	$('#strong').css('background','')
	}
	
	else{
		st=true;
	if(low2.test(pwd)||low1.test(pwd)){
	$('.err3').html('');
	$('.err3').css('color','green')
	$('#weak').css('background','#ff7385')
	$('#medium').css('background','')
	$('#strong').css('background','')
	}
	if(cent.test(pwd)){
	$('.err3').html('');
	$('.err3').css('color','green')
	$('#weak').css('background','')
	$('#medium').css('background','#ff7385')
	$('#strong').css('background','')
	}
if(high.test(pwd)){
	$('.err3').html('');
	$('.err3').css('color','green')
	$('#weak').css('background','')
	$('#medium').css('background','')
	$('#strong').css('background','#ff7385')
	}

	}
}
