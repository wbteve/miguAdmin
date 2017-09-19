<script charset="utf-8" type="text/javascript" src="/js/jdate/jquery.datetimepicker.js"></script>
<link rel="stylesheet" href="/js/jdate/jquery.datetimepicker.css" />
<style>
    .float{float:left;width:100px;line-height:35px;margin-left: 20px}
   .clear{ clear:both} 
</style>
<div style="height:100%;background: #F0FDFF">
	
    <form action="">
        <div >
        	<div style="height:10px"></div>
       		
        	<input style="margin-left: 20px"  type="checkbox" name="temtype" value="电影" >电影
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="综艺" >综艺
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="新闻" >新闻
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="电视剧" >电视剧
			<input style="margin-left: 4px"  type="checkbox" name="temtype" value="动漫" >动漫
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="教育" >教育
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="体育" >体育
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="音乐" >音乐
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="娱乐" >娱乐
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="健康" >健康
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="旅游" >旅游<br/>
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="法制" >法制
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="搞笑" >搞笑
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="时尚" >时尚
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="军事" >军事
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="财经" >财经
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="曲艺" >曲艺
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="奥运" >奥运
			<input style="margin-left: 20px"  type="checkbox" name="temtype" value="纪实" >纪实
    		 <div style="height:10px"></div>
        </div>
        <div id="456" style="height:30px;background: #FFFFFF;border: 1px solid #C9C9C9">
        <input style="height:25px;width:100px;margin-top:2px;margin-left: 2px" class="btn btn_search" value="查询" type="button">
        <input style="height:25px;width:100px;margin-top:2px;margin-left: 2px" class="btn btn1 btn-gray btnall " type="button"  value="全选" name="" >
        <input style="height:25px;width:100px;margin-top:2px;margin-left: 2px" class="btn btn1 btn-gray btnno " type="button"  value="反选" name="" >
        <input style="height:25px;width:100px;margin-top:2px;margin-left: 2px" class="btn btn1 btn-gray btn_add " type="button"  value="添加" name="" >
        </div>
        <div id="fenlei" style="background: #F0FDFF">

        </div>
        <div id="page"></div>
    </form>
</div>
<script>
    $('.btnall').click(function(){
        $("#fenlei :checkbox").prop("checked", true);
    })
    $('.btnno').click(function(){
        $("#fenlei :checkbox").prop("checked", false);
    })

    $('.btn_add').click(function(){
        var words='';
        $('input[name="word"]:checked').each(function(){
            words += '/'+$(this).val();
        });
        $('.keyword').html(words);
        var newwords = new Array();
        $('input[name="word"]:checked').each(function(){
            newwords.push($(this).val());
        });
        var kywd = '';
        for(var i=0;i<newwords.length;i++){
            kywds = newwords[i].split('_');
            //console.log(kywds);
            if(i==0){
                kywd += "'"+kywds[0]+"'";
            }else{
                kywd += ','+"'"+kywds[0]+"'";
            }
        }
        $('input[name=keyword]').val(kywd);
        layer.closeAll();
    })

    $('.btn_search').click(function(){
        getData(1)
    })

    function getData(page){
        var type = "";
        $("input[name='temtype']:checked").each(function() {

            type += $(this).val()+' ';

        });
        $.ajax({
            type: 'GET',
            url: '/version/content/ajax?mid='+"<?php echo $_GET['mid']?>",
            data: {'page': page,'type':type },
            dataType: 'json',
            success: function(json) {
                $("#fenlei").empty();
                //total_num = json.total_num;//总记录数
                //page_size = json.page_size;//每页数量
                //page_cur = page;//当前页
                page_total_num = json.page_total_num;//总页数
                var list = json.list;
                var li ='';
                $.each(list, function(index, array) { //遍历返回json
                    li += "<div class='float'><input type='checkbox' class='checkbox' name='word' value="+array['id']+"_"+array['keyword']+">"+array['keyword']+"</div>";
                });
                $("#fenlei").append(li);
                $("#fenlei").append("<div class='clear'></div>");
            },
            complete: function() {
                //getPageBar();//js生成分页，可用程序代替
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
    }
    function getLocalTime(nS) {
        return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:\d{1,2}$/,' ');
    }
</script>


~
~
~
~
~
~
~
~
~
~
~
~
~
~
~

