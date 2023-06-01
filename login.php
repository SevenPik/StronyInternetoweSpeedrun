<?php
session_start();

if (isset($_POST["login"]) && 
	isset($_POST["pass"]))

{
	$login=$_POST["login"];
	$pass=$_POST["pass"];
	
	$link=mysqli_connect("localhost", "root", "", "nowa");
	$res=mysqli_query($link, "SELECT * FROM uzytkownik WHERE
		login='$login' AND haslo='$pass'");
		
	//sprawdzam czy baza zwraca jakisc wynik
	if (mysqli_num_rows($res)>0){
		$_SESSION["zalogowany"]=1;
		$_SESSION["login"]=$login;
		echo "Hura, udalo sie zalogowac<br>";
		echo "-> <a href='czyZalogowany.php'>Sprawdz</a>";
	}
	
	
}



?>