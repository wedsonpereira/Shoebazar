<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SHOEBAZAR.COM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="shoebazar.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" type="text/css" href="slider.css?v=<?php echo time(); ?>">
  <!--light-slider.css------------->
  <link rel="stylesheet" type="text/css" href="lightslider.css?v=<?php echo time(); ?>">
  <!--Jquery-------------------->
  <script type="text/javascript" src="jquery.js"></script>
  <!--lightslider.js--------------->
  <script type="text/javascript" src="lightslider.js"></script>
  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body class="m-3">
 <main id="body_blur">
  <!-- Navbar goes here -->
  <nav class="navbar navbar-expand-xl bg-body-tertiary p-0">
    <div class="container-fluid">
      <a class="navbar-brand fs-3 mb-lg-2 hv-logo" href="#">SHOEBAZAR.COM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-lg-0 ul-effect d-flex justify-content-between">
           <li class="nav-item">
            <a class="nav-link active fw-semibold" aria-current="page" href="brands.php">BRAND UPLOAD</a>
          </li>
          <!--
          <li class="nav-item">
            <a class="nav-link active fw-semibold" href="#">WOMEN</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link active fw-semibold" href="myorders.php">MYORDERS</a>
          </li>
          <li class="nav-item">
       <?php
              session_start();
              if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] || (isset($_SESSION['registerd']) && $_SESSION['registerd'])){
                echo '<a class="nav-link active fw-bolder" href="logout.php">LOGOUT?</a>';
              }
              else{
                echo '<a class="nav-link active fw-bolder" href="login.php">LOGIN</a>';
              }
         ?> 
          </li>
        </ul>
        <form class="d-flex s-focus" role="search" method="post">
          <input class="form-control me-2 btn btn-outline-dark opacity-100" type="search" placeholder="Search"
            aria-label="Search">
          <button class="btn btn-outline-secondary h-50 pt-0 opacity-100 rounded-5" type="submit"><svg
              xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
              viewBox="0 0 16 16">
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg></button>
            <a href="Seller.php" class="seller_link"><button id="Sellerbtn" type="button" class="btn btn-outline-dark cart hover-zoom rounded-3 p-1 w-25 me-4" title="Your Cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="24" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>
          </button></a>
          <button id="cartButton" type="button" name="cart" class="btn btn-outline-danger d-flex h-50 pt-0 opacity-100 hover-zoom rounded-3 seller" title="Your Cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
              <path
                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
            </svg>
          </button>
        </form>
      </div>
    </div>
  </nav>
  <?php
    if((isset($_SESSION['loggedin']) && $_SESSION['loggedin']) || (isset($_SESSION['registerd']) && $_SESSION['registerd'])){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Congrats!!. You have successfully logged in.</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    else{
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong> Ooops!. You are not logged in!</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <hr class="w-100 nav-rule opacity-100 mt-0 pt-0 mb-2">

  <!-- carousal goes here -->
  <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active hover-zoom">
        <img src="photos/c-bg1.jpg" class="d-block w-100" alt="..." class="carousal_img">
        <div class="carousel-caption d-none d-md-block">
          <h5>All Men's</h5>
          <p>All kinds of shoes are available for men's</p>
        </div>
      </div>
      <div class="carousel-item hover-zoom">
        <img src="photos/Womens.jpg" class="d-block w-100" alt="..." class="carousal_img">
        <div class="carousel-caption d-none d-md-block">
          <h5>All Women's</h5>
          <p>All kinds of shoes are available for Women's</p>
        </div>
      </div>
      <div class="carousel-item hover-zoom">
        <img src="photos/kid2.jpg" class="d-block w-100" alt="..." class="carousal_img">
        <div class="carousel-caption d-none d-md-block">
          <h5>All kids</h5>
          <p>All kinds of shoes are available for kid's</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- carousal ends here -->

  <!-- heading goes here -->
  <div class="mt-4 mb-4">
    <h3 style="text-align: center;"><strong>Our brands</strong>- Made By Shoebazar</h3>
  </div>

  <!-- brands goes here -->
  <div class="container-brand">
  <?php 
        include("db.php");
        $product_data="SELECT brand_name,brand_img,brand_desc,brand_url FROM seller_brand;";
        $result=mysqli_query($conn,$product_data);
        if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_assoc($result)){         
        ?>
    <div class="brands">
      <a href="#">
        <img src="brand_img/<?php echo $row["brand_img"] ?>" alt="</>" class="brand-img">
        <img src="photos/icon-brand.png" alt="</>" class="brand-logo">
      </a>
      <div class="brand-info">
        <h4 class="brand_name pt-3"><?php echo $row["brand_name"] ?></h4>
        <p class="brand-ds"><?php echo $row["brand_desc"] ?></p>
      </div>
      
      <div class="button-brand">
        <a href="<?php echo $row["brand_url"] ?>"><button class="btn btn-outline-dark rounded-0 p-2 fs-5 fw-semibold alshoes">All Shoes</button></a>
      </div>
    </div>
    <?php 

          }
        }
    ?>
  </div>
 
  <hr class="w-100 nav-rule opacity-100 mt-0 pt-0 mb-2">

  <div class="mt-4 mb-4">
    <h3 style="text-align: center;"><strong>New Arrivals</strong></h3>
  </div>

  <!-- New arrivals -->
  <div class="slider">
    <ul id="autoWidth" class="cs-hidden">
      <!--1------------------------------------>
      <?php 
        include("db.php");
        $product_data="SELECT b_id,p_name,p_price,p_img,p_desc,Qty FROM seller_product;";
        $result=mysqli_query($conn,$product_data);
        if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_assoc($result)){         
        ?>
      <li class="item-a">
        <!--box-slider--------------->
        <div class="box">
          <!--img-box---------->
          <div class="slide-img">
            <img alt="1" src="new_arr_img/<?php echo $row["p_img"]; ?>">
            <!--overlayer---------->
            <div class="overlay">
              <!--buy-btn------>
              <a href="payment.php?price=<?php echo $row["p_price"]; ?>&product_name=<?php echo $row["p_name"];?>&product_image=<?php echo $row["p_img"];?>&product_qty=<?php echo $row["Qty"];?>&product_id=<?php echo $row["b_id"];?>" class="buy-btn">Buy Now</a>
              
              <!-- the price is a vairable which has global aceess as get method -->
            </div>
          </div>
          <!--detail-box--------->
          <div class="detail-box">
            <!--type-------->
            <div class="type">
              <a href="#"><?php echo $row["p_name"];?></a>
              <span><?php echo $row["p_desc"]; ?></span>
            </div>
            <!--price-------->
            <div class="type1">
            <a href="#" class="price">Rs.<?php echo $row["p_price"]; ?></a>
            
            <button class="add-to-cart" title="Add to cart">
              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
              </svg>
            </button>
            </div>
          </div>
        </div>
      </li>
     <?php 
  }
}//while loop close
    else{
      echo '<h1>No data exists</h1>';
}//main if close
     ?>
       
    </ul>
  </div>


  <hr class="w-100 nav-rule opacity-100 mt-0 pt-0 mb-2">

  <div class="mt-4 mb-4">
    <h3 style="text-align: center;"><strong>shoe Maintaining tips </strong>-Suggest By Shoebazar</h3>
  </div>

  <div class="t-container">
    <div class="t-tip">
      <h3 class="t-head rounded-3">Where you should keep your shoes for safe!<button class="close-btn"
          data-target="tip-1"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="currentColor"
            class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
          </svg></button></h3>
      <p id="tip-1" class="t-tip-des rounded-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum adipisci itaque vel aperiam nam temporibus et.
        Eveniet deleniti quo animi. Saepe velit in quas animi perferendis cumque eum quaerat aut!
      </p>
    </div>
    <div class="t-tip">
      <h3 class="t-head rounded-3">How to make the shoe to look good for long time<button class="close-btn"
          data-target="tip-2"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="currentColor"
            class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
          </svg></button></h3>
      <p id="tip-2" class="t-tip-des rounded-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum adipisci itaque vel aperiam nam temporibus et.
        Eveniet deleniti quo animi. Saepe velit in quas animi perferendis cumque eum quaerat aut!
      </p>
    </div>
    <div class="t-tip">
      <h3 class="t-head rounded-3">This is a tooltip<button class="close-btn" data-target="tip-3"><svg
            xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="currentColor"
            class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
          </svg></button></h3>
      <p id="tip-3" class="t-tip-des rounded-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum adipisci itaque vel aperiam nam temporibus et.
        Eveniet deleniti quo animi. Saepe velit in quas animi perferendis cumque eum quaerat aut!
      </p>
    </div>
    <div class="t-tip">
      <h3 class="t-head rounded-3">This is a tooltip<button class="close-btn" data-target="tip-4"><svg
            xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="currentColor"
            class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
          </svg></button></h3>
      <p id="tip-4" class="t-tip-des rounded-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum adipisci itaque vel aperiam nam temporibus et.
        Eveniet deleniti quo animi. Saepe velit in quas animi perferendis cumque eum quaerat aut!
      </p>
    </div>
    <div class="t-tip">
      <h3 class="t-head rounded-3">This is a tooltip<button class="close-btn" data-target="tip-5"><svg
            xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="currentColor"
            class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
          </svg></button></h3>
      <p id="tip-5" class="t-tip-des rounded-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum adipisci itaque vel aperiam nam temporibus et.
        Eveniet deleniti quo animi. Saepe velit in quas animi perferendis cumque eum quaerat aut!
      </p>
    </div>
  </div>


  <div class="mt-4 mb-4">
    <h3 style="text-align: center;">Your&nbsp;<strong>Feedback</strong>&nbsp;is Important</h3>
  </div>


  <!-- feedback container -->
  <form action="" class="f_container">
            <div class="ratings_h">
                <h1>Are You satisfied with us?</h1>
            </div>
            <div class="ratings_star">
                <i class="fa-regular fa-star fa-beat-fade fa-lg" id="f1" onclick="rateStar(1)" value="1"></i>
                <i class="fa-regular fa-star fa-beat-fade fa-lg" id="f2" onclick="rateStar(2)" value="2"></i>
                <i class="fa-regular fa-star fa-beat-fade fa-lg" id="f3" onclick="rateStar(3)" value="3"></i>
                <i class="fa-regular fa-star fa-beat-fade fa-lg" id="f4" onclick="rateStar(4)" value="4"></i>
                <i class="fa-regular fa-star fa-beat-fade fa-lg" id="f5" onclick="rateStar(5)" value="5"></i>
            </div>
            <div class="r_reactor">
                <h6>Amazing &#128515;</h6>
            </div>
            <div class="reviews">
                <input type="email" name="email" id="email" placeholder="Enter Email...">
                <textarea name="" id="" cols="50" rows="4" placeholder="Share Your Journey..."></textarea>
            </div>
            <div class="ff_submit">
                <input type="submit" value="Submit" name="submit">
            </div>
        </form>
  <!-- feedback end -->

  <hr class="w-100 nav-rule opacity-100 mt-5 pt-0 mb-2">

  <div class="f-footer">
    <div class="inner-f">
      <div class="f-script">
        <h3>SHOEBAZAR</h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Neque ratione animi illum error,
        </p>
      </div>
      <div class="b1">
        <h3>Links</h3>
        <ul>
          <li><a href="#Home">Home</a></li>
          <li><a href="#About">About</a></li>
          <li><a href="#contact">contact </a></li>
          <li><a href="#feedback">Privacy and policy</a></li>
        </ul>
      </div>

      <div class="b1">
        <h3>Reach us</h3>
        <ul>
          <li><a href="#">Whatsapp(+917483713076)</a></li>
          <li><a href="#">Address:manglore,ganjimutt</a></li>
          <li><a href="#">Customer Service:75323723</a></li>
          <li><a href="#">Website:shoebazar.com</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-f">
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
          class="bi bi-youtube" viewBox="0 0 16 16">
          <path
            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
        </svg></a>
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
          class="bi bi-facebook" viewBox="0 0 16 16">
          <path
            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
        </svg></a>
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
          class="bi bi-linkedin" viewBox="0 0 16 16">
          <path
            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
        </svg></a>
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
          class="bi bi-github" viewBox="0 0 16 16">
          <path
            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
        </svg></a>
    </div>
    <h6 style="text-align: center; color: rgba(255, 255, 255, 0.856) !important;">Copyright-Wedson Ninel Pereira</h6>
  </div>
  </main>
  <!-- cart Container -->
  <div class="cart-container rounded-4">
        <div class="cart-h">
          <h1>ITEMS IN YOUR CART</h1> <button id="closeButton" class="cart-btn"><svg xmlns="http://www.w3.org/2000/svg"
              width="26" height="26" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
              <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
            </svg></button>
        </div>
        <hr class="c-line">
        <div class="cart_container_items">
            <table class="cart_items">
              <tr class="cart_header">
                <th>S.no</th>
                <th>Image</th>
                <th>Name of the product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Add/delete</th>
              </tr>

              <!-- this part should display when the cart button got clicked -->
              <tr class="cart_header">
                <td style="width:80px;">1</td>
                <td style="width:100px;"><img src="new_arr_img/anastasia-malysh-G_wA7CKDXFs-unsplash.jpg" alt="" width="60px" height="60px"></td>
                <td style="width:220px;">Name of the product</td>
                <td style="width:80px;">1200</td>
                <td style="width:130px;"><input type="number" name="qty" class="w-50"></td>
                <td style="width:130px;">
                <form action="" class="cart_AR">
                <button class="R_btn btn btn-danger">Remove</button>
                </form>
                </td>
            </tr>
            <!-- till here -->
            </table>
        </div>
<!-- cart Container End -->


  <script type="text/javascript" src="sli.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
  <script>
    // Get all the close buttons
    const closeButtons = document.querySelectorAll('.close-btn');

    // Add event listener to each button
    closeButtons.forEach(button => {
      button.addEventListener('click', function () {
        const targetId = this.dataset.target;
        const targetElement = document.getElementById(targetId);

        // Toggle the visibility of the target element
        targetElement.style.display = (targetElement.style.display === 'none' || targetElement.style.display === '') ? 'block' : 'none';
      });
    });

    // Get references to the cart button, close button, and cart container
    const cartButton = document.getElementById('cartButton');
const closeButton = document.getElementById('closeButton');
const cartContainer = document.querySelector('.cart-container');
const body = document.getElementById('body_blur');

// Function to make body unclickable
function makeBodyUnclickable() {
  body.style.pointerEvents = 'none';
}

// Function to make body clickable
function makeBodyClickable() {
  body.style.pointerEvents = 'auto';
}

// Add event listener for the cart button click
cartButton.addEventListener('click', function () {
  cartContainer.style.display = 'block'; // Show the cart container
  body.style.opacity="20%";
  makeBodyUnclickable(); // Make body unclickable
});

// Add event listener for the close button click
closeButton.addEventListener('click', function () {
  cartContainer.style.display = 'none'; // Hide the cart container
  body.style.opacity="100%";
  makeBodyClickable(); // Make body clickable
});
    
// for rating
    const ratingInput = document.getElementById('rating');
    const ratingDisplay = document.getElementById('rating-display');

    ratingInput.addEventListener('input', function () {
      ratingDisplay.textContent = ratingInput.value;
    });
  </script>

  <!-- for ratings -->
  <script>
    function rateStar(starNumber) {
        for (let i = 1; i <= 5; i++) {
            const star = document.getElementById('f' + i);

            if (i <= starNumber) {
                star.classList.remove('fa-regular');
                star.classList.add('fa-solid');
            } else {
                star.classList.remove('fa-solid');
                star.classList.add('fa-regular');
            }
        }
    }      
</script>


</body>

</html>