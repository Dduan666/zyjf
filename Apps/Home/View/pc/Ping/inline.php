<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
		<title>【卓屹金服】</title>
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/zy/css/inline.css"/>
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/zy/css/bootstrap-select.min.css"/>
	</head>
	<body>
  <!--弹框问题-->
      <div class="quanbing">
      </div>
    <div class="tk_yanz">
      <div class="quit_inline">X</div>
      <div class="toubu">温馨提示</div>
      <div class="neitong">请完善您的信息！！！</div>
      <div class="quit_sure">确定</div>
    </div>
  <!--弹框问题-->
  <div id="dialog_confirm" title="卓屹金服竭诚为您服务" style="display: none;">
  <p class="alert_ts"></p>
</div>

		<div class="load_head"></div>
		<div class="inline_contain">
		<!--<form>-->
		<div class="inline_con">
			<div class="inline_position">
				您的当前位置：<a href="{:U('Index/index')}">卓屹金服</a><span> > 在线评估</span>
           </div>
           
<div class="inline_step">
<div class="inline_step1">
	<select id="quxian" name="cheng" class="selectpicker bixuan">
		<option value="">请选择区县</option><!--3-->
	</select>	
	<select name="xiaoqu" id="xiaoqu" class="selectpicker bixuan" data-live-search="true">
		<option value="">所在小区</option><!--1-->
	</select>
	</div>
	<!--错误提示-->
<div class="tishi_erro">
	<div class="zyjf_erro1">请填写此项</div>
	<div class="zyjf_erro2">请填写此项</div>
</div>
<!--错误提示-->
	<div class="inline_step1" >
<select id="loudong" name="lou" class="selectpicker bixuan">
	<option value="">所在楼栋</option><!--2-->
</select>
<select id="fangwuleixing" name="jia" class="selectpicker bixuan">
	<option value="">房屋类型</option><!--4-->
</select>
</div>
<!--错误提示-->
<div class="tishi_erro">
	<div class="zyjf_erro3">请填写此项</div>
	<div class="zyjf_erro4">请填写此项</div>
</div>
<!--错误提示-->
<div class="inline_step1">
<select id="guihua" name="yongtu" class="selectpicker bixuan">
<option value="">房地产用途</option><!--5-->
</select>

<select id="jzlx" name="leixing" class="selectpicker">
<option value="">建筑类型</option>
</select>
</div>
<!--错误提示-->
<div class="tishi_erro">
	<div class="zyjf_erro5">请填写此项</div>
	<div>请填写此项</div>
</div>
<!--错误提示-->
<div class="inline_step1">
	<select id="jzjg" name="jiegou" class="selectpicker">
<option value="">建筑结构</option>
</select>
<select id="hxjg" name="huxing" class="selectpicker">
<option value="">户型结构</option>
</select>
</div>
<!--错误提示-->
<div class="tishi_erro">
	<div>111</div>
	<div>222</div>
</div>
<!--错误提示-->

<div class="inline_step1">
<select id="jzxs" name="xingshi" class="selectpicker">
<option value="">建筑形式</option>
</select>

<select id="chaox" name="chaoxiang" class="selectpicker">
<option value="">朝向</option><!--6-->
</select>
</div>

<!--错误提示-->
<div class="tishi_erro">
	<div>111</div>
	<div>222</div>
</div>
<!--错误提示-->

<div class="inline_step1">
<input type="text" name="cengshu" id="louceng" placeholder="所在楼层" class="bixuan2"/><!--9-->
<input type="text" id="all_louceng" name="zongceng" placeholder="总楼层" class="bixuan2"/><!--10-->
</div>
<!--错误提示-->
<div class="tishi_erro">
	<div>111</div>
	<div>222</div>
</div>
<!--错误提示-->
<div class="inline_step1">
<input type="text" id="year1" name="nianfen" class="Wdate" class="bixuan2" placeholder="请输入竣工日期！"/><!--11-->
<div class="input-group div_wwl1" style="float: right;">
  <input type="text" placeholder="请输入面积" name="daxiao" id="mianji" class="form-control bixuan2"/>
  <span class="input-group-addon">平方米</span>
  
</div>

</div>
<!--错误提示-->
<div class="tishi_erro">
	<div>111</div>
	<div>222</div>
</div>
<!--<div class="inline_step_boot">-->
<!--<div class="input-group div_wwl1">
  <input type="text" id="cjjg" placeholder="成交价格" name="money"  class="form-control bixuan2"/><!--7-->
  <!--<span class="input-group-addon">万元</span>
</div>-->
<!--<div class="input-group div_wwl1">
  <input type="text" placeholder="请输入面积" name="daxiao" id="mianji" class="form-control bixuan2"/>
  <span class="input-group-addon">平方米</span>
</div>
</div>-->
<!--错误提示-->
<div class="tishi_erro">
	<div>111</div>
	<div>222</div>
</div>
<!--错误提示-->
<!--错误提示-->
<div class="inline_step2 inline_button"  onclick="sumbit_a()">
提交
</div>

</div>	
</div>

<!--inline_con1现在处于none状态-->
<div class="inline_con1">
	<!--<form>-->
		<h3>亲爱的用户，您已评估完毕<br />请填写以下信息，获取您的评估结果</h3>
		<div style="margin-top: 60px!important;">
			<div class="sjhao">手机号：</div><div><input type="text" name="phone" id="sjha" value=""  /></div>
		<div class="error1">错误信息提示</div>	
		</div>
		
			<!-- <div>
			<div class="sjyzm">图形验证码:</div><div><input type="text" name="vcode" id="input" class="yzm" value="" /></div><div class="yzm_php" style="float:right;width:175px;height:50px">
               <img src="{:U('Home/Public/createVCode')}" style="display:block;margin:0px 0  0 0px;width: 100%;height: 50px " onclick="this.src='/index.php/home/public/createvcode/id'+Math.round(new Date().getTime()/1000)" id="yzm">
               </div>
		<div class="error3">错误信息提示</div>	
		</div> -->
	  <!--短信验证先删除-->
    <div>
      <div class="yanzehgngma">手机验证码:</div><div><input type="text" name="" class="yzm" id="sjyz" value=""/></div><div class="skyzm_a"><input type = "button" class="code" onclick="dj()" value="发送验证码"/></div>
      <div class="error2">错误信息提示</div>  
    </div>
    <!--短信验证先删除-->
		
		<div class="form_tj">
			<div class="btn_sub"  onclick="submit_wwl()" />
				<input type="submit" name="" id="inline_submit" value="提交" />
			</div>
			<div class="btn_new1" onclick="new_pg()">重新评估</div>
		</div>
		</div>
 	
 	<!--在这里添加评估结果-->
 	<div class="gai_result">
 		<div class="gai_result_common">评估结果</div>
 		<div class="gai_result_common1">评估物业地址：北京市<span class="quxian"></span><span class="xiaoqu"></span><span class="louhao"></span><span class="mianji"></span></div>
		<div class="class_jieguo">
			<div class="class_jieguo_con">
			<div class="danjia_re"><div>评估单价(元/平米)</div><div class="result_1"></div></div>
			<div class="zongjiua_re">
				<div>评估总价(元/平米)</div><div class="result_2"></div></div>
		</div>
		</div>
		<div class="detail_messag">
			<div>
				<span class="title_detail">省&nbsp;市&nbsp;区:</span>
				<span class="title_detaila chuanzhi1"></span>
			</div>
			<div>
				<span class="title_detail">面&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;积:</span>
				<span class="title_detaila chuanzhi2"></span>
			</div>
			<div>
				<span class="title_detail">所在楼层:</span>
				<span class="title_detaila chuanzhi3"></span>
			</div>
			<div>
				<span class="title_detail">房屋朝向:</span>
				<span class="title_detaila chuanzhi4"></span>
			</div>
			<div>
				<span class="title_detail">竣工年份:</span>
				<span class="title_detaila chuanzhi5"></span>
			</div>
			<div>
				<span class="title_detail">物业类型:</span>
				<span class="title_detaila chuanzhi6"></span>
			</div>

			
		</div>
		</div>
		
		<!--在这里添加评估结果-->
 
<!-- </form>-->
</div>

	</body>
</html>
<script src="__PUBLIC__/zy/js/bootstrap.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/zy/js/bootstrap-select.js" type="text/javascript"></script>
<script src="__PUBLIC__/zy/js/m97/WdatePicker.js" type="text/javascript"></script>
<script src="__PUBLIC__/zy/js/zyjf.js" type="text/javascript"></script>
<script src="__PUBLIC__/zy/js/xq_navbar.js" type="text/javascript"></script>
<script type="text/javascript">
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
    var did = 12;
    $.ajax({
      type : 'post',
      url : '{:U('Home/Flow/deng')}',
      data : {id:did},
      success : function(dat){
        
      }
    })

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
  url : '{:U('Home/Ping/index')}',
  data : postdata,
  success : function(msg){
     // if(msg == 1)
     // {
     //    $('.alert_ts').html('亲，请先登录')
     //    $( "#dialog_confirm").dialog({
     //      draggable:true,
     //      modal:true,
     //      resizable:false,
     //      buttons:{
     //        "确定":function(){
     //          $(this).dialog("close")
     //        },
     //        "取消":function(){
     //          $(this).dialog("close")
     //        }
     //      }
     //     });
     // }else{
        $('.inline_step').hide();
        $('.inline_con1').show(); 
     // }

  }

})

}
else{
$('.quanbing').css('display','block');
$('.tk_yanz').css('display','block');

}
}
$('.quit_inline').click(function(){
$('.quanbing').css('display','none');
$('.tk_yanz').css('display','none');
})
$('.quit_sure').click(function(){
$('.quanbing').css('display','none');
$('.tk_yanz').css('display','none');
})



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
  var sid = 13;
  $.ajax({
    type : 'post',
    url : '{:U('Home/Flow/deng')}',
    data : {id:sid},
    success : function(dat){
      
    }
  })

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
    url : '{:U('Home/Pg/index')}',
    data : {acode:acode},
    success : function(msg){
      
       if(msg == 1)
      {
        alert('手机验证码不能为空');
        return false;
      }else if(msg == 2)
       {
        alert('手机验证码错误，请重新获取验证码!');
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
                url : '{:U('Home/Pg/index2')}',
                data : pdata,
                success : function(msg){
                }
              });
              $.ajax({
                type : 'post',
                url : '{:U('Home/Pg/fs')}',
                data : {wuye:wuyedizhi,dan:ZYpgjg,zong:total_money,phone:phone},
                success : function(dd){
                  alert('稍后我们会把您评估的结果发送到您的手机上');
                }
              })


               },
              error:function(){
             alert('有错误llo')
           }
   })



 }

  function new_pg(){
     $('.inline_step').show();
        $('.inline_con1').hide()
  }


       }
    }

  })
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
    // var vcode = $('#input').val();
    $.ajax({
      type : 'get',
      url : '{:U("Home/Ping/add")}',
      data : {tel:telphone},
      success : function(data){
        if(data == 2){
          alert('手机号不能为空');
        }else if(data == 3){
          alert('请输入正确手机号');
        // }
        // else if(data == 1)
        // { 
        // //console.log(data.retval);
        // alert('图形验证码错误');
        // document.getElementById("yzm").src='/index.php/home/public/createvcode/id='+ Math.random();
        }else{
          alert('验证码发送成功');
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
<script>
  //统计浏览本评估页面的次数，每次进入或刷新本页面，浏览量+1
  $(function(){
    var id = 3;
    $.ajax({
      type : 'post',
      url : '{:U('Home/Flow/ping')}',
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