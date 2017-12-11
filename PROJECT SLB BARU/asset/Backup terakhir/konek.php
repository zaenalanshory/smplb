<?php
	$link = mysqli_connect("localhost", "root", "", "smplbaypab");
	if(!$link){
		die("koneksi error : ".mysqli_connect_errno()."-".mysqli_connect_error());
	}
?>