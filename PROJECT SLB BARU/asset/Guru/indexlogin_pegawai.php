<?php
session_start();
include 'konek.php';
if(isset($_SESSION['nip'])){
    header("Location:menu_utama_guru.php?nip=$_SESSION[nip]");
} else {
    

?>

<html>
    <head>
            <link rel="stylesheet" href="css/login.css">
    </head>
      <body>
           <div class="login">
                <div class="login-triangle"></div>
                    <h2 class="login-header">Login Guru</h2>
                        <form class="login-container" action="loginxpegawai.php" method="post">
                            <p><input type="text" placeholder="NIP" name="nip" required="required" ></p>
                            <p><input type="password" name="password" required="required" placeholder="Password"></p>
                            <p><input type="submit"  name="submit" value="Log in"></p>
                        </form>
            </div>
    </body>
</html>

<?php } ?>