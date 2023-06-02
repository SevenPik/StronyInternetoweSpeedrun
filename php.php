<?php
session_start();

$host="localhost";
$user="ktos";
$password="haselko";
$db="user";



$data=mysqli_connect($host,$user,$password, $db, "3306");

$error=mysqli_connect_error($data);

echo $error;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;

		header("location:userhome.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:admin.home.php");
	}

	else
	{
		echo "username or password incorrect";
	}

}




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css.css"/>
</head>
<body>


		<form action="#" method="POST">
<div class="Tytuł">
	<div>
		<label>username</label>
		<input type="text" name="username" required>
	</div>
	<br><br>

	<div>
		<label>password</label>
		<input type="password" name="password" required>
	</div>
	<br><br>

	<div>
		
		<input type="submit" value="login">
	</div>


	</form>



 </div>
</div>

</body>
