

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>用户登录 - 兼职猫</title>
	<meta name="description" content="兼职猫为求职者提供更新更全、安全可靠的兼职招聘信息，是国内专业的兼职求职平台。找兼职就上兼职猫。">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<!--  使低于IE9版本的浏览器支持html5标签  -->
<!--[if lt IE 9]>
        <script src="static/js/html5.js"></script>
        <![endif]-->
<link rel="icon"
	href="http://oss.aliyuncs.com/jianzhimao/web-res/icon/jianzhimao-logo-min.png?version=2.28.23"
	type="image/x-icon" />
<link resl="shortcut icon"
	href="http://oss.aliyuncs.com/jianzhimao/web-res/icon/jianzhimao-logo-min.png?version=2.28.23"
	type="image/x-icon" />
<link rel="stylesheet"
	href="static/css/reset.css">
<link rel="stylesheet"
	href="static/css/header.css">
<link rel="stylesheet"
	href="static/css/container_header_logo_box.css">
<link rel="stylesheet"
	href="static/css/login.css">
<link rel="stylesheet"
	href="static/css/footer.css">
<link rel="stylesheet" href="static/css/alt.css">
<!--  font-awesome图标集  -->

<link rel="stylesheet"
	href="static/css/font-awesome.min.css">
<!--[if IE 7]>
        <link rel="stylesheet" href="static/css/font-awesome-ie7.min.css">
        <![endif]-->
</head>
<body>
	




<script src="static/js/sea.js"></script>
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
                <div class="p_left"><img src="static/picture/cooperation.png" alt="申请合作"></div>
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
					src="static/picture/logo.png"
					alt="兼职猫logo"></a>
				<div class="title_wrap left">用户登录</div>
			</div>
		</header>

		<div class="w_main content_box clearfix">
			<div class="ad_box" id="ad_box">
				<ul class="banners" >
					<li><a href="//www.jianzhimao.com/vip"><img
						src="static/picture/login_vip_banner1.jpg"
						alt="求职用户"></a></li>
				</ul>
				<ul class="banners" style="display: block;">
					<li><a href="//www.jianzhimao.com/vip"><img
						src="static/picture/login_vip_banner1.jpg"
						alt="企业用户"></a></li>
				</ul>
			</div>
			<div class="login_box">
				<div class="user_type_tabs clearfix" id="user_type_tabs">
					<span id="user_type-0">求职用户</span> <span  class="selected" 
						id="user_type-1">企业用户</span>
				</div>
				<div class="info_box" id="info_box">
					<div>手机号/邮箱</div>
					<label class="account_wrap"><i class="icon-user"></i> <input
						type="text" class="account" id="account" tabindex="1"></label>
					<div class="forget_psw_wrap">
						密码<a href="/ctrlcommon/resetPassword" class="forget_psw">忘记密码？</a>
					</div>
					<label class="psw_wrap"><i class="icon-lock"></i> <input
						type="password" class="psw" id="psw" tabindex="2"></label>
					<div>
						<label class="validate_code_wrap"><input type="text"
							placeholder="点此查看验证码" class="validate_code" id="validate_code" tabindex="3"><img
							src="static/picture/8a8107bad16d478a9e7e6205dbee5ce1.gif" alt="验证码"
							class="validate_code_img" id="validate_code_img"></label>
					</div>
					<div class="auto_login_wrap">
						<input type="checkbox" class="auto_login" id="auto_login" checked>
						<span>下次自动登录(公共场所请勿勾选)</span>
					</div>
					<div class="login_btn" id="login_btn">登录兼职猫</div>
					<div class="login_btn disabled" id="login_btn_disabled">
						<i class="icon-spinner icon-spin"></i> 正在登录
					</div>
					<div class="register_wrap">
						还没有兼职猫账号？<a href="/ctrlcity/reg">免费注册</a>
					</div>
				</div>
			</div>
			<div class="sns_wrap">
				关注兼职猫: <a href="http://weibo.com/u/5130312330"><img
					src="static/picture/sina_weibo.png"
					alt="新浪微博"></a> <a id="weichat_2wm" href="javascript:;"><img
					src="static/picture/wechat.png"
					alt="新浪微博"></a>
			</div>
		</div>
	</section>

	<div class="data_hidden" id="init_operate">
		{ "user_account":"null", "user_pwd":"null","user_type":"null" }
	</div>
	


<footer class="footer">
	<div class="w_main channel">
		<a target="_blank" rel="nofollow" href="http://www.jianzhimao.com/ctrlindex/contact.html" style="padding-left: 0;">关于我们</a>|
    	<a target="_blank" rel="nofollow" href="http://www.jianzhimao.com/ctrlindex/join.html">加入我们</a>|
    	<a target="_blank" rel="nofollow" href="http://www.jianzhimao.com/ctrlindex/enterprise.html">企业推广</a>|
    	<a target="_blank" rel="nofollow" href="http://www.jianzhimao.com/ctrlCooperate/help.html">帮助中心</a>| &nbsp; &nbsp; &nbsp; 企业服务热线：4008034199 &nbsp; &nbsp;| &nbsp; &nbsp;业务电话：020-37109777
    	<a class="qq" target="_blank" rel="nofollow" href="tencent://message/?uin=800005602&amp;Site=http://qbar.qq.com/application/&amp;Menu=ye"><img src="static/picture/kf_qq.png" /></a>
        <a class="qq" target="_blank" rel="nofollow" href="tencent://message/?uin=3547627935&amp;Site=http://qbar.qq.com/application/&amp;Menu=ye"><img src="static/picture/yw_qq.png" /></a>

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
  
	<!-- 初始化常量 -->
	<input type="hidden" id="http_id" value="http">
	<input type="hidden" id="https_id" value="https">
</body>
</html>
<script src="static/js/sea.js"></script>
<script>
seajs.use("login.js?v=20170321");
var host="jianzhimao.com";
var c = "guangzhou";
</script>