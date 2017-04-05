<?php


if($_GET['hapus']==true){
session_start();
session_unset();
session_destroy();

}

echo "Session berhasil di hapus";

?>
