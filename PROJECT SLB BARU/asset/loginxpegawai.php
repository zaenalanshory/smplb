<?php 
session_start();
$link = mysqli_connect("localhost", "root", "", "smplbaypab");
if(!$link){
    die("Koneksi error : ".mysqli_connect_errno()." - ".mysqli_connect_error());
}

    	
    if(isset($_POST['submit'])){
        $nip = $_POST['nip'];
        $pass = $_POST['password'];
        
    }
else{
     header("location:indexlogin_pegawai.php");
}

    $query= "SELECT * FROM akun_pegawai WHERE nip='$nip' and password='$pass'";
    $login = mysqli_query($link, $query);
    if(!$login){
        die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
    }
    

    if($row=mysqli_fetch_assoc($login)){
        if($nip==$row['nip'] && $pass==$row['password']){
           $_SESSION['nip'] = $nip;
		   if($row['hak_akses']==1) {
				header("location:Admin/indexDataGuru.php?nip=$row[nip]");
		   } else {
			    header("location:Guru/menu_utama_guru.php?nip=$row[nip]");
		   }
        } else {
            header("location:indexlogin_pegawai.php");	
        }
    } else{
        header("location:indexlogin_pegawai.php");	
    }


?>