<?php
session_start();
session_unset();
session_destroy();
echo "wylogowales sie<br>";
echo " -> <a href='czyZalogowany.php'>Sprawdz</a>";
?>