<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ambulance Bontot</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/> 
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  </header>
  <!-- End header -->
  

  <!-- BEGIN MENU -->
  <section id="menu-area">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.html">Ambulance Bontot</a>              
          <!-- IMG BASED LOGO  -->
           <!-- <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="feature.php">Layanan</a></li>
            <li><a href="service.php">Tentang Kami</a></li>
            <li class="active"><a href="portfolio.php">Galeri</a></li>
            <li><a href="contact.php">Kontak</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->
      </div>     
    </nav>
  </section>
  <!-- END MENU --> 
  
  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>Galery</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Galery</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  
  <!-- Start portfolio -->
  <section id="portfolio">
    <div class="portfolio-area">
        <!-- portfolio menu -->
       <div class="portfolio-menu">
         <ul>
           <li class="filter" data-filter="all">All</li>
           <li class="filter" data-filter=".branding">Peti & Keranda</li>
           <li class="filter" data-filter=".design">Ambulance Emergency</li>
           <li class="filter" data-filter=".development">AmbulanCE Jenazah</li>
           <li class="filter" data-filter=".photography">Event</li>
         </ul>
       </div>      
       <!-- Portfolio container -->
       <div id="mixit-container" class="portfolio-container">
         <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-1.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-1.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-2.jpg" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-2.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <h4>Mobile application</h4>
                <span>UI Design</span>
              </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-3.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-3.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-4.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-4.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-5.jpg" alt="img">
            <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-5.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-1.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-1.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-2.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-2.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-3.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-3.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
          <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-1.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-1.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-2.jpg" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-2.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <h4>Mobile application</h4>
                <span>UI Design</span>
              </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-3.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-3.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-4.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-4.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
       </div>        
    </div>
  </section>
  <!-- End portfolio -->
  
  <!-- Start subscribe us -->
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2 class="wow fadeInUp">Subscribe Newsletter</h2>
              <form action="" class="subscrib-form wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <input type="text" placeholder="Enter Your E-mail..">
                <button class="subscribe-btn" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End subscribe us -->

  <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="footer-left">
            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right">
            <a href="index.html"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  
  
 
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
    
  </body>
</html>