<?php
session_start();
$inser=false;
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
mysqli_select_db($con,'maa ki rasoi');
$username=$_SESSION['email'];
$s="SELECT * FROM validate WHERE  email='$username'  ";
$result=mysqli_query($con,$s);
$num=mysqli_fetch_assoc($result);
if($num==0)
{
  echo "<script> alert('Please Login to continue')  </script>  ";
  echo "retry again ";
  echo "<adminpanel.php'>click here </a>";
  return false;
  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MAA KI RASOI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>


  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
    <div class="container text-right">
      <i class="icofont-phone"></i> +91 884056783
      <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 11:00 PM
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Maa Ki Rasoi</span></a></h1>
        
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="contact.php">Contact</a></li>

          <li class="book-a-table text-center"><a href="book.php">Book a table</a></li>
          <li class="book-a-table text-center"><a href="order.php">Order Now</a></li>
          <?php
            

            echo '<li class="book-a-table text-center"><a href="#">'.$num['name'].'</a></li>';

               
              echo '<li class="book-a-table text-center"><a href="logout.php">Logout</a></li>';

            
              
        
        ?>
             </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Maa Ki Rasoi</span> </h2>
                <!-- <p class="animate__animated animate__fadeInUp">हजारो फूल चाहिए एक माला बनाने के लिए,<br>
                                                               हजारों दीपक चाहिए एक आरती सजाने के लिए<br>
                                                               हजारों बून्द चाहिए समुद्र बनाने के लिए,<br>
                                                               पर “माँ “अकेली ही काफी है,<br>
                                                               बच्चो की जिन्दगी को स्वर्ग बनाने के लिए..!!<br>
                </p> -->
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="book.php" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
      </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch ">
            <img src="assets/img/cb.jpg" width="600px" heigth="600px" alt="" srcset="">
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>When you go to a restaurant,<strong> the less you know about what happens in the kitchen, the more you
                  enjoy your meal.</strong></h3>
              <p>
                A restaurant is a place where cooked food is sold to the public, and where people
                sit down to eat it. It is also a place where people go to enjoy the time and to eat a meal
              </p>
              <p class="font-italic">
                MAA KI RASOI presents a great opportunity to unwind, relax and enjoy a delicious meal in
                a great atmosphere. While this is what most people are looking for when they decide to dine out,
                it is not always what they get. There are some very good restaurants, but unfortunately, they are few
                and far
                between. People will always make a return visit when they enjoy the dining experience and it is to
                everyone’s a
                dvantage for the restaurant to up its game! Following ar
                some of the qualities or characteristics that distinguish between a great restaurant and other
                restaurants
              </p>

            </div>

          </div>

        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why choose <span>Our Restaurant</span></h2>
          <p>Qualities That Make A MAA KI RASOI a good restaurant!</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Serving high quality food</h4>
              <p>When people walk through the restaurant doors, they are expecting to enjoy their meal. A good
                restaurant does not
                compromise when it comes to serving great food.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>The Ghar Ka Khana experience</h4>
              <p> Customers look for a good overall experience when they visit a restaurant. When you go out, you want
                to know that
                you are eating in home like enviroment</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Jayaka Uniqueness</h4>
              <p>The most neglected of ‘getting in shape’ is the kitchen.
                The backbone of an efficient kitchen is often the mother as she knows the great indian tastes and their
                best "jaykas"</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Main Course</li>
              <li data-filter=".filter-specialty">Veg Thali</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Paneer Tikka</a><span>Rs. 120</span>
            </div>
            <div class="menu-ingredients">
              Grilled Paneer Tikka
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Rajasthani Thali</a><span>Rs. 250</span>
            </div>
            <div class="menu-ingredients">
              The Rajasthani thali has a mix of colourful dishes and some local hits that you would hate to miss out on.
              The elaborate menu consists of Dal Baati Churma, Missi Roti with Gatte ki Sabji, Panchmela Dal, Laal Maas
              and Bajra Roti along with flavoured buttermilk.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Veg Burger</a><span>Rs 100</span>
            </div>
            <div class="menu-ingredients">
              A loaded VEG burger with cravings on toppings
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Dal Makhani</a><span>Rs. 110</span>
            </div>
            <div class="menu-ingredients">
              A great Type Of mussoore ki Dal in indian recipe
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Uttar Thali</a><span>Rs. 250</span>
            </div>
            <div class="menu-ingredients">
              The thali from Uttar Pradesh is again robust, filled with dal, veggie dishes, dahi and even sweets. The
              Awadhi and Mughlai cuisines of Uttar Pradesh bear similarities to those of Kashmir and Punjab due to the
              common influence of Mughals
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Chilli Paneer</a><span>Rs. 100</span>
            </div>
            <div class="menu-ingredients">
              FUll OF indian Terrific Masale
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Butter Paneer Masala</a><span>Rs. 150</span>
            </div>
            <div class="menu-ingredients">
              Paneer Loaded with typical indian taste with Extra Butter
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Mix Veg</a><span>Rs. 150</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Maharashtrian Thali</a><span>Rs. 250</span>
            </div>
            <div class="menu-ingredients">
              Maharashtrian food is characterized by slightly spicy flavours. The traditional thali will showcase the
              scrumptious staples of the state which includes Aamras, Kosimbir, Bhakri roti (a millet flatbread), Bharli
              Vangi (stuffed brinjal), pitla (thick chickpea flour curry) and much more
            </div>
          </div>

        </div>

      </div>
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Maa Ki Rasoi</h3>
      <p>Never eat in a restaurant that has a bowling trophy on the cash register</p>

      <div class="copyright">
        &copy; Copyright <strong><span>Maa Ki Rasoi</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="#">TEAM LOOSER'S</a><br>
        <a href="adminpanel.php">Chef's Panel</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

