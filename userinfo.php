<?php 
$con = mysqli_connect('localhost','root');

if($con){
	echo "Connected";
}else{
	echo "Not Connected";
}
mysqli_select_db($con, 'bloguserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$Comment = $_POST['Comment'];

$query =  "insert into userinfodata (user, email, mobile, Comment) values('$user','$email', '$mobile','$Comment')";


echo "$query";

mysqli_query($con, $query);


 ?>