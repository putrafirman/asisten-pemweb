<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Nama warna
    </title>
    </script>
    <style type="text/css" media="screen">
        #merah {
            color: red;
        }
        #biru {
            color: blue;
        }
        #kuning{
            color: yellow;
        }
        #hijau{
            color: green;
        }
    </style>
    <script>
    function cekWarna() {
    var wrn = document.getElementById("warna").value;
        if (wrn == "merah") {
            document.getElementById("merah").innerHTML = wrn;
        } else if (wrn == "biru") {
            document.getElementById("biru").innerHTML = wrn;
        } else if (wrn == "kuning") {
            document.getElementById("kuning").innerHTML = wrn;
        } else if (wrn == "hijau") {
            document.getElementById("hijau").innerHTML = wrn;
        } else document.getElementById("salah").innerHTML = wrn; 
            
        }
    }
    </script>
</head>
<body>
    <div style="text-align:center;border-top-width: 2px;border-bottom-width: 2px;border-left-width: 2px;border-right-width: 2px;margin-top: 250px;">
        <h2>Masukkan Nama Warna : </h2>
        <form action="Lat2_9.php" id="form" method="POST" accept-charset="utf-8">
        <input type="text" name="warna" id="warna" placeholder="Input here" style="
    padding-top: 2px;
    padding-bottom: 2px;
                    " required="Anda belum mengisi">
        <button type="submit" onclick="cekWarna()" style="
    padding-right: 10px;
    padding-left: 10px;
    padding-top: 3px;
    padding-bottom: 3px;
                "> Kirim </button>
    </form></div>
    <div style="text-align: center;padding-bottom: 1;padding-bottom: 1px;padding-top: 20px;">
        <div id ="salah" name="salah">
            <?php 
                if (isset($_POST['warna'])) {
                    if ($_POST['warna'] != "merah" && $_POST['warna'] != "biru" && $_POST['warna'] != "kuning" && $_POST['warna'] != "hijau") {
                        echo "Warna tidak dikenal";
                    }
                }
             ?>
        </div>
        <div id="merah" name="merah"> 
        <?php 
        if (isset($_POST['warna'])){
            if ($_POST['warna'] == "merah") {
            echo "Merah";
            } 
        }
         ?>
         </div>
        <div id="biru" name="biru"> <?php 
        if (isset($_POST['warna'])){
            if ($_POST['warna'] == "biru") {
            echo "Biru";
            }
        }
         ?> </div>
        <div id="kuning" name="kuning"> <?php 
        if (isset($_POST['warna'])){
            if ($_POST['warna'] == "kuning") {
            echo "Kuning";
            }
        }
         ?> </div>
        <div id="hijau" name="hijau"> <?php 
        if (isset($_POST ['warna'])){
            if ($_POST['warna'] == "hijau") {
            echo "Hijau";
            }
        }
         ?> </div>
    </div>
    
</body>
</html>
