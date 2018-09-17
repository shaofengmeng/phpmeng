<form id="form_pwd">
    <div class="box" id="password_box" style="display: block;">
        <div class="hd">
            修改密码 <a class="btn right submit" id="password_submit">保存</a>
        </div>
        <div class="cnt">
            <div class="row">
                <span class="txt_left">旧密码:</span>

                <div class="wrap">
                    <label class="ipt_outer"><input type="password"
                                                    class="pre_password" id="pre_password" name="pre_password" placeholder="请输入旧密码"></label>
                </div>
            </div>
            <div class="row">
                <span class="txt_left">新密码:</span>

                <div class="wrap">
                    <label class="ipt_outer"><input type="password"
                                                    class="new_password" id="new_password" name="new_password" placeholder="请输入新密码"></label>
                </div>
            </div>
            <div class="row">
                <span class="txt_left">确认密码:</span>

                <div class="wrap">
                    <label class="ipt_outer"><input type="password"
                                                    class="cfm_password" id="cfm_password" name="cfm_password" placeholder="请再次输入新密码"></label>
                </div>
            </div>
            <div class="row">
                <span class="txt_left">验证码:</span>

                <div class="wrap">
                    <label class="validate_code_wrap ipt_outer"><input
                                type="text" placeholder="点此查看验证码" class="validate_code"
                                id="validate_code"><img src="{{('static/picture/154a36b1bd304f6790004cb7f9526c07.gif')}}"
                                                        alt="验证码" class="validate_code_img" id="validate_code_img"></label>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    $("#password_submit").on("click",function() {
        $.ajax({
            type:"post",
            url: '{{url('User/updateData')}}',
            data: $('#form_pwd').serialize(),
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