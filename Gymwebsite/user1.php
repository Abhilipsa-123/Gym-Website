<?php
$con=mysqli_connect('localhost','root');
if($con){
	echo "Succssfull";
}
else{
	echo "No Connection";
}
mysqli_select_db($con,'gymuser1data');
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$locality=$_POST['locality'];

$query="insert into userinfo1data(name,age,gender,locality) values('$name','$age','$gender','$locality')";
echo "$query";

mysqli_query($con,$query);
header('location:index.php');
?>