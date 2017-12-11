<?php 
include 'konek.php';
        $nip1=$_POST['nip1'];
        $nip=$_GET['nip'];
        $nama=$_POST['nama'];
        $jenis_kelamin=$_POST['jenis_kelamin'];
        $tempat_lahir=$_POST['tempat_lahir'];
        $tanggal_lahir=$_POST['tanggal_lahir'];
        $pangkat=$_POST['pangkat'];
        $pendidikan_terakhir=$_POST['pendidikan_terakhir'];
        $jabatan=$_POST['jabatan'];
        $agama=$_POST['agama'];
        $alamat=$_POST['alamat'];

$namafolder="gurufoto/"; //folder tempat menyimpan file
if (!empty($_FILES["foto"]["tmp_name"]))
{
$jenis_gambar=$_FILES['foto']['type']; //memeriksa format gambar
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
{
$lampiran = $namafolder . basename($_FILES['foto']['name']);

//mengupload gambar dan update row table database dengan path folder dan nama image
if (move_uploaded_file($_FILES['foto']['tmp_name'], $lampiran)) {

//query untuk insert data
$insert="INSERT INTO data_guru VALUES('$nip1','$lampiran','$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$pangkat','$pendidikan_terakhir','$jabatan','$agama','$alamat')";
//mysql_query($insert);
$berhasil=mysqli_query($link,$insert);
}
}
}

if(!$berhasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:indexDataGuru.php?nip=$nip");    
}
?>