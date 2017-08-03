<?php
session_start();
if(!isset($_POST) || count($_POST)<=0){
    echo 'Invalid Request';
    exit;
}else{
	include('dbconnect.php');
	extract($_POST);

	// Check if user already exist

	$chkquery="select * from sitesetting where username = '".$username."' AND password='".$pwd."'";
	$res=mysql_query($chkquery);
	$result=mysql_fetch_array($res);
	if(is_array($result) && $result[0]!=''){
			$_SESSION[session_id().'admin_username'] =$result['username'];
			$_SESSION[session_id().'admin_userid'] = $result['id'];
			echo '1';
	}
	else{
		echo 'Invalid user, Please check your login credentials'; exit;
	}
		
}

?>