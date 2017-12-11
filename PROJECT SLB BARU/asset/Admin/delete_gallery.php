<?php
	include 'konek.php';
	$no_foto=$_GET[no_foto];
    $nip=$_GET['nip'];
	$query="DELETE from gallery_foto WHERE no_foto='$no_foto'";
	$hasil=mysqli_query($link,$query);
if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_gallery.php?nip=$nip");
    echo "data asik";
}