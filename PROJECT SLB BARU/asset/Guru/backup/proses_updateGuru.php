<?php
include 'konek.php';
//get the value from form update
$nip=$_POST['nip'];
$foto=$_POST['foto'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jabatan=$_POST['jabatan'];
$pendidikan_terakhir=$_POST['pendidikan_terakhir'];
$agama=$_POST['agama'];

//query for update data in database
$host = mysqli_query($link, "UPDATE data_guru SET foto='$foto', nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jabatan='$jabatan', pendidikan_terakhir='$pendidikan_terakhir', agama='$agama' WHERE nip='$nip'");
 //see the result
if(!$host){
    
    if($data=mysqli_fetch_array($host)){
        header("location: menu_utama_guru.php?nip=$data[nip]");
}
}


?>
 
