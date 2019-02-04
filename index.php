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
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">


</head>
<body>


<form action="add_user.php" method="POST" >
    Логин:<br> <input type="text" name="login" /><br><br>
    Имя:<br> <input type="text" name="first_name" /><br><br>
    Фамилия:<br> <input type="text" name="last_name" /><br><br>
    Почта: <br><input type="text" name="email" /><br><br>
    Ваш пол: 
    <br>
<input type="radio" name="is_admin" value="male" /> М
<input type="radio" name="is_admin" value="female" /> Ж <br>
   <br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>