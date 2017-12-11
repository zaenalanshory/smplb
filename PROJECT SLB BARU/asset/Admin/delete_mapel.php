<?php
include "konek.php";
//get the value from form update
 $kode_mapel = $_GET['kode_mapel']; //get the no which will deleted
 $nip=$_GET['nip'];
//query for update data in database
 $query = "DELETE from mapel WHERE kode_mapel = '$kode_mapel'" ;
 $hasil = mysqli_query($link,$query);
 //see the result
if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_mapel.php?nip=$nip");
}