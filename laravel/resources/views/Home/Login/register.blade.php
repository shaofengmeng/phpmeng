



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<title>用户注册 - 兼职猫</title>
	<meta name="description" content="兼职猫为求职者提供更新更全、安全可靠的兼职招聘信息，是国内专业的兼职求职平台。找兼职就上兼职猫。">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<!--  使低于IE9版本的浏览器支持html5标签  -->
<!--[if lt IE 9]>
        <script src="static/js/html5_1.js"></script>
        <![endif]-->
<link rel="icon"
	href="http://oss.aliyuncs.com/jianzhimao/web-res/icon/jianzhimao-logo-min.png?version=2.28.23"
	type="image/x-icon" />
<link resl="shortcut icon"
	href="http://oss.aliyuncs.com/jianzhimao/web-res/icon/jianzhimao-logo-min.png?version=2.28.23"
	type="image/x-icon" />
<link rel="stylesheet"
	href="static/css/reset_1.css">
<link rel="stylesheet"
	href="static/css/header_1.css">
<link rel="stylesheet"
	href="static/css/container_header_logo_box_1.css">
<link rel="stylesheet"
	href="static/css/register.css">
<link rel="stylesheet"
	href="static/css/footer_1.css">

<!--  font-awesome图标集  -->
<link rel="stylesheet"
	href="static/css/font-awesome.min_1.css">
<!--[if IE 7]>
        <link rel="stylesheet" href="static/css/font-awesome-ie7.min_1.css">
        <![endif]-->
</head>
<body>
	




<script src="static/js/sea_1.js"></script>
<script>
	var year = new Date().getFullYear(),
		month = (new Date().getMonth()+1>9)? new Date().getMonth()+1:"0"+ (new Date().getMonth()+1),
		date = (new Date().getDate()>9)? new Date().getDate():"0"+new Date().getDate(),
		hour = (new Date().getHours()>9)? new Date().getHours():"0"+new Date().getHours();
		time = new Date().getTime();
	var datetime =  year + month + date + hour+time;
seajs.config({
	  alias: { },
	  map: [
	    [ /^(.*\/web\/assets\/js\/.*\.(?:css|js))(?:.*)$/i, '$1?v='+ datetime ]
	  ]
	});


</script>
<header class="header">
	<nav class="w_main navigation_box">
		<div class="city_wrap">
			<span class="city">广州</span> <a rel="nofollow" href="http://www.jianzhimao.com/ctrlcity/changeCity.html">[切换城市]</a>
		</div>
		<div class="channel_box">
			<a rel="nofollow" href="http://www.jianzhimao.com">首页</a>
			<a rel="nofollow" href="http://www.jianzhimao.com/ctrlCooperate/qghz.html" id="cooperation">申请社团赞助</a>
			 <a rel="nofollow" href="http://www.jianzhimao.com/ctrlindex/enterprise.html">企业服务</a>


			


			|
			

				<a rel="nofollow" href="http://www.jianzhimao.com/ctrlcity/login"
					class="selected">登录</a>


		    
		    
			

		</div>
	</nav>
	<div id="cooperation_box_alt" class="cooperation_box_alt">
        <div class="cooperation_box_overlay"></div>
        <div class="cooperation_box">
            <div class="title">申请合作<a rel="nofollow" class="close_btn" href="javascript:;" onclick="this.parentNode.parentNode.parentNode.style.display='none'">×</a></div>
            <div class="cont">
                <div class="p_left"><img src="static/picture/cooperation_1.png" alt="申请合作"></div>
                <div class="p_right">
                    <a rel="nofollow" href="http://www.jianzhimao.com/ctrlCooperate/qydl.html" target="_blank" class="btn company">申请区域代理</a>
                    <a rel="nofollow" href="http://www.jianzhimao.com/ctrlCooperate/wzhz.html" target="_blank" class="btn websize">申请网站合作</a>
                    <a rel="nofollow" href="http://www.jianzhimao.com/ctrlCooperate/qghz.html" target="_blank" class="btn school">申请勤工合作</a>
                </div>
            </div>
        </div>
    </div>
</header>

	<section class="container">
		<header class="w_main">
			<div class="logo_box clearfix">
				<a href="http://guangzhou.jianzhimao.com" class="logo left"><img
					src="static/picture/logo_1.png"
					alt="兼职猫logo"></a>
				<div class="title_wrap left">免费注册</div>
			</div>
		</header>

		<div class="w_main content_box">
			<article class="main_wrap clearfix">
				<div class="register_box" id="register_box">
					<div style="color: #5F5F5F; padding-bottom: 20px;">注册兼职猫，找兼职，招兼职更容易</div>
					<div class="head">
						<span>手机快速注册</span>
					</div>
					<div class="cont">
						<div class="row">
							<div class="user_type_tabs" id="user_type_tabs">
								<label>
									<div class="introduction" style="display: block;">求职者账号：用来查看兼职，申请兼职工作，遇上了虚假兼职，请积极投诉。</div>
									<input type="radio" name="user_type"
									value="1"> 求职者<i class="arrow_up"
									style="display: block;"></i>
								</label> <label>
									<div class="introduction">企业或机构：用来发布真实可靠的兼职，认证成功后可直接发布，无需审核。</div>
									<input type="radio" name="user_type" value="2" checked="checked"> 企业或机构<i
									class="arrow_up"></i>
								</label>
							</div>
						</div>
						<div class="box" id="user_box" >
							<div class="row">
								<span class="txt_left">手机号:</span>
								<div>
									<label class="ipt_outer"><input type="text"
										class="phone_number" id="phone_number" placeholder="请输入手机号码"></label>
								</div>
							</div>
							<div class="row">
								<span class="txt_left">图形验证码:</span>
								<div>
									<label class="validate_code_wrap ipt_outer"><input
										type="text" placeholder="点此查看验证码" class="validate_code"
										id="validate_code"><img src="static/picture/7c59c25ddd2243a5a4dfc7cee6b74d3d.gif"
										alt="验证码" class="validate_code_img" id="validate_code_img"></label>
									<i class="question">&nbsp;
										<div>点击输入框即可查看验证码，看不清？点击图片即可刷新验证码</div>
									</i>
								</div>
							</div>
							<div class="row">
								<span class="txt_left">短信验证码:</span>
								<div>
									<label class="identify_code_wrap ipt_outer"><input
										type="text" placeholder="输入验证码" class="identify_code"
										id="identify_code"><a
										class="identify_code_btn disabled"
										id="identify_code_btn_waiting"></a><a
										class="identify_code_btn" id="identify_code_btn">获取验证码</a></label> <i
										class="question">&nbsp;
										<div>
											点击输入框即可查看验证码，若一分钟内没有收到验证码，请联系客服快捷获取（请勿离开当前页面），客服QQ: <a
												target="_blank"
												href="http://wpa.qq.com/msgrd?v=3&amp;uin=919664324&amp;site=qq&amp;menu=yes"
												class="blue">919664324</a> 或电话: <span class="orange">400-803-4199</span>
										</div>
									</i>
								</div>
							</div>
							<div class="row">
								<span class=txt_left>密码:</span>
								<div>
									<label class="ipt_outer"><input type="password"
										placeholder="请输入密码" class="password" id="password"></label>
								</div>
							</div>
							<div class="row">
								<span class="txt_left">确认密码:</span>
								<div>
									<label class="ipt_outer"><input type="password"
										placeholder="请确认密码" class="cfm_password" id="cfm_password"></label>
								</div>
							</div>
							<div class="row">
								<div>
									<label class="checkbox"><input type="checkbox"
										checked="checked" class="accept" id="accept"> <small>我接受兼职猫<a
											href="//www.jianzhimao.com/web/用户协议.doc"
											class="blue"><<服务条款>></a></small></label>
								</div>
							</div>
							<div class="row">
								<div class="register_btn disabled" id="register_btn_disabled">立即注册</div>
								<div class="register_btn" id="register_btn">立即注册</div>
							</div>
						</div>

						<div class="box" id="company_box" style="display: block;">
							<div class="row">
								<span class="txt_left">手机号:</span>
								<div>
									<label class="ipt_outer"><input type="text"
										class="phone_number" id="cmp_phone_number"
										placeholder="请输入手机号码"></label>
								</div>
							</div>
							<div class="row">
								<span class="txt_left">图形验证码:</span>
								<div>
									<label class="validate_code_wrap ipt_outer"><input
										type="text" placeholder="点此查看验证码" class="validate_code"
										id="cmp_validate_code"><img
										src="static/picture/7c59c25ddd2243a5a4dfc7cee6b74d3d.gif" alt="验证码"
										class="validate_code_img" id="cmp_validate_code_img"></label> <i
										class="question">&nbsp;
										<div>点击输入框即可查看验证码，看不清？点击图片即可刷新验证码</div>
									</i>
								</div>
							</div>
							<div class="row">
								<span class="txt_left">短信验证码:</span>
								<div>
									<label class="identify_code_wrap ipt_outer"><input
										type="text" placeholder="输入验证码" class="identify_code"
										id="cmp_identify_code"><a
										class="identify_code_btn disabled"
										id="cmp_identify_code_btn_waiting"></a><a
										class="identify_code_btn" id="cmp_identify_code_btn">获取验证码</a></label>
									<i class="question">&nbsp;
										<div>
											点击输入框即可查看验证码，若一分钟内没有收到验证码，请联系客服快捷获取（请勿离开当前页面），客服QQ: <a
												target="_blank"
												href="http://wpa.qq.com/msgrd?v=3&amp;uin=919664324&amp;site=qq&amp;menu=yes"
												class="blue">919664324</a> 或电话: <span class="orange">400-803-4199</span>
										</div>
									</i>
								</div>
							</div>
							<div class="row">
								<span class=txt_left>密码:</span>
								<div>
									<label class="ipt_outer"><input type="password"
										placeholder="请输入密码" class="password" id="cmp_password"></label>
								</div>
							</div>
							<div class="row">
								<span class="txt_left">确认密码:</span>
								<div>
									<label class="ipt_outer"><input type="password"
										placeholder="请确认密码" class="cfm_password" id="cmp_cfm_password"></label>
								</div>
							</div>
							<div class="row">
								<span class="txt_left">所在地区:</span>
								<div>
									<select class="select" id="cmp_province">
										
											<option>广东</option>
										
											<option>海南</option>
										
											<option>广西</option>
										
											<option>重庆市</option>
										
											<option>四川</option>
										
											<option>北京市</option>
										
											<option>天津市</option>
										
											<option>河北</option>
										
											<option>山西</option>
										
											<option>内蒙古</option>
										
											<option>辽宁</option>
										
											<option>吉林</option>
										
											<option>黑龙江</option>
										
											<option>上海市</option>
										
											<option>江苏</option>
										
											<option>浙江</option>
										
											<option>安徽</option>
										
											<option>福建</option>
										
											<option>江西</option>
										
											<option>山东</option>
										
											<option>河南</option>
										
											<option>湖北</option>
										
											<option>湖南</option>
										
											<option>贵州</option>
										
											<option>云南</option>
										
											<option>西藏</option>
										
											<option>陕西</option>
										
											<option>甘肃</option>
										
											<option>青海</option>
										
											<option>宁夏</option>
										
											<option>新疆</option>
										
											<option>澳门</option>
										
											<option>香港</option>
										
											<option>台湾</option>
										
											<option>荆门</option>
										
									</select> <select class="select" id="cmp_city">
										
											<option>广州</option>
										
											<option>韶关</option>
										
											<option>深圳</option>
										
											<option>珠海</option>
										
											<option>汕头</option>
										
											<option>佛山</option>
										
											<option>江门</option>
										
											<option>湛江</option>
										
											<option>茂名</option>
										
											<option>肇庆</option>
										
											<option>惠州</option>
										
											<option>梅州</option>
										
											<option>汕尾</option>
										
											<option>河源</option>
										
											<option>阳江</option>
										
											<option>清远</option>
										
											<option>东莞</option>
										
											<option>中山</option>
										
											<option>潮州</option>
										
											<option>揭阳</option>
										
											<option>云浮</option>
										
									</select> <select class="select" id="cmp_area">
										
											<option>天河</option>
										
											<option>荔湾</option>
										
											<option>越秀</option>
										
											<option>海珠</option>
										
											<option>花都</option>
										
											<option>番禺</option>
										
											<option>从化</option>
										
											<option>增城</option>
										
											<option>黄埔</option>
										
											<option>白云</option>
										
											<option>南沙</option>
										
											<option>萝岗</option>
										
									</select> <i class="question">&nbsp;
										<div>
											如没有您的城市，请联系客服QQ: <a target="_blank"
												href="http://wpa.qq.com/msgrd?v=3&amp;uin=919664324&amp;site=qq&amp;menu=yes"
												class="blue">1158511010</a>
										</div>
									</i>
								</div>
							</div>
							<div class="row">
								<span class="txt_left">组织名字:</span>
								<div>
									<label class="ipt_outer"><input type="text"
										id="cmp_name" placeholder="请填写机构或团队的名字"></label> <i
										class="question">&nbsp;
										<div>请填写机构或团队的名字，便于兼职发布</div>
									</i>
								</div>
							</div>
							<div class="row">
								<span class="txt_left">专用邮箱:</span>
								<div>
									<label class="ipt_outer"><input type="text"
										id="cmp_email" placeholder="请填写专用邮箱"></label> <i
										class="question">&nbsp;
										<div>请填写专用邮箱，便于接受兼职发布信息通知</div>
									</i>
								</div>
							</div>
							<div class="row">
								<div>
									<label class="checkbox"><input type="checkbox"
										checked="checked" class="accept" id="cmp_accept"> <small>我接受兼职猫<a
											href="//www.jianzhimao.com/web/用户协议.doc"
											class="blue"><<服务条款>></a></small></label>
								</div>
							</div>
							<div class="row">
								<div class="register_btn disabled"
									id="cmp_register_btn_disabled">立即注册</div>
								<div class="register_btn" id="cmp_register_btn">立即注册</div>
							</div>
						</div>
					</div>
				</div>
			</article>
		</div>
	</section>

	


<footer class="footer">
	<div class="w_main channel">
		<a target="_blank" rel="nofollow" href="http://www.jianzhimao.com/ctrlindex/contact.html" style="padding-left: 0;">关于我们</a>|
    	<a target="_blank" rel="nofollow" href="http://www.jianzhimao.com/ctrlindex/join.html">加入我们</a>|
    	<a target="_blank" rel="nofollow" href="http://www.jianzhimao.com/ctrlindex/enterprise.html">企业推广</a>|
    	<a target="_blank" rel="nofollow" href="http://www.jianzhimao.com/ctrlCooperate/help.html">帮助中心</a>| &nbsp; &nbsp; &nbsp; 企业服务热线：4008034199 &nbsp; &nbsp;| &nbsp; &nbsp;业务电话：020-37109777
    	<a class="qq" target="_blank" rel="nofollow" href="tencent://message/?uin=800005602&amp;Site=http://qbar.qq.com/application/&amp;Menu=ye"><img src="static/picture/kf_qq_1.png" /></a>
        <a class="qq" target="_blank" rel="nofollow" href="tencent://message/?uin=3547627935&amp;Site=http://qbar.qq.com/application/&amp;Menu=ye"><img src="static/picture/yw_qq_1.png" /></a>

	</div>
	<p class="w_main"> Copyright©2018 兼职猫 jianzhimao.com 广州九尾信息科技有限公司 版权所有   <a style="color:#727272;" href="http://www.miibeian.gov.cn" target="_blank">粤ICP备13061591号</a> </p>
</footer>
  

    <script type="text/javascript">

    //CNZZ统计
    var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cspan id='cnzz_stat_icon_1000413010'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/q_stat.php%3Fid%3D1000413010' async type='text/javascript'%3E%3C/script%3E"));

    //baidu统计
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript async src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F447f87add4dbd73deca17a45d8536dbd' type='text/javascript'%3E%3C/script%3E"));

    </script>

<script>
//延迟CNZZ统计, 以免影响页面载入

</script>
<script type='text/javascript'>
		var user_id="";
		var company_name="";
		var user_name="";
		var company_id="";
		var _vds = _vds || [];
        window._vds = _vds;
        (function(){
        	
          _vds.push(['setAccountId', 'b0d18e1f996f733e']);
          _vds.push(['setCS1', 'user_id', user_id]);
          _vds.push(['setCS2', 'company_id', company_id]);
          _vds.push(['setCS3', 'user_name', company_name]);
          _vds.push(['setCS3', 'company_name', company_name]);
         

          (function() {
            var vds = document.createElement('script');
            vds.type='text/javascript';
            vds.async = true;
            vds.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'dn-growing.qbox.me/vds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(vds, s);
          })();
        })();
</script>
<script>
//判断当前浏览类型  
function checkBrowserType()  
{  
	var userAgent = navigator.userAgent; //取得浏览器的userAgent字符串  
	var isOpera = userAgent.indexOf("Opera") > -1; //判断是否Opera浏览器  
	var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1 && !isOpera; //判断是否IE浏览器  
	var isEdge = userAgent.indexOf("Windows NT 6.1; Trident/7.0;") > -1 && !isIE; //判断是否IE的Edge浏览器  
	var isFF = userAgent.indexOf("Firefox") > -1; //判断是否Firefox浏览器  
	var isSafari = userAgent.indexOf("Safari") > -1 && userAgent.indexOf("Chrome") == -1; //判断是否Safari浏览器  
	var isChrome = userAgent.indexOf("Chrome") > -1 && userAgent.indexOf("Safari") > -1; //判断Chrome浏览器  

	if (isIE)   
	{  
		 var reIE = new RegExp("MSIE (\\d+\\.\\d+);");  
		 reIE.test(userAgent);  
		 var fIEVersion = parseFloat(RegExp["$1"]);  
		 if(fIEVersion == 7)  
		 { return "IE7";}  
		 else if(fIEVersion == 8)  
		 { return "IE8";}  
		 else if(fIEVersion == 9)  
		 { return "IE9";}  
		 else if(fIEVersion == 10)  
		 { return "IE10";}  
		 else if(fIEVersion == 11)  
		 { return "IE11";}  
		 else  
		 { return "0"}//IE版本过低  
	 }//isIE end  
	   
	 if (isFF) {  return "FF";}  
	 if (isOpera) {  return "Opera";}  
	 if (isSafari) {  return "Safari";}  
	 if (isChrome) { return "Chrome";}  
	 if (isEdge) { return "Edge";}  
 }//myBrowser() end  
 var _t = checkBrowserType();
 if(_t=="IE7" || _t=="IE8" ||_t=="0"){
	if(document.getElementById("borwserTips")==undefined){
		var div = document.createElement("div");
		div.setAttribute("id","borwserTips");
		var txt = document.createTextNode("抱歉，你所用的浏览器版本过低，导致部分内容无法正常使用，可考虑升级IE9及以上版本或更换谷歌，火狐等浏览器进行使用，体验更佳哟。");
		div.appendChild(txt);
		div.style.background = "#fef9e5";
		div.style.color = "#ff5202";
		div.style.fontSize = "14px";
		div.style.textAlign = "center";
		div.style.height = "30px";
		div.style.lineHeight = "30px";
		var firstChild = document.body;
		firstChild.insertBefore(div,firstChild.childNodes[0])
	}
 }


 function isweixindo(){
			if(is_weixin()){
				$("#tipweixin").show();
			}else{
			}
 }
function is_weixin(){
	var ua = navigator.userAgent.toLowerCase();
	if(ua.match(/MicroMessenger/i)=="micromessenger") {
		return true;
	} else {
		return false;
	}
}

// 函数
 function browser_pc() {
      var userAgentInfo = navigator.userAgent;
      var Agents = ["Android", "iPhone",
                  "SymbianOS", "Windows Phone",
                  "iPad", "iPod"];
      var flag = true;
      for (var v = 0; v < Agents.length; v++) {
          if (userAgentInfo.indexOf(Agents[v]) > 0) {
              flag = false;
              break;
          }
      }
      return flag;
}

//判断是否是苹果端
function is_ios() {
    var u = navigator.userAgent;
    var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
    return isiOS;
}
</script>
  

</body>
</html>
<script src="static/js/sea_1.js"></script>
<script>
	seajs.use("register");
</script>