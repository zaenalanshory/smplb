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
$nip=$_GET['nip'];

//query for update data in database
 $query = "update ekskul set nama_ekskul = '$_POST[nama_ekskul]',deskripsi = '$_POST[deskripsi]' WHERE id = '$_GET[id]'" ;
 $hasil = mysqli_query($link,$query) or die (mysqli_error());
 //see the result
if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_ekskul.php?nip=$nip");    
}
?>
