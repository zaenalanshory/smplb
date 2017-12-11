<?php
include 'konek.php';
$no_induk = $_POST['no_induk'];
$nama_siswa = $_POST['nama_siswa'];
$alamat = $_POST['alamat'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$no_telp_orangtua = $_POST['no_telp_orangtua'];
$nip=$_GET['nip'];



$namafolder="siswafoto/"; //folder tempat menyimpan file
if (!empty($_FILES["foto"]["tmp_name"]))
{
$jenis_gambar=$_FILES['foto']['type']; //memeriksa format gambar
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
{
$lampiran = $namafolder . basename($_FILES['foto']['name']);

//mengupload gambar dan update row table database dengan path folder dan nama image
if (move_uploaded_file($_FILES['foto']['tmp_name'], $lampiran)) {


$query= "INSERT INTO data_siswa VALUES('$no_induk','$nama_siswa','$lampiran','$alamat','$nama_ayah','$nama_ibu','$no_telp_orangtua')";
$berhasil=mysqli_query($link,$query) or die('Error: ' . mysqli_error($link));
}
}
}


if(!$berhasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_datasiswa.php?nip=$nip");    
}
?>