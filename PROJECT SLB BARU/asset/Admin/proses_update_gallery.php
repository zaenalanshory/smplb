<?php
include "konek.php";
//get the value from form update
	// $no_foto = $_POST['no_foto'];
   // $foto = $_POST['foto'];
//query for update data in database
$nip=$_GET['nip'];
 $query = "update gallery_foto set foto = '$_POST[foto]' WHERE no_foto = '$_GET[no_foto]'" ;
 $hasil = mysqli_query($link,$query);

 //see the result
 if (!$hasil) {
	 die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
 } else {
	 header("Location:index_gallery.php?nip=$nip");
}

?>