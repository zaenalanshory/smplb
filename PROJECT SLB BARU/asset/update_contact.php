<?php
include "konek.php";


		$name = $_POST['name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];
		
		$result ="INSERT INTO contact_us VALUES('','$name', '$email', '$comment')";
		
	$hasil=mysqli_query($link,$result) or die('Error: ' . mysqli_error($link));

if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:isi_contact.php");    
}
?>

