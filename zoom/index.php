<?php
include('config.php');
include('api.php');
$arr['topic']='NEW ZOOM MEETING WITH REDARMOR';
$arr['start_date']=date('2021-05-16 00:02:30');
$arr['duration']=30;
$arr['password']='123456';
$arr['type']='2';
$result=createMeeting($arr);
if(isset($result->id)){
 
}else{
  echo '<pre>';
  print_r($result);
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Redarmor Billing</title>
  <meta content="Redarmor billing" name="description">
  <meta content="billing" name="keywords">

  <!-- Favicons -->
<!--   <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
          <!--      owl carousel css link-->
 <link rel="stylesheet" href="../assets/css/owl.carousel.css">         
           <!-- owl carousel themes css link -->
 <link rel="stylesheet" href="../assets/css/owl.theme.default.css"> 

  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

   <link rel="stylesheet" type="text/css" href="../assets/css/all.css">

  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
 <script type="text/javascript" src="../assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/owl.carousel.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style type="text/css">
  .item img 
  {
    border-radius: 10%;
    border:2px solid red;
  }
  .item img:hover
  {
     border:2px solid green;
     width: 5.5rem;
  }
  
</style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
       <i class="fas fa-map-marker-alt"></i>
              244 5th Avenue
              New York, NY 10001
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center">
  <a href="index.html" class="logo mr-auto" style="padding-left: 32px;"><img src="assets/logo/redarmorlogo.png" alt="" width="80%;"></a>
     <nav class="nav-menu menu d-none d-lg-block">
        <ul>  
          <li class="active"><a href="index.html">Home</a></li>
         <li class="drop-down"><a href="">Our Services</a>
            <ul class="mega-menu">
           <div class="container">
            <div class="row">
             <div class="col-sm-3 dropmenu">
               <a href="revenue.html">Revenue Cycle Management</a>
              <div class="menu-box">
                  <ol>
                   <a href="revenue.html">
                  <li>Revenue cycle management</li>
                  <li> Increased Revenue</li>
                  <li>  Reduced Denials.</li>
                  <li> No Transition Period<br></li>
                  <li>Overnight Claims Submission<br></li>
              
               <button class=" btn btn-danger m-4"> and more ...</button>
               </a>
                 </ol>
                </div>
            </div>      
              <div class="col-sm-3 dropmenu">
                <a href="billing-review.html">Billing Reviews Services</a>
               <div class="menu-box ">
                  <ol>
                   <a href="billing-review.html">
                  <li>Redarmor exlcusive-</li>
                  <li> Invalid Write-offs </li>
                  <li> Under-paid Claims</li>
                  <li>Down Coding Issues</li>
                  <li> Payor Contract Review<br></li> 
               <button class=" btn btn-danger m-4"> and more ...</button>
               </a>
                 </ol>
                </div>
            </div>   
            <div class="col-sm-3 dropmenu">
            <a href="ar.html"> A/R Mangement Services</a>
            <div class="menu-box">
                 <ol>
                   <a href="ar.html">
                  <li>Highly efficiencient A/R</li>
                  <li> Follow-up on Denials</li>
                  <li> Follow-up on Lost Claims</li>
                  <li>Invalid Denials<br></li>
                  <li> Appeal Management<br></li> 
                  <button class=" btn btn-danger m-4"> and more ...</button>
               </a>
                 </ol>
                </div>
            </div>   
            <div class="col-sm-3 dropmenu">
             <a href="value-added.html">Value Added Services</a>
               <div class="menu-box">               
                 <ol>
                   <a href="value-added.html">
                  <li>Variety of Value Added Services</li>
                  <li>Analytical Reports </li>
                  <li>  Advance Eligibility</li>
                  <li> Patient Scheduling<br></li>
                  <li> Patient Calling<br></li>
               <button class=" btn btn-danger m-4"> and more ...</button>
               </a>
                 </ol>
                </div>
            </div> 
              </div> 
               </div>      
                </ul>
            </li>    
          <li class="drop-down"><a href="">Our Company</a>
            <ul class="menu-second">
               <li><a href="choose.html">Why Choose Us</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </li>    

        </ul>
      </nav>
      <!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

     <!-- ======= Zoom Section ======= -->
    <section id="Zoom" class="zoom" style="background: #fff;">
      <div class="container">
        <div class="row">  
            <div class="col-sm-4"></div>
              <div class="col-sm-4 text-center Meeting">
               <?php   $result=createMeeting($arr);
                if(isset($result->id)){
               ?> 
               <div class="mb-3">
              <h1 class="text-center bg-dark text-danger">Zoom Meeting</h1><br>
              <h3 class="form-label">Password</h3><br>
                <h4><?php echo $result->password;?></h4>
              </div>
                <div class="mb-3">
                   <h3 class="form-label">Start-Time</h3><br>
                   <h4> <?php echo $result->start_time;?></h4>
              </div>
                <div class="mb-3">
                <h3 class="form-label">Durations</h3><br>
                    <h4><?php echo $result->duration ;?></h4>
              </div>
          <button type="button" class="btn btn-danger"><a class="text-white" href="<?php echo $result->join_url;?>" >Create Meeting</a></button>
          <?php 
        }
        else{
          echo '<pre>';
         print_r($result);
       } 
       ?>
         </div> 
         <div class="col-sm-4"></div>
          </div>  
      </div>
    </section><!-- End Zoom Section -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="mt-2">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 footer-links">
            <div class="row">
              <div class="col-sm-4 text-center">
                <img src="assets/logo/redarmorlogo.png" width="50%;">
                <p class="text-white" style="font-size: 12px;">Redarmor Billing LLC</p>
              </div>
              <div class="col-sm-4"></div>
              <div class="col-sm-4"></div>
            </div>
            <h2 class="text-white">Our Social Networks</h2> 
            <div class="social-links mt-3 col-sm-12">
              <a href="paypal/form.html">Pay</a></li> 
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
         <div class="col-lg-4 col-md-6 footer-contact">
            <h3 class="text-white" style="font-size: 26px;">Address</h3>
           <p class="text-white">
              244 5th Avenue<br>
              New York, NY 10001<br>
              <strong>Phone:</strong><br> +1 -347-708-0110<br>
              <strong>General inquires:</strong><br> info@redarmorsolutions.com<br>
             <strong>
               pre-sale inquires:
             </strong><br> sales@redarmorsultions.com
            </p>
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <h3 class="text-white">Useful Links</h3>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Why choose us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> 
          <div class="col-lg-4 col-md-6 footer-links">
             <h3 class="text-white">Services<span>.</span></h3>
           <p class="text-white">
              billing reviews<br><br>
              A/R management<br><br>
              revenue services<br><br>
              billing audit<br><br>
              Values added services<br>
            </p>
        </div>
      </div>
    </div>
  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<script type="text/javascript">
  AOS.init();
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    autoplay:true,
    autoplayTimeout:1300,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5,
        }
    }
})
</script>
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>