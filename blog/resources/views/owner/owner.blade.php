<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>自如业主—传递家的梦想</title>
    <meta name="keywords" content="房屋托管公司,房屋托管机构,房屋管家,房屋出租，出租，房屋托管，业主，管家，自如业主，自如，发布房源，出租发布，出租信息网,房屋托管网">
    <meta name="description" content="品质房源、线上订房、非中介！高品质租房品牌“自如”让您享受高品质生活。自如承诺：3天不满意全额退款！自如网区域找房提供准确的北京租房信息和北京租房价格。">
    <meta content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="owner_files/common.css">
    <link rel="stylesheet" type="text/css" href="owner_files/yezhu.css">
    <script src="owner_files/ga.js" async="" type="text/javascript"></script><script src="owner_files/jquery_002.js"></script>
    
	<script src="owner_files/data.js" type="text/javascript" charset="utf-8"></script>
    
    <script src="owner_files/story_show.js" type="text/javascript" charset="utf-8"></script>
    <script src="owner_files/yezhu.js" type="text/javascript" charset="utf-8"></script>
    <script src="owner_files/yzm.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="owner_files/jquery.css">
	<script src="owner_files/jquery_003.js" type="text/javascript" charset="utf-8"></script>
    <script src="owner_files/echarts.js" type="text/javascript" charset="utf-8"></script>
    <script src="owner_files/myChart.js" type="text/javascript" charset="utf-8"></script>
	<script src="owner_files/jquery.js"></script>
	<script>
	    function IsPC()
	    {
	        var userAgentInfo = navigator.userAgent;
	        var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
	        var flag = true;
	        for (var v = 0; v < Agents.length; v++) {
	            if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }
	        }
	        return flag;
	    }
	    if(!IsPC()){
	        window.location.href='m/index.html'
	    }
	</script>
</head>

<body>
	<!--header-->
	<div class="" id="yz_header">
		<div class="area clearfix">
			<!--logo-->
			<a href="http://yezhu.ziroom.com/index.html" id="yz_logo" class="logo"></a>
			<!--city change-->
			<dl class="changeCityList" id="changeCityList">
				<dt data-id="110000" id="current_city" class="current">北京</dt>
				<dd>
			    	<div class="con" id="cityList">
						<a data-id="110000" href="javascript:void(0)" id="t_beijing">北京</a>
						<a data-id="310000" href="javascript:void(0)" id="t_shanghai">上海</a>
			            <a data-id="440300" href="javascript:void(0)" id="t_shenzhen">深圳</a>
					</div>
				</dd>
			</dl>
			<!--nav-->
			<div class="nav">
				<a href="http://yezhu.ziroom.com/index.html" class="on" id="index">首页</a>
				<a href="http://yezhu.ziroom.com/czgj.html" id="czgj">出租估价</a>
				<a href="http://yezhu.ziroom.com/mfzx.html" id="mfzx">配套装修</a>
				<a href="http://yezhu.ziroom.com/zqfw.html" id="zqfw">租期服务</a>
				<a href="http://yezhu.ziroom.com/axzk.html" id="axzk">安心租客</a>
			</div>
			<!--加盟-->
			<div id="jiameng_top" class="btn_y jiameng_btn">房东加盟<span>+</span></div>
			<!--返回自如网-->
			<a href="http://www.ziroom.com/" target="_blank" id="back_ziroom" class="back_ziroom">回到自如网</a>
		</div>
	</div>
	
	<div class="ewm"></div>
	
	<!--banner-->
	<div id="yz_banner">
		<div class="area clearfix pr">
			<div class="text1" style="display: none;"><img src="owner_files/banner_text1.png"></div>
			<div class="text2" style="display: none;"><img src="owner_files/banner_text2.png"></div>
			<a href="javascript:;" class="btn video_btn">了解自如模式</a>
		</div>
	</div>
	
	<!--gujia 估价-->
	<div id="gujia" class="gujia">
		<div class="area pr">
			<!--data loading -->
			<div id="gujia_loading" class="gujia_loading"><p>自如正在海量数据中为您查询，请稍候~</p></div>
			<!--评估表单-->
			<div class="form_box">
				<div class="form">
					<!--城市-->
					<dl class="select_box" id="code">
						<dt data-id="110000" class="current" id="city_code">北京</dt>
						<dd>
					    		<div class="con">
								<a data-id="110000" href="javascript:void(0)" id="bigjing">北京</a>
								<a data-id="310000" href="javascript:void(0)" id="shanghai">上海</a>
					            <a data-id="440300" href="javascript:void(0)" id="shenzhen">深圳</a>
							</div>
						</dd>
					</dl>
					<!--小区姓名-->
					<div class="input_box">
						<input id="resblock" class="input lx_input" placeholder="小区名字" type="text">
						<!--  oninput="lxFun('#resblock','#city_code');" onpropertychange="lxFun('#resblock','#city_code');" -->
						<div style="display: none;" id="lx_box" class="lx_box">
					    		<!--<div class="con">
								<a href="javascript:void(0)">小区名称小区名称1</a>
							</div>-->
							
						</div>
					</div>
					<!--房屋户型-->
					<dl class="select_box" style="width: 120px;">
						<dt data-id="" class="current" id="bedroom">房屋户型</dt>
						<dd>
					    		<div class="con">
								<a data-id="1" href="javascript:void(0)" id="yjs">一居室</a>
								<a data-id="2" href="javascript:void(0)" id="ejs">二居室</a>
					            <a data-id="3" href="javascript:void(0)" id="sjs">三居室</a>
					            <a data-id="4" href="javascript:void(0)" id="sijs">四居室</a>
							</div>
						</dd>
					</dl>
					<!--装修-->
					<dl class="select_box zhuangxiu" style="width: 70px;">
						<dt data-id="" class="current" id="decoration_type">装修</dt>
						<dd>
					    		<div class="con">
								<a data-id="1" href="javascript:void(0)" id="jianzhuang">简装</a>
								<a data-id="2" href="javascript:void(0)" id="jingzhuang">精装</a>
					            <a data-id="3" href="javascript:void(0)" id="maopi">毛坯</a>
							</div>
						</dd>
					</dl>
					<!--出租评估按钮-->
					<input id="submit_btn" value="出租估价" class="submit_btn fr" onclick="gujiaSubFn()" type="button">
				</div>
			</div>
			
			
			<!--数据展示-->
			<div id="data_box" class="data_box clearfix">
				<div class="box_l">
					<div class="yz_title"><span id="cityName">北京</span>出租价格趋势</div>
					<ul class="zxt_tah">
						<li id="all_zxt" class="on">全部</li>
						<li id="yj_zxt">一居</li>
						<li id="ej_zxt">二居</li>
						<li id="sj_zxt">三居</li>
					</ul>
					<div class="data_zxt">
						<div style="background-color: transparent; cursor: default;" _echarts_instance_="1472558931400" class="item" id="zxt"><div style="position: relative; overflow: hidden; width: 790px; height: 370px;"><div class="zr-element" data-zr-dom-id="bg" style="position: absolute; left: 0px; top: 0px; width: 790px; height: 370px;"></div><canvas class="zr-element" data-zr-dom-id="0" height="370" width="790" style="position: absolute; left: 0px; top: 0px; width: 790px; height: 370px;"></canvas><canvas class="zr-element" data-zr-dom-id="1" height="370" width="790" style="position: absolute; left: 0px; top: 0px; width: 790px; height: 370px;"></canvas><canvas class="zr-element" data-zr-dom-id="_zrender_hover_" height="370" width="790" style="position: absolute; left: 0px; top: 0px; width: 790px; height: 370px;"></canvas><div style="position: absolute; display: block; border-style: solid; white-space: nowrap; transition: left 0.4s ease 0s, top 0.4s ease 0s; background-color: rgba(0, 0, 0, 0.7); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); padding: 5px; left: 580.5px; top: 115px;" class="echarts-tooltip zr-element">08月<br>出租均价 : 5,507</div></div></div>
					</div>
				</div>
				<div class="box_r">
					<div class="yz_title"><span id="prev_month">7</span>月各区出租均价</div>
					<div class="data_list">
						<div id="data_chengqu_bj" class="list_box"><ul><li><span class="qu">东城</span><span class="price">6250元/月</span><span class="price_change up">169元/月</span></li><li><span class="qu">海淀</span><span class="price">6033元/月</span><span class="price_change up">170元/月</span></li><li><span class="qu">朝阳</span><span class="price">6023元/月</span><span class="price_change up">84元/月</span></li><li><span class="qu">西城</span><span class="price">5424元/月</span><span class="price_change up">308元/月</span></li><li><span class="qu">丰台</span><span class="price">4843元/月</span><span class="price_change up">76元/月</span></li><li><span class="qu">昌平</span><span class="price">4831元/月</span><span class="price_change down">355元/月</span></li><li><span class="qu">亦庄</span><span class="price">4280元/月</span><span class="price_change up">258元/月</span></li></ul><ul><li><span class="qu">石景山</span><span class="price">4263元/月</span><span class="price_change up">163元/月</span></li><li><span class="qu">大兴</span><span class="price">3869元/月</span><span class="price_change up">99元/月</span></li><li><span class="qu">通州</span><span class="price">3712元/月</span><span class="price_change up">88元/月</span></li><li><span class="qu">房山</span><span class="price">3292元/月</span><span class="price_change up">314元/月</span></li><li><span class="qu">顺义</span><span class="price">3183元/月</span><span class="price_change up">318元/月</span></li></ul></div>
						<div class="control_box">
							<a href="javascript:;" id="prev" class="prev"></a>
							<a href="javascript:;" id="next" class="next"></a>
						</div>
					</div>
				</div>
			</div>
			
			<!--评估结果-->
			<div id="gujia_result" class="data_box clearfix">
				<div class="box_l clearfix">
					<div class="cont clearfix">

						<div class="xiaoqu_box">
							<div class="name"><span id="gujia_xiaoqu_name"></span><span class="info">－<span id="d_type"></span><span id="bedroom_n"></span>居 </span></div>
							<div class="xiaoqu_info">
								<h5>房源预估价格</h5>
								<h4><span id="gujia_min_price"></span>~<span id="gujia_max_price"></span><span class="dw">元/月</span></h4>
							</div>
							<ul class="xiaoqu_list">
								<li><i></i>装修配置收益<span><span id="peizhi_pre_money"></span>~<span id="peizhi_las_money"></span></span>元</li>
								<li><i></i>三年预估总收益<span><span id="three_pre_money"></span>~<span id="three_las_money"></span></span>元</li>
							</ul>
							<p style=" text-align: left; color: #999; margin-top: 20px; margin-left: 10px;letter-spacing: 1px;font-size: 14px;">*预估收益仅供参考，联系管家或委托房源获取准确收益信息</p>
						</div>
					</div>

					<div class="guanjia_box">
						<div class="guanjia">
							<div class="photo_box">
								<img src="owner_files/photo1.png" id="guanjia_photo">
								<div class="zhezhao"></div>
							</div>
							<div class="name">自如管家<span id="guanjia_name"></span></div>
							<div class="phone">
								<i></i><span id="guanjia_phone">400-100-1111</span>
								<span class="zhuan">转 <span id="guanjia_phone_z"></span></span>
							</div>
							<p class="b_text">联系您的管家，了解收益细则</p>
							<div id="tuoguan_btn" class="tg_btn jiameng_btn">一站式托管</div>
						</div>
						<div class="guanjiaNo">
							<!--没有管家的情况-->
							<div class="phone_img"><img src="owner_files/phone_icon.png"></div>
							<div class="phone">
								<span>400-100-1111 <span style="font-size: 18px; color: #666; position: relative; top: -2px;">转</span> 5</span>
							</div>
							<p class="b_text2">或点击</p>
							<div id="tuoguan_btn2" class="tg_btn jiameng_btn">一站式托管</div>
							<p class="b_text2">了解收益细则</p>
						</div>
					</div>

				</div>
				<div class="box_r">
					<div class="yz_title">同小区历史成交记录</div>
					<div id="data_chengqu" class="chengjiao_box">
						<div class="chengjiao_box_list">
							<!--<div class="list">
								<h4>怡海花园恒泰园－精装3居  110平</h4>
								<p>2016年2月16日签约<span class="fr"><span class="mr5 c_org fs16 dp_ib">8,000</span>元/月</span></p>
							</div>-->
							
						</div>
						
						<!--没有交易记录展示页面-->
						<div class="listNo">
							<p>该小区暂无成交记录</p>
						</div>
					</div>
				</div>
				<!--搜索无对应小区-->
				<div class="no_result">
					<div class="top_text">
						T^T，您所在的小区近期无成交记录
						<span>使用下列方法，估算您的房屋出租价格</span>
					</div>
					<div class="bottom_box clearfix">
						<div class="box">
							<img src="owner_files/kefu.png">
							<p class="c_org">拨打 400-100-1111 转 5</p>
							<p>联系客服(9：00 - 18 ：00在线)</p>
						</div>
						<div class="box box2">
							<img src="owner_files/jiameng_icon.png">
							<div id="no_result_jiameng_btn" class="tg_btn jiameng_btn">在线房东加盟</div>
							<p>30分钟内响应(9：00 - 18 ：00在线)</p>
						</div>
						<div class="box">
							<img src="owner_files/yz_ewm.jpg">
							<p class="c_org">关注微信公众号</p>
							<p>随时在线咨询房屋出租问题</p>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
	
	<!--yz_shenghuo 业主生活-->
	<div id="yz_shenghuo" class="yz_shenghuo">
		<div class="area">
			<div class="yz_name">
				<img src="owner_files/title_shenghuo.png">
				<p>签约自如，不仅能为房屋资产找到安全依托，更能相遇一份别样精彩</p>
			</div>
			<div class="list_box">
				<div class="list">
					<div class="yz_title">自如资讯</div>
					<div id="ziroom_news" class="slideBox show_box houseSlide"><div class="hd"><ul><li class=""></li><li class="on"></li><li class=""></li></ul></div><div class="bd"><ul style="position: relative; width: 390px; height: 390px;"><li style="position: absolute; width: 390px; left: 0px; top: 0px; display: none;" rel="0"><div class="img"><img src="owner_files/8aa61d89eaacc73364f22fb8b72bbb9b.jpg"></div><div class="text_box"><h4><span class="arrow_r"></span>哈佛商业案例眼中的自如</h4><p class="time">2016年4月9日</p></div></li><li style="position: absolute; width: 390px; left: 0px; top: 0px; display: list-item;" rel="1"><div class="img"><img src="owner_files/8f8cd111a3d85aa2de5593349616adee.jpg"></div><div class="text_box"><h4><span class="arrow_r"></span>自如入选清华管理案例</h4><p class="time">2014年12月</p></div></li><li style="position: absolute; width: 390px; left: 0px; top: 0px; display: none;" rel="2"><div class="img"><img src="owner_files/9036ccc67122c799ac0057a761151c95.jpg"></div><div class="text_box"><h4><span class="arrow_r"></span>商界对话："互联网＋”共享经济</h4><p class="time">2015年6月4日</p></div></li></ul></div></div>

				</div>
				<div class="list">
					<div class="yz_title">业主俱乐部</div>
					<div id="ziroom_activity" class="slideBox show_box houseSlide"><div class="hd"><ul><li class=""></li><li class="on"></li><li class=""></li></ul></div><div class="bd"><ul style="position: relative; width: 390px; height: 390px;"><li style="position: absolute; width: 390px; left: 0px; top: 0px; display: none;" rel="0"><div class="img"><img src="owner_files/1aef45addf0e1cd8c5a9ffcd639f90c8.jpg"></div><div class="text_box"><h4><span class="arrow_r"></span>自如与业主饕餮的这一场春光</h4><p class="time">2016年3月18日</p></div></li><li style="position: absolute; width: 390px; left: 0px; top: 0px; display: list-item;" rel="1"><div class="img"><img src="owner_files/82ed594165fc3f60c6438e1e85df61c1.jpg"></div><div class="text_box"><h4><span class="arrow_r"></span>自如业主与孩子们的温热时光</h4><p class="time">2016年2月27日</p></div></li><li style="position: absolute; width: 390px; left: 0px; top: 0px; display: none;" rel="2"><div class="img"><img src="owner_files/bdd057da2a6b299d0e1ea4eadde48c75.jpg"></div><div class="text_box"><h4><span class="arrow_r"></span>自如产品参展海外置业讲坛</h4><p class="time">2015年12月4日</p></div></li></ul></div></div>
				</div>
				<div class="list">
					<div class="yz_title">业主故事</div>
					<div id="ziroom_owner" class="slideBox show_box houseSlide"><div class="hd"><ul><li class="on"></li></ul></div><div class="bd"><ul style="position: relative; width: 390px; height: 390px;"><li style="position: absolute; width: 390px; left: 0px; top: 0px;" rel="0"><div class="img"><img src="owner_files/1ce29d8d48d79c61f04b5441a26da7c5.jpg"></div><div class="text_box"><h4><span class="arrow_r"></span>我将房屋空了十年，直到遇见自如</h4><p class="time">2016年4月1日</p></div></li></ul></div></div>
				</div>
			</div>
			
			
		</div>
	</div>
	
	<!--房屋装修，租期服务，安心租客-->
	<div class="yz_advantage_cont">
		<div class="area">
			<div class="yz_name">
				<img src="owner_files/title_zhuangxiu.png">
			</div>
			<div class="yz_advantage">
				<div class="img_box fl"><img src="owner_files/zhuangxiu.jpg"></div>
				<div class="info_box fr">
					<div class="text_top">
						<div class="name">
							<i></i>
							<img src="owner_files/text_zhuangxiu.png">
						</div>
						<p class="text">将您的房屋委托给自如出租，自如将对房屋进行配套装修设计，并对施工质量、家具家装品质全程监管。合同期内，还会定期对房屋进行维护保养。</p>
					</div>
					<a href="http://yezhu.ziroom.com/mfzx.html" class="know_btn" id="zhuangxiu_btn">进一步了解自如配套装修&nbsp;&gt;&gt;</a>
				</div>
			</div>
			
			<div id="yz_fuwu" class="yz_name">
				<img src="owner_files/title_fuwu.png">
			</div>
			<div class="yz_advantage">
				<div class="img_box fr"><img src="owner_files/fuwu.jpg"></div>
				<div class="info_box fl">
					<div class="text_top">
						<div class="name">
							<i></i>
							<img src="owner_files/text_fuwu.png">
						</div>
						<p class="text">签约即刻起，您便拥有一位专属自如管家。与房屋出租相关的一切事物，您的管家会一一代劳。</p>
					</div>
					<a href="http://yezhu.ziroom.com/zqfw.html" class="know_btn" id="tgfw_btn">进一步了解托管服务&nbsp;&gt;&gt;</a>
				</div>
			</div>
			
			<div class="yz_name">
				<img src="owner_files/title_zuke.png">
			</div>
			<div class="yz_advantage">
				<div class="img_box fl"><img src="owner_files/zuke.jpg"></div>
				<div class="info_box fr">
					<div class="text_top">
						<div class="name">
							<i></i>
							<img src="owner_files/text_zuke.png">
						</div>
						<p class="text">自如的租客（自如客）80%在25-40岁之间，他们在为自己打拼美好未来的同时，也让这个城市更加美好。</p>
					</div>
					<a href="http://yezhu.ziroom.com/axzk.html" class="know_btn" id="zuke_btn">进一步了解自如租客&nbsp;&gt;&gt;</a>
				</div>
			</div>
			
			
		</div>
	</div>
	
	<!--自如承诺-->
	<div class="choose_zr">
		<div class="area">
			<div class="yz_name">
				<img src="owner_files/title_chengnuo.png">
			</div>
			<ul class="chengnuo_box">
				<li>
					<img src="owner_files/chengnuo_img1.png" class="img">
					<dl>
						<dt>稳增</dt>
						<dd>租金逐年递增<br>
							品质装修（到期赠送）<br>
							优质家具（到期赠送）<br>
							品质家电（到期赠送）		
						</dd>
					</dl>
				</li>
				<li>
					<img src="owner_files/chengnuo_img2.png" class="img">
					<dl>
						<dt>省心</dt>
						<dd>双周保洁<br>
							专业维修<br>
							一站式托管<br>
							水电气物业费代缴
						</dd>
					</dl>
				</li>
				<li>
					<img src="owner_files/chengnuo_img3.png" class="img">
					<dl>
						<dt>安全</dt>
						<dd>租客认证<br>
							定期巡房<br>
							租客信用体系<br>
							家财保险（赠送）		
						</dd>
					</dl>
				</li>
			</ul>
		</div>
	</div>
	
	<!--tuoguan 托管-->
	<div class="tuoguan">
		<div class="area clearfix">
			<div class="tg_phone_box">
				<h5><i></i>托管电话</h5>
				<p class="phone">400-100-1111 <span style="font-size: 24px; color: #666; position: relative; top: -2px;">转</span> 5</p>
				<p class="tc fs12 mt10 c_gray">服务时间：9：00 - 18：00（节假日照常）</p>
				<p class="tc fs12 c_gray">（如在非服务时间委托，我们将在上班后及时您取得联系）</p>
				<span id="jiameng_bottom" class="btn jiameng_btn">房东加盟<span>+</span></span>
			</div>
			<div class="liucheng_box">
				<h5>托管流程</h5>
				<p><img src="owner_files/tuoguan_liucheng.png"></p>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="area clearfix">
		<p>Copyright@2016 ziroom.com版权所有 京ICP备11024601号-9</p>
		</div>
	</div>
	
	<!--业主生活详情-->
	<div id="sq_hd_info" class="list_info">
		<a href="javascript:;" id="sq_hd_info_close" class="close"></a>
    		<div class="area pr">
    			<div class="fr_img_show">
				<div id="pic_bg"></div>
				<div id="picarea">
					<div class="bigimg" id="roombigpic">
				    	<ul class="bn_box" id="bn_box">
				        		
				        </ul>
				    </div>
				    <div class="smallimg" id="thumbs">
				    		<a href="javascript:;" class="roomprev" id="roomprev"></a>
				        <div class="bn_tab">
				        		<ul style="margin-left: 0px;" id="s_img">
				            		
				            	</ul>
				        	</div>
				        <a href="javascript:;" class="roomnext" id="roomnext"></a>
				    </div>
				</div> 
    			</div>
    			
		    <div class="r_text">
		    		<div class="yz_title"></div>
		    		<div id="content-dtk" class="text_box">
		    			<div id="text_box"></div>
		    		</div>
		    		
		    </div>
    		</div>
    	</div>
	
	<!--加盟弹层-->
	<div id="jiameng_box" class="ow_box">
		<a href="javascript:;" class="close"></a>
		<div class="jiameng_box">
			<ul class="jiameng_tah tah">
				<li class="on" id="zxtj">
					<h5>在线提交</h5>
					<span>（填写基本信息，<br>客服将及时与您沟通）</span>
					<i class="arrow_f"></i>
				</li>
				<li id="bdrx">
					<h5>拨打热线</h5>
					<span>（服务时间：<br>9：00-18：00）</span>
					<i class="arrow_f"></i>
				</li>
			</ul>
			<div class="jiameng_tad tad">
				<div class="item">
					<div id="jiameng_form" class="form">
						<div class="label">姓名(必填)</div>
						<div class="form_box input_box">
							<input id="clientName" class="input" type="text">
						</div>
						
						<div class="label">联系电话(必填)</div>
						<div class="form_box input_box">
							<input id="clientTel" class="input" maxlength="11" type="tel">
						</div>
						
						<div class="label">验证码(必填)</div>
						<div class="form_box input_box">
							<input id="clientYzm" class="input" maxlength="6" type="text">
							<div class="yzm_box">
								<div class="btn hq_yzm" onclick="yzm_img(this)"><img src="owner_files/captcha.jpg" style=" width:100%; height:100%"></div>
							</div>
							<div class="yzm_check_box"></div>
						</div>
						
						<div class="label">房屋城市(必填)</div>
						<dl class="form_box select_box form_city">
							<dt data-id="110000" class="current" id="clientCity">北京</dt>
							<dd>
						    		<div class="con">
									<a data-id="110000" href="javascript:void(0)">北京</a>
									<a data-id="310000" href="javascript:void(0)">上海</a>
						            <a data-id="440300" href="javascript:void(0)">深圳</a>
								</div>
							</dd>
						</dl>
						
						<div class="label">小区(必填)</div>
						<div class="form_box input_box">
							<input id="clientShequ" name="" class="input lx_input2" type="text">
							<div style="display: none;" id="lx_box2" class="lx_box">
						    		<!--<div class="con">
									<a href="javascript:void(0)">小区名称小区名称1</a>
								</div>-->
								
							</div>
						</div>
						
						<div class="label">其他情况(选填)</div>
						<div class="form_box">
							<textarea name="" rows="4" cols="" id="clientQita"></textarea>
						</div>
						
						<div class="warn_box" id="msgInfo"></div>
						
						<div class="btn_box">
							<input id="jiameng_subbtn" value="提交" class="subbtn" onclick="jiamengSubFn()" type="button">
						</div>
						
					</div>
				</div>
				<div class="item">
					<div class="jiameng_ow_box">
						<div class="tg_phone_box">
							<h5><i></i>托管电话</h5>
							<p class="phone">400-100-1111 <span style="font-size: 24px; color: #666; position: relative; top: -2px;">转</span> 5</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--加盟成功弹层-->
	<div id="jiameng_success" class="ow_box">
		<a href="javascript:;" class="close"></a>
		<div class="jiameng_success">
			<div class="success_img"><img src="owner_files/sub_success.png"></div>
			<div class="success_text">房源信息提交成功</div>
			<div class="success_p">在服务时间内（9：00 - 18：00），自如客服将在30分钟内与您电话联系。<br>其他时间段，自如客服将会在上班后，第一时间与您电话取得联系，感谢您的支持~</div>
			<div class="link_point"><span class="second">5</span>秒自动跳转，不跳转<a href="javascript:;" class="close_jiameng_success">请点击这里</a></div>
		</div>
	</div>
	
	<!--视频弹层-->
	<div id="video_ow" class="ow_box">
		<a href="javascript:;" class="close"></a>
		<div class="video_box">
			<!--了解自如模式视频-->
			<embed src="owner_files/bcloud.swf" allowfullscreen="true" quality="high" allowscriptaccess="always" flashvars="uu=n8dwa8t4be&amp;vu=fc204a87c4&amp;auto_play=0&amp;gpcflag=1&amp;width=900&amp;height=500" type="application/x-shockwave-flash" align="middle" height="500" width="900">
		</div>
	</div>
	
<!-- S JiaThis -->
<!-- <script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_r.js?move=0" charset="utf-8"></script> -->
<!-- <script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_r.js?move=0&amp;btn=r5.gif" charset="utf-8"></script> -->

<!-- E JiaThis -->

<!-- S 统计代码 -->
		<span class="hide">    
			<script>
				var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
				document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F038002b56790c097b74c818a80e3a68e' type='text/javascript'%3E%3C/script%3E"));
			</script><script src="owner_files/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=038002b56790c097b74c818a80e3a68e" target="_blank"><img src="owner_files/21.gif" border="0" height="20" width="20"></a>
    		<script>
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
<!-- E 统计代码 -->

<span class="hide">    
	<script type="text/javascript">
		$(function(){
	   	var id = '',
	    href = '',
	    title = '';

		$(document).click(function(e)
		{
		var oEvent=e || event;
		var x=oEvent.clientX;
		var y=oEvent.clientY;

		if($(window).scrollTop() >0)
		{
		y+=$(window).scrollTop();
		}

		var thisObj=oEvent.target;
		var p_id=thisObj.id;
		var sHref=thisObj.href;
		var target='';

		id = '';
		href = '';
		title = '';


		if(oEvent.target.nodeName=='A')
		{
		title=thisObj.innerHTML;
		target=thisObj.target;
		if(!target)
		{
		   stopDefault(oEvent) ;
		}
		}
		if( thisObj.nodeName=='IMG')
		{
		title=thisObj.parentNode.title;
		target=thisObj.parentNode.target;
		sHref=thisObj.parentNode.href;
		if(!target)
		{
		   stopDefault(oEvent) ;
		}
		}

		while(p_id=='')
		{
		thisObj = thisObj.parentNode;
		p_id = 	thisObj.id;
		}

		while(sHref=='')
		{
		thisObj = thisObj.parentNode;
		sHref = thisObj.sHref;

		}

		if(p_id!=undefined)
		{
		id=p_id;
		}

		if(sHref!=undefined && sHref!="javascript:void(0)" && sHref!="javascript:;")
		{
		href=sHref;
		}

		var  Width    = window.screen.availWidth;   //获取浏览器的分辨率
		var  Height   = window.screen.availHeight;
		var  url      = window.location.host;//"http://yezhu.ziroom.com";
		var  typePage =  'index';
		$.ajax({
		 type: "POST",
		 url: "/page/click_log.php",
		 data: {"X":x,"Y":y,"Div_id":id,"resolute":Width+'*'+Height,"href":href,"title":title,"url":url,"typePage": 'index'},
		 success: function()
		 {
		     if(href!='' && !target)
		 {
		        window.location.href=href;
		 }
		 }
		 });

		});
		});
		function stopDefault(e)
		{
		    var oEvent=e || event;
		if(oEvent && oEvent.preventDefault )
		{
		oEvent.preventDefault();
		}
		else
		{
		window.event.returnValue = false;
		}
		return false;
		}
	</script>
</span>


</body></html>