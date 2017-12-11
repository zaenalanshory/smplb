<!DOCTYPE html>
<?php
include 'konek.php';
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gallery</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet" >
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" >
    <link rel="stylesheet" href="css/owl.theme.css" >
    <link rel="stylesheet" href="css/owl.transitions.css" >

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">  
    
    <!-- Colors CSS -->
   
    <link rel="stylesheet" type="text/css" href="css/color/blue.css" title="blue">
   

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    
    <!-- Modernizer js -->
    <script src="js/modernizr.custom.js"></script>
    
    <link rel="stylesheet" href="css1/demo.css">
	<link rel="stylesheet" href="css1/footer-distributed-with-address-and-phones.css">
    <title>Lolwork | Pages | Full Width</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>

<body class="index">
        <div id="mySidenav" class="sidenav">
            <a href="#" id="contrast1" class="warna"> High Contrast</a>
            <a href="#" id="font1" class="size"> Font Size</a>
        </div>
    


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#maincontent">SKIP</a>
                <a class="navbar-brand page-scroll" href="index.html">SMPLB A YPAB</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                   <li>
                        <a href="about.html" >About Us </a>
                    </li>
					<li class="dropdown">
                       <a href="#news" class="dropdown-toggle" data-toggle="dropdown">News <b class="caret"></b></a>
					   <ul class="dropdown-menu">
							<li><a href="#">Berita Show</a></li>
							<li><a href="kegiatan1.php">Berita Kegiatan</a></li>
						</ul>
                    </li>
                    <li class="dropdown">
                          <a href="#gallery" class="dropdown-toggle" data-toggle="dropdown">Gallery <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="gallery.php">Foto</a></li>
							<li><a href="galleryVideo.php">Video</a></li>
						</ul>
                    </li>
                    <li class="dropdown">
                        <a href="#akademik" class="dropdown-toggle" data-toggle="dropdown">Akademik <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="DataGuruIndex.php">Data Guru</a></li>
							<li><a href="DataSiswa.php">Data Siswa</a></li>
                            <li><a href="prestasi.php">Prestasi</a></li>
						</ul>
                    </li>
                    <li >
                       <a href="isi_contact.php">Contact Us </a>
                    </li>
                    <li>
                          <a href="donate.html">Donate Us</a>
                    </li>
                    <li class="dropdown">
                        <a href="#sistemakademik" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="indexlogin_pegawai.php">Login Guru</a></li>
							<li><a href="indexlogin.php">Login Siswa</a></li>
						</ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/pp.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h2 class="heading">Gallery</h2>
      <p>Kumpulan Gambar Kegiatan Siswa</p>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
        <!--Tulis komen -->
    <div id ="maincontent">
    <div class="wrapper row3">
        <div class="latar">
  <main class="hoc container clear latar box besar"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>
            <br>
            <br>
            <header class="heading"><p class="box besar">Kegiatan Siswa</p></header>
          <ul>
		  <?php
		  $perPage=5; //per halaman
$page=isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$start=($page > 1) ? ($page * $perPage) - $perPage : 0;

$articles="SELECT * FROM gallery_foto LIMIT $start, $perPage";
$result2=mysqli_query($link, $articles);

$result=mysqli_query($link, "SELECT * FROM gallery_foto order by no_foto desc");
$total=mysqli_num_rows($result);

$pages=ceil($total/$perPage);
?>
	  <?php while($row=mysqli_fetch_assoc($result2)) { ?>
            <li class="one_quarter margingallery"><a href="#"><img class="zoom-image" src="Admin/<?php echo $row['foto'] ?>" alt=""></a></li>
             <?php } ?>
          </ul>
		
        </figure>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
              
			  
<nav class="pagination">
        <ul>
		<?php for($i=1; $i<=$pages; $i++){ ?>
          <li><a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
		  <?php } ?>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
        </div>
</div>
    <footer class="footer-distributed">

			<div class="footer-left">
                 
                <img src="images/logo.png" style="height: 200px">
                <br><br>
				<p class="footer-company-name">&emsp;SMPLB A YPAB&copy;2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Jalan Gebang Putih No.5, Gebang Putih, Sukolilo</span> Surabaya, Jawa Timur</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>031-5945490</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">smplba_ypabs@yahoo.com</a></p>
				</div>

			</div>

			<div class="footer-right">
            </div>

		</footer>
    
 
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
 
    <!-- jQuery Version 2.1.1 -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/count-to.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/script.js"></script>
    <!-- Coba -->
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="../layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
    <script src="js/toggle.js"></script>
    <script src="js/zoom.js"></script>

</body>

</html>
