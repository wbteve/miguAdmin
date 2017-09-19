<!dctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title><?php $this->pageTitle= '设备绑定'?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.min.js"></script>
    <style>
        *{margin: 0;padding: 0;}
        .clear{clear:both}
        body{background-color: #F2F2F2;}
            header{width:6.4rem;text-align: center;line-height: 0.7rem;height:2.3rem}
            #header{}
            #header p{text-align: left;font-size: 0.38rem;margin:  0.5rem 0.5rem 0 0.5rem;}
            section{width:6.4rem;}
            span{font-size: 1rem}
            .button{
                background-color: #F2F2F2;background:url("<?php echo Yii::app()->request->baseUrl; ?>/images/bd.png") repeat-x  center;height:1rem;border-radius:10px;border:none;background-size: 100% 100%;
            }

            .stbid{display:inline-block;width: 5.6rem;height:1rem;line-height:1rem;outline:0;font-size: 0.29rem;padding-left: 0.2rem;padding-right: 0.2rem; margin-left:0.2rem;border: 0;background-color:#3A3A3F;border-radius:10px;color:white;}
            .center{font-size: 0.3rem;margin:0.2rem 0.5rem;}
            .spinner {
            margin: -1rem auto 0;
            width: 150px;
            text-align: center;
            display:none;
        }

        .spinner > div {
            width: 30px;
            height: 30px;
            background-color: #67CF22;

            border-radius: 100%;
            display: inline-block;
            -webkit-animation: bouncedelay 1.4s infinite ease-in-out;
            animation: bouncedelay 1.4s infinite ease-in-out;
            /* Prevent first frame from flickering when animation starts */
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .spinner .bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }

        .spinner .bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }

        @-webkit-keyframes bouncedelay {
            0%, 80%, 100% { -webkit-transform: scale(0.0) }
            40% { -webkit-transform: scale(1.0) }
        }

        @keyframes bouncedelay {
            0%, 80%, 100% {
                transform: scale(0.0);
                -webkit-transform: scale(0.0);
            } 40% {
                  transform: scale(1.0);
                  -webkit-transform: scale(1.0);
              }
        }
    </style>
</head>
<script type="text/javascript">
    (function (doc, win) {
        var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function () {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth) return;
                if(clientWidth>=640){
                    docEl.style.fontSize = '100px';
                }else{
                    docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';
                }
            };

        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener('DOMContentLoaded', recalc, false);
    })(document, window);
</script>
<body>

<header>
    <div id="header"><p>欢迎您在微信中绑定魔百和终端享受跨屏服务的精彩体验</p></div>
</header>
<section>
    <form action="" name="form1" method="post">
        <div>
            <input type="hidden" name="id" value="<?php echo !empty($list[0]['id'])?$list[0]['id']:'' ?>">
            <input type="text" placeholder="请输入设备号：" class="stbid" name="stbid"><br/>
            <div class="center">设置-设备信息-序列号</div>
            <div style="text-align:center;margin-top:10%">

                <input type='submit' class='button btn1' value="" style='width:40.7%'>

            </div>
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </form>
</section>
<script type="text/javascript">
    $('.stbid').blur(function(){
        var isStbid = /^[a-zA-Z0-9]{8,32}$/;
        if(!isStbid.test($('.stbid').val()))
            sAlert('请输入8位序列号');
        return false;
    });
    $(function(){
        $('.btn1').click(function(){
            var k = $(this);
            var G = {};
            G.stbid =$('input[name=stbid]').val();
            if(G.stbid==''){
                sAlert('序列号不能为空');
                return false;
            }
            var isStbid = /^[a-zA-Z0-9]{8,32}$/;
            if(!isStbid.test($('.stbid').val())){
                sAlert('请输入正确的8位序列号');
                return false;
            }
            $('.spinner').css('display','block');
            $.post('/wx/demo/getStbs',G ,function(d){
                if(d.code==404){
                    $('.spinner').css('display','none');
                    sAlert(d.msg);
                    return false;
                }else{
                    document.form1.action ="./bd";
                    document.form1.submit();
                    sAlert('绑定成功');
                    //$('.spinner').css('display','block');
                }
            },'json')
            return false
            //$('.spinner').css('display','block');
        })
    });
    function sAlert(str){
    var msgw,msgh,bordercolor; 
    msgw=5;//Width
    msgh=3;//Height
    titleheight=1 //title Height
    bordercolor="#000000";//boder color
    titlecolor="#99CCFF";//title color
   
    var sWidth,sHeight; 
    sWidth=document.body.offsetWidth; 
    sHeight=screen.height; 
    var bgObj=document.createElement("div"); 
    bgObj.setAttribute('id','bgDiv'); 
    bgObj.style.position="absolute"; 
    bgObj.style.top="0"; 
    bgObj.style.background="#777";
    bgObj.style.filter="progid:DXImageTransform.Microsoft.Alpha(style=3,opacity=25,finishOpacity=75"; 
    bgObj.style.opacity="0.6"; 
    bgObj.style.left="0"; 
    bgObj.style.width=sWidth + "rem";
    bgObj.style.height=sHeight + "rem";
    bgObj.style.zIndex = "10000"; 
    document.body.appendChild(bgObj);
     
    msgObj=document.createElement("div") 
    msgObj.setAttribute("id","msgDiv"); 
    msgObj.setAttribute("align","center"); 
    msgObj.style.background="white"; 
    msgObj.style.border="1px solid " + bordercolor; 
    msgObj.style.position = "fixed"; 
    msgObj.style.left = "50%"; 
    msgObj.style.top = "50%"; 
    //msgObj.style.font="12px/1.6em Verdana, Geneva, Arial, Helvetica, sans-serif";
    msgObj.style.marginLeft = "-2.5rem" ;
    msgObj.style.marginTop = -3+document.documentElement.scrollTop+"rem";
    msgObj.style.width = msgw + "rem";
    msgObj.style.height =msgh + "rem";
    msgObj.style.textAlign = "center"; 
    msgObj.style.lineHeight ="0.8rem";
    msgObj.style.zIndex = "10001"; 
     
    var title=document.createElement("h4"); 
    title.setAttribute("id","msgTitle"); 
    title.setAttribute("align","center"); 
    title.style.margin="0"; 
    title.style.padding="3px"; 
    title.style.background=bordercolor; 
    title.style.filter="progid:DXImageTransform.Microsoft.Alpha(startX=20, startY=20, finishX=100, finishY=100,style=1,opacity=75,finishOpacity=100);"; 
    title.style.opacity="0.75"; 
    title.style.border="1px solid " + bordercolor; 
    title.style.height="0.6rem";
    //title.style.font="12px Verdana, Geneva, Arial, Helvetica, sans-serif";
    title.style.color="white"; 
    title.style.cursor="pointer";
    title.style.fontSize="0.5rem"; 
    title.innerHTML="魔百和";
    document.ontouchend=function(){ 
           document.body.removeChild(bgObj); 
           document.getElementById("msgDiv").removeChild(title); 
           document.body.removeChild(msgObj); 
         } 
    document.body.appendChild(msgObj); 
    document.getElementById("msgDiv").appendChild(title); 
    var txt=document.createElement("p"); 
    txt.style.margin="1em 0";
    txt.style.fontSize="0.5rem"; 
    txt.setAttribute("id","msgTxt"); 
    txt.innerHTML=str; 
    document.getElementById("msgDiv").appendChild(txt); 
 }
</script>
</body>
</html>


