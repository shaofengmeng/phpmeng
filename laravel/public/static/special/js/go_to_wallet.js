//点击钱包
$(document).on("click",".goWallet",function() {
	var pw_el=$("#ispwd2").val()

	if (pw_el!="true") {
		showalertqb();
		return;
	} else {
		window.location.href = "/ctrlcompwallet/wallet?p=1&t=1";
	}
});

// 弹出警示框
function showalertqb(cb) {
	var html = '<div class="m-hint" style="padding:30px;">'
				+ '<h3>请先设置提现密码<br></h3>'
				+ '<p class="ts">首次使用支付功能，需要完成提现密码的设置便于相关功能的使用</p>'
				+ '<div class="m-setpass"> <table><tbody><tr><td align="right"><label for="j-je">提现密码：</label></td>'
				+ '<td style="padding:5px;">  <input style="height:26px; line-height:26px;" id="j-je" type="password" placeholder="输入密码"></td>'
				+ '<td><span style="padding-left: 15px;" >支付密码只能输入6位数字</span></td>'
				+ '</tr> <tr> <td align="right"> <label for="j-idcard">确定提现密码：</label></td>'
				+ '<td style="padding:5px;"> <input style="height:26px; line-height:26px;" id="j-idcard" type="password" placeholder="再次输入密码"></td>'
				+ '<td><span style="padding-left: 15px;" class="red"></span></td>'
				+ '</tr></tbody></table> </div>'
				+ '<p class="" style="margin:20px 0;"><a style="margin:20px 0 0 0;" class="btn u-bg_78b31a" id="submit_btn" href="javascript:">确定</a> </p></div>'
	
	layer.open({
	  type: 1, 
	  area:["540px","auto"],
	  content: html
	});
	$("#submit_btn").click(function() {
		var pwd=$("#j-je").val();
		var cfmpwd=$("#j-idcard").val();
		if(!/\S/.test(pwd)){  //密码
			layer.msg('请输入密码');
			$("#j-je").focus();
			return;
			
		}else{
			if(!/^\d{6}$/.test(pwd)){
				layer.msg('支付密码只能是6位数字!');
				$("#j-je").focus();
				return;
			}
		}

		if(!/\S/.test(cfmpwd)){  //确认密码
			layer.msg('请输入确认密码');
			$("#j-idcard").focus();
			return;
		}else{
			if(pwd != cfmpwd){
				layer.msg('密码与确认密码不一致');
				$("#j-idcard").focus();
				return;
			}
		}
		var datas = {
				payment_pwd: pwd,
				cmf_payment_pwd: cfmpwd
			};
		$.ajax({
			url: '/ctrlcompwallet/addPayPassword',
			type: 'GET',
			dataType: 'json',
			data: datas
		})
		.done(function(res) {
			if(res.result.status==100){
				if(cb){
					cb();
				}else{
					window.location.href = "/ctrlcompwallet/wallet?p=1&t=1";
				}
			}else{
				layer.msg(res.result.message);
			}
		
		})
		.fail(function() {
			layer.msg("网络错误");
		});
	});

}
 