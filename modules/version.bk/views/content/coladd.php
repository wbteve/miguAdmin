<script type="text/javascript" src="/js/uploadify/jquery.uploadify.min.js"></script>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="covid" value="<?php echo !empty($vid)?$vid:''?>">
    <input style="width:300px;height:25px;margin-left: 5px;" class="form-input keyword" type="text" placeholder="请输入标题关键字" name="cotitle" value="" style="width:100px">
    <input style="width:80px;height:25px;margin-left: 5px;" class="btn btn1 btn-gray audit_search  " type="button"  value="查找" name="">
    <input style="width:80px;height:25px;margin-left: 5px;" class="btnall btn" type="button" value="全选">
    <input style="width:80px;height:25px;margin-left: 5px;" class="btnno btn" type="button" value="全不选">
    <input style="width:80px;height:25px;margin-left: 5px;" class="btn btn1 btn-gray search_add " type="button"  value="添加" name="" >
    <table class="mtable right" id="fenlei" width="100%" cellspacing="0" cellpadding="10">

    </table>
    <div id="page" style="text-align: center">

    </div>
</form>
<script>

    $('.btnall').click(function(){
        $(".right :checkbox").prop("checked", true);
    })
    $('.btnno').click(function(){
        $(".right :checkbox").prop("checked", false);
    })

    $('.search_add').click(function(){
        var vid = $('input[name=covid]').val();
        var ids="";
        $("input[name='ids']:checked").each(function() {

            ids += $(this).val()+' ';

        });
        $.post("<?php echo $this->get_url('content','ajaxadd')?>",{ids:ids,vid:vid},function(d){
            location.reload();
        })

    })
    $('.audit_search').click(function(){
        title = $('input[name=cotitle]').val();
        if(empty(title)){
            layer.alert('标题不能为空',{icon:0});
            return false;
        }
        getData(1);
    })

    function getData(page){
        title = $('input[name=cotitle]').val();
        $.ajax({
            type: 'GET',
            url: '/version/content/data?mid='+"<?php echo $_GET['mid']?>"+"&title="+title,
            data: {'page': page },
            dataType: 'json',
            success: function(json) {
                $("#fenlei").empty();
                total_num = json.total_num;//总记录数
                page_size = json.page_size;//每页数量
                page_cur = page;//当前页
                page_total_num = json.page_total_num;//总页数
                var li = "<tr><th>编号</th><th>牌照方</th><th  width='330px'>标题</th><th>类型</th><th>语言</th><th  width='200px'> 添加时间</th></tr>";
                var list = json.list;
                $.each(list, function(index, array) { //遍历返回json
                    array['cp']=array['cp'].substr(array['cp'].length-1,1);
                    switch(array['cp']){
                        case '1':array['cp']='华数';break;
                        case '3':array['cp']='未来电视';break;
                        case '7':array['cp']='银河';break;
                    }
                    li += "<tr><td><input name='ids' type='checkbox' value="+array['id']+"></td><td>"+array['cp']+"</td><td>"+array['title']+"</td><td>"+array['type']+"</td><td>"+array['language']+"</td><td>"+getLocalTime(array['cTime'])+"</td></tr>";
                });
                if(list == '') li +='<tr><td  colspan="6" align="center">暂无数据</td></tr>';
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

    function getPageBar() { //js生成分页
        if (page_cur > page_total_num)
            page_cur = page_total_num;//当前页大于最大页数
        if (page_cur < 1)
            page_cur = 1;//当前页小于1
        page_str = "&nbsp;&nbsp;&nbsp;<span>共" + total_num + "条</span>&nbsp;&nbsp;&nbsp;<span>" + page_cur + "/" + page_total_num + "</span>";
        if (page_cur == 1) {//若是第一页
            page_str += "&nbsp;&nbsp;&nbsp;<span>首页</span>&nbsp;&nbsp;&nbsp;<span>上一页</span>";
        } else {
            page_str += "&nbsp;&nbsp;&nbsp;<span><a href='javascript:void(0)' data-page='1' onclick=getData(1)>首页</a></span>&nbsp;&nbsp;&nbsp;<span><a href='javascript:void(0)' data-page='" + (page_cur - 1) + "' onclick=getData("+ (parseInt(page_cur) - 1) +")>上一页</a></span>";
        }
        if (page_cur >= page_total_num) {//若是最后页
            page_str += "&nbsp;&nbsp;&nbsp;<span>下一页</span>&nbsp;&nbsp;&nbsp;<span>尾页</span>";
        } else {
            page_str += "&nbsp;&nbsp;&nbsp;<span><a href='javascript:void(0)' data-page='" + (parseInt(page_cur) + 1) + "' onclick=getData("+ (parseInt(page_cur) + 1) +") >下一页</a></span>&nbsp;&nbsp;&nbsp;<span><a href='javascript:void(0)' data-page='" + page_total_num + "'  onclick=getData("+ (page_total_num) +")>尾页</a></span>";
        }
        $("#page").html(page_str);
    }

    function getLocalTime(nS) {
        return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:\d{1,2}$/,' ');
    }
</script>


