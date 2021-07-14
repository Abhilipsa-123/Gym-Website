<?php
$con=mysqli_connect('localhost','root');
if($con){
	echo "Succssfull";
}
else{
	echo "No Connection";
}
mysqli_select_db($con,'gymuserdata');
$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

$query="insert into userinfodata(user,email,mobile) values('$user','$email','$mobile')";
echo "$query";

mysqli_query($con,$query);
header('location:index.php');
?>