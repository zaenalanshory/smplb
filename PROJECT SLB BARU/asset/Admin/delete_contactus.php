<?php
include "konek.php";
//get the value from form update
 $no_komentar = $_GET['no_komentar']; //get the no which will deleted
 
//query for update data in database
 $query = "DELETE from contact_us WHERE no_komentar = '$no_komentar'" ;
 $hasil = mysqli_query($link,$query);
 $nip=$_GET['nip'];
 //see the result
if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_contactus.php?nip=$nip");
  
}