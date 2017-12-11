<?php
session_start();
include ("konek.php");

if(isset($_POST['upload'])){
    $nip=$_GET['nip'];
	$id_kegiatan=$_GET['id_kegiatan'];
	$ekstensi_diperbolehkan	= array('png','jpg');
    
    $namafolder="kegiatanfoto/";
	$nama = $namafolder . basename($_FILES['file']['name']);
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	
 
	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran <= 5000000){			
			move_uploaded_file($file_tmp,$nama);
			$query="UPDATE kegiatan SET foto3='$nama' WHERE id_kegiatan='$id_kegiatan'";
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
header("refresh:1;update_kegiatan3.php?id_kegiatan=$id_kegiatan&nip=$nip");	
		

?>