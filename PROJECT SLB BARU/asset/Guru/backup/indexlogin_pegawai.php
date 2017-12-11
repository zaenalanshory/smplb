<?php
session_start();
include 'konek.php';
if(isset($_SESSION['nip'])){
    header("Location:menu_utama_guru.php?nip=$_SESSION[nip]");
} else {
    

?>

<html>
<head>
	<title></title>
	
</head>
<body>
	<br/>
	<br/>
    <br/>
	<div class="login">
	<br/>
        
		<form action="loginxpegawai.php" method="post">
			<div>
				<label>Username:</label>
				<input type="text" name="nip" required="required"/>
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" required="required"/>
			</div>			
			<div>
				<input type="submit" name="submit" value="Login">
			</div>
		</form>
	</div>
</body>
</html>

<?php } ?>