<div class="box" id="email_frequency_tab" style="display: block;">
    <input type="hidden" id="frequency_type" value="">
    <div class="hd">
        邮箱推送频率设置 <a class="btn right submit" id="email_frequency_submit">提交</a>
    </div>
    <div class="cnt">
        <div>
            <strong><i class="icon-ok-sign" style="color: #4ab51e;"></i> 邮箱推送频率设置</strong>
        </div>
        <div style="padding: 10px 0;">
            <small style="color: #818181;">设置邮箱推送频率，以免邮件过度骚扰</small>
        </div>
        <div class="row">
            <span class="txt_left">兼职报名邮件:</span>
            <div class="wrap">
                <select class="sel" id="frequency_sel">
                    <option value="1">不限（每有用户报名均发送邮件）</option>
                    <option value="2">每2小时一次（两小时内只接收一封邮件） </option>
                    <option value="3">每24小时一次（24小时内只接收一封邮件）</option>
                    <option value="4">暂不接收（设置生效开始时，不再接受邮件）</option>
                </select>
            </div>
        </div>
    </div>
</div>