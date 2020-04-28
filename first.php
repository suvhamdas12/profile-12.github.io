<?php

$con=mysqli_connect('localhost:3308','root','');
 if($con){
 	echo "connection done";
 }
 else
 {
 	echo "sorry";
}

mysqli_select_db($con,'suvham');

$user=$_POST['i'];
$phn=$_POST['ii'];
$mail=$_POST['iii'];
$comm=$_POST['iiii'];
$query="insert into feed(name,mobile,email,comment)
values ('$user','$phn','$mail','$comm')";

$result=mysqli_query($con,$query);
header('location:index.php');

?>