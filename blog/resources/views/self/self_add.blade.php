<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>北京租房_北京租房网_北京租房信息|价格|网站【自如网】</title>
<meta name="keywords" content="北京租房,北京租房网,北京租房信息,北京租房价格,北京租房信息网,北京租房网站">
<meta name="description" content="高品质北京租房品牌“自如”，旗下“自如友家”“自如寓”两大产品，数万间公寓。自如承诺：3天不满意全额退款！信仰生活的人，迟早与自如相遇！自如是最高品质的北京租房信息|价格|网站。">
<meta http-equiv="cache-control" content="no-cache, must-revalidate">
<meta content="width=1200, initial-scale=1, maximum-scale=1, user-scalable=1" name="viewport">
<link rel="stylesheet" type="text/css" href="self_add_files/common.css">
<script type="text/javascript" src="self_add_files/jquery_002.js"></script>
<script type="text/javascript" src="self_add_files/z-common.js"></script>
<script type="text/javascript" src="self_add_files/layer.js"></script><link style="" id="layui_layer_skinlayercss" href="self_add_files/layer.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="self_add_files/zoneStyle.css">



</head>
<body>

<!-- 弹出层 -->

<div id="M_layer_box" style="display:none"></div>


<div id="topBar">
    <div class="area clearfix">
        <div class="glbLeft">
            <ul class="top_list" style="display: none">
                <li>hi，欢迎来到自如</li>
                <li id="ziroom_login"><a href="javascript:;" rel="nofollow">登录</a><i class="line"></i></li>
                <li id="ziroom_reg"><a href="javascript:;" rel="nofollow">注册</a></li>
            </ul>
            <ul class="top_list">
                <li class="user">
                    <img src="self_add_files/a.jpg" class="img" width="20">
                    Aquarius                    <i class="line"></i>
                    <b class="icon"></b>
                    <div class="con">
                        <a href="http://i.ziroom.com/">个人空间</a>
                        <a href="http://passport.ziroom.com/">编辑资料</a>
                        <a href="http://i.ziroom.com/index.php?uri=look/index">我的约看</a>
                        <a href="http://i.ziroom.com/index.php?uri=integral/integral&amp;myIntegral=0">我的积分</a>                
                    </div>
                </li>
                <li id="logout">退出</li>
            </ul>
        </div>
    </div>
</div>


<div id="header">
    <div class="area clearfix">     
      <h1 class="logo"><a href="http://www.ziroom.com/"><img src="self_add_files/logo.png" height="43" width="150"></a></h1>
        <div class="nav">
            <a href="http://passport.ziroom.com/" title="我的资料" class="active">我的资料</a>
            <a href="http://i.ziroom.com/" title="我的空间">我的空间</a>
        </div>
        <input id="login_flag" value="" type="hidden">

      <script type="text/javascript">
$("#i_q_keyword_1").keydown(function(a){13==a.keyCode&&$("#searchListBtn").click()}),$("#searchListBtn").click(function(){var b=$("#i_q_keyword_1").val(),c="http://www.ziroom.com/z/nl/",a=c+"?qwd="+$("#i_q_keyword_1").val();window.location.href=""==b?"http://www.ziroom.com/z/nl/":encodeURI(a)});
</script>

            <a href="http://www.ziroom.com/ditu/" class="toMap"></a>           
        </div>
        <script type="text/javascript">

        $("#i_q_keyword_1").keydown(function(e){
            if(e.keyCode == 13)
            {
                $('#searchMapBtn').click();
            }
        });

        $('#searchMapBtn').click(function(){
            var iq = $("#i_q_keyword_1").val();
            //if (iq=="请输入地名，地铁线路，站点名..." || iq=="")return ;
            var zr = ""+"/z/nl/";
            var query=zr+"?qwd="+$("#i_q_keyword_1").val();
            if(iq==''){
                 window.location.href = "/z/nl/";
            }else{
                 window.location.href = encodeURI(query) ;
            }
            
           
        });


        </script>    
    </div>

    

<!--/sub-header-->

<div class="clearfix area mainCon">
    <div class="slideLeft">
        <div class="user">
            <div class="img">
                <img src="self_add_files/a.jpg" height="100" width="100">
            </div>
            <p>Aquarius</p>
        </div>
        <ul>
            <li class="myUserInfo"><b></b><a href="http://passport.ziroom.com/index.php?r=user/index">个人信息</a></li>
            <li class="myCertificate"><b></b><a href="http://passport.ziroom.com/index.php?r=user/cert">证件信息</a></li>
        </ul>
    </div><!--/slideLeft-->
    <div class="mainRight">
            <div class="mainRight">
        <div class="title">个人信息</div>
          <div class="tableForm">
            <table>
              <tbody><tr class="trBorder">
                <td width="100">头像</td>
                <td width="160"><img src="self_add_files/a.jpg" id="J-m-imgFileImg" height="140" width="140"></td>
                <td width="600">
                  <form class="s-m-imgForm" action="/api/index.php?r=/user/avatar" enctype="multipart/form-data" method="post" id="form1" name="upform" dotype="ajax" callback="form1">
                    <input value="本地照片" class="ui_btn ui_org_btn" id="uploadImg" type="button">
                    <input name="file" id="J-m-imgFile" class="s-m-file" type="file">
                    <p class="gray mt10">仅支持JPG、PNG格式，文件小于3M。</p>
                  </form>
                </td>
              </tr>
              
<!--
              <tr>
                <td>用户名</td>
                <td  colspan="2" width="185"><input type="text" id="username" class="ui_inp ui_inp_big" placeholder=jzt168788></td>
              </tr>
-->              

              <tr>
                <td style="padding-top:40px;">昵称</td>
                <td colspan="2" style="padding-top:40px;"><input id="nickname" class="ui_inp ui_inp_big" value="Aquarius" type="text"></td>
                
              </tr>

              <tr>
                <td>性别</td>
                <td colspan="2">
                  
                  <span id="gender_man" class="ui_radio ui_radio_active">
                    <label for="man">
                      <input id="man" name="gender" type="radio"> <b class="icon"></b>男
                    </label>
                    
                  </span>

                  <span id="gender_woman" class="ui_radio ">
                    <label for="woman">
                      <input id="woman" name="gender" type="radio"> <b class="icon"></b>女
                    </label>
                    
                  </span>

                </td>
                
              </tr>
              
              <tr>
                <td style="padding-top:40px;">用户名</td>
                <td colspan="2" style="padding-top:40px;">
                  <input disabled="disabled" placeholder="6-30个字符字母和数字" id="username" class="ui_inp ui_inp_big" value="jzt168788" type="text">
                  <span id="username_tishi" style="padding-top:40px;"></span>
                </td>
              </tr>


              <tr style="">
              <form></form>
                <td>手机号</td>
                <td colspan="2">
                  
                  <input value="立即绑定" class="ui_btn ui_org_btn abled" id="yzTel" onclick="window.location='/index.php?r=user/bind-phone'" type="button">
                </td>
              
            </tr>
              <tr style="display:none">
                <td>手机号</td>
                <td colspan="2">
                  <span class="gray"></span>&nbsp;&nbsp;&nbsp;
                  <a href="javascript:;" class="org j-m-change" onclick="window.location='/index.php?r=user/change-phone'">修改</a>
                </td>
                
              </tr>
               <tr style="display:none">
                <td>邮箱</td>
                <td colspan="2">
                                  <input value="立即绑定" class="ui_btn ui_org_btn abled" id="yzTel" onclick="window.location='/index.php?r=user/bind-email'" type="button">
                
              </td></tr>
              <tr style="">
                <td>邮箱</td>
                <td colspan="2">
                  <span class="gray">630315552@qq.com</span>  
                  <a href="javascript:;" class="org j-m-change" onclick="window.location='/index.php?r=user/change-email'">修改</a>
                </td>
                
              </tr>

              <input id="qxl_mima" value="1" type="hidden">

              <tr style="">
                <td>密码</td>
                <td colspan="2">
                  <a href="javascript:;" class="org j-m-change" onclick="window.location='/index.php?r=user/reset-password-verify'">修改密码</a>
                </td>
              </tr>

           <!--   <tr>
                 <td valign="top">三方绑定</td>
                <td colspan="2" class="bangding"> 
                   <p><span class=" icon_qq"><b class="icon"></b> QQ</span>
                  <span class="gray">未绑定</span> 
                  <a href="qq/binding.php" class="org">去绑定</a>
                  <a id=qqGoUnbind class="org"></a></p>
                  <p><span class=" icon_weibo"><b class="icon"></b> 微博</span>
                  <span class="gray">未绑定</span>
                  <a href="https://api.weibo.com/oauth2/authorize?client_id=944429974&redirect_uri=http%3A%2F%2Fpassport.ziroom.com%2Fweibo%2FcallbackBind.php&response_type=code" class="org">去绑定</a>
                  <a id=weiboGoUnbind class="org"></a></p>
                 </td> 
                
              </tr>  -->
              
              <tr>
                <td>职业</td>
                <td colspan="2">
                  
                 
                    <div class="form-select">
                      <div class="form-sltitle">
                        <span id="job">程序员</span>
                        <i class="layui-edge icon"></i>
                      </div>
                      <ul style="display: none;" class="form-option">
                        <li value="程序员"><a href="javascript:;">程序员</a></li>
                        <li value="产品汪"><a href="javascript:;">产品汪</a></li>
                        <li value="金融猫"><a href="javascript:;">金融猫</a></li>
                        <li value="运营"><a href="javascript:;">运营</a></li>
                        <li value="法律咨询"><a href="javascript:;">法律咨询</a></li>
                        <li value="职能类"><a href="javascript:;">职能类</a></li>
                        <li value="教育培训"><a href="javascript:;">教育培训</a></li>
                        <li value="销售"><a href="javascript:;">销售</a></li>
                        <li value="传媒"><a href="javascript:;">传媒</a></li>
                      </ul>
                      <input type="hidden">
                    </div><!--/form-select-->
                </td>
                
              </tr>
              <tr>
                <td>兴趣爱好</td>
                <td colspan="2">
                  <div class="tagsInp j-m-tagsBox">
                      <span style="display: inline-block;" id="j-m-showTags"> #体育运动 #交友 #电影 #音乐 #数码</span>
                      <input name="" id="j-m-hidden" value=",体育运动,交友,电影,音乐,数码" type="hidden">
                    <input class="air_inp" placeholder="点此输入爱好，空格添加" id="j-m-tagIpt" type="text">
                    <b class="icon"></b>
                  </div>
                  
                </td>
                
              </tr>
              <tr>
                <td></td>
                <td colspan="2">
                  <div class="tags clearfix" id="tabsSpan">
                    <span class="active">体育运动</span>
                    <span class="active">交友</span>
                    <span>美食</span>
                    <span class="active">电影</span>
                    <span>旅行</span>
                    <span class="active">音乐</span>
                    <span class="active">数码</span>
                  </div>
                  <input name="tags" id="tagsList" type="hidden">
                </td>
                
              </tr>
              <tr>
                <td></td>
                <td colspan="3">
                  <input id="save_button" value="保存" class="ui_btn ui_org_btn" type="button">
                </td>
              </tr>
            </tbody></table>
          </div>
          

        
    </div><!--/mainRight-->
</div><!--/clearfix-->



<!--毛群植2016.4.5：兴趣爱好添加的交互，-->
<script>
    (function($){    
        /*aSpan.toggle(function(){
            tagsArr.push(this.innerHTML);
            $(this).addClass('active');
            showTags();
        },function(){
            tagsArr.splice(tagsArr.indexOf(this.innerHTML),1);
            $(this).removeClass('active');
            showTags();
        });  */
        var json={'体育运动':0,'交友':1,'美食':2,'电影':3,'旅行':4,'音乐':5,'数码':6};
        var oIpt=$('#j-m-tagIpt');
        var oHidden=$('#j-m-hidden');
        var oShow=$('#j-m-showTags');
        var aSpan=$('#tabsSpan').find('span');
        var tagsArr=oHidden[0].value.split(',');
        oShow.css({
            'display':'inline-block'
        });

        for(var i=1;i<tagsArr.length;i++){
          aSpan.eq(json[tagsArr[i]]).addClass('active');
        }

        showTags();

        //给所有选项加上点击事件
        aSpan.click(function(){
          if($(this).hasClass('active')){

            var index=0;

            for(var jj=0;jj<tagsArr.length;jj++){
              if(tagsArr[jj]==this.innerHTML){
                index=jj;
                break;
              }
            };

            tagsArr.splice(index,1);
            $(this).removeClass('active');
            showTags();
          } 
          else{

            if(tagsArr.length>=6){
              return;
            }

            tagsArr.push(this.innerHTML);
            $(this).addClass('active');
            showTags();
          }
        });

        //钱香莲
        //判断是否已有用户名
        var username_start=$('#username').val();
        if(username_start)
        {
          $('#username').attr('disabled','disabled');
        }
        //校验用户名
        $('#username').blur(function(){
          var username=$('#username').val();
          var reg=/^[a-zA-Z][0-9a-zA-Z]{5,29}$/; 
          if (username) 
          {
            if(!reg.test(username))
            {
              $('#username_tishi').html('用户名格式不正确');
              $('#username_tishi').css('color','red');
              return false;
            }
            else
            {
              //格式正确
              $.ajax({
                url:'/api/index.php?r=user/verify-account',
                data:{'username':username},
                type:'POST',
                dataType:'json',
                success:function(data){
                    if(data.resp.exist==false){
                      $('#username_tishi').html('用户名可以使用');
                      $('#username_tishi').css('color','green');
                    } else {
                      $('#username_tishi').html('用户名已存在,请重新设置');
                      $('#username_tishi').css('color','red');
                      return false;
                    }
                },
                error:function(){}
            });
            }
          };
        });

        //校验昵称
        $('#nickname').blur(function(){
          var nickname=$('#nickname').val();
          var reg=/^.{3,40}$/; 
          if (nickname) 
          {
            if(!reg.test(nickname))
            {
              mLayerMsg('昵称格式不正确!');
              return false;
            }
          }
          else
          {
            mLayerMsg('昵称不能为空!');
            return false;
          };
        });


        //当输入框输入完成且按空格时
        oIpt.keydown(function(ev){
            var oEvent=ev||event;

            if(oEvent.keyCode==13){
              oEvent.preventDefault();
              return false;
            }

            var reg=/^\s+$/;
            if(oEvent.keyCode==32 && this.value!='' && !reg.test(this.value)){


                if(tagsArr.length>=6){
                  this.value='';
                  return false;
                }

                if(this.value.length>10){
                  mLayerMsg('输入内容过长');
                  $(this).attr('value','');
                  return;
                }

                //添加爱好
                tagsArr.push(this.value.replace(/(^\s*)|(\s*$)/g,""));
                showTags();
                $(this).attr('value','');
                this.blur();

                oEvent.preventDefault();
                return false;
            }
        });

        function showTags(){
          oHidden.val(tagsArr.join(','));  
          oShow.html(tagsArr.join(' #'));
        }

        $('#save_button').click(function(){

          var url = "/api//index.php?r=user%2Fsave-info";
          var params = {};

          params.nickname = $('#nickname').val();
          params.username = $('#username').val();
          params.head_img = $('#J-m-imgFileImg').attr('src');
          var gender = "";
          var man = $('#gender_man').hasClass('ui_radio_active');
          var woman = $('#gender_woman').hasClass('ui_radio_active');
          if(man){
              gender = 2;
          } else {
              if(woman){
                gender = 1;
              }
          }
          params.gender = gender;//

          params.job = $('#job').text();

          //校验昵称
          var regNick=/^.{3,40}$/; 
          if (params.nickname) 
          {
            if(!regNick.test(params.nickname))
            {
              mLayerMsg('昵称格式不正确!');
              return false;
            }
          }
          else
          {
            mLayerMsg('昵称不能为空!');
            return false;
          };

          //判断是否已有用户名
          if(!username_start)
          {
            //校验用户名
            var regUser=/^[a-zA-Z][0-9a-zA-Z]{5,29}$/; 
            if (params.username) 
            {
              if(!regUser.test(params.username))
              {
                $('#username_tishi').html('用户名格式不正确');
                $('#username_tishi').css('color','red');
                return false;
              }
              else
              {
                //格式正确
                $.ajax({
                  url:'/api/index.php?r=user/verify-account',
                  type:'POST',
                  data:{'username':params.username},
                  dataType:'json',
                  success:function(data){
                      if(data.resp.exist==false){
                        $('#username_tishi').html('用户名可以使用');
                        $('#username_tishi').css('color','green');

                        //用户名可以使用的时候，保存用户名
                        $.ajax({
                          url:'/api/index.php?r=user/set-username',
                          type:'POST',
                          dataType:'json',
                          data:{'username':params.username},
                          success:function(data){
                          },
                          error:function(){}
                        });
                      } else {
                        $('#username_tishi').html('用户名已存在,请重新设置');
                        $('#username_tishi').css('color','red');
                        return false;
                      }
                  },
                  error:function(){}
                });
              }
            };
          }

          
        
          //有没有密码的判断
          var mima=$.trim($('#qxl_mima').val());
          if(mima!='1')
          {
            window.location = "/index.php?r=user/set-username&username="+params.username;
            return false;
          }

          params.interest = $('#j-m-hidden').val();
          //alert(params.interest );
          $.post(url, params, function(json){
              // console.log(json);
              if(json.status == 'success'){
                  mLayerMsg('保存成功');
                  var username_have=$('#username').val();
                  if(username_have)
                  {
                    $('#username').attr('disabled','disabled');
                  }
                  setTimeout(function(){
                    location.reload();
                  },2000);
                 // alert(params.head_img);
              } else{
                mLayerMsg(json.errormsg);
              }
          }, 'json');
        });
    })(jQuery);
</script>

<!-- mqz 2016.5.14图片上传 -->
<script type="text/javascript" src="self_add_files/jquery.js"></script>
<script>


$("#weiboGoUnbind").on("click",function(){
   $.ajax({
        url:'/api/index.php?r=user/three-unbind&type=3',
        type:'GET',
        dataType:'json',
        success:function(data){
            if(data=='20000'){
                mLayerMsg('解绑成功');
                window.location = "/index.php?r=user/index";
              } else {
                mLayerMsg("解绑失败，请稍后重试");
                window.location = "/index.php?r=user/index";
              }
        },
        error:function(){}
    });
});


$("#qqGoUnbind").on("click",function(){
   $.ajax({
        url:'/api/index.php?r=user/three-unbind&type=2',
        type:'GET',
        dataType:'json',
        success:function(data){
            if(data=='20000'){
                mLayerMsg('解绑成功');
                window.location = "/index.php?r=user/index";
              } else {
                mLayerMsg("解绑失败，请稍后重试");
                window.location = "/index.php?r=user/index";
              }
        },
        error:function(){}
    });
});


  (function(){
    var file=$('#J-m-imgFile');
    var img=$('#J-m-imgFileImg');

    file.change(function() {
      // debugger

      var f = $(this).val();
                       
      if (!/\.(jpg|jpeg|png|JPG|PNG)$/.test(f)) {
        mLayerMsg('您上传的文件有误');
      } 
      else {
        var options = {
          success: function(txt) {
            var txt = eval('(' + txt + ')');
            if (txt.status == 0) {
             // alert("touxiang success");
              //如果图片上传成功
              img.attr("src", txt.url);

            } else {
              // console.log(txt);
            }
          }
        };
        file.parents("form").ajaxSubmit(options);
        return false;
      }

    })
  })();
</script>    </div><!--/mainRight-->
<!--/clearfix-->


<!--页脚-->
<div id="footer">
    <div class="area">
        <div class="clearfix">
            <div class="glbLeft">
                <dl class="fList">
                    <dt>关于我们</dt>
                    <dd>
                        <a href="http://www.ziroom.com/zhaopin/index.php?r=site/about">关于自如</a>
                        <a href="http://www.ziroom.com/about/lianxi.html">联系自如</a>
                        <a href="http://www.ziroom.com/zhaopin/">加入自如</a>
                    </dd>
                </dl>
                <dl class="fList">
                    <dt>自如业务</dt>
                    <dd>
                        <a href="http://www.ziroom.com/about/fuwu.html">业务体系</a>
                        <a href="http://www.ziroom.com/about/fuwu.html">自如产品</a>
                        <a href="http://www.ziroom.com/servicecentre/">自如服务</a>
                    </dd>
                </dl>
                <dl class="fList">
                    <dt>关注自如</dt>
                    <dd>
                        <a>自如客微信</a>
                        <a>下载app</a>
                    </dd>
                </dl>
            </div><!--/glbLeft-->
            <div class="glbRight">
                <div class="img">
                    <img src="self_add_files/zrk_ewm.png">
                    <p>关注自如客微信</p>
                </div>
                <div class="img">
                    <img src="self_add_files/app_ewm.png">
                    <p>下载自如app</p>
                </div><!--/img-->
            </div><!--/glbRight-->
        </div><!--/clearfix-->

        <div class="linksFooter">
            <dl class="clearfix">
                <dt>友情链接：</dt>
                <dd>
                    <div style="margin-top: -47px;" class="box" id="linksFooterList">
                        <p>
                            <a target="_blank" href="http://bj.loupan.com/">北京房产网</a>
                              <a target="_blank" href="http://www.landzestate.com/">豪宅别墅</a>
                              <a target="_blank" href="http://bj.xkhouse.com/">星空地产网</a>
                              <a target="_blank" href="http://www.wenchangfc.com/">文昌房产网</a>
                              <a target="_blank" href="http://www.zhuna.cn/ditie">地铁线路图</a>
                              <a target="_blank" href="http://bj.offcn.com/">北京人事考试网</a>
                              <a target="_blank" href="http://chongqing.anjuke.com/sale">重庆二手房</a>
                              <a target="_blank" href="http://bj.lanfw.com/">北京蓝房网</a>
                              <a target="_blank" href="http://dali.focus.cn/">大理房产</a>
                              <a target="_blank" href="http://www.0731jiaju.com/">家居网</a>
                              <a target="_blank" href="http://tj.lianjia.com/">天津二手房</a>
                              <a target="_blank" href="http://m.ziroom.com/">北京租房</a>
                              <a target="_blank" href="http://bt.focus.cn/">包头房产网</a>
                              <a target="_blank" href="http://house.365jia.cn/">合肥房产网</a>
                              <a target="_blank" href="http://chaozhou.ganji.com/">潮州赶集网</a>
                              <a target="_blank" href="http://datong.focus.cn/">大同房地产</a>
                              <a target="_blank" href="http://beijing.qd8.com.cn/">北京分类信息网</a>
                              <a target="_blank" href="http://xf.fccs.com/">襄阳房产</a>
                              <a target="_blank" href="http://www.lianjia.com/">房产网</a>
                              <a target="_blank" href="http://zufangzi.com/">丁丁租房</a>
                              <a target="_blank" href="http://www.517best.com/">旅游百事通</a>
                              <a target="_blank" href="http://www.shangceng.com.cn/">别墅装修</a>
                              <a target="_blank" href="http://bj.house.163.com/">网易北京房产</a>
                        </p>
                        <p>
                            <a target="_blank" href="http://bj.loupan.com/">北京房产网</a>
                              <a target="_blank" href="http://www.landzestate.com/">豪宅别墅</a>
                              <a target="_blank" href="http://bj.xkhouse.com/">星空地产网</a>
                              <a target="_blank" href="http://www.wenchangfc.com/">文昌房产网</a>
                              <a target="_blank" href="http://www.zhuna.cn/ditie">地铁线路图</a>
                              <a target="_blank" href="http://bj.offcn.com/">北京人事考试网</a>
                              <a target="_blank" href="http://chongqing.anjuke.com/sale">重庆二手房</a>
                              <a target="_blank" href="http://bj.lanfw.com/">北京蓝房网</a>
                              <a target="_blank" href="http://dali.focus.cn/">大理房产</a>
                              <a target="_blank" href="http://www.0731jiaju.com/">家居网</a>
                              <a target="_blank" href="http://tj.lianjia.com/">天津二手房</a>
                              <a target="_blank" href="http://m.ziroom.com/">北京租房</a>
                              <a target="_blank" href="http://bt.focus.cn/">包头房产网</a>
                              <a target="_blank" href="http://house.365jia.cn/">合肥房产网</a>
                              <a target="_blank" href="http://chaozhou.ganji.com/">潮州赶集网</a>
                              <a target="_blank" href="http://datong.focus.cn/">大同房地产</a>
                              <a target="_blank" href="http://beijing.qd8.com.cn/">北京分类信息网</a>
                              <a target="_blank" href="http://xf.fccs.com/">襄阳房产</a>
                              <a target="_blank" href="http://www.lianjia.com/">房产网</a>
                              <a target="_blank" href="http://zufangzi.com/">丁丁租房</a>
                              <a target="_blank" href="http://www.517best.com/">旅游百事通</a>
                              <a target="_blank" href="http://www.shangceng.com.cn/">别墅装修</a>
                              <a target="_blank" href="http://bj.house.163.com/">网易北京房产</a>
                        </p>
                      
                      
                    </div>
                </dd>
            </dl>
        </div>
        
        <div class="footerBottom">
            <p>Copyright@2015 ziroom.com  版权所有 京ICP备16015349号-1经营许可证编号  京ICP证120198号</p>
            <p>联系客服：自如客微信  周一至周日09:00-22:00</p>
        </div>
    </div><!--/area-->
</div><!--/footer-->

<script type="text/javascript">
    var oLinksList=$('#linksFooterList');
    var iLinksHeight=oLinksList.outerHeight();
    var iNum = iLinksHeight/47;
    var iN=0;
    var oLogout=$('#logout');
    

   
    setInterval(function(){
        iN++;
        iN = iN%iNum;
        var top = iN*47;
        if(top >= iLinksHeight/2+47){
             oLinksList.css({'margin-top':'0px'});
             iN=0;
        }else{
            oLinksList.animate({'margin-top':-iN*47+'px'},1000); 
        }

       

    },3000);


$("#logout").on("click",function(){
   $.ajax({
        url:'/api/index.php?r=user/logout',
        type:'POST',
        dataType:'json',
        success:function(data){
            if(data.status=='1'){
             // mLayerMsg('退出成功');
              if (data.returnUrl==null) {
                window.location.href='/index.php?r=user/login';
              } else {
                window.location.href=data.returnUrl;
              }
                
            } else {
               // alert("failed");
              //  mLayerMsg('退出成功');

                window.location.href='/index.php?r=user/login';
            }
        },
        error:function(){}
    });
});
     
</script>



</body></html>