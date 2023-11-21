<?php 

include 'db.php';

$sql = "SELECT * FROM tblumr_aud where aud_type='Urdu'";

$result = $con->query($sql);

$sql1 = "SELECT * FROM tblumr_aud where aud_type='English'";

$result1 = $con->query($sql1);

$sql2 = "SELECT * FROM tblumr_aud where aud_type='Pashto'";

$result2 = $con->query($sql2);

$sql3 = "SELECT * FROM tblumr_aud where aud_type='Arabic'";

$result3 = $con->query($sql3);
?>
<!DOCTYPE html>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Umrah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  

  <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
 <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-clock d-flex align-items-center"><span id="datetime"></p><script>var dt = new Date();
document.getElementById("datetime").innerHTML=dt.toLocaleString();</script></span> </i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
      </div>

      
    </div>
  </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php"><img src="assets/img/tre.jpg"/></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#vdo">Video Lectures</a></li>
          <li><a class="nav-link scrollto" href="#menu">Audio Lectures</a></li>
          
          <li><a class="nav-link scrollto" href="#chefs">Maps</a></li>
          
         
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <!-- <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a> -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Umrah</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Umrah</li>
          </ol>
        </div>

      </div>
    </section>

<section id="about" class="about">
     <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="umrah-img">
              <img src="assets/img/umrah.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>The Umrah is an Islamic pilgrimage to Mecca, in contrast to the Ḥajj , which has specific dates according to the Islamic lunar calendar.</h3>
            <p class="fst-italic">
            In accordance to the Shariah (Law of Islam), for both pilgrimages, a Muslim must first assume Ihram, a state of purification achieved by completing cleansing rituals, wearing the prescribed attire, and abstaining from certain actions. This must be attained when reaching a Miqat, a principal boundary point in Mecca, like Dhu 'l-Hulaifah, Juhfah, Qarnu 'l-Manāzil, Yalamlam, Zāt-i-'Irq, Ibrahīm Mursīyah, or a place in Al-Hill. Different conditions exist for air travelers, who must observe Ihram once entering a specific perimeter in the city.
            </p>
            <h2> Difference Between Hajj And Umrah </h2>
            <ul>
              <li><i class="bi bi-check-circle"></i>Both are Islamic pilgrimages, the main difference is their level of importance and the method of observance.</li>
              <li><i class="bi bi-check-circle"></i>Hajj is one of the five pillars of Islam. It is obligatory for every Muslim once in their lifetime, provided they are physically fit and financially capable.</li>
              <li><i class="bi bi-check-circle"></i>Hajj is performed over specific days during a designated Islamic month. However, Umrah can be performed at any time.</li>
              <li><i class="bi bi-check-circle"></i>Although they share common rites, Umrah can be performed in less than a few hours while Hajj is more time-consuming, and involves more rituals.</li>
             
                                  

            </ul>
           <!--  <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p> -->
           
          </div>
        </div>

      </div>
    </section>
  


     <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Umrah</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0"  id="gal">
         
            
       
          

        

        </div>

      </div>
    </section>
    
    
    <section id="vdo" class="vdo">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Video</h2>
          <p>Video Lectures</p>
        </div>

        <div class="row" id="vod1" >

          


         

        </div>

      </div>
    </section>

    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Audio</h2>
          <p>Audio Lectures</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Urdu</li>
              <li data-filter=".filter-salads">Pashto</li>
              <li data-filter=".filter-specialty">English</li>
              <li data-filter=".filter-special">Arabic</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
<?php


if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
  
 echo '<div class="col-lg-6 menu-item filter-starters" id="aud">
  <img src="assets/img/tr.jpeg" class="menu-img" alt="">
           
            <div class="menu-ingredients">
             <audio controls>

  <source src="admin/'. $row["umraud_path"].'" type="audio/mpeg">

</audio>
</div>
<div class="menu-ingredients">
             '. $row["umraud_descrip"].'
        
            </div>
                </div>';
               }} ?>
         
         <?php


if ($result1->num_rows > 0) {
  
  while($row = $result1->fetch_assoc()) {
  
 echo '<div class="col-lg-6 menu-item filter-specialty">
  <img src="assets/img/tr.jpeg" class="menu-img" alt="">
           
            <div class="menu-ingredients">
             <audio controls>

  <source src="admin/'. $row["umraud_path"].'" type="audio/mpeg">

</audio>
</div>
<div class="menu-ingredients">
             '. $row["umraud_descrip"].'
        
            </div>
                </div>';
               }} ?>

          
           <?php


if ($result2->num_rows > 0) {
  
  while($row = $result2->fetch_assoc()) {
  
 echo ' <div class="col-lg-6 menu-item filter-salads">
  <img src="assets/img/tr.jpeg" class="menu-img" alt="">
           
            <div class="menu-ingredients">
             <audio controls>

  <source src="admin/'. $row["umraud_path"].'" type="audio/mpeg">

</audio>
</div>
<div class="menu-ingredients">
             '. $row["umraud_descrip"].'
        
            </div>
                </div>';
               }} ?>
          

 <?php


if ($result3->num_rows > 0) {
  
  while($row = $result3->fetch_assoc()) {
  
 echo ' <div class="col-lg-6 menu-item filter-special">
  <img src="assets/img/tr.jpeg" class="menu-img" alt="">
           
            <div class="menu-ingredients">
             <audio controls>

  <source src="admin/'. $row["umraud_path"].'" type="audio/mpeg">

</audio>
</div>
<div class="menu-ingredients">
             '. $row["umraud_descrip"].'
        
            </div>
                </div>';
               }} ?>
         

         
            

         


       

          

        </div>

      </div>
    </section>
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Maps</h2>
          <p>Maps of Places</p>
        </div>

        <div class="row" id="map1">

         

         

         

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Huri</h3>
              <p>
               enter of information Technology, G-9/1, Islamabad<br><br>
                <strong>Phone:</strong> +92 320 550 4515<br>
                <strong>Email:</strong> info@huri.com.pk<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
         

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Gallery</h4>
            <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#chefs">Maps</a></li>
              
            </ul>
          </div>
            <div class="col-lg-3 col-md-6 footer-links">
            <h4>Lectures</h4>
            <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#vdo">Video Lecture</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#menu">Audio Lecture</a></li>
              
            </ul>
          </div>

        </div>
      </div>
    </div>
 <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Huri</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://Huri.com.pk/">Huri.com.pk</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <!--<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>-->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script type="text/javascript">
  $(document).ready(function(){
      gal();
      map1();
      vod1();
      
    //   aud();
 
    });
  /* $(document).ready(function(){
 $('#dataTable').DataTable();
 }); */
  function gal()
      {
        
        var gal="gal";
        $.ajax({
          url:"op1.php",

        type:"post",
        data:{ gal:gal },
        success:function(data,status){
          $('#gal').html(data);

        }
      });
      }
      
      
       function vod1()
      {
        
        var vod1="vod1";
        $.ajax({
          url:"op1.php",

        type:"post",
        data:{ vod1:vod1 },
        success:function(data,status){
          $('#vod1').html(data);

        }
      });
      }
      
      function map1()
      {
        
        var map1="map1";
        $.ajax({
          url:"op1.php",

        type:"post",
        data:{ map1:map1 },
        success:function(data,status){
          $('#map1').html(data);

        }
      });
      }
     
     
    //   function aud()
    //   {
        
    //     var aud="aud";
    //     $.ajax({
    //       url:"op.php",

    //     type:"post",
    //     data:{ aud:aud },
    //     success:function(data,status){
    //       $('#aud').html(data);

    //     }
    //   });
    //   }
      
      
     
       
    </script>
    <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/609adaf2b1d5182476b7fcd1/1f5eeehab';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

</body>

</html>