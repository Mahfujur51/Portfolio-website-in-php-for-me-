<?php include("header.php"); ?>
<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
          </button>
          <a href="index.php" class="navbar-brand"><img src="assets/img/sitelogo.png" alt="" height="60" width="200"></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="onepage-nev navbar-nav mr-auto w-100 justify-content-end clearfix">
            <li class="nav-item active">
              <a class="nav-link" href="#hero-area">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">
                About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">
                Services
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#resume">
                Resume
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolios">
                Work
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">
                Contact
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Mobile Menu Start -->
      <ul class="onepage-nev mobile-menu">
        <li>
          <a href="#home">Home</a>
        </li>
        <li>
          <a href="#about">about</a>
        </li>
        <li>
          <a href="#services">Services</a>
        </li>
        <li>
          <a href="#resume">resume</a>
        </li>
        <li>
          <a href="#portfolio">Work</a>
        </li>
        <li>
          <a href="#contact">Contact</a>
        </li>
      </ul>
      <!-- Mobile Menu End -->
    </nav>
    <!-- Navbar End -->

    <!-- Hero Area Start -->
    <div id="hero-area" class="hero-area-bg">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-center">
            <div class="contents">
              <h5 class="script-font wow fadeInUp" data-wow-delay="0.2s">Hi This is</h5>
              <h2 class="head-title wow fadeInUp" data-wow-delay="0.4s">Md. Mahfujur Rahman </h2>
              <p class="script-font wow fadeInUp" data-wow-delay="0.6s">Web,Application Designer And Developer </p>
              <?php 

              $sql4="SELECT * FROM tbl_social";
              $query4=mysqli_query($con,$sql4);
              while ($row4=mysqli_fetch_array($query4)) {
                 # code...


               ?>
               <ul class="social-icon wow fadeInUp" data-wow-delay="0.8s">
                <li>
                  <a class="facebook" href="<?php echo $row4['fb']; ?>"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href="<?php echo $row4['tw']; ?>"><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                  <a class="instagram" href="<?php echo $row4['insta']; ?>"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                  <a class="linkedin" href="<?php echo $row4['linkdin']; ?>"><i class="icon-social-linkedin"></i></a>
                </li>
              </ul>
            <?php } ?>
            <div class="header-button wow fadeInUp" data-wow-delay="1s">
              <a href="https://github.com/Mahfujur51" target="blank" class="btn btn-common"><i class="fab fa-github fx-4"></i> Visit My GitHub</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero Area End -->

</header>
<!-- Header Area wrapper End -->

<!-- About Section Start -->
<section id="about" class="section-padding">
  <div class="container">
    <div class="row"> <?php 

    $psql="SELECT * FROM tbl_about";
    $pquery=mysqli_query($con,$psql);
    while ($result=mysqli_fetch_array($pquery)) {
                # code...

     ?>
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
        <img class="img-fluid" src="admin/images/<?php echo $result['image']; ?>" alt="">
      </div>
    </div> 
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

      <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
        <h3>Hi Guys!</h3>
        <p><?php echo $result['description']; ?></p>
        <div class="about-profile">
          <ul class="admin-profile">
            <li><span class="pro-title"> Name </span> <span class="pro-detail"><?php echo $result['name']; ?></span></li>
            <li><span class="pro-title"> Age </span> <span class="pro-detail"><?php echo $result['age']; ?></span></li>
            <li><span class="pro-title"> Experience </span> <span class="pro-detail"><?php echo $result['experience']; ?></span></li>
            <li><span class="pro-title"> Country </span> <span class="pro-detail"><?php echo $result['country']; ?></span></li>
            <li><span class="pro-title"> Location </span> <span class="pro-detail"><?php echo $result['location']; ?></span></li>
            <li><span class="pro-title"> e-mail </span> <span class="pro-detail"><?php echo $result['email']; ?></span></li>
            <li><span class="pro-title"> Phone </span> <span class="pro-detail">+(88)<?php echo $result['phone']; ?></span></li>
            <li><span class="pro-title"> Freelance </span> <span class="pro-detail"><?php $st=$result['freelancer'];
            if($st==0)
            {
              ?>
              Unavailable
            <?php }else{ ?>
              Available

            <?php   } ?>



          </span></li>
        </ul>
      </div>
      <a href="#" class="btn btn-common"><i class="icon-paper-clip"></i> Download Resume</a>
      <a href="#contact" class="btn btn-danger"><i class="icon-speech"></i> Contact Me</a>
    </div>
    <?php 
  }
  ?>
</div>   
</div>
</div>
</section>
<!-- About Section End -->

<!-- Services Section Start -->
<section id="services" class="services section-padding">
  <h2 class="section-title wow flipInX" data-wow-delay="0.4s">What I do</h2>
  <div class="container">

    <div class="row">
      <!-- Services item -->
      <div class="col-md-6 col-lg-3 col-xs-12">
        <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
          <div class="icon">
            <i class="fas fa-th-large fa-5x" style='color:#43B0EF'></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Front-end Development</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
          </div>
        </div>
      </div>
      <!-- Services item -->
      <div class="col-md-6 col-lg-3 col-xs-12">
        <div class="services-item wow fadeInDown" data-wow-delay="0.6s">
          <div class="icon">
            <i class="fab fa-wordpress fa-5x" style='color:#43B0EF'></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Graphic Design</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
          </div>
        </div>
      </div>
      <!-- Services item -->
      <div class="col-md-6 col-lg-3 col-xs-12">
        <div class="services-item wow fadeInDown" data-wow-delay="0.9s">
          <div class="icon">
            <i class="fab fa-php fa-5x" style='color:#43B0EF'></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Business Branding</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
          </div>
        </div>
      </div>
      <!-- Services item -->
      <div class="col-md-6 col-lg-3 col-xs-12">
        <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
          <div class="icon">
            <i class="fab fa-laravel fa-5x" style='color:#43B0EF'></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Consultancy</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Services Section End -->

<!-- Resume Section Start -->
<div id="resume" class="section-padding">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="education wow fadeInRight" data-wow-delay="0.3s">
          <ul class="timeline">
            <li>
              <i class="icon-graduation"></i>
              <h2 class="timelin-title">Education</h2>
            </li>
            <?php 
            $sql2="SELECT * FROM tbl_education";
            $query2=mysqli_query($con,$sql2);
            while ($row2=mysqli_fetch_array($query2)) { ?>
             <li>
              <div class="content-text">
                <h3 class="line-title"><?php echo $row2['Subject']; ?>- <?php echo $row2['instituition']; ?></h3>
                <span><?php echo $row2['start']; ?> - <?php echo $row2['end']; ?> </span>
                <p class="line-text"><?php echo $row2['details']; ?> </p>
              </div>
            </li>
          <?php  } ?>
        </ul>
      </div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="experience wow fadeInRight" data-wow-delay="0.6s">
        <ul class="timeline">
          <li>
            <i class="icon-briefcase"></i>
            <h2 class="timelin-title">Experience</h2>
          </li>
          <?php 
          $sql3="SELECT * FROM tbl_experience";
          $query3=mysqli_query($con,$sql3);
          while ($row3=mysqli_fetch_array($query3)) {
              # code...

           ?>
           <li>
            <div class="content-text">
              <h3 class="line-title"><?php echo $row3['subject']; ?> -<?php echo $row3['company']; ?></h3>
              <span><?php echo $row3['start']; ?> - <?php echo $row3['end']; ?></span>
              <p class="line-text"><?php echo $row3['details']; ?></p>
            </div>
          </li>
        <?php } ?>
        
      </ul>
    </div>
  </div>
</div>
</div>
</div>
<!-- Resume Section End -->

<!-- Portfolio Section -->
<section id="portfolios" class="section-padding">
  <!-- Container Starts -->
  <div class="container">        
    <h2 class="section-title wow flipInX" data-wow-delay="0.4s">My Remarkable Works</h2>
    <div class="row">          
      <div class="col-md-12">
        <!-- Portfolio Controller/Buttons -->
        <div class="controls text-center">
          <a class="filter active btn btn-common" data-filter="all">
            All 
          </a>
          <a class="filter btn btn-common" data-filter=".1">
            Design 
          </a>
          <a class="filter btn btn-common" data-filter=".2">
            Wordpress
          </a>
          <a class="filter btn btn-common" data-filter=".3">
            PHP 
          </a>
          <a class="filter btn btn-common" data-filter=".4">
            Laravel 
          </a>
        </div>
        <!-- Portfolio Controller/Buttons Ends-->
      </div>

      <!-- Portfolio Recent Projects -->
      <div id="portfolio" class="row wow fadeInDown" data-wow-delay="0.4s">
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
          <div class="portfolio-item">
            <div class="shot-item">
              <img src="assets/img/gallery/img-1.jpg" alt="" />  
              <div class="overlay">
                <div class="icons">
                  <a class="lightbox preview" href="assets/img/gallery/img-1.jpg">
                    <i class="icon-eye"></i>
                  </a>
                  <a class="link" href="#">
                    <i class="icon-link"></i>
                  </a>
                </div>
              </div>
            </div>               
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix 1 print">
          <div class="portfolio-item">
            <div class="shot-item">
              <img src="assets/img/gallery/img-2.jpg" alt=""/> 
              <div class="overlay">
                <div class="icons">
                  <a class="lightbox preview" href="assets/img/gallery/img-2.jpg">
                    <i class="icon-eye"></i>
                  </a>
                  <a class="link" href="#">
                    <i class="icon-link"></i>
                  </a>
                </div>
              </div>
            </div>               
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
          <div class="portfolio-item">
            <div class="shot-item">
              <img src="assets/img/gallery/img-3.jpg" alt=""/> 
              <div class="overlay">
                <div class="icons">
                  <a class="lightbox preview" href="assets/img/gallery/img-3.jpg">
                    <i class="icon-eye"></i>
                  </a>
                  <a class="link" href="#">
                    <i class="icon-link"></i>
                  </a>
                </div>
              </div>
            </div>               
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development 1">
          <div class="portfolio-item">
            <div class="shot-item">
              <img src="assets/img/gallery/img-4.jpg" alt="" /> 
              <div class="overlay">
                <div class="icons">
                  <a class="lightbox preview" href="assets/img/gallery/img-4.jpg">
                    <i class="icon-eye"></i>
                  </a>
                  <a class="link" href="#">
                    <i class="icon-link"></i>
                  </a>
                </div>
              </div>
            </div>               
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
          <div class="portfolio-item">
            <div class="shot-item">
              <img src="assets/img/gallery/img-5.jpg" alt="" /> 
              <div class="overlay">
                <div class="icons">
                  <a class="lightbox preview" href="assets/img/gallery/img-5.jpg">
                    <i class="icon-eye"></i>
                  </a>
                  <a class="link" href="#">
                    <i class="icon-link"></i>
                  </a>
                </div>
              </div>
            </div>               
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix print 1">
          <div class="portfolio-item">
            <div class="shot-item">
              <img src="assets/img/gallery/img-6.jpg" alt=""/>
              <div class="overlay">
                <div class="icons">
                  <a class="lightbox preview" href="assets/img/gallery/img-6.jpg">
                    <i class="icon-eye"></i>
                  </a>
                  <a class="link" href="#">
                    <i class="icon-link"></i>
                  </a>
                </div>
              </div>
            </div>               
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container Ends -->
</section>
<!-- Portfolio Section Ends --> 

<!-- Counter Area Start-->
<section class="counter-section section-padding">
  <div class="container">
    <?php 
    $sql1="SELECT * FROM tbl_project";
    $query1=mysqli_query($con,$sql1);
    while ($row=mysqli_fetch_array($query1)) {
          # code...

     ?>
     <div class="row">
      <!-- Counter Item -->
      <div class="col-md-3 col-sm-6 work-counter-widget text-center">
        <div class="counter wow fadeInDown" data-wow-delay="0.3s">
          <div class="icon"><i class="icon-briefcase"></i></div>
          <div class="counterUp"><?php echo $row['projectworking']; ?></div>
          <p>Project Working</p>
        </div>
      </div>
      <!-- Counter Item -->
      <div class="col-md-3 col-sm-6 work-counter-widget text-center">
        <div class="counter wow fadeInDown" data-wow-delay="0.6s">
          <div class="icon"><i class="icon-check"></i></div>
          <div class="counterUp"><?php echo $row['projectdone']; ?></div>
          <p>Project Done</p>
        </div>
      </div>
      <!-- Counter Item -->
      <div class="col-md-3 col-sm-6 work-counter-widget text-center">
        <div class="counter wow fadeInDown" data-wow-delay="0.9s">
          <div class="icon"><i class="icon-diamond"></i></div>
          <div class="counterUp"><?php echo $row['projectaward']; ?></div>
          <p>Awards Received</p>
        </div>
      </div>
      <!-- Counter Item -->
      <div class="col-md-3 col-sm-6 work-counter-widget text-center">
        <div class="counter wow fadeInDown" data-wow-delay="1.2s">
          <div class="icon"><i class="icon-heart"></i></div>
          <div class="counterUp"><?php echo $row['happyclient']; ?></div>
          <p>Happy Clients</p>
        </div>
      </div>
    </div>
  <?php    }
  ?>
</div>
</section>
<!-- Counter Area End-->

<!-- Contact Section Start -->
<section id="contact" class="section-padding">      
  <div class="contact-form">
    <div class="container">
      <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
        <div class="col-md-6 col-lg-6 col-sm-12">
          <div class="contact-block">
            <h2>Contact Form</h2>
            <?php if (isset($_POST['submit'])) {
              $name=$_POST['name'];
              $email=$_POST['email'];
              $subject=$_POST['subject'];
              $message=$_POST['message'];
              $status=0;
              $csql="INSERT INTO tbl_contact(name,email,subject,message,status)VALUES('$name','$email','$subject','$message','$status')";
              $cquery=mysqli_query($con,$csql);
              if ($cquery) {

                echo "<script>alert('Message Send Successfully Contact With You Very Short Time!!')</script>";
              }
                  # code...
            } ?>
            <form id="contactForm" method="post" action="">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                  </div>                                 
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                  </div> 
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" placeholder="Subject" id="subject" class="form-control" name="subject" required data-error="Please enter your subject">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group"> 
                    <textarea class="form-control" id="message" placeholder="Your Message" rows="5" name="message" data-error="Write your message" required></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="submit-button">
                    <button class="btn btn-common" id="submit" type="submit" name="submit">Send Message</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                    <div class="clearfix"></div> 
                  </div>
                </div>
              </div>            
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
          <div class="footer-right-area wow fadeIn">
            <h2>Contact Address</h2>
            <?php 
            $sql="SELECT * FROM tbl_about";
            $query=mysqli_query($con,$sql);
            while ($result=mysqli_fetch_array($query)) {
                    # code...

             ?>
             <div class="footer-right-contact">
              <div class="single-contact">
                <div class="contact-icon">
                  <i class="fa fa-map-marker"></i>
                </div>
                <p><?php echo $result['location']; ?>,<?php echo $result['country']; ?></p>
              </div>
              <div class="single-contact">
                <div class="contact-icon">
                  <i class="fa fa-envelope"></i>
                </div>
                <p><a href="mailto:overcastmoon@gmail.com"><?php echo$result['email'] ?></a></p>
                <p><a href="mailto:mahfujurmoon5@gmail.com">mahfujurmoon5@gmail.com</a></p>
              </div>
              <div class="single-contact">
                <div class="contact-icon">
                  <i class="fa fa-phone"></i>
                </div>
                <p><a href="#">+(88)<?php echo $result['phone']; ?></a></p>
                <p><a href="#">+(88)01758785406</a></p>

              </div>
            </div>

            <?php 
          } ?>
        </div>
      </div>
      <div class="col-md-12">
        <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6700.799694172138!2d88.60864155539382!3d23.688938167913822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1589809441440!5m2!1sen!2sbd"></object>
      </div>
    </div>
  </div>
</div>   
</section>
<!-- Contact Section End -->

<!-- Footer Section Start -->
<footer class="footer-area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-text text-center wow fadeInDown" data-wow-delay="0.3s">
          <?php 
          $ssql="SELECT * FROM tbl_social";
          $squery=mysqli_query($con,$ssql);
          while ($srow=mysqli_fetch_array($squery)) {
              # code...

           ?>
           <ul class="social-icon">
            <li>
              <a class="facebook" href="<?php echo $srow['fb']; ?>"><i class="icon-social-facebook"></i></a>
            </li>
            <li>
              <a class="twitter" href="<?php echo $srow['tw']; ?>"><i class="icon-social-twitter"></i></a>
            </li>
            <li>
              <a class="instagram" href="<?php echo $srow['insta']; ?>"><i class="icon-social-instagram"></i></a>
            </li>
            <li>
              <a class="instagram" href="<?php echo $srow['linkdin']; ?>"><i class="icon-social-linkedin"></i></a>
            </li>

          </ul>
        <?php  } ?>
        <p>Copyright © <?php echo Date("Y"); ?> || Mahfujur.dev </p>
      </div>
    </div>
  </div>
</div>
</footer>
<!-- Footer Section End -->
<?php include("footer.php") ?>