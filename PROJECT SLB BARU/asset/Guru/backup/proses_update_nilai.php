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

if(isset($_POST['submit'])){
    $no_induk=$_POST['no_induk'];
    $kode_mapel=$_POST['kode_mapel'];
    $nilai=$_POST['nilai'];
    $deskripsi=$_POST['deskripsi'];
    $nip = $_GET['nip'];
} else {
    header("Location:update_nilai.php");
}


//query for update data in database


 $query = "update rapot set no_induk = '$no_induk',kode_mapel = '$kode_mapel' ,nilai = '$nilai',deskripsi = '$deskripsi' WHERE no = '$no'" ;
 $hasil = mysqli_query($link, $query) or die (mysqli_error());
 //see the result
 if ($hasil) {
      if($data=mysqli_fetch_assoc($hasil)){
   
       header("Location:rapotguru.php?nip=$data[nip]&no=$data[no]");
	   echo "<h4> update data success </h4>";
          
      }
 
}

?>
