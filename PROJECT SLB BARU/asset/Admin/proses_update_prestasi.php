<?php
include "konek.php";
//get the value from form update
	// $nomor = $_POST['nomor'];
   //$nama_siswa = $_POST['nama_siswa'];
   //	$ket_prestasi = $_POST['ket_prestasi'];
   //	$gambar = $_POST['gambar'];

//query for update data in database
    $nip=$_GET['nip'];
	$nomor=$_GET['nomor'];
 $query = "update prestasi set nomor = '$nomor',
 nama_siswa = '$_POST[nama_siswa]',ket_prestasi = '$_POST[ket_prestasi]' WHERE nomor = '$nomor'" ;
 $hasil = mysqli_query($link,$query) or die (mysqli_error());

 //see the result
if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_prestasi.php?nip=$nip");    
}
?>

