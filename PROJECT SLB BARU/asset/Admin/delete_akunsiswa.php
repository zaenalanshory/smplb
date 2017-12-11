<?php
include "konek.php";
//get the value from form update
 $no_induk = $_GET['no_induk']?? ''; //get the no which will deleted
 $nip=$_GET['nip'];
//query for update data in database
 $query = "DELETE from akun_siswa WHERE no_induk = '$no_induk'" ;
 $hasil = mysqli_query($link,$query) or die('Error: ' . mysqli_error($link));
 //see the result
if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_akunsiswa.php?nip=$nip");    
}
?>