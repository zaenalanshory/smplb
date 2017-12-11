<?php
include "konek.php";


$nip=$_GET['nip'];
$nip1=$_GET['nip1'];
//query for update data in database
 $query = "update akun_pegawai set password = '$_POST[password]',hak_akses = '$_POST[hak_akses]' WHERE nip = '$nip1'" ;
 $hasil = mysqli_query($link,$query) or die (mysqli_error());
 //see the result
if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_akunpegawai.php?nip=$nip");    
}
?>
