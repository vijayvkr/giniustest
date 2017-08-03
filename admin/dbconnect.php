<?php
// Create connection
$conn = mysql_connect('localhost','root','');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
//echo "Connected successfully";
mysql_select_db('geniustest',$conn);

?>