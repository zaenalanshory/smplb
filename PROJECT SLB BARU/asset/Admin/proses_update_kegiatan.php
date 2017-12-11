<?php
include "konek.php";
//get the value from form update
   //$judul_kegiatan = $_POST['judul_kegiatan'];
				//	$tgl_kegiatan = $_POST['tgl_kegiatan'];
				//	$bulan_kegiatan = $_POST['bulan_kegiatan'];
				//	$foto_judul = $_POST['foto_judul'];
				//	$foto1 = $_POST['foto1'];
				//	$foto2 = $_POST['foto2'];
				//	$foto3 = $_POST['foto3'];
                //    $isi = $_POST['isi'];


//query for update data in database
$nip=$_GET['nip'];
 $query = "update kegiatan set judul_kegiatan = '$_POST[judul_kegiatan]',tgl_kegiatan = '$_POST[tgl_kegiatan]',bulan_kegiatan = '$_POST[bulan_kegiatan]',isi = '$_POST[isi]' WHERE id_kegiatan = '$_POST[id_kegiatan]'" ;
 $hasil = mysqli_query($link,$query) or die (mysqli_error());
 //see the result
if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_kegiatan.php?nip=$nip");    
}
?>
