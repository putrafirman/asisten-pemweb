<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
<body>
<p><h3><font color="#0086b3">Tabel GanjilGenap</font></h3></p>
<form>
Masukkan jumlah baris : 
<input type="number" id="baris" placeholder="Baris"/>
<br>
Masukkan jumlah kolom : 
<input type="number" id="kolom" placeholder="Kolom" value="5" disabled="true" />
<p><input type="button" onclick="ProsesTabel()" value="GO!!"/>
<script>
function ProsesTabel() {
    var a=parseInt(document.getElementById('baris').value);
	var b=parseInt(document.getElementById('kolom').value);
	//table luar
	//table dalam
	document.write('<center><h1>Bilangan GanjilGenap</h3>');
	document.write('<table border="1px" style="width:100%" bordercolor="purple">');
	x=0;
	for (i=1;i<=a;i++){	
		document.write('<tr>');
		for(j=1;j<=b;j++){
			x++;
			if(x%2==0){
			document.write('<td bgcolor="blue">'+x+'</td>');}
			else{
			document.write('<td bgcolor="green">'+x+'</td>');}
		}
		document.write('</tr>');
	}
	document.write('</table></center></td><td style="width:50%">');

}
</script>
</center>
</body>
</html>
