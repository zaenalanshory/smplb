<?php
   include 'konek.php';
   $no_video=$_GET[no_video];
    $nip= $_GET['nip'];
   $hapus="DELETE FROM gallery_video WHERE no_video='$no_video'";
   $hasil=mysqli_query($link, $hapus);
if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_video.php?nip=$nip"); 
    
}
?>