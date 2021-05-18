<?php
include_once(dirname(__FILE__) . '/class/include.php');
$SERVICES_OBJ = new Service(null);


?>


<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet"> 
        <link href="plugin/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="plugin/bootstrap/datepicker.css" rel="stylesheet">
        <link href="plugin/font-awesome/font-awesome.css" rel="stylesheet">
        <link href="plugin/form-field/jquery.formstyler.css" rel="stylesheet">
        <link href="plugin/revolution-plugin/extralayers.css" rel="stylesheet">
        <link href="plugin/revolution-plugin/settings.css" rel="stylesheet">
        <link href="plugin/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="plugin/owl-carousel/owl.theme.default.css" rel="stylesheet">
        <link href="plugin/slick-slider/slick-theme.css" rel="stylesheet">
        <link href="plugin/magnific/magnific-popup.css" rel="stylesheet">
        <link href="plugin/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet">
        <link href="plugin/animation/animate.min.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link rel="icon" href="images/logo-new.png ">
        <link href="css/main-bod.css" type="stylesheet">


<title>Services</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/demo/backgrounds/oth.jpg');">
  
    <div class="wrapper row1">
      <header id="header" class="hoc clear"> 
       
        <div id="logo" class="fl_left">
          <h1><a href="index.html">Sri Lankan Tours</a></h1>
        </div>
        <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a class="drop" href="#">Pages</a>
              <ul>
                <li><a href="pages/gallery.php">Gallery</a></li>
                <li><a href="pages/full-width.php">hotels</a></li>
                <li><a href="pages/sidebar-left.php">vehicles</a></li>
                <li><a href="pages/sidebar-right.php">places</a></li>
                <li><a href="pages/basic-grid.php">facility</a></li>
              </ul>
            </li>
            <li><a class="drop" href="#">About</a>
              <ul>
                <li><a href="pages/about-srilanka.php">About Sri Lanka</a></li>
                <li><a class="drop" href="pages/aboutus.php">About Us</a>
                </li>
              
              </ul>
            </li>
            <li><a href="./service.php">Services</a></li>
            <li><a href="#">Booking</a></li>       
            <li><a href="login-register/login.php">Login</a></li>
            <li><a href="login-register/register.php">Register</a></li>
          </ul>
        </nav>      
      </header>
    </div>
    
    <div class="wrapper">
      <article id="pageintro" class="hoc clear"> 
       
        <div class="transbox">
          <h3 class="heading">Beautifull Sri Lanka</h3>
          <p>Sri Lanka is an island country located off the southern coast of India. Sri Lanka is surrounded by the Indian Ocean, Gulf of Mannar, the Palk Strait, and lies in the vicinity of India and the Maldives. The geography of Sri Lanka includes coastal plains in the north and hills and mountains in the interior.</p>
        </div>
        <footer><a class="btn" href="#">view more</a></footer>     
      </article>
    </div>   
  </div>
  <br>

    <dive class="main-body">

       <div class="container">
             <div class="service-port-outer">
                             
                                <?php
                                $SERVICE = $SERVICES_OBJ->all();
                                foreach ($SERVICE as $key => $service) {
                                    if (($key % 2) === 0) {
                                        ?>
                                        <div class="service-port odd wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12 service-port-left">
                                                    <div class="service-port-prev">
                                                        <img src="upload/service/<?php echo $service["image_name"]; ?>" alt="<?php echo $service["title"]; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 service-port-right">
                                                    <div class="service-port-next">
                                                        <h5><?php echo $service["title"]; ?></h5>
                                                        <p><?php echo $service["description"]; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    } else {
                                        ?>
                                        <div class="service-port even wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12 service-port-left">
                                                    <div class="service-port-prev">
                                                        <img src="upload/service/<?php echo $service["image_name"]; ?>" alt="<?php echo $service["title"]; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 service-port-right">
                                                    <div class="service-port-next">
                                                        <h5><?php echo $service["title"]; ?></h5>
                                                        <p><?php echo $service["description"]; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                                 
                 </div>
           </div>
      </div>

  <br>
                             
  <div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
     
      <div class="one_third first">
        <img src="images/demo/logo/l.png"><br><br>
        <h6 class="heading">Your Dream holiday tours</h6>

        <p class="nospace btmspace-30"></p>
        <form method="POST" action="login-register/post-and-get/login.php">              
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" name="email" type="text" value="" placeholder="Email">
            <input name="password" type="password" class="form-control" value="" placeholder="Password"><br>
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>     
      </div>

      <div class="one_third">
        <h6 class="heading">about our self</h6>
        <ul class="nospace linklist">
          <li>
            <article>
              <h2 class="nospace font-x1"><a href="#">History</a></h2>
              <time class="font-xs block btmspace-10" datetime="2045-04-06">Monday 2<sup>th</sup> May 2021</time>
              <p class="nospace">Hello This Sri Lankan Tours, Guide and a tour services provider for all foreign travelers since 2009 in Sri Lanka.  [&hellip;]</p>
            </article>
          </li>
          <li><a href="#">Our another Services in Sri lanka </a></li>
          <li><a href="#">Joined other companies</a></li>
        </ul>
      </div>
      <div class="one_third">
        <h6 class="heading">Contact Us</h6>
        <ul class="nospace btmspace-30 linklist contact">
          <li><i class="fa fa-map-marker"></i>
            <address>
            No: 70 galle, Sri lanka
            </address>
          </li>
          <li><i class="fa fa-phone"></i> +94 758387861</li>
          <li><i class="fa fa-envelope-o"></i> srilankantours@gmail.com</li>
        </ul>
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li> 
        </ul>
      </div>
      
    </footer>
  </div>
  
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      
      <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">namidus adaruwan</a></p>
      <p class="fl_right">Orginal <a target="_blank" href="http://localhost/web-temp/gogopo/index.html#" title="Free Website Templates">Sri lankan tours</a></p>
      
    </div>
  </div>
  
  <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="layout/scripts/jquery.min.js"></script>
  <script src="layout/scripts/jquery.backtotop.js"></script>
  <script src="layout/scripts/jquery.mobilemenu.js"></script>


</body>
</html>