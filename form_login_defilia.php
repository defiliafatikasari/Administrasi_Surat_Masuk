<body background="bg.jpg"><br>
<center><fieldset style="border-color:#FFFFFF; width:600px; height:550px;">
    <legend align="center" style="color:#FFFFFF; font-size:18px; width:80px;"><b>LOGIN</b></legend>
	<br><br><br>
<title>WEBSITE DEFILIA FATIKASARI</title>
<style type="text/css">
    body {font-family:arial;font-size:14px;}
    label {font-size: 11pt;}
    .form_login {width:300px ;padding: 10px;font-size: 11pt;margin-bottom: 20px; background-color:#00CC99; text-align:center;}
    .tombol_login {background: #2aa7e2;color: white;font-size: 11pt;width:300px;border: none;border-radius: 3px;padding: 10px 20px; background-color:#006600;}
</style>
<form method="post" action="login_defilia.php">
 <label><img src="padlock.png" style="width:200px; height:200px;"/>
 </label><br><br>
 <label>
        <input type="text" name="NAMA_PETUGAS_DEFILIA" id="nama" class="form_login" placeholder="Username" required="required">
 </label><br><br>
 <label style="width:100px; height:100px;">
        <input type="password" name="PASSWORD_DEFILIA" id="password" class="form_login" placeholder="Password" required="required">
 </label><br><br>
 <label>
        <input type="submit" name="Masuk" id="Masuk" value="Masuk" class="tombol_login">
 </label><br><br><br>
</form>
</fieldset></center>
</body>