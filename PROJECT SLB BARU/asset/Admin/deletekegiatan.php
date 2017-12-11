<?php
include "konek.php";
//get the value from form update
 $id_kegiatan = $_GET['id_kegiatan']; //get the no which will deleted
 $nip=$_GET['nip'];
//query for update data in database
 $query = "DELETE from kegiatan WHERE id_kegiatan = '$id_kegiatan'" ;
 $hasil = mysqli_query($link,$query);
 //see the result
if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_kegiatan.php?nip=$nip");
    echo "data asik";
}