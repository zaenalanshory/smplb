<?php
include 'konek.php';
$no_induk = $_POST['no_induk'];
$nama_siswa = $_POST['nama_siswa'];
$foto = $_POST['foto'];
$alamat = $_POST['alamat'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$no_telp_orangtua = $_POST['no_telp_orangtua'];

$link = mysqli_query($host, "UPDATE data_siswa SET nama_siswa='$nama_siswa', foto='$foto', alamat='$alamat', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', no_telp_orangtua='$no_telp_orangtua' WHERE no_induk='$no_induk'");
if(!$link){
    die("Query error : ".mysqli_errno($host)." - ".mysqli_error($host));
}


header("location: indexSiswa.php?pesan=update");
?>
