<style>
    .hidden{
        display:none;
    }
    .mtable td{
        padding:5px;
    }
    .up-main{
		height:103px;
		position:relative;
	}
	.uploadify{
		position:absolute;
		z-index:9999;
		left:-100px;
		top:35px;
	}
	.up-main img{
	position: absolute;
	top:0px;		
	max-height:103px;

	}
</style>
<span class="hidden"><?php echo $list[0]['id'];?></span>

<table style="width:900px;" class="mtable mt10" cellpadding="10" cellspacing="0">
         <tr>
        <th style="background: #A3BAD5;height:30px;" colspan="7">添加导航</th>
    </tr>   <tr>
        <td height="40">标题：</td>
       
        <td colspan="2">
            <input type="text" value="<?php echo $list[0]['title'];?>"  name="name" id="title" class='form-input w200 t-name' placeholder="输入修改标题">
        </td>
<!--        <td><input type="button" value="保存" class="btn save-title"></td>-->
    </tr>
    <tr>
        <td height="40">当前焦点：</td>
        <td class="old_focus" colspan="2"><?php switch($list[0]['focus']){
                case '0':echo  "是：<input type='radio' name='focus' value='1' >否：<input type='radio' name='focus' value='0' checked='checked' >";break;
                case '1':echo  "是：<input type='radio' name='focus' value='1' checked='checked' >否：<input type='radio' name='focus' value='0' >";break;
            }?></td>
        
        <!--        <td><input type="button" value="保存" class="btn save-title"></td>-->
    </tr>
    <tr>
        <td height="100" width="100">选中:</td>
         <td width="100">
        </td>
        <td>

            <div class="up-main" id="main">
        
                <input type="file" name="pic_true" id="upload_file_true" placeholder="选择图片" value="">
            <img src="<?php echo $list[0]['pic_true'];?>" alt="" class="old_pic_true">
      
            </div>
        </td>
       
       <!-- <td><input type="button" value="保存" class="btn save-pic-true"></td>-->
    </tr>
    <tr>
        <td  height="100">未选中:</td>
        <td></td>
        <td>
            <div class="up-main" id="main-false">
         
                <input type="file" name="pic_false" id="upload_file_false" placeholder="选择图片" value="">
            	<img src="<?php echo $list[0]['pic_false'];?>" alt="" class="old_pic_false">
              </div>
        </td>
        <!--<td><input type="button" value="保存" class="btn save-pic-false"></td>-->
    </tr>

    <tr>
        <td height="100">焦点下移:</td>
        <td>
        
        </td>
        <td>
            <div class="up-main" id="main-three">
                <input type="file" name="pic_three" id="upload_file_three" placeholder="选择图片" value="">
              <?php
                if($list[0]['pic_three']=='0') {
                    
					
                    echo "<img src='/file/6.png' alt='' class='old_pic_three'>";
                }else{
                    echo "<img src='".$list[0]['pic_three']."' alt='' class='old_pic_three'>";
                }
            ?>
            </div>
        </td>
    </tr>
 <!--   <tr>
        <td>当前排序：（从左向右数值从小到大,数值相同则按照添加时间排序）</td>
        <td>第<?php echo $list[0]['order'];?>位</td>
        <td>修改为：
            <input type="text" name="order" id="order">
        </td>
        <td><input type="button" value="保存" class="btn save-order"></td>
    </tr>-->
    <tr>
        <td height="40">已选模板：</td>
        <td colspan="2" class="oldTemplate"><?php echo $list[0]['templateId']?></td>
    </tr>

<div>
<!--    <div class="name">
        重新选择屏幕模板：(注意重新选择屏幕模板之前模板的数据会清空)
        <input type="button" value="确认修改并保存" class="btn save-template">
    </div>
--><tr>
        <td>模板选择：</td>
        <td colspan="2">
    <select name="template" onchange="showTemplate()"  id="template" class="form-input w200 field">
        <option value="0">--------------请选择-------------</option>
        <option onclick="showTemplate(this)" value="1" >1</option>
        <option value="2" onclick='showTemplate(this)'>2</option>
        <option value="3" onclick="showTemplate(this)">3</option>
        <option value="4" onclick="showTemplate(this)">4</option>
        <option value="5" onclick="showTemplate(this)">5</option>
        <option value="6" onclick="showTemplate(this)">6</option>
        <option value="7" onclick="showTemplate(this)">7</option>
        <option value="8" onclick="showTemplate(this)">8</option>
        <option value="9" onclick="showTemplate(this)">9</option>
        <option value="10" onclick="showTemplate(this)">10</option>
    </select>
    </td></tr>
</div>
<tr>
        <td height="100">模板预览：</td>
        <td colspan="2">
<div class="templatePic">
    <img src="http://117.131.17.105:8083/file/template/t01.png" alt="" width='600px' height='300px'>
</div>
 </td></tr>

 <tr>
        <td colspan="3" align="center">
<div class="name">
        重新选择屏幕模板：(注意重新选择屏幕模板之前模板的数据会清空)<br/>
        <input type="button" value="确认修改并保存" class=" btn save-template ">
        <input type="button" value="取消" class="btn goBack ">
</div>
 </td></tr>
</table>
<script type="text/javascript" src="/js/uploadify/jquery.uploadify.min.js"></script>
<script>
    $('.goBack').click(function()
    {
        window.close();
    })
    $('#upload_file_true').uploadify
    ({
        'auto': true,//关闭自动上传
        'buttonImage': '/images/up1.png',
        'width': 70,
        'height': 26,
        'swf': '/js/uploadify/uploadify.swf',
        'uploader': '/upload/img',
        'method': 'post',//方法，服务端可以用$_POST数组获取数据
        'buttonText': '选择图片',//设置按钮文本
        'queueID' : 'queueid',
        'multi': false,//允许同时上传多张图片
        'uploadLimit': 10,//一次最多只允许上传10张图片
        'fileTypeExts': '*',//限制允许上传的图片后缀
        'sizeLimit': 1024000000000,//限制上传的图片不得超过200KB
        'onSelect'      : function(file)
        {
            var type = file.type;
            var img = ['.jpg','.jpeg','.png','.gif'];
            var myself = this;
            //layer.alert(file.size);
            if(!in_array(type,img)){
                myself.cancelUpload();
                layer.alert("这不是图片");
                return false;
            }
        },
        'onUploadStart' :function(file)
        {
            start = layer.load(0, {icon: 16,shade: [0.3,'#000']});
        },
        'onUploadSuccess' : function(file, data, response)
        {//每次成功上传后执行的回调函数，从服务端返回数据到前端
            layer.close(start);
            var value = eval('('+data+')');
            if(value.code == 200){
                $('input[name=key]').val(value.key);
                var l = $('#main').find('img');
                if(l.length < 1){
                    $('#main').append('<img src="'+value.url+'" width="100px" height="66px" class="upImg">');
                }else{
                    $(l).attr('src',value.url);
                }
            }else{
                layer.alert(value.msg,{icon:0});
            }
//            $('#upload_file_true').hide();
        },
        'onError':function(err)
        {
            layer.alert(err);
        }

    });

    $('#upload_file_false').uploadify
    ({
        'auto': true,//关闭自动上传
        'buttonImage': '/images/up1.png',
        'width': 70,
        'height': 26,
        'swf': '/js/uploadify/uploadify.swf',
        'uploader': '/upload/img',
        'method': 'post',//方法，服务端可以用$_POST数组获取数据
        'buttonText': '选择图片',//设置按钮文本
        'queueID' : 'queueid',
        'multi': false,//允许同时上传多张图片
        'uploadLimit': 10,//一次最多只允许上传10张图片
        'fileTypeExts': '*',//限制允许上传的图片后缀
        'sizeLimit': 1024000000000,//限制上传的图片不得超过200KB
        'onSelect'      : function(file)
        {
            var type = file.type;
            var img = ['.jpg','.jpeg','.png','.gif'];
            var myself = this;
            //layer.alert(file.size);
            if(!in_array(type,img)){
                myself.cancelUpload();
                layer.alert("这不是图片");
                return false;
            }
        },
        'onUploadStart' :function(file)
        {
            start = layer.load(0, {icon: 16,shade: [0.3,'#000']});
        },
        'onUploadSuccess' : function(file, data, response)
        {//每次成功上传后执行的回调函数，从服务端返回数据到前端
            layer.close(start);
            var value = eval('('+data+')');
            if(value.code == 200){
                $('input[name=key]').val(value.key);
                var l = $('#main-false').find('img');
                if(l.length < 1){
                    $('#main-false').append('<img src="'+value.url+'" width="100px" height="66px" class="upImg">');
                }else{
                    $(l).attr('src',value.url);
                }
            }else{
                layer.alert(value.msg,{icon:0});
            }
//            $('#upload_file_false').hide();
        },
        'onError':function(err)
        {
            layer.alert(err);
        }

    });

    $('#upload_file_three').uploadify
    ({
        'auto': true,//关闭自动上传
        'buttonImage': '/images/up1.png',
        'width': 70,
        'height': 26,
        'swf': '/js/uploadify/uploadify.swf',
        'uploader': '/upload/img',
        'method': 'post',//方法，服务端可以用$_POST数组获取数据
        'buttonText': '选择图片',//设置按钮文本
        'queueID' : 'queueid',
        'multi': false,//允许同时上传多张图片
        'uploadLimit': 10,//一次最多只允许上传10张图片
        'fileTypeExts': '*',//限制允许上传的图片后缀
        'sizeLimit': 1024000000000,//限制上传的图片不得超过200KB
        'onSelect'      : function(file)
        {
            var type = file.type;
            var img = ['.jpg','.jpeg','.png','.gif'];
            var myself = this;
            //layer.alert(file.size);
            if(!in_array(type,img)){
                myself.cancelUpload();
                layer.alert("这不是图片");
                return false;
            }
        },
        'onUploadStart' :function(file)
        {
            start = layer.load(0, {icon: 16,shade: [0.3,'#000']});
        },
        'onUploadSuccess' : function(file, data, response)
        {//每次成功上传后执行的回调函数，从服务端返回数据到前端
            layer.close(start);
            var value = eval('('+data+')');
            if(value.code == 200){
                $('input[name=key]').val(value.key);
                var l = $('#main-three').find('img');
                if(l.length < 1){
                    $('#main-three').append('<img src="'+value.url+'" width="100px" height="66px" class="upImg">');
                }else{
                    $(l).attr('src',value.url);
                }
            }else{
                layer.alert(value.msg,{icon:0});
            }
//            $('#upload_file_three').hide();
        },
        'onError':function(err)
        {
            layer.alert(err);
        }

    });

    $('.save-title').click(function()
    {
        var title = $('#title').val();
        var id = $('.hidden').text();
        var mid = <?php echo $this->mid;?>;
        $.ajax
        ({
            type:'get',
            url:"/version/screen/doUpdateGuide/mid/"+mid+'/title/'+title+'/id/'+id,
            success:function(data)
            {
                if(data == 200){
                    alert('修改成功');
                }else{
                    alert('修改失败');
                }
            }
        })
    });

    $('.save-pic-true').click(function()
    {
        var id = $('.hidden').text();
        var mid = <?php echo $this->mid;?>;
        var pic_true = $('#main').children('img').attr('src');
        if(empty(pic_true) || pic_true.length<1){
            alert('您还没有上传新的选中图片');
            return false;
        }
        $.ajax
        ({
            type:'get',
            data:{'pic_true':pic_true,'id':id},
            url:"/version/screen/doUpdateGuide/mid/"+mid,
            success:function(data)
            {
                if(data == 200){
                    alert('修改成功');
                    window.location.reload();
                }else{
                    alert('修改失败');
                }
            }
        })
    });

    $('.save-pic-false').click(function()
    {
        var id = $('.hidden').text();
        var mid = <?php echo $this->mid;?>;
        var pic_false = $('#main-false').children('img').attr('src');
        if(empty(pic_false) || pic_false.length<1){
            alert('您还没有上传新的选中图片');
            return false;
        }
        $.ajax
        ({
            type:'get',
            data:{'pic_false':pic_false,'id':id},
            url:"/version/screen/doUpdateGuide/mid/"+mid,
            success:function(data)
            {
                if(data == 200){
                    alert('修改成功');
                    window.location.reload();
                }else{
                    alert('修改失败');
                }
            }
        })
    });

    $('.save-pic-three').click(function()
    {
        var id = $('.hidden').text();
        var mid = <?php echo $this->mid;?>;
        var pic_false = $('#main-false').children('img').attr('src');
        if(empty(pic_false) || pic_false.length<1){
            alert('您还没有上传新的选中图片');
            return false;
        }
        $.ajax
        ({
            type:'get',
            data:{'pic_false':pic_false,'id':id},
            url:"/version/screen/doUpdateGuide/mid/"+mid,
            success:function(data)
            {
                if(data == 200){
                    alert('修改成功');
                    window.location.reload();
                }else{
                    alert('修改失败');
                }
            }
        })
    });

    function showTemplate(obj)
    {

        var templateId = $('#template  option:selected').val();
        switch (templateId)
        {
            case '1' :
                $('.templatePic').children('img').attr('src','http://117.131.17.105:8083/file/template/t01.png');
                break;
            case '2' :
                $('.templatePic').children('img').attr('src','http://117.131.17.105:8083/file/template/t02.png');
                break;
            case '3' :
                $('.templatePic').children('img').attr('src','http://117.131.17.105:8083/file/template/t03.png');
                break;
            case '4' :
                $('.templatePic').children('img').attr('src','http://117.131.17.105:8083/file/template/t04.png');
                break;
            case '5' :
                $('.templatePic').children('img').attr('src','http://117.131.17.105:8083/file/template/t05.png');
                break;
            case '6' :
                $('.templatePic').children('img').attr('src','http://117.131.17.105:8083/file/template/t06.png');
                break;
            case '7' :
                $('.templatePic').children('img').attr('src','http://117.131.17.105:8083/file/template/t07.png');
                break;
            case '8' :
                $('.templatePic').children('img').attr('src','http://117.131.17.105:8083/file/template/t08.png');
                break;
            case '9' :
                $('.templatePic').children('img').attr('src','http://117.131.17.105:8083/file/template/t09.png');
                break;
            case '10' :
                $('.templatePic').children('img').attr('src','http://117.131.17.105:8083/file/template/t10.jpg');
                break;

        }
    }

    $('.save-template').click(function()
    {
        /*var templateId = $('#template  option:selected').val();
        var id = $('.hidden').text();
        var oldTemplateId = $('.oldTemplate').text();
        if(templateId == '0'){
            alert('您没有选择要修改的屏幕模板');
            return false;
        }else if(templateId == oldTemplateId){
            alert('您选择要修改的屏幕模板和之前一样');
            return false;
        }else{
            $.ajax
            ({
                type:'get',
                data:{'templateId':templateId,'id':id},
                url:"/version/screen/doUpdateGuide/mid/"+mid,
                success:function(data)
                {
                    if(data == 200){
                        alert('修改成功');
                        window.location.reload();
                    }else{
                        alert('修改失败');
                    }
                }
            })
        }*/
        var templateId = $('#template  option:selected').val();
        var id = $('.hidden').text();
        var mid = <?php echo $this->mid;?>;
        var oldTemplateId = $('.oldTemplate').text();
        if($('#main').children('img').length>0){
            var pic_true = $('#main').children('img').attr('src');
        }else{
            var pic_true = $('.old_pic_true').attr('src');
        }
        if($('#main-false').children('img').length>0){
            var pic_false = $('#main-false').children('img').attr('src');
        }else{
            var pic_false = $('.old_pic_false').attr('src');
        }
    if($('#main-three').children('img').length>0){
        var pic_three = $('#main-three').children('img').attr('src');
    }else if($('.old_pic_three').length>0){
        var pic_three = $('.old_pic_three').attr('src');
    }else{
         var pic_three = '0';
    }
        //alert(pic_three);return fasle;
        var title = $('#title').val();
        if(title.length<1){
            title = $('.old_title').text();
        }
        if(templateId == '0'){
            templateId = oldTemplateId;
        }else if(templateId == oldTemplateId){
            templateId = oldTemplateId;
        }
        var focus = $("input[name=focus]:checked").val();
        if(focus==undefined){
            focus=$('.old_focus').html();
            if(focus=='焦点未选中'){
                focus='0';
            }else{
                focus='1';
            }
        }
        $.ajax
        ({
            type:'get',
            data:{'focus':focus,'templateId':templateId,'id':id,'title':title,'pic_true':pic_true,'pic_false':pic_false,'oldTemplateId':oldTemplateId,'pic_three':pic_three},
            url:"/version/screen/doUpdateGuide/mid/"+mid,
            success:function(data)
            {
                console.log(data);
                if(data == 200){
                    alert('修改成功');
                    window.location.reload();
                }else{
                    alert('修改失败');
                }
            }
        })



    })
</script>

