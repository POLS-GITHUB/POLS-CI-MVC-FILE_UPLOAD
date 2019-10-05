<!DOCTYPE html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script-->
<style>
table {
    font-size: 12;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 6px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>



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


                            <?= anchor('LOGOUT', 'Logout', ['class'=>'btn btn-lg btn-info pull-right']);?>



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

        
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>SALE BOOK</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="#">
                                        <i class="ion-ios-home"></i>
                                        Whole Sale
                                    </a>
                                </li>
                                <li class="active">

                                    <a href="#">
                                        <i class="ion-ios-home"></i>
                                        Retail
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </br></br>
<!--
        ==================================================
        Header Section End
        ================================================== 
-->