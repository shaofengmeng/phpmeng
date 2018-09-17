    <div class="box" id="resume_box" style="display: block;">
        <div class="hd">修改资料</div>
        <div class="cnt">
            <div>
                <h2 class="company_name">云和数据
                <span class="status  s0">
									未认证
									</span>
                    <span style="float:right; font: 14px/1.2 '微软雅黑' ,Arial, '宋体', sans-serif;
                    ;cursor:pointer;"><a id="zl" href="javascript:;">[保存]</a></span>
                </h2>
            </div>
            <div>
                <form id="form_zl" action="" method="post">
                    <input type="hidden" name="zl" value="1">
                    <input type="hidden" name="id" value="{{$user->user_id}}">
                <table class="table">
                    <tr>
                        <td class="label">公司性质</td>
                        <td>{{$user->user_xz}}</td>
                        <td class="label">公司规模</td>
                        <td>{{$user->user_gm}}</td>
                    </tr>
                    <tr>
                        <td class="label">所属行业</td>
                        <td>{{$user->user_hy}}</td>
                        <td class="label">公司邮箱</td>
                        <td><input type="text" name="user_email" value="{{$user->user_email}}"/></td>
                    </tr>
                    <tr>
                        <td class="label">联系人</td>
                        <td><input type="text" name="user_leader" value="{{$user->user_leader}}"/></td>
                        <td class="label">联系电话</td>
                        <td><input type="text" name="user_phone" value="{{$user->user_phone}}"/></td>
                    </tr>
                    <tr>
                        <td class="label">公司地址</td>
                        <td colspan="3">
                            <div>
                                <div id="city_china">
                                    <span>省份：<select class="province" name="province" data-value="{{$user->user_province}}" data-first-title="选择省" disabled="disabled"></select></span>
                                    <span>城市：<select class="city" name="city" data-value="{{$user->user_city}}" data-first-title="选择市" disabled="disabled"></select></span>
                                    <span>地区：<select class="area" name="area" data-value="{{$user->user_area}}" data-first-title="选择地区" disabled="disabled"></select></span>
                                    <input maxlength="100" type="text" class="txt" id="address" name="address" value="{{$user->user_detail}}" placeholder="详细地址" />
                                </div>
                                <script>
                                    {{--省市区--}}
                                    $('#city_china').cxSelect({
                                        url : '{{asset('static/cxSelect/cityData.min.json')}}',  //联动json数据
                                        selects: ['province', 'city', 'area'],        //select框对应class
                                        nodata: 'none'                               //无子类别时不显示下拉框
                                    });

                                </script>
                            </div>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
            <div>
                <table class="table">
                    <tr>
                        <td style="background-color: #f3f3f3; text-align: right; ">
                            <span style="float: left;">公司简介</span>
                             <span style="float:right; font: 14px/1.2 '微软雅黑' ,Arial, '宋体', sans-serif;
                    ;cursor:pointer;"><a id="js" href="javascript:;">[保存]</a></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <textarea cols="80" rows="8" id="idt" name="idt" style="resize:none">{{$user->user_idt}}</textarea>
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
                            <span style="float: left;">工作环境</span>
                            <a style="cursor:pointer;" id="upload_aircraft_img" href="javascript:;">[保存]</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <form action="{{url('Home/Upload/save')}}" method="post"  enctype="multipart/form-data" >
                                <a id="upload_aircraft_img" style="width:38%;margin-top:2px">选择文件</a>
                                <ul id="aircraft_img_list" style="padding-left:0;margin-top:10px;list-style:none; float:left;"></ul>

                            <script language="JavaScript">
                                var msgLayero_upload_aircraft_img;
                                var index_upload_aircraft_img
                                var layer_upload_aircraft_img = 1;
                                //实例化一个plupload上传对象
                                var uploader_upload_aircraft_img = new plupload.Uploader({
                                    browse_button : 'upload_aircraft_img', //触发文件选择对话框的按钮，为那个元素id
                                    url : '{{url('Home/Upload/save')}}', //服务器端的上传页面地址
                                    flash_swf_url : '/Public/plupload/Moxie.swf', //swf文件，当需要使用swf方式进行上传时需要配置该参数
                                    silverlight_xap_url : '/Public/plupload/Moxie.xap', //silverlight文件，当需要使用silverlight方式进行上传时需要配置该参数
                                    multipart_params: {
                                        type: 'aircraft_img'
                                    },
                                    resize: {
                                        width: 800 //指定压缩后图片的宽度，如果没有设置该属性则默认为原始图片的宽度
                                        //height: , //指定压缩后图片的高度，如果没有设置该属性则默认为原始图片的高度
                                        //crop: false //是否裁剪图片
                                    },
                                    filters : {
                                        max_file_size : '10mb'
                                        //mime_types: [
                                        //    {title : "Image files", extensions : "jpeg,jpg,gif,png,pdf,zip,rar"},
                                        //]
                                    },
                                    init: {
                                        //选择文件
                                        FilesAdded: function(up,files){
                                            //加载层
                                            index_upload_aircraft_img = layer.msg('上传中...', {
                                                icon: 16 ,time: 0,
                                                shade: 0.01,
                                                success: function(layero, index){
                                                    msgLayero_upload_aircraft_img = layero;
                                                }
                                            });
                                            //layer_upload_aircraft_img = layer.msg('上传中...', {time: 0}); //不自动关闭
                                            uploader_upload_aircraft_img.start();
                                        },
                                        UploadProgress: function(up, file) { //上传中，显示进度条
                                            var percent = file.percent;
                                            msgLayero_upload_aircraft_img.find('.layui-layer-content').html('<i class="layui-layer-ico layui-layer-ico1"></i>上传中...'+ percent +'%');
                                            //$("#layui-layer_"+layer_upload_aircraft_img+" .layui-layer-content").html("上传中..."+percent + "%");
                                        },//单个文件上传完成
                                        FileUploaded: function(up,file,responseObject){
                                            console.log($.parseJSON(responseObject.response));//成功回调函数

                                            $('#aircraft_img_list').html('');
                                            var result = $.parseJSON(responseObject.response);
                                            if (result.status == 1) {
                                                //上传成功
                                                var id = Math.random().toString();
                                                id = id.replace('.','_'); //生成唯一标示
                                                var htmls = '<li class="imgs" id="upload_aircraft_img'+id+'" style="position:relative;margin:0 10px -10px 0;">';
                                                htmls+= '<div class="modal fade" id="myModa_upload_aircraft_img'+id+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
                                                htmls+= '        <img src="/Public/'+result.file+'" class="thumbnail" style="margin-left:auto;margin-right:auto;margin-top:50px;">';
                                                htmls+= '    </div>';
                                                htmls+= '<input  type="hidden" name="aircraft_img" value="/Public/'+result.file+'">'; //隐藏域，是为了把图片地址入库。。

                                                htmls+= '<div style="position:relative;" ';
                                                console.log(result.file_type);
                                                var site_url = "http://www.aircraft.ok/Public/";
                                                htmls+= 'data-toggle="modal" data-target="#myModa_upload_aircraft_img'+id+'"';
                                                img_data ='/Public/'+result.file;
                                                htmls+= '>';
                                                htmls+= '</div>';
                                                htmls+= '<span class="po_up" style="position:absolute;top:-8px;right:-6px;background-color:#fff;border-radius:10px;"><a href=javascript:remove("upload_aircraft_img'+id+'","/'+result.file+'");>&nbsp;<img src="/Public/img/bg_03.png" width="15" /></a></span>';
                                                htmls+=  '</li>';

                                                //console.log(htmls);
                                                $('#aircraft_img_list').append(htmls);
                                                msgLayero_upload_aircraft_img.find('.layui-layer-content').html('<i class="layui-layer-ico layui-layer-ico1"></i>'+result.message);
                                                setTimeout(function(){
                                                    layer.close(index_upload_aircraft_img);
                                                }, 2000);
                                            } else {
                                                msgLayero_upload_aircraft_img.find('.layui-layer-content').html('<i class="layui-layer-ico layui-layer-ico2"></i>'+result.message);
                                                setTimeout(function(){
                                                    layer.close(index_upload_aircraft_img);
                                                }, 2000);
                                            }

                                        },
                                        //全部文件上传完成
                                        UploadComplete: function(up,files){
                                            setTimeout(function(){
                                                layer.close(index_upload_aircraft_img);
                                            }, 2000);
                                        },
                                        //返回错误
                                        Error: function(up,err){
                                            msgLayero_upload_aircraft_img.find('.layui-layer-content').html('<i class="layui-layer-ico layui-layer-ico2"></i>'+result.message);
                                            setTimeout(function(){
                                                layer.close(index_upload_aircraft_img);
                                            }, 2000);
                                        }
                                    }
                                });
                                uploader_upload_aircraft_img.init();
                                function remove(id,file){
                                    $.post("{{url('Home/Upload/uploadDelete')}}","path="+file,function(json){
                                        if(json.status==1){
                                            layer.msg("删除成功", {
                                                time: 2000 //2s后自动关闭
                                            });
                                            $('#'+id).remove();
                                        }else{
                                            layer.msg("删除失败", {
                                                time: 2000 //2s后自动关闭
                                            });
                                        }
                                    },'json');
                                }
                            </script>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- 公司福利 -->
            <div>
                <form id="form_welfare">
                    <input type="hidden" name="id" value="{{$user->user_id}}">
                    <table class="table">
                    <tr>
                        <td style="background-color: #f3f3f3; text-align: right;">
                            <span style="float: left;">公司福利</span>
                            <a style="cursor:pointer;" id="welfare" href="javascript:;">[保存]</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="welfare_list">
                                @foreach($welfare as $k=>$v)
                                <label>
                                <input type="checkbox" name="wefare[]" value="{{$k}}"/>{{$v}}
                                </label>
                                @endforeach
                            </div>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </div>
<script>
    //基本资料
    $("#zl").on("click",function() {
        $.ajax({
            type:"post",
            url: '{{url('Home/User/updateData')}}',
            data: $('#form_zl').serialize(),
            dataType:"json",
            success:function (data) {
                if(data.status==1){
                    layer.msg('data.status', {time: 5000, icon:6});
                }else{
                    layer.msg('data.info', {time: 5000, icon:6});
                }
            }
        });
        return false;
    });
//    介绍
    $("#js").on("click",function() {
        var text=$('#idt').val();
        $.ajax({
            type:"post",
            url: '{{url('Home/User/updateData')}}',
            data: {"id":"{{$user->user_id}}","idt":text},
            dataType:"json",
            success:function (data) {
                if(data.status==1){
                    layer.msg('data.status', {time: 5000, icon:6});
                }else{
                    layer.msg('data.info', {time: 5000, icon:6});
                }
            }
        });
        return false;
    });
    //更新福利
    $("#welfare").on("click",function() {
        $.ajax({
            type:"post",
            url: '{{url('Home/User/updateData')}}',
            data: $('#form_welfare').serialize(),
            dataType:"json",
            success:function (data) {
                if(data.status==1){
                    layer.msg('data.status', {time: 5000, icon:6});
                }else{
                    layer.msg('data.info', {time: 5000, icon:6});
                }
            }
        });
        return false;
    });
</script>
