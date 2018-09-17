<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>兼职信息审核中-兼职猫网页</title>
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<!--  使低于IE9版本的浏览器支持html5标签  -->
<!--[if lt IE 9]>
        <script src="{{asset('static/js/html5.js')}}')}}"></script>
        <![endif]-->
<link rel="icon"
	href="http://oss.aliyuncs.com/jianzhimao/web-res/icon/jianzhimao-logo-min.png?version=2.28.23"
	type="image/x-icon" />
<link resl="shortcut icon"
	href="http://oss.aliyuncs.com/jianzhimao/web-res/icon/jianzhimao-logo-min.png?version=2.28.23"
	type="image/x-icon" />
<link rel="stylesheet"
	href="{{asset('static/css/reset_1.css')}}">
<link rel="stylesheet"
	href="{{asset('static/css/header_1.css')}}">
<link rel="stylesheet"
	href="{{asset('static/css/container_header_logo_box_1.css')}}">
<link rel="stylesheet"
	href="{{asset('static/css/publish.css')}}">
<link rel="stylesheet"
	href="{{asset('static/css/footer_1.css')}}">
<link rel="stylesheet"
	href="{{asset('static/css/alt.css')}}">

<!--  font-awesome图标集  -->
<link rel="stylesheet"
	href="{{asset('static/css/font-awesome.min_1.css')}}">
<!--[if IE 7]>
        <link rel="stylesheet" href="{{asset('static/css/font-awesome-ie7.min_1.css')}}">
        <![endif]-->
	<script type="text/javascript" src="{{asset('static/js/jquery-1.9.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('static/layer/layer.js')}}"></script>

</head>
<body>


<script src="{{asset('static/js/sea.js')}}"></script>
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


			<a rel="nofollow" href="http://www.jianzhimao.com/ctrlcommon/showMessage" class="new" title="消息中心"><i class="icon-envelope-alt"></i></a>

					<a rel="nofollow" href="/ctrlenprise/companyinfo" class="user_name" id="user_name" title="15824827306">15824827306</a>


				<a rel="nofollow" href="/ctrlcity/loginOut">退出 </a>

			

		</div>
	</nav>
	<div id="cooperation_box_alt" class="cooperation_box_alt">
        <div class="cooperation_box_overlay"></div>
        <div class="cooperation_box">
            <div class="title">申请合作<a rel="nofollow" class="close_btn" href="javascript:;" onclick="this.parentNode.parentNode.parentNode.style.display='none'">×</a></div>
            <div class="cont">
                <div class="p_left"><img src="{{asset('static/picture/cooperation.png')}}" alt="申请合作"></div>
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
				<a href="/" class="logo left"><img
					src="{{asset('static/picture/logo.png')}}"
					alt="兼职猫logo"></a>
				<div class="title_wrap left">发布兼职</div>
				
				<a href="javascript:;" class="authenticate right online_btn"><i
					class="icon-trophy"></i> 申请账号认证</a>
				
			</div>
			<hr style="height: 2px; background-color: #F39800" />
		</header>
		<div class="bread-crumb_box w_main g-t10 g-b10">
			<a rel="nofollow" href="/">广州兼职猫</a> <i
				class="icon-angle-right"></i> <span>发布兼职</span>
		</div>

		<div class="w_main content_box">
			<article class="main_wrap clearfix">
				<div style="border-bottom: 1px solid #efefef; overflow: hidden;">

					<div class="m-progressbar">
						<ul class="f-cb">
							<li class="ok">
								<div>
									<i>1</i>
									<p>填写兼职信息</p>
								</div>
							</li>
							<li class="last ok">
								<div>
									<i></i>
									<p>审核并发布</p>
								</div>
							</li>
						</ul>
					</div>

				</div>

				
					<a href="http://www.jianzhimao.com/ctrlwechat/binding" class="wx_bind">
						绑定微信，实时了解招聘进度，<span>去设置</span>
					</a>
				
				<div class="m-fabuzhuangtai">
					<div class="top">
						<img class="img"
							src="{{asset('static/picture/wait.gif')}}">
						<div class="con">
							<h3 class="tit">已发布，兼职信息审核中~</h3>
							<div class="ms">
								<p>(企业发布兼职信息需要经过3个小时的信息审核时间（9:00-21:00），才能发布到平台)</p>
								<p>(你今天还可以发布{{$user->user_over_num}}条普通兼职)</p>
							</div>
							<div class="btn">
								<a class="back" href="//www.jianzhimao.com/ctrlenprise/jobView">返回管理中心</a>&nbsp;
								&nbsp; <a class="rz online_btn" href="javascript:;">申请认证</a>
								<a href="javascript:;" class="download_share_btn">下载分享图</a>
							</div>
						</div>
					</div>
					<div class="bottom">
							

<div class="m-qunliao">
	<img src="{{asset('static/picture/code_qiye_app.jpg')}}" alt="" width="100" height="100"/>
	
	
		<div id="group_chat" class="btn open">开启群聊</div>
	
	
	<p id="m-qunliaots" class="f-f18">给该兼职开启群聊功能</p>
	<p class="f-f16">群信息只能在APP中查看</p>
</div>
<script src="{{asset('static/js/sea.js')}}"></script>
<script>
    seajs.use("publish_qunliao");
</script>

                            
<div class="m-huiyuantequan">
	<h3>使用会员特权，提高招聘效果</h3>
	<ul>
    	<li><a href="/ctrlpuvalueadd/index?t=4"><i class="tsjz"></i>推送兼职</a></li>
    	<li><a href="/ctrlpuvalueadd/index?t=5"><i class="zdjz"></i>置顶兼职</a></li>
    	<li><a href="/ctrlpuvalueadd/index?t=6"><i class="tfad"></i>投放banner</a></li>
    	<li><a href="/ctrlcompaddval/index"><i class="gdtq"></i>更多特权</a></li>
    </ul>
</div>
					</div>
				</div>
			</article>
			<!-- 生成招聘信息分享图 -->
			<div class="download_share_pic" id="download_share_pic">
				<div class="dsp_inner">
					<h3>云和数据客服兼职</h3>
					<h4>80元/天</h4>
					<div class="line">
						<span class="before"></span>
						<span class="after"></span>
					</div>
					<div class="work_info">
						<p><img src="{{asset('static/picture/dsp_icon1.png')}}">工作时间：2018-08-28-2018-08-31</p>
						<p><img src="{{asset('static/picture/dsp_icon2.png')}}">薪资待遇：完工结 80元/天</p>
						<p><img src="{{asset('static/picture/dsp_icon3.png')}}">工作内容：<br />
							根据用户浏览网站时提供咨询服务，成功完成对客户的介绍，并参加公司的培训后，提供提成。详情可来电：17602105267</p>
						<p><img src="{{asset('static/picture/dsp_icon4.png')}}">工作地址：河南郑州高新区电子商务产业园</p>
						<p><img src="{{asset('static/picture/dsp_icon5.png')}}">报名方式：扫码报名</p>
						<p>长按识别二维码立即报名</p>
						<p id="m_url">https://m.jianzhimao.com/zhengzhou/job/akZQc083K3p4bWM9.html</p>
						<div class="dsp_code" id="dsp_code"></div>
					</div>
				</div>
				<div class="dsp_logo">
					<img src="{{asset('static/picture/icon_fenxiang_logo.png')}}" />
					<span>找兼职就上兼职猫，喵了个咪</span>
				</div>
			</div>
			<div id="download_img"></div>
			<!-- 生成招聘信息分享图 end -->
		</div>
	</section>

	


<footer class="footer">
	<div class="w_main channel">
		<a target="_blank" rel="nofollow" href="http://www.jianzhimao.com/ctrlindex/contact.html" style="padding-left: 0;">关于我们</a>|
    	<a target="_blank" rel="nofollow" href="http://www.jianzhimao.com/ctrlindex/join.html">加入我们</a>|
    	<a target="_blank" rel="nofollow" href="http://www.jianzhimao.com/ctrlindex/enterprise.html">企业推广</a>|
    	<a target="_blank" rel="nofollow" href="http://www.jianzhimao.com/ctrlCooperate/help.html">帮助中心</a>| &nbsp; &nbsp; &nbsp; 企业服务热线：4008034199 &nbsp; &nbsp;| &nbsp; &nbsp;业务电话：020-37109777
    	<a class="qq" target="_blank" rel="nofollow" href="tencent://message/?uin=800005602&amp;Site=http://qbar.qq.com/application/&amp;Menu=ye"><img src="{{asset('static/picture/kf_qq.png')}}" /></a>
        <a class="qq" target="_blank" rel="nofollow" href="tencent://message/?uin=3547627935&amp;Site=http://qbar.qq.com/application/&amp;Menu=ye"><img src="{{asset('static/picture/yw_qq.png')}}" /></a>

	</div>
	<p class="w_main"> Copyright©2018 兼职猫 jianzhimao.com 广州九尾信息科技有限公司 版权所有   <a style="color:#727272;" href="http://www.miibeian.gov.cn" target="_blank">粤ICP备13061591号</a> </p>
</footer>
  

    <script type="text/javascript">

    //CNZZ统计
    var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cspan id='cnzz_stat_icon_1000413010'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/q_stat.php%3Fid%3D1000413010' async type='text/javascript'%3E%3C/script%3E"));

    //baidu统计
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript async src='" + _bdhmProtocol + "hm.baidu.com/h.js')}}%3F447f87add4dbd73deca17a45d8536dbd' type='text/javascript'%3E%3C/script%3E"));

    </script>

<script>
//延迟CNZZ统计, 以免影响页面载入

$(document).ready(function(){
    if("{{$info}}"=="添加成功"){
        layer.msg("{{$info}}", {icon: 1});
	}else{
       location.href="{{url('Publish/jz')}}"
	}
});
</script>
<script type='text/javascript'>
		var user_id="13335447";
		var company_name="云和数据";
		var user_name="";
		var company_id="13335447";
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
            vds.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'dn-growing.qbox.me/vds.js')}}';
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
  
<input type="hidden" value="akZQc083K3p4bWM9" id="jid">
</body>
</html>
<script src="{{asset('static/js/sea.js')}}"></script>
<script src="{{asset('static/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('static/js/jquery.qrcode.js')}}"></script>
<script src="{{asset('static/js/html2canvas.min.js')}}"></script>
<script src="{{asset('static/js/canvas2image.js')}}"></script>
<script>
	seajs.use("publish_auditing");

	//下载生成图片
	$(function(){
		var title = "云和数据客服兼职"+"-分享图.png')}}";
		var url = $("#m_url").html();
		$('#dsp_code').qrcode({
			render: "canvas", //也可以替换为table
			width: 100,
			height: 100,
			text: url
		});
		setTimeout(function(){
			_print()
		},300)
		//生成图片
		function _print(){
			//默认生成的 canvas 图片在 retina 设备上显示很模糊，处理成 2 倍图能解决这个问题
			var w = $("#download_share_pic").width();
			var h = $("#download_share_pic").height();//要将 canvas 的宽高设置成容器宽高的 2 倍
			var canvas = document.createElement("canvas");
			canvas.width = w * 2;
			canvas.height = h * 2;
			canvas.style.width = w + "px";
			canvas.style.height = h + "px";
			var context = canvas.getContext("2d");//然后将画布缩放，将图像放大两倍画到画布上
			context.scale(2,2);
			html2canvas( $("#download_share_pic") ,{
				//canvas:canvas,
				onrendered: function(canvas){
					canvas.setAttribute('id','thecanvas');
					$("#download_img").html("");
					$("#download_img").append(canvas)
				}
			});
		}
		$(".download_share_btn").on("click",function(){
			var oCanvas = document.getElementById("thecanvas");

			/*自动保存为png*/
			// 获取图片资源
			var img_data1 = Canvas2Image.saveAsPNG(oCanvas, true).getAttribute('src');
			saveFile(img_data1, title);
		})
		// 保存文件函数
		var saveFile = function(data, filename){
			var save_link = document.createElementNS('http://www.w3.org/1999/xhtml', 'a');
			save_link.href = data;
			save_link.download = filename;

			var event = document.createEvent('MouseEvents');
			event.initMouseEvent('click', true, false, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
			save_link.dispatchEvent(event);
		};
	})
</script>














