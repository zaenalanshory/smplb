<?php include "konek.php";
	  				//$nama_siswa = $_POST["nama_siswa"];
					//$ket_prestasi = $_POST["ket_prestasi"];
					//$gambar = $_POST["gambar"];

                    $nama_siswa = $_POST['nama_siswa'];
					$ket_prestasi = $_POST['ket_prestasi'];
				
					
$namafolder="prestasifoto/"; //folder tempat menyimpan file
if (!empty($_FILES["gambar"]["tmp_name"]))
{
$jenis_gambar=$_FILES['gambar']['type']; //memeriksa format gambar
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png" || $jenis_gambar=="image/JPG" || $jenis_gambar=="image/PNG" || $jenis_gambar=="image/JPEG")
{
$lampiran = $namafolder . basename($_FILES['gambar']['name']);

//mengupload gambar dan update row table database dengan path folder dan nama image
if (move_uploaded_file($_FILES['gambar']['tmp_name'], $lampiran)) {
	
 
$nip=$_GET['nip'];
// perintah SQL
$query="INSERT INTO prestasi VALUES ('','$nama_siswa' ,' $ket_prestasi','$lampiran') " ;

$host = mysqli_query($link, $query);
}
}
}

 //see the result
if(!$host){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_prestasi.php?nip=$nip");    
}
?>