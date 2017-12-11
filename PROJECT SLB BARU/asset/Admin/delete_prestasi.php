<?php
	include 'konek.php';
    $nip=$_GET['nip'];
	$nomor=$_GET['nomor'];
	$query="DELETE from prestasi WHERE nomor='$nomor'";
	$host=mysqli_query($link,$query);
if(!$host){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_prestasi.php?nip=$nip");
  
}

	