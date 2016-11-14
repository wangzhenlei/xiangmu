function checkMobile(b) {
    return /^13[0-9]{1}[0-9]{8}$|15[0-9]{1}[0-9]{8}$|18[0-9]{9}$|17[0678]{1}[0-9]{8}$|14[57]{1}[0-9]{8}$/.test(b) ? !0 : !1;
}

function lxFun(f, e) {
    var h = $(f).val(), g = $(e).attr("data-id");
    h ? $("#lx_box").css({
        display: "block"
    }) : $("#lx_box").css({
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


function cuzuQsFn(f) {
    var e, h = $("#city_code").attr("data-id"), g = 0;
    f && (g = f), e = g, $.ajax({
        type: "GET",
        dataType: "jsonp",
        jsonp: "callback",
        data: {
            city_code: h,
            bedroom: g
        },
        url: "http://www.ziroom.com/index.php?_p=ownerpc&_a=pricetrendByRoomNum",
        success: function(b) {
            var p, o, n, m, l, k, j;
            if ("success" == b.status && "" != b.data) {
                for (p = [], o = [], n = [], m = [], l = b.data.length, k = 0; l > k; k++) {
                    "01" == b.data[k].month && (j = new Date(), m = j.getFullYear(), b.data[k].month = m + "年" + b.data[k].month), 
                    p[k] = b.data[k].month + "月", o[k] = b.data[k].avg_price, n[k] = b.data[k].house_count, 
                    m[k] = b.data[k].year;
                }
                myChartFun(p, o, n, m, e);
            }
        },
        error: function() {}
    });
}

function cuzuJjFn() {
    var b = $("#city_code").attr("data-id");
    $.ajax({
        type: "GET",
        dataType: "jsonp",
        jsonp: "callback",
        data: {
            city_code: b
        },
        url: "http://www.ziroom.com/index.php?_p=ownerpc&_a=pricetrendByCityCode",
        success: function(r) {
            var q, p, o, n, m, l, k, j;
            if ("" != r.data) {
                for (q = r.data.length, $("#data_chengqu_bj").empty(), p = Math.ceil(q / 7), o = 0; p > o; o++) {
                    for (n = "", m = 7 * o; 7 * o + 7 > m && q > m; m++) {
                        l = r.data[m].change_price, k = "", l > 0 ? k = "up" : (k = "down", l = -1 * l), 
                        "亦庄开发区" == r.data[m].district_name && (r.data[m].district_name = "亦庄"), n += "<li><span class='qu'>" + r.data[m].district_name + "</span><span class='price'>" + r.data[m].avg_price + "元/月</span><span class='price_change " + k + "'>" + l + "元/月</span></li>";
                    }
                    j = "<ul>" + n + "</ul>", $("#data_chengqu_bj").append(j);
                }
            }
        },
        error: function() {}
    });
}

function gujiaSubFn() {
    var h, g, l, k, j, i = 1;
    return $("#code dd").hide(), $("#lx_box").hide(), h = $("#city_code").attr("data-id"), 
    g = $("#resblock").val(), l = $("#bedroom").attr("data-id"), k = $("#decoration_type").attr("data-id"), 
    j = String($("#decoration_type").text()), g ? l ? k ? (g && k && k && $("#gujia_loading").show(), 
    $.ajax({
        type: "GET",
        dataType: "jsonp",
        jsonp: "callback",
        data: {
            city_code: h,
            resblock: g,
            bedroom: l,
            decoration_type: k,
            from_where: i
        },
        url: "http://www.ziroom.com/index.php?_p=ownerpc&_a=pricemode",
        success: function(b) {
            $("#gujia_loading").hide(), "success" == b.status && ($("#data_box").hide(), $("#gujia_result").show(), 
            $("#gujia_result .box_l").show(), $("#gujia_result .no_result").hide(), $("#gujia_xiaoqu_name").text(g), 
            $("#d_type").text(j), $("#bedroom_n").text(l), $("#gujia_min_price").text(b.data.min_price), 
            $("#gujia_max_price").text(b.data.max_price), $("#peizhi_pre_money").text(b.data.peizhi_pre_money), 
            $("#peizhi_las_money").text(b.data.peizhi_las_money), $("#three_pre_money").text(b.data.three_pre_money), 
            $("#three_las_money").text(b.data.three_las_money), b.data.mobile ? ($("#gujia_result .guanjia_box .guanjia").show(), 
            $("#gujia_result .guanjia_box .guanjiaNo").hide(), $("#guanjia_name").text(b.data.keeperName), 
            $("#guanjia_phone_z").text(b.data.mobile), $("#guanjia_photo").attr("src", b.data.pic)) : ($("#gujia_result .guanjia_box .guanjia").hide(), 
            $("#gujia_result .guanjia_box .guanjiaNo").show())), "failure" == b.status && ($("#data_box").hide(), 
            $("#gujia_result").show(), $("#gujia_result .box_l").hide(), $("#gujia_result .no_result").show());
        },
        error: function() {}
    }), void 0) : (alert("请选择装修类型！"), !1) : (alert("请选择户型！"), !1) : (alert("请输入小区！"), 
    !1);
}

function slideFun(i, h, n) {
    var m, l, k = "", j = "";
    for (m = 0; i > m; m++) {
        k += "<li></li>", j += "<li rel='" + m + "'><div class='img'><img src='" + h[m].header_img + "'/></div><div class='text_box'><h4><span class='arrow_r'></span>" + h[m].title + "</h4><p class='time'>" + h[m].date + "</p></div></li>";
    }
    l = "<div class='hd'><ul>" + k + "</ul></div><div class='bd'><ul>" + j + "</ul></div>", 
    $(n).empty().append(l);
}

function yezhu_show() {
    var h, g, l, k, j, i;
    life_data && (h = life_data.ziroom_news, g = life_data.ziroom_news.length, l = life_data.ziroom_owner, 
    k = life_data.ziroom_owner.length, j = life_data.ziroom_activity, i = life_data.ziroom_activity.length, 
    slideFun(g, h, "#ziroom_news"), slideFun(k, l, "#ziroom_owner"), slideFun(i, j, "#ziroom_activity"));
}

function storyInfoFun(j, i, p, o) {
    var n, m, l, k;
    if (o = 0 + parseInt(o), "ziroom_news" == p) {
        for (n = j.ziroom_news[o].imgs.length, m = "", l = "", k = 0; n > k; k++) {
            0 == k ? (m += "<li class='active' style='opacity: 1;'><img src='" + j.ziroom_news[o].imgs[k] + "'/></li>", 
            l += "<li class='hover'><img src='" + j.ziroom_news[o].imgs[k] + "'/></li>") : (m += "<li class='' style='opacity: 0;'><img src='" + j.ziroom_news[o].imgs[k] + "'/></li>", 
            l += "<li class=''><img src='" + j.ziroom_news[o].imgs[k] + "'/></li>");
        }
        $(i).find("#bn_box").empty().append(m), $(i).find("#s_img").empty().append(l), $(i).find(".yz_title").text(j.ziroom_news[o].title), 
        $(i).find("#text_box").html(j.ziroom_news[o].text);
    }
    if ("ziroom_owner" == p) {
        for (n = j.ziroom_owner[o].imgs.length, m = "", l = "", k = 0; n > k; k++) {
            0 == k ? (m += "<li class='active' style='opacity: 1;'><img src='" + j.ziroom_owner[o].imgs[k] + "'/></li>", 
            l += "<li class='hover'><img src='" + j.ziroom_owner[o].imgs[k] + "'/></li>") : (m += "<li class='' style='opacity: 0;'><img src='" + j.ziroom_owner[o].imgs[k] + "'/></li>", 
            l += "<li class=''><img src='" + j.ziroom_owner[o].imgs[k] + "'/></li>");
        }
        $(i).find("#bn_box").empty().append(m), $(i).find("#s_img").empty().append(l), $(i).find(".yz_title").text(j.ziroom_owner[o].title), 
        $(i).find("#text_box").html(j.ziroom_owner[o].text);
    }
    if ("ziroom_activity" == p) {
        for (n = j.ziroom_activity[o].imgs.length, m = "", l = "", k = 0; n > k; k++) {
            0 == k ? (m += "<li class='active' style='opacity: 1;'><img src='" + j.ziroom_activity[o].imgs[k] + "'/></li>", 
            l += "<li class='hover'><img src='" + j.ziroom_activity[o].imgs[k] + "'/></li>") : (m += "<li class='' style='opacity: 0;'><img src='" + j.ziroom_activity[o].imgs[k] + "'/></li>", 
            l += "<li class=''><img src='" + j.ziroom_activity[o].imgs[k] + "'/></li>");
        }
        $(i).find("#bn_box").empty().append(m), $(i).find("#s_img").empty().append(l), $(i).find(".yz_title").text(j.ziroom_activity[o].title), 
        $(i).find("#text_box").html(j.ziroom_activity[o].text);
    }
    document.getElementById("content-dtk") && $("#content-dtk").mCustomScrollbar({
        theme: "dark-thick",
        updateOnContentResize: !0
    });
}

function zukeNum() {
    $.ajax({
        type: "GET",
        dataType: "jsonp",
        jsonp: "callback",
        url: "http://www.ziroom.com/index.php?_p=ownerpc&_a=ziroomerNum",
        success: function(h) {
            var g, l, k, j, i;
            if ("" != h.data.number) {
                for (g = h.data.number, l = [], k = 0; g > 0; k++) {
                    l[k] = g % 10, g = parseInt(g / 10);
                }
                for (j = l.length, i = "", k = j - 1; k >= 0; k--) {
                    i += "<span class='num'>" + l[k] + "</span>";
                }
                $("#zuke_num").empty().append(i);
            }
        },
        error: function() {}
    });
}

function webChange() {
    lxFun("#resblock", "#city_code");
}

var move = function(b) {
    return b.preventDefault && b.preventDefault(), b.returnValue = !1, b.stopPropagation && b.stopPropagation(), 
    !1;
}, keyFunc = function() {
    var b = "Netscape" == navigator.appname ? event.which : window.event.keyCode;
    return 38 == b || 40 == b ? move(event) : void 0;
};

$(function() {
    function t(e, d, f) {
        f && (f = "click"), $(e).click(function() {
            $(this).addClass("on").siblings().removeClass("on");
            var b = $(this).index();
            $(d).eq(b).css({
                display: "block"
            }).siblings().css({
                display: "none"
            });
        });
    }
    function s() {
        var b = $("#current_city").text();
        "北京" == b && ($("#city_code").text("北京"), $("#city_code").attr("data-id", "110000"), 
        $("#cityName").text("北京"), cuzuJjFn(), cuzuQsFn(0)), "上海" == b && ($("#city_code").text("上海"), 
        $("#city_code").attr("data-id", "310000"), $("#cityName").text("上海"), cuzuJjFn(), 
        cuzuQsFn(0)), "深圳" == b && ($("#city_code").text("深圳"), $("#city_code").attr("data-id", "440300"), 
        $("#cityName").text("深圳"), cuzuJjFn(), cuzuQsFn(0));
    }
    var r, q, p, o, n, m, l, k = window.location.href;
    ("http://yezhu.ziroom.com/" == k || "http://yezhu.ziroom.com/index.html" == k || "http://yezhu.ziroom.com/czgj.html" == k || "http://yezhu.ziroom.com/axzk.html" == k || "http://yezhu.ziroom.com/mfzx.html" == k || "http://yezhu.ziroom.com/zqfw.html" == k) && ($("#current_city").text("北京"), 
    $("#current_city").attr("data-id", "110000"), $("#clientCity").text("北京"), $("#clientCity").attr("data-id", "110000"), 
    s()), ("http://sh.y.ziroom.com/" == k || "http://sh.y.ziroom.com/index.html" == k || "http://sh.y.ziroom.com/czgj.html" == k || "http://sh.y.ziroom.com/axzk.html" == k || "http://sh.y.ziroom.com/mfzx.html" == k || "http://sh.y.ziroom.com/zqfw.html" == k) && ($("#current_city").text("上海"), 
    $("#current_city").attr("data-id", "310000"), $("#clientCity").text("上海"), $("#clientCity").attr("data-id", "310000"), 
    s()), ("http://sz.y.ziroom.com/" == k || "http://sz.y.ziroom.com/index.html" == k || "http://sz.y.ziroom.com/czgj.html" == k || "http://sz.y.ziroom.com/axzk.html" == k || "http://sz.y.ziroom.com/mfzx.html" == k || "http://sz.y.ziroom.com/zqfw.html" == k) && ($("#current_city").text("深圳"), 
    $("#current_city").attr("data-id", "440300"), $("#clientCity").text("深圳"), $("#clientCity").attr("data-id", "440300"), 
    s()), yezhu_show(), zukeNum(), r = new Date(), q = r.getMonth(), 0 == q && (q = 12), 
    $("#prev_month").text(q), $("#ziroom_news .bd,#ziroom_owner .bd,#ziroom_activity .bd").delegate("li", "click", function() {
        var d = $(this).parents(".houseSlide").attr("id"), c = $(this).attr("rel");
        life_data && storyInfoFun(life_data, "#sq_hd_info", d, c), $("#sq_hd_info").css({
            "margin-top": "0px"
        }), document.body.style.overflow = "hidden", document.body.onkeydown = keyFunc;
    }), $("#jiameng_success .close_jiameng_success,#jiameng_success .close").click(function() {
        $("#jiameng_success").hide(), $("#jiameng_box input.input").val(""), $("#jiameng_box #clientShequ").val(""), $("#jiameng_box #clientShequ").attr("name",""), $("#jiameng_box textarea#clientQita").val(""), 
        $("#jiameng_box #clientCity").text("北京").attr("data-id", "110000"), document.body.style.overflow = "auto", 
        document.body.onkeydown = "";
    }), $("input:text,textarea").blur(function() {
        var b = /['")><&\\\/\.]/;
        b.test($(this).val()) && (alert("输入内容含非法字符，请重新输入"), $(this).val(""));
    }), p = $(window).scrollTop(), p > 0 ? $("#yz_header").addClass("header_shadow") : $("#yz_header").removeClass("header_shadow"), 
    $(window).scroll(function() {
        var b = $(window).scrollTop();
        b > 0 ? $("#yz_header").addClass("header_shadow") : $("#yz_header").removeClass("header_shadow");
    }), t(".jiameng_tah li", ".jiameng_tad .item", "click"), t(".zhuangxiu_tah li", ".zhuangxiu_tad .item", "click"), 
    $("#data_box .zxt_tah li").click(function() {
        $(this).addClass("on").siblings().removeClass("on");
        var b = $(this).index();
        $("#data_box .data_zxt .item").eq(b).css({
            display: "block"
        }).siblings().css({
            display: "none"
        }), cuzuQsFn(b);
    }), n = 334, $("#prev").click(function() {
        o = $("#data_box .data_list ul").length, m = parseInt($("#data_box .list_box").css("left")), 
        0 > m && $("#data_box .list_box").animate({
            left: m + n
        }, 300);
    }), $("#next").click(function() {
        o = $("#data_box .data_list ul").length, m = parseInt($("#data_box .list_box").css("left")), 
        m > (1 - o) * n && $("#data_box .list_box").animate({
            left: m - n
        }, 300);
    }), $("#sq_hd_info_close").click(function() {
        $("#sq_hd_info").css({
            "margin-top": "-99999999px"
        }), document.body.style.overflow = "auto", document.body.onkeydown = "";
    }), $(".ow_box .close").click(function() {
        $(this).parents(".ow_box").hide(), document.body.style.overflow = "auto", document.body.onkeydown = "";
    }), $(".jiameng_btn").click(function() {
        $("#jiameng_box").show();
        var b = $("#resblock").val();
        b && $("#clientShequ").val(b), document.body.style.overflow = "hidden", document.body.onkeydown = keyFunc;
    }), $(".select_box dd a").click(function() {
        var d, c;
        $("#lx_box").hide(), $("#lx_box2").hide(), d = $(this).text(), c = String($(this).attr("data-id")), $(this).parents("dd").siblings("dt.current").text(d), 
        $(this).parents("dd").siblings("dt.current").attr("data-id", c), $(this).parents("dd").css({
            display: "none"
        });
    }), $(".lx_input").focus(function() {
        $("#lx_box").css({
            display: "block"
        });
    }),$(".lx_input2").focus(function() {
        $("#lx_box2").css({
            display: "block"
        });
    }), $("#lx_box").delegate("a", "click", function() {
        var b = $(this).text();
        $(this).parents(".lx_box").siblings(".input").attr("value", b), $(this).parents(".lx_box").hide();
    }), $(".video_btn").click(function() {
        $("#video_ow").show(), document.body.style.overflow = "hidden", document.body.onkeydown = keyFunc;
    }), $(".select_box").hover(function() {
        $(this).find("dd").css({
            display: "block"
        });
    }, function() {
        $(this).find("dd").css({
            display: "none"
        });
    }), $("#code dd a").click(function() {
        var d = $(this).text(), c = String($(this).attr("data-id"));
        $(this).parents("dd").siblings("dt.current").text(d), $(this).parents("dd").siblings("dt.current").attr("data-id", c), 
        $("#cityName").text(d), $("#data_box .zxt_tah li").eq(0).addClass("on").siblings().removeClass("on"), 
        cuzuJjFn(), cuzuQsFn(0), $(this).parents("dd").css({
            display: "none"
        });
    }), $("#changeCityList dd a").click(function() {
        var b = $(this).text(), d = String($(this).attr("data-id"));
        $(this).parents("dd").siblings("dt.current").text(b), $(this).parents("dd").siblings("dt.current").attr("data-id", d), 
        "北京" == b && (window.location.href = "http://yezhu.ziroom.com"), "上海" == b && (window.location.href = "http://sh.y.ziroom.com"), 
        "深圳" == b && (window.location.href = "http://sz.y.ziroom.com"), s(), cuzuJjFn(), 
        $(this).parents("dd").css({
            display: "none"
        });
    }), jQuery(".houseSlide").slide({
        mainCell: ".bd ul",
        effect: "fold",
        autoPlay: !0,
        interTime: 5e3
    }), document.getElementById("resblock") && (l = document.getElementById("resblock"), 
    window.ActiveXObject ? l.onpropertychange = webChange : l.addEventListener("input", webChange, !1)), 
    $("#jiameng_success .close_jiameng_success,#jiameng_success .close").click(function() {
        $("#jiameng_success").hide(), $("#jiameng_success .second").text("5");
    });
});