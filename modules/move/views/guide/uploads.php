<script type="text/javascript" src="/js/uploadify/jquery.uploadify.min.js"></script>
<!-- 单集视频 start -->
<form action="" method="post" enctype="multipart/form-data">
    <table class="mtable" width="50%" cellpadding="10" cellspacing="0">
        <tr>
            <td width="200" align="right">内容名称：</td>
            <td><input type="text" name="title" id="title" class="form-input" value=""></td>
        </tr>
<tr class="video_upload">
    <td align="right" valign="top">上传视频/图片：</td>
    <td>
        <div>
            <input name="url" type="hidden"/>
            <input type="file" id="video_is_upload"/>
            <script type="text/javascript">
                $('#video_is_upload').uploadify({
                    'auto'          : true,//关闭自动上传
                    'buttonImage'   : '/images/02.png',
                    'width'         : 98,
                    'height'        : 36,
                    'swf'           : '/js/uploadify/uploadify.swf',
                    'uploader'      : '/move/guide/video?mid=1',
                    'method'        : 'post',//方法，服务端可以用$_POST数组获取数据
                    'buttonText'    : '选择图片',//设置按钮文本
                    'multi'         : false,//允许同时上传多张图片
                    'uploadLimit'   : 10,//一次最多只允许上传10张图片
                    'fileTypeExts'  : '*',//限制允许上传的图片后缀
                    'sizeLimit'     : 10240000000,//限制上传的图片不得超过200KB
                    'onSelect'      : function(){
                        var no_img = $('.no_video');
                        if(no_img.length <= 0){
                            var myself = this;
                            myself.cancelUpload();
                            alert("如需上传多个视频请选择多集视频");
                        }
                    },
                    'onUploadSuccess' : function(file, data, response) {//每次成功上传后执行的回调函数，从服务端返回数据到前端
                        $('input[name=url]').val(data);
                    }
                })
            </script>
        </div>
        <div class="returnVideo no_video"></div>
    </td>
</tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input type="submit" value="保存信息" class="btn">
            <input type="button" value="返回列表" class="gray" onclick="window.location.href='<?php echo $this->get_url('guide','index')?>'">
        </td>
    </tr>
    </table>
<!-- 单集视频 end -->
</form>
