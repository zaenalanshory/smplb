<?php
include 'konek.php';
//get the value from form update

if(isset($_POST['nama']) AND isset($_POST['alamat']) AND isset($_POST['jenis_kelamin']) AND isset($_POST['tempat_lahir']) 
	AND isset($_POST['tanggal_lahir']) AND isset($_POST['jabatan']) AND isset($_POST['pangkat']) AND isset($_POST['pendidikan_terakhir']) AND isset($_POST['agama'])) {

	$nip=$_GET['nip'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$pangkat=$_POST['pangkat'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$jabatan=$_POST['jabatan'];
	$pendidikan_terakhir=$_POST['pendidikan_terakhir'];
	$agama=$_POST['agama'];
} else {
	header("Location:editGuru.php?nip=$nip");
}
	
//query for update data in database
$query="UPDATE data_guru SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', 
tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', pangkat='$pangkat', jabatan='$jabatan', pendidikan_terakhir='$pendidikan_terakhir', agama='$agama' WHERE nip='$nip'";
$host = mysqli_query($link, $query);
 //see the result
if(!$host){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
} else {
	header("location:menu_utama_guru.php?nip=$nip");    
}



?>
 
