<?php
session_start();
include ("konek.php");

if(isset($_POST['upload'])){
	$nip=$_GET['nip'];
    $nip1=$_GET['nip1'];
	$ekstensi_diperbolehkan	= array('png','jpg');
    
    $namafolder="gurufoto/";
	$nama = $namafolder . basename($_FILES['file']['name']);
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	
 
	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran <= 5000000){			
			move_uploaded_file($file_tmp,$nama);
			$query="UPDATE data_guru SET foto='$nama' WHERE nip='$nip1'";
			$result=mysqli_query($link, $query);
			if(!$result) {
				die("GAGAL MENGUPLOAD GAMBAR : ".mysqli_errno($link)." - ".mysqli_error($link));
			}
		} else {
			echo "UKURAN FILE TERLALU BESAR";
		}
	} else {
		echo "EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN";
	}
}

$_SESSION['nip']=$nip;

echo "<h3>Perubahan Berhasil Dilakukan</h3>";
header("refresh:1;editGuru.php?nip=$nip&nip1=$nip1");	
		

?>