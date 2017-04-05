<?php
if(isset($_POST['login'])) {
 setcookie("name",$_POST['name']);
 setcookie("email",$_POST['email']);
 }
?>
<html>
<head>
<title>Mengeset Nilai Cookie</title>

</head>
<body>
<form action="" method="POST" />
Nama : <input type="text" name="name" id="name" size="30" /><br/>
Email : <input type="text" name="email" id="email" size="30" />
<br><input type="submit" name="login" value="BUAT COOKIE" id="login" />
</form>
</body>
</html>
<?php
if(isset($_POST['login'])) {

echo "cokkie sudah di set";
echo "<br>Cookie name:".$_POST['name'];
echo "<br> Cookie email:".$_POST['email'];
echo "<br/><a href=\"cookie_tampil.php\">Lihat Cookie di halaman selanjutnya</a>";

}
?>