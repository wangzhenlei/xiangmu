<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>自如网-我的自如</title>
<meta name="keywords" content="北京白领公寓，北京合租房，北京公寓合租">
<meta name="description" content="自如是北京最大的高品质公寓租房品牌，拥有“自如友家”“自如寓”两大产品，数万间公寓，15万租客入住、品牌家具家电、100%真房源、线上订房、拎包入住 、 3天不满意全额退款">
<meta content="width=1200, initial-scale=1, maximum-scale=1, user-scalable=1" name="viewport">
<link rel="stylesheet" type="text/css" href="zone_files/common.css">
<link rel="stylesheet" type="text/css" href="zone_files/my_zone.css">
<script src="zone_files/ga.js" async="" type="text/javascript"></script><script type="text/javascript" src="zone_files/jquery.js"></script>
<script type="text/javascript" src="zone_files/z-common.js"></script>
<script type="text/javascript" src="zone_files/z-ui.js"></script>
<script type="text/javascript" src="zone_files/WdatePicker.js"></script><link type="text/css" rel="stylesheet" href="zone_files/WdatePicker.css">
<script type="text/javascript" src="zone_files/Validform_v5.js"></script>

<!--[if IE]>
<script type="text/javascript">(function(){var e="abbr,article,aside,audio,canvas,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(","),t=e.length;for(var i=0; i<t; i++){document.createElement(e[i])}})();</script>
<![endif]-->

<script type="text/javascript">
var znl="http://www.ziroom.com"+"/z/nl/";
$(function(){
 
    $(".btn_sub").click(function(){
        var $this=$(this);
        var iq = $("#i_q_keyword_"+$this.attr("name")).val();
        if (iq=="请输入地名，地铁线路，站点名..." || iq=="")return ;
        var _url = $("#i_q_keyword_"+$this.attr("name")).attr('_url');
           if(typeof(_url)!='undefined' && _url!='')
             var zr = "http://www.ziroom.com"+$("#i_q_keyword_"+$this.attr("name")).attr('_url');
           else
             var zr = "http://www.ziroom.com"+"/z/nl/";
        var query=zr+"?qwd="+$("#i_q_keyword_"+$this.attr("name")).val();
        window.location.href = encodeURI(query) ;
        //window.open(query);
    });
    $("#i_q_keyword_1").keydown(function(e){
        if(e.keyCode == 13) {
        var iq = $("#i_q_keyword_1").val();
        if (iq=="请输入地名，地铁线路，站点名..." || iq=="")return ;
        var zr = "http://www.ziroom.com"+"/z/nl/";
        var query=zr+"?qwd="+$("#i_q_keyword_1").val();
        window.location.href = encodeURI(query) ;
        }
    });

    var uid = '3cf6be85-196d-4fba-b0d7-85d0ca950fb9';
    if(uid){
        $.ajax({
            type:'POST',
            url:"index.php?uri=message/headerMessage",
            data:{},
            success: function(msg){
                    $('#header_message').html(msg);
            }
        });
    }
    

});

$(function () {
    var arr = [
        {'id': 'i_q_keyword_1', 'desc': '请输入地名，地铁线路，站点名...'},
        {'id': 'i_q_keyword_2', 'desc': '请输入地名，地铁线路，站点名...'},
        {'id': 'i_q_keyword_3', 'desc': '请输入地名，地铁线路，站点名...'},
        {'id': 'reason', 'desc': '100字以内'}
    ];
    //for (var i = 0; i < arr.length; i++) {
      // $("#"+arr[i].id).size()>0 && watermark(arr[i].id, arr[i].desc);
    //}

    $("#btn_sub_2").click(function () {
        var $this = $(this);
        var n=$(this).attr('name');
        var iq = $("#i_q_keyword_"+n).val();
        if (iq == "请输入地名，地铁线路，站点名..." || iq == "")return;
        var zr = "http://www.ziroom.com" + "/z/nl/";
        var query = zr + "?qwd=" + $("#i_q_keyword_"+n).val();
        window.location.href = encodeURI(query);
    });
    $("#i_q_keyword_2").keydown(function (e) {
        if (e.keyCode == 13) {
            var iq = $("#i_q_keyword_2").val();
            if (iq == "请输入地名，地铁线路，站点名..." || iq == "")return;
            var zr = "http://www.ziroom.com" + "/z/nl/";
            var query = zr + "?qwd=" + $("#i_q_keyword_2").val();
            window.location.href = encodeURI(query);
        }
    });
     $("#btn_sub_3").click(function () {
        var $this = $(this);
        var n=$(this).attr('name');
        var iq = $("#i_q_keyword_"+n).val();
        if (iq == "请输入地名，地铁线路，站点名..." || iq == "")return;
        var zr = "http://www.ziroom.com" + "/z/nl/";
        var query = zr + "?qwd=" + $("#i_q_keyword_"+n).val();
        window.location.href = encodeURI(query);
    });
    $("#i_q_keyword_3").keydown(function (e) {
        if (e.keyCode == 13) {
            var iq = $("#i_q_keyword_2").val();
            if (iq == "请输入地名，地铁线路，站点名..." || iq == "")return;
            var zr = "http://www.ziroom.com" + "/z/nl/";
            var query = zr + "?qwd=" + $("#i_q_keyword_2").val();
            window.location.href = encodeURI(query);
        }
    });
});
</script>

</head>
<body>
    <header id="header" class="zone_bor">
    <div class="top">
        <div class="area clearfix">
            <ul class="fl">
                                <li class="bor"><a href="http://www.ziroom.com/" target="_blank">首页</a></li>
                                <li class="bor"><a href="http://www.ziroom.com/z/nl/" target="_blank">自如找房</a></li>
                <li class="bor"><a href="http://www.ziroom.com/index.php?_p=nlist&amp;_a=product" target="_blank">自如友家</a></li>
                <li><a href="http://www.ziroom.com/ziroomer/" target="_blank">自如生活</a></li>

            </ul>
            <ul class="fr">
                                                <input id="login_flag" value="630315552" type="hidden">

                                                <li>Hi，630315552,你有0积分!</li>
                <li class="bor"><a href="http://passport.ziroom.com/logout.html" rel="nofollow">退出</a></li>
                                <li class="menu_list bor">
                    <a rel="nofollow" class="menu" target="_blank" href="http://i.ziroom.com/?uri=ziroomer/index">我的自如<b></b>
                    </a>
                    <ul>
                         
                        <li><a rel="nofollow" href="http://i.ziroom.com/?uri=look/index">我的约看</a></li>
                        <li><a class="txt_t" href="http://i.ziroom.com/?uri=love" rel="nofollow">我的收藏</a></li>
                        <li><a rel="nofollow" href="http://i.ziroom.com/?uri=integral/integral" class="txt_t">我的积分</a></li>
                        <li><a rel="nofollow" href="http://i.ziroom.com/?uri=contract/pay" class="txt_t">我的合同</a></li>
                        <li><a rel="nofollow" href="http://i.ziroom.com/?uri=cash/record" class="txt_t">我的钱包</a></li>
                        <li><a rel="nofollow" href="http://i.ziroom.com/?uri=collect" class="txt_t">房源订阅</a></li>
                        <li><a rel="nofollow" href="http://i.ziroom.com/?uri=lease/index" class="txt_t">租约变更</a></li>
                        </ul>
                </li>
                <!-- 2015-04-23 -->
                <li class="menu_list bor pr">
                    <a rel="nofollow" class="menu" target="_blank" href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;消息<b></b></a>
                    <style>
                        #header .top .area li.menu_list ul.message{top: 24px; left: -58px; width: 180px; padding: 10px;}
                        #header .top .area li.menu_list ul.message li{float: none; height: auto; padding: 0;}
                        #header .top .area li.menu_list ul.message li p{word-wrap:break-word; word-spacing:normal;}
                        #header .top .area li.menu_list ul.message li.history-message{padding: 5px 0;}
                        #header .top .area li.menu_list ul.message li.history-message a{display: block; width: 130px; margin: 0 auto; background: #f60; line-height: 24px; color: #fff; text-align: center;}
                        #header .top .area li.menu_list ul.message li.all-message a{display: block; width: 130px; margin: 0 auto; background: #f60; line-height: 24px; color: #fff; text-align: center;}
                    </style>
                    <ul class="message pa" id="header_message"><li class="history-message"><a rel="nofollow" href="http://i.ziroom.com/index.php?uri=message/index&amp;type=all&amp;status=old">查看历史消息</a></li>
                <li class="all-message"><a class="txt_t" href="http://i.ziroom.com/index.php?uri=message/index&amp;type=all&amp;status=all" rel="nofollow">查看全部消息</a></li></ul>
                </li>
                <!-- 2015-04-23 -->
                <li class="menu_list bor">
                    <a rel="nofollow" class="menu" target="_blank" href="http://www.ziroom.com/g/login.html">在线服务<b></b></a>
                    <ul>
                        <li><a rel="nofollow" href="http://i.ziroom.com/?uri=contract/pay">在线交费</a></li>
                    </ul>
                </li>
                <li class="menu_list zapplist ">
                    <a href="http://www.ziroom.com/static/201401/androidapp.html" target="_blank" class="menu" rel="nofollow">移动自如<b></b></a>
                    <div class="bgbox"></div>
                    <ul class="appdown">
                        <li class="t1"><div class="apppic"></div><div class="tc">安卓App</div></li>
                        <li class="t1"><div class="fuwupic"></div><div class="tc">微信号</div></li>
                        <li class="t2 mt3"><a href="https://itunes.apple.com/cn/app/zi-ru-ke-ziroomer-pin-zhi/id685872176?ls=1&amp;mt=8" class="downandroid"></a></li>
                        <li class="t2 mt5"><a href="http://pic.ziroom.com//android/app/ziroomer.apk" class="downios"></a></li>
                        <li class="tl version t2"></li>
                    </ul>
                </li>

        	</ul>
        </div>
    </div>


    <div class="area clearfix">
        <div class="logo zone_logo">
                                    <a href="http://www.ziroom.com/">
                        <img src="zone_files/logo.png" title="北京白领公寓，提供品质租住生活" alt="北京白领公寓合租">
                    </a>
                        </div>
        <div class="search zone_search">
            <input placeholder="请输入地名，地铁线路，站点名……" class="txt inp-bor textipt" id="i_q_keyword_1" type="text">
            <button type="button" class="btn btn_sub iconfont" name="1"></button>
            <div class="t_ajaxbox"><ul id="suggestion"></ul></div>
        </div>
       <ul class="site_api fr">
            <li class="active">
                <a class="btn_bbs" href="http://i.ziroom.com/index.php"><em></em>自如空间</a>
            </li>
             
            <li>
                <a class="btn_bbs" href="http://www.ziroom.com/ziroomer/"><em></em>自如生活</a>
            </li>
            <li>
                <a class="btn_mall" href="http://zmall.ziroom.com/ziroomer/score"><em></em>自如商城</a>
            </li>
           
        </ul>
    </div>
</header><!--/header-->
<div class="area zone_cont clearfix" style="position: relative; z-index: 1;">
<div class="fl l_aside">
             <dl class="my_zr">
            <dt>我的自如</dt>             
            <dd><a href="http://i.ziroom.com/index.php?uri=look/index" class="my_pact"><em></em>我的约看</a></dd>
            <dd><a href="http://i.ziroom.com/index.php?uri=contract/pay" class="my_pact"><em></em>我的合同</a></dd>            
            <dd><a href="http://i.ziroom.com/index.php?uri=lease/index" class="my_pact"><em></em>租约变更</a></dd>
            <dd><a class="my_integral subNav hovecolor"><em></em>我的积分</a>
            <ul class="navContent tent" id="myIntegral">
                <li><a href="http://i.ziroom.com/index.php?uri=integral/integral&amp;myIntegral=0">积分记录</a></li>
                <li><a href="http://i.ziroom.com/index.php?uri=friends/mycards&amp;myIntegral=1&amp;card_type=coupon">我的卡包</a></li>
                <li><a href="http://i.ziroom.com/index.php?uri=orderlist&amp;myIntegral=2">我的订单</a></li>
	      </ul>
            </dd>
            <dd><a class="my_purse subNav hovecolor"><em></em>我的钱包</a>
             <ul class="navContent " id="mybank">
                <li><a href="http://i.ziroom.com/index.php?uri=cash/record&amp;mybank=0">提现记录</a></li>
                <li><a href="http://i.ziroom.com/index.php?uri=cash/bank&amp;mybank=1">提现申请</a></li>
                <li><a href="http://i.ziroom.com/index.php?uri=cash&amp;mybank=2">我的银行卡</a></li>
	       </ul>
            </dd>
            <dd><a href="http://i.ziroom.com/index.php?uri=collect" class="room_take"><em></em>房源订阅</a></dd>
            <dd><a href="http://i.ziroom.com/index.php?uri=love" class="my_pact"><em></em>我的收藏</a></dd>
            
        </dl>
     
        <dl class="zr_bbs">
            <dt>自如社区</dt>
            <dd><a href="http://i.ziroom.com/index.php?uri=community/index&amp;type=actives" class="friends"><em></em>友邻动态</a></dd>
            <dd><a href="http://i.ziroom.com/index.php?uri=community/index&amp;type=all" class="trends"><em></em>小区动态</a></dd>
            <dd><a href="http://www.ziroom.com/ziroomer/express/" class="sublet"><em></em>转租快讯</a></dd>
        </dl>
        <dl class="zr_bbs">
            <dt>客户服务</dt>
            <dd><a target="_black" href="http://www.ziroom.com/servicecentre/?_p=servicecentre&amp;_a=appointment" class="cleaning"><em></em>预约保洁</a></dd>
            <dd><a target="_black" href="http://www.ziroom.com/servicecentre/" class="repair"><em></em>报修申请</a></dd>
            <dd><a href="http://i.ziroom.com/?uri=ziroomer/complain_list" class="complaint"><em></em>在线投诉</a></dd>
            <dd><a href="http://www.ziroom.com/zhuanti/banjia2015/index.html" class="sublet"><em></em>自如搬家</a></dd>
        </dl>
    
        </div><!--/l_aside-->
    <script type="text/javascript">
$(function(){
    $(".subNav").click(function(){
        $(this).toggleClass("currentDd").siblings(".subNav").removeClass("currentDd");
        $(this).toggleClass("currentDt").siblings(".subNav").removeClass("currentDt");

        $(this).next(".navContent").slideToggle(500);
	});
    
    var thelink=window.location.href;
    if(thelink.indexOf("myIntegral=0")!=-1){
        $(".subNav").eq(0).toggleClass("currentDd");
        $(".subNav").eq(0).next(".navContent").slideToggle(500);
        $(".subNav").eq(0).next(".navContent").find("li").eq(0).find("a").addClass("activebg");
    }else if(thelink.indexOf("myIntegral=1")!=-1){
        $(".subNav").eq(1).toggleClass("currentDd");
        $(".subNav").eq(0).next(".navContent").slideToggle(500);
        $(".subNav").eq(0).next(".navContent").find("li").eq(1).find("a").addClass("activebg");
    }else if(thelink.indexOf("myIntegral=2")!=-1){
        $(".subNav").eq(2).toggleClass("currentDd");
        $(".subNav").eq(0).next(".navContent").slideToggle(500);
        $(".subNav").eq(0).next(".navContent").find("li").eq(2).find("a").addClass("activebg");
    }else if(thelink.indexOf("mybank=0")!=-1){
        $(".subNav").eq(1).toggleClass("currentDd");
        $(".subNav").eq(1).next(".navContent").slideToggle(500);
        $(".subNav").eq(1).next(".navContent").find("li").eq(0).find("a").addClass("activebg");
    }else if(thelink.indexOf("mybank=1")!=-1){
        $(".subNav").eq(1).toggleClass("currentDd");
        $(".subNav").eq(1).next(".navContent").slideToggle(500);
        $(".subNav").eq(1).next(".navContent").find("li").eq(1).find("a").addClass("activebg");
    }else if(thelink.indexOf("mybank=2")!=-1){
        $(".subNav").eq(1).toggleClass("currentDd");
        $(".subNav").eq(1).next(".navContent").slideToggle(500);
        $(".subNav").eq(1).next(".navContent").find("li").eq(2).find("a").addClass("activebg");
    }
    
})
</script>

<div class="fl center_cont">

    	<div class="myTopInfo mb20">
    		<div class="info fl">
    			<div class="userPic pr fl">
                    <img src="zone_files/a.jpg" onerror="this.src='/static/2014/images/gjnone.png'" height="113" width="113">
    				<div class="userPicBg"></div>
    			</div><!--/userPic-->
    			<div class="userDetail fr">
    				<p><span class="fs22">630315552</span> <a target="_blank" href="http://passport.ziroom.com/" class="grayBtnLine col_bg">编辑资料</a></p>
    				<p class="lineHeight16">晚上好~每一天，努力让梦想更近一些，让生活更充实一点...</p>

    				<p class="clearfix mt20">
    					<span class="fl">我的钱包： ￥0</span>
    					<span class="fr"><a href="http://i.ziroom.com/?uri=cash/bank" class="grayBtnLine col_bg">提现</a></span>
    				</p>
    				<p class="clearfix">
    					<span class="fl">我的积分：0分</span>
    					<span class="fr"><a href="http://i.ziroom.com/index.php?uri=integral/integral" class="grayBtnLine col_bg">我的积分</a></span>
    				</p>
    			</div><!--/userDetail-->
    		</div><!--/info-->

    		<div class="hetongTab fr">

                <ul class="tabNav font_wr clearfix">
                    暂无合同信息
                                    </ul>
                <div class="tabContent">
                                     </div><!--/tabContent-->

    		</div><!--/hetong fr-->
    		<script type="text/javascript">
    			$(".hetongTab").tab({tabNavObj:".tabNav",tabContentObj:".tabContent",tabContent:".con",eventType:"mouseover"});

                        $(".hetongTab .tabNav  li").live('mouseover',function(){
                            var _index=$(this).index();
                            if ($('#steward_infor_box .steward_infor').eq(_index).text()) {
                                $('#steward_infor_box .steward_infor').eq(_index).show().siblings().hide();
                            } else {
                                $('#steward_infor_box .steward_infor').hide();
                            }
                        });
                     
                </script>
    	</div><!--/myTopInfo-->

</div><!--/center_cont-->



<div class="fr r_aside">
		<h2 class="fs18">推荐房源</h2>
        <ul class="tuijianList">
                    	<li>
                    <a href="http://www.ziroom.com/z/vr/272297.html" target="_blank" title="海淀区苏州桥10号线苏州街2居室-南卧">
					<img onerror="this.src='/static/2014/images/wutu_dzz.jpg'" src="zone_files/v180x135_20160822215214943_F.JPG" height="85" width="136">
					<div class="s_txt">
					<p class="font_wr mb5">朝阳首都机场首都机场南路西里3居室-东卧源新第4居室-05卧</p>
					<p><span class="org">¥1160</span></p>
					<p><span class="gray">朝东 -5/5层</span></p>
					</div>
				</a>


        	</li>
                        	<li>
                    <a href="http://www.ziroom.com/z/vr/100005.html" target="_blank" title="海淀区苏州桥10号线苏州街2居室-南卧">
					<img onerror="this.src='/static/2014/images/wutu_dzz.jpg'" src="zone_files/v180x135_20160713193313346_F.JPG" height="85" width="136">
					<div class="s_txt">
					<p class="font_wr mb5">朝阳首都机场南平里3居室-北卧源新第4居室-05卧</p>
					<p><span class="org">¥1170</span></p>
					<p><span class="gray">朝北 -1/6层</span></p>
					</div>
				</a>


        	</li>
                        	<li>
                    <a href="http://www.ziroom.com/z/vr/60075867.html" target="_blank" title="海淀区苏州桥10号线苏州街2居室-南卧">
					<img onerror="this.src='/static/2014/images/wutu_dzz.jpg'" src="zone_files/v180x135_20160805212339387_F.JPG" height="85" width="136">
					<div class="s_txt">
					<p class="font_wr mb5">丰台旧宫有德家苑2号院3居室-南卧源新第4居室-05卧</p>
					<p><span class="org">¥1290</span></p>
					<p><span class="gray">朝南 -8/17层</span></p>
					</div>
				</a>


        	</li>
                        </ul>
        <div class="mb20"><a href="http://www.ziroom.com/z/nl/duanzu/kl.html"><img src="zone_files/yuezu135.jpg" alt="月租" title="月租" height="136" width="136"></a></div>
        <!--<div class="mb20"><a href="http://www.ziroom.com/zhuanti/zrk3zn/"><img src="/static/2014/images/xuyue.jpg" width="136" height="136" alt="自如客续约" title="自如客续约"></a></div>
-->
    </div><!--/r_aside-->

<div class="fl center_cont">

    </div><!--/center_cont-->
</div><!--/area-->


<div class="hide">
    <div id="video" style="width:600px; height:320px;">
       <embed src="zone_files/v.swf" allowfullscreen="true" quality="high" allowscriptaccess="always" type="application/x-shockwave-flash" align="middle" height="320" width="600">
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $(".index-tabWrap").tab({tabNavObj:".tabNav",tabContentObj:".tabContent",tabContent:".con",eventType:"mouseover"});
        $(".t_llickebtn").click(function () {
            var thi = $("#love");
            var id = $(thi).attr('data');
            var type = "people";
            $.ajax({
                type: 'POST',
                dataType: "json",
                url: "/index.php?uri=ziroomer/like",
                data: "type=" + type + "&article_id=" + id,
                success: function (msg) {
                    if (msg == "-1") {
//                                ZiroomLogin(love);
                    }
                    else {
                        if ($(thi).hasClass("t_llickebtnactive")) {
                            $(thi).removeClass("t_llickebtnactive");
                            $("#love_num").html(parseInt($(thi).attr("data-love")) - 1);
                            $(thi).attr("data-love", (parseInt($(thi).attr("data-love")) - 1));
                        } else {
                            $(thi).addClass("t_llickebtnactive");
                            $("#love_num").html(parseInt($(thi).attr("data-love")) + 1);
                            $(thi).attr("data-love", (parseInt($(thi).attr("data-love")) + 1));
                        }

                    }
                }
            })
        });

        //如果用户还未进行转签操作，弹出提示
        $.ajax({
            type: 'POST',
            dataType: "json",
            url: "/index.php?uri=ziroomer/isdeal",
            data: "type=1",
            success: function (msg) {
                if (msg == "1") {
                    new Boxy('<div style="width:450px; padding:10px 25px 20px 25px; text-align:left; line-height:26px;"><p style="text-align: center">【您有履行中的合同需变更】</p>亲爱的自如客，感谢你一路的支持、信任与陪伴。<br>在近五年的发展中，自如逐渐成长为拥有独特气质与影响力的互联网租住O2O第一品牌。为了向你提供更好的服务，自如升级为资产管理模式，现需要你同意对合同进行更新。<br>为了不影响你线上线下的相关服务与操作，请于6月10日前下载自如客APP按照提示完成转签。<br>感谢你的支持与配合，祝你自如。<div class="mt10"><a target="_blank" href="http://www.ziroom.com/static/201401/androidapp.html" style="display:block; width:100%; height:40px; line-height:40px; font-size:16px; color:#fff; background:#ffa000; text-align:center; border-radius:3px; font-family:Microsoft Yahei;" class="downloadApp">下载自如客APP</a></div></div>',{title:'自如提示'});
                    $(".close").on("click",function(){
                        $.ajax({
                            type: 'POST',
                            dataType: "json",
                            url: "/index.php?uri=ziroomer/isdeal",
                            data: "type=2",
                            success: function (msg) {
                            }
                        });
                    })

                    $(".downloadApp").on("click",function(){
                        $.ajax({
                            type: 'POST',
                            dataType: "json",
                            url: "/index.php?uri=ziroomer/isdeal",
                            data: "type=2",

                            success: function (msg) {
                            }
                        });
                    })
                }
            }
        });

        $(".icon-guanbi").click(function ()
        {
            var thi=$(this);
            var uid=thi.attr("uid");
            var room_code=thi.attr("room_code");
            var comedate=thi.attr("comedate");
            $.ajax({
                type: 'POST',
                dataType: "json",
                url: "/index.php?uri=ziroomer/neighbor",
                data: "uid=" + uid + "&room_code=" + room_code+"&comedate="+comedate,
                success: function (msg) {
                    if(msg!='error')
                    {
                        alert('关闭成功');
                        thi.parent().hide();
                    }else{
                        alert('关闭不成功');
                    }
                }
            });

        })
    });
</script>
<script>
function setTab(name,cursel,n){
 for(i=1;i<=n;i++){
  var menu=document.getElementById(name+i);
  var con=document.getElementById("con_"+name+"_"+i);
  menu.className=i==cursel?"hover":"";
  con.style.display=i==cursel?"block":"none";
 }
}

</script>

<div id="links">
    <div class="area">
       <div id="business" class="business clearfix">
            <div class="grid-14">深圳租房全部商圈：</div>
			<div class="grid-86">
				<dl>
					<dt class="active"><span>A</span></dt>
					<dd>
					</dd>
					<dt><span>B</span></dt>
					<dd style="display:block">
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335705.html" title="宝安东中心合租房">宝安东中心合租房</a>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335705.html" title="碧海合租房">碧海合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335705.html" title="白沙岭合租房">白沙岭合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="宝安西中心合租房">宝安西中心合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="坂田南合租房">坂田南合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="坂田北合租房">坂田北合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="滨河南合租房">滨河南合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="八卦岭合租房">八卦岭合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="布吉合租房">布吉合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="宝安中心区合租房">宝安中心区合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="百花合租房">百花合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="保税区合租房">保税区合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="笔架山合租房">笔架山合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="坂田合租房">坂田合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="布心合租房">布心合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="笔架山合租房">笔架山合租房</a>
					</dd>
					<dt><span>C</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008613.html" title="财富中心合租房">财富中心合租房</a>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008613.html" title="臣田合租房">臣田合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008613.html" title="财富中心合租房">财富中心合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008613.html" title="车公庙合租房">车公庙合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008613.html" title="蔡屋围合租房">蔡屋围合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008613.html" title="翠竹合租房">翠竹合租房</a>
					</dd>
					<dt><span>D</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008614.html" title="大空合租房">大空合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008614.html" title="地王合租房">地王合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008614.html" title="大学城合租房">大学城合租房</a>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008614.html" title="大运合租房">大运合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008614.html" title="大鹏新区合租房">大鹏新区合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008614.html" title="东门合租房">东门合租房</a>
					</dd>
					<dt><span>E</span></dt>
					<dd>
						<a title="二里庄合租房" target="_blank" href="http://www.ziroom.com/z/nl/d23008618-b18335757.html">二里庄合租房</a>
					</dd>
					<dt><span>F</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008617.html" title="翻身北合租房">翻身北合租房</a>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008617.html" title="福田南合租房">福田南合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008617.html" title="福田北合租房">福田北合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008617.html" title="凤凰合租房">凤凰合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008617.html" title="翻身南合租房">翻身南合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008617.html" title="福永合租房">福永合租房</a>
 

					</dd>
					<dt><span>G</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335723.html" title="固戍合租房">固戍合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335723.html" title="公明合租房">公明合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335723.html" title="光明合租房">光明合租房</a>
						
					</dd>
					<dt><span>H</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="黄木岗合租房">黄木岗合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="宝安西中心合租房">宝安西中心合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="皇岗口岸合租房">皇岗口岸合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="弘雅合租房">弘雅合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="华强南合租房">华强南合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="华强北合租房">华强北合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="豪宅合租房">豪宅合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="海关合租房">海关合租房</a>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="洪湖合租房">洪湖合租房</a> 
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="华强合租房">华强合租房</a> 
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="皇岗合租房">皇岗合租房</a> 
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="横岗合租房">横岗合租房</a> 
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="黄贝岭合租房">黄贝岭合租房</a> 
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="后海合租房">后海合租房</a> 
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008618.html" title="华侨城合租房">华侨城合租房</a> 
					</dd>
					<dt><span>I</span></dt>
					<dd>
					</dd>
					<dt><span>J</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335710.html" title="景田合租房">景田合租房</a>
						
					</dd>
					<dt><span>K</span></dt>
					<dd>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008617-b18335782.html" title="看丹桥合租房">看丹桥合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008617-b18335782.html" title="科技园合租房">科技园合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008617-b18335782.html" title="科技园南合租房">科技园南合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008617-b18335782.html" title="科技园北合租房">科技园北合租房</a>
					</dd>
					<dt><span>L</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008611-b18335744.html" title="龙联合租房">龙联合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008611-b18335744.html" title="罗湖西合租房">罗湖西合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008611-b18335744.html" title="龙华南合租房">龙华南合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008611-b18335744.html" title="龙岗中心合租房">龙岗中心合租房</a>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008611-b18335744.html" title="罗湖东合租房">罗湖东合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008611-b18335744.html" title="留仙合租房">留仙合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008611-b18335744.html" title="莲花合租房">莲花合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008611-b18335744.html" title="龙岗中心城合租房">龙岗中心城合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008611-b18335744.html" title="龙华合租房">龙华合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008611-b18335744.html" title="莲塘合租房">莲塘合租房</a>
					</dd>
					<dt><span>M</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008617-b18335682.html" title="民治合租房">民治合租房</a>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008617-b18335682.html" title="梅林合租房">梅林合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008617-b18335682.html" title="梅沙合租房">梅沙合租房</a>
					</dd>
					<dt><span>N</span></dt>
					<dd>
					   <a target="_blank" href="http://www.ziroom.com/z/nl/d23008626-b18335674.html" title="南联合租房">南联合租房</a>
                                           <a target="_blank" href="http://www.ziroom.com/z/nl/d23008626-b18335674.html" title="南山中心区合租房">南山中心区合租房</a>
                                           <a target="_blank" href="http://www.ziroom.com/z/nl/d23008626-b18335674.html" title="泥岗合租房">泥岗合租房</a>
                                           <a target="_blank" href="http://www.ziroom.com/z/nl/d23008626-b18335674.html" title="南头合租房">南头合租房</a>
                                           <a target="_blank" href="http://www.ziroom.com/z/nl/d23008626-b18335674.html" title="南油合租房">南油合租房</a>
					</dd>
					<dt><span>O</span></dt>
					<dd>
					</dd>
					<dt><span>P</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335719.html" title="平乐园合租房">平乐园合租房</a>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335719.html" title="坪山园合租房">坪山园合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335719.html" title="坪地合租房">坪地合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335719.html" title="平湖合租房">平湖合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335719.html" title="坪山新区合租房">坪山新区合租房</a>
					</dd>
					<dt><span>Q</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335732.html" title="前进合租房">前进合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335732.html" title="前海北合租房">前海北合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335732.html" title="侨城东合租房">侨城东合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335732.html" title="前海合租房">前海合租房</a>
						
					</dd>
					<dt><span>R</span></dt>
					<dd>
                                            <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="人民南合租房">人民南合租房</a>
					</dd>
					<dt><span>S</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="水榭春天合租房">水榭春天合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="上水径合租房">上水径合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="水榭春天合租房">水榭春天合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="上梅林合租房">上梅林合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="上步合租房">上步合租房</a>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="水围合租房">水围合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="上下沙合租房">上下沙合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="沙井合租房">沙井合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="石岩合租房">石岩合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="松岗合租房">松岗合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="石厦合租房">石厦合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="水库合租房">水库合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="笋岗合租房">笋岗合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="蛇口合租房">蛇口合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="沙头角合租房">沙头角合租房</a>
					</dd>
					<dt><span>T</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008625.html" title="泰华合租房">泰华合租房</a>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008625.html" title="太古城合租房">太古城合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008625.html" title="桃源合租房">桃源合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008625.html" title="桃园合租房">桃园合租房</a>
					</dd>
					<dt><span>U</span></dt>
					<dd>
					</dd>
					<dt><span>V</span></dt>
					<dd>
					</dd>
					<dt><span>W</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335711.html" title="湾区合租房">湾区合租房</a>
						
					</dd>
					<dt><span>X</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008626.html" title="香蜜湖西合租房">香蜜湖西合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008626.html" title="西站合租房">西站合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008626.html" title="曦臣合租房">曦臣合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008626.html" title="西乡合租房">西乡合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008623.html" title="香蜜湖合租房">香蜜湖合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008626.html" title="新安合租房">新安合租房</a>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008626.html" title="新洲合租房">新洲合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008626.html" title="西丽合租房">西丽合租房</a>
					</dd>
					<dt><span>Y</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335706.html" title="银湖别墅合租房">银湖别墅合租房</a>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335706.html" title="园岭合租房">园岭合租房</a>
                                                <a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335706.html" title="盐田港合租房">盐田港合租房</a>
					</dd>
					<dt><span>Z</span></dt>
					<dd>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335733.html" title="中央原著合租房">中央原著合租房</a>
						<a target="_blank" href="http://www.ziroom.com/z/nl/d23008613-b18335733.html" title="竹子林合租房">竹子林合租房</a>
					</dd>
				</dl>
		</div>
  </div>
        <dl class="partner clearfix">
            <dt>友情链接：</dt>
            <dd>
              <a href="http://bj.house.163.com/" target="_blank">网易北京房产</a>
              <a href="http://beijing.homelink.com.cn/" target="_blank">二手房</a>
              <a href="http://bj.lanfw.com/" target="_blank">北京蓝房网</a>
              <a href="http://beijing.aifang.com/fangyuan/" target="_blank">北京二手房</a>
              <a href="http://chongqing.anjuke.com/sale/" target="_blank">重庆二手房</a>
              <a href="http://www.zhuna.cn/ditie/" target="_blank">地铁线路图</a>
              <a href="http://www.wenchangfc.com/" target="_blank">文昌房产网</a>
              <a href="http://bj.xkhouse.com/" target="_blank">星空地产网</a>
              <a href="http://www.bd86.com/" target="_blank">保定租房</a>
              <a href="http://www.qfang.com/" target="_blank">深圳二手房</a>
              <a href="http://www.landzestate.com/" target="_blank">豪宅别墅</a>
            </dd>
        </dl><!--/partner-->

    </div>
</div><!--/links-->


<!--t_spacemainbox -->
<div id="footer">
    <div class="ft">
        <p>
            <a target="_blank" href="http://www.ziroom.com/about/jianjie.html" rel="nofollow">自如故事</a>
            <a target="_blank" href="http://www.ziroom.com/about/fuwu.html" rel="nofollow">业务体系</a>
            <a target="_blank" href="http://www.ziroom.com/about/tuandui.html" rel="nofollow">自如团队</a>
            <a target="_blank" href="http://www.ziroom.com/about/lianxi.html" rel="nofollow">联系自如</a>
            <a target="_blank" href="http://www.ziroom.com/zhuanti/zhaopin/" rel="nofollow">加入自如</a>
            <a target="_blank" href="http://www.ziroom.com/about/yinsi.html" rel="nofollow">隐私保护</a>
            <a target="_blank" href="http://www.ziroom.com/about/jianjie.html" rel="nofollow">品质保障</a>
            <a target="_blank" href="http://www.ziroom.com/z/i/map.html">网站地图</a>
          </p>
    </div>
    <div class="search t_botsearch">
        <input class="inp-bor grid-53 fl pl10 textipt" id="i_q_keyword_3" placeholder="请输入地名，地铁线路，站点名……" autocomplete="off" type="text">
        <input class="h_col aa-btn fr buttipt btn_sub" name="2" id="btn_sub_3" value="搜索" type="button">
    </div>
    <p>联系客服：自如客微信 周一至周日09:00-22:00</p>
    <p>Copyright©2011 ziroom.com版权所有 京ICP备11024601号-9
       <span>

<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F038002b56790c097b74c818a80e3a68e' type='text/javascript'%3E%3C/script%3E"));

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-26597311-1']);
    _gaq.push(['_setLocalRemoteServerMode']);
    _gaq.push(['_trackPageview']);
    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script><script src="zone_files/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=038002b56790c097b74c818a80e3a68e" target="_blank"><img src="zone_files/21.gif" border="0" height="20" width="20"></a>

        </span>
   </p>
</div>



</body></html>