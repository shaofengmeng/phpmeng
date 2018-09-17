var apply_authenticate_vm = new Vue({
	el:'#page_apply_authenticate',
	data:{
		page_type:$("#page_type").val(),
		is_login:($("#is_login").val()=='true')? true:false,
		vip_permissions:null,
		authenticate_info:null,
		compInfo:{},
		vip_lists:null,
		after_load:false,
		is_open_promotion:false,
		is_agreement:false,
		privilege:[//特权信息
			{name:"免费发布普通兼职数"},
			{name:"免费发布快结兼职数"},
			{name:"免费刷新数"},
			{name:"免费推送数"},
			{name:"认证标签"},
			{name:"兼职信息优先审核"},
			{name:"选择认证"}
		],
		authenType:1,//1-企业机构认证、2-个人机构认证
	},
	created:function () {
		if(page_type=='vip_page'){
			this.getVipPageData();
		}else{
			this.getRZPageData();
		}
		//this.initPromotionMask();
	},
	methods:{
		getVipPageData:function(){
			var _this = this;
			//获取vip的数据
			/*var url = '/compaddval/vipPermissionList';
			$.ajax({
				url:url,
				data:{},
				type:"GET",
				dataType:"json",
				success:function (res) {
					if(res.code=="0000" && res.data){
						console.log('获取页面数据成功');
						console.log(res);
						_this.setVipData(res.data);
					}
				},
				fail:function(){

				},
				complete:function () {

				}
			});*/

			$.ajax({
				url:"/ajax/compaddval/vipPackageList",
				data:{},
				type:"GET",
				dataType:"json",
				success:function (res) {
					if(res.status=="0000" && res.data){
						console.log('获取页面数据成功');
						_this.vip_permissions = res.data.vipPackageList;
						_this.$nextTick(function () {
							_this.after_load = true;
						})
					}
				},
				fail:function(){

				},
				complete:function () {

				}
			});

		},
		setVipData:function(vdata){
			if(!vdata) return;
			var _this = this;
			var _vips=vdata;
			vip1:for(var i=0;i<_vips.length;i++){
				var perm = _vips[i].permissionAndNumList;
				_vips[i].permissionAndNumList = [];
				vip2:for(var j=0;j<perm.length;j++){	//列表
					var key_list = perm[j].functionNumberMap;
					if(!(key_list['number'] &&　parseInt(key_list['number'])>0)) {
						continue vip2;
					}
					_vips[i].permissionAndNumList.push(perm[j]);
				}
			}
			this.vip_permissions = _vips;
			_this.$nextTick(function () {
				_this.after_load = true;
			})
		},
		getRZPageData:function(){
			var _this = this;
			//获取vip的数据
			var url = '/ajax/compaddval/authenticateInfo';
			$.ajax({
				url:url,
				data:{},
				type:"GET",
				dataType:"json",
				success:function (res) {
					if(res.code=="0000" && res.data){
						console.log('获取认证数据成功');
						console.log(res);
						_this.setRZData(res.data);
					}
				},
				fail:function(){

				},
				complete:function () {

				}
			});

		},
		setRZData:function(vdata){
			if(!vdata) return;
			var _this = this;
			var _rzs = vdata.authenticateInfo;
			this.authenticate_info = _rzs;
			this.compInfo = vdata.compInfo;
			var privilege = _this.privilege;
			//拼装特权信息
			for(var b=0;b<_this.authenticate_info.length;b++){
				if(_this.authenticate_info[b].meal_type=="c1"||_this.authenticate_info[b].meal_type=="c2"||_this.authenticate_info[b].meal_type=="c6"){
					var company = "";
					if(_this.authenticate_info[b].meal_type=="c1"){
						company="company_a"
					}else if(_this.authenticate_info[b].meal_type=="c2"){
						company="company_b"
					}else if(_this.authenticate_info[b].meal_type=="c6"){
						company="company_c"
					}
					var list = _this.authenticate_info[b].permissionList;
					for(var c=0;c<list.length;c++){
						if(list[c].kind==1){
							if(list[c].number&&list[c].number>0){
								privilege[0][company] = list[c].number+"条/"+list[c].meal_unit;
							}else{
								privilege[0][company] = false;
							}
						}
						if(list[c].kind==2){
							if(list[c].number&&list[c].number>0){
								privilege[1][company] = list[c].number+"条/"+list[c].meal_unit;
							}else{
								privilege[1][company] = false;
							}
						}
						if(list[c].kind==3){
							if(list[c].number&&list[c].number>0){
								privilege[2][company] = list[c].number+"次/"+list[c].meal_unit;
							}else{
								privilege[2][company] = false;
							}
						}
						if(list[c].kind==4){
							if(list[c].number&&list[c].number>0){
								privilege[3][company] = list[c].number+"次/"+list[c].meal_unit;
							}else{
								privilege[3][company] = false;
							}
						}
					}

				}
			}
			console.log(this.privilege)
			this.privilege = Object.assign({}, this.privilege, privilege)
			console.log(this.privilege)

			_this.$nextTick(function () {
				_this.after_load = true;
			});
		},
		checkVipLogin:function (vip_id) {	//未登录，点击购买VIP
			$("#apply_login").attr("vip_id",vip_id);
			$(".login_mask").show();
		},
		initPromotionMask:function () {
			if(!sessionStorage.getItem("is_vip_promotion")){
				this.is_open_promotion = true;
			}
		},
		closePromotionMask:function () {
			this.is_open_promotion = false;
			sessionStorage.setItem("is_vip_promotion",1);
		},
		apply:function(type){
			this.is_agreement = true;
			this.authenType = type
		}
	}
});

	checkIndeedAuthenOpenAjax('click','#indeed_btn','/ctrlenterpriseAuthen/isFieldArea');
	//线上认证校验
	$(document).on("click",".online_btn",function(){
			var btn_type=$(this).attr("btn_type");
			$.ajax({
				url : '/ctrlenterpriseAuthen/checkCompAuthStatus',
				dataType : 'json',
				success:function(res) {
					if (res.result.status == 100||(res.result.status == 101&&res.result.isPersonTeamAuth==1)) {
						if($("#retry").val()!=""){
							window.location.href = "/ctrlenterpriseAuthen/onlineAuthFirstRequest?retry="+$("#retry").val()+"&authenType="+apply_authenticate_vm.authenType;
						}else{
							window.location.href = "/ctrlenterpriseAuthen/onlineAuthFirstRequest?authenType="+apply_authenticate_vm.authenType;
						}
					} else {
						alert(res.result.message);
					}
				},
				complete:function() {
					return false;
				}
			});

		});


	
	function checkIndeedAuthenOpenAjax(event_name,target_element,url){
		var indeed_ele_btn=$(target_element);
		//实地认证要校验地区是否开放
		$(document).on(event_name,target_element, function() {
			$.ajax({
				url : url,
				dataType : 'json'
			}).done(function(res) {
				console.log(res.isAllow);
				if (res.isAllow != true) {
					alert("该地区未开放特约合作！");
				}else{
					window.location.href = "/ctrlenterpriseAuthen/fieldAuthFirstRequest";
				}
			}).complete(function() {
					return false;
			});
		});
	}

	$(document).on("click",".login_close",function () {
		$(".login_mask").hide();
	});
	$(document).on("click","#apply_login_cancel",function () {
		$(".login_mask").hide();
	});

	$(document).on("click","#apply_login",function () {
		window.location.href="/ctrllogin/index?userType=1&return_url=/ctrlcompaddval/applyForVip";
		
	});

