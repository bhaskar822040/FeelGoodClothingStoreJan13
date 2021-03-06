<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Feel Good Clothing Store</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1><a href="index.html">NewBiz</a></h1> -->
        <a href="index.html" style="font-size:30px">Feel Good Clothing Store</a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="admin.html">Admin</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!-- ======= Intro Section ======= -->
 
  <main id="main">

    <!-- ======= About Section ======= -->
  
<!-- ======= Intro Section ======= -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" style="margin-top:100px">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
               </header>

        <div class="row about-container">

          <div class="col-lg-4 content order-lg-1 order-2">
           

          <form method="GET" action="search.php">
					<div class="row">
                        <h2>Filters By price</h2>
                        <hr/>
						<div class="col-md-12">
							<label for="f_name">Price range</label>
							
                            <div class="radio">
                                <label><input type="radio" name="price" value="50" checked>&nbsp;&nbsp;0$-50$</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="price" value="100" >&nbsp;&nbsp;50$-100$</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="price" value="200" >&nbsp;&nbsp;100$-200$</label>
                            </div>
						</div>
						<!-- <div class="col-md-12">
                            <label for="date">Select Date</label>
                            <input type="date" id="date" name="date" class="form-control" required style="width:200px">
							
                        </div> -->
                        
                        <div class="col-md-12">
                            <br/>
                        <button  class="btn btn-primary form-control" type="submit" style="width:200px" name="submit" >Search</button>
                        </div>
					</div>


          </div> 
      

          <div class="col-lg-8 background order-lg-2" data-aos="zoom-in">
           
           

          <h1>Products</h1>
          <hr/>
          <br/>
        <div class="row">

                                  
                        <?php

                        $p=$_GET['price'];
                      //  $date=$_GET['date'];

                        // $un = $_SESSION["un"];
                        //echo $_SESSION["un"];

                        include 'config.php';


                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }
                        //Price BETWEEN 10 AND 20
                        if($p == "50")
                        {
                          $sql = "SELECT * FROM products where product_price BETWEEN 0 AND '$p' ";
                        }
                        else if($p == "100")
                        {
                          $sql = "SELECT * FROM products where product_price BETWEEN 50 AND '$p' ";
                        }
                        else{
                          $sql = "SELECT * FROM products where product_price BETWEEN 100 AND '$p' ";
                        }
                       
                        $result = $conn->query($sql);

                        if ($result) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                        echo  '


                          <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200" style="margin-bottom:40px">
                          <div class="icon-box" style="margin-bottom: 10px;">
                            <div class="icon"> <a href="menu.php?rid=' . $row['product_id'] . '"><img src="images/' . $row['product_image'] . '" alt="restaurant" style="width:90px;"></a></div>
                            <h2 class="title"><a href="" style="font-size: 20px;">' . $row['product_title'] . '</a></h2>
                            <h4 class="title"><a href="" style="font-size: 14px;">' . $row['product_price'] . '$</a></h4>
                            <p class="description"> ' . $row['product_desc'] . '</p>
                          
                          </div>
                        </div>

                        ';
                        }
                        } else {
                        echo "0 results";
                        }
                        $conn->close();
                        ?>








              </div>


          </div>
        </div>

       

      </div>
    </section><!-- End About Section -->

   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Feel Good Clothing Store</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact" style="color:white">
           
                <h4>Contact Us</h4>
                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true" style="color:white"></i><a href="#" style="color:white">725 James Street N,<br>
                            Thunder Bay</a></li>
                    <li><i class="fa fa-phone-square" aria-hidden="true"></i><a href="#" style="color:white">&nbsp;807-777-7777</a></li>
                    <li><a href="#" style="color:white"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;working time: Mon - Sat<br> 9AM -
                            5PM</a></li>
                    <li><a href="#" style="color:white"><i class="fa fa-envelope" aria-hidden="true"></i> Info @ gmail.com</a></li>
                </ul>
          

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Feel Good Clothing Store</strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="https://bootstrapmade.com/">Feel Good Clothing Store</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>