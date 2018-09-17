$(document).ready(function() {
	//触发获取数据
	var vm = new Vue({
        el: '#warp',
        data:{
			list_type:1
		},
        created:function(){
            this.init();
        },
		watch:{
		},
		methods:{
            init:function(){
				var _this = this;
				_this.getBanner();
				_this.initList();
            },
			getBanner:function(){//获取banner
				 $.ajax({
					url: '/ctrlcommon/initBanner',
					type: 'POST',
					dataType: 'json'
				 }).done(function (res) {  // 请求成功
						var bannerBoxBtns = $('#banner_box_btns'),
							bannerBoxImgs = $('#banner_box_imgs'),
							bannerTimer = null;
						res= res.banner;
						if(res.length < 1){
							return;
						}
						// 初始化html代码
						bannerBoxImgs.html('');
						bannerBoxBtns.html('');
						for (var i = 0; i < res.length; i++) {
							if (i == res.length - 1) {
								bannerBoxBtns.append('<a class="selected"></a>');  // 注意，由于btn是float:right的，所以最后一个才是对应第一张幻灯片
							} else {
								bannerBoxBtns.append('<a></a>');
							}
							bannerBoxImgs.append('<a href="' + res[i].link + '" target="' + res[i].target + '"><img src="' + res[i].src + '" alt="' + res[i].alt + '"></a>');
						}
			
						var bannerImgs = $('#banner_box_imgs img');
						var bannerBtns = $('#banner_box_btns a');
			
						bannerBoxImgs.css({"width": bannerBoxImgs.width() * bannerImgs.length});
						$('#banner_box_btns').delegate('a', 'click', function () {
							if (bannerTimer) {
								clearInterval(bannerTimer);
								bannerTimer = setInterval(autoClick, 5000);
							}
							bannerBtns.removeClass('selected');
							this.className = 'selected';
							bannerBoxImgs.animate({
								'left': (bannerImgs.length - 1 - $(this).index()) * -800 + 'px'
							}, 'slow');
							return false;
						});
						bannerTimer = setInterval(autoClick, 5000);
			
						function autoClick() {
							bannerBtns.eq(bannerBoxBtns.find('.selected').index() - 1).click();
						}
					})
					.fail(function () {  // 请求失败
						// alert("获取banner失败");
					});
			},
			initList:function(){
				$(document).on("click",".inform_list .title",function(){
					var mid = $(this).attr("mid");
					if($(this).hasClass("unread")){
						$(this).removeClass('unread');
						$.post("/ctrlcommon/clickMessage",{mid:mid},function(res){
							var num = parseInt($(".noread_num").html().replace("(","").replace(")",""))-1;
							if(res.status=="1"){
								if(num>0){
									$(".noread_num").html("("+num+")");
								}else{
									$(".noread_num").html("");
								}
							}else{
								alert(res.msg);
							}
						});
					}
					$(this).toggleClass('orange');
					$(this).next('.detail').slideToggle('fast');
			
					//防止点击时出现的文字选中情况
					if (typeof(this.onselectstart) != "undefined") {
						// IE下禁止元素被选取
						this.onselectstart = new Function("return false");
					} else {
						// firefox下禁止元素被选取的变通办法
						this.onmousedown = new Function("return false");
						this.onmouseup = new Function("return true");
					}
				});
			}
		}
	});

})
