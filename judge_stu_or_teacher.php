<?php
    require_once("dal/dal_api.php");
	session_start();
    if(!isset($_SESSION['user_id'])){
	    echo '<html>'; 
	    echo '<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>'; 
	    echo "<script type='text/javascript'>alert('请先登录!');</script>";
	    echo "<script type='text/javascript'>window.location.href='index.php'</script>";
	    echo '</html>'; 
    }else{
    	if($_SESSION['user_type'] == "s"){	
    		$_SESSION["stu_id"] = $_SESSION["user_id"];
    		#设置开始时间
    		$dal_api  = new nc_dal_adapter();
    		$dal_api->set_chess_start_time($_SESSION["user_id"]);
    		header("Location:classroom.php");
    	}else if($_SESSION['user_type'] == "t"){
			header("Location:teacher.php");
		}else{
            header("Location:admin.php");
        }
    	
    }
?>