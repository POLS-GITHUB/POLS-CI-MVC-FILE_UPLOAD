<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Timer Agency Template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- Template CSS Files by Codeigenator
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
          

         <?= link_tag('library/plugins/bootstrap/bootstrap.min.css');?>
         
        <!-- Ionicons Fonts Css -->
        <!--link rel="stylesheet" href="plugins/ionicons/ionicons.min.css"-->
       
        <?= link_tag('library/plugins/bootstrap/bootstrap.min.css');?>
        <!-- animate css -->
        <!--link rel="stylesheet" href="plugins/animate-css/animate.css"-->
       
        <?= link_tag('library/plugins/animate-css/animate.css');?>
        <!-- Hero area slider css-->
        <!--link rel="stylesheet" href="plugins/slider/slider.css"-->
       
        <?= link_tag('library/plugins/slider/slider.css');?>
        <!-- owl craousel css -->
        <!--link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css"-->
       
        <?= link_tag('library/plugins/owl-carousel/owl.carousel.css');?>
        <!--link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css"-->
      
        <?= link_tag('library/plugins/owl-carousel/owl.theme.css');?>
        <!-- Fancybox -->
        <!--link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css"-->
      
        <?= link_tag('library/plugins/facncybox/jquery.fancybox.css');?>
        <!-- template main css file -->
        <!--link rel="stylesheet" href="css/style.css"-->
        
        <?= link_tag('library/css/style.css');?>

        
    </head>
    <body>


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.html" >
                            <img src="images/logo.png" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="<?php echo base_url('LOGIN');?>" >LOGIN</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="<?php echo base_url('Home');?>" >Home</a>
                            </li>
                            <li><a href="<?php echo base_url('ABOUT');?>">About</a></li>
                            <li>
                                <a href="<?php echo base_url('SERVICE');?>">Service</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">REPORT <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url('RECORD');?>">SALE ANALYSIS</a>
                                            
                                        </li>

                                        <li>
                                            <a href="#">PURCHASES BOOK</a>
                                        </li>
                                        <ul>
                                                <li>
                                                    <a href="<?php echo base_url('TABLE');?>">SALE BOOK</a>
                                                </li>
                                        </ul>
                                    </ul>
                                </div>
                            </li>









                            <li>
                                <a href="<?php echo base_url('SERVICE');?>">TRANACTIONS</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('SERVICE');?>">ACCOUNTS</a>
                            </li>

                           





                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="#"></a>SORRY</li>
                                        <li><a href="#"></a>SORRY</li>
                                        <li><a href="#"></a>SORRY</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                            <a href="<?php echo base_url('CONTACT');?>">REGISTER</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
<!--
        ==================================================
        Header Section End
        ================================================== 
-->

        

<!--
==================================================
Slider Section Start
================================================== -->
<section id="hero-area" >
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
                <!-- Slider -->
                <section class="cd-intro">
                    <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                    <span>HI, MY NAME IS POLS & I AM A</span><br>
                    <span class="cd-words-wrapper">
                        <b class="is-visible">DESIGNER</b>
                        <b>DEVELOPER</b>
                        <!--b>FATHER</b-->
                    </span>
                    </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <!--h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                        With 10 years experience, I've occupied many roles including digital design director,<br> web designer and developer. This site showcases some of my work.
                    </h2-->
                    <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works">View Works</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->

<!--
==================================================
About Section Start
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                    ABOUT ME
                    </h2>
                    <p>
                        Hello, I’m a HTML Designer & Front End Developer from CALCUTTA, INDIA. I runing a Batchler Computer Application & I have complete course of PHP from the CMC . And scrambled it to make a type specimen book.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci voluptatum repudiandae, natus impedit repellat aut officia illum at assumenda iusto reiciendis placeat. Temporibus, vero.
                    </p>
                </div>
                
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <!--img src="images/about/about.jpg" alt=""-->
                   <?php
                            $about = array(
                          'src' => 'library/images/about/about.jpg',
                          'alt' => 'this is a title',
                          'class' => 'img-responsive',
                          'rel' => 'lightbox',
                            );
                           echo img($about);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#about -->


<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Latest Works</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere <br> tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.
            </p>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                    <!--img src="library/images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" -->

                    <!-- image adding by associative array -->
                        <?php
                            $image1 = array(
                          'src' => 'library/images/portfolio/item-1.jpg',
                          'alt' => 'this is a title',
                          'class' => 'img-responsive',
                          'rel' => 'lightbox',
                            );
                           echo img($image1);
                        ?>
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Dew Drop
                    </a>
                    </h4>
                    <p>
                        Redesigne UI Concept
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <!--img src="images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title" -->

                        <!-- image adding by associative array -->
                         <?php
                            $image2 = array(
                          'src' => 'library/images/portfolio/item-2.jpg',
                          'alt' => 'this is a title',
                          'class' => 'img-responsive',
                          'rel' => 'lightbox',
                            );
                           echo img($image2);
                        ?>
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-2.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Bottle Mockup
                    </a>
                    </h4>
                    <p>
                        Lorem ipsum dolor sit.
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <!--img src="images/portfolio/item-3.jpg" class="img-responsive" alt="" -->

                        <!-- image adding by associative array -->
                         <?php
                            $image3 = array(
                          'src' => 'library/images/portfolio/item-3.jpg',
                          'alt' => 'this is a title',
                          'class' => 'img-responsive',
                          'rel' => 'lightbox',
                            );
                           echo img($image3);
                        ?>
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-3.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Table Design
                    </a>
                    </h4>
                    <p>
                        Lorem ipsum dolor sit amet.
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="img-wrapper">
                        <!--img src="images/portfolio/item-4.jpg" class="img-responsive" alt="" -->

                        <!-- image adding by associative array -->
                         <?php
                            $image4 = array(
                          'src' => 'library/images/portfolio/item-4.jpg',
                          'alt' => 'this is a title',
                          'class' => 'img-responsive',
                          'rel' => 'lightbox',
                            );
                           echo img($image4);
                        ?>



                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-4.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Make Up elements
                    </a>
                    </h4>
                    <p>
                        Lorem ipsum dolor.
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="img-wrapper">
                        <!--img src="images/portfolio/item-5.jpg" class="img-responsive" alt="" -->

                        <!-- image adding by associative array -->
                        <?php
                            $image5 = array(
                          'src' => 'library/images/portfolio/item-5.jpg',
                          'alt' => 'this is a title',
                          'class' => 'img-responsive',
                          'rel' => 'lightbox',
                            );
                           echo img($image5);
                        ?>
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-5.jpg">Demo</a>     

                                <a target="_blank" href="single-portfolio.html">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Shoping Bag Concept
                    </a>
                    </h4>
                    <p>
                        Lorem ipsum dolor.
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="img-wrapper">
                        <!--img src="images/portfolio/item-6.jpg" class="img-responsive" alt="" -->

                        <!-- image adding by associative array -->
                        <?php
                            $image6 = array(
                          'src' => 'library/images/portfolio/item-6.jpg',
                          'alt' => 'this is a title',
                          'class' => 'img-responsive',
                          'rel' => 'lightbox',
                            );
                           echo img($image6);
                        ?>
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-6.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Caramel Bottle
                    </a>
                    </h4>
                    <p>
                        Lorem ipsum dolor.
                    </p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section> <!-- #works -->
<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Offer From Me</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum.
            </p>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-flask-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-lightbulb-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Well documented.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-lightbulb-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Well documented.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-americanfootball-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Free updates</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-keypad-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Solid Support</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-barcode-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Simple Installation</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#feature -->


            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="<?php echo base_url('error');?>" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>             
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> Design and Developed by <a href="http://www.Themefisher.com" target="_blank">Themefisher</a>. <br> 
                            Get More 
                            <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">
                                Free Bootstrap Templates
                            </a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->

	<!-- Template Javascript Files
	================================================== -->
	<!-- jquery -->
	
    <script src="<?= base_url('library/plugins/jQurey/jquery.min.js');?>"></script>
	<!-- Form Validation -->
    
     <script src="<?= base_url('library/plugins/form-validation/jquery.form.js');?>"></script>

    
    <script src="<?= base_url('library/plugins/form-validation/jquery.validate.min.js');?>"></script>
	<!-- owl carouserl js -->
	
    <script src="<?= base_url('library/plugins/owl-carousel/owl.carousel.min.js');?>"></script>
	<!-- bootstrap js -->
	
    <script src="<?= base_url('library/plugins/bootstrap/bootstrap.min.js');?>"></script>
	<!-- wow js -->
	
    <script src="<?= base_url('library/plugins/wow-js/wow.min.js');?>"></script>
	<!-- slider js -->
	
    <script src="<?= base_url('library/plugins/slider/slider.js');?>"></script>
	<!-- Fancybox -->
	
    <script src="<?= base_url('library/plugins/facncybox/jquery.fancybox.js');?>"></script>
	<!-- template main js -->
	
    <script src="<?= base_url('library/js/main.js');?>"></script>
 	</body>
</html>