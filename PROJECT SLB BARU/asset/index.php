<?php
include "konek.php";
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>


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
    <link href="css/style1.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">  
    
    <!-- Colors CSS -->
   
    <link rel="stylesheet" type="text/css" href="css/color/blue.css" title="blue">
   

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
   
	
    <!-- Modernizer js -->
    <script src="js/modernizr.custom.js"></script>
	
	
    <link rel="stylesheet" href="css1/demo.css">
	<link rel="stylesheet" href="css1/footer-distributed-with-address-and-phones.css">
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
                <a class="navbar-brand page-scroll" href="index.php">SMPLB A YPAB</a>
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
                       <a href="#news" class="dropdown-toggle" data-toggle="dropdown">Kegiatan <b class="caret"></b></a>
					   <ul class="dropdown-menu">
                           <li><a href="kegiatan1.php">Berita Kegiatan</a></li>
							<li><a href="ekskul.php">Ekstrakulikuler</a></li>
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
							<li><a href="siswa/indexlogin.php">Login Siswa</a></li>
						</ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    
    
    
    <!-- Start Home Page Slider -->
    <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="images/1.png" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated3">
                                 <span>Welcome to <strong>SMPLB A YPAB</strong></span>
                            </h1>
                            <p class="animated2"><br>YAYASAN PENDIDIKAN ANAK BUTA</p>	
                            <a href="#feature" class="page-scroll btn btn-primary animated1">Read More</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                
                <div class="item">
                    <img class="img-responsive" src="images/2.png" alt="slider">
                    
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated3">
                    		  <span>Welcome to <strong>SMPLB A YPAB</strong></span>
                    	    </h1>
                            <p class="animated2">YAYASAN PENDIDIKAN ANAK BUTA</p>
                            <a href="#feature" class="page-scroll btn btn-primary animated3">Read More</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                
                <div class="item">
                    <img class="img-responsive" src="images/3.png" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated3">
                                <span>Welcome to <strong>SMPLB A YPAB</strong></span>
                            </h1>
                            <p class="animated2">YAYASAN PENDIDIKAN ANAK BUTA</p>	
                                <a href="#feature" class="page-scroll btn btn-primary animated3">Read More</a>
                                
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->
	
    <div id ="maincontent">
	<div class="section-about latar">
<div class="container">
  <div class="row">
    <div class="col-sm-9">
	<div style="padding-top:50px;padding-bottom:50px;font-size:20px">
	<div class="judul4 box">SAMBUTAN KEPALA SEKOLAH</div>
	<div class="box besar">Assalamualaikum Wr. Wb.<br/><br/>
	Salam sejahtera bagi kita semua,<br/><br/>
	Seraya memanjatkan puji syukur ke hadirat Tuhan yang Maha Esa dalam rangka penerbitan Website sekolah edisi perdana dan setelah dilakukan up date baik dari sisi pengelolaan maupun isinya. <br/><br/>
	Di era global dan pesatnya Teknologi Informasi ini, tidak dipungkiri bahwa keberadaan sebuah website untuk suatu organisasi, termasuk SMPLB-A YPAB Surabaya, sangatlah penting.<br/><br/></div>
     <p class="box besar">Halaman website ini dapat digunakan sebagai media penyebar luasan informasi-informasi dari sekolah, yang dapat diketahui oleh masyarakat secara luas. Disamping itu, website juga dapat menjadi sarana promosi sekolah yang cukup efektif. Berbagai kegiatan positif sekolah dapat diunggah, disertai gambar-gambar yang relevan, sehingga masyarakat dapat mengetahui prestasi-prestasi yang telah berhasil diraih oleh SMPLB-A YPAB Surabaya.</p>
	 <br/>
	 <p class="box besar">Semoga ke depan SMPLB-A YPAB mampu menjadi pelayan pendidikan bermutu yang mampu mengantarkan para peserta didiknya menjadi pribadi tangguh dan berkarakter yang mampu ikut mencerdaskan kehidupan bangsa, meningkatkan derajat kehidupan masyarakat, serta semakin matang dan selalu siap bersaing di era global, untuk menjadi sekolah yang bermutu, unggul dalam prestasi, berkarakter dan berwawasan lingkungan.</p>
	 <br/>
	 <p class="box besar">Selanjutnya kami berharap website ini dapat terus menerus memberikan fungsinya sebagai media informasi mengenai berbagai hal yang berkaiatan dengan sekolah, SMPLB-A YPAB Surabaya, bagi kita semua, Semoga Tuhan Yang Maha Kuasa meRidhoi dan membimbing upaya kita dalam menapaki masa depan yang penuh tantangan.</p>
	 <br/>
	 <p class="box besar">Selamat belajar dan berkarya.</p><br/>
	 <div class="box besar">Semoga kesuksesan senantiasa menyertai kita semua<br/>
	 Wassalamualaikum Wr. Wb.<br/><br/>
	 <b>Drs. EKO PURWANTO</b><br/>
	 Kepala Sekolah SMPLB-A YPAB</div>
	 <br/><br/>
	 <br/><br/><br/>
	 </div>
    </div>
	<div class="col-sm-3">
	<div style="padding-top:50px;padding-bottom:50px;">
	<div class="judul4 box">BERITA</div>
	<div style="background:#ECECEC;padding-top:20px;padding-bottom:20px">
    <?php
        $page=4;
        $result=mysqli_query($link, "SELECT * FROM kegiatan order by id_kegiatan desc limit $page");
    ?>
     <?php 
        while($data=mysqli_fetch_assoc($result)) {  ?>
        
	<div class="gallery">
  
        
  <a target="_blank" href="berita.php">
    <img src="Admin/<?php echo $data['foto_judul'] ?>">
  <div class="desc"><?php echo $data['judul_kegiatan'] ?></div></a>
</div>

<?php } ?>
</div>
	</div>
	</div>
    </div>
  </div>
</div>

<!--END-->
        <div class="section-donasi latar">
		  <div class="container" style="padding-top:50px;padding-bottom:50px">
     <div class="row">
	  <div class="col-md-3">
			 <img src="images/logo.png" alt="pendidikan" class="img-responsive">
        </div>
            <div class="col-md-9">   
	<div class="box" style="font:50px 'Times New Roman'"><b>SMALB-A YPAB Surabaya</b></div>
	<div class="standar box besar" style="padding-top:50px">SMAPB-A YPAB Surabaya Selain SMP, Yayasan Pendidikan Anak Buta juga membuka SMA, yang dimana lebih menekan pada Keterampilan Indivdi Siswa</div>

	
            </div>
			
 </div>
 </div>
 </div>
	
	<div class="section-donasi latar">
		  <div class="container" style="padding-top:50px;padding-bottom:50px">
     <div class="row">
            <div class="col-md-9">   
	<div class="box" style="font:50px 'Times New Roman'"><b>Ingin berdonasi untuk sesama?</b></div>
	<div class="standar box besar" style="padding-top:50px">Tidak ada salahnya untuk membuka tangan demi kebaikan bersama. Setiap langkah kebaikan Anda InsyaAllah tidak akan sia-sia.
	Donasi yang Anda ulurkan akan sangat berarti untuk kemajuan sekolah ini. Semoga dapat menjadi barokah. Aamiin. </div>
<div style="padding-top:50px;padding-bottom:50px"><a href="donate.html" target="_blank" class="btn btn-primary btn-outline btn-lg">DONATE US</a></div>
	
            </div>
			 <div class="col-md-3">
			 <img src="images/pendidikan.png" alt="pendidikan" class="img-responsive">
        </div>
 </div>
 </div>
 </div>

 <div class="section-about latar">
<div class="container">
        <div class="row">
		<div class="judul3 box">PRESTASI SISWA</div>
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Carousel Slides / Quotes -->
					  <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="images/andrii.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="images/bayuu.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="images/urbaa.jpg" alt="">
                        </li>
                    </ol>
					
                    <div class="carousel-inner text-center">
                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p class="box besar">ANDRI BAGUS SUGIARTO <br>
                                            Juara I Cerdas Cermat Tk Nasional Th 2013 Di Bandung</p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p class="box besar">BAYU WIBOWO <br>
                                            Juara 3 Tk Nasional FLS2N Thn 2012 Di Mataram
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p class="box besar">URBA FIRMANSYAH <br>
                                            Juara I Tk Nasional Menyanyi Solo Th 2013 Di Medan</p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Bottom Carousel Indicators -->
                  

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left box"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right box"></i></a>
                </div>
            </div>
        </div>
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

    <!-- jQuery Version 2.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

	
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/count-to.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/styleswitcher.js"></script>

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <script src="js/script.js"></script>
    <script src="js/toggle.js"></script>
	


</body>

</html>
