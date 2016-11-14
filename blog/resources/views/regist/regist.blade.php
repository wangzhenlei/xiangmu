<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>北京租房_北京租房网_北京租房信息|价格|网站【自如网】</title>
    <meta name="keywords" content="北京租房,北京租房网,北京租房信息,北京租房价格,北京租房信息网,北京租房网站">
    <meta name="description" content="高品质北京租房品牌“自如”，旗下“自如友家”“自如寓”两大产品，数万间公寓。自如承诺：3天不满意全额退款！信仰生活的人，迟早与自如相遇！自如是最高品质的北京租房信息|价格|网站。">
    <meta http-equiv="cache-control" content="no-cache, must-revalidate">
    <meta content="width=1200, initial-scale=1, maximum-scale=1, user-scalable=1" name="viewport">
    <link rel="stylesheet" type="text/css" href="regist_files/common.css">
    <script type="text/javascript" src="regist_files/jquery.js"></script>
    <script type="text/javascript" src="regist_files/z-common.js"></script>
    <script type="text/javascript" src="regist_files/layer.js"></script><link style="" id="layui_layer_skinlayercss" href="regist_files/layer.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="regist_files/zoneStyle.css">

</head>
<body>

<!-- 弹出层 -->

<div id="M_layer_box" style="display:none"></div>
<div class="m-header">
    <div class="m-header_content">
        <a href="http://www.ziroom.com/"></a>
    </div>
</div>

<div class="m-content">
    <div class="m-content_mid">
        <div class="modal" id="modal" style="display: block;">

            <div class="modal-content logins" id="logins" style="display: none;">

                <a href="javascript:;" class="close m_icon"></a>
                <h2 class="logo m_icon"></h2>
                <div class="separator m_icon"></div>

                <div class="control-group">
                    <span class="m_icon user"></span>
                    <input name="user_name" id="user_name" placeholder="请输入登录手机号" class="inp_txt" tabindex="1" type="text">
                    <p for="user_name" class="invalid" style="display: none;"></p>
                </div>
                <div class="control-group">
                    <span class="m_icon pas"></span>
                    <input name="user_pas" id="user_pas" placeholder="请输入6-16位密码" class="inp_txt" tabindex="2" type="password">
                    <p for="user_pas" class="invalid" style="display: none;"></p>
                </div>

                <div class="control-group " id="captcha_tr" style="display:none;">
                    <input id="is_captcha" value="0" type="hidden">


                    <div class="clearfix">
                        <input name="verification" id="verification" placeholder="请输入验证码" class="inp_txt inp_yzm" tabindex="3" type="text"><img src="" class="cur_pointer captcha_img" height="45" width="114">
                        <span class="m_icon refurbish"></span>
                    </div>

                    <p for="verification" class="invalid" style="display: none;"></p>
                </div>

                <div class="control-group clearfix">
                    <p class="fl checkbox" id="within"><label for="within_a_week"><span class="m_icon"></span><input id="within_a_week" type="checkbox">一周内免登录</label></p>
                    <a href="http://passport.ziroom.com/?_p=sign&amp;_a=weakpassowrd&amp;step=1&amp;type=forgetpassword" class="fr org">忘记密码？</a>
                </div><!--/control-group-->
                <div class="control-group clearfix">
                    <input value="登 录" class="org_btn" id="login_button" type="button">

                </div><!--/control-group-->


                <div class="control-group clearfix tc bottom">
                    没有账号？现在就 <a href="javascript:;" class="org" id="toSignup">注册</a>
                </div><!--/control-group-->


            </div><!--/modal-content-->



            <div class="modal-content signup" id="signup" style="display: block; margin-top: -35px;">
                <div class="separator m_icon"></div>
                <form action="/api/index.php?r=user/register" method="post" id="m-j-sign_form">

                    <div class="control-group">
                        <span class="m_icon tel_icon"></span>
                        <input name="phone" id="sign_name" placeholder="建议使用常用手机号或邮箱" class="inp_txt" type="text">
                        <p for="sign_name" class="invalid" style="display: none;">请输入符合格式的手机号或邮箱</p>
                    </div>

                    <div class="control-group ">

                        <input name="m_imgYzm" id="sign_yzm" placeholder="请输入验证码" class="inp_txt inp_yzm" type="text">
                        <input value="592486ea9edcff2cc0d02648ef8ba6b3" id="J-m-img_hidden" name="m_imgId" type="hidden">
                        <img data-imgid="592486ea9edcff2cc0d02648ef8ba6b3" src="regist_files/v1.jpg" class="cur_pointer captcha_img" id="J-m-img" height="45" width="114">
                        <span class="m_icon refurbish" id="J-m-button"></span>
                        <p for="sign_yzm" class="invalid" style="display: none;">图片验证码输入不正确</p>
                    </div>

                    <div class="control-group ">

                        <input name="vcode" id="sign_duanxin" placeholder="短信验证码" class="inp_txt inp_yzm" type="text"><input value="获取验证码" class="gray_btn" id="tel_btn" type="button">
                        <p for="sign_duanxin" class="invalid" style="display: none;"></p>
                    </div>

                    <div class="control-group">
                        <span class="m_icon pas"></span>
                        <input name="password" id="sign_pas" placeholder="请输入6-16位密码" class="inp_txt" type="password">
                        <p for="sign_pas" class="invalid" style="display: none;">请输入6-16位密码</p>

                    </div>
                    
                    <div class="control-group">
                        <span class="m_icon pas"></span>
                        <input name="password1" id="sign_pas_two" placeholder="请确认密码" class="inp_txt" type="password">
                        <p for="sign_pas_two" class="invalid" style="display: none;">请确认密码一致且符合格式</p>

                    </div>

                    
                    
                    <div class="control-group clearfix">
                        <input value="注 册" class="org_btn" id="signup_button" type="button">
                    </div><!--/control-group-->


                    <div class="control-group clearfix tc bottom">
                        已有账号？现在就 <a href="login" id="toLogin" class="org">登录</a>
                    </div><!--/control-group-->
                </form>
            </div><!--/modal-content-->



        </div>
    </div>
</div>

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
                    <img src="regist_files/zrk_ewm.png">
                    <p>关注自如客微信</p>
                </div>
                <div class="img">
                    <img src="regist_files/app_ewm.png">
                    <p>下载自如app</p>
                </div><!--/img-->
            </div><!--/glbRight-->
        </div><!--/clearfix-->

        <div class="linksFooter">
            <dl class="clearfix">
                <dt>友情链接：</dt>
                <dd>
                    <div style="margin-top: -141px;" class="box" id="linksFooterList">
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

        <a href="http://www.ziroom.com/"><div class="footerBottom">
            <p>Copyright@2015 ziroom.com  版权所有 京ICP备16015349号-1经营许可证编号  京ICP证120198号</p>
            <p>联系客服：自如客微信  周一至周日09:00-22:00</p>
        </div>
    </a></div><!--/area--><a href="http://www.ziroom.com/">
</a></div><!--/footer--><a href="http://www.ziroom.com/">

<script type="text/javascript">
    var oLinksList=$('#linksFooterList');
    var iLinksHeight=oLinksList.outerHeight();
    var iNum = iLinksHeight/47;
    var iN=0;


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


//mqz 2016.5.11 注册表单验证
    (function(){
        var oForm=$('#m-j-sign_form');
        var oSubmit=$('#signup_button');

        var phoneReg=/^(13[0-9]|14[0-9]|15[0-9]|17[0-9]|18[0-9])\d{8}$/;
        var emailReg=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var picyzmReg=/^[a-zA-Z0-9]{3,4}$/;

        var username=$('#sign_name');
        var usernameInf=username.next();

        var pass1=$('#sign_pas');
        var pass2=$('#sign_pas_two');

        var yzmDuanxin=$('#sign_duanxin');
        var yzmBox=yzmDuanxin.parent();
        var phoneYzmBtn=$('#tel_btn');

        var picYzmInp=$('#sign_yzm');
        var picYzm=$('#J-m-img');


        //各种flag
        var userFlag=false;
        var passFlag1=false;
        var passFlag2=false;
        var picYzmFlag=false;


        //验证用户注册的用户名是手机还是邮箱
        username.blur(function(){
            if(phoneReg.test(this.value)){
                // usernameInf.css({
                //     display:'none'
                // });
                // $(this).attr('name','phone');
                // userFlag=true;
                yzmBox.css({
                     display:'block'
                });
                
                $(this).attr('name','phone');

                var value=username.val()+"";
                $.ajax({
                    url:'/api/index.php?r=user/verify-account',
                    type:'POST',
                    dataType:'json',
                    data:{"phone":value},
                    success:function(str){
                        //alert('success');
                        //alert(str);
                        if(str.resp.exist==true){
                            usernameInf.html('该手机号已注册');
                            usernameInf.css({
                                display:'block'
                            });
                            userFlag=false;
                        }
                        else{
                            usernameInf.css({
                                display:'none'
                            });
                            userFlag=true;
                        }
                    }           
                });
            }
            else if(emailReg.test(this.value)){

                yzmBox.css({
                    display:'none'
                });

                $(this).attr('name','email');

                var value=username.val();
                $.ajax({
                    url:'/api/index.php?r=user/verify-account',
                    type:'POST',
                    dataType:'json',
                    data:{"email":value},
                    success:function(str){
                        if(str.resp.exist==true){
                            usernameInf.html('该邮箱已注册');
                            usernameInf.css({
                                display:'block'
                            });
                            userFlag=false;
                        }
                        else{
                            usernameInf.css({
                                display:'none'
                            });
                            userFlag=true;
                        }
                    }           
                });

            }
            else{
                //alert('请输入符合格式的手机号或邮箱');
                username.html('请输入符合格式的手机号或邮箱');
                usernameInf.css({
                    display:'block'
                });
                userFlag=false;
            }
        });


        //验证用户两次输入密码符合位数且一致
        //
        //
        
        pass1.keydown(function(ev){
            if(ev.keyCode==32){
                ev.preventDefault();
                return false;
            }
        });

        pass2.keydown(function(ev){
            if(ev.keyCode==32){
                ev.preventDefault();
                return false;
            }
         });


        pass1.blur(function(){
            if(this.value.length>=6&&this.value.length<=16 && this.value.indexOf(' ')==-1){
                $(this).next().css({
                    display:'none'
                });
                passFlag1=true;
            }
            else{
                $(this).next().css({
                    display:'block'
                });
                passFlag1=false;
            }
        });

        pass2.blur(function(){
            if(this.value.length>=6&&this.value.length<=16&&this.value==pass1.val()){
                $(this).next().css({
                    display:'none'
                });
                passFlag2=true;
            }
            else{
                $(this).next().css({
                    display:'block'
                });
                passFlag2=false;
            }
        });



        //如果是手机，必须输入图片验证码获取短信验证码
        picYzmInp.keyup(function(){

            //如果在倒计时就不允许再次点击
            if(phoneYzmBtn.val()!='获取验证码'&&phoneYzmBtn.val()!='重新发送'){
                return;
            }

            //手机格式必须对
            if( ! userFlag){
                return;
            }

            if(picyzmReg.test(this.value)){
                phoneYzmBtn.addClass('active');
                phoneYzmBtn[0].onclick=getPhoneYzm;
                picYzmFlag=true;
            }
            else{
                phoneYzmBtn.removeClass('active');
                phoneYzmBtn[0].onclick=null;
                picYzmFlag=false;
            }
        });


        //点击提交注册表单
        oSubmit.click(function(){
            //alert(' userFlag'+userFlag+' passFlag1'+passFlag1+' passFlag2'+passFlag2+' picYzmFlag'+picYzmFlag);
            if(userFlag&&passFlag1&&passFlag2&&picYzmFlag){
                var json=null;
                if(username.attr('name')=='phone'){
                    json={phone:username.val(),password:pass1.val(),vcode:yzmDuanxin.val()};
                }
                else{
                    json={email:username.val(),password:pass1.val(),vcode:yzmDuanxin.val()};
                }


                $.ajax({
                    url:'/api/index.php?r=user/register',
                    type:'POST',
                    data:json,
                    dataType:'json',
                    success:function(data){
                        if(data.code=='20000'){

                            mLayerMsg('注册成功');
                            setTimeout(function(){
                                window.location.href='/index.php?r=user/login';
                            },2000);
                            
                        }else{
                            mLayerMsg(data.message);
                        }
                    },
                    error:function(str){
                        // console.log(str);
                    }    
                });
            }
            else{
                mLayerMsg('注册信息有误');
            }
        });

        //通过传入图片id和用户输入图片验证码的值来获取短信验证码
        function getPhoneYzm(){
            stopClick();
            $.ajax({
                url:'http://passport.ziroom.com/verify/code/v2',
                dataType:'jsonp',
                data:{"phone":username.val(),"type":"1","imgId":picYzm.attr('data-imgId'),"imgVValue":picYzmInp.val()},
                jsonp:"callback",
                success:function(data){
                    // console.log(data);
                    if(data.message=='success'){
                        picYzm.next().next().css({
                            display:'none'
                        });
                    }
                    else{
                        picYzm.next().next().css({
                            display:'block'
                        });

                        //重置图片验证码
                        addImgRequest('#J-m-img','#J-m-img_hidden');
                    }

                },
                error:function(str){
                    //请求失败
                    // console.log(str);
                }
            })
        }

        //倒计时60S函数
        function stopClick(){

            var total=60;

            phoneYzmBtn.removeClass('active');
            phoneYzmBtn[0].onclick=null;
            phoneYzmBtn.val('60');

            var t=setInterval(function(){
                total--;
                phoneYzmBtn.val(total);

                if(total==0){
                    clearInterval(t);
                    phoneYzmBtn.addClass('active');
                    phoneYzmBtn[0].onclick=getPhoneYzm;
                    phoneYzmBtn.val('重新发送');
                }
            },1000);
        }
    })();


    //获取图片验证码
    function addImgRequest(imgId,hiddenId){
        function uuid(){
            var str='0123456789abcdef';
            var res='';
            for(var i=0;i<32;i++){
                res+=str.charAt(Math.floor(Math.random()*16));
            }

            return res;
        }

        var oImg=$(imgId);
        var oHidden=$(hiddenId);

        var u=uuid();
        oImg.attr('data-imgId',u);
        oHidden.val(u);
        oImg.attr('src','http://passport.ziroom.com/img/verify/code/v1?imgId='+u);
    }

    $('#J-m-button').click(function(){
        addImgRequest('#J-m-img','#J-m-img_hidden');
    });
    addImgRequest('#J-m-img','#J-m-img_hidden');
</script>


</a></body></html>