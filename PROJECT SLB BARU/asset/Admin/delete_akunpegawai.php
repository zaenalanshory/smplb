<?php
include "konek.php";
//get the value from form update
 $nip = $_GET['nip']; //get the no which will deleted
 $nip1=$_GET['nip1'];
//query for update data in database
 $query = "DELETE from akun_pegawai WHERE nip = '$nip1'" ;
 $hasil = mysqli_query($link,$query);
 //see the result
if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_akunpegawai.php?nip=$nip");
  
}