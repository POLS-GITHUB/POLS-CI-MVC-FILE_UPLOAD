
<?php echo doctype('html5s');?>

<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!--link rel="icon" type="images.png" href="favicon.ico"-->
        <?php
        $link_attribute = array(
            'rel'   =>  'icon',
            'type'  =>  'images.png',
            'href'  =>  base_url('favicon.ico'),
            );
        echo link_tag($link_attribute);
        ?>

        <title>I LANCER.com</title>

        <!--meta name="description" content=""-->
        <?php echo meta('description','this is content');?>

        <!--meta name="keywords" content=""-->
        <?php echo meta('keywords','this is content 2');?>

        <!--meta name="author" content=""-->
        <?php echo meta('author','this is content 3');?>

        <!-- Mobile Specific Metas
        ================================================== -->
        <!--meta name="format-detection" content="telephone=no"-->
        <?php echo meta('format-detection','telephone=no');?>

        <!--meta name="viewport" content="width=device-width, initial-scale=1"-->
        <?php $attribute = array(        
        array('name'   =>  'viewport','content'  =>  'width=device-width, initial-scale=1'),
        );
        echo meta($attribute);
        ?>
        <!--?php echo meta('viewport','width=device-width, initial-scale=1');?-->
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <!--link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css"-->
        <?= link_tag('library/plugins/bootstrap/bootstrap.min.css');?>
        <!-- Ionicons Fonts Css -->
        <!--link rel="stylesheet" href="plugins/ionicons/ionicons.min.css"-->
        <?= link_tag('library/plugins/ionicons/ionicons.min.css');?>
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


       
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Login</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Login Here</h2>
                    <!--p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea!
                         consectetur adipisicing elit. Dolore, ea!
                    </p -->
                    <div class="contact-form">
                            


                    <?php echo validation_errors(); ?>
                    

                     <!--?php form_open('');?-->
                        <form id="contact-form" method="post" action="<?php echo base_url('Login/User_Login');?>"  role="form">
                
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">

                                
                                
                                <?php $name = array(
                                    'name' => 'Uname',
                                    'id' => 'name',
                                    'required' => 'required',
                                    'placeholder' => 'User Name',
                                    'class' => 'form-control'
                                );
                                echo form_input($name);
                               // echo validation_errors();
                                ?>

                            </div> 
                                              

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <!--input type="email" placeholder="Your Email" class="form-control" name="email" id="email" -->

                                
                                <?php $password = array(
                                    'name' => 'pass',
                                    'id' => 'name',
                                    'required' => 'required',
                                    'placeholder' => 'Password',
                                    'class' => 'form-control'
                                );
                                 echo form_password($password);
                                // echo validation_errors();
                                ?>
                            </div>

                           

                            
                            <div id="success" class="success">
                                Thank you. The Mailman is on His Way :)
                            </div>
                            
                            <div id="error" class="error">
                                Sorry, don't know what happened. Try later :(
                            </div>
                            
                               
        <div class="col-md-3">              
            <?php
            echo form_reset(['name'=>'reset','value'=>'Reset','id' =>'contact-submit','class'=>'btn btn-default btn-send']);
            ?>
        </div>

        <div class="col-md-3">
            
            <?php 
            echo form_submit(['name'=>'submit','value'=>'Login','id' =>'contact-submit','class'=>'btn btn-default btn-send']);
            ?>
        </div>   
            </div>


                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                   
                </div>
            </div>
        </div>
        
    </div>
    <?php
        echo validation_errors();
    ?>
    
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
   <!--script src=""></script-->
    <!-- jquery -->
    <!--script src="plugins/jQurey/jquery.min.js"></script-->
    <script src="<?= base_url('library/plugins/jQurey/jquery.min.js');?>"></script>
    <!-- Form Validation -->
    <!--script src="plugins/form-validation/jquery.form.js"></script-->
    <script src="<?= base_url('library/plugins/form-validation/jquery.form.js');?>"></script> 
    <!--script src="plugins/form-validation/jquery.validate.min.js"></script-->
    <script src="<?= base_url('library/plugins/form-validation/jquery.validate.min.js');?>"></script>
    <!-- owl carouserl js -->
    <!--script src=""></script-->
    <script src="<?= base_url('library/plugins/owl-carousel/owl.carousel.min.js');?>"></script>
    <!-- bootstrap js -->
    <!--script src=""></script-->
    <script src="<?= base_url('library/plugins/bootstrap/bootstrap.min.js');?>"></script>
    <!-- wow js -->
    <!--script src=""></script-->
    <script src="<?= base_url('library/plugins/wow-js/wow.min.js');?>"></script>
    <!-- slider js -->
    <!--script src=""></script-->
    <script src="<?= base_url('library/plugins/slider/slider.js');?>"></script>
    <!-- Fancybox -->
    <!--script src=""></script-->
    <script src="<?= base_url('library/plugins/facncybox/jquery.fancybox.js');?>"></script>
    <!-- template main js -->
    <!--script src=""></script-->
    <script src="<?= base_url('library/js/main.js');?>"></script>
    </body>
</html>

