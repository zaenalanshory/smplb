
<html>
    <head>
    </head>
<body>

    
<?php
    if(isset($_GET['nip'])){
        $nip=$_GET['nip'];
    } else {
        $nip="";
    }
    
    
    
include 'konek.php';
$query = "SELECT rapot.no, rapot.no_induk, data_ajar.kode_mapel, rapot.nilai, rapot.deskripsi FROM rapot, data_ajar WHERE nip='$nip' AND rapot.kode_mapel=data_ajar.kode_mapel"; //the query for get all data in tb_student
$result = mysqli_query($link, $query);

?>

    
<h1>GURU</h1>
    
<table border="1" cellspacing="0" cellpadding="5">
<tr>
		<td> <b> No </b> </td>
        <td> <b> id </b> </td>
        <td> <b> Nomor Induk</b> </td>
        <td> <b> Kode Mapel</b> </td>
        <td> <b> Nilai </b> </td>
        <td> <b> Deskripsi </b> </td>
        
        
     </tr>

    <?php
    $nomor=1;
while ($data = mysqli_fetch_array($result))  { ?>
  <tr align='center'>
            <td><?php echo $nomor++ ?></td>
            <td><?php echo $data['no'] ?></td>
  			<td><?php echo $data['no_induk'] ?></td>
            <td><?php echo $data['kode_mapel']?></td>
            <td><?php echo $data['nilai']?></td>
            <td><?php echo $data['deskripsi']?></td>
            <td> <i> <a href="update_nilai.php?no=<?php echo $data['no'] ?>&nip=$nip"> Update </a> </i></td>
            <td> <i> <a href="delete_rapot.php?no=<?php echo $data['no'] ?>">Hapus </a> </i></td>
       </tr>
    
<?php } ?>

</table>

</body>
</html>