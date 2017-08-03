<?php

if(!isset($_POST) || count($_POST)<=0){
    echo 'Invalid Request';
    exit;
}else{
	include('admin/dbconnect.php');
	extract($_POST);

	//first_name	last_name	email phone_number	interested_in	comments	

	echo 'Thanks you '.$first_name;

	// Check if user already exist

	$chkquery="select email from tbl_users where email = '".$email."'";
	$res=mysql_query($chkquery);
	$rodata=mysql_fetch_row($res);
	if(is_array($rodata) && $rodata[0]!=''){
		echo '<br>Your details already exist!!'; exit;
	}
	// Insert in table query 
   $query="INSERT INTO tbl_users (first_name,last_name,email,phone_number,interested_in,comments) VALUES ('".$first_name."','".$last_name."','".$email."','".$phone_number."','".implode(',',$interested_in)."','".$comment."')";
    mysql_query($query);

	
}

?>