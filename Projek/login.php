<html>
<head>
<title>Login | user</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login.css" type="text/css">
<script language= "javascript">
 </script>
</head>
<body>
<style>
body {
		background-image: url("1212.jpg");
}

</style>
<form action="ceklogin.php" method="POST">

<div class="container">

<div class="header">
	<img src="3131.jpg" alt="logo"/>
	<label><h2>WELCOME</h2></label>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

</div>
<br>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="unamee"  required>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
	
	
<input type="submit" value="Login" class="button"  ></input> </form>
    <input type="checkbox" checked="checked" required><span>Ingat Saya</span>
<div class="container" style="background-color:#f1f1f1">
    <p class="message">Not registered? <a href="registrasiuser.php">Create an account</a></p>
  </div>
</form>
</body>
</html>
