function slideLeft(){function f(b){c=a.offset().top,b>640?a.show().css({position:"fixed",top:"10px"}):a.hide().css({position:"absolute",top:"640px"}),b>=parseInt(e[0])&&(a.find("li a").removeClass("active"),a.find("li:eq(0) a").addClass("active")),b>=e[1]&&(a.find("li a").removeClass("active"),a.find("li:eq(1) a").addClass("active")),b>=e[2]&&(a.find("li a").removeClass("active"),a.find("li:eq(2) a").addClass("active")),b>=e[3]&&(a.find("li a").removeClass("active"),a.find("li:eq(3) a").addClass("active")),b>=e[4]&&(a.find("li a").removeClass("active"),a.find("li:eq(4) a").addClass("active")),b>=e[5]&&(a.find("li a").removeClass("active"),a.find("li:eq(5) a").addClass("active")),b>=e[6]&&(a.find("li a").removeClass("active"),a.find("li:eq(6) a").addClass("active"))}var e,a=$("#slideLeftBar"),b=$("#slideBar"),c=a.offset().top;b.offset().top,e=[],$(".bigtit").each(function(){e.push($(this).offset().top)}),$("#slideLeftBar li").click(function(){var a=$(this).index(),b=e[a];$(window).scrollTop(b)}),$(window).scroll(function(){var a=$(window).scrollTop();f(a)}),f()}$(function(){ziroomIndex.init()});var ziroomIndex={};ziroomIndex.init=function(){var a,b,c;ziroomIndex.loadFoucsImg("foucsSlideList"),a=.3125,$(window).resize(function(){var c,b=$(window).width();1200>b&&(b=1200),c=b*a,$("#foucsSlideList,#foucsSlideList li,#foucsSlideList li img,.foucsSlide").css({width:b+"px"}),$("#foucsSlideList,#foucsSlideList li,#foucsSlideList li img,.foucsSlide").css({height:c+"px"})}),b=$(window).width(),1200>b&&(b=1200),c=b*a,$("#foucsSlideList,#foucsSlideList li,#foucsSlideList li img,.foucsSlide").css({width:b+"px"}),$("#foucsSlideList,#foucsSlideList li,#foucsSlideList li img,.foucsSlide").css({height:c+"px"})},ziroomIndex.loadFoucsImg=function(a){var g,h,b=$("#"+a),c=b.find("img"),d=[],f=0;for(g=0;g<c.size();g++)d.push(c.eq(g).attr("_src"));c.eq(0).attr("src",d[0]),h=setInterval(function(){f++,f>c.size()-1&&clearInterval(h),c.eq(f).attr("src",d[f])},500)},$(function(){jQuery(".foucsSlide").slide({mainCell:".bd ul",effect:"fold",autoPlay:!0,interTime:5e3}),jQuery(".bigSlide").slide({mainCell:".bd ul",effect:"fold",autoPlay:!0,interTime:5e3}),jQuery(".houseSlide").slide({mainCell:".bd ul",effect:"fold",autoPlay:!0,interTime:5e3}),jQuery(".smallSlide").slide({mainCell:".bd ul",effect:"fold",autoPlay:!0,interTime:5e3}),$(".categorys dl").each(function(){var a=$(this).find("dd").find(".detail");a.each(function(){$(this).find("a").size()<2&&$(this).hide()})}),$("#videoBtn").click(function(){new Boxy("#videoBox",{title:$(this).attr("data-title")})}),$("#i_q_keyword_1").keydown(function(a){13==a.keyCode&&$("#searchListBtn").click()}),$("#searchListBtn").click(function(){var a=$("#i_q_keyword_1").val(),b=$("#searchTxt").attr("data-val"),c="/z/nl/z"+b+".html",d=c+"?qwd="+$("#i_q_keyword_1").val();window.location.href=""==a?"/z/nl/z"+b+".html?qwd=":encodeURI(d)}),$("#searchType span").click(function(){$("#searchTxt").html($(this).html()+"<b></b>"),$("#searchType").hide(),$("#searchTxt").attr("data-val",$(this).attr("data-val"))}),$("#searchList").hover(function(){$("#searchType").show()},function(){$("#searchType").hide()}),setTimeout(function(){slideLeft()},2e3)});