<?php include "konek.php";
	  				//$judul_kegiatan = $_POST["judul"];
					//$tgl_kegiatan = $_POST["tgl"];
					//$bulan_kegiatan = $_POST["bulan"];
					//$fjudul = $_POST["fjudul"];
					//$fisi1 = $_POST["fisi1"];
					//$fisi2 = $_POST["fisi2"];
					//$fisi3 = $_POST["fisi3"];
                   // $isi_kegiatan = $_POST["isi_kegiatan"];

                    $no_induk = $_POST['no_induk'];
					$password = $_POST['password'];
					
					//mysql_query("insert into 'kegiatan' ('judul_kegiatan','tgl_kegiatan','bulan_kegiatan','foto_judul','foto1','foto2','foto3','isi') 
			//values ('$judul_kegiatan','$tgl_kegiatan','$bulan_kegiatan','$fjudul','$fisi1','$fisi2','$fisi3','$isi_kegiatan')") or die (mysql_error());
				//echo "<script>window.location.href='isi_kegiatan.php'</script>";	
					
	
 
$nip=$_GET['nip'];
// perintah SQL
$query="INSERT INTO akun_siswa VALUES ('$no_induk' ,' $password') " ;
$hasil=mysqli_query($link,$query) or die('Error: ' . mysqli_error($link));

if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_akunsiswa.php?nip=$nip");    
}
?>

