<?php
	$kendaraan = array("Mobil","Bus","Truck","Sepeda Motor","Sepeda","Becak","Andong");

	echo "<h3>Array awal</h3>";
	foreach ($kendaraan as $key) {
		echo "<li>$key</li>";
	}

	echo "<h3>SORT</h3>";
	sort($kendaraan);
	foreach ($kendaraan as $key) {
		echo "<li>$key</li>";
	}

	echo "<h3>ASORT</h3>";
	asort($kendaraan);
	foreach ($kendaraan as $key) {
		echo "<li>$key</li>";
	}

	echo "<h3>KSORT</h3>";
	ksort($kendaraan);
	foreach ($kendaraan as $key) {
		echo "<li>$key</li>";
	}

	echo "<h3>RSORT</h3>";
	rsort($kendaraan);
	foreach ($kendaraan as $key) {
		echo "<li>$key</li>";
	}

	echo "<h3>ARSORT</h3>";
	arsort($kendaraan);
	foreach ($kendaraan as $key) {
		echo "<li>$key</li>";
	}

	echo "<h3>KRSORT</h3>";
	krsort($kendaraan);
	foreach ($kendaraan as $key) {
		echo "<li>$key</li>";
	}
?>
