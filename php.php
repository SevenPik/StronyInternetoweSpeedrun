<?php
$host="localhost";
$user="root";
$password="";
$db="myDB";
$data=mysqli_connect($host,$user,$password,$db);
if($data=false){
    die("connection error");
}
?>









<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    </head>
        <?php
        ?>
        <body class="body">
            <container>
                <div class="box">
                <div class="Tytuł">
                    Polskie Koleje Państwowe
                </div>
            </container>
            <container>
                <div class="GłównaStrona">
                    <div class="zawartosc">
                
                    <form type="text" name="login" action="#" method="POST" >Login: <input type="text" required></input></form>
                    <form action="welcome.php" method="post">
                        Name: <input type="text" name="name"><br>
                        E-mail: <input type="text" name="email"><br>
                        <input type="submit">
                        </form>
                    </div>

                </div>
            </container>
            <div class="divider">
            </div>
        </div>
        </body>
</html> 