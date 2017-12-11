<?php
   include 'konek.php';
   $nip=$_GET['nip'];
    $nip1=$_GET['nip1'];
   $hapus="DELETE FROM data_guru WHERE nip='$nip1'";
   $hasil=mysqli_query($link, $hapus);
   header("location:indexDataGuru.php?nip=$nip");
?>