<?php

/**
 * Created by PhpStorm.
 * User:
 * Date: 2016/05/13
 * Time: 11:48
 */
class WallpaperController extends VController{

    public function actionIndex(){
        $id=$_GET['nid'];
        $type = isset($_GET['type']) ? $_GET['type'] : '';
        $username=$_SESSION['nickname'];
        $flag=5;
        $res = Common::getStation($username,$flag);
        if(!empty($id) && empty($type)){
            $page = 10;
            $data = $this->getPageInfo($page);
            $criteria = new CDbCriteria();
            $criteria->select = '*';
            if(!empty($res['stationId']) || $_SESSION['auth']=='1'){
                if(!empty($res['stationId']) && $_SESSION['auth']=='1'){
                    $criteria->addCondition("gid=".$res['stationId'][0]);
                }
            }else{
                $criteria->addCondition("flag=7");
            }
            $count = VerWall::model()->count($criteria);
            $criteria->offset = $data['start'];
            $criteria->limit = $data['limit'];
            $criteria->order = 'addTime desc';
            $list = VerWall::model()->findAll($criteria);
            $url = $this->createUrl($this->action->id);
            $pagination = $this->renderPagination($url,$count,$page,$data['currentPage'],$count);
            $this->render('index',array('list'=>$list,'page'=>$pagination,'res'=>$res));
        }else{
            $gid  = !empty($_REQUEST['gid'])?$_REQUEST['gid']:'';
            $page = 10;
            $data = $this->getPageInfo($page);
            $criteria = new CDbCriteria();
            $criteria->select = '*';
            $count = VerWall::model()->count($criteria);
            if(!empty($res['stationId']) || $_SESSION['auth']=='1'){
                if(!empty($res['stationId']) && $_SESSION['auth']=='1'){
                    $criteria->addCondition("gid=".$res['stationId'][0]);
                }else{
                    if(!empty($gid)){
                        $criteria->addCondition("gid=".$gid);
                    }
                    if(!empty($_REQUEST['title'])){
                        $criteria->addCondition("title like '%{$_REQUEST['title']}%'");
                    }
                }
            }else{
                $criteria->addCondition("flag=7");
            }
            $criteria->order = 'addTime desc';
            $list = VerWall::model()->findAll($criteria);
            $url = $this->createUrl($this->action->id);
            $pagination = $this->renderPagination($url,count($list),$page,$data['currentPage'],$count);
           // print_r($list);
            $this->render('index',array('list'=>$list,'page'=>$pagination,'res'=>$res));
        }


    }

    public function actionAdd(){
        try{
		//var_dump($_REQUEST);die;
            if(!empty($_GET['id'])){
                $paper = MvWallpaper::model()->findByPk($_GET['id']);
                $id = $_GET['id'];
                $provinceCode = array_map(create_function('$record','return $record->attributes;'),MvWallpaper::model()->findAll("id = $id"));
                if(!empty($provinceCode)){
                    $p = $provinceCode[0]['province'];//查询出来的省份编码
                    $c = $provinceCode[0]['city'];//查询出来的城市编码
                    $cityCode = array_map(create_function('$record','return $record->attributes;'),City::model()->findAll("provinceId = $p"));
                }
            }else{
                $paper = new MvWallpaper();
                $paper->addTime = time();
            }
            if(!empty($_POST)){

                $paper ->title = trim($_POST['title']);

                $sheng = explode('_',$_POST['province']);
                $paper -> province = trim($sheng[0]);
                $shi = explode('_',$_POST['city']);
                $paper -> city     = trim($shi[0]);


                if(!empty($_FILES['pic']['tmp_name'])){
                    $filename = 'pic';
                    $path = $this->up($filename);
                    //$paper ->pic    = 'http://' . $_SERVER['HTTP_HOST'] . '/file/' . $path;
                    $paper ->pic    = 'http://117.131.17.105:8083/file/' . $path;
                    //$paper ->pic    = 'http://192.168.1.109/file/' . $path;
                }
                if(!$paper->save()){
                    LogWriter::logModelSaveError($paper,__METHOD__,$paper->attributes);
                    throw new ExceptionEx('信息保存失败');
                }

                $this->PopMsg('保存成功');
                $this->redirect($this->get_url('wallpaper','index'));
            }
        }catch (ExceptionEx $ex){
            $this->PopMsg($ex->getMessage());
        }catch (Exception $e){
            $this->log($e->getMessage());
        }

        $province = Province::model()->findAll("1=1 order by id asc");

        $p = isset($p) ? $p : '';
        $cityCode = isset($cityCode) ? $cityCode : '';
        $c = isset($c) ? $c : '';

        $this->render('add',array('wallpaper'=>$paper,'province'=>$province,'provinceCode'=>$p,'city'=>$cityCode,'cityCode'=>$c));
    }

    public function actionNewAdd()
    {
        $this->render('newAdd');
    }

    public function actionUpdate()
    {
        try{
            if(!empty($_GET['id'])){
                $paper = VerWall::model()->findByPk($_GET['id']);
                $id = $_GET['id'];
                $provinceCode = array_map(create_function('$record','return $record->attributes;'),VerWall::model()->findAll("id = $id"));
                if(!empty($provinceCode)){
                    $p = $provinceCode[0]['province'];//查询出来的省份编码
                    $c = $provinceCode[0]['city'];//查询出来的城市编码
                    $cityCode = array_map(create_function('$record','return $record->attributes;'),City::model()->findAll("provinceId = $p"));
                }
            }else{
                $paper = new VerWall();
                $paper->addTime = time();
            }
            if(!empty($_POST)){

                $paper ->title = trim($_POST['title']);

                $sheng = explode('_',$_POST['province']);
                $paper -> province = trim($sheng[0]);
                $shi = explode('_',$_POST['city']);
                $paper -> city     = trim($shi[0]);

                if(!empty($_FILES['pic']['tmp_name'])){
                    $filename = 'pic';
                    $path = $this->up($filename);
                    //$paper ->pic    = 'http://' . $_SERVER['HTTP_HOST'] . '/file/' . $path;
                    $paper ->pic    = 'http://117.131.17.105:8083/file/' . $path;
                    //$paper ->pic    = 'http://192.168.1.109/file/' . $path;
                }
                if(!$paper->save()){
                    LogWriter::logModelSaveError($paper,__METHOD__,$paper->attributes);
                    throw new ExceptionEx('信息保存失败');
                }

                $this->PopMsg('保存成功');
                $this->redirect($this->get_url('wallpaper','index'));
            }
        }catch (ExceptionEx $ex){
            $this->PopMsg($ex->getMessage());
        }catch (Exception $e){
            $this->log($e->getMessage());
        }

        $province = Province::model()->findAll("1=1 order by id asc");

        $p = isset($p) ? $p : '';
        $cityCode = isset($cityCode) ? $cityCode : '';
        $c = isset($c) ? $c : '';
	//var_dump($p);die;
        $this->render('update',array('wallpaper'=>$paper,'province'=>$province,'provinceCode'=>$p,'city'=>$cityCode,'cityCode'=>$c));
    }

    public function actionDoNewAdd()
    {
        $model = new VerWall();
        $model->title = trim($_POST['title']);
        $model->thum =  trim($_POST['thum']);
        //$model->pic =  trim($_POST['pic']);
        $pic_true = trim($_POST['pic']);
        $pic_true = basename($pic_true);
        Common::synchroPic($pic_true);
        //$model->pic = 'http://117.131.17.46:8086/file/' . $pic_true;
        $model->pic = 'http://117.131.17.105:8083/file/' . $pic_true;
        //$model->pic = 'http://117.144.248.58:8082/file/' . $pic_true;
        $model->gid =  trim($_POST['gid']);
        $model->flag =  0;
        $model->addTime = time();
        if($model->save()){
            echo '200';
        }else{
            echo '500';
        }
    }

    public function actionDoUpdate()
    {
	//var_dump($_POST);die;
        $id = trim($_POST['id']);
        $title = trim($_POST['title']);
        $thum = trim($_POST['thum']);
        //$pic = trim($_POST['pic']);
        $pic_true = trim($_POST['pic']);
        $pic_true = basename($pic_true);
        Common::synchroPic($pic_true);
        //$pic = 'http://117.131.17.46:8086/file/' . $pic_true;
        $pic = 'http://117.131.17.105:8083/file/' . $pic_true;
        //$pic = 'http://117.144.248.58:8082/file/' . $pic_true;
        $gid = trim($_POST['gid']);
        $addTime = time();
        $sql_set = "update yd_ver_wall set `title`='$title',`thum`='$thum',`pic`='$pic',`gid`='$gid',`addTime`='$addTime',`flag`=0 ";
        $sql_where = " where id=$id";
        $sql = $sql_set.$sql_where;
        $res = SQLManager::execute($sql);
        if($res){
           echo '200';
        }else{
            echo '500';
        }
    }

    public function actionDel(){
        if(empty($_POST['id'])) $this->die_json(array('code'=>404,'msg'=>'参数不能为空'));
        $del = VerWall::model()->deleteByPk($_POST['id']);
        if(!$del){
            $this->die_json(array('code'=>404,'msg'=>'删除失败'));
        }
      //  $title = count($del) > 1 ? '' : $del[0]['name'];
        //$this->RecordOperatingLog(MSG::MYSQL_EDIT_DEL,$del,'权限组',$title);
        $this->die_json(array('code'=>404,'msg'=>'删除成功'));
    }

    public function actionGetcity(){
        $id=$_GET['id'];
        $city = array_map(create_function('$record','return $record->attributes;'),City::model()->findAll("provinceId = '$id' order by id desc"));

        echo json_encode($city);
    }

    public function actionReview()
    {
        try{
            $username = $_SESSION['nickname'];
            $flag=5;
            $workid = Common::EditWorkid($username,$flag);
            $reject = VerWallReject::model()->find("vid = '{$_REQUEST['id']}' and flag=$flag");
            if(empty($reject)){
                $reject = new VerWallReject();
            }
            $reject->user = $username;
            $reject->addTime=time();
            $reject->vid=$_REQUEST['id'];
            $reject->flag='5';
            $reject->save();
            $result = VerWall::model()->updateAll(array('flag'=>1,'workid'=>$workid,'cTime'=>time()),'id=:id',array(':id'=>$_REQUEST['id']));
            if($result){
                echo json_encode(array('code'=>200));
            }else{
                echo json_encode(array('code'=>404));
            }
        }catch (ExceptionEx $ex){
            $this->PopMsg($ex->getMessage());
        }catch (Exception $e){
            $this->log($e->getMessage());
        }
    }

    public function actionAccess(){
        try {
            $username=$_SESSION['nickname'];
            $flag= '5';
            $res  = Common::workid($username,$flag);
            $tmp = VerWall::model()->findByPk($_REQUEST['gid']);
            $this->AccessReject($_REQUEST['gid'],$flag);
            $this->rejectlog($_REQUEST['gid'],1);
            if($tmp->attributes['flag']==$res || $tmp->attributes['flag']=='5'){
                $result = VerWall::model()->updateAll(array('flag'=>6),'id=:id',array(':id'=>$_REQUEST['gid']));
            }else{
                $flag=$tmp->attributes['flag']+1;
                $result = VerWall::model()->updateAll(array('flag'=>$flag),'id=:id',array(':id'=>$_REQUEST['gid']));
            }
            if($result){
                echo json_encode(array('code'=>200));
            }else{
                echo json_encode(array('code'=>404));
            }

        }catch (ExceptionEx $ex){
            $this->PopMsg($ex->getMessage());
        }catch (Exception $e){
            $this->log($e->getMessage());
        }
    }


    public function actionAllAccess(){
        $username = $_SESSION['nickname'];
        $flag=5;
        $res  = Common::workid($username,$flag);
        $arr=explode(' ',trim($_REQUEST['ids']));
        foreach($arr as $k=>$v){
            $tmp = VerWall::model()->findByPk($v);
            $this->AccessReject($v,$flag);
            $this->rejectlog($v,1);
            if($tmp->attributes['flag']==$res || $tmp->attributes['flag']=='5'){
                $result = VerWall::model()->updateAll(array('flag'=>6),'id=:id',array(':id'=>$v));
            }else{
                $newflag=$tmp->attributes['flag']+1;
                $result = VerWall::model()->updateAll(array('flag'=>$newflag),'id=:id',array(':id'=>$v));
            }
        }
    }

    public function actionRejectView(){
        $gid = $_REQUEST['gid'];
        $flag = $_REQUEST['flag'];
        $n = $this->renderPartial(
            'rejectview',
            array(
                'gid'=>$gid,
                'flag'=>$flag,
            ),
            true
        );
        die(json_encode(array('code'=>200,'msg'=>$n)));
    }


    public function actionReject(){
        $username = $_SESSION['nickname'];
        $message = $_REQUEST['message'];
        if($_REQUEST['flag']=='1'){
            $tmp = VerWall::model()->findByPk($_REQUEST['gid']);
            $reject = VerWallReject::model()->find("vid = '{$_REQUEST['gid']}'");
            if(empty($reject)){
                $reject = new VerWallReject();
            }
            switch($tmp->attributes['flag']){
                case '1':$reject->message1=$message;$reject->addTime1  = time();$reject->user1=$username;break;
                case '2':$reject->message2=$message;$reject->addTime2  = time();$reject->user2=$username;break;
                case '3':$reject->message3=$message;$reject->addTime3  = time();$reject->user3=$username;break;
                case '4':$reject->message4=$message;$reject->addTime4  = time();$reject->user4=$username;break;
                case '5':$reject->message5=$message;$reject->addTime5  = time();$reject->user5=$username;break;
            }
            $reject->delFlag='0';
            $reject->vid  = $_REQUEST['gid'];
            $reject->save();
            $this->rejectlog($_REQUEST['gid'],2);
            $resulst = VerWall::model()->updateAll(array('flag'=>0),'id=:id',array(':id'=>$_REQUEST['gid']));
        }else{
            $arr = explode(' ',trim($_REQUEST['gid']));
            foreach($arr as $k=>$v){
                $tmp = VerWall::model()->findByPk($v);
                $reject = VerWallReject::model()->find("vid = '{$v}'");
                if(empty($reject)){
                    $reject = new VerWallReject();
                }
                $test = $tmp->attributes['flag'];
                switch($test){
                    case '1':$reject->message1=$message;$reject->addTime1  = time();$reject->user1=$username;break;
                    case '2':$reject->message2=$message;$reject->addTime2  = time();$reject->user2=$username;break;
                    case '3':$reject->message3=$message;$reject->addTime3  = time();$reject->user3=$username;break;
                    case '4':$reject->message4=$message;$reject->addTime4  = time();$reject->user4=$username;break;
                    case '5':$reject->message5=$message;$reject->addTime5  = time();$reject->user5=$username;break;
                }
                $reject->delFlag='0';
                $reject->vid  = $v;
                $reject->save();
                $this->rejectlog($v,2);
                $resulst = VerWall::model()->updateAll(array('flag'=>0),'id=:id',array(':id'=>$v));
            }
        }
    }

    public function AccessReject($gid,$flag){
        $tmp = VerWall::model()->findByPk($gid);
        $message = '通过';
        $reject = VerWallReject::model()->find("vid = '$gid' and flag='$flag'");
        if(empty($reject)){
            $reject = new VerWallReject();
        }
        switch($tmp->attributes['flag']){
            case '1':$reject->message1=$message;$reject->addTime1  = time();$reject->user1=$_SESSION['nickname'];break;
            case '2':$reject->message2=$message;$reject->addTime2  = time();$reject->user2=$_SESSION['nickname'];break;
            case '3':$reject->message3=$message;$reject->addTime3  = time();$reject->user3=$_SESSION['nickname'];break;
            case '4':$reject->message4=$message;$reject->addTime4  = time();$reject->user4=$_SESSION['nickname'];break;
            case '5':$reject->message5=$message;$reject->addTime5  = time();$reject->user5=$_SESSION['nickname'];break;
        }
        $reject->delFlag='0';
        $reject->vid  = $gid;
        $reject->save();
    }


    public function rejectlog($vid,$flag){
        $tmp = VerWallReject::model()->find("vid='$vid'");
        $reject = new VerWallLog();
        $reject->user = $tmp->attributes['user'];
        $reject->user1 = $tmp->attributes['user1'];
        $reject->user2 = $tmp->attributes['user2'];
        $reject->user3 = $tmp->attributes['user3'];
        $reject->user4 = $tmp->attributes['user4'];
        $reject->user5 = $tmp->attributes['user5'];
        $reject->flag = $flag;
        $reject->message1 = $tmp->attributes['message1'];
        $reject->message2 = $tmp->attributes['message2'];
        $reject->message3 = $tmp->attributes['message3'];
        $reject->message4 = $tmp->attributes['message4'];
        $reject->message5 = $tmp->attributes['message5'];
        $reject->vid = $tmp->attributes['vid'];
        $reject->addTime = time();
        $reject->addTime1 = $tmp->attributes['addTime1'];
        $reject->addTime2 = $tmp->attributes['addTime2'];
        $reject->addTime3 = $tmp->attributes['addTime3'];
        $reject->addTime4 = $tmp->attributes['addTime4'];
        $reject->addTime5 = $tmp->attributes['addTime5'];
        $reject->save();
    }

    public function up($filename){
        if (!empty($filename)) {
            if ($_FILES[$filename]["error"] > 0) {
                $this->error('上传文件错误! 错误代码:' . $_FILES[$filename]['error'], '', 3);
            }
            $dir = Yii::app()->basePath . '/../file/';
            //echo $dir;die();
            $name = date('YmdHis') . mt_rand(0000, 9999);
            //$expand_arr = explode('/',$_FILES['media']['type']);
            //$expand = '.'.$expand_arr[1];
            $expand = '.' . pathinfo($_FILES[$filename]['name'], PATHINFO_EXTENSION);
            if (is_uploaded_file($_FILES[$filename]["tmp_name"])) {
                if (move_uploaded_file($_FILES[$filename]["tmp_name"], $dir . $name . $expand)) {
                    $path = $name . $expand;
                    //$path = isset($name) ? $name . $expand : '';
                } else {
                    $this->error('上传服务器临时错误');
                }
            } else {
                $this->error('非法上传方法');
            }
        }
        return $path;
    }
    public function actionLog(){
        $flag = $_REQUEST['flag'];
        $sql = "select * from yd_ver_wall_log r inner join yd_ver_wall w on w.id=r.vid where r.flag='$flag'";
        $result = SQLManager::queryAll($sql);
        echo json_encode($result);
    }


    public function actionAccesslog(){

        $username=$_SESSION['nickname'];
        $flag= '5';
        $res  = Common::getUser($username,$flag);
        $page = 20;
        $data = $this->getPageInfo($page);
        $list = array();
        if(!empty($_REQUEST['type'])){
            $list['type']=$_REQUEST['type'];
        }
        $list['cp']=$res['cp'];
        $list['review']=$res['review'];
        if($_SESSION['auth']==1){
            $list['workid'] ='';
        }else{
            $list['workid']=Common::WorkidList($username,$flag);
        }
        $tmp =VideoManager::getWallReview($data,$list);
        $url = $this->createUrl($this->action->id);
        $pagination = $this->renderPagination($url,$tmp['count'],$page,$data['currentPage']);
        $list = array();
        if(!empty($res['review']) || $_SESSION['auth']=='1'){
            $list = $tmp['list'];
        }else{
            if(in_array('3',$res['status'])){
                $list=$tmp['list'];
            }
        }
        echo json_encode($list);
    }
}

