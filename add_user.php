<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
<div>


<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "nb";

$conn =  mysqli_connect($servername, $username, $password, $dbname);
$sql = "INSERT INTO users (login, first_name, last_name,email,is_admin) 
VALUES('$login','$first_name','$last_name','$email','$is_admin')";
 
if(mysqli_query($conn,$sql)){
	echo "Record";
}
mysqli_close($conn);


if(isset($_POST['login']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['is_admin'])){
 
    $login=$_POST['login'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $is_admin=$_POST['is_admin'];
    echo "Ваш логин: $login <br> Ваш имя: $first_name <br> Ваша фамилия: $last_name <br> Ваш email: $email
    <br> Ваш пол: $is_admin";



}
?>
</div>
</body>
</html>




