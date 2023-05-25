<?php
error_reporting(0);
@include 'code.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin page</title>
   <script src="https://kit.fontawesome.com/517d6a611c.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <!--Bootstrap css-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sh6a384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
<!-- Header -->
<header id="head">
   <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/icon.png" style="width: auto; height: 55px;">&nbsp;&nbsp;<span style="font-size: 25px; color:white;">Super</span> <span style="font-size: 25px; color: blue;">Shopee</span></a>&nbsp;
         <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
               <li class="nav-item">
                  <a class="nav-link active" href="#home" aria-current="page"><i class="fa-solid fa-house-user"></i>&nbsp;Home <span class="visually-hidden">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#about"><i class="fa-solid fa-address-card"></i>&nbsp;About</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-user-secret"></i>&nbsp;Links</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                     <a class="dropdown-item" href="logout.php" class="btn">Logout</a>
                     <a class="dropdown-item" href="login_form.php">Login</a>
                     <a class="dropdown-item" href="register_form.php">Register</a>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-bomb"></i>&nbsp;Dashboard</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-gear"></i>&nbsp;Settings</a>
               </li>
            </ul>
            <a class="navbar-brand" href="#"><img src="img/admin.png" style="width: auto; height: 50px;">&nbsp;&nbsp;<span style="font-size: 25px; color: white;">Hello,</span>&nbsp;<span style="color: yellow; background: red; border-radius:5px; font-size: 25px;">Admin !</span></a>
            <a class="navbar-brand" href="#">Welcome <span style="font-size: 25px; color: blue;"><?php echo $_SESSION['user_name'] ?></span></a> 
            <a href="index.php" class="nav bn" style="float:right; color: black; background: orange; border-radius: 5px; font-size: 20px; text-decoration: none; border: 2px solid white;"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;Logout</a>
            
         </div>
     </div>
   </nav>
</header>

<!----Home------>
<section id="home">

<div class="container-fluid">
    <div class="row pt-5">
        <div class="col-lg-6 col-md-6 col-12 order-1 pt-5">
            <h1 class="display-4">Welcome To<br><span>Super Shopee</span>&nbsp;<span style="color: purple;">Website</span></h1>
            <p class="my-lg-2 my-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Super Shopee is an Indian e-commerce company, headquartered in Bengaluru, and incorporated in Singapore as a private limited company. The company initially focused on online book sales before expanding into other product categories such as consumer electronics, fashion, home essentials, groceries, and lifestyle products.<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Super Shopee has a dominant position in the apparel segment, bolstered by its acquisition of Myntra, and was described as being "neck and neck" with Amazon in the sale of electronics and mobile phones.
            </p>
            <button class="btn btn-primary my-lg-3 my-3">Get started</button>&nbsp;
            <button class="btn btn-primary my-lg-3 my-3"><a href="logout.php" style="color:white; text-decoration:none;">Logout</a></button>
        </div>
        <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 order-sm-2">
            <img src="img/banner-right.png" style="width: auto; height: 100%;" alt="work image" class="img-fluid">
        </div>
    </div>
</div>
</section>

<!----About---->
<section id="about">

<div class="container-fluid">
<div class="row pt-5">
    <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3">
        <img src="img/about-us-image.jpg" alt="work image" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12 pt-5">
        <h6 style="font-size: 50px;">ABOUT US</h6>
        <h1 class="display-5"><span>Online Shopping</span></h1>
        <p>Another reason why Super Shopee is the best of all online stores is the complete convenience that it offers. You can view your favourite brands with price options for different products in one place. A user-friendly interface will guide you through your selection process. Comprehensive size charts, product information and high-resolution images help you make the best buying decisions. You also have the freedom to choose your payment options, be it card or cash-on-delivery. The 30-day returns policy gives you more power as a buyer. Additionally, the try-and-buy option for select products takes customer-friendliness to the next level.
         Enjoy the hassle-free experience as you shop comfortably from your home or your workplace. You can also shop for your friends, family and loved-ones and avail our gift services for special occasions.
         </p>
        <button class="btn btn-primary my-lg-3 my-3">Services</button>
    </div>    
</div>
</div>
</section>

<!-- Footer -->
<footer id="foot">

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-8 col-sm-6">
                        <div class="address">
                            <h3><i class="fa-solid fa-map-location-dot" style="color: white;"></i>&nbsp;Address </h3>
                        </div>
                        <ul class="location_icon">
                            <li>No: 06, Vivekanandar theru, Dubai kuruku sandhu, Dubai main road, Dubai.</li>
                        </ul><br>
                        <ul class="location_icon">
                           <li style="overflow: hidden;">
                              <h4 style="color: red;"><i class="fa-solid fa-phone" style="color: white;"></i>&nbsp;Customer Care No</h4>
                              <p> +000 1234 56789 (or)<br>+919 8765 43210</p>
                           </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="address">
                            <h3>Links</h3>
                            <ul class="Menu_footer">
                                <li class="active"> <a href="#home">Home</a> </li>
                                <li><a href="#about">About </a></li>
                                <li><a href="#register_form.php">Register</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="address">
                            <h3>Follow Us</h3>
                        </div>
                        <ul class="social_icon">
                            <li><a href="#">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"> Twitter<i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"> Linkedin<i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"> Youtube<i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li><a href="#"> Instagram<i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <div class="address">
                            <h3>Newsletter </h3>
                        </div>
                        <form class="bottom_form">
                            <input class="enter" placeholder="Enter Your Email" type="text" name="Enter Your Email">
                            <button class="sub_btn">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright 2022 All Right Reserved By <a href="#home">Super Shopee Website</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>

<script>
   alert('Hello, Chief <?php echo $_SESSION['user_name'] ?> \nWelcome to our Website !!!');
</script>

<!--Bootstrap script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>