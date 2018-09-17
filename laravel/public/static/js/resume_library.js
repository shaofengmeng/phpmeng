/**
 * Created by Administrator on 2017/7/18.
 * @Joyan at Blue1.0.0
 *
 */
const session_resume_filter = (sessionStorage.getItem("session_resume_filter"))? JSON.parse(sessionStorage.getItem("session_resume_filter")):null;
var resume_vm = new Vue({
    el:"#resume_library_page",
    data:{
        tab:"filter",   //filter 筛选， library 简历集合
        filter:{
            activity_level:0,
            age:18,
            is_full_time:-1, //是否考虑全职
            age_compare_type:5, //年龄比较 0、大于,1、大于等于,2、等于,3、小于,4、小于等于，5、不限
            sex:2,
            work_city:null,
            work_province:null, //工作地点--省
            work_opinion:"",    //工作意向
            is_graduate:-1 , //是否毕业，默认不限
            edu_degree:-1 , //学历，默认不限
            update_lifecycle:-1  //简历更新周期，默认不限
        },
        first_loading:true,
        work_opinion_select:[], //选中的工作意向
        workOpinionList:[],//工作意向列表
        workExpList:[],//职位卡列表
        work_area_select:[], //选中的工作地区列表
        workAreaList:[],//工作意向列表
        calendar_list:getInitCalender(),    // 筛选时间
        work_areas_select:[],  // 地区
        compession:{},
        province_list:[],   //地区联动
        city_list:[],
        area_list:[],
        apply_list:{
        },
        comp_job:{  //企业录用工作列表
            user_id:null,
            compJobList:[],
            pageNumber:1
        },
        filter_resume_list:null,  //筛选的简历列表
        filter_pageNumber:1,    //筛选的简历页码
        filter_totalPage:null,
        all_resume_list:[],    //简历集合列表
        all_pageNumber:1,    //简历集合页码
        all_totalPage:this.max_total_page,
        max_total_page:999
    },
    created:function () {
        this.pageInit();
    },
    watch:{
        "filter.work_province":function (nVal,oVal) {
            console.log("n province" +  nVal);
            if(nVal) {this.loadCity(nVal);}

        },
        "filter.work_city":function (nVal,oVal) {
            console.log("获取城市" + nVal);
            if(nVal) { this.loadArea(nVal);}
        },
        "tab":function (nVal,oVal) {
            if(nVal == "library"){
               this.all_pageNumber = 1;   //简历集合页码
                this.all_resume_list = [];
               this.all_totalPage = this.max_total_page;
               this.getAllUserResList(1);
            }
        },
/*        "filter.workExp_compare_type":function (nVal,oVal) {
            if(nVal != "0"){
                this.filter.workExp_job_type = '其他';
            }
        },*/
        "workOpinionList":function (nVal,oVal) {
            
        }
    },
    methods:{
        pageInit:function () {
            this.getAllProvince();
            this.getPageInitData();
            this.bindEvent();
        },
        resetSessionStorage:function () {   //已选的条件缓存到sessionStorage里面
            var _this = this;
            if(session_resume_filter) {
                var filters = {};
                console.log("session_resume_filter");
                console.log(session_resume_filter);
                
                for(var a in session_resume_filter.filter){
                    if(a != 'work_province' && a != 'work_city' && a != 'work_area'){
                        filters[a] = session_resume_filter.filter[a];
                    }
                }
                this.$set(this,"filter",session_resume_filter.filter);
                this.$set(this,"calendar_list",session_resume_filter.calendar_list);
                this.$set(this,"work_area_select",session_resume_filter.work_area_select);
                this.$set(this,"workAreaList",session_resume_filter.workAreaList);
                this.$set(this,"workOpinionList",session_resume_filter.workOpinionList);
                this.$set(this,"work_opinion_select",session_resume_filter.work_opinion_select);
                console.log("session_resume_filter");
                console.log(session_resume_filter);
            }
        },
        getPageInitData:function (){
            var _this = this;
            $.ajax({
                url:"/resumelib/getCompPermission",
                data:{},
                type:"GET",
                success:function (res) {
                    if(res.status == "0000"){
                        _this.compession = res.data.compession;  // 权限描述
                        _this.workOpinionList =(session_resume_filter)? session_resume_filter.workOpinionList:res.data.workOpinionList;  // 工作求职意向列表
                        setTimeout(function () {
                            _this.resetSessionStorage();
                        },1000);
                    }else{
                        alert(res.message);
                    }
                }
            })
        },
        getFilterResumeData:function (pageNumber){    //简历筛选页面查询
            var filter_data = this.getFilterCondition();
            filter_data.pageNumber = (pageNumber)? pageNumber:1;
            if(filter_data.pageNumber == 1){
                this.getFilterResumeTotalPage(filter_data);
            }
            var _this = this;
            _this.first_loading = false;
            $.ajax({
                url:"/resumelib/getUserResListByFilterType",
                data:filter_data,
                type:"GET",
                beforeSend:function () {
                    loading();
                },
                success:function (res) {
                    if(res.status == "0000"){
                        if(res.data.userResList.length == 0 && pageNumber>1){
                              //最后一页
                            //layer.msg("最后一页");
                            return;
                        }else{
                            _this.filter_resume_list =res.data.userResList;
                        }
                        _this.filter_pageNumber =res.data.pageNumber;


                    }else{
                        alert(res.message);
                    }
                },
                complete:function () {
                    removeLoading();
                }
            })
        },
        getFilterResumeTotalPage:function (filter_data){    //简历筛选页面查询
            var _this = this;
            $.ajax({
                url:"/ajax/resumelib/getUserResListPageNum",
                data:filter_data,
                type:"GET",
                beforeSend:function () {
                   // loading();
                },
                success:function (res) {
                    if(res.status == "0000"){
                        _this.filter_totalPage = res.data.total_page_num;
                        console.log("filterfilter_totalPage");
                        console.log(_this.filter_totalPage);
                    }else{

                    }
                },
                complete:function () {

                }
            })
        },

        doCheckFilterResume:function () {
            // 查询
            this.filter_pageNumber = 1;
            this.filter_totalPage = this.max_total_page;
           this.saveFilterSession();
           this.getFilterResumeData(1);
        },
        saveFilterSession:function () {
            var new_session_resume_filter = {
                filter:this.getFilterCondition(),
                filter_pageNumber: this.filter_pageNumber,
                calendar_list:this.calendar_list,
                work_area_select:this.work_area_select,
                work_opinion_select:this.work_opinion_select,
                workOpinionList:this.workOpinionList,
                workAreaList:this.workAreaList,
            }
            console.log("缓存 session_resume_filter");
            sessionStorage.setItem("session_resume_filter",JSON.stringify(new_session_resume_filter));
        },
        goToFilterPage:function (pageNumber,e) {
            console.log("$(e.target)");
            console.log($(e.target));

            if($(e.target).hasClass('disable')) return;
            if(typeof pageNumber == "number" &&  pageNumber>=1){
                this.getFilterResumeData(pageNumber);
                this.saveFilterSession();
            }
        },
        goToLibrayPage:function (pageNumber,e) {
            if($(e.target).hasClass('disable')) return;
            if(typeof pageNumber == "number" &&  pageNumber>=1){
                this.getAllUserResList(pageNumber);
                this.saveFilterSession();
            }
        },
        getPhoneNum:function (item) {   //企业查看点击联系方式
            var user_id = item.user_id;
            var _this = this;
            $.ajax({
                url:"/resumelib/showUserPhone",
                data:{"user_id":user_id},
                type:"GET",
                beforeSend:function () {
                    loading();
                },
                success:function (res) {
                    if(res.status == "0000"){
                       // item.tel = res.data.user_phone;
                        _this.$set(item,"tel", res.data.user_phone);
                        console.log(item.tel);
                        _this.$nextTick(function () {
                            console.log(item.tel);
                        })
                    }else{
                        alert(res.message);
                    }
                },
                error:function () {
                    alert("系统繁忙");
                },
                complete:function () {
                    removeLoading();
                }
            })
        },
        getPhoneLeftNum:function (item) {
          var _this = this;
            $.ajax({
                url:"/resumelib/getCompCheckUserContactNum",
                data:{},
                type:"GET",
                beforeSend:function () {
                    loading();
                },
                success:function (res) {
                    if(res.status == "0000"){
                        if(res.data.num > 0){
                            $Comfirm({
                                text: "您可查看的联系方式数量还剩" + res.data.num + "个<br>" + "确定查看吗？",
                                sure:function () {
                                    _this.getPhoneNum(item);
                                },
                                cancel:function () {

                                }
                            });
                        }else{
                            $BuyBox({
                                text: "可用的查看联系方式数量为0！",
                                btnText:"去购买简历数"
                            })
                        }


                    }else{
                        alert(res.message);
                    }
                },
                error:function () {
                    alert("系统繁忙");
                },
                complete:function () {
                    removeLoading();
                }
            })
        },
        getAllUserResList:function (pageNumber) {   //用户简历集合
            var _this = this;
            $.ajax({
                url:"/resumelib/getUserResList",
                data:{"pageNumber":pageNumber},
                type:"GET",
                beforeSend:function () {
                    loading();
                },
                success:function (res) {
                    if(res.status == "0000" && res.data.page){

                        if(res.data.page.list.length == 0 && pageNumber>1){
                            alert("最后一页");
                            return;
                        }else{
                            _this.all_resume_list = res.data.page.list;
                        }
                        _this.all_pageNumber = res.data.page.pageNumber;
                        _this.all_totalPage = res.data.page.totalPage;

                    }else{
                        alert(res.message);
                    }
                },
                error:function () {
                    alert("系统繁忙");
                },
                complete:function () {
                    removeLoading();
                }
            })
        },
        getCompJobList:function(user_id,pageNumber){  //获取企业发布兼职列表（录用）
            var _this = this;
            $.ajax({
                url:"/compJobList/getCompJobList",
                data:{"user_id":user_id,"pageNumber":pageNumber},
                type:"GET",
                beforeSend:function () {
                    loading();
                },
                success:function (res) {
                    if(res.status == "0000" && res.data){
                        _this.comp_job={
                            user_id:user_id,
                            compJobList:res.data.page.list,
                            pageNumber:res.data.page.pageNumber,
                            totalPage:res.data.page.totalPage
                        }
                    }else{
                        alert(res.message);
                    }
                },
                error:function () {
                    alert("系统繁忙");
                },
                complete:function () {
                    removeLoading();
                }
            });

            /**接口返回参数
             * current_status：0: 已报名 ;1: 已录用 ;2: 已到岗 ;3: 已结算
             * current_state  : 根据status 的不同,有不同的含义  ,
             * current_status 0: 已报名
             * 0:待录用;  [可取消]
             * 1:被驳回;  [可删除]
             * 2:已取消;  [可删除]
             * 3:已招满;  [可删除]
             * 4: 已失效 5:冲突 6:已查看 ,
             * current_status 1: 已录用
             * 0:待工作  [可签到]
             * 1:被驳回;  [可删除]
             * 2:已取消;[可删除]
             * 3:已失效;  [可删除] ,
             * current_status 2: 已到岗
             * 0:待结算  [已结算] [可投诉]
             * 2:已失效  [可删除] ,
             * 3: 已结算 0:待评价 ,
             * 已结算  [写评价]
             * 1:已评价  [可删除]
             */

        },
        goToCompJobListPage:function(pageNumber,e){  //获取企业发布兼职列表（录用）
            if($(e.target).hasClass('disable')) return;
           if(typeof pageNumber == "number" &&  pageNumber>=1){
                this.getCompJobList(this.comp_job.user_id,pageNumber);
           }
        },

        openCompJobList:function (user_id) {   // 打开录用弹窗
            if(this.comp_job && this.comp_job.user_id == user_id){
                $("#CompJobListBox").show();
            }else{
                this.getCompJobList(user_id,1);
                $("#CompJobListBox").show();
            }
        },
        hireJobByUser:function (item) {   //录用用户
            var _this = this;
            var source = (this.tab == "filter")? 0:1;
            var _data = {
                "source":source,    // 0代表简历库筛选录用，1代表简历集合筛选录用
                "user_id": item.user_id,
                "job_id": item.job_id
            }
            $.ajax({
                url: "/compJobList/changeRStatus",
                data: _data,
                type: "GET",
                beforeSend:function () {
                    loading();
                },
                success: function (res) {
                    if (res.status == "0000" ) {
                        alert("录用成功");
                        _this.getCompJobList(_this.comp_job.user_id,_this.comp_job.pageNumber);
                    } else {
                        alert(res.message);
                    }
                },
                error: function () {
                    alert("系统繁忙");
                },
                complete:function () {
                    removeLoading();
                }
            });
        },
        cancelHireJobByUser:function (item) {   //取消录用
            var _this = this;
            var _data = {
                "operaCode": 41,    //取消： 41
                "operaType": 1,     //1、代码简历库操作
                "ucaid": item.ucaid
            };
            $.ajax({
                url: "/jobmanage/changeRStatus",
                data: _data,
                type: "GET",
                beforeSend:function () {
                    loading();
                },
                success: function (res) {
                    if (res.result.status == "100") {
                       alert("操作成功");
                        _this.getCompJobList(_this.comp_job.user_id,_this.comp_job.pageNumber);
                    } else {
                        alert(res.result.msg);
                    }
                },
                error: function () {
                    alert("系统繁忙");
                },
                complete:function () {
                    removeLoading();
                }
            });
         },

        /**********筛选操作区域 Start ************/
        getFilterCondition:function () {    //获取筛选信息
            console.log("this.filter.is_full_time:");
            console.log(this.filter.is_full_time);

          var filter_data = this.filter;
            filter_data.calendar = this.getFilterCalender();
            filter_data.work_areas =(this.work_area_select && this.work_area_select.length>0)? this.work_area_select.join(','):"不限";
            filter_data.work_opinion = (this.work_opinion_select && this.work_opinion_select.length>0)? this.work_opinion_select.join(','):"全选";
            return filter_data;
        },
        getFilterCalender:function () {
            var calendar = [];
            var cal_list = (this.calendar_list)? this.calendar_list:[];
            for(var i=0,clen =cal_list.length ;i<clen; i++ ){
                    for(var j=0,len =cal_list[i].list.length ;j<len;j++){
                        if(cal_list[i].list[j].select){
                            calendar.push( (j+1) + cal_list[i].code );
                        }
                    }
            }
            return calendar.join(',');
        },
        selectWorkOpinion:function(e ,item){
            if(item){
                this.$set(item,"select",!item.select);
                $("#all_work_opinion").removeClass('active');
            }else{

                if(!$(e.target).hasClass('active')){
                    //全选
                    for(var i=0,len=this.workOpinionList.length;i<len;i++){
                        this.$set(this.workOpinionList[i],"select", false);
                    }
                   $(e.target).addClass('active');
                }
            }

        },
        removeOpinion :function (item) {

            for(var i=0,len=this.workOpinionList.length;i<len;i++){
                if(this.workOpinionList[i].namech == item){
                    this.workOpinionList[i].select = false;
                }
            }
            this.confirmWorkOpinion();

        },
        confirmWorkOpinion:function () {
            var wk = [];

            for(var i=0,len=this.workOpinionList.length;i<len;i++){
                if(this.workOpinionList[i].select){
                    wk.push(this.workOpinionList[i].namech);
                }
            }

            this.$set(this,"work_opinion_select",wk);

            //意向工作全选
            if( $("#all_work_opinion").hasClass('active')){
                $("#select_all_opinion").show();
            }else{
                $("#select_all_opinion").hide();
            }

            $("#exp_job_list_box").hide();
        },
        
        selectWorkArea:function(e,item){
            if(item){
                this.$set(item,"select",!item.select);
                $("#all_work_area").removeClass('active');
            }else{
                //不限
                if(!$(e.target).hasClass('active')) {
                    for (var i = 0, len = this.workAreaList.length; i < len; i++) {
                        this.$set(this.workAreaList[i], "select", false);
                    }
                   $(e.target).addClass('active');
                }
            }
        },
        removeArea :function (item) {
            console.log("item")
            for(var i=0,len=this.workAreaList.length;i<len;i++){
                if(this.workAreaList[i].area == item){
                    this.workAreaList[i].select = false;
                    this.confirmWorkArea();
                    return false;
                }
            }


        },
        confirmWorkArea:function () {
            var wk = [];
            for(var i=0,len=this.workAreaList.length;i<len;i++){
                if(this.workAreaList[i].select){
                    wk.push(this.workAreaList[i].area);
                }
            }

            //this.work_area_select = wk;
            this.$set(this,"work_area_select",wk);

            //地区不限显示
            if( $("#all_work_area").hasClass('active')){
                $("#area_no_limit").show();
            }else{
                $("#area_no_limit").hide();
            }

            $("#exp_area_list_box").hide();
        },
        getAllProvince:function () {
            var _this = this;
            $.ajax({
                url:'/ctrlarea/getAllProvince',
                success:function (res) {
                    console.log(">>>>> getAllProvince :  " );
                    if(res.list){
                        _this.province_list = res.list;
                        var work_province;
                        if(_this.first_loading && session_resume_filter){
                            work_province = session_resume_filter.filter.work_province;
                        }else if(res.list.length > 0){
                            work_province =  res.list[0].province;
                        }else{
                            work_province = null;
                        }

                        console.log(work_province);
                        _this.filter.work_province = work_province;
                    }
                }
            });
        },
        loadCity:function (province) {
            var _this = this;
            $.ajax({
                url:'/ctrlcommon/getOpencity',
                type:"get",
                data:{'pre':province},
                success:function (res) {
                    console.log(">>>>>loadCity :  " )
                    if(res.list){
                        _this.city_list = res.list;
                        var work_city = null;
                        if(_this.first_loading && session_resume_filter){
                            work_city = session_resume_filter.filter.work_city;
                            console.log(">>>>>session_resume_filter.filter :  " )
                            console.log(session_resume_filter.filter);
                        }else if(res.list.length > 0){
                            work_city =  res.list[0].city;
                        }
                        _this.filter.work_city = work_city;
                    }
                }
            })

        },
        loadArea:function (city) {
            var _this = this;
            console.log(">>>>loadArea");
            $.ajax({
                url:'/ctrlcommon/getOpenarea',
                type:"GET",
                data:{'c':city},
                success:function (res) {
                    if(res && res.list){
                        var work_area_select;
                        if(_this.first_loading && session_resume_filter && (session_resume_filter.filter.work_city == _this.filter.work_city)){
                            _this.workAreaList =(session_resume_filter.workAreaList)?  session_resume_filter.workAreaList:res.list;
                            console.log("_this.workAreaList:");
                            console.log(_this.workAreaList);
                            work_area_select = (session_resume_filter.work_area_select)?  session_resume_filter.work_area_select:[];
                        }else{
                            _this.workAreaList = res.list;
                            work_area_select = [];
                        }
                        _this.$set(_this,"work_area_select",work_area_select);
                        _this.filter.areas = [];
                        _this.initWorkAreaList();

                    }
                }
            })
        },
        initWorkAreaList:function () {

        },
        /**********筛选操作区域 End ************/
        bindEvent:function () {
            $(document).on("click",".fixed_wrap .l_overlay",".fixed_wrap .fixed_close",function () {    //关闭地区列表弹窗显示
                console.log("关闭" );
                $(this).parents(".fixed_wrap").hide();
            });
            $(document).on("click",".fixed_wrap .fixed_close",function () {    //关闭地区列表弹窗显示
                console.log("关闭" );
                $(this).parents(".fixed_wrap").hide();
            });

            $(document).on("click","#exp_job_btn",function () {    //打开求职意向选择
                $("#exp_job_list_box").show();
            });
            $(document).on("click","#exp_area_btn",function () {    //打开区域选择
                $("#exp_area_list_box").show();
            });
        },
        selectAllTime:function(line){
            line.all = !line.all;
			console.log(line)
            for(var i=0;i<line.list.length;i++){
                line.list[i].select =  line.all;
            }
            this.$nextTick(function () {

            })
        },
        selectCalenderTime:function(time,line){
            time.select = !time.select;
			var istrue = false;
			for(var i=0;i<line.list.length;i++){
                if(!line.list[i].select){
					istrue=true;
				}
            }
			line.all = istrue==true?false:true;
            this.$nextTick(function () {

            })
        },
        showMoreExp:function (event) {
            var obj = $(event.target);
            if(obj.html()=="展开"){
                obj.siblings(".exp_hide").css({"display":"inline-block"});
                obj.html("收起");
            }else{
                obj.siblings(".exp_hide").css({"display":"none"});
                obj.html("展开");
            }
        }

    }
});
function getInitCalender() {
    var calendar = [{code:"A",time:"上午",all:false,list:[]},{"code":"B",time:"下午",all:false,list:[]},{"code":"C",time:"晚上",all:false,list:[]}];
    for(var i=0;i<calendar.length;i++){
        for(var j=1;j<=7;j++){
            calendar[i].list.push({"select":false,"val": j+ calendar[i].code});
        }
    }
    return calendar;
}
function loading(){
    var html='<div id="loading_box" class="" style="position:fixed;width:100%;height:100%;top:0;left:0;background:rgba(0,0,0,.1);text-align:center;"><img src="/web/assets/img/loading.gif" style="position:absolute;top:48%;left:50%;margin-left:-15px;"/></div>';
    if($("#loading_box").length > 0){
        $("#loading_box").show();
    }else{
        $("body").append(html);
    }
}
function removeLoading(){
    $("#loading_box").hide();
}

function $Comfirm(obj){
    var $confirm_box =  $("#confirm_box");
    if(typeof obj != 'object'){
        console.warn("确认框初始化数据有误");
        return;
    }
    if(!obj.text){
        console.warn("确认框弹窗内容为空");
    }
    
    $confirm_box.find(".confirm_text").text((obj.confirm_text)? obj.confirm_text:"确认");
    $confirm_box.find(".cancel_text").text((obj.cancel_text)? obj.cancel_text:"取消");
    $confirm_box.find(".text_contain").html(obj.text);

    $confirm_box.show();
    $confirm_box.find(".sure_btn").click(function () {
        obj.sure && obj.sure();
        $confirm_box.hide();
    });
    $confirm_box.find(".cancel_btn").click(function () {
        obj.cancel && obj.cancel();
        $confirm_box.hide();
    });
}
function $Alert(obj){
    var $alert_box =  $("#alert_box");
    if(typeof obj != 'object'){
        console.warn("提示弹框初始化数据有误");
        return;
    }
    if(!obj.text){
        console.warn("提示框弹窗内容为空");
    }
    $alert_box.find(".text_contain").html(obj.text);
    $alert_box.show();
    $alert_box.find(".btn").text((obj.btn_text)? obj.btn_text:"确认");
    $alert_box.find(".btn").click(function () {
        obj.cb && obj.cb();
        $alert_box.hide();
    });
}
function $BuyBox(obj){
    var $alert_box =  $("#buy_box");
    if(typeof obj != 'object'){
        console.warn("提示弹框初始化数据有误");
        return;
    }
    if(!obj.text){
        console.warn("提示框弹窗内容为空");
    }
    $alert_box.show();
}
