//生成唯一标识
var uid="";
var uid_num="";
function uidFun(){
	uid="";
	for(var i=0;i<6;i++) 
	{ 
		uid+=Math.floor(Math.random()*10); 
	} 
}

//加盟委托提交函数
function jiamengSubFn() {
	
	$("#msgInfo").html("");
	$("#jiameng_form .input").focus(function() {
        $("#msgInfo").html(" ");
	});
	
	var clientName=$("#clientName").val(),
		clientTel=$("#clientTel").val(),
		clientYzm=$("#clientYzm").val(),
		clientCity="110000",
		resblock=$("#clientShequ").val(),
		house_id=$("#clientShequ").attr("name"),
		clientQita=$("#clientQita").val(),
		i=3;
	
	clientCity=$("#clientCity").attr("data-id");
	
	if(clientName==''){
		$("#msgInfo").html("请输入姓名！");
	}
	if(!checkMobile(clientTel)){
		$("#msgInfo").html("请输入正确的手机号！");
	}
	if(clientYzm==''){
		$("#msgInfo").html("请输入验证码！");
	}
	if(resblock==''){
		$("#msgInfo").html("请输入小区！");
	}
	
	if(clientName!=''&&checkMobile(clientTel)&&clientYzm!=''&&resblock!=''){
		$("#jiameng_subbtn").attr("disabled","disabled");
		$.ajax({
	        type:'GET',
	        dataType: "jsonp",
        		jsonp: "callback", 
	        data:{
	        		ownerName: clientName,
	        		ownerPhone: clientTel, 
	        		authCode:clientYzm, 
	        		cityCode: clientCity, 
	        		villageId:house_id, 
	        		villageName: resblock, 
	        		ownerRemark: clientQita, 
	        		clewSource: i,
	        		uid:uid_num
	        },
	        url:"http://s.ziroom.com/crm/clew/remoteSaveClewInfo",
	        success: function(data)
	        {
	        		if(data.status=='success'){
	        			$("#jiameng_box").hide();
	        			$("#jiameng_success").show();
	        			var d, f;
	        			d = setInterval(function() {
	                		var b = parseInt($("#jiameng_success .second").text());
	                		$("#jiameng_success .second").text(b - 1);
		            }, 1000);
		            f = setInterval(function() {
		                $("#jiameng_success").hide();
		                $("#jiameng_box input.input").val("");
		                $("#jiameng_box #clientShequ").attr("name","");
		                $("#jiameng_box textarea#clientQita").val("");
		                $("#jiameng_box #clientCity").text("北京").attr("data-id", "110000");
		                $("#jiameng_box .yzm_check_box").removeClass("right wrong");
		                document.body.style.overflow = "auto";
		                document.body.onkeydown = "";
		                clearInterval(f);
		                clearInterval(d);
		            }, 5000);
		            
	        			$("#jiameng_subbtn").attr("disabled",false);
	        		}
	        		if(data.status=='failure'){
	        			yzm_img($(".hq_yzm"));
	        			if(data.error_code=='110'||data.error_code=='120'){
		        			alert("网络请求失败");
		        		}
		        		else if(data.error_code=='506076'){
		        			alert("输入验证码超时");
		        		}
		        		else if(data.error_code=='506012'){
		        			$("#jiameng_box .yzm_check_box").removeClass("right").addClass("wrong");
		        			alert("验证码输入不正确");
		        		}
		        		else if(data.error_code=='503713'){
		        			alert("生成线索记录失败");
		        		}
		        		else{
		        			alert("加盟失败！");
		        		}
		        		
	        			$("#jiameng_subbtn").attr("disabled",false);
	        		}
	        		
	        },
	        error:function(){
	        		alert("接口调用失败");
	        		$("#jiameng_subbtn").attr("disabled",false);
	        }
		});
	}
}

//图片验证码
function yzm_img(othis){
	$(othis).parents(".yzm_box").next(".yzm_check_box").removeClass("wrong right");
	$("#clientYzm").val("");
	
	var clientTime=Date.parse(new Date());
	uidFun();
		
	uid_num=clientTime+uid;
	
	var src="http://s.ziroom.com/crm/contractInfo/captcha?uid="+uid_num;
	
	$(othis).html('<img src="'+ src +'" style=" width:100%; height:100%"/>');
}

function lxFun2(f, e) {
    var h = $(f).val(), g = $(e).attr("data-id");
    h ? $("#lx_box2").css({
        display: "block"
    }) : $("#lx_box2").css({
        display: "none"
    }), "" != h && $.ajax({
        type: "GET",
        data: {
            resblock: h,
            city_code: g
        },
        url: "http://www.ziroom.com/index.php?_p=ownerpc&_a=selectBuildingApi",
        dataType: "jsonp",
        jsonp: "callback",
        success: function(a) {
            var l, k, j, i;
            if ("success" == a.status && "" != a.data) {
                for (l = "", k = a.data.length, j = 0; k > j && 5 > j; j++) {
                    l += "<a href='javascript:void(0)' id='" + a.data[j].resblock_id + "'>" + a.data[j].resblock_name + "</a>";
                }
                i = "<div  class='con'>" + l + "</div>", $(f).next(".lx_box").empty().append(i);
            } else {
                $(f).next(".lx_box").empty();
            }
        },
        error: function() {}
    });
}




function webChange2() {
    lxFun2("#clientShequ", "#clientCity");
}

$(function(){
	
	$(".lx_input2").focus(function() {
        $("#lx_box2").css({
            display: "block"
        });
    });
    
    $(document).click(function() {
        $("#lx_box").css({
            display: "none"
        });
        $("#lx_box2").css({
            display: "none"
        });
    });
    
    $("#lx_box2").delegate("a", "click", function() {
        var b = $(this).text();
        var c = $(this).attr("id");
        $(this).parents(".lx_box").siblings(".input").attr("value", b);
        $(this).parents(".lx_box").siblings(".input").attr("name", c);
        $(this).parents(".lx_box").hide();
    })
	
	if(document.getElementById("clientShequ")){
      var resblock2 = document.getElementById("clientShequ");
      if(window.ActiveXObject) {

        resblock2.onpropertychange = webChange2;

      }else{
      	
        resblock2.addEventListener("input",webChange2,false);

      }
    }
	
	$("#gujia .form .select_box").click(function(b) {
        b.stopPropagation();
   	});
	
	$("#gujia .form .input_box").click(function(b) {
        b.stopPropagation();
   	});
   	
   	$("#jiameng_box .input_box").click(function(b) {
        b.stopPropagation();
   	});
	
	yzm_img($(".hq_yzm"));
	
	$(".jiameng_btn").click(function() {
        yzm_img($(".hq_yzm"));
   	});
   	
   	//监控验证码输入
   	if(document.getElementById("clientYzm")){
      var yzm = document.getElementById("clientYzm");
      if(window.ActiveXObject) {

        yzm.onpropertychange = yzmFun;

      }else{
      	
        yzm.addEventListener("input",yzmFun,false);

      }
    }
	
})

function yzmFun(){
	var i=3;
	
	var yzm=String($("#clientYzm").val());
//	console.log(yzm.length)
	if(yzm.length>3){
		$.ajax({
	        type:'GET',
	        dataType: "jsonp",
        		jsonp: "callback", 
	        data:{clewSource:i,authCode: yzm,uid:uid_num},
	        url:"http://s.ziroom.com/crm/clew/checkAuthCodeSuccess",
	        success: function(data)
	        {
	        		if(data.status=='success'){
	        			$("#jiameng_box .yzm_check_box").removeClass("wrong").addClass("right");
	        		}
	        		if(data.status=='failure'){
	        			$("#jiameng_box .yzm_check_box").removeClass("right").addClass("wrong");
	        		}
	        	},
	        error:function(){
	        		alert("验证验证码正确接口调用失败");
	        }
		});
	}
}
