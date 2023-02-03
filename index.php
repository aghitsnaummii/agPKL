<!DOCTYPE html>
<html>
<head>
	<title> Membuat Form Login dengan Javansript</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
</br>
<br/>
<center><h2> FORM LOGIN	</h2></center>
<br/>
<div class="login">
	<br/>
	<form action="login.php" method="post" onSubmit="return validasi()">
<div>
<table>Username:</table>
<input type="text" name="username"id="username" placeholder="Masukkan Username" />
</div>
<div>
<table>Password:</table>
	<input type="password" name="password"id = "password" placeholder="Masukkan Password" />
</div>
<div>
	<br>
	<input type="submit" value="login"class ="tombol"/>
	
</div>
</form>
</body>
<script type="text/javascript">
	function validasi(){
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	if (username!=""&&password!="") {
		return true;
	}else{
		alert ('Username & Password harus diisi');
		return false;}
</script>
</html>