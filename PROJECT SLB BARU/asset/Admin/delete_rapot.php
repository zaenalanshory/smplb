<?php
include "konek.php";
//get the value from form update
 $no= $_GET['no']; //get the no which will deleted
 $nip= $_GET['nip']; 
//query for update data in database
 $query = "DELETE from rapot WHERE no = '$no'" ;
 $hasil = mysqli_query($link,$query);
 //see the result
if(!$hasil){
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}else {
	header("location:index_rapot.php?nip=$nip"); 
    
}
?>