/*
 * 请求ajax
 * url     : ajax请求地址
 * data    ：请求的数据
 * callback：回调函数
 * type    ：ajax传输方式,默认get
 * async   ：是否异步，默认true
 */
function HttpAjax(url,data,callback,failcallback,type,async){
	var _type = type || "POST";
	var _async = async || true;
	$.ajax({
		type : _type,
		url:url,
		dataType : 'json',
		async : _async,
		data : data,
		timeout : 10000,
		success : function(rs) {
		  if (rs.status == '0000') {
			  console.log(rs);
			  callback && callback(rs);
		  } else {
			  if(failcallback){
				  failcallback(rs)
			  }else{
			  	  alert(rs.message);
                  if(rs.status == '0009'){
                      window.location = rs.data.redirectUrl;
                      return;
                  }
                  if(rs.status == '-403'){//无权访问
                      window.location = "/groupCompanyPermission/invalidAccess";
                      return;
                  }
			  }
		  }
		},
		error : function(xhr, type) {
			//alert("网络错误");
		}
	})
}

// 正则校验：手机
function isPhone(text) {
    return /^((16[0-9])|(19[0-9])|(17[0-9])|(14[0-9])|(13[0-9])|(15[^4,\D])|(18[0-9]))\d{8}$/.test(text);
}
/**
 * 正则校验：身份证 
 */
function isIDCard(_idcard){
  return /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/.test(_idcard);
}
// 正则校验：邮箱
function isEmail(text) {
    return /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(text);
}

/*
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function (factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD
    define(['jquery'], factory);
  } else if (typeof exports === 'object') {
    // CommonJS
    factory(require('jquery'));
  } else {
    // Browser globals
    factory(jQuery);
  }
}(function ($) {

  var pluses = /\+/g;

  function encode(s) {
    return config.raw ? s : encodeURIComponent(s);
  }

  function decode(s) {
    return config.raw ? s : decodeURIComponent(s);
  }

  function stringifyCookieValue(value) {
    return encode(config.json ? JSON.stringify(value) : String(value));
  }

  function parseCookieValue(s) {
    if (s.indexOf('"') === 0) {
      // This is a quoted cookie as according to RFC2068, unescape...
      s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
    }

    try {
      // Replace server-side written pluses with spaces.
      // If we can't decode the cookie, ignore it, it's unusable.
      // If we can't parse the cookie, ignore it, it's unusable.
      s = decodeURIComponent(s.replace(pluses, ' '));
      return config.json ? JSON.parse(s) : s;
    } catch(e) {}
  }

  function read(s, converter) {
    var value = config.raw ? s : parseCookieValue(s);
    return $.isFunction(converter) ? converter(value) : value;
  }

  var config = $.cookie = function (key, value, options) {

    // Write

    if (value !== undefined && !$.isFunction(value)) {
      options = $.extend({}, config.defaults, options);

      if (typeof options.expires === 'number') {
        var days = options.expires, t = options.expires = new Date();
        t.setTime(+t + days * 864e+5);
      }

      return (document.cookie = [
        encode(key), '=', stringifyCookieValue(value),
        options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
        options.path    ? '; path=' + options.path : '',
        options.domain  ? '; domain=' + options.domain : '',
        options.secure  ? '; secure' : ''
      ].join(''));
    }

    // Read

    var result = key ? undefined : {};

    // To prevent the for loop in the first place assign an empty array
    // in case there are no cookies at all. Also prevents odd result when
    // calling $.cookie().
    var cookies = document.cookie ? document.cookie.split('; ') : [];

    for (var i = 0, l = cookies.length; i < l; i++) {
      var parts = cookies[i].split('=');
      var name = decode(parts.shift());
      var cookie = parts.join('=');

      if (key && key === name) {
        // If second argument (value) is a function it's a converter...
        result = read(cookie, value);
        break;
      }

      // Prevent storing a cookie that we couldn't decode.
      if (!key && (cookie = read(cookie)) !== undefined) {
        result[name] = cookie;
      }
    }

    return result;
  };

  config.defaults = {};

  $.removeCookie = function (key, options) {
    if ($.cookie(key) === undefined) {
      return false;
    }

    // Must not alter options, thus extending a fresh object...
    $.cookie(key, '', $.extend({}, options, { expires: -1 }));
    return !$.cookie(key);
  };

}));

/**
 * 设置cookie 
 * 
 * @param _name    
 * @param _value
 * @param _expires  有效期，单位天
 */
function setCookie(_name,_value,_expires){
  if(_expires){
    $.cookie(_name, _value, { path: '/',expires : _expires });  
  }else{
    $.cookie(_name, _value, { path: '/'});
  }
}

/**
 * 获取cookie的值
 * @param _name
 * @returns
 */
function getCookie(_name){
  return $.cookie(_name);
}

/**
 * 删除cookie
 * @param _name
 */
function clearCookie(_name){
  $.removeCookie(_name,{ path: '/' });
}

// 检查cookie
function checkCookie(c_name){
    var c_name=getCookie(c_name);
    if(c_name!=null && c_name!=""){
        return true;
    }else{
        return false;
    }
}

//审批批注-上传单个图片
function spUploadFile(obj){//上传图片
    var f=document.getElementById("file").value;
    var _class = "";
    var _title = "";
    if(f==""){
        layer.msg("请上传文件");return false;
    }else{
        if(/\.(gif|jpg|jpeg|png|GIF|JPG|PNG)$/.test(f)){
            _class = "img";
        }else if(/\.(pdf)$/.test(f)){
            _class = "pdf";
        }else if(/\.(doc|docx)$/.test(f)){
            _class = "word";
        }else if(/\.(xls|xlsx)$/.test(f)){
            _class = "excel";
        }else{
            layer.msg("文件格式不正确");return false;
        }
        if($(obj)[0].files[0].size>(20*1024*1024)){
            layer.msg("图片大小不得超过20m");
            return false;
        }
        _title = $(obj)[0].files[0].name;
    }
    var _load = layer.load(2)
    $.ajaxFileUpload
    (
        {
            url: '/compAgencySalaryAudit/uploadFile', //用于文件上传的服务器端请求地址
            secureuri: false, //是否需要安全协议，一般设置为false
            fileElementId: 'file', //文件上传域的ID
            dataType: 'json', //返回值类型 一般设置为json
            data:{job_id:0},
            success: function (res, status)  //服务器成功响应处理函数
            {
                if (res.status=="0000") {
                    var _html = ""
                    if(_class=="img"){
                        _html = "<div class='"+_class+"' data-url='"+res.data.url+"'><a href='javascript:;' class='uploadClose'></a> <span><img src='"+res.data.url+"' /></span><p>"+_title+"</p></div>";
                    }else{
                        _html = "<div class='"+_class+"' data-url='"+res.data.url+"'><a href='javascript:;' class='uploadClose'></a> <a href='"+res.data.url+"'><span></span></a><p>"+_title+"</p></div>";
                    }
                    $(_html).insertBefore(".uploadbtn");
                    if($(".uploadfile").find("div").length>=10){
                        $(".uploadbtn").hide();
                    }else{
                        $(".uploadbtn").show();
                    }
                }else{
                    layer.msg(res.message);
                }
                layer.close(_load);
            },
            error: function (data, status, e)//服务器响应失败处理函数
            {
                layer.msg("上传出错了");
                layer.close(_load);
            }
        }
    )
}
function initUploadEvent(){//初始化上传事件
    $(document).on("change","#file",function(){
        spUploadFile($(this))
    })
    $(document).on("click",".uploadClose",function(){
        $(this).parent("div").remove();
        if($(".uploadfile").find("div").length<10){
            $(".uploadbtn").show();
        }
    })
}
