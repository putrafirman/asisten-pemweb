<?php
session_start();
if(isset($_SESSION['user'])) {
 echo "nama Anda adalah $_SESSION[user]<br/>";
 echo "panggilan kamu $_SESSION[panggilan]<br/>";
 echo "sesion id kamu ".session_id();
 echo " <a href=\"remove_session.php?hapus=true\">Hapus session</a>";
}else {
 
 echo "Kamu belum masuk ke halaman session_daftar<br/>";
 echo "Masuk dulu ke <a href=\"session_daftar.php\">Daftarkan session</a>";
 
}
 

?>
