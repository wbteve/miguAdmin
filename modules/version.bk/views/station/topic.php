
<?php
if (!empty($html)) {
        $a = "/<style[\s\S]*?<\/style>/";
        preg_match_all($a, $html, $matches);

        $html = str_replace($matches[0][0], "", $html);
        $html = str_replace("131px", "95px", $html);
}
?>

<style>
.layui-layer-dialog{
	min-width:340px;
}
.layui-layer-dialog .layui-layer-content{
	padding: 30px 20px 40px 30px;
}
.layui-layer-title{
	background:#A3BBD5;
	    padding: 0 20px 0 10px;
	    text-align: center
}
.layui-layer-content{
	background: #F1FDFF;
	
}
.layui-layer-btn{
	background: #F1FDFF;
}
.layui-layer-btn a{
	padding:0px;
	width:90px;
	height:20px;
	line-height:20px;
	background: url("/file/u116.png") no-repeat;
	border-radius: 2px;
}
.layui-layer-btn .layui-layer-btn1{
	background: url("/file/u1971.png") no-repeat;
	border-radius: 2px;
}
.mt10 {
                                margin-left: 10px;
                        }
                        .menus {
                                margin-top: 5px;
                                margin-left: 10px;
                        }
                        .topPic {
                                position: relative;
                                border-radius: 15px;
                                margin-top: 15px;
                                background: #F2F2F2;
                        }
                        .centerTop {
                                width: 158px;
                                height: 400px;
                                float: left;
                                margin-left: 15px;
                        }
                        .centerTopApp {
                                width: 158px;
                                height: 280px;
                                float: left;
                                margin-left: 15px;
                        }
                        .top_app {
                                width: 158px;
                                height: 28px;
                                margin-top: 20px;
                                background: #E2EEFB;
                                border-radius: 10px;
                        }
                        .centerTopApp img {
                                width: 158px;
                                height: 55px;
                        }

                        .appImg img {
                                width: 25px;
                                height: 25px;
                        }

                        .appImg {
                                position: absolute;
                                left: 15px;
                                top: 5px;
                        }
                        .appTitle {
                                position: absolute;
                                left: 15px;
                                top: 32px;
                        }
                        .editTop:hover {
                                cursor: pointer;
                        }
                        .delTop:hover {
                                cursor: pointer;
                        }

                        .lit {
                                position: relative;
                                width: 158px;
                                height: 55px;
                                border-radius: 10px;
                                margin-top: 5px;
                                background:#F2F2F2;
                        }
                        .centerTop .lit img {
                                width: 158px;
                                height: 55px;
                        }
                        .title {
                                position: absolute;
                                top: 15px;
                                left: 5px;
                        }
                        .editTop {
                                position: absolute;
                                top: 0px;
                                right: 0px;
                                z-index: 9999;
                                border-radius: 5px;
                                width: 60px;
                                height: 20px;
                                background: #B9B9B9;
                                color: white;
                        }
                        .delTop {
                                position: absolute;
                                top: 35px;
                                right: 0px;
                                z-index: 9999;
                                border-radius: 5px;
                                width: 60px;
                                height: 20px;
                                background: #B9B9B9;
                                color: white;
                        }
                        .centerTop img {
                                width: 158px;
                                height: 90px;
                        }
                        .fl img {
                                width: 139px;
                                height: 220px;
                        }
                        .ui-a {
                                width: 139px;
                                height: 220px;
                        }
                        .test2 {
                                height: 30px;
                                line-height: 25px;
                        }
                        .menus span {
                                font-family: 黑体;
                        }
                        .menus ul {
                                font-family: 宋体;
                        }
    /*a{font-size: 12px;font-family: "microsoft yahei";font-weight: bold;}*/
    .ui-a{position: relative;}
    .ui-b{position: relative;}
    .ui-a a{position: absolute;top:0;left:0;background-color:#898989;padding:5px 10px;font-size: 12px;font-family: "microsoft yahei";font-weight: bold;color:white}
    .ui-a a img{position: absolute;top:0;left:0;background-color:#898989;}/*padding:5px 10px;*/
    .mt6{margin-top:10px;}
    .ui-b a{position: absolute;top:0;left:0;background-color:#898989;padding:5px 10px;}
    .mt6{margin-top:10px; float:left;}
    .mt7{margin-top:10px; float:left;}
    .cc{margin-left: 10px;}
    #overlay{width:1300px;height:700px;position:absolute;z-index: 2}
    .page{
        width:800px;
    }
    a{text-decoration:none}
    .status_back{
        display:none;
    }
    .yiji{
        width: 90px;
        height: 25px;
        background: inherit;
        background-color: rgba(201, 201, 201, 1);
        box-sizing: border-box;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(161, 161, 161, 1);
        border-radius: 2px;
        -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.349019607843137);
        -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.349019607843137);
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.349019607843137);
        color: #333333;
    }
    .erji{
        width: 90px;
        height: 25px;
        background: inherit;
        background-color: rgba(242, 242, 242, 1);
        box-sizing: border-box;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(228, 228, 228, 1);
        border-radius: 2px;
        -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.349019607843137);
        -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.349019607843137);
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.349019607843137);
        color: #333333;
    }
    .edit{
        border-width: 0px;
        /*position: absolute;
        left: 0px;
        top: 0px;*/
        width: 20px;
        height: 20px;
        margin-top:4px;
    }
    .dele{
        border-width: 0px;
        /*position: absolute;
        left: 0px;
        top: 0px;*/
        width: 20px;
        height: 20px;
        margin-top:4px;
    }
    .menubox {
        padding-left:8px;
        padding-right:8px;
        margin-right: 15px;
        width:270px;
        min-height: 845px;
        float: left;
        overflow: hidden;
        background: #f7fbfc;
        border-bottom: 1px solid #c2d1d8;
        border-right: 1px solid #c2d1d8;
        -webkit-box-shadow: 1px 1px 0 0 #fff;
        box-shadow: 1px 1px 0 0 #fff;
    }
    .menubox ul li {
        border-bottom: 0px solid #d9e4ea;
    }

    .menubox ul li span {
        display: block;
    }

    .active{
        display:block;
    }
    .edit{
        display:block;
        float:right;
    }
    .dele{
        display:block;
        float:right;
    }
    .jiaoFlag{
        font-size:14px;
    }
    /*.down{
        background:#red;
    }*/
    .selected{
        /*background:#ccc;*/
    }
    .one{width:24px;height:23px;}
    .two{width:24px;height:23px;}
    .stationName{position: relative;}
    .menu ul li ul li{height:30px;line-height: 30px;font-size: 14px;}
    .yijiName {
        font-size: 15px;
        height: 27px;
        line-height: 30px;
    }
    .mr10 {
        margin-right: 10px;
    }
    .topicTop{padding:10px 0px;}
    .topicBg{position: relative;}
    .topicBgEdit{
        /*width:200px;*/
        height:20px;
        /*border:1px solid #ccc;*/
        position: absolute;
       top: 45px;
                                left: 90px;
        text-align: center;
        line-height: 20px;
        color: black;

    }
.uploadify-button {
                                border-radius: 8px;
                        }
                        .swfupload {
                                top: 0px;
                                left: 0px;
                        }
</style>
<script type="text/javascript" src="/js/uploadify/jquery.uploadify.min.js"></script>
<div style="width:5000px;">
    <div class="left">
        <?php
        //        $nav = $this->getVersitelist();
        if($_SESSION['auth']=='1'){
            $nav = $this->getVersitelist();
        }else{
            $uid = $_SESSION['userid'];
            $nav = $this->getSitelist($uid);
        }
        $admin = $this->getMvAdmin();
        $admin = $this->getMvAdmin();
        $adminLeftOneName = !empty($_GET['adminLeftOneName'])?$_GET['adminLeftOneName']:'';
        $adminLeftTwoName = !empty($_GET['epg'])?$_GET['epg']:$_GET['adminLeftTwoName'];
        $adminLeftOne = !empty($_GET['adminLeftOne'])?$_GET['adminLeftOne']:'';
        $adminLeftTwo = !empty($_GET['adminLeftTwo'])?$_GET['adminLeftTwo']:'';
        ?>
        <div class="admin_left">
            <div class="menubox">
                <ul id="J_navlist">
                    <?php
                    if(!empty($nav)){
                        $a = -1;
                        foreach($nav as $key=>$value){
                            if($value->pid == 0 && $value->type==0 && $value->protype==1){
                                $a++;
                                ?>
                                <li class="<?php echo !empty($_GET['nid']) && $_GET['nid'] == $value['id']?'thismenu':''?> stationName">
                                    <span><img src="../../../file/button/station_true.png" onclick="one(this)" class="one" ><a><?php echo $value['name']?></a></span></li>
                                <ul>
                                    <?php
                                    $data = VerSiteListManager::getList($value['id']);
                                    if(!empty($data)){
                                        foreach($data as $k=>$v){
                                            if($v['name']=='专题'){
                                                ?>
                                                <li class="menu">
                                                    <!--<span>&nbsp;&nbsp;<?php //echo $v['name']?></span>-->
                                                    <!--&nbsp;&nbsp;&nbsp;&nbsp;--><a gid="<?php echo $v['id']?>" class="guide yiji addYiJi" style="text-decoration: none;">添加一级</a>
                                                    <ul>
                                                        <?php
                                                        $list = VerSiteListManager::getList($v['id']);
                                                        if(!empty($list)){
                                                            $b=-1;
                                                            foreach($list as $key=>$val){
                                                                $b++;
                                                                ?>
                                                                <li >
                                                                                    <span class="test">&nbsp;&nbsp;&nbsp;&nbsp;
<img src="../../../file/button/folder_true.png" onclick="two(this)" class="two" >
                                                                                        <a class="yijiName"><?php echo $val['name']?></a>&nbsp;&nbsp;

                                                                                        <!--                                                                                        <input type="button" des="--><?php //echo $val['id']?><!--" class="dele" value="删">&nbsp;&nbsp;-->
                                                                                        <img src="../../file/button/del.png" title="删除" des="<?php echo $val['id'];?>" class="dele" style="visibility:hidden;">
                                                                                        <!--                                                                                        <input type="button" des="--><?php //echo $val['id']?><!--" class="edit" value="编">-->
                                                                                        <img src="../../file/button/edit.png" title="编辑" des="<?php echo $val['id']?>" class="edit" style="visibility:hidden;">
                                                                                        <span style="display: block;float: right;margin-right: 20px;margin-top:5px;"><?php echo $val['id'];?></span>
</span>

                                                                    <ul>
                                                                        <?php
                                                                        $tmp = VerSiteListManager::getList($val['id']);
                                                                        if(!empty($tmp)) {
                                                                            $c = -1;
                                                                            foreach($tmp as $l){
                                                                                $c++;
                                                                                ?>

                                                                                <li class="test2">
                                                                                    <a href="<?php echo $l['url'] == '#'?'#':Yii::app()->createUrl($l['url'],array('mid'=>$_GET['mid'],'nid'=>$l['id'],'type'=>$l['type'],'top'=>$value['name'],'par'=>$val['name'],'son'=>$l['name'],'one'=>$a,'two'=>$b,'three'=>$c,'leftNavFlag'=>'1','adminLeftNavFlag'=>1,'adminLeftOne'=>$adminLeftOne,'adminLeftTwo'=>$adminLeftTwo,'adminLeftOneName'=>$adminLeftOneName,'adminLeftTwoName'=>$adminLeftTwoName))?>">
                                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                        <?php //echo $l['id']?>
                                                                                        <?php echo $l['name']?>
                                                                                    </a>
                                                                                    &nbsp;&nbsp;
                                                                                    <!--<input type="button" des="<?php //echo $l['id']?>" class="dele" value="删">&nbsp;&nbsp;-->
                                                                                    <!--<input type="button" des="<?php //echo $l['id']?>" class="edit" value="编">-->
                                                                                    <img src="../../file/button/del.png" title="删除" des="<?php echo $l['id'];?>" class="dele" style="visibility:hidden;">
                                                                                    <img src="../../file/button/edit.png" title="编辑" des="<?php echo $l['id'];?>" class="edit" style="visibility:hidden;">
                                                                                    <span style="display: block;float: right;margin-right: 20px;"><?php echo $l['id'];?></span>
                                                                                </li>
                                                                                <?php
                                                                            }
                                                                            ?>

                                                                            <?php
                                                                        }?>
                                                                    </ul>

                                                                </li>
                                                                <!--<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a gid="<?php //echo $val['id']?>" class="guide erji">添加二级</a></li>-->
                                                                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img gid="<?php echo $val['id']?>" class="adderji" title="添加二级" src="../../file/button/add_garden.png" style="float:right;"></li>
                                                                <?php
                                                            }

                                                        }
                                                        ?>

                                                    </ul>
                                                    </span>
                                                </li>
                                                <?php
                                            }

                                        }
                                    }
                                    ?>

                                </ul>
                                <?php
                            }
                        }
                    }
                    ?>
                </ul>
                <script type="text/javascript" language="javascript">
                    navList(12);
                </script>
            </div>
        </div>
    </div>
    <div class="mt10" style="float:left;">
        <div style='margin-bottom:10px;'>
            <span><?php echo $adminLeftOneName;echo '>';?></span>
            <span><?php echo $adminLeftTwoName;echo '>';?></span>
            <span><?php if(!empty($_GET['top'])){echo $_GET['top'];echo '>';}?></span>
            <span><?php if(!empty($_GET['par'])){echo $_GET['par'];echo '>';}?></span>
            <span><?php if(!empty($_GET['son'])){echo $_GET['son'];}?></span>
        </div>
        <div>
                <table cellspacing="0" cellpadding="10" class="mtable center" width="800px">
           <tr <?php echo !empty($bkimg->attributes['url'])?"style='display:none;'":"style='display:block;'"?>><td colspan="2" style="text-align: left;padding-left: 15px;height:30px;">
            <input type="button" class="btn" value="引用专题" style='display:none;'>
            <?php
//            $res['status'] = ['1','2'];
            if(in_array('1',$res['status']) || $_SESSION['auth']=='1'){
                ?>
                <input type="button" class="btn add_topic" value="新建专题" <?php echo !empty($bkimg->attributes['url'])?"style='display:none;'":"style='display:block;'"?> >
                <?php
            }
            ?>
        </div>

        <?php
        if(!empty($bkimg->attributes['type'])){
        ?>

        <form action="" method="post" enctype="multipart/form-data">
                 </td></tr>
                  <tr><td colspan="2" style="text-align: left;padding-left: 15px;height:30px;">
            <input type="hidden" value="<?php echo $_REQUEST['nid']?>" name="gid">
            <input type="hidden" name="url" value="" class="upImg">
            <div class="topicTop">
                <span>专题模板：</span>
                <select name="type" class="form-input w100" id="type">
                    <option value="0">请选择</option>
                    <option <?php $type = !empty($bkimg->attributes['type'])?$bkimg->attributes['type']:'';if($type=='1'){echo "selected=selected"; } ?>  value="1" >模板1</option>
                    <option <?php $type = !empty($bkimg->attributes['type'])?$bkimg->attributes['type']:'';if($type=='2'){echo "selected=selected"; } ?>  value="2" >排行榜模板</option>
                </select>
                <span><input class="btn module" type="submit" value="保存修改"></span>
            </div>

           </td></tr>  <tr style = "height:152px;background:#F0FDFF ">
                    <td style="width:250px;">专题背景图</td>
                    <td style="text-align: left;padding-left: 15px;">
            <div class="topicBg" id="main">
                <img src="<?php echo !empty($bkimg->attributes['url'])?$bkimg->attributes['url']:'/file/5.png'?>" alt="" class="topicBgImg bg" width="216px" height="127px">
                <div class="up-main topicBgEdit" >
                    <input type="file" name="url" id="upload_file_true" placeholder="选择图片" value="">
                </div>
            </div>
</td>
                         <tr style = "height:275px;background:#x`E2EEFB ">
                    <td colspan="2" style="width:1795px;height:400px;overflow:auto;padding-top:15px;">
            <form>
                <?php
                }
                ?>

                <div>
                    <?php //echo $html;?>
                </div>

                <div>
                    <?php
                    if(!empty($topList)){
                        //var_dump($list);die;
                        foreach ($topList['list'] as $k=>$v) {
                            //var_dump($v[0]['id']);die;
                            ?>
                            <div class="centerTop">
                                <div class="topPic">
                                    <span class="editTop" onclick="editTop(this)" uiId="<?php /*var_dump($v);die;*/echo $v[0]['id']; ?>" position="<?php echo $v[0]['position']; ?>">修改</span>
                                    <!--<span class="delTop" onclick="delTop(this)" uiId="<?php //echo $v[0]['id'] ?>" position="<?php //echo $v[0]['position']; ?>">删除</span>-->
                                    <img src="<?php echo $v[0]['pic'] ?>" alt="" imgFlag="1" order='<?php echo $v[0]['scort'];?>' position="<?php echo $v[0]['position']; ?>">
                                </div>
                                <ul class='topUl'>
                                    <?php foreach ($v as $key=>$val) {
                                        if($key>0){
                                            ?>
                                            <li class="lit" style="background:white;">
                                                <span class="editTop" onclick="editTop(this)" uiId="<?php echo $val['id'] ?>" order='<?php echo $val['scort'];?>' position="<?php echo $v[0]['position']; ?>">修改</span>
                                                <!--<span class="delTop" onclick="delTop(this)" uiId="<?php //echo $val['id'] ?>" order='<?php //echo $val['scort'];?>' position="<?php //echo $v[0]['position']; ?>" >删除</span>-->
                                                <span class="title"><?php echo $val['title']; ?></span>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                            <?php
                            echo "<script>$('b').css({'float':'left','width':'200px'});</script>";
                        }
                    }
                    ?>
                    <?php
                    //if(!empty($list['res'])){
                    if(!empty($topList['res'])){
                    $list['res']=$topList['res'];
                    ?>
                    <div class="centerTopApp">
                        <div class="top_app">
                            应用排行榜
                        </div>
                        <ul class='topUl'>
                            <?php foreach ($list['res'] as $k=>$v){?>
                                <li class="lit" style="background:white;">
                                    <span class="editTop" appFlag="1" onclick="editTop(this)" uiId="<?php echo $v['id'] ?>" order='<?php echo $v['scort'];?>'>修改</span>
                                    <!--<span class="delTop" onclick="delTop(this)" uiId="<?php //echo $v['id'] ?>" order='<?php //echo $v['scort'];?>'>删除</span>-->
                                    <span class="appImg">
                <img src="<?php echo $v['pic'];?>" alt="" appFlag="1" onclick="addTop(this)" order="1">
            </span>
                                    <span class="appTitle"><?php echo $v['title']?></span>
                                </li>
                            <?php }?>
                            <?php
                            echo "</ul>
</div>";
                            }
                            ?>
                            <?php //var_dump($news);die;?>
                            <?php
                            if(!empty($news)){?>
                                <div class="newsCenter">
                                    <ul class="topUl">
                                        <?php foreach($news as $k=>$v){?>
                                            <li class="lit" style="background: #0b93d5;">
                                                <span class="editTop" onclick="editTop(this)" uiId="<?php echo $v['id'] ?>">修改</span>
                                                <span class="delTop" onclick="delTop(this)" uiId="<?php echo $v['id'] ?>">删除</span>
                                                <!--                            <img src="../../file/3.png" alt="" appFlag="1" onclick="addNews(this)" order="5">-->
                                                <span class="newsTitle" ><?php echo $v['title']?></span>
                                            </li>
                                        <?php }?>

                                    </ul>
                                </div>

                            <?php }?>

                            <?php echo $html; //echo "<script>$('b').css('float','left');</script>";?>
                    </div>
   </td>

                </tr>
            </table>
                </div>
    </div>
    <script>
        <?php
        if(empty($_GET['leftNavFlag'])){
            echo "$('.mt10').hide();";
        }
        ?>

        var adminLeftOne = "<?php echo $adminLeftOne;?>";
        var adminLeftTwo = "<?php echo $adminLeftTwo;?>";
        var adminLeftOneName = "<?php echo $adminLeftOneName;?>";
        var adminLeftTwoName = "<?php echo $adminLeftTwoName;?>";

        $('#upload_file_true').uploadify
        ({
            'auto': true,//关闭自动上传
            'buttonImage': '/file/u1892.png',
            'width': 32,
            'height': 30,
            'text-lieng':'center',
            'line-height':'19px',
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
                        $('.upImg').val(value.url);
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
        /*$('.topicBgEdit').click(function()
        {
            if($('.mtable').css('display') =='none'){
                $('.mtable').show();
            }else{
                $('.mtable').hide();
            }
        })*/

        $('.grey').click(function()
        {
            $('.mtable').hide();
        })

        $('.test').mousemove(function()
        {
            $(this).children('img').eq(1).css({"visibility":"visible"});
            $(this).children('img').eq(2).css({"visibility":"visible"});
        });

        $('.test').mouseout(function()
        {
            $(this).children('img').eq(1).css({"visibility":"hidden"});
            $(this).children('img').eq(2).css({"visibility":"hidden"});;
        });

        $('.test2').mousemove(function()
        {
            $(this).children('img').eq(0).css({"visibility":"visible"});
            $(this).children('img').eq(1).css({"visibility":"visible"});
        });

        $('.test2').mouseout(function()
        {
            $(this).children('img').eq(0).css({"visibility":"hidden"});
            $(this).children('img').eq(1).css({"visibility":"hidden"});
        });
        function yiji()
        {
            var maxAddYiJi = $('.menu').find('.yiji').length;
//            console.log(maxAddYiJi);
            if(maxAddYiJi>0){
                for(var i = 0 ; i<maxAddYiJi; i++){
                    var gid = $('.menu').find('.yiji').eq(i).attr('gid');
                    $('.stationName').eq(i).append('<img gid="'+gid+'" title="添加一级" class="addyiji" style="position: absolute;top:0px;left:250px;" src="../../file/button/add_garden.png">');
                }
                $('.menu').find('.yiji').remove();
            }
        }
        yiji();


        function two(obj)
        {
            if($(obj).parent().siblings('ul').css('display')=='block'){
                $(obj).parent().parent('li').siblings('li').removeClass('inactives');
                $(obj).addClass('inactives');
                $(obj).attr('src','../../../file/button/folder_false.png');
                $(obj).parent().siblings('ul').slideUp(100).children('li');
            }else{
                $(obj).parent().siblings('ul').slideDown(100).children('li');
                $(obj).attr('src','../../../file/button/folder_true.png');
            }
        }

        function one(obj)
        {
            if($(obj).parent().parent().next('ul').css('display')=='block'){
                $(obj).parent().parent().parent('li').siblings('li').removeClass('inactives');
                $(obj).addClass('inactives');
                $(obj).attr('src','../../../file/button/station_false.png');
                $(obj).parent().parent().next('ul').slideUp(100).children('li');

            }else{
                $(obj).parent().parent().next('ul').slideDown(100).children('li');
                $(obj).attr('src','../../../file/button/station_true.png');
            }
        }

        var leftNavFlag = "<?php echo !empty($_GET['leftNavFlag'])?$_GET['leftNavFlag']:'0';?>";
        if(leftNavFlag=='0'){
            var max = $('.one').length;
            for(var i = 0 ; i<max ; i++){
                $('.one').eq(i).parent().parent().parent('li').siblings('li').removeClass('inactives');
                $('.one').eq(i).addClass('inactives');
                $('.one').eq(i).attr('src','../../../file/button/station_false.png');
                $('.one').eq(i).parent().parent().next('ul').slideUp(100).children('li');

                var maxTwo = $('.one').eq(i).parent().parent().next('ul').find('.two').length;
                var $_this = $('.one').eq(i).parent().parent().next('ul').find('.two');
                for(var j = 0 ; j< maxTwo ; j++){
                    $_this.parent().parent('li').siblings('li').removeClass('inactives');
                    $_this.addClass('inactives');
                    $_this.attr('src','../../../file/button/folder_false.png');
                    $_this.parent().siblings('ul').slideUp(100).children('li');
                }
            }

        }else{
            var oneId = "<?php echo !empty($_GET['one'])?$_GET['one']:'0';?>";
            var twoId = "<?php echo !empty($_GET['two'])?$_GET['two']:'0';?>";
            var threeId = "<?php echo !empty($_GET['three'])?$_GET['three']:'0';?>";
            var max = $('.one').length;
            for(var i = 0 ; i<max ; i++){
                if(i == oneId){
                    $('.one').eq(oneId).parent().parent().next('ul').slideDown(100).children('li');
                    $('.one').eq(oneId).attr('src','../../../file/button/station_true.png');
                }else{
                    $('.one').eq(i).parent().parent().parent('li').siblings('li').removeClass('inactives');
                    $('.one').eq(i).addClass('inactives');
                    $('.one').eq(i).attr('src','../../../file/button/station_false.png');
                    $('.one').eq(i).parent().parent().next('ul').slideUp(100).children('li');
                }


                var maxTwo = $('.one').eq(i).parent().parent().next('ul').find('.two').length;
                var $_this = $('.one').eq(i).parent().parent().next('ul').find('.two');
                for(var j = 0 ; j< maxTwo ; j++){
                    if(j == twoId){
                        $('.two').eq(twoId).parent().siblings('ul').slideDown(100).children('li');
                        $('.two').eq(twoId).attr('src','../../../file/button/folder_true.png');
                    }else{
                        $_this.parent().parent('li').siblings('li').removeClass('inactives');
                        $_this.addClass('inactives');
                        $_this.attr('src','../../../file/button/folder_false.png');
                        $_this.parent().siblings('ul').hide();
                    }
                }

            }
            $('.one').eq(oneId).parent('span').parent().next('ul').children('li').children('ul').children('li').find('.two').eq(twoId).parent().siblings('ul').children('li').eq(threeId).css('background','#A3bAD5');
            $('.one').eq(oneId).parent('span').parent().next('ul').children('li').children('ul').children('li').find('.two').eq(twoId).parent().siblings('ul').children('li').eq(threeId).addClass('heightLight');
            checkTwo(twoId);
        }

        /*function checkTwo(twoId)
         {
         if($('.heightLight').parent('ul').css('display')=='none'){
         $('.heightLight').parent('ul').slideDown(100).children('li');
         $('.heightLight').parent('ul').attr('src','../../../file/button/folder_true.png');
         }
         }*/

        $('.adderji').click(function(){
            var gid = $(this).attr('gid');
            $.getJSON('<?php echo $this->get_url('station','topadd')?>', {gid: gid}, function (d) {
                if (d.code == 200) {
                    layer.open({
                        type: 1,
                        skin: 'layui-layer-rim', //加上边框
                        area: ['630px', '506px'], //宽高
                        content: d.msg
                    })
                } else {
                    layer.alert(d.msg, {icon: 0});
                }
            });
        })

        $('.addyiji').click(function(){
            var gid = $(this).attr('gid');
            $.getJSON('<?php echo $this->get_url('station','topadd')?>', {gid: gid}, function (d) {
                if (d.code == 200) {
                    layer.open({
                        type: 1,
                        skin: 'layui-layer-rim', //加上边框
                        area: ['630px', '506px'], //宽高
                        content: d.msg
                    })
                } else {
                    layer.alert(d.msg, {icon: 0});
                }
            });
        })

        if($('#type').val()=='2'){
            $('b').css({'float':'left','width':'200px'});
        }

        $('.dele').click(function(){
            var auth = "<?php echo $_SESSION['auth']?>";
            var flag = "<?php if(in_array('1',$res['status'])){echo 1;}?>";
            if(auth=='1' || flag=='1'){

            }else{
                return false;
            }
            var id = $(this).attr('des');
            layer.confirm("删除会清空数据！", {
        	title:"消息提示",
            btn: ['删除','取消'] //按钮
            }, function(){
                $.post("<?php echo $this->get_url('site','delsite')?>",{id:id},function(d){
                    if(d.code==200){
                        alert(d.msg);
                        //location.reload();
                        var adminLeftOne = "<?php echo $adminLeftOne;?>";
                        var adminLeftTwo = "<?php echo $adminLeftTwo;?>";
                        var adminLeftOneName = "<?php echo $adminLeftOneName;?>";
                        var adminLeftTwoName = "<?php echo $adminLeftTwoName;?>";
                        window.location.href="/version/station/topic.html?mid=-1&nid=39"+'&adminLeftNavFlag=1&adminLeftOne='+adminLeftOne+'&adminLeftTwo='+adminLeftTwo+'&adminLeftOneName='+adminLeftOneName+'&adminLeftTwoName='+adminLeftTwoName;
                    }else{
                        alert(d.msg)
                    }
                },'json')
            })
        })
        $('.edit').click(function(){
            var auth = "<?php echo $_SESSION['auth']?>";
            var flag = "<?php if(in_array('1',$res['status'])){echo 1;}?>";
            if(auth=='1' || flag=='1'){

            }else{
                return false;
            }
            var id = $(this).attr('des');
            $.post("<?php echo $this->get_url('site','edit')?>",{id:id},function(d){
                if(d.code == 200){
                    layer.open({
                        type: 1,
                        skin: 'layui-layer-rim', //加上边框
                        area: ['530px', '330px'], //宽高
                        content: d.msg
                    })
                }else{
                    layer.alert(d.msg,{icon:0});
                }
            },'json')
        })

        $('.modules a').click(function(){
            var auth = "<?php echo $_SESSION['auth']?>";
            var flag = "<?php if(in_array('1',$res['status'])){echo 1;}?>";
            if(auth=='1' || flag=='1'){

            }else{
                return false;
            }
            var img = $(this).parent('li');
            if($(this).html() !== '删除') {
                var k = $(this);
                var v = $(k).attr('pos');
                var gid = '<?php echo !empty($_REQUEST['nid']) ? $_REQUEST['nid'] :''?>';
                var id = '';
                id = $(this).attr('dss');
                if(empty(id)){
                    id = '';
                }
                if (empty(v)) return false;
                var my = layer.msg('加载中', {icon: 16, shade: 0.3});
                $.getJSON('<?php echo $this->get_url('site','upload')?>', {val: v,id:id, gid: gid}, function (d) {
                    if (d.code == 200) {
                        layer.close(my);
                        layer.open({
                            type: 1,
                            skin: 'layui-layer-rim', //加上边框
                            area: ['930px', '600px'], //宽高
                            content: d.msg
                        })
                    } else {
                        layer.alert(d.msg, {icon: 0});
                    }
                });
                $('body').on('click', '.gray', function () {
                    layer.closeAll();
                })
            }

        });

        $('.del').click(function(){
            var G = {};
            G.id = $(this).attr('dss');
            if(confirm('你确定删除此条内容吗？')){
                $.getJSON('<?php echo $this->get_url('site','del')?>',G,function(d){
                    if(d.code==200){
                       alert(d.msg);
                       location.reload();
                    }else{
                       layer.alert(d.msg,{icon:0});
                    }
                },'json')
            }
        })

        $('.guide').click(function(){
            var auth = "<?php echo $_SESSION['auth']?>";
            var flag = "<?php if(in_array('1',$res['status'])){echo 1;}?>";
            if(auth=='1' || flag=='1'){

            }else{
                return false;
            }
            var gid = $(this).attr('gid');
            $.getJSON('<?php echo $this->get_url('station','topadd')?>', {gid: gid}, function (d) {
                if (d.code == 200) {
                    layer.open({
                        type: 1,
                        skin: 'layui-layer-rim', //加上边框
                        area: ['630px', '506px'], //宽高
                        content: d.msg
                    })
                } else {
                    layer.alert(d.msg, {icon: 0});
                }
            });
        })


        $('.add_topic').click(function(){
            if($('.bg').length>0){
                if($('.bg').val().length>1){
                    alert('您已经新建过专题了！');
                    return false;
                }
            }
            var gid = "<?php echo $_REQUEST['nid'];?>";
            $.getJSON('<?php echo $this->get_url('station','bkadd')?>', {gid: gid}, function (d) {
                if (d.code == 200) {
                    layer.open({
                        type: 1,
                        skin: 'layui-layer-rim', //加上边框
                        area: ['630px', '506px'], //宽高
                        content: d.msg
                    })
                } else {
                    layer.alert(d.msg, {icon: 0});
                }
            });
        })
        function indexApp()
        {
            var max = $('.centerTop').length;
            if(max <5 ){
                $('.centerTopApp').hide();
            }else if(max == 5){
                $('.centerTopApp').show();
                $('.centerTop').eq(4).hide();
            }
        }
        indexApp();

        function indexTop()
        {
            var max = $('.centerTop').length;
            for(var i = 0; i < max ; i++){
                var liMax = $('.centerTop').eq(i).children('ul').children('li').length;
                var order = liMax+2;
                var position = $('.centerTop').eq(i).children('ul').children('li').children('span').attr('position');
                if(position){
                    position = position;
                }else{
                    var position= $('.centerTop').eq(i).children('div').children('span').attr('position');
                }
                if(liMax<4){
                    $('.centerTop').eq(i).children('ul').append
                    (
                             '<li class="lit" >'+

                            '<img src="/file/3.png" style="position:relative;z-index:9999" alt="" onclick="addTop(this)" order="'+order+'" position="'+position+'">'+
                                                        '<img style="position:absolute;top:30px;left:60px;width:30px;height:30px;border-radius:10px;" src="/file/u1892.png">'+
                        '</li>'
                    );
                }
            }
        }
        indexTop();

        function addTop(obj)
        {
            var gid = "<?php echo $_GET['nid']?>";
            var mid = "<?php echo $this->mid?>";
            var order = $(obj).attr('order');
            if($(obj).attr('position')){
                var imgFlag = 1;
                var position = $(obj).attr('position');
                $.getJSON('<?php echo $this->get_url('site','rankingAddView')?>', {gid: gid,mid:mid,imgFlag:imgFlag,order:order,position:position}, function (d)
                {
                    if (d.code == 200) {
                        layer.open({
                            type: 1,
                            skin: 'layui-layer-rim', //加上边框
                            area: ['730px', '556px'], //宽高
                            content: d.msg
                        })
                    } else {
                        layer.alert(d.msg, {icon: 0});
                    }
                });
                return true;
            }
            if($(obj).attr('imgFlag') == '1'){
                $.getJSON('<?php echo $this->get_url('site','rankingAddView')?>', {gid: gid,mid:mid,order:order}, function (d)
                {
                    if (d.code == 200) {
                        layer.open({
                            type: 1,
                            skin: 'layui-layer-rim', //加上边框
                            area: ['730px', '556px'], //宽高
                            content: d.msg
                        })
                    } else {
                        layer.alert(d.msg, {icon: 0});
                    }
                });
            }else if($(obj).attr('appFlag') == '1'){
                $.getJSON('<?php echo $this->get_url('site','rankingAddView')?>', {gid: gid,mid:mid,appFlag:1,order:order}, function (d)
                {
                    if (d.code == 200) {
                        layer.open({
                            type: 1,
                            skin: 'layui-layer-rim', //加上边框
                            area: ['730px', '556px'], //宽高
                            content: d.msg
                        })
                    } else {
                        layer.alert(d.msg, {icon: 0});
                    }
                });
            }else{
                var imgFlag = 1;
                $.getJSON('<?php echo $this->get_url('site','rankingAddView')?>', {gid: gid,mid:mid,imgFlag:imgFlag,order:order}, function (d)
                {
                    if (d.code == 200) {
                        layer.open({
                            type: 1,
                            skin: 'layui-layer-rim', //加上边框
                            area: ['730px', '556px'], //宽高
                            content: d.msg
                        })
                    } else {
                        layer.alert(d.msg, {icon: 0});
                    }
                });
            }
        }

        function editTop(obj)
        {
            var mid = "<?php echo $this->mid;?>";
            var id = $(obj).attr('uiId');
            var imgFlag = $(obj).parent('div').find('img').attr('imgFlag');

        if(imgFlag){
                //alert('2');
                $.getJSON('<?php echo $this->get_url('site','rankingEditView')?>', {id:id,mid:mid}, function (d)
                {
                    if (d.code == 200) {
                        layer.open({
                            type: 1,
                            skin: 'layui-layer-rim', //加上边框
                            area: ['730px', '556px'], //宽高
                            content: d.msg
                        })
                    } else {
                        layer.alert(d.msg, {icon: 0});
                    }
                });
            }else if($(obj).attr('appFlag') == '1'){
                //alert('1');return false;
                $.getJSON('<?php echo $this->get_url('site','rankingEditView')?>', {id:id,mid:mid,imgFlag:1,appFlag:1}, function (d)
                {
                    if (d.code == 200) {
                        layer.open({
                            type: 1,

                            skin: 'layui-layer-rim', //加上边框
                            area: ['730px', '556px'], //宽高
                            content: d.msg
                        })
                    } else {
                        layer.alert(d.msg, {icon: 0});
                    }
                });
            }else{
                //alert('3');return false;
                $.getJSON('<?php echo $this->get_url('site','rankingEditView')?>', {id:id,mid:mid,imgFlag:1}, function (d)
                {
                    if (d.code == 200) {
                        layer.open({
                            type: 1,
                            skin: 'layui-layer-rim', //加上边框
                            area: ['730px', '330px'], //宽高
                            content: d.msg
                        })
                    } else {
                        layer.alert(d.msg, {icon: 0});
                    }
                });
            }
        }

        function delTop(obj)
        {
            var mid = "<?php echo $this->mid;?>";
            var id = $(obj).attr('uiId');
            var imgFlag = $(obj).parent('div').find('img').attr('imgFlag');
            var order = $(obj).attr('order');
            var $_this = $(obj);
            $.ajax
            ({
                type:"get",
                url:"/version/site/delRanking/mid/"+mid+'/id/'+id,
                success:function(data)
                {
                    if(data == '200'){
                        if(imgFlag){
                            $_this.parent().children('img').attr('src','../../file/3.png')
                        }else{
                            $_this.parent().children('span').eq(2).remove();
                            $_this.parent().append("<img src='../../file/3.png'  onclick='addTop(this)' style='width:200px;height:60px;' order='"+order+"'>");
                        }
                    }
                    window.location.reload();
                },
                error:function()
                {
                    alert('删除失败，请再试一次。');
                }
            })

        }

        function addNews(obj)
        {
            var gid = "<?php echo $_GET['nid']?>";
            var mid = "<?php echo $this->mid?>";
            var order = $('.newsCenter').eq(0).children('ul').children('li').length;
            var imgFlag = 1;
            var news = 'news';
            $.getJSON('<?php echo $this->get_url('top','rankingAddView')?>', {gid: gid,mid:mid,imgFlag:imgFlag,order:order,position:news}, function (d)
            {
                if (d.code == 200) {
                    layer.open({
                        type: 1,
                        skin: 'layui-layer-rim', //加上边框
                        area: ['730px', '556px'], //宽高
                        content: d.msg
                    })
                } else {
                    layer.alert(d.msg, {icon: 0});
                }
            });
        }

        function checkTwo(twoId)
        {
            $('.heightLight').parent('ul').slideDown(100).children('li');
            $('.heightLight').parent('ul').attr('src','../../../file/button/folder_true.png');
        }
        $('a').css('text-decoration','none');
    </script>


