<?php

session_start();
$user="Putra Firman Ardiansyah";
$panggilan="ardi.my.id";
$_SESSION['user']=$user;
$_SESSION['panggilan']=$panggilan;

echo "hai nama kamu $_SESSION[user]<br/>";
echo "hai panggilan kamu adalah $_SESSION[panggilan]<br/>";
echo "<a href=\"session.php\">Lihat Session Pada halaman 2</a>";
?>