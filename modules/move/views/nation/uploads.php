<style type="text/css">
    .up-main li{
        float: left;
        margin-right: 10px;
    }
    .up-h-1,.up-h-2,.up-h-8,.up-h-9{background-color:#fff;width:75px;height:150px;}
    .up-h-8,.up-h-9{width:150px;}
    .up-h-2{margin-top:10px;}
    .mt5{margin-top:10px;}
    .mr5{margin-right:5px;}
    .up-h-3,.up-h-7{width:150px;height:310px;background-color:#fff;}
    .up-h-4{width:310px;height:150px;background-color:#fff;}
    .up-h-5,.up-h-6{width:150px;background-color:#fff;height:150px;}
    <?php echo '#'.$address?>{position: relative;}
    #seupload_file{background-color:#000;cursor:pointer;position: absolute;top:0;left:0;}
    #seupload_file object{left:0;top:0;}
    .myt{text-align:center;position:relative;
        border: 1px solid #787878;}
    .myt1{text-align:center;position:relative;border: 1px solid #787878;}
    .myt1 span{display: inline-block;width:70px;height:25px;position: absolute;top:0;left:0;}
    .myt span{display: inline-block;width:70px;height:25px;position: absolute;top:0;left:0;}
    #page span {margin: 5px;}
    .charging{display: none;}
    <!--    --><?php
//      if($ui[$address][0]['tType']== 1 || $ui[$address][0]['tType']==3){
//       echo '#title{width:800px;};
//          #ybutton{display:block;}
//       ';
//       }else{
//       echo '#title{width:100%;};
//          #ybutton{display:none;}
//       ';
//      }
//    ?>
</style>
<?php
$admin = $this->getMvAdmin();
?>
<table class="mtable" width="100%" cellspacing="0" cellpadding="10">
    <tr>
        <td width="100" align="right">上传类型：</td>
        <td>
            <select name="setType" class="form-input w300" id="setType" onchange="aa()">
                <option value="0">请选择</option>
                <option <?php if($tType==1){echo "selected=selected"; } ?> value="1" >跳转牌照方客户端</option>
                <option <?php if($tType==3){echo "selected=selected"; } ?> value="3">应用商城</option>
                <option <?php if($tType==4){echo "selected=selected"; } ?> value="4">自有节目</option>
                <option <?php if($tType==5){echo "selected=selected"; } ?> value="5">全屏大图</option>
                <option <?php if($tType==6){echo "selected=selected"; } ?> value="6">二级专题页</option>
                <option <?php if($tType==7){echo "selected=selected"; } ?> value="7">咪咕音乐</option>
                <option <?php if($tType==8){echo "selected=selected"; } ?> value="8">咪咕视讯</option>
                <option <?php if($tType==9){echo "selected=selected"; } ?> value="9">咪咕学堂</option>
                <option <?php if($tType==10){echo "selected=selected"; } ?> value="10">糖果乐园</option>
                <option <?php if($tType==11){echo "selected=selected"; } ?> value="11">咪咕爱唱</option>
                <option <?php if($tType==12){echo "selected=selected"; } ?> value="12">和动漫</option>

            </select>
        </td>
    </tr>
    <tr id="seshow" style="display:none">
        <td width="100" align="right">牌照方：</td>
        <td>
            <select name="cp" class="form-input w300" id="secp">
                <option value="0">请选择</option>
                <option <?php if($cp==1){echo "selected=selected"; } ?> value="1">华数客户端</option>
                <option <?php if($cp==2){echo "selected=selected"; } ?> value="2">百视通客户端</option>
                <option <?php if($cp==3){echo "selected=selected"; } ?> value="3">未来电视</option>
                <option <?php if($cp==4){echo "selected=selected"; } ?> value="4">南传</option>
                <option <?php if($cp==5){echo "selected=selected"; } ?> value="5">芒果</option>
                <option <?php if($cp==6){echo "selected=selected"; } ?> value="6">国广</option>
                <option <?php if($cp==7){echo "selected=selected"; } ?> value="7">银河</option>
            </select>
        </td>
    </tr>
    <tr>
        <td width="100" align="right">标题：</td>
        <td><input type="text" name="title" id="setitle" value="<?php if($type==99){ echo !empty($ui[$address][$fid]['title'])?$ui[$address][$fid]['title']:''; }else{
                echo !empty($xiaotu[$address][$fid]['title'])?$xiaotu[$address][$fid]['title']:''; } ?>" class="form-input">
        </td>
    </tr>
    <tr class="fenlei" style="display:none">
        <td width="100"></td>
        <td id="fenlei" align="center"></td>
    </tr>
    <tr class="page" style="display:none">
        <td colspan="2" align="center"><div id="page"></div></td>
    </tr>
    <tr>
        <td width="100" align="right">action：</td>
        <td><input type="text" name="action" id="seaction" value="<?php if($type==99){ echo !empty($ui[$address][$fid]['action'])?$ui[$address][$fid]['action']:''; }else{
                echo !empty($xiaotu[$address][$fid]['action'])?$xiaotu[$address][$fid]['action']:''; } ?>" class="form-input"></td>
    </tr>
    <tr>
        <td width="100" align="right">param：</td>
        <td><input type="text" name="param" id="separam" value="<?php if($type==99){ echo !empty($ui[$address][$fid]['param'])?$ui[$address][$fid]['param']:''; }else
            { echo !empty($xiaotu[$address][$fid]['param'])?$xiaotu[$address][$fid]['param']:''; }?>" class="form-input"></td>
    </tr>
    <tr>
        <td align="right" valign="top">图片上传：</td>
        <td>
            <div class="seup-main" id="semain">
                <span>请上传宽为<?php //echo $w;?>，高为<?php //echo $h;?>的图片！</span>
                <?php echo $html;?>

            </div>
        </td>
    </tr>
    <tr>
        <td align="center" colspan="2">
            <?php
                if(!empty($ui[$address][$fid]['flag'])){
                    if($ui[$address][$fid]['flag']==1){
                        echo '<input type="button" value="审核中" class="btn">';
                    }else{
                        echo '<input type="button" value="提交审核" class="btn save2">';
                    }

                }else{
                    echo '<input type="button" value="提交审核" class="btn save2">';
                }
            ?>
            <!--<input type="button" value="保存信息" class="btn save2">-->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="button" value="取消" class="gray">
        </td>
    </tr>
</table>

<input type="hidden" name="sekey" id="setupian" value="<?php if($type==99){ echo !empty($ui[$address][$fid]['pic'])?$ui[$address][$fid]['pic']:''; }else
{ echo !empty($xiaotu[$address][$fid]['pic'])?$xiaotu[$address][$fid]['pic']:''; }?>">
<input type="hidden" name="seid" value="<?php if($type==99){ echo !empty($ui[$address][$fid]['id'])?$ui[$address][$fid]['id']:''; }else
{ echo !empty($xiaotu[$address][$fid]['id'])?$xiaotu[$address][$fid]['id']:''; }?>">
<input type="hidden" name="seposition" id="seposition" value="<?php echo $address;?>">
<input type="hidden" name="setype" id="setype" value="<?php echo $type;?>">
<input type="hidden" name="secid" id="secid" value="<?php echo $cid;?>">
<!--<input type="hidden" name="type" id="type" value="--><?php //echo !empty($ui[$address][$fid]['type'])?$ui[$address][$fid]['type']:''?><!--">-->
<script type="text/javascript">

var z = $("#setType").val();
if(z == 1){
    $("#seshow").show();
}
if(z == 3){
    $("#seshow").hide();
    $("#yingyong").show();
}
if(z == 4){
    $("#show").hide();
}
if(z == 5){
    $("#seshow").hide();
    $(".charging").show();
    $('#ybutton').css('display','none');
    $('#param').css('width','100%');
    $('#pbutton').css('display','none');
}
if(z == 6){
    $("#show").hide();
}
function aa(){
    var zhi = $("#setType").val();
    if(zhi == 0){
        $('#title').css('width','100%');
        $('#ybutton').css('display','none');
        $('#fenlei').empty();
        $('#page').empty();
        $('.fenlei').css('display','none');
        $('.page').css('display','none');
        $(".charging").hide();
        $("#aaa").text("URL：");
    }
    if(zhi==1){
        $("#seshow").show();
        $("#yingyong").hide();
        //$("#dianbo").show();
        $("#dian").removeAttr("checked");
        $("#hui").removeAttr("checked");
        $('#title').css('width','800px');
        $('#ybutton').css('display','block');
        $('#fenlei').empty();
        $('#page').empty();
        $('.fenlei').css('display','none');
        $('.page').css('display','none');
        $(".charging").hide();
        $("#aaa").text("URL：");
        $('#param').css('width','100%');
        $('#pbutton').css('display','none');
    }
    if(zhi==3){
        $("#yingyong").show();
        $("#huibo").hide();
        $("#dianbo").hide();
        $("#seshow").hide();
        $('#title').css('width','800px');
        $('#ybutton').css('display','block');
        $('#fenlei').empty();
        $('#page').empty();
        $('.fenlei').css('display','none');
        $('.page').css('display','none');
        $(".charging").hide();
        $("#aaa").text("URL：");
        $('#param').css('width','100%');
        $('#pbutton').css('display','none');
    }
    if(zhi==2){
        $("#seshow").hide();
        $("#yingyong").hide();
        $("#dianbo").hide();
        $("#huibo").hide();
        $('#title').css('width','100%');
        $('#ybutton').css('display','none');
        $('#fenlei').empty();
        $('#page').empty();
        $('.fenlei').css('display','none');
        $('.page').css('display','none');
        $(".charging").hide();
        $("#aaa").text("URL：");
        $('#param').css('width','100%');
        $('#pbutton').css('display','none');
    }
    if(zhi==4){
        $("#seshow").hide();
        $("#yingyong").hide();
        $("#dianbo").hide();
        $("#huibo").hide();
        $('#title').css('width','100%');
        $('#ybutton').css('display','none');
        $('#fenlei').empty();
        $('#page').empty();
        $('.fenlei').css('display','none');
        $('.page').css('display','none');
        $(".charging").hide();
        $("#aaa").text("URL：");
        $('#param').css('width','100%');
        $('#pbutton').css('display','none');
    }
    if(zhi == 5){
        $("#seshow").hide();
        $("#yingyong").hide();
        $(".charging").show();
        $("#aaa").text("资产ID：");
        $('#ybutton').css('display','none');
        $('#param').css('width','100%');
        $('#pbutton').css('display','none');
    }
    if(zhi == 6){
        $("#seshow").hide();
        $('#title').css('width','100%');
        $('#ybutton').css('display','none');
        $('#param').css('width','800px');
        $('#pbutton').css('display','block');
    }
}
function dianbo(){
    $("#dianbo").show();
    $("#huibo").hide();
}
function huibo(){
    $("#huibo").show();
    $("#dianbo").hide();
}
$('.up-main li:last-child').css('margin-right','0');
$(function(){
    $('.seup-main').find('#<?php echo $address?>').find('a').replaceWith('<input type="file" id="seupload_file">');
});
var start;
$('#seupload_file').uploadify({
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
    'sizeLimit': 10240000000,//限制上传的图片不得超过200KB
    'onSelect'      : function(file){

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
    'onUploadStart' :function(file){
        start = layer.load(0, {icon: 16,shade: [0.3,'#000']});
    },
    'onUploadSuccess' : function(file, data, response) {//每次成功上传后执行的回调函数，从服务端返回数据到前端
        layer.close(start);
        var value = eval('('+data+')');
        if(value.code == 200){
            $('input[name=sekey]').val(value.key);
            var l = $('#semain').find('#<?php echo $address?>').find('img');
            if(l.length < 1){
                $('#semain').find('#<?php echo $address?>').append('<img src="'+value.url+'" width="100%" height="100%">');
            }else{
                $(l).attr('src',value.url);
            }
        }else{
            alert(2);
            layer.alert(value.msg,{icon:0});
        }
    },
    'onError':function(err){
        layer.alert(err);
    }
});

$('.save2').click(function(){
    var k = $(this);
    var G = {};
    //G.title = $('#title').val();
    // G.url = $('#url').val();
    G.position = $('input[name=seposition]').val();
    //G.key = $('input[name=key]').val();
    G.key = $('#setupian').val();
    // G.type = $('input[name=type]').val();
    //G.tType = $('#tType').val();
    G.id = $('input[name=seid]').val();
    G.type  = $('#setype').val();
    G.cid = $('#secid').val();

    G.tType  = $('#setType').val();
    G.title  = $('#setitle').val();
    G.action = $('#seaction').val();
    G.param  = $('#separam').val();
    G.cp     = $('#secp').val();
    G.user = "<?php echo $admin['username']?>";
    if(empty(G.tType)){
        layer.alert('上传类型不能为空',{icon:0});
        return false;
    }
    if(empty(G.title)){
        layer.alert('标题不鞥为空',{icon:0});
        return false;
    }
//        if(empty(G.cp)){
//            layer.alert('牌照方不能为空',{icon:0});
//            return false;
//        }
    if(empty(G.position)){
        layer.alert('系统错误1',{icon:0});
        return false;
    }

    if(empty(G.key)){
        layer.alert('系统错误2',{icon:0});
        return false;
    }
    if(empty(G.type)){
        layer.alert('系统错误3',{icon:0});
        return false;
    }
//        G.provinceCode = $('input[name=provinceCode]').val();
//        G.cityCode = $('input[name=cityCode]').val();
    //alert(G.provinceCode);
    //alert(G.cityCode);

    var load = layer.load(0, {icon: 16,shade: [0.3,'#000']});
    $.post('/move/nation/adds?mid=<?php echo $this->mid?>',G,function(d){
        if(d.code == 200){
            location.reload();
        }else{
            layer.close(load);
            layer.alert(d.msg);
        }
    },'json')
});
function validate_edit_logo() {
    debugger;
    var file = "file:///"+ $('#File1').val();
    if (!/.(gif|jpg|jpeg|png|gif|jpg|png)$/.test(file)) {
        alert("图片类型必须是.gif,jpeg,jpg,png中的一种")
        if (a == 1) {
            return false;
        }
    } else {
        var image = new Image();
        image.src = file;
        var height = image.height;//得到高
        var width = image.width;//得到宽
        var filesize = image.fileSize;//图片大小

        if (width > 80 && height > 80 && filesize > 102400) {
            alert('请上传80*80像素 或者大小小于100k的图片');
            if (a == 1) {
                return false;
            }
        }
        if (a == 1) {
            $("#img1").attr("src", file);
            return true;

        }
    }
}
$('body').on('click','.gray',function(){
    layer.closeAll();
});

/*var page_cur = 1; //当前页
var total_num, page_size, page_total_num;//总记录数,每页条数,总页数

function getData(page) { //获取当前页数据
    var tType = $('#tType').val();
    var val = $('#title').val();
    if(val =='') return false;
    //alert(tType);
    if(tType ==1){
        $.ajax({
            type: 'GET',
            url: '/move/nation/sousuo?mid='+"<?php echo $_GET['mid'];?>"+'&val='+val+'&type='+tType,
            data: {'page': page - 1},
            dataType: 'json',
            success: function(json) {
                $("#fenlei").empty();
                total_num = json.total_num;//总记录数
                page_size = json.page_size;//每页数量
                page_cur = page;//当前页
                page_total_num = json.page_total_num;//总页数
                var li = '<table width="700px" border="1"><tr><th>vid</th><th>title</th><th>type</th><th>cate</th></tr>';
                var list = json.list;
                $.each(list, function(index, array) { //遍历返回json
                    li += "<tr><td>"+array['vid']+"</td><td>"+array['title']+"</td><td>"+array['type']+"</td><td>"+array['cate']+"</td></tr>";
                });
                if(list == '') li +='<tr><td  colspan="4" align="center">暂无数据</td></tr>';
                li += '</table>'
                $("#fenlei").append(li);
            },
            complete: function() {
                getPageBar();//js生成分页，可用程序代替
            },
            error: function() {
                alert("数据异常,请检查是否json格式");
            }
        });
    }else{
        $.ajax({
            type: 'GET',
            url: '/move/nation/sousuo?mid='+"<?php echo $_GET['mid']?>"+'&val='+val+'&type='+tType,
            data: {'page': page - 1},
            dataType: 'json',
            success: function(json) {
                $("#fenlei").empty();
                total_num = json.total_num;//总记录数
                page_size = json.page_size;//每页数量
                page_cur = page;//当前页
                page_total_num = json.page_total_num;//总页数
                var li = '<table width="700px" border="1"><tr><th>appId</th><th>name</th><th>typeId</th><th>typeName</th></tr>';
                var list = json.list;
                $.each(list, function(index, array) { //遍历返回json
                    li += "<tr><td>"+array['appId']+"</td><td>"+array['name']+"</td><td>"+array['typeId']+"</td><td>"+array['typeName']+"</td></tr>";
                });
                if(list == '') li +='<tr><td  colspan="4" align="center">暂无数据</td></tr>';
                li += '</table>';
                $("#fenlei").append(li);
            },
            complete: function() {
                getPageBar();//js生成分页，可用程序代替
            },
            error: function() {
                alert("数据异常,请检查是否json格式");
            }
        });
    }
}

function getPageBar() { //js生成分页
    if (page_cur > page_total_num)
        page_cur = page_total_num;//当前页大于最大页数
    if (page_cur < 1)
        page_cur = 1;//当前页小于1
    page_str = "<span>共" + total_num + "条</span><span>" + page_cur + "/" + page_total_num + "</span>";
    if (page_cur == 1) {//若是第一页
        page_str += "<span>首页</span><span>上一页</span>";
    } else {
        page_str += "<span><a href='javascript:void(0)' data-page='1' onclick=getData(1)>首页</a></span><span><a href='javascript:void(0)' data-page='" + (page_cur - 1) + "' onclick=getData("+ (parseInt(page_cur) - 1) +")>上一页</a></span>";
    }
    if (page_cur >= page_total_num) {//若是最后页
        page_str += "<span>下一页</span><span>尾页</span>";
    } else {
        page_str += "<span><a href='javascript:void(0)' data-page='" + (parseInt(page_cur) + 1) + "' onclick=getData("+ (parseInt(page_cur) + 1) +") >下一页</a></span><span><a href='javascript:void(0)' data-page='" + page_total_num + "'  onclick=getData("+ (page_total_num) +")>尾页</a></span>";
    }
    $("#page").html(page_str);
}*/

$('#ybutton').click(function(){
    $('.fenlei').css('display','');
    $('.page').css('display','');
    $('#fenlei').empty();
    $('#page').empty();
    getData(1);
    return false;
});


</script>
