<?php
include 'konek.php';
//get the value from form update
$no_induk = $_POST['no_induk'];
$nama_siswa = $_POST['nama_siswa'];
$alamat = $_POST['alamat'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$no_telp_orangtua = $_POST['no_telp_orangtua'];
$nip = $_GET['nip'];
//query for update data in database
$host = mysqli_query($link, "UPDATE data_siswa SET no_induk='$no_induk', nama_siswa='$nama_siswa', alamat='$alamat', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', no_telp_orangtua='$no_telp_orangtua' WHERE no_induk='$no_induk'");
 //see the result
if(!$host){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_datasiswa.php?nip=$nip");    
}
?>

