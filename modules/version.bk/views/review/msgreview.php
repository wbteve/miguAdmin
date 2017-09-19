<?php
$admin = $this->getMvAdmin();
//echo phpinfo();die;
?>
<?php
$adminLeftOneName = !empty($_GET['adminLeftOneName'])?$_GET['adminLeftOneName']:'';
$adminLeftTwoName = !empty($_GET['epg'])?$_GET['epg']:$_GET['adminLeftTwoName'];
$adminLeftOne = !empty($_GET['adminLeftOne'])?$_GET['adminLeftOne']:'';
$adminLeftTwo = !empty($_GET['adminLeftTwo'])?$_GET['adminLeftTwo']:'';
?>
<style>
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
        padding: 5px 0px 5px 3px;
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
        background: #f0fdff;
        padding: 5px 0px 5px 12px;
    }
</style>
<div style='padding: 5px 0px 5px 14px;'>
    <span><?php echo $adminLeftOneName;echo '>';?></span>
    <span><?php echo $adminLeftTwoName;?></span>
</div>
<div class="mt10" style="margin-top: 0px;">
    <div class="inputDiv">
        <span style="font-size:15px;margin-left: 5px">站点选择：</span>
        <span style="display:inline-block; width:200px;height:20px;";>
             <select name="gid" id="gid" class="form-input w200" style='height:20px;'>
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
        <span style="font-size:15px;margin-left: 5px">状态:&nbsp;&nbsp;&nbsp;</span>
        <select style="height:20px;width:80px" name="type" class="form-input" id="type">
            <option value="0">请选择</option>
            <option value="0">未审核</option>
            <option value="0">已通过</option>
            <option value="0">已驳回</option>
        </select>

        <input style="width：80px;height:20px;margin-left: 5px" class="btn btn_search" value="查询" type="button">
        <!--<input type="button" style='width:30px;height:20px;float:right;margin-right: 10px;' class="btn page_btn" value="go">
            <span style="float:right;font-size:14px">&nbsp;页</span>
            <input type="text" style='width:30px;height:18px;float:right' class="form-input " value="" name="page"  >
             <span style="float:right;font-size:14px">到第&nbsp;</span>-->
        <?php echo $page;?>
    </div>

    <div class="inputDivTwo">
        <input class="btnall btn" type="button" value="全选">
        <input class="btnno btn" type="button" value="全不选">
        <input class="btn sub_btn" type="button" value="批量通过">
        <input class="btn allreject" type="button" value="批量驳回">
    </div>

    <form action="">
        <div class="fenlei">
            <table width="100%" cellspacing="0" cellpadding="10" class="mtable center">
                <tr>
                    <th>编号</th>
                    <th>站点</th>
                    <th>标题</th>
                    <th>审核</th>
                    <th>提交审核时间时间</th>
                    <th>操作</th>
                </tr>
                <?php
                if(!empty($list)){
                    foreach($list as $l){?>
                        <tr>
                            <input type="hidden" name='id' value="<?php echo $l['id']?>">
                            <td><input type="checkbox" class="checkbox" name="id" value="<?php echo $l['id']?>"></td>
                            <td><?php
                                echo $l['name'];
                                ?></td>
                            <td><?php echo $l['title']?></td>
                            <td><?php echo $l['flag']?></td>
                            <td><?php if(!empty($l['cTime'])){echo date('Y-m-d H:i',$l['cTime']);}?></td>
                            <td>
                                <?php
                                if(in_array('1',$res['status']) || $_SESSION['auth']=='1'){
                                    echo "<a href='javascript:void(0)' gid='{$l['id']}' class='review'>通过</a>&nbsp;";
                                    echo "<a href='javascript:void(0)' gid='{$l['id']}' class='reject'>驳回</a>";
                                }?>
                            </td>
                        </tr>
                        <?php
                    }
                }else{?>
                    <tr>
                        <td colspan="8" align="center">暂无数据</td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </form>
</div>
<div><?php //echo $page;?></div>
<script>
    $('.chose').click(function(){
        $('.allbtn').removeClass('gray').addClass('chose');
        $('.btn_acc').removeClass('chose').addClass('gray');
        $('.no_acc').removeClass('chose').addClass('gray');
    })

    $('.btn_acc').click(function(){
        $('.allbtn').removeClass('chose').addClass('gray');
        $('.btn_acc').removeClass('gray').addClass('chose');
        $('.no_acc').removeClass('chose').addClass('gray');
    })

    $('.no_acc').click(function(){
        $('.allbtn').removeClass('chose').addClass('gray');
        $('.btn_acc').removeClass('chose').addClass('gray');
        $('.no_acc').removeClass('gray').addClass('chose');
    })

    var adminLeftOne = "<?php echo $adminLeftOne;?>";
    var adminLeftTwo = "<?php echo $adminLeftTwo;?>";
    var adminLeftOneName = "<?php echo $adminLeftOneName;?>";
    var adminLeftTwoName = "<?php echo $adminLeftTwoName;?>";
    var one = "<?php echo !empty($_GET['one'])?$_GET['one']:'0';?>";
    var two = "<?php echo !empty($_GET['two'])?$_GET['two']:'0';?>";
    var three = "<?php echo !empty($_GET['three'])?$_GET['three']:'0';?>";
    var siteName = "<?php echo !empty($_GET['siteName'])?$_GET['siteName']:''; ?>";
    var son = "<?php echo !empty($_GET['son'])?$_GET['son']:''; ?>";
    var topName = "<?php echo !empty($_GET['top'])?$_GET['top']:''; ?>";
    var leftNavFlag  = "<?php echo !empty($_GET['leftNavFlag'])?$_GET['leftNavFlag']:'0'; ?>";
    var adminLeftNavFlag  = "<?php echo !empty($_GET['adminLeftNavFlag'])?$_GET['adminLeftNavFlag']:'0'; ?>";
    var fixedUrl = '/adminLeftOne/'+adminLeftOne+'/adminLeftTwo/'+adminLeftTwo+'/adminLeftOneName/'+adminLeftOneName+'/adminLeftTwoName/'+adminLeftTwoName+'/adminLeftNavFlag/'+adminLeftNavFlag+'/one/'+one+'/two/'+two+'/three/'+three+'/siteName/'+siteName+'/son/'+son+'/top/'+topName+'/leftNavFlag/'+leftNavFlag;

    $('.btn_search').click(function(){
        var gid =$('#gid').val();
        var nid = "<?php echo $_GET['nid']?>";
        var headerUrl = "/version/review/msgReview/mid/<?php echo $this->mid;?>"+'/nid/'+nid;
        var center = '';
        var url = '';
        if(gid>0){
            center += '/gid/'+gid;
        }
        window.location.href = headerUrl+center+fixedUrl;
    });

    $('.review').click(function(){
        var flag = "<?php if(in_array('3',$res['status'])){echo 1;}?>";
        var auth="<?php echo $_SESSION['auth']?>";
        if(auth!='1'){
            if(flag==1){
                return false;
            }
        }
        var gid = $(this).attr('gid');
        $.post("<?php echo $this->get_url('message','access')?>",{gid:gid},function(d){
            if(d.code==200){
                location.reload();
            }
        },'json')
    })

    $('.reject').click(function(){
        var type = "<?php if(in_array('3',$res['status'])){echo 1;}?>";
        var auth="<?php echo $_SESSION['auth']?>";
        if(auth!='1'){
            if(type==1){
                return false;
            }
        }
        var gid = $(this).attr('gid');
        var flag=1;
        $.getJSON('<?php echo $this->get_url('message','rejectview')?>',{gid:gid,flag:flag},function(d){
            if(d.code == 200){
                layer.open({
                    type: 1,
                    skin: 'layui-layer-rim', //加上边框
                    area: ['530px', '306px'], //宽高
                    content: d.msg
                })
            }else{
                layer.alert(d.msg,{icon:0});
            }
        })
    })

    $('.allreject').click(function(){
        var flag = "<?php if(in_array('3',$res['status'])){echo 1;}?>";
        var auth="<?php echo $_SESSION['auth']?>";
        if(auth!='1'){
            if(flag==1){
                return false;
            }
        }
        var ids="";
        $("input[name='id']:checked").each(function() {

            ids += $(this).val()+' ';

        });
        var flag=2;
        $.getJSON('<?php echo $this->get_url('message','rejectview')?>',{gid:ids,flag:flag},function(d){
            if(d.code == 200){
                layer.open({
                    type: 1,
                    skin: 'layui-layer-rim', //加上边框
                    area: ['530px', '306px'], //宽高
                    content: d.msg
                })
            }else{
                layer.alert(d.msg,{icon:0});
            }
        })
    })

    $('.btnall').click(function(){
        $(".center :checkbox").prop("checked", true);
    })
    $('.btnno').click(function(){
        $(".center :checkbox").prop("checked", false);
    })

    $('.sub_btn').click(function(){
        var flag = "<?php if(in_array('3',$res['status'])){echo 1;}?>";
        var auth="<?php echo $_SESSION['auth']?>";
        if(auth!='1'){
            if(flag==1){
                return false;
            }
        }
        var ids="";
        $("input[name='id']:checked").each(function() {

            ids += $(this).val()+' ';

        });
        $.post("<?php echo $this->get_url('message','allaccess')?>",{ids:ids},function(d){
            location.reload();
        })
    })
    $('.access_btn').click(function(){
        var text = $(this).val();
        if(text=='已通过'){
            var flag=1;
        }else{
            var flag=2;
        }
        var url = '/version/review/accesslog?mid='+"<?php echo $_GET['mid']?>"+"&flag="+flag;
        //ajax(url,type=1);
    })

    $('.allbtn').click(function(){
        var username = "<?php echo $admin['nickname']?>";
        var url = '/version/review/Accesslog?mid='+"<?php echo $_GET['mid']?>"+"&username="+username;
        //ajax(url,type=2);
    })

    function ajax(url,type){
        $.ajax({
            type: 'GET',
            url: url,
            /*data: {'page': 1 },*/
            dataType: 'json',
            success: function(json) {
                $('.fenlei').empty();
                var li = '';
                var btn = $('.chose').val();
                if(btn=='驳回'){
                    flag='1';
                }else{
                    flag='2';
                }
                li += '<table width="100%" cellspacing="0" cellpadding="10" class="mtable center"><tr><th>编号</th><th>牌照方</th><th>标题</th><th>语言</th><th>类型</th><th>状态</th><th>添加时间</th><th>操作</th></tr>';
                if(type==1){
                    $.each(json, function(index, array) {
                        switch(array['cp']){
                            case '642001':array['cp']='华数';break;
                            case 'BESTVOTT':array['cp']='百视通';break;
                            case 'ICNTV':array['cp']='未来电视';break;
                            case 'youpeng':array['cp']='南传';break;
                            case 'HNBB':array['cp']='芒果';break;
                            case 'CIBN':array['cp']='国广';break;
                            case 'YGYH':array['cp']='银河';break;
                        }
                        if(flag=='1'){
                            li += "<tr><input type='hidden' name='id' value='"+array['id']+"'><td><input type='checkbox' class='checkbox' name='id' value='"+array['vid']+"'></td><td>"+array['cp']+"</td><td>"+array['title']+"</td><td>"+array['language']+"</td><td>"+array['type']+"</td><td>不通过</td><td>"+getLocalTime(array['cTime'])+"</td><td><a class='see'>查看</a></td></tr>";

                        }else{
                            li += "<tr><input type='hidden' name='id' value='"+array['id']+"'><td><input type='checkbox' class='checkbox' name='id' value='"+array['vid']+"'></td><td>"+array['cp']+"</td><td>"+array['title']+"</td><td>"+array['language']+"</td><td>"+array['type']+"</td><td>通过</td><td>"+getLocalTime(array['cTime'])+"</td><td><a class='see'>查看</a></td></tr>";

                        }
                    })
                }else{
                    $.each(json, function(index, array) {
                        switch(array['cp']){
                            case '642001':array['cp']='华数';break;
                            case 'BESTVOTT':array['cp']='百视通';break;
                            case 'ICNTV':array['cp']='未来电视';break;
                            case 'youpeng':array['cp']='南传';break;
                            case 'HNBB':array['cp']='芒果';break;
                            case 'CIBN':array['cp']='国广';break;
                            case 'YGYH':array['cp']='银河';break;
                        }
                        li += "<tr><input type='hidden' name='id' value='"+array['id']+"'><td><input type='checkbox' class='checkbox' name='id' value='"+array['vid']+"'></td><td>"+array['cp']+"</td><td>"+array['title']+"</td><td>"+array['language']+"</td><td>"+array['type']+"</td><td>通过</td><td>"+getLocalTime(array['cTime'])+"</td><td><a class='see'>查看</a><a gid='"+array['id']+"' class='review'>通过</a><a gid='"+array['id']+"' class='reject'>驳回</a></td></tr>";
                    })
                }

                li +='</table>';
                $('.fenlei').append(li);
            },
            complete: function() {
                //getPageBar();//js生成分页，可用程序代替
            },
            error: function() {
                alert("数据异常,请检查是否json格式");
            }
        });
    }

    function getLocalTime(nS) {
        return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:\d{1,2}$/,' ');
    }
</script>

