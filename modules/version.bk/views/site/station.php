<style>
.mtable td{
	padding:5px;
}
</style>
<form action="" method="post" enctype="multipart/form-data">
    <table style="width:100%" class="mtable"  cellpadding="10" cellspacing="0">
        <tr>
             <input type="hidden" name="stationid" value="<?php echo !empty($cate->attributes['id'])?$cate->attributes['id']:''?>">
            <input type="hidden" name="stationgid" value="<?php echo !empty($gid)?$gid:'';?>">
            <td width="100" align="right">节目类型：</td>
            <!--<td><select class="form-input w300" id="vtype"><option value="0">请选择</option>
                <option value="电影" >电影</option>
                <option value="综艺">综艺</option>
                <option value="新闻">新闻</option>
                <option value="电视剧">电视剧</option>
                <option value="动漫">动漫</option>
                <option value="教育">教育</option>
                <option value="体育">体育</option>
                <option value="音乐">音乐</option>
                <option value="娱乐">娱乐</option>
                <option value="监控">监控</option>
                <option value="纪实">纪实</option>
                <option value="旅游">旅游</option>
                <option value="法制">法制</option>
                <option value="搞笑">搞笑</option>
                <option value="时尚">时尚</option>
                <option value="军事">军事</option>
                <option value="财经">财经</option>
                <option value="曲艺">曲艺</option>
                <option value="奥运">奥运</option>
                </select>
            </td>-->
        <td>
                <input style="margin-left: 20px"  type="checkbox" name="type" <?php if(in_array('电影',$type)){echo 'checked';}?> value="电影" >电影
                <input style="margin-left: 20px"  type="checkbox" name="type" <?php if(in_array('综艺',$type)){echo 'checked';}?> value="综艺" >综艺
                <input style="margin-left: 20px"  type="checkbox" name="type" <?php if(in_array('新闻',$type)){echo 'checked';}?> value="新闻" >新闻
                <input style="margin-left: 20px"  type="checkbox" name="type" <?php if(in_array('电视剧',$type)){echo 'checked';}?> value="电视剧" >电视剧
                <input style="margin-left: 6px" type="checkbox" name="type" <?php if(in_array('动漫',$type)){echo 'checked';}?> value="动漫" >动漫
                <input style="margin-left: 20px" type="checkbox" name="type" <?php if(in_array('教育',$type)){echo 'checked';}?> value="教育" >教育
                <input style="margin-left: 20px" type="checkbox" name="type" <?php if(in_array('体育',$type)){echo 'checked';}?> value="体育" >体育
                <input style="margin-left: 20px" type="checkbox" name="type" <?php if(in_array('音乐',$type)){echo 'checked';}?> value="音乐" >音乐
                <input style="margin-left: 20px" type="checkbox" name="type" <?php if(in_array('娱乐',$type)){echo 'checked';}?> value="娱乐" >娱乐
                <input style="margin-left: 20px" type="checkbox" name="type" <?php if(in_array('健康',$type)){echo 'checked';}?> value="健康" >健康<br/>
                <input style="margin-left: 20px" type="checkbox" name="type" <?php if(in_array('旅游',$type)){echo 'checked';}?> value="旅游" >旅游
                <input style="margin-left: 20px" type="checkbox" name="type" <?php if(in_array('法制',$type)){echo 'checked';}?> value="法制" >法制
                <input style="margin-left: 20px" type="checkbox" name="type" <?php if(in_array('搞笑',$type)){echo 'checked';}?> value="搞笑" >搞笑
                <input style="margin-left: 20px" type="checkbox" name="type" <?php if(in_array('时尚',$type)){echo 'checked';}?> value="时尚" >时尚
                <input style="margin-left: 20px" type="checkbox" name="type" <?php if(in_array('军事',$type)){echo 'checked';}?> value="军事" >军事
                <input style="margin-left: 20px" type="checkbox" name="type" <?php if(in_array('财经',$type)){echo 'checked';}?> value="财经" >财经
                <input style="margin-left: 20px" type="checkbox" name="type" <?php if(in_array('曲艺',$type)){echo 'checked';}?> value="曲艺" >曲艺
                <input style="margin-left: 20px" type="checkbox" name="type" <?php if(in_array('奥运',$type)){echo 'checked';}?> value="奥运" >奥运
                <input style="margin-left: 20px" type="checkbox" name="type" <?php if(in_array('纪实',$type)){echo 'checked';}?> value="纪实" >纪实
            </td>
        </tr>
        <tr>
            <td width="100" align="right">牌照方：</td>
            <td>
                <input style="margin-left: 20px" type="checkbox" name="cps" <?php if(in_array('642001',$cp)){echo 'checked';}?> value="642001" >华数
                <input style="margin-left: 20px" type="checkbox" name="cps" <?php if(in_array('BESTVOTT',$cp)){echo 'checked';}?> value="BESTVOTT" >百视通
                <input style="margin-left: 20px" type="checkbox" name="cps" <?php if(in_array('ICNTV',$cp)){echo 'checked';}?> value="ICNTV" >未来电视
                <input style="margin-left: 20px" type="checkbox" name="cps" <?php if(in_array('youpeng',$cp)){echo 'checked';}?> value="youpeng" >南传
                <input style="margin-left: 20px" type="checkbox" name="cps" <?php if(in_array('HNBB',$cp)){echo 'checked';}?> value="HNBB" >芒果
                <input style="margin-left: 20px" type="checkbox" name="cps" <?php if(in_array('CIBN',$cp)){echo 'checked';}?> value="CIBN" >国广
                <input style="margin-left: 20px" type="checkbox" name="cps" <?php if(in_array('YGYH',$cp)){echo 'checked';}?> value="YGYH" >银河
            </td>
        </tr>
        <tr>

            <td colspan="2" align="center" >
                <input style="width:80px;height:30px;padding:0px;float:none" type="button" value="保存信息" class="btn btn_save">
                <input style="width:80px;height:30px;padding:0px;float:none" type="button" value="返回列表" class="gray">
            </td>
        </tr>
    </table>
</form>
<script>
    $('.btn_save').click(function(){
        var G = {};
         G.id = $('input[name=stationid]').val();
        G.gid = $('input[name=stationgid]').val();
        G.cps="";
        $("input[name='cps']:checked").each(function() {

            G.cps += $(this).val()+' ';

        });
        if(empty(G.cps)){
            layer.alert('请选择牌照方');
            return false;
        }
        //G.type = $('#type').val();
        G.type = "";
        $("input[name='type']:checked").each(function() {

            G.type += $(this).val()+' ';

        });
        if(empty(G.type)){
            layer.alert('请选择分类');
            return false;
        }
        $.post("<?php echo $this->get_url('site','stationadd')?>",G,function(d){
            setTimeout(location.reload(),1000);
        })
    })

    $('.gray').click(function(){
        layer.closeAll();
    })
</script>


