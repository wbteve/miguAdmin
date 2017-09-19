<?php
$adminLeftOneName = !empty($_GET['adminLeftOneName'])?$_GET['adminLeftOneName']:'';
$adminLeftTwoName = !empty($_GET['epg'])?$_GET['epg']:$_GET['adminLeftTwoName'];
$adminLeftOne = !empty($_GET['adminLeftOne'])?$_GET['adminLeftOne']:'';
$adminLeftTwo = !empty($_GET['adminLeftTwo'])?$_GET['adminLeftTwo']:'';
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
    .page{
                height:20px;

                line-height: 20px;
        }
        .page ul li {
                line-height: 20px;
                height:20px;
        }
    .inputDiv{
              width:100%;
        float:left;

        background: #A3BAD5;
        padding: 5px 0px 5px 12px;
    }
    .inputDiv input{
        float: left;
    }
    .inputDiv span{
        float: left;
    }
    .inputDiv select{
        float: left;
        margin-left:5px;
    }
    .inputDivTwo{
        width:100%;
        float:left;
        height:30px;
        padding: 5px 0px 6px 12px;
    }
    .mt10{
        float:left;
    }
    .page_btn{width: 44px;
        height: 24px;

    }
     .inputDivTwo{
        float:left;
        padding: 5px 0px 5px 12px;
        width:100%;
        background: #f0fdff;
    }
    .inputDivTwo a{float:left;}
</style>
<?php
    $adminLeftOneName = !empty($_GET['adminLeftOneName'])?$_GET['adminLeftOneName']:'';
    $adminLeftTwoName = !empty($_GET['epg'])?$_GET['epg']:$_GET['adminLeftTwoName'];
    $adminLeftOne = !empty($_GET['adminLeftOne'])?$_GET['adminLeftOne']:'';
    $adminLeftTwo = !empty($_GET['adminLeftTwo'])?$_GET['adminLeftTwo']:'';
?>
<div style='padding: 5px 0px 5px 14px;'>
    <span><?php echo $adminLeftOneName;echo '>';?></span>
    <span><?php echo $adminLeftTwoName;?></span>
</div>
<div class="inputDiv" >
<input type="text" name="title" style="width:120px;height:15px;"  class="form-input" value="<?php echo !empty($_GET['title'])?$_GET['title']:''?>" placeholder="请输入查询条件">

    <span style="font-size:15px;margin-left: 5px">站点选择:&nbsp;&nbsp;&nbsp;</span>
        <span style="display:inline-block; width:200px;">
                <input type="hidden" name="" id="child" value="<?php //echo $ids; ?>" />
             <select style="height:20px;" name="gid" id="gid" class="form-input w200">
                    <option value="0">--请选择--</option>
                 <?php
                 $sql = "select id,name from yd_ver_station";
                 $result = SQLManager::queryAll($sql);
                 if (!empty($res)) {?>
                     <?php
                     foreach ($result as $k => $v) {
                         ?>
                         <option value="<?php echo $v['id']; ?>" <?php $gid =!empty($_REQUEST['gid'])?$_REQUEST['gid']:''; if($v['id']==$gid){echo 'selected=selected';}?>><?php echo $v['name']; ?></option>
                     <?php } ?>
                 <?php }?>

                </select>
        </span>
  <input style="width：80px;height:20px;margin-left: 5px" id='button' class="btn btn_search" value="查询" type="button">
        <input type="button" style='width:30px;height:20px;float:right;margin-right: 10px;' class="btn page_btn" value="go">
            <span style="float:right;font-size:14px">&nbsp;页</span>
            <input type="text" style='width:30px;height:18px;float:right' class="form-input " value="" name="page"  >
             <span style="float:right;font-size:14px">到第&nbsp;</span>
            <?php echo $page;?>


</div>
<div class="inputDivTwo">
    <?php
    $res['status'][] = 1;
    if(in_array('1',$res['status']) || $_SESSION['auth']=='1'){
        ?>
        <a style="line-height: 30px;text-align: center;" href="<?php echo $this->get_url('wallpaper', 'newAdd',array('nid'=>$_GET['nid'],'adminLeftNavFlag'=>1,'adminLeftOne'=>$adminLeftOne,'adminLeftTwo'=>$adminLeftTwo,'adminLeftOneName'=>$adminLeftOneName,'adminLeftTwoName'=>$adminLeftTwoName)) ?>" class="btn" >添加壁纸</a>
        <?php
    }

    ?>
</div>

<div style='width:100%;' >
    <table width="1280px" cellspacing="0" cellpadding="10" class="mtable center">
        <tr>
            <th>编号</th>
            <th>标题</th>
            <th>缩略图</th>
            <th>壁纸</th>
            <th>审核</th>
            <th>操作</th>
        </tr>
        <?php
        if(!empty($list)){
            foreach($list as $l){?>
                <tr id="<?php echo $l->id;?>">
                    <input type="hidden" name="id" value="<?php echo $l->id?>">
                    <td><?php echo $l->id?></td>
                    <td><?php echo $l->title?></td>
                    <td><img src="<?php echo $l->thum?>" width="150px" height="86px"></td>
                    <td><img src="<?php echo $l->pic?>" width="214px" height="123px"></td>
                    <td>
                        <?php
                        switch($l->flag){
                            case '0':echo '未通过';break;
                            case '1':
                            case '2':
                            case '3':
                            case '4':
                            case '5':
                                echo '审核中';break;
                            case '6':echo '已通过';break;
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if(in_array('1',$res['status']) || $_SESSION['auth']==1){
                            if($l->flag=='0'){
                                ?>
                                <a href="<?php echo $this->get_url('wallpaper','update',array('id'=>$l->id,'nid'=>$_GET['nid'],'adminLeftNavFlag'=>1,'adminLeftOne'=>$adminLeftOne,'adminLeftTwo'=>$adminLeftTwo,'adminLeftOneName'=>$adminLeftOneName,'adminLeftTwoName'=>$adminLeftTwoName))?>">编辑</a>
                                &nbsp;<a class="review">提交审核</a>
                                <a href="javascript:void(0)" gid="<?php echo $l->id?>" class="del">删除</a>
                                <?php
                            }else if($l->flag=='6'){
                                ?>
                                <a href="<?php echo $this->get_url('wallpaper','update',array('id'=>$l->id,'nid'=>$_GET['nid'],'adminLeftNavFlag'=>1,'adminLeftOne'=>$adminLeftOne,'adminLeftTwo'=>$adminLeftTwo,'adminLeftOneName'=>$adminLeftOneName,'adminLeftTwoName'=>$adminLeftTwoName))?>">编辑</a>
                                <a href="javascript:void(0)" gid="<?php echo $l->id?>" class="del">删除</a>
                                <?php
                            }
                        }
                        ?>

                    </td>
                </tr>
                <?php
            }
        }else{?>
            <tr>
                <td colspan="4" align="center">暂无数据</td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<div>

</div>


<script type="text/javascript" charset="utf-8">

    $('.page_btn').click(function(){
        var num = $('input[name=pagenum]').val();
        var test = window.location.href;
        window.location.href=test+"&page="+num;
    });

    $('.del').click(function(){
        var k = $(this);
        var v = $(k).attr('gid');
        if(empty(v)) return false;
        layer.confirm("你确定删除该壁纸吗？", {
        	title:"消息提示",
            btn: ['删除','取消'] //按钮
            }, function(){
            $.post('/version/wallpaper/del?mid=<?php echo $_GET['mid']?>',{id:v},function(d){
                if(d.code == 200){
                    $(k).parent().parent().remove();
                    layer.alert(d.msg,{icon:1});

                }else{
                    layer.alert(d.msg,{icon:0});
                }
            },'json');
            $("#"+v).remove();
        })
    });

    function getregin(){
        var shengid=$("#province").val();

        var i = shengid.split('_');//分割
        $("#city option").remove();

        $.getJSON("/version/wallpaper/getcity?mid=<?php echo $_GET['mid']?>",{id:i[0]},function(data){

            $.each(data,function(i){
                $("#city").append('<option value="'+data[i]['cityCode']+'_'+data[i]['cityName']+'">'+data[i]['cityName']+'</option>');
//                +'_'+data[i]['cityName']
            });
        });
    };

    <?php
    $adminLeftOneName = !empty($_GET['adminLeftOneName'])?$_GET['adminLeftOneName']:'';
    $adminLeftTwoName = !empty($_GET['epg'])?$_GET['epg']:$_GET['adminLeftTwoName'];
    $adminLeftOne = !empty($_GET['adminLeftOne'])?$_GET['adminLeftOne']:'';
    $adminLeftTwo = !empty($_GET['adminLeftTwo'])?$_GET['adminLeftTwo']:'';
    ?>
    $('#button').click(function(){
        var adminLeftOne = "<?php echo $adminLeftOne;?>";
        var adminLeftTwo = "<?php echo $adminLeftTwo;?>";
        var adminLeftOneName = "<?php echo $adminLeftOneName;?>";
        var adminLeftTwoName = "<?php echo $adminLeftTwoName;?>";
        var val = 'aa';
        var title = $('input[name=title]').val();
        var gid = $('#gid').val();
//        if(empty(val) || empty(title)) return false;
        window.location.href = '/version/wallpaper/index.html?mid=<?php echo $this->mid?>&nid=<?php echo $_GET['nid']?>&type='+val+'&gid='+gid+'&adminLeftNavFlag=1&adminLeftOne='+adminLeftOne+'&adminLeftTwo='+adminLeftTwo+'&adminLeftOneName='+adminLeftOneName+'&adminLeftTwoName='+adminLeftTwoName+"&title="+title;
    });

    $('.review').click(function(){
        var id = $(this).parent().parent().children('input').val();
        $.post("<?php echo $this->get_url('wallpaper','review')?>",{id:id},function(d){
            if(d.code==200){
                location.reload();
            }
        },'json')
    })
</script>

