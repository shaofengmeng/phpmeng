<div class="box" id="picture_box">
    <div class="hd">修改头像</div>
    <div class="cnt">
        <div class="current_picture_box" id="current_picture_box">
            <span class="txt">当前头像为: </span> <img
                    src="{{('static/picture/default_picture.png')}}">
        </div>
        <div id="altContent">
            <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                    codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"
                    WIDTH="650" HEIGHT="450" id="myMovieName">
                <PARAM NAME=movie
                       VALUE="//www.jianzhimao.com/web/assets/flash/avatar.swf">
                <PARAM NAME=quality VALUE=high>
                <PARAM NAME=bgcolor VALUE=#FFFFFF>
                <param name="flashvars"
                       value="imgUrl=//www.jianzhimao.com/web/assets/img/default_picture.png&uploadUrl=//www.jianzhimao.com/web/assets/flash/upfile.jsp&uploadSrc=flash/pics" />
                <EMBED
                        src="{{('static/flash/avatar.swf')}}"
                        quality=high bgcolor=#FFFFFF WIDTH="650" HEIGHT="450"
                        wmode="transparent"
                        flashVars="imgUrl=//www.jianzhimao.com/web/assets/img/default_picture.png&uploadUrl=//www.jianzhimao.com/web/assets/flash/upfile.jsp&uploadSrc=flash/pics"
                        NAME="myMovieName" ALIGN=""
                        TYPE="application/x-shockwave-flash"
                        allowScriptAccess="always"
                        PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
                </EMBED>
            </OBJECT>
        </div>

    </div>
</div>