<?php
include 'konek.php';
    
$link1 = $_POST['link'];
$nip=$_GET['nip'];
$query= "INSERT INTO gallery_video VALUES('','$link1')";
$hasil=mysqli_query($link,$query) or die('Error: ' . mysqli_error($link));


if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_video.php?nip=$nip");    
}
?>