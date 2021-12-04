<?php include_once("assets/function/func.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FFPBD : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/l.png"/>
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
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Cabin for Title -->
    <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
    <!-- Pacifico for Logo   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>  

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->
  
  <!-- Start menu area -->
  <div class="nav-area">      
    <a id="menu-btn" href="#"><i class="fa fa-bars"></i></a>
    <nav class="main-nav" id="main-menu">
      <span class="fa fa-remove" id="close"></span>
      <ul>  
        <li><a href="#header"><i class="fa fa-home"></i><span>Home</span></a></li>
        <li><a href="timeline.php" onclick="window.open('timeline.php')" target="_blank"><i class="fa fa-heartbeat"></i><span>Timeline</span></a></li>
        <li><a href="#features"><i class="fa fa-server"></i><span>Our Activities</span></a></li>
        <li><a href="#howit-works"><i class="fa fa-hourglass"></i><span>Poverty Scenary</span></a></li>
        <li><a href="#pricing-table"><i class="fa fa-usd"></i><span>Helping Process</span></a></li>
        <li><a href="#screenshot"><i class="fa fa-users"></i><span>Team Members</span></a></li>
        <li><a href="#testimonial"><i class="fa fa-certificate"></i><span>Honorable Sponsors</span></a></li>
        <li><a href="#contact"><i class="fa fa-envelope-o"></i><span>Opinion Share</span></a></li>          
        <li><a href="login.php" onclick="window.open('login.php')" target="_blank"><i class="fa fa-user"></i><span>Admin</span></a></li>          
      </ul>      
    </nav>
  </div>  
  <!-- End menu area -->

  <!-- Start header section --> 
  <header id="header">
    <div class="header-inner">
    <div class="row">
      <!-- Header image -->
      <img class="col-md-12"  src="assets/images/header-bg.jpg" alt="img">
      <div class="overlay">
        <div class="header-content">
          <div class="container">
            
              <div class="col-md-12">
                <div class="header-top">
                  <!-- Start logo area -->
                  <div class="logo-area">
                    <!-- Image based logo -->
                    <a class="logo" href="index.php"><h1 style="font-family: tahoma"><span style="color: red; text-shadow: -5px -5px 5px red;">Fight For Poverty</span ><span style="color: yellow; text-shadow: -5px -5px 5px yellow;">-Bangladesh</span></h1></a>
                    <!-- Text based logo -->
                    <!-- <a class="logo" href="index.html">App Landy.</a> -->
                  </div>
                  <!-- End logo area -->                 
                </div>
              </div>
              <div class="col-md-12">
                <div class="header-bottom">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="header-bottom-left">
                      <h1>Hands Rising.</h1>
                      <h3>International fund for helping poor people.</h3>
                      <a href="tel:+8801521407782" style="padding: 15px 15px; margin-top:20px; " class="btn btn-success" href="#">More Info: +8801521407782</a>
                    </div>
                  </div>
                  
                </div>
                </div>
              </div>
            
          </div>
        </div>
      </div> 
      </div>     
    </div>
  </header>
  <!-- End header section --> 

  <!-- Start Features -->
  <section id="features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Our <span>Activities</span></h2>
            <p>We are working together to reduce poverty from the world with our helping hand & in all deseases we are beside the poor people with donation.</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="features-area">
            <div class="row">
              <!-- Start features left -->
              <div class="col-md-4">
                <div class="features-left">
                  <ul class="features-list features-list-left">
                    <li class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                      <i class="fa fa-heartbeat"></i>
                      <div class="features-content">
                        <h4>To eliminate poverty</h4>
                        <p>দারিদ্র দূরীকরন প্রকল্প</p>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0.75s">
                      <i class="fa fa-heartbeat"></i>
                      <div class="features-content">
                        <h4>Gender descrimination</h4>
                        <p>লিঙ্গ বৈষম্য দূরীকরন প্রকল্প </p>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                      <i class="fa fa-heartbeat"></i>
                      <div class="features-content">
                        <h4>Help and assist to child</h4>
                        <p>শিশুদের সাহায্য এবং সমৃদ্ধশালীকরন প্রকল্প</p>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                      <i class="fa fa-heartbeat"></i>
                      <div class="features-content">
                        <h4>Awareness build up among the women.</h4>
                        <p>নারীদের সচেতনতা এবং স্বাবলম্বিকরণ প্রকল্প</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- End features left -->
              <!-- Start features img -->
              <div class="col-md-4">
                <div class="feature-img wow fadeInUp">
                  <img style="height: 565px; width: 447px;" src="assets/images/nexus-6-single.png" alt="iPhone mockup">
                </div>
              </div>
              <!-- End features img -->
              <!-- Start features right -->
              <div class="col-md-4">
                <div class="features-right">
                  <ul class="features-list features-list-right">
                    <li class="wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
                      <i class="fa fa-heartbeat"></i>
                      <div class="features-content">
                        <h4>Child health care and education.</h4>
                        <p>শিশু স্বাস্থ্য এবং শিক্ষা বিষয়ক প্রকল্প</p>
                      </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-duration="0.75s" data-wow-delay="0.75s">
                      <i class="fa fa-heartbeat"></i>
                      <div class="features-content">
                        <h4>Ensure health facilities to the extreme poor.</h4>
                        <p>হতদরিদ্রদের স্বাস্থ্য সেবা নিশ্চিতকরণ</p>
                      </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                      <i class="fa fa-heartbeat"></i>
                      <div class="features-content">
                        <h4>Awareness build up on health and hygiene.</h4>
                        <p>শরীল এবং স্বাস্থ্যবিধি বিষয়ক সচেতনতা বৃদ্ধি প্রকল্প</p>
                      </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                      <i class="fa fa-heartbeat"></i>
                      <div class="features-content">
                        <h4>Disaster risk management.</h4>
                        <p>দূর্যোগ ঝুকি ব্যাবস্থাপনা প্রকল্প</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>   
              <!-- End features right -->                 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Features -->

  <!-- Start how it works -->
  <section id="howit-works">
    <div class="howit-works-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-area wow fadeInLeft">
              <h2 class="title">Poverty <span>scenary</span></h2>
              <p>There are many poor people in the world, just see the video & try to feel them & help them how much you can.</p>
            </div>
          </div>  
          <div class="col-md-12">
            <div class="howit-works-video">
                
              <iframe  width="428" height="276" src="https://www.youtube.com/embed/OCjU_H7wu4M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>               
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End how it works -->

  <!-- start pricing table -->
  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area wow fadeInLeft">
            <h2 class="title">Helping <span>Process</span></h2>
            <p>If we all try together,the work become easier. Help by donating poor people,we will reach it how much they needed.</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="pricing-table-content">
            <div class="row">
              <!-- Start single plan -->
              <div class="col-md-3 col-sm-6">                    
                <div class="single-plan wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <div class="single-plan-head">
                    <h5>Bkash</h5>
                    
                  </div>
                  <div class="single-plan-content">
                    <ul>
                      <li><img height="100%" width="100%" src="assets/images/bkash.png" alt=""></li>
                      <li>+8801775627044 (Personal)</li>
                      <li >+8801920770100 (Personal)</li>
                      <li >Didn't add yet more</li>
                      <li >Didn't add yet more</li>
                    </ul>
                  </div>
                  <div class="single-plan-bottom">
                    <a class="signup-btn" href="#">Pay Here</a>
                  </div>
                </div>
              </div>
              <!-- End single plan -->
              <!-- Start single plan -->
              <div class="col-md-3 col-sm-6">
                <div class="single-plan wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.75s">
                  <div class="single-plan-head">
                    <h5>Rocket</h5>
                    <p></p>
                  </div>
                  <div class="single-plan-content">
                    <ul>
                      <li><img height="100%" width="100%" src="assets/images/rocket.png" alt=""></li>
                      <li>+8801775627044+(6)</li>
                      <li>+8801920770100(+7)</li>
                      <li>Didn't add yet more</li>
                      <li>Didn't add yet more</li>
                    </ul>
                  </div>
                  <div class="single-plan-bottom">
                    <a class="signup-btn" href="#">Pay Here</a>
                  </div>
                </div>
              </div>
              <!-- End single plan -->
              <!-- Start single plan -->
              <div class="col-md-3 col-sm-6">
                <div class="single-plan feature-price wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                  <div class="single-plan-head">
                    <h5>Bank Donate</h5>
                    
                  </div>
                  <div class="single-plan-content">
                    <ul>
                      <li><img height="150px" width="100%" src="assets/images/bank.png" alt=""></li>
                      <li>Sonali Bank (2330 9010 12409)</li>
                      <li>Didn't add yet more</li>
                      <li>Didn't add yet more</li>
                      <li >Didn't add yet more</li>
                    </ul>
                  </div>
                  <div class="single-plan-bottom">
                    <a class="signup-btn" href="#">Pay Here</a>
                  </div>
                </div>
              </div>
              <!-- End single plan -->
              <!-- Start single plan -->
              <div class="col-md-3 col-sm-6">
                <div class="single-plan wow fadeInUp" data-wow-duration="1.25s" data-wow-delay="1.25s">
                  <div class="single-plan-head">
                    <h5>PayPal</h5>
                    
                  </div>
                  <div class="single-plan-content">
                    <ul>
                      <li><img height="150px" width="100%" src="assets/images/paypal.png" alt=""></li>
                      
                      <li>Comming Soon</li>
                      <li>Comming Soon</li>
                      <li>Comming Soon</li>
                      <li>Comming Soon</li>
                    </ul>
                  </div>
                  <div class="single-plan-bottom">
                    <a class="signup-btn" href="#">Pay Here</a>
                  </div>
                </div>
              </div>
              <!-- End single plan -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End pricing table -->

  <!-- Start screenshot -->
  <section id="screenshot">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area wow fadeInUp">
            <h2 class="title">Team <span>Fifteen</span></h2>
            <p>We all here from the country ambasidor of Bangladesh, working for the welfare of the people</p>
          </div>
        </div>
        <div class="col-md-12 ">
          <div class="screenshots-area-slider">
            <ul class="screenshots-slide">
              <?php 

                $teamm = $conn-> query("SELECT * FROM team");

                while($team= $teamm-> fetch_assoc()):


              ?>
              <li class="col-md-3 wow fadeInLeft">
               <div class="card single-item">
                    <img height="270px" src="assets/images/team/<?php echo $team['tmimg']?>" alt="John" style="width:100%">
                    <h4><?php echo $team['tmname']?></h4>
                    <p class="title"><?php echo $team['tmoccupation']?></p>
                    <p><?php echo $team['tminstitute']?></p>
                    <div style="margin: 24px 0;">
                      <a href=mailto: <?php echo $team['tmemail']?>><i class="fa fa-envelope"></i></a> 
                      <a href="#"><i class="fa fa-whatsapp"></i></a>  
                      <a href="#"><i class="fa fa-linkedin"></i></a>  
                      <a href="<?php echo $team['tmfb']?>"><i class="fa fa-facebook"></i></a> 
                    </div>
                    <p><button><a href="tel: <?php echo $team['tmcell']?>"><i class="fa fa-phone"></i> Contact</a></button></p>
                  </div>
              </li>
               
               <?php endwhile;?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End screenshot -->

  
  <!-- Start testimonial -->
  <section id="testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area wow fadeInLeft">
            <h2 class="title">Honorable <span>Sponsors</span></h2>
            <p>Most honerable brand or companies who helps us in various ways to helping poor people,we are grateful to them. Special speech from our sponsors are here</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="testimonial-slider">
            <!-- single slide -->
            <div class="testimonial-single-slide">               
              <img class="testi-avatar" src="assets/images/sponsor1.jpg" alt="testimonial img">
              <p class="testi-name">MD NAHID HASAN BHUIYAN</p>
              <p class="testi-company">hungrybirdsbd.com</p>
              <p class="testi-text">We, HUNGRY BIRDS CUMILLA FAMILY are really proud to became a part of Fight for povert Bangladesh foundation.Hope all will help the foundation how they can!</p>
            </div>
            <!-- single slide -->
            <div class="testimonial-single-slide">               
              <img class="testi-avatar" src="assets/images/testi3.jpg" alt="testimonial img">
              <p class="testi-name">AHAD QURAISHI</p>
              <p class="testi-company">hubit.tech</p>
              <p class="testi-text">We all know that, TEN STICKS IS THE BURDEN OF ONE. Wishing a bright future for FFPBD team to there selfless activities.</p>
            </div>
            <!-- single slide -->
            
          </div>
        </div>
      </div>
    </div>      
  </section>
  <!-- End testimonial -->

  <!-- Start subscribe -->
  
  <!-- End download app -->

  <!-- Start contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
              <h2 class="title">Share your <span>Opinion</span></h2>
              <p>Your opinion can help us to develop our policy & can help to reduce poverty from Bangladesh.</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="contact-area">
            

        <?php

            if(isset($_POST['osubmit'])){
                $oname = $_POST['oname'];
                $oemail = $_POST['oemail'];
                $omsg = $_POST['omsg'];
                if(!empty($oname) || !empty($oemail) || !empty($omsg) ){
                $conn->query("INSERT INTO opinion(oname,oemail,omsg) VALUES('$oname','$oemail','$omsg')");
                ?> <script> alert("Thanks for your mail! We will contact you soon!")</script>
                <?php
              }else{

              }
            }

        ?>
  
            <form action="" class="contact-form" method="POST">
              <div class="form-group">                  
                <input name="oname" required="" type="text" class="form-control" placeholder="Your name">
              </div>
              <div class="form-group">                  
                <input name="oemail" required="" type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">                  
                <textarea name="omsg" required="" class="form-control" rows="3" placeholder="Your Message"></textarea>
              </div>
              <div class="send-area">
                <button name="osubmit" type="submit" class="send-btn">Send Now</button>
              </div>  
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End contact -->

  <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="www.whatsapp.com/01764034038"><i class="fa fa-whatsapp"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
          </div>
          <div class="footer-text">
            <p>Designed by <a href="http://www.facebook.com/nahid.hasan.9809/">MD NAHID HASAN BHUIYAN</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End -->


  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>   
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- Off-canvas Menu -->   
  <script src="assets/js/classie.js"></script>
 
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
    
  </body>
</html>