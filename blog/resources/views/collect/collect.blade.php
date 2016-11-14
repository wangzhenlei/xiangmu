<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>自如网-我的自如</title>
<meta name="keywords" content="北京白领公寓，北京合租房，北京公寓合租">
<meta name="description" content="自如是北京最大的高品质公寓租房品牌，拥有“自如友家”“自如寓”两大产品，数万间公寓，15万租客入住、品牌家具家电、100%真房源、线上订房、拎包入住 、 3天不满意全额退款">
<meta content="width=1200, initial-scale=1, maximum-scale=1, user-scalable=1" name="viewport">
<link rel="stylesheet" type="text/css" href="collect_files/common.css">
<link rel="stylesheet" type="text/css" href="collect_files/my_zone.css">
<script src="collect_files/ga.js" async="" type="text/javascript"></script><script type="text/javascript" src="collect_files/jquery.js"></script>
<script type="text/javascript" src="collect_files/z-common.js"></script>
<script type="text/javascript" src="collect_files/z-ui.js"></script>
<script type="text/javascript" src="collect_files/WdatePicker.js"></script><link type="text/css" rel="stylesheet" href="collect_files/WdatePicker.css">
<script type="text/javascript" src="collect_files/Validform_v5.js"></script>

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
                <li class="menu_list zapplist">
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
                        <img src="collect_files/logo.png" title="北京白领公寓，提供品质租住生活" alt="北京白领公寓合租">
                    </a>
                        </div>
        <div class="search zone_search">
            <input placeholder="请输入地名，地铁线路，站点名……" class="txt inp-bor textipt" id="i_q_keyword_1" type="text">
            <button type="button" class="btn btn_sub iconfont" name="1"></button>
            <div class="t_ajaxbox"><ul id="suggestion"></ul></div>
        </div>
       <ul class="site_api fr">
            <li>
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
            <dd class="active"><a href="http://i.ziroom.com/index.php?uri=collect" class="room_take"><em></em>房源订阅</a></dd>
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





<div class="t_spacemainboxright">
<div class="ziroom_box_right">
   <div class="ziroom_box_right_h  lh30">
       <h3>房源订阅</h3>
   </div><!--ziroom_box_right_h -->
            <div class="ziroom_box_right_c">
                <div style="margin-bottom:8px;background:#eee;height:40px;line-height:40px;padding-left:10px;" class="clearfix">

                    <div class="fl">
                    <p class="fb color_333"><a href="http://i.ziroom.com/index.php?uri=collect" class="org" onclick="del()">我的收藏</a>&nbsp;&nbsp;<a href="http://i.ziroom.com/index.php?uri=collect/sublet">转租收藏</a></p><!--input type="checkbox" id="all_checked"/><label class="check_all" for="all_checked">全选</label><input type="checkbox"  style="margin-left:10px;" id="all_delete"/><label class="check_all" for="all_delete">批量删除</label--></div>
                    <div class="fr page_c" id="page_show"></div>
                </div>
            	<table class="collect_sheet" cellpadding="0" cellspacing="0" width="100%">
                  <tbody id="tbody"><tr class="ttl_cs"><td class="td_firsr">房源信息</td><td class="td_second">价格</td><td class="td_second">状态</td><td class="td_second">收藏时间</td><td class="td_second">收藏人气</td><td class="td_second">操作</td></tr><tr class="content_cs"><td><div class="left_imgs clearfix"><div class="imgs"><a href="http://www.ziroom.com/z/vr/60228376.html" target="_blank"><img src="collect_files/v180x135_20160827224350610_F.JPG" onerror="this.src='http://pic.ziroom.com/static/images/slist_1207/small_pzz.jpg'" height="91" width="137"></a></div><div class="txt_li"><p class="p1"><a href="http://www.ziroom.com/z/vr/60228376.html" target="_blank">通州玉桥八通线梨园梨花园3居室</a></p><p class="p2">4/6层 | 15.9 平方米 |合租</p></div></div></td><td class="price_c">1860元/月</td><td>可入住</td><td>2016-08-30</td><td>2</td><td> <div class="de_v_box" style="position:relative"><!--<a target="_blank" href="" class="ljyd_btn">立即预定</a>--><a href="javascript:;" class="delete">删除</a><div class="delete_box" style="display:none;"><p class="con_de">确认要删除该收藏吗？</p><div class="d_btn"><a href="javascript:;" onclick="delCollect('60228376',1)" class="confirm">确认</a><a href="javascript:;" class="cancel">取消</a></div><div class="cl_close"></div></div></div></td></tr><tr class="content_cs"><td><div class="left_imgs clearfix"><div class="imgs"><a href="http://www.ziroom.com/z/vr/60232135.html" target="_blank"><img src="collect_files/v180x135_20160830084802509_F.JPG" onerror="this.src='http://pic.ziroom.com/static/images/slist_1207/small_pzz.jpg'" height="91" width="137"></a></div><div class="txt_li"><p class="p1"><a href="http://www.ziroom.com/z/vr/60232135.html" target="_blank">通州临河里八通线土桥香溪家园4居室</a></p><p class="p2">19/20层 | 18 平方米 |合租</p></div></div></td><td class="price_c">1730元/月</td><td>已预定</td><td>2016-08-30</td><td>1</td><td> <div class="de_v_box" style="position:relative"><!--<a href="javascript:;" class="ljyd_btn ljyd_btn_gray">立即预定</a>--><a href="javascript:;" class="delete">删除</a><div class="delete_box" style="display:none;"><p class="con_de">确认要删除该收藏吗？</p><div class="d_btn"><a href="javascript:;" onclick="delCollect('60232135',1)" class="confirm">确认</a><a href="javascript:;" class="cancel">取消</a></div><div class="cl_close"></div></div></div></td></tr></tbody>
                </table>
                <div class="page_collect"></div>
            </div><!--ziroom_box_right_c -->
            <script type="text/javascript">
			$(function(){
				getMyCollect(1);
				$(".delete").live('click',function(){
				  $('.delete_box').hide();
				  $(this).parent('.de_v_box').find('.delete_box').show();
				  });
				$(".cl_close").live('click',function(){
				  $(".delete_box").hide();
				});
				$(".cancel").live('click',function(){
				  $(".delete_box").hide();
				});
			});
			$(document).ready(function () {
		        $(".leftMenuList").each(function () {
		            var This = $(this);
		            var aA = This.find("a").eq(0);

		            aA.click(function () {
		                if (This.hasClass('myservice')) {
		                    $(this).next().show();
		                    This.addClass("myservicehover");
		                    This.removeClass("myservice");
		                }
		                else {
		                    $(this).next().hide();
		                    This.addClass("myservice");
		                    This.removeClass("myservicehover");
		                }
		            });
		        });
		    });
			function getMyCollect(pg)
			{
				$.ajax({
				    type:'POST',
					url:"index.php?uri=collect/myCollect",
					data:'pg='+pg,
					success: function(msg)
					{
                                                //alert(msg);
						$("#tbody").html('');
						$(".page_collect").html('');
						$("#page_show").html('');
						var table = '';
						table += '<tr class="ttl_cs">';
						table += '<td class="td_firsr">房源信息</td>';
						table += '<td class="td_second">价格</td>';
						table += '<td class="td_second">状态</td>';
						table += '<td class="td_second">收藏时间</td>';
						table += '<td class="td_second">收藏人气</td>';
						table += '<td class="td_second">操作</td>';
						table += '</tr>';
						if(msg=='no_login')
						{
							window.location = "{DOMAIN_NAME}/g/login.html";
						}
						else
						{
							var json = eval("("+msg+")");

						    if(json.data)
							{
								var collect = json.data;
								for(var k in collect)
								{
								   table += '<tr class="content_cs">';
								   table += '<td>';
								   table += '<div class="left_imgs clearfix">';
								   if(collect[k]['is_whole']==0)
								   {
									 if(collect[k]['room_status']=='zxpzz' || collect[k]['room_status']=='tzpzz')
									   table += '<div class="imgs"><a href="http://www.ziroom.com/z/vr/'+collect[k]['id']+'.html" target="_blank"><img src="http://pic.ziroom.com/static/images/slist_1207/peizhizhong.jpg" width="137" height="91"/></a></div>';
									 else
									   table += '<div class="imgs"><a href="http://www.ziroom.com/z/vr/'+collect[k]['id']+'.html" target="_blank"><img src="'+collect[k]['room_photo']+'" width="137" height="91"  onerror="this.src=\'http://pic.ziroom.com/static/images/slist_1207/small_pzz.jpg\'" /></a></div>';
								   }
								   else
								   {
									 if(collect[k]['room_status']=='zxpzz' || collect[k]['room_status']=='tzpzz')
									   table += '<div class="imgs"><a href="http://www.ziroom.com/z/vr/'+collect[k]['house_id']+'.html" target="_blank"><img src="http://pic.ziroom.com/static/images/slist_1207/peizhizhong.jpg" width="137" height="91"/></a></div>';
									 else
									   table += '<div class="imgs"><a href="http://www.ziroom.com/z/vh/'+collect[k]['house_id']+'.html" target="_blank"><img src="'+collect[k]['room_photo']+'" width="137" height="91" onerror="this.src=\'http://pic.ziroom.com/static/images/slist_1207/small_pzz.jpg\'"/></a></div>';

								   }
								   table += '<div class="txt_li">';

                                   if(collect[k]['is_whole']==0)
								       table += '<p class="p1"><a href="http://www.ziroom.com/z/vr/'+collect[k]['id']+'.html" target="_blank">'+collect[k]['title']+'</a></p>';
                                   else
                                       table += '<p class="p1"><a href="http://www.ziroom.com/z/vh/'+collect[k]['house_id']+'.html" target="_blank">'+collect[k]['title']+'</a></p>';
								   table += '<p class="p2">'+collect[k]['floor']+'/'+collect[k]['floor_total']+'层 | '+collect[k]['usage_area']+' 平方米 |';
								   if(collect[k]['is_whole']==0)
								   	table += '合租</p>';
								   else
								    table += '整租</p>';
								   //table += '<p class="p3">3天内预约带看：5 人</p>';
								   table += '</div>';
								   table += '</div>';
								   table += '</td>';
                                                                   if(collect[k]['type']!=1){
                                                                        table += '<td class="price_c">'+collect[k]['sell_price']+'元/月</td>';
                                                                   }else{
                                                                        table += '<td class="price_c">'+collect[k]['shortDayRental']+'元/日</td>';
                                                                   }
								   table += '<td>';
								   if(collect[k]['room_status']=='dzz') table +='可入住';
								   else if(collect[k]['room_status']=='ycz') table +='已入住';
								   else if(collect[k]['room_status']=='yxd') table +='已预定';
								   else if(collect[k]['room_status']=='zxpzz') table +='配置中';
								   else if(collect[k]['room_status']=='tzpzz') table +='配置中';
								   table += '</td>';
								   table += '<td>'+collect[k]['add_time']+'</td>';
								   table += '<td>'+collect[k]['attention']+'</td>';
								   table += '<td>';
								   table += ' <div class="de_v_box" style="position:relative">';
                                                                                                         if(collect[k]['is_whole']==0)
								   {
                                      if(collect[k]['room_status']=='dzz')
                                      {
                                      	                                          table += '<!--<a target="_blank" href="" class="ljyd_btn">立即预定</a>-->';
                                                                              }else{
                                        table += '<!--<a href="javascript:;" class="ljyd_btn ljyd_btn_gray">立即预定</a>-->';
                                      }
                                      table +='<a href="javascript:;" class="delete">删除</a>';
									  table += '<div class="delete_box" style="display:none;">';
									  table += '<p class="con_de">确认要删除该收藏吗？</p>';
									  table += '<div class="d_btn">';
									  table += '<a href="javascript:;" onclick="delCollect(\''+collect[k]['id']+'\','+json.pg+')" class="confirm">确认</a>';
									  table += '<a href="javascript:;" class="cancel">取消</a>';
									  table += '</div>';
									  table += '<div class="cl_close"></div>';
									  table += '</div>';
								   }
								   else
								   {
									  if(collect[k]['room_status']=='dzz')
                                        table += '<!--<a target="_blank" href="" class="ljyd_btn">立即预定</a>-->';
                                      else
                                        table += '<!--<a href="javascript:;" class="ljyd_btn ljyd_btn_gray">立即预定</a>-->';
									  table +='<a href="javascript:;" class="delete">删除</a>';
									  table += '<div class="delete_box" style="display:none;">';
									  table += '<p class="con_de">确认要删除该收藏吗？</p>';
									  table += '<div class="d_btn">';
									  table += '<a href="javascript:;" onclick="delCollect(\''+collect[k]['house_id']+'\','+json.pg+')" class="confirm">确认</a>';
									  table += '<a href="javascript:;" class="cancel">取消</a>';
									  table += '</div>';
									  table += '<div class="cl_close"></div>';
									  table += '</div>';
								   }

								   table +='</div>';
								   table += '</td>';
								   table += '</tr>';
								}

								$("#tbody").html(table);
								$(".page_collect").html(json.pager);
								$("#page_show").html(json.topPager);
								$('.prev_a').live("click",function(){getMyCollect(json.pre);});
								$('.next_a').live("click",function(){getMyCollect(json.nex);});
								$('.page_num').each(function() {
									$(this).click(function(){
										var pg = $.trim($(this).html());
										getMyCollect(pg);
									});
                                });
							}
						}
					}
				});
			}

			function delCollect(id,pg)
			{
			    $.ajax({
				   type:'POST',
				   url:"index.php?uri=collect/delete",
				   data:'id='+id+'&pg='+pg,
				   success: function(msg)
				       {
					       if(msg=='no_login')
						   {
							   window.location = "{DOMAIN_NAME}/g/login.html";
						   }
						   if(msg=='error_handle')
						   {
							   alert('非法操作!');
							   return false;
						   }
						   if(msg.indexOf('success')==0)
						   {
							    var len = 'success';
								var pg = msg.substr(len.length+1);
								getMyCollect(pg);
						   }
					   }
				});
			}

                        function del(){
                            //alert(121231);
                        }
			</script>
   </div>
</div>

</div><!--t_spacemainbox -->
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
        <input class="inp-bor grid-53 fl pl10 textipt" id="i_q_keyword_2" placeholder="请输入地名，地铁线路，站点名……" autocomplete="off" type="text">
        <input class="h_col aa-btn fr buttipt btn_sub" name="2" id="btn_sub_2" value="搜索" type="button">
    </div>

    <!--<p>客服电话: 400-100-1111 周一至周日09:00-20:00</p>-->
    <p>联系客服：自如客微信 周一至周日09:00-22:00</p>
    <p>Copyright©2011 ziroom.com版权所有 京ICP备11024601号-9
       <span>
            <script type="text/javascript">
                var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F038002b56790c097b74c818a80e3a68e' type='text/javascript'%3E%3C/script%3E"));
            </script><script src="collect_files/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=038002b56790c097b74c818a80e3a68e" target="_blank"><img src="collect_files/21.gif" border="0" height="20" width="20"></a>
<script type="text/javascript">
              var _gaq = _gaq || [];
              _gaq.push(['_setAccount', 'UA-26597311-1']);
              _gaq.push(['_setLocalRemoteServerMode']);
              _gaq.push(['_trackPageview']);
            
              (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
              })();
            
            </script>
        </span>
   </p>
</div>
<script type="text/javascript">
/*$(function(){
	//默认状态下左右滚动
	$(".t_sp_personmessbox_left").hover(
	  function(){
			$(this).find(".t_sp_personmessbox_leftshaddow").stop().slideDown();
			$(this).find(".t_sp_personmessbox_lefttext").stop().slideDown();
	},function(){
			$(this).find(".t_sp_personmessbox_leftshaddow").stop().slideUp();
			$(this).find(".t_sp_personmessbox_lefttext").stop().slideUp();
	})
	
	var json=[
			{"id":"t_servquestionboxsearchin_text","value":"请输入问题关键词,例如：宽带"},
			{"id":"liuyan_textarea","value":"想对邻友说什么"}
		]
	$(function() {
		$("#t_servquestionboxsearchin_text").watermarkv2({id:"t_servquestionboxsearchin_text",json:json});
		$("#liuyan_textarea").watermarkv2({id:"liuyan_textarea",json:json});
	});

  var iMaxHeight=$('body').outerHeight() > $(window).outerHeight() ? $('body').outerHeight() : $(window).outerHeight();
  iMaxHeight = iMaxHeight- $('.t_spacenav').outerHeight() - $('.t_spaceserachbox').outerHeight() - $('#footer').outerHeight()-20;
  if($('.t_spacemainbox').outerHeight() < iMaxHeight)
  {
    $('.t_spacemainbox').css({"min-height":iMaxHeight+"px"});
  }
})*/
</script>
<script type="text/javascript">  
	/*jQuery(function($){
		$('.fade').mosaic();
	});*/
</script>


<div style="position: absolute; top: -1970px; left: -1970px;" id="_my97DP"><iframe style="width:1px;height:1px" src="collect_files/My97DatePicker.htm" border="0" scrolling="no" frameborder="0"></iframe></div></body></html>