<?php include "konek.php";
	  				//$foto = $_POST["foto"];
					
			
					//mysql_query("insert into 'gallery_foto' ('foto')
			//values ('$foto')") or die (mysql_error());
				//echo "<script>window.location.href='isi_gallery.php'</script>";	
					
	
 
$namafolder="galleryfoto/"; //folder tempat menyimpan file
if (!empty($_FILES["foto"]["tmp_name"]))
{
$jenis_gambar=$_FILES['foto']['type']; //memeriksa format gambar
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
{
$lampiran = $namafolder . basename($_FILES['foto']['name']);

//mengupload gambar dan update row table database dengan path folder dan nama image
if (move_uploaded_file($_FILES['foto']['tmp_name'], $lampiran)) {
// perintah SQL
$query="INSERT INTO gallery_foto (foto) VALUES ('$lampiran')" ;
$nip=$_GET['nip'];
$hasil=mysqli_query($link,$query);
}
}
}
if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_gallery.php?nip=$nip");
   
}
?>