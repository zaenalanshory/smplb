<?php include "konek.php";
                    $judul_kegiatan = $_POST['judul_kegiatan'];
					$tgl_kegiatan = $_POST['tgl_kegiatan'];
					$bulan_kegiatan = $_POST['bulan_kegiatan'];
					
					
                    $isi = $_POST['isi'];
					
$namafolder="kegiatanfoto/"; //folder tempat menyimpan file
if (!empty($_FILES["foto_judul"]["tmp_name"]))
{
$jenis_gambar=$_FILES['foto_judul']['type'];
 $jenis_gambar=$_FILES['foto1']['type'];
    $jenis_gambar=$_FILES['foto2']['type'];
    $jenis_gambar=$_FILES['foto3']['type']; //memeriksa format gambar
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png" || $jenis_gambar=="image/JPG" || $jenis_gambar=="image/PNG" || $jenis_gambar=="image/JPEG")  
{
$lampiran = $namafolder . basename($_FILES['foto_judul']['name']);
$lampiran1 = $namafolder . basename($_FILES['foto1']['name']);
$lampiran2 = $namafolder . basename($_FILES['foto2']['name']);
$lampiran3 = $namafolder . basename($_FILES['foto3']['name']);

//mengupload gambar dan update row table database dengan path folder dan nama image
if (move_uploaded_file($_FILES['foto_judul']['tmp_name'], $lampiran) && move_uploaded_file($_FILES['foto1']['tmp_name'], $lampiran1) && move_uploaded_file($_FILES['foto2']['tmp_name'], $lampiran2) && move_uploaded_file($_FILES['foto3']['tmp_name'], $lampiran3)) {			
					
	
 

// perintah SQL
$query="INSERT INTO kegiatan VALUES ('','$judul_kegiatan' ,' $tgl_kegiatan','$bulan_kegiatan','$lampiran','$lampiran1','$lampiran2','$lampiran3','$isi') " ;
$nip=$_GET['nip'];

$hasil=mysqli_query($link,$query);
}
}
}

if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_kegiatan.php?nip=$nip");    
}
?>

