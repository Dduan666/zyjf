
 $(function(){
 $(window).scroll(function(){
var height1=$('.nav_zyjf').offset().top;
var ss=$(window).scrollTop();
if(ss>90){
$('.nav_zyjf').addClass('navbar-fixed-top')
}
else{
$('.nav_zyjf').removeClass('navbar-fixed-top')	
}
 })
 })
//下来框的方法
$('.nav_zyjf').css('background','white')
$('.xq_move').show();
function xialacaidan(){
$(".serecity").slideToggle(500);
$('.contain_zz').fadeToggle(700);
$('.nav_zyjf').toggleClass('nav_zyjf_shaodw')
if($('.nav_zyjf').hasClass('nav_zyjf_shaodw')){
setTimeout("$('.nav_zyjf').css('background','white')",500);
}
else{
	$('.nav_zyjf').css('background','#dddddd')
}
}
function showOverlay() {
    $(".zhezc").height(pageHeight());
    $(".zhezc").width(pageWidth());
}
/* 当前页面高度 */
function pageHeight() {
    return document.body.scrollHeight;
}
/* 当前页面宽度 */
function pageWidth() {
    return document.body.scrollWidth;
}
var fag=false;
var fag1=false;
function zhidian_zya(obj){
	if(fag1==false){
	fag1=true;	
	$('.zy_tab_ri_tabka>div').removeClass('active_111')
	$(obj).addClass('active_111')
	$('.zy_inline_zx').hide();
	$('.zy_zhidian').addClass('animated fadeInUp').show();
	}
	else{
	fag1=false;	
	$('.zy_tab_ri_tabka>div').removeClass('active_111')
	$(obj).addClass('active_111')
	$('.zy_inline_zx').hide();
	$('.zy_zhidian').addClass('animated fadeInUp').hide();
	}
}

function zhidian_zyb(obj){
	if(fag==false){
	fag=true;
	$('.zy_tab_ri_tabka>div').removeClass('active_111')
	$(obj).addClass('active_111')
	$('.zy_zhidian').hide();
	$('.zy_inline_zx').addClass('animated fadeInUp').show();	
	}
	else{
		fag=false;
	$('.zy_zhidian').hide();
	$('.zy_inline_zx').addClass('animated fadeInDown').hide();		
	}
}
   $(window).scroll(function(){
var position =  $(document).scrollTop();
   if(position>400&&position<1200){
   	$('.sucessCase_ri').addClass('animated fadeInUp');
   	$('.sucessCase_le').addClass('animated fadeInUp');
	}
})	
 function close_alert(){
 $('#hz_tishiz').animate({height:0},400)	
 }

$('.menu>ul>li').click(function(){
	$('.menu>ul>li').removeClass('currclass')
	$(this).addClass>('currclass')
})
function close_fixed(wl){
	$('.zy_tab_ri_tabka>div').removeClass('active_111')
$('.'+wl).css('display','none')
}


function lay(one,two){
	layer.alert(one,{
		title: '卓屹金服',
		icon:two,
		skin:"layer-ext-moon"
		
	})
}