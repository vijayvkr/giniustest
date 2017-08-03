<?php
session_start();

if(!isset($_SESSION[session_id().'admin_userid']) || empty($_SESSION[session_id().'admin_userid'])){
	header('Location:login.php');
}

include('dbconnect.php');

$chkquery="select * from tbl_users";
$res=mysql_query($chkquery);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title> Genius Test Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid text-right" style="background-color:#00A298; vertical-align: middle; " >
    
   
    <div style="height: 40px; vertical-align: middle; padding-right: 20px;">
     Welcome to Administrator !! &nbsp;&nbsp;&nbsp; <a href="logout.php" style="font-weight: bold;color: #000;">Logout</a>
    </div>
</div>
<div class="container">
  <h2>Interested Users</h2>
         
  <table class="table">
    <thead>
      <tr>
      <th>SN</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Intrested In</th>
        <th>Comments</th>
      </tr>
    </thead>
    <tbody>
    <?php $no=0; while ($row=mysql_fetch_array($res)) { $no++;?>

     <tr>
     	<td><?php echo $no; ?></td>
        <td><?php echo $row['first_name'];?></td>
        <td><?php echo $row['last_name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['phone_number'];?></td>
        <td><?php echo $row['interested_in'];?></td>
        <td>
        <a data-toggle="popover" title="<?php echo $row['first_name'];?>" style="cursor: pointer;" data-content="<?php echo $row['comments'];?>">
        View</a></td>
      </tr>
    	
    <?php } ?>

     
      
    </tbody>
  </table>
</div>

</body>
<script type="text/javascript">
	$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   

  
});

</script>
</html>
