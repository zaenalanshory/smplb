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

if(isset($_POST['no_induk']) AND isset($_POST['kode_mapel']) AND isset($_POST['nilai']) AND isset($_POST['deskripsi'])){
    $no_induk=$_POST['no_induk'];
    $kode_mapel=$_POST['kode_mapel'];
    $nilai=$_POST['nilai'];
    $deskripsi=$_POST['deskripsi'];
    $nip = $_GET['nip'];
	$no=$_GET['no'];
} else {
    header("Location:update_nilai.php?nip=$nip&no=$no");
}


//query for update data in database


 $query = "UPDATE rapot SET no_induk = '$no_induk', kode_mapel = '$kode_mapel' , nilai = '$nilai',deskripsi = '$deskripsi' WHERE no = '$no'" ;
 $hasil = mysqli_query($link, $query) or die (mysqli_error());
 //see the result
 if (!$hasil) {
	 die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
 } else {
	 header("Location:rapotguru1.php?nip=$nip");
}

?>
