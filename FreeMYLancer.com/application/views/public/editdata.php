<!--!DOCTYPE html-->
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url('LOGIN');?>">LOGIN</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                            <a href="<?php echo base_url('CONTACT');?>">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
        

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>REGISTER FORM</h2>
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
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Register Here</h2>
                    <!--p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea!
                         consectetur adipisicing elit. Dolore, ea!
                    </p-->
                    <div class="contact-form">
                    <?php echo validation_errors(); ?>
                    <?php 
                        if(!empty($sess=$this->session->flashdata('item')))
                        {
                            ?>
                                <div class="alert alert-dismissible alert-success">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <?php echo $sess;?>
                                          </div>
                            <?php  
                        }
                    ?>                    
                    <?php 
                    if(!empty($sess=$this->session->flashdata('item2')))
                    {
                    ?>
                    <div class="alert alert-dismissible alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <?php echo $sess;?>
                              </div>
                    <?php  
                    }
                    ?>
                        <form id="contact-form" method="post" action="<?php echo base_url('Users/edit');?>" role="form">
                
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                
                                <?php $name = array(
                                    'name' => 'Uname',
                                    'id' => 'name',
                                    //'required' => 'required',
                                    'placeholder' => 'User Name',
                                    'class' => 'form-control',
                                    'value'=>set_value('$Uname'),
                                );
                                echo form_input($name);
                                ?>

                            </div>
                            
                            
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <!--input type="text" placeholder="Subject" class="form-control" name="subject" id="subject"-->
                                <?php $subject = array(
                                    'name' => 'subject',
                                    'id' => 'subject',
                                   // 'required' => 'required',
                                    'placeholder' => 'Subject',
                                    'class' => 'form-control',
                                    'value'=>set_value('$subject'),
                                );
                                 echo form_input($subject);
                                ?>
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                <!--textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea-->
                                <?php 
                                $Address = array(
                                    'name' => 'address',
                                    'id' => 'address',
                                   // 'required' => 'required',
                                    'placeholder' => 'Address',
                                    'class' => 'form-control',
                                     'value'=>set_value('$address'),
                                );
                                 echo form_textarea($Address);
                                ?>    
                            </div>



                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <!--input type="text" placeholder="Subject" class="form-control" name="subject" id="subject"-->
                                <?php $contact_No = array(
                                    'name' => 'Contact',
                                    'id' => 'Contact',
                                  //  'required' => 'required',
                                    'placeholder' => 'Contact No',
                                    'class' => 'form-control',
                                    'value'=>set_value('$Contact'),
                                );
                                 echo form_input($contact_No);
                                ?>
                            </div>




                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <!--input type="email" placeholder="Your Email" class="form-control" name="email" id="email" -->
                                <?php $email = array(
                                    'name' => 'email',
                                    'id' => 'email',
                                  //  'required' => 'required',
                                    'placeholder' => 'Your Email Address',
                                    'class' => 'form-control',
                                     'value'=>set_value('$email'),
                                );
                                 echo form_input($email);
                                ?>
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <!--input type="email" placeholder="Your Email" class="form-control" name="email" id="email" -->
                                <?php $password = array(
                                    'name' => 'pass',
                                    'id' => 'email',
                                  //  'required' => 'required',
                                    'placeholder' => 'Password',
                                    'class' => 'form-control',

                                );
                                 echo form_password($password);
                                ?>
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <!--input type="email" placeholder="Your Email" class="form-control" name="email" id="email" -->
                                <?php $Cpassword = array(
                                    'name' => 'Cpass',
                                    'id' => 'email',
                                 //   'required' => 'required',
                                    'placeholder' => 'Confirm Password',
                                    'class' => 'form-control',
                                );
                                 echo form_password($Cpassword);
                                ?>
                            </div>

                            
                            <div id="success" class="success">
                                Thank you. The Mailman is on His Way :)
                            </div>
                            
                            <div id="error" class="error">
                                Sorry, don't know what happened. Try later :(
                            </div>
                            <!--input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message"-->
                            <!--div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s"-->
                               
                                
                               
        <?php 
            echo form_submit(['name'=>'submit','value'=>'Register','id' =>'contact-submit','class'=>'btn btn-default btn-send']);
        ?>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, o quorum vidisse expetendis, nostrud eram quibusdam ad nam nostrud ubi.
                        
                    </p>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.277552998015!2d90.3678744!3d23.773128800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ae4adf3cb9%3A0x7f2cf443b764e4a4!2sShishu+Mela!5e0!3m2!1sen!2s!4v1435516022247" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row address-details">
            <div class="col-md-3">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <i class="ion-ios-location-outline"></i>
                    <h5>125 , Kings Street,Melbourne <br>United Kingdom,600562</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <i class="ion-ios-location-outline"></i>
                    <h5>125 , Kings Street,Melbourne <br>United Kingdom,600562</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <i class="ion-ios-email-outline"></i>
                    <p>support@themefisher.com<br>support@themefisher.com</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <i class="ion-ios-telephone-outline"></i>
                    <p>+07 052 245 022<br>+07 999 999 999</p>
                </div>
            </div>
        </div>
    </div>
</section>  




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
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Register Here</a>
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

