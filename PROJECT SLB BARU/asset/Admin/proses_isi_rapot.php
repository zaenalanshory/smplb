<?php include "konek.php";
	  				
                    $no_induk = $_POST['no_induk'];
					$kode_mapel = $_POST['kode_mapel'];
					$nilai = $_POST['nilai'];
                    $deskripsi = $_POST['deskripsi'];
// perintah SQL
$query="INSERT INTO rapot VALUES ('','$no_induk' ,'$kode_mapel','$nilai','$deskripsi') " ;
$nip=$_GET['nip'];
$hasil=mysqli_query($link,$query);
if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_rapot.php?nip=$nip");    
}
?>

