<?php
session_start();
include 'konek.php';

if(!$_SESSION['nip']){
    header("Location:indexlogin_pegawai.php");
} else {
    
    $nip=$_GET['nip'];
        
    $query = "SELECT * from data_guru WHERE nip='$nip' "; //the query for get all data in tb_student
    $result = mysqli_query($link, $query);
   
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

        <body class="  ">
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/logo.png" style="width: 25%">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
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
                                    <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        Logout<i class="fa fa-power-off"></i>
                                    </a>
                                </div>
                                </div>
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                    
                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li><a href="#smplb-aypab.html">SMPLB-YPAB</a></li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                    <!-- /.navbar -->
                        <header class="head">
                                <div class="search-bar">
                                    <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Live Search ...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                    <!-- /.main-search -->                                </div>
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
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
                                    <img class="media-object img-thumbnail user-img" alt="User Picture" width="64px" height="64" src="<?php echo $data['foto'] ?>">
                                    <span class="label label-danger user-label">Admin</span>
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
                                      <span class="link-title"> Raport </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                     <ul class="collapse">
                                      <li>
                                        <a href="index_rapot.php?nip=<?php echo $data['nip']?>">
                                          <i class="fa fa-angle-right"></i>&nbsp; Raport </a>
                                      </li>
                                    </ul>
                                    <ul class="collapse">
                                      <li>
                                        <a href="index_dataajar.php?nip=<?php echo $data['nip']?>">
                                          <i class="fa fa-angle-right"></i>&nbsp; Data Ajar  </a>
                                      </li>
                                    </ul>
                                    
                                    <ul class="collapse">
                                      <li>
                                        <a href="index_mapel.php?nip=<?php echo $data['nip']?>">
                                          <i class="fa fa-angle-right"></i>&nbsp; Mata Pelajaran  </a>
                                      </li>
                                    </ul>
                                    
                                    
                                </li>
                            
                                   <li class="">
                                    <a href="javascript:;">
                                      <i></i>
                                      <span class="link-title"> Akademik </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="indexDataGuru.php?nip=<?php echo $data['nip']?>">
                                          <i class="fa fa-angle-right"></i>&nbsp; Data Guru </a>
                                      </li>
                                      <li>
                                        <a href="index_datasiswa.php?nip=<?php echo $data['nip']?>">
                                          <i class="fa fa-angle-right"></i>&nbsp; Data Siswa </a>
                                      </li>
                                        <li>
                                        <a href="index_prestasi.php?nip=<?php echo $data['nip']?>">
                                          <i class="fa fa-angle-right"></i>&nbsp; Prestasi </a>
                                      </li>
                                        <li>
                                        <a href="index_akunpegawai.php?nip=<?php echo $data['nip']?>">
                                          <i class="fa fa-angle-right"></i>&nbsp; Akun Pegawai  </a>
                                      </li>
                                        <li>
                                        <a href="index_akunsiswa.php?nip=<?php echo $data['nip']?>">
                                          <i class="fa fa-angle-right"></i>&nbsp; Akun Siswa  </a>
                                      </li>
                                       </ul>
                                </li>
                            
                                <li class="">
                                    <a href="javascript:;">
                                      <i></i>
                                      <span class="link-title"> Non Akademik </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="index_ekskul.php?nip=<?php echo $data['nip']?>">
                                          <i class="fa fa-angle-right"></i>&nbsp; Ekstrakulikuler </a>
                                      </li>
                                       </ul>
                                </li>
                            
                                <li class="">
                                    <a href="javascript:;">
                                      <i></i>
                                      <span class="link-title"> Galery </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="index_gallery.php?nip=<?php echo $data['nip']?>">
                                          <i class="fa fa-angle-right"></i>&nbsp; Galery Foto </a>
                                      </li>
                                      <li>
                                        <a href="index_video.php?nip=<?php echo $data['nip']?>">
                                          <i class="fa fa-angle-right"></i>&nbsp; Galery Video </a>
                                      </li>
                                       </ul>
                                </li>
                            
                                <li class="">
                                    <a href="index_kegiatan.php?nip=<?php echo $data['nip']?>">
                                      <i></i>
                                      <span class="link-title"> Berita Kegiatan </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="index_contacus.php?nip=<?php echo $data['nip']?>">
                                      <i></i>
                                      <span class="link-title"> Contact Us </span>
                                      <span class="fa arrow"></span>
                                    </a>
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
<div class="row">
  <div class="col-lg-12">
        <div class="box">
            <header>
                <h5>Update Data Guru</h5>
            </header>
            <div id="collapse4" class="body">
    <?php
    include "konek.php";
    $nip=$_GET['nip'];
    $nip1=$_GET['nip1'];
    $query_mysqli = mysqli_query($link,"SELECT * FROM data_guru WHERE nip = '$nip1'")or die(mysqli_error($link));
    while($data = mysqli_fetch_array($query_mysqli)) {
    ?>
    <div id="collapse2" class="body">
        <form method="post" action="proses_updateGuru.php<?php echo "?nip=$nip&nip1=$nip1" ?>" class="form-horizontal">
            
                    <div class="form-group">
                        <label class="control-label col-lg-4">Nama Guru</label>
                        <div class="col-lg-4">
                            
                            <input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $data['nama'] ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-lg-4">Jenis Kelamin Guru</label>
                        <div class="col-lg-4">
                            <select name="jenis_kelamin" class="validate[required] form-control">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Tempat Lahir</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" value="<?php echo $data['tempat_lahir'] ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-lg-4">Tanggal Lahir</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="tanggal_lahir" autocomplete="off" value="<?php echo $data['tanggal_lahir'] ?>"></div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-lg-4">Pangkat</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="pangkat" autocomplete="off" value="<?php echo $data['pangkat'] ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-lg-4">Pendidikan Terakhir</label>
                        <div class="col-lg-4">
                            <select name="pendidikan_terakhir" class="validate[required] form-control">
                              <option> SMA/SMK </option> 
						      <option> D-1 </option> 
						      <option> D-2 </option>
						      <option> D-3 </option>
						      <option> D-4 </option>
						      <option> S-1 </option>
						      <option> S-2 </option>
						      <option> S-3 </option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-lg-4">Jabatan</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="jabatan" autocomplete="off" value="<?php echo $data['jabatan'] ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-lg-4">Agama</label>
                        <div class="col-lg-4">
                            <select name="agama" class="validate[required] form-control">
                              <option> Muslim </option> 
						      <option> Kristen protestan </option> 
						      <option> Katolik</option>
						      <option> Budha </option>
						      <option> Hindu </option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-lg-4">Alamat</label>
                        <div class="col-lg-4">
                            <input textarea name="alamat" class="form-control" rows="3" cols="45" autocomplete="off" value="<?php echo $data['alamat'] ?>"> </div>
                    </div>
                    
                    <div class="form-actions no-margin-bottom">
                        <input type="submit" name="ok1" value="UPDATE" class="btn btn-primary" style="margin-left: 47%">
                    </div>
        </form>
        <i>
<a href="indexDataGuru.php<?php echo "?nip1=$nip1&nip=$nip" ?>" value="validate" class="btn btn-primary" type="submit">Batal</a></i>
<a href="ubah_fotoguru.php<?php echo "?nip1=$nip1&nip=$nip" ?>" value="validate" class="btn btn-primary" type="submit">Ubah Foto</a>
            </div>
            </div>
    <?php } ?></div>
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


            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>


           <?php } ?>
        </body>

</html>
