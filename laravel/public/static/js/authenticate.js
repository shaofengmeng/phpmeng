var authenticate_center_vm = new Vue({
	el:'#page_authenticate_center',
	data:{
		comp_permission_list: [
		],
		company_info:{
			authen_status:""
		},
		is_city_open_vip:false,
		is_vip: null,
		level_id: null,
		vip_level:$("#vipLevel").val(),
		vip_list: [
		],
		is_vip_expand:true,
		is_group_member:false
	},
	created:function(){
		this.getPageData();
		this.eventInit();
		this.getGroupMark();
	},
	methods:{
		getGroupMark:function(){
			var _this = this;
			$.ajax({
				url:'/group/getGroupCompanyInfo',
				data:{},
				type:"POST",
				success:function (res) {
					if(res.status=="0000" && res.data){
						if(res.data.group_status!=0){
							_this.is_group_member=true;
						}
					}
				}
			})
		},
		getPageData:function () {
			var _this = this;
			$.ajax({
				url:'/compaddval/getCompAuthenInfo',
				data:{},
				type:"POST",
				success:function (res) {
					if(res.code=="0000" && res.data){
						_this.setPageData(res.data);
					}
				}
			})

		},
		setPageData:function(data){
			var _this = this;
			for(var i in data){
				if(i == 'vip_list'){
					data[i] =_this.setVipListStatusPercent(data[i]);
				}
				_this[i] = data[i];
			}

		},
		setVipListStatusPercent:function (vip_list) {
			var vips =[];
			for(var j=0 ;j<vip_list.length;j++){
				vips.push(vip_list[j]);
				vips[j]["percent"] = this.computeStatus(vip_list[j].start_time,vip_list[j].end_time);
			}
			return vips;
		},
		computeStatus:function(start_time,end_time){
			if(!start_time || !end_time) return 0;
			var start = new Date(start_time.replace(/-/g,"/")),
				end = new Date(end_time.replace(/-/g,"/")),
				today = new Date(),
				total = parseInt(end.getTime() - start.getTime());
			if(today.getTime()>end.getTime()){	//已经用完了
				return 0;
			}else if(start.getTime() > today.getTime()){	//还没有开启
				return 100;
			}else{
				var use = parseInt(today.getTime() - start.getTime());
				var percent = parseFloat((1-use/total) * 100).toFixed(2);
				return percent;
			}
		},
		eventInit:function () {

		}

	}
});