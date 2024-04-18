<?php
@session_start();
include "koneksi_defilia.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>WEBSITE DEFILIA FATIKASARI</title>
<style type="text/css">
body {font-family:arial; font-size:14px; background-color:#00FF99}
#canvas {width:960px; margin:0 auto; border:1px solid silver;}
#header {font-size:40px; background:url(surat.jpg); padding:20px; background-size:1500px; text-align:left; height:90px; color:#006600; }
#menu {background-color:#99CCCC;}
#menu ul {list-style:none; margin:0; padding:0;}
#menu ul li {display:inline-table;}
#menu ul li a {display:block; text-decoration:none; line-height:30px; padding:0 10px; color:#00FFCC; font-family:Algerian;}
#isi {min-height:300px; padding:20px; background:url(bg.jpg)}
#footer {text-align:center; padding:20px; background-color:#999999;}
</style>
</head>
<body>
     <div id="header">
	 <b>ADMINISTRASI SURAT</b><br>
	 <b style="font-size:14px;">SELAMAT DATANG DI HALAMAN ARSIP SURAT MASUK<b>
	 </div>
	 <div id="menu">
	      <ul>
		      <li style="background-color:#333300;"><a href="?page=home">HOME</a></li>
			  <li style="background-color:#333300;"><a href="?page=suratmasuk">INPUT DATA SURAT</a></li>
			  <li style="background-color:#333300;"><a href="Cetaklaporan_suratmasuk_defilia.php" target="_blank">REPORT/CETAK DATA SURAT</a></li>
			  <li style="background-color:#000066; float:right;"><a href="logout_defilia.php">LOGOUT</a></li>
		  </ul>
	</div><br>
	<div id="isi">
	<?php
	$page = @$_GET['page'];
	if($page == "suratmasuk") {
	include "form_input_suratmasuk_defilia.php"; }
	else if ($page == "home") {
	echo "<br><br><br><br><br><h1><center><b>ANDA LOGIN SEBAGAI defilia</b></center></h1>";}
	?>
	</div>
	<div id="footer">
	Copyright 2022-Defilia Fatikasari
	</div>
</body>
</html>