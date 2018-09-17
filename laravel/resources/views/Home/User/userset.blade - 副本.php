<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>用户资料编辑-兼职猫网页版</title>
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<!--  使低于IE9版本的浏览器支持html5标签  -->
<!--[if lt IE 9]>
    <script src="{{asset('static/js/html5.js')}}"></script>
    <![endif]-->
<link rel="icon"
	href="http://oss.aliyuncs.com/jianzhimao/web-res/icon/jianzhimao-logo-min.png?version=2.28.23"
	type="image/x-icon" />
<link resl="shortcut icon"
	href="http://oss.aliyuncs.com/jianzhimao/web-res/icon/jianzhimao-logo-min.png?version=2.28.23"
	type="image/x-icon" />
<link rel="stylesheet"
	href="{{asset('static/css/reset.css')}}">
<link rel="stylesheet"
	href="{{asset('static/css/header.css')}}">
<link rel="stylesheet"
	href="{{asset('static/css/container_header_logo_box.css')}}">
<link rel="stylesheet"
	href="{{asset('static/css/company_center.css')}}">
<link rel="stylesheet"
	href="{{asset('static/css/footer.css')}}">
<!--  font-awesome图标集  -->
<link rel="stylesheet"
	href="{{asset('static/css/font-awesome.min.css')}}">

<!--[if IE 7]>

    <link rel="stylesheet" href="{{asset('static/css/font-awesome-ie7.min.css')}}">
    <![endif]-->
</head>
<body>
	
	




<script type="text/javascript"  src="{{asset('static/js/sea.js')}}"></script>
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


			|
			
		    

				
					<a rel="nofollow" href="javascript:;" class="user_name" id="user_name" title="15824827306">{{$user->user_name}}</a>
				
		    
			

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

				<div class="title_wrap left">编辑资料</div>
			</div>
		</header>

		<div class="w_main content_box">
			<article class="main_wrap clearfix">
				<aside class="content_side_bar">
					<div class="content_side_bar_header">
						<hr class="line">
						<span>账号设置</span>
					</div>
					<ul class="channels" id="channels">
						<li class="info_tab  selected "><i class="icon-edit"></i><a>修改资料</a></li>
						<li class="logo_tab" id="picture"><i class="icon-picture"></i><a>修改logo</a></li>
						<li class="password_tab  " id="password"><i class="icon-lock"></i><a>修改密码</a></li>
						<li class="email_frequency_tab" id="email"><i style="font-style: normal;">@</i><a>邮箱推送频率</a></li>
						<li class="email_tab" id="emailBound"><i style="font-style: normal;">@</i><a>更改邮箱绑定</a></li>
						<li class="phone_tab" id="account"><i class="icon-phone"></i><a>更改手机绑定</a></li>
					</ul>
				</aside>
				<div class="content_edit_box" id="content_edit_box">
					<div class="box" id="resume_box" style="display: block;">
						{{--<div class="hd">修改资料</div>--}}
						<div class="cnt">
							<div>
								<h2 class="company_name">云和数据
									<span class="status  s0">
									未认证
									</span>
								</h2>
							</div>
							<div>
								<table class="table">
									<tr>
										<td class="label">公司性质</td>
										<td></td>
										<td class="label">公司规模</td>
										<td></td>
									</tr>
									<tr>
										<td class="label">所属行业</td>
										<td></td>
										<td class="label">公司邮箱</td>
										<td>1905396623@qq.com</td>
									</tr>
									<tr>
										<td class="label">联系人</td>
										<td></td>
										<td class="label">联系电话</td>
										<td></td>
									</tr>
									<tr>
										<td class="label">公司地址</td>
										<td colspan="3">
                                        	<div class="view_address">
                                            	<a href="javascript:;" class="edit_address_btn">[点击编辑]</a>
                                        		<span>河南郑州高新区</span><i class="icon-map-marker"></i>
                                            </div>
                                            <div class="edit_address">
                                            	<a href="javascript:;" class="sent_address_btn">[提交]</a>
                                                <div class="panel">
                                                	<select class="select" id="province"></select>
                                                    <select class="select" id="city"></select>
                                                    <select class="select" id="area"></select>
                                                    <br />
                                                    <input maxlength="100" type="text" class="txt" id="address" placeholder="详细地址" />
                                                </div>
                                            </div>
                                        </td>
									</tr>
								</table>
							</div>
							<div>
								<table class="table">
									<tr>
										<td style="background-color: #f3f3f3; text-align: right; ">
											<span style="float: left;">公司简介</span> <a
											class="btn submit show_when_edit"
											id="introduction_submit_btn">提交</a> <a
											class="introduction_edit_btn orange show_when_save"
											id="introduction_edit_btn">[点击编辑资料]</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="show_when_save">
												<div>
													<pre class="introduction_saved" id="introduction_saved"></pre>
												</div>
											</div>
											<div class="show_when_edit">
												<textarea class="introduction" id="introduction" rows="8"></textarea>
											</div>
										</td>
									</tr>
								</table>
							</div>
							<!-- 工作环境 -->
							<div>
								<table class="table">
									<tr>
										<td style="background-color: #f3f3f3; text-align: right;">
											<span style="float: left;">工作环境</span> <a
												class="btn submit show_when_edit"
												id="environment_submit_btn">提交</a> <a
												class="introduction_edit_btn orange show_when_save"
												id="environment_edit_btn">[点击编辑]</a>
										</td>
									</tr>
									<tr>
										<td>
											<ul class="environment_box clearfix">
												<li class="add">
													<span class="environment_span"></span>
													<input type="hidden" name="environment_imgs" value="" id="environment_imgs" />
													<input type="file" name="picture" id="picture" />
													<div class="upload_loading"></div>
												</li>
											</ul>
										</td>
									</tr>
								</table>
							</div>
							<!-- 公司福利 -->
							<div>
								<table class="table">
									<tr>
										<td style="background-color: #f3f3f3; text-align: right;">
											<span style="float: left;">公司福利</span> <a
												class="btn submit show_when_edit"
												id="welfare_submit_btn">提交</a> <a
												class="introduction_edit_btn orange show_when_save"
												id="welfare_edit_btn">[点击编辑]</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="welfare_list">
												
													<span>五险</span>
												
													<span>公积金</span>
												
													<span>包吃</span>
												
													<span>包住</span>
												
													<span>周末双休</span>
												
													<span>免费培训</span>
												
													<span>全勤奖</span>
												
											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>

				</div>
			</article>
		</div>

	</section>

	<!-- 是否新商业 -->
  	<input type="hidden" id="is_new_business" value="0">
  	
	


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
    document.write(unescape("%3Cscript async src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F447f87add4dbd73deca17a45d8536dbd' type='text/javascript'%3E%3C/script%3E"));

    </script>

<script>
//延迟CNZZ统计, 以免影响页面载入

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
  
	<div class="data_hidden" id="initial_tab_obj">{ "tab": "" }</div>
	<div id="school_info_obj" class="data_hidden">{ "list": [
		"广州番禺职业技术学院", "华南理工大学", "广州大学", "广州中医药大学", "广东药学院", "广州美术学院", "湖南大学",
		"武汉大学" ] }</div>
	<div id="job_types_info_obj" class="data_hidden">{ "list": [
		"模特", "家教", "派单", "销售", "技工", "礼仪", "演出", "文员", "设计", "校内", "翻译",
		"促销", "客服", "服务员", "临时工", "其他" ] }</div>

</body>
</html>
<script type="text/javascript" src="{{asset('static/js/sea.js')}}"></script>
<script type="text/javascript" src="{{asset('static/js/jquery-1.9.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/js/layer.js')}}"></script>
<script type="text/javascript" src="{{asset('static/js/ajaxfileupload.js')}}"></script>
<script>
    $('#channels li').on('click',function(){
        _this=this;
        $('#channels li').each(function(k,v){
            $(v).removeClass('selected');
            if(v==_this){
                $(v).addClass('selected');
                _k=k
                $('#content_edit_box > .box').each(function(k1,v1){
                    $(v1).css({display:"none"});
                    if(_k==k1){
                        $(v1).css({display:"block"})
                    }
                })

            }

        })
    });
//	$(function(){
//		//上传工作环境
//		$(document).on("change","#picture",function(){
//			var count = 0;
//			var f=document.getElementById("picture").value;
//			if(f==""){
//				alert("请上传图片");return false;
//			}else{
//				if(!/\.(gif|jpg|jpeg|png|GIF|JPG|PNG)$/.test(f)){
//					alert("图片类型必须是.gif,jpeg,jpg,png中的一种");
//					return false;
//				}
//				if(this.files[0].size>(5*1024*1024)){
//					alert("图片大小不得超过5m");
//					return false;
//				}
//			}
//			console.log("上传中...");
//			$(".upload_loading").show();
//			$.ajaxFileUpload
//			(
//					{
//						url: '/enprise/uploadEnvironmentPicture', //用于文件上传的服务器端请求地址
//						secureuri: false, //是否需要安全协议，一般设置为false
//						fileElementId: 'picture', //文件上传域的ID
//						dataType: 'json', //返回值类型 一般设置为json
//						data:{},
//						success: function (res, status)  //服务器成功响应处理函数
//						{
//							if (res.status=="0000") {
//								if(count==0){
//									count++;
//									var src = res.data.url;
//									var li = "<li><img src="{{asset('static/picture/1c284766721f4fd2af73092f3063b2ff.gif')}}"><span class='close'></span></li>";
//									$(li).insertBefore(".environment_box .add");
//									var imgs = $("#environment_imgs").val()==""?src:$("#environment_imgs").val()+","+src;
//									$("#environment_imgs").val(imgs);
//									$("#picture").val("");
//									if($(".environment_box li").length>=5){
//										$(".environment_box .add").hide();
//									}
//								}
//							}else{
//								alert(res.message)
//							}
//							$(".upload_loading").hide();
//						},
//						error: function (data, status, e)//服务器响应失败处理函数
//						{
//							if(count==0){
//								count++;
//								alert("上传出错了");
//								$(".upload_loading").hide();
//							}
//						}
//					}
//			)
//		});
//		$(document).on("click",".environment_box .close",function(){
//			$(this).parents("li").remove();
//			var imgs = "";
//			$(".environment_box li").not(".add").each(function(){
//				var src = $(this).find("img").attr("src");
//				imgs = imgs==""?src:imgs+","+src;
//			})
//			$("#environment_imgs").val(imgs);
//			if($(".environment_box li").length<5){
//				$(".environment_box .add").show();
//			}
//		})
//	})
</script>
<script>
	seajs.use("company_center");
	var host="jianzhimao.com";
</script>