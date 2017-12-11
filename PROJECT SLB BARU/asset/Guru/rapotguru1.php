<?php
session_start();
include 'konek.php';

if(!$_SESSION['nip']){
    header("Location:indexlogin_pegawai.php");
} else {
    
    $nip=$_GET['nip'];
        
    $query = "SELECT * from data_guru WHERE  nip='$nip' "; //the query for get all data in tb_student
    
    $result = mysqli_query($link, $query);
    //the query for get all data in tb_student
    
    ?>

  

    

<html>
    <head>
            <meta charset="UTF-8">
            <!--IE Compatibility modes-->
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!--Mobile first-->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <title>SMPLBA-YPAB </title>

            <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
            <meta name="author" content="">

            <meta name="msapplication-TileColor" content="#5bc0de" />
            <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />

            <!-- Bootstrap -->
            <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">

            <!-- Font Awesome -->
            <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">

            <!-- Metis core stylesheet -->
            <link rel="stylesheet" href="assets/css/main.css">

            <!-- metisMenu stylesheet -->
            <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">

            <!-- onoffcanvas stylesheet -->
            <link rel="stylesheet" href="assets/lib/onoffcanvas/onoffcanvas.css">

            <!-- animate.css stylesheet -->
            <link rel="stylesheet" href="assets/lib/animate.css/animate.css">
            <!-- toogle button -->
             <link rel="stylesheet" href="css/tbadmin.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

            <!--For Development Only. Not required -->
            <script>
                less = {
                    env: "development",
                    relativeUrls: false,
                    rootpath: "/assets/"
                };
            </script>
            <link rel="stylesheet" href="assets/css/style-switcher.css">
            <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

  </head>
    <body class="">
        <i> <a href="#maincontent" type="submit" value="Validate" class="btn btn-primary " style="margin-left:10px">Skip </a> </i>
        <i> <a href="#" type="submit" value="Validate" class="btn btn-primary warna" id="contrast1" style="margin-left:10px"> High Contrast </a> </i>
        <i> <a href="#" type="submit" value="Validate" class="btn btn-primary size" id="font1" style="margin-left:10px"> Font Size </a> </i>
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/logo.png" style="width: 25%">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            
                            </header>
                            <div class="topnav">
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                                       class="btn btn-default btn-sm" id="toggleFullScreen">
                                        <i class="glyphicon glyphicon-fullscreen"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a href="hal_logout.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        Logout<i class="fa fa-power-off"></i>
                                    </a>
                                </div>
                                </div>
                          
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                    <!-- /.navbar -->
                        <header class="head">

                                <!-- /.search-bar -->
                            <div class="main-bar">
                                 <h3 align="center">
              <i  ></i>&nbsp;
            SMPLB-AYPAB
          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                <!-- /#top -->
                    <div id="left">
                        <div class="media user-media bg-dark dker">
                               <?php
                            while ($data = mysqli_fetch_array($result))  { ?>
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="user-wrapper bg-dark">
                                <a class="user-link" href="">
                                    <img class="media-object img-thumbnail user-img" alt="User Picture" width="64px" height="64" src="../Admin/<?php echo $data['foto'] ?>">
                                    <span class="label label-danger user-label">Guru</span>
                                </a>
                        
                                <div class="media-body">
                                    <h5 class="media-heading">Nama</h5>
                                    <ul class="list-unstyled user-info">
                                        
                         

                                        <li><a href=""><?php echo $data['nama'] ?></a></li>
                                        <li>NIP : <br>
                                            <small><?php echo $data['nip'] ?></small>
                                        </li></ul>
                                </div>
                            </div>
                        </div>
                        <!-- #menu -->
                        <ul id="menu" class="bg-blue dker">
                                  <li class="nav-header">Menu</li>
                                  <li class="nav-divider"></li>
                                   <li class="">
                                    <a href="javascript:;">
                                      <i></i>
                                      <span class="link-title"> Data Diri </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="menu_utama_guru.php?nip=<?php echo $data['nip']?>">
                                          <i class="fa fa-angle-right"></i>&nbsp; Edit Data Diri </a>
                                      </li>
                                       </ul>
                                          <ul class="collapse">
                                      <li>
                                        <a href="update_akunpegawai.php?nip=<?php echo $data['nip']?>">
                                          <i class="fa fa-angle-right"></i>&nbsp; Edit Password </a>
                                      </li>
                                       </ul>
                                </li>
                            
                                <li class="">
                                    <a href="javascript:;">
                                      <i></i>
                                      <span class="link-title"> Rapot </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="rapotguru1.php?no=<?php echo $data['no']?>&nip=<?php echo $data['nip']?>"> 
                                          
                                          <i class="fa fa-angle-right"></i>&nbsp; Laporan Rapot </a>
                                      </li>
                                       </ul>
                                </li>
                                </ul>
                        <!-- /#menu -->
                     </div>
                 <!-- /#left -->
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <?php } ?>
                            <!--Begin Datatables-->
<div class="row latar">
  <div class="col-lg-12 latar">
        <div class="box latar">
            <div id="maincontent">
            <headerr class="latar"> 
                <h5 class="box besar">LAPORAN RAPOT</h5>
            </headerr>
            <div id="collapse4" class="body latar">
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped" class="latar">
                    <thead class="latar">
<?php
    
include 'konek.php';
$query2 = "SELECT rapot.no, rapot.no_induk, data_ajar.kode_mapel, rapot.nilai, rapot.deskripsi FROM rapot, data_ajar WHERE nip='$nip' AND rapot.kode_mapel=data_ajar.kode_mapel"; //the query for get all data in tb_student
$result2 = mysqli_query($link,$query2);

    ?>
                        <tr>
                            <th width="10%"><center><p class="box besar"> No</p> </center></th>
                            <th width="10%"><center><p class="box besar"> No induk </p></center></th>
                            <th width="10%"><center><p class="box besar"> Kode Mapel </p></center></th>
                            <th width="10%"><center><p class="box besar"> Nilai</p> </center></th>
                            <th width="10%"><center><p class="box besar"> Deskripsi </p></center></th>
                            <th width="10%"><center><p class="box besar"> Action</p> </center></th>
                    </tr>
                    </thead>
                    <tbody>
    <?php
    $nomor=1;
    $no="";
    while ($data1 = mysqli_fetch_array($result2))  { 
    $no=$data1['no'];
    ?>
  <tr align='center' class="latar">
      <td class="latar"><p class="box besar"><?php echo $nomor++ ?></p></td>
      <td class="latar"><p class="box besar"><?php echo $data1['no_induk'] ?></p></td>
      <td class="latar"><p class="box besar"><?php echo $data1['kode_mapel']?></p></td>
      <td class="latar"><p class="box besar"><?php echo $data1['nilai']?></p></td>
      <td class="latar"><p class="box besar"><?php echo $data1['deskripsi']?></p></td>
            <td class="latar"> <i> <a href="update_nilai.php<?php echo "?nip=$nip&no=$no" ?>" type="submit" value="Validate" class="btn btn-primary">INPUT NILAI </a> </i></td>

       </tr>
    
<?php } ?> 
                    </tbody>
</table>
                </div>
      </div>
    </div>
      </div>
            </div>
                </div>
                        </div>
                    </div> 
            </div>
                        
<!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2017 &copy; SMPLB-AYPAB</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->
            
            <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->
            <script src="assets/lib/jquery/jquery.js"></script>


            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- onoffcanvas -->
            <script src="assets/lib/onoffcanvas/onoffcanvas.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>
            <script src="/assets/lib/jquery-validation/jquery.validate.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.26.6/js/jquery.tablesorter.min.js"></script>

            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>
            <script src="js/toggle.js"></script>


       <?php } ?>
        </body>

</html>