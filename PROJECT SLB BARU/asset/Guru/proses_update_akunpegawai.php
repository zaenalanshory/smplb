<?php
session_start();
include 'konek.php';


if(isset($_POST['password'])) {

	$nip=$_GET['nip'];
	$password=$_POST['password'];
} else {
	header("Location:menu_utama_guru.php?nip=$nip");
}
	
//query for update data in database
$query="UPDATE akun_pegawai SET password='$password' WHERE nip='$nip'";
$host = mysqli_query($link, $query);
 //see the result
if(!$host){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
} else {
	header("location:update_akunpegawai.php?nip=$nip");    
    echo"<h4> data Sukses </h4>";
}
?>
