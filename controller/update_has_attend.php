<?php
    require_once("../models/dal_api.php");
    session_start();
    $has_attend_num  = $_POST['has_attend_num'];
    $stu_id       = $_POST['stu_id'];
    $course_name  = $_POST['course_name'];
    // 入库
    $dal_api  = new nc_dal_adapter();
    $ret      = $dal_api ->update_has_attend($has_attend_num, $stu_id, $course_name);
    if($ret == "err"){
    	print "内部错误！";
    }else{
        print "ok";
    }

?>