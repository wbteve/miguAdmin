<div class="btn-parent">
    <a href="<?php echo $this->get_url('guide','uploads')?>" class="btn">上传</a>
</div>
<div>
    <table  id="tb" class="mtable mt10" cellpadding="10" cellspacing="0" width="100%">
        <tr>
            <th>ID</th>
            <th>名称</th>
            <th>Url</th>
            <th>操作</th>
        </tr>
        <?php
        if(!empty($list)){
            foreach($list as $k=>$v){?>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $v->attributes['id'];?>">
                    <td><?php echo $v->attributes['id'];?></td>
                    <td><?php echo $v->attributes['title'];?></td>
                    <td><?php echo $v->attributes['url'];?></td>
                    <td><a href="#" class="del">删除</a></td>
                </tr>
                <?php
            }
        }
        ?>

    </table>
</div>
<script>
    $('.del').click(function(){
        var id = $(this).parent().parent().children('input').val();
        $.post("/move/guide/delete?mid=<?php echo $this->mid?>",{id:id},function(data){
            if(data.code=='200'){
                alert(data.msg);
                location.reload();
            }else{
                alert(data.msg);
            }
        },'json')
    })
</script>
