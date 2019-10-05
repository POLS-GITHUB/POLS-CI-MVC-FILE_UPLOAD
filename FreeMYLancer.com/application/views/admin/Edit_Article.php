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
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Record Details</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Mesurs
                                    </a>
                                </li>
                                <li class="active">Patent</li>
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
                        <form id="contact-form" method="post" action="<?php echo base_url("Admin/Update_dashboard/{$article->U_id}");
                            
                        ?>" role="form">

                            
                            <?php echo form_hidden('A_id', $this->session->userdata('A_id'));?>
                
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                
                                <?php $inv_no = array(
                                    'name' => 'inv_no',
                                    'id' => 'name',
                                    'required' => 'required',
                                    'placeholder' => 'Invoice No',
                                    'class' => 'form-control',
                                    'value'=>set_value('inv_no',$article->inv_no),
                                );
                                echo form_input($inv_no);
                                ?>

                            </div>
                            
                            
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <!--input type="text" placeholder="Subject" class="form-control" name="subject" id="subject"-->
                                <?php $name = array(
                                    'name' => 'name',
                                    'id' => 'subject',
                                    'required' => 'required',
                                    'placeholder' => 'Patent / Mesurs Name',
                                    'class' => 'form-control',
                                    'value'=>set_value('name',$article->name),
                                );
                                 echo form_input($name);
                                ?>
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                <!--textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea-->
                                <?php 
                                $address = array(
                                    'name' => 'address',
                                    'id' => 'address',
                                    'required' => 'required',
                                    'placeholder' => 'Address',
                                    'class' => 'form-control',
                                     'value'=>set_value('address',$article->address),
                                );
                                 echo form_textarea($address);
                                ?>    
                            </div>


                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <!--input type="text" placeholder="Subject" class="form-control" name="subject" id="subject"-->
                                <?php $amt = array(
                                    'name' => 'P_con',
                                    'id' => 'Contact',
                                    'required' => 'required',
                                    'placeholder' => 'Contact No',
                                    'class' => 'form-control',
                                    'value'=>set_value('P_con',$article->P_con),
                                );
                                 echo form_input($amt);
                                ?>
                            </div>



                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <!--input type="text" placeholder="Subject" class="form-control" name="subject" id="subject"-->
                                <?php $amt = array(
                                    'name' => 'amt',
                                    'id' => 'Contact',
                                    'required' => 'required',
                                    'placeholder' => 'Amount',
                                    'class' => 'form-control',
                                    'value'=>set_value('amt',$article->amt),
                                );
                                 echo form_input($amt);
                                ?>
                            </div>




                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <!--input type="email" placeholder="Your Email" class="form-control" name="email" id="email" -->
                                <?php $deliverd = array(
                                    'name' => 'deliverd',
                                    'id' => 'email',
                                    'required' => 'required',
                                    'placeholder' => 'Deliverd By',
                                    'class' => 'form-control',
                                     'value'=>set_value('deliverd',$article->deliverd),
                                );
                                 echo form_input($deliverd);
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
                                    echo form_submit(['name'=>'submit','value'=>'Update','id' =>'contact-submit','class'=>'btn btn-default btn-send']);
                                ?>                            
                            </div>
                        </form>
                    </div>
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

