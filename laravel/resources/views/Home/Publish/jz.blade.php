<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <title>发布兼职-兼职猫网页版</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--  使低于IE9版本的浏览器支持html5标签  -->
    <!--[if lt IE 9]>
    <script src="{{asset('static/js/html5.js')}}"></script>
    <![endif]-->
    <link rel="icon"
          href="http://oss.aliyuncs.com/jianzhimao/web-res/icon/jianzhimao-logo-min.png')}}?version=2.28.23"
          type="image/x-icon" />
    <link resl="shortcut icon"
          href="http://oss.aliyuncs.com/jianzhimao/web-res/icon/jianzhimao-logo-min.png')}}?version=2.28.23"
          type="image/x-icon" />
    <link rel="stylesheet"
          href="{{asset('static/css/reset.css')}}">
    <link rel="stylesheet"
          href="{{asset('static/css/header.css')}}">
    <link rel="stylesheet"
          href="{{asset('static/css/container_header_logo_box.css')}}">
    <link rel="stylesheet"
          href="{{asset('static/css/publish.css')}}">
    <link rel="stylesheet"
          href="{{asset('static/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/alt.css')}}">

    <!--  font-awesome图标集  -->
    <link rel="stylesheet"
          href="{{asset('static/css/font-awesome.min.css')}}">
    <!--[if IE 7]>
    <link rel="stylesheet" href="{{asset('static/css/font-awesome-ie7.min.css')}}">
    <![endif]-->
    <link rel="stylesheet"
          href="{{asset('static/css/kalendae.css')}}">
    <script type="text/javascript" src="{{asset('static/js/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('static/cxSelect/jquery.cxselect.min.js')}}"></script>
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


            <a rel="nofollow" href="#" class="user_name" id="user_name" title="15824827306">{{$user->user_name}}</a>




            <a rel="nofollow" href="{{url('Publish/qx',['id'=>$user->user_id])}}">退出 </a>



        </div>
    </nav>
    <div id="cooperation_box_alt" class="cooperation_box_alt">
        <div class="cooperation_box_overlay"></div>
        <div class="cooperation_box">
            <div class="title">申请合作<a rel="nofollow" class="close_btn" href="javascript:;" onclick="this.parentNode.parentNode.parentNode.style.display='none'">×</a></div>
            <div class="cont">
                <div class="p_left"><img src="{{asset('static/picture/cooperation.png')}}')}}" alt="申请合作"></div>
                <div class="p_right">
                    <a rel="nofollow" href="http://www.jianzhimao.com/ctrlCooperate/qydl.html" target="_blank" class="btn company">申请区域代理</a>
                    <a rel="nofollow" href="http://www.jianzhimao.com/ctrlCooperate/wzhz.html" target="_blank" class="btn websize">申请网站合作</a>
                    <a rel="nofollow" href="http://www.jianzhimao.com/ctrlCooperate/qghz.html" target="_blank" class="btn school">申请勤工合作</a>
                </div>
            </div>
        </div>
    </div>
</header>
<input type="hidden" value='0' id='jobtype'>
<input type="hidden" value='' id='scheme_id'>
<input type="hidden" value='' id='strandradType'>
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
        <hr style="height: 2px; background-color: #F39800"/>
    </header>
    <div class="bread-crumb_box w_main g-t10 g-b10">
        <a rel="nofollow" href="/">广州兼职猫</a> <i
                class="icon-angle-right"></i> <span>发布兼职</span>
    </div>

    <div class="w_main content_box">
        <article class="main_wrap clearfix">
            <div class="public_box">
                <div class="notic">注：企业发布兼职信息需要经过<a  class="blue">3个小时的信息审核时间(9:00-21:00)</a>，才能发布到平台。<i class="icon-remove notic_close_btn" id="notic_close_btn"></i></div>


                <!-- <div class="notic">注：已认证的用户，优先处理兼职信息，更快速地通过。<i class="icon-remove notic_close_btn" id="notic_close_btn"></i>
            </div> -->
                <div class="m-progressbar">
                    <ul class="f-cb">
                        <li class="ok">
                            <div>
                                <i>1</i>
                                <p>填写兼职信息</p>
                            </div>

                        </li>
                        <!-- 发布普通兼职 end  -->
                        <li class="last">
                            <div>
                                <i></i>
                                <p>审核并发布</p>
                            </div>

                        </li>
                    </ul>
                </div>
                <form id="frm" action="{{url('Home/Publish/add')}}" method="post">
                    {{csrf_field()}}
                    <div class="box">
                        <div class="head">填写详情</div>
                        <div class="cont">
                            <div class="row">
									<span class="txt_left"><span class="red">&nbsp; *
									</span>兼职类型:</span>

                                <div>
                                    <select class="select type" id="type" name="categorey_id">
                                        <option disabled selected="selected">请选择类型</option>
                                        @foreach($category as $v)
                                            <option value="{{$v->category_id}}}">{{$v->category_name}}</option>
                                        @endforeach

                                    </select>
                                    <span style="color:red">{{$errors->first('categorey_id')}}</span>
                                </div>
                            </div>
                            <div class="row">
									<span class="txt_left"><span class="red">&nbsp; *
									</span>兼职标题:</span>

                                <div>
                                    <label class="ipt_outer"><input class="title"
                                                                    id="title" name="title" value="" maxlength="20" placeholder="请输入兼职标题"></label>

                                    <span style="color:red">{{$errors->first('title')}}</span>
                                </div>
                            </div>

                            <div class="row">
									<span class="txt_left"><span class="red">&nbsp; *
									</span>招聘人数:</span>

                                <div>
                                    <label class="ipt_outer"><input maxlength="3" id="resume_num"
                                                                    placeholder="请输入人数" name="per" value=""></label>

                                    <span style="color:red">{{$errors->first('per')}}</span>
                                </div>
                            </div>

                            <!-- j5.0.0 改为纯工资结算 默认显示为0 -->
                            <div class="row" >
									<span class="txt_left"><span class="red">&nbsp; *
									</span>结算方式:</span>
                                <div>
                                    <select id="clear_type" name="pay">
                                        <option value="0" selected>纯工资结算</option>
                                        <option value="1">纯提成结算</option>
                                        <option value="2">工资+提成结算</option>
                                    </select>
                                </div>
                            </div>
                            <!-- 结算周期 -->
                            <div class="row">
									<span class="txt_left"><span class="red">&nbsp; *
									</span>结算周期:</span>
                                <div>
                                    <select class="select" id="clearing_cycle" name="cycle">
                                        <option value="1">完工结</option>
                                        <option value="2">日结</option>
                                        <option value="3">周结</option>
                                        <option value="4">月结</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row" id="salary_row">
									<span class="txt_left"><span class="red">&nbsp; *
									</span>基本工资:</span>
                                <div>
                                    <label class="ipt_outer"><input name="monney" value="" id="salary"
                                                                    style="width: 80px;" placeholder="请输入数字"></label> <select
                                            id="unit" name="monney_style" class="select" style="width: 114px">
                                        <option value="2">元/天</option>
                                        <option value="1">元/小时</option>
                                        <option value="3">元/月</option>
                                        <option value="4">元/次</option>
                                        <option value="5">元/单</option>
                                    </select>
                                    <span style="color:red">{{$errors->first('monney')}}</span>

                                </div>
                            </div>

                            <div class="row">
									<span class="txt_left"><span class="red">&nbsp; *
									</span>工作种类:</span>
                                <div>
                                    <select id="job_category"  class="select" name="job_category">
                                        <option value="2"  selected="selected">短招</option>
                                        <option value="1">长招</option>
                                        <option value="3">实习</option>
                                    </select>
                                    <span style="color:red">{{$errors->first('job_category')}}</span>
                                </div>
                            </div>
                            <div class="row">
                                <span class="txt_left"> &nbsp; &nbsp; &nbsp;性别要求:</span>

                                <div id='standard'>
                                    <select class="select type" id="sex" name="sex">
                                        <option selected="selected" value="3">男女不限</option>
                                        <option value="1">男</option>
                                        <option value="2">女</option>
                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <span class="txt_left"> &nbsp; &nbsp; &nbsp;工作福利:</span>

                                <div id='welfare'>

                                    <label class="checkbox" style="margin-right: 20px;"><input type="checkbox" name="welfare[]" value="0" /> 包吃</label>

                                    <label class="checkbox" style="margin-right: 20px;"><input type="checkbox" name="welfare[]" value="1" /> 包住</label>

                                    <label class="checkbox" style="margin-right: 20px;"><input type="checkbox" name="welfare[]" value="2" /> 交通补贴</label>

                                    <label class="checkbox" style="margin-right: 20px;"><input type="checkbox" name="welfare[]" value="3" /> 有提成</label>

                                    <label class="checkbox" style="margin-right: 20px;"><input type="checkbox" name="welfare[]" value="4" /> 免费培训</label>

                                    <span class="error_tips">● 请选择工作福利</span>
                                    <span class="right_tips">输入正确</span>
                                </div>
                            </div>

                            <div class="row">
									<span class="txt_left"><span class="red">&nbsp; *
									</span>兼职描述:</span>

                                <div>
										<textarea class="textarea" id="descp" name="cat_detail" rows="6" maxlength="2000"
                                                  placeholder="请输入相关兼职信息，兼职具体地址，兼职具体时间，工资待遇，工作要求等等..."></textarea>

                                    <span style="color:red">{{$errors->first('cat_detail')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="head">工作对接</div>
                        <div class="cont">

                            <div class="row">
									<span class="txt_left"><span class="red">&nbsp; *
									</span>简历邮箱:</span>

                                <div>
                                    <label class="ipt_outer"><input id="email" name="email" maxlength="50"
                                                                    placeholder="请输入联系人的邮箱" value="{{old('email')}}"></label>
                                    <span style="color:red">{{$errors->first('email')}}</span>

                                </div>
                            </div>
                            <div class="row">
									<span class="txt_left"><span class="red">&nbsp; *
									</span>联系人:</span>

                                <div>
                                    <label class="ipt_outer"><input id="host" name="name" maxlength="10"
                                                                    placeholder="请输入联系人姓名" value="{{old('name')}}"></label>

                                    <span style="color:red">{{$errors->first('name')}}</span>

                                </div>
                            </div>
                            <div class="row g-b10">
									<span class="txt_left"><span class="red">&nbsp; *
									</span>咨询电话:</span>

                                <div>
                                    <label class="ipt_outer"><input id="tel"
                                                                    placeholder="请输入接受报名的电话号码"  name="tel" value="{{old('tel')}}"></label>

                                    <span style="color:red">{{$errors->first('tel')}}</span>

                                </div>
                            </div>
                            <div class="g-b10">
									<span class="red">&nbsp; * 兼职猫报名: 应聘者直接发送简历至您的“<span
                                                class="blue">兼职猫企业账号->我的发布</span>”，并同步发送邮件通知
									</span> <i class="question">&nbsp;</i>
                            </div>
                            <!-- 20150820 修改报名方式勾选-->
                            <div class="row">
                                <div>
                                    <label class="checkbox" style="margin-right: 20px;"><input
                                                type="checkbox" id="text_provide" checked="checked" name="contact[]" value="1"  onclick="return false;">
                                        默认使用兼职猫报名</label>
                                    <!-- 快结兼职只提供  兼职猫app报名，不输出下边的两个，  -->
                                    <label class="checkbox" style="margin-right: 20px;"><input
                                                type="checkbox" id="sms_provide" name="contact[]" value="2"> 提供短信报名 <span
                                                class="tis">勾选后可能会其他网站爬取信息和电话骚扰</span> </label> <label
                                            class="checkbox"><input type="checkbox"
                                                                    id="tel_provide" name="contact[]" value="3"> 提供电话报名 <span class="tis">勾选后可能会其他网站爬取信息和电话骚扰</span>
                                    </label> <i class="question">&nbsp;</i>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="box">
                        <div class="head">工作地点</div>
                        <div class="cont">
                            <div class="row">
                                <span class="txt_left"><span class="red">&nbsp; * </span>工作地点:</span>

                                <div id="city_china">
                            <span>省份：<select class="province" name="province" data-value="" data-first-title="选择省" disabled="disabled"></select></span>
                            <span>城市：<select class="city" name="city" data-value="" data-first-title="选择市" disabled="disabled"></select></span>
                            <span>地区：<select class="area" name="area" data-value="" data-first-title="选择地区" disabled="disabled"></select></span>
                                    <small class="orange">如没有您的城市，请联系客服(QQ:800005602)</small>
                                </div>
                            </div>
                            <div class="row">
                                <div id="r-result">
                                    <label class="ipt_outer"> <span id="slt"></span> <input
                                                type="text" id="suggestId" maxlength="80" size="20" name="adress" value=""></label> &nbsp;
                                </div>
                            </div>
                            {{--<div class="row">--}}
                            {{--<span class="txt_left">&nbsp; &nbsp; 地图标记:</span>--}}

                            {{--<div class="map_box" id="map_box"></div>--}}
                            {{--</div>--}}
                            <div class="row">
                                <div>
                                    <label class="checkbox"><input type="checkbox"
                                                                   id="agreementId" checked="checked"> 我已阅读并同意<a

                                                href="#" id="xieyi_btn"
                                                class="blue" style="text-decoration: underline;">兼职猫发布兼职协议</a>。</label>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    {{--<div class="submit_btn disabled" id="submit_btn_disabled">点击发布</div>--}}
                                    <input type="hidden" name="user_over_num" value="{{$user->user_over_num}}" />
                                    <input type="submit" name="dosubmit" value="点击发布" class="submit_btn" id="submit_btn"/>
                                </div>
                                <p>&nbsp;</p>


                                <p style="color: #ff0000">注：当前兼职招聘方式为单账号自行管理</p>



                                <p>&nbsp;</p>
                                <p>剩余发布次数：<font color="red">{{$user->user_over_num}}</font>次, <a href="http://www.jianzhimao.com/commodity/index">购买更多发布次数></a></p>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="history_box">
                    <p class="h_hd_wrap" id="h_ttl">
                        <span class="h_hd">历史记录模板</span><a class="arr_d">&nbsp;</a>
                    </p>
                    <ul class="h_list" id="h_list"></ul>
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
        <a class="qq" target="_blank" rel="nofollow" href="tencent://message/?uin=800005602&amp;Site=http://qbar.qq.com/application/&amp;Menu=ye"><img src="{{asset('static/picture/kf_qq.png')}}')}}" /></a>
        <a class="qq" target="_blank" rel="nofollow" href="tencent://message/?uin=3547627935&amp;Site=http://qbar.qq.com/application/&amp;Menu=ye"><img src="{{asset('static/picture/yw_qq.png')}}')}}" /></a>

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





<div style="display: none;" class="answer">
    <div
            style="position: fixed; width: 100%; height: 100%; top: 0; left: 0; background-color: #000; opacity: 0.5"></div>
    <div
            style="position: fixed; top: 25%; margin-left: -216px; left: 50%; width: 420px; background-color: rgba(0, 0, 0, 0.3); padding: 6px;">
        <div style="background: #f39800; color: #FFFFFF; padding: 5px 10px;">
            兼职猫报名说明<a href="javascript:;"
                      onclick="this.parentNode.parentNode.parentNode.style.display='none'"
                      style="float: right; color: #fff;">×</a>
        </div>
        <div
                style="background-color: #fff; padding: 15px 10px 30px 10px; color: #4c4c4c; font-size: 13px;">
            <div style="padding: 5px 0 10px 0;">
                兼职猫帮应聘者将其简历以及报名相关资料发送给企业您，然后可直接到“网页-我的发布”里查看或者“手机企业端-兼职管理”里查看。还可以将选定的应聘者资料导出成Exl表格，认证企业特权更多哟:
            </div>
            <div
                    style="padding: 10px 0 10px 0; margin-bottom: 5px; text-align: center;">
                <img
                        src="{{asset('static/picture/user_apply_example.png')}}"
                        style="width: 340px;">
            </div>
            <div style="text-align: center; padding: 3px 0;">
                <a href="javascript:;"
                   style="background-color: #78b31b; padding: 3px 30px; border-radius: 3px; color: #fff;"
                   onclick="this.parentNode.parentNode.parentNode.parentNode.style.display='none'">我已查看了解</a>
            </div>
        </div>
    </div>
</div>

<div style="display: none;" class="answer">
    <div
            style="position: fixed; width: 100%; height: 100%; top: 0; left: 0; background-color: #000; opacity: 0.5;"></div>
    <div
            style="position: fixed; top: 25%; margin-left: -216px; left: 50%; width: 420px; background-color: rgba(0, 0, 0, 0.3); padding: 6px;">
        <div style="background: #f39800; color: #FFFFFF; padding: 5px 10px;">
            打钩说明<a href="javascript:;"
                   onclick="this.parentNode.parentNode.parentNode.style.display='none'"
                   style="float: right; color: #fff;">×</a>
        </div>
        <div
                style="background-color: #fff; padding: 15px 10px 30px 10px; color: #4c4c4c; font-size: 13px;">
            <div style="padding: 5px 0 10px 0; text-indent: 0.5em;">打勾，提供电话咨询，在手机端的展示是这样的，点击可拨打咨询:</div>
            <div
                    style="border: 5px solid #acacac; border-radius: 5px; padding: 20px; height: 60px;">
                <div style="float: left; line-height: 18px;">
                    <div>
                        联系人: <span style="color: #666;">罗生</span>
                    </div>
                    <div>
                        联系电话: <span style="color: #666;">13527759***</span>
                    </div>
                    <div style="color: #ee6952;">(凡收取费用的兼职，需谨慎！)</div>
                </div>
                <div
                        style="border-left: 1px solid #acacac; float: right; height: 60px; width: 60px; color: #ee6952; text-align: center; padding-left: 20px;">
                    <div>
                        <i class="icon-phone" style="font-size: 30px;"></i>
                    </div>
                    <div style="margin-top: 5px;">电话咨询</div>
                </div>
            </div>
            <div style="padding: 10px 0 10px 0; text-indent: 0.5em;">不打勾，不提供电话咨询，在手机端的展示是这样的:</div>
            <div
                    style="border: 5px solid #acacac; border-radius: 5px; padding: 20px; height: 60px;">
                <div style="float: left; line-height: 18px;">
                    <div>
                        联系人: <span style="color: #666;">罗生</span>
                    </div>
                    <div>
                        联系电话: <span style="color: #666;">13527759***</span>
                    </div>
                    <div style="color: #ee6952;">(凡收取费用的兼职，需谨慎！)</div>
                </div>
                <div
                        style="border-left: 1px solid #acacac; float: right; height: 60px; width: 60px; color: #ee6952; text-align: center; padding-left: 20px;">
                    <div>
                        <i class="icon-envelope-alt" style="font-size: 30px;"></i>
                    </div>
                    <div style="margin-top: 5px;">申请报名</div>
                </div>
            </div>
            <div
                    style="padding: 10px 0 10px 0; text-indent: 0.5em; margin-bottom: 5px;">注:
                打勾的兼职信息会同步分享到兼职联盟平台，获取更多的应聘者</div>
            <div style="text-align: center; padding: 3px 0;">
                <a href="javascript:;"
                   style="background-color: #78b31b; padding: 3px 30px; border-radius: 3px; color: #fff;"
                   onclick="this.parentNode.parentNode.parentNode.parentNode.style.display='none'">我已查看了解</a>
            </div>
        </div>
    </div>
</div>

<div id="update_obj" class="data_hidden">
    {"isup":"1"}
</div>

<div id="special_code_obj" class="data_hidden">
    {"special_code":""}
</div>
<div id="publish_type_obj" class="data_hidden">
    {"publish_type":"1"}
</div>
<div class="pwd_hidden" id="ispwd" style="display: none">
    { 'ispwd': 'true' }

</div>
<input type="hidden" value="1535340933174" id="token" />
<input type="hidden" value="" id="jid" />
</body>
</html>


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
{{--省市区--}}
<script>
$('#city_china').cxSelect({
url : '{{asset('static/cxSelect/cityData.min.json')}}',  //联动json数据
selects: ['province', 'city', 'area'],        //select框对应class
 nodata: 'none'                               //无子类别时不显示下拉框
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

<script src="{{asset('static/js/sea.js')}}"></script>
<script>
    seajs.use("publish.js?v=20180522");
</script>