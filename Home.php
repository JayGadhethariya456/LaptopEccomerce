<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['Reg_id'])) {
  header("Location: login.php");
  die();
}
?>
<?php
if (count($_POST) > 0) {
  $con = mysqli_connect('localhost', 'root', '', 'wtproj') or die('Unable To connect');
  $result = mysqli_query($con, "SELECT * FROM registtable WHERE Reg_user='" . $_POST["Reg_user"] . "' and Reg_pass = '" . $_POST["Reg_pass"] . "'");
  $row = mysqli_fetch_array($result);
  if (is_array($row)) {
    $_SESSION["Reg_id"] = $row['Reg_id'];
    $_SESSION["Reg_user"] = $row['Reg_user'];
  }
} ?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <title>Home Page</title>

  <div class="d-flex  align-items-center justify-content-center">
    <img src="unicorn.png" width="100" height="60" alt="" />
    <?php
    if ($_SESSION["Reg_email"]) {
      ?>
      <?php echo $_SESSION["Reg_email"]; ?> <a href="validloginout.php" tite="Logout">Logout
        <?php
    }
    ?>
      <header
        class="d-flex navbar-conts flex-wrap align-items-center justify-content-center justify-content-md-between py-1 mb-4 border-bottom rounded-pill  ">
        <a href="~/HOME"
          class="navbarlogo d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none w-auto">
          <img src="unicorn.png" class="rounded-circle" width="120" height="60" alt="" />
        </a>
        <div class="topnav">
          <div class="search-container">
            <form action="/action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="Category.php" class="nav-link px-2 link-dark">Category</a></li>
          <li><a href="Product.php" class="nav-link px-2 link-dark">Product</a></li>
          <li><a href="Contact Page.php" class="nav-link px-2 link-dark">ContactUS</a></li>
        </ul>

        <div class="col-md-5 text-end">
          <button type="button" class="btn btn-outline-primary rounded-pill me-2">My Account</button>

          <button type="button" class="btn btn-primary"
            style="font-size: rem; 
            background-clip: text; background-image: -webkit-linear-gradient(top, rgb(44, 33, 33), rgb(37, 204, 226));">
            <span class="bi bi-cart"></span></button>
        </div>

        <style>
          .topnav a:hover {
            background-color: #ddd;
            color: black;
          }

          .topnav a.active {
            background-color: #2196F3;
            color: white;
          }

          .topnav .search-container {
            float: right;
          }

          .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
          }

          .topnav .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            margin-left: 20px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
          }

          .topnav .search-container button:hover {
            background: #ccc;
          }

          @media screen and (max-width: 600px) {
            .topnav .search-container {
              float: none;
            }

            .topnav a,
            .topnav input[type=text],
            .topnav .search-container button {
              float: none;
              display: block;
              text-align: left;
              width: 100%;
              margin: 0;
              padding: 14px;
            }

            .topnav input[type=text] {
              border: 1px solid #ccc;
            }
          }

          * {
            margin: 0;
            padding: 0
          }

          .navbar-conts {

            width: 60px;
            height: 60px;
            background-color: transparent;
            content-visibility: hidden;
          }

          .imgfluid {
            position: absolute;
            width: 50px;
            height: 50px;
            top: 1%;
          }

          header {
            position: fixed;
            top: 0;
          }

          ul li a {
            font-family: Georgia, 'Times New Roman', Times, serif;
          }

          ul li a:hover {
            border-bottom: #000000 2px solid;
            box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
          }

          .navbar-conts:hover {
            padding-left: 40PX;
            padding-right: 40PX;
            animation-name: navbar-conts-hover;
            animation-duration: 0.10s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: 1;
            animation-fill-mode: both;
            content-visibility: visible;
          }

          @keyframes navbar-conts-hover {
            0% {
              width: 25%;
              background: #f0f0f0;
              box-shadow: 0 0 0 #cccccc, 0 0 0 #ffffff, 10px 10px 10px #cccccc inset, -10px -10px 10px #ffffff inset
            }

            25% {
              width: 50%;
              background: #f8f8f8;
              box-shadow: 10px 10px 10px #cccccc, 10px 10px 10px #ffffff, 0 0 0 #cccccc inset, 0 0 0 #ffffff inset
            }

            50% {
              width: 75%;
              background: #f8f8f8;
              box-shadow: 10px 10px 10px #cccccc, 10px 10px 10px #ffffff, 0 0 0 #cccccc inset, 0 0 0 #ffffff inset
            }

            100% {

              width: 100%;
              background: #fafafa;
              box-shadow: 40px 40px 40px #cccccc, 0 0 0 #ffffff, 0 0 0 #cccccc inset, 2px 2px 2px #ffffff inset
            }

          }

          body {
            margin-top: 30px;
          }

          * {
            box-sizing: border-box;
          }

          body {
            font-family: Verdana, sans-serif;
          }

          .mySlides {
            display: none;
          }

          img {
            vertical-align: middle;
          }

          /* Slideshow container */
          .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
          }

          /* Caption text */
          .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
          }

          /* Number text (1/3 etc) */
          .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }

          /* The dots/bullets/indicators */
          .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }

          .active {
            background-color: #717171;
          }

          /* Fading animation */
          .fade {
            animation-name: fade;
            animation-duration: 1.5s;
          }

          @keyframes fade {
            from {
              opacity: .4
            }

            to {
              opacity: 1
            }
          }

          /* On smaller screens, decrease text size */
          @media only screen and (max-width: 300px) {
            .text {
              font-size: 11px
            }
          }
        </style>
      </header>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>

      <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
  </div>
</head>

<body>
  <style>
    body {
      background-image: url("paper.gif");
      background-color: #f0e8e8;
    }

    button {
      color: #f32179;
      padding: 10px;
      border-color: #f32179;
      font-size: 15px;
      transition: 0.2s;
      background-color: transparent;
      border-radius: 3em;
      cursor: pointer;
    }


    button:hover {
      color: #fff;
      background: #35c1f8;
    }
  </style>
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="img/86835565.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="lap2.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="img/Top-laptop-brands-in-India.webp" style="width:100%">
    </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <section style="background-color: #eee;">
    <img src="im2.png" height="100" width="150" style="margin-top: 10px;">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
          <div class="card">
            <div class="d-flex justify-content-between p-3">
              <p class="lead mb-0">Today's Combo Offer</p>

            </div>
            <img src="img/hpnotebook.webp" class="card-img-top" alt="Laptop" />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                <p class="small text-danger"><s>Rs 29999</s></p>
              </div>

              <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">HP Notebook</h5>
                <h5 class="text-dark mb-0">Rs 28999</h5>
              </div>

              <div class="d-flex justify-content-between mb-2">
                <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
                <div class="ms-auto text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <button>
                Add to Buy
              </button>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
          <div class="card">
            <div class="d-flex justify-content-between p-3">
              <p class="lead mb-0">Today's Combo Offer</p>

            </div>
            <img src="img/Hpenvy.webp" class="card-img-top" alt="Laptop" />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                <p class="small text-danger"><s>Rs 41199</s></p>
              </div>

              <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">HP Envy</h5>
                <h5 class="text-dark mb-0">Rs 31099</h5>
              </div>

              <div class="d-flex justify-content-between mb-2">
                <p class="text-muted mb-0">Available: <span class="fw-bold">7</span></p>
                <div class="ms-auto text-warning">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
              <button>
                Add to Buy
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
          <div class="card">
            <div class="d-flex justify-content-between p-3">
              <p class="lead mb-0">Today's Combo Offer</p>

            </div>
            <img src="img/Gminlp.webp" class="card-img-top" alt="Gaming Laptop" />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                <p class="small text-danger"><s>Rs 61399</s></p>
              </div>

              <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">Toshiba B77</h5>
                <h5 class="text-dark mb-0">Rs 51299</h5>
              </div>

              <div class="d-flex justify-content-between mb-2">
                <p class="text-muted mb-0">Available: <span class="fw-bold">5</span></p>
                <div class="ms-auto text-warning">
                  <i class="fa fa-star checked"></i>
                  <i class="fas fa-star checked"></i>
                  <i class="fas fa-star checked"></i>
                  <i class="fas fa-star checked"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
              </div>
              <button>
                Add to Buy
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="background-color: #eee;">

    <div class="container py-5">
      <div class="row">
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
          <div class="card">
            <div class="d-flex justify-content-between p-3">
              <p class="lead mb-0">Today's Combo Offer</p>

            </div>
            <img src="lap1.jpg" class="card-img-top" alt="Laptop" />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                <p class="small text-danger"><s>Rs 51099</s></p>
              </div>

              <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">Surface Laptop Go 2</h5>
                <h5 class="text-dark mb-0">Rs 45979</h5>
              </div>

              <div class="d-flex justify-content-between mb-2">
                <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
                <div class="ms-auto text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <button>
                Add to Buy
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
          <div class="card">
            <div class="d-flex justify-content-between p-3">
              <p class="lead mb-0">Today's Combo Offer</p>

            </div>
            <img src="lap2.jpg" class="card-img-top" height="224px" alt="Laptop" />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                <p class="small text-danger"><s>Rs 41199</s></p>
              </div>

              <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">Asus zdlx</h5>
                <h5 class="text-dark mb-0">Rs 32099</h5>
              </div>

              <div class="d-flex justify-content-between mb-2">
                <p class="text-muted mb-0">Available: <span class="fw-bold">7</span></p>
                <div class="ms-auto text-warning">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
              <button>
                Add to Buy
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
          <div class="card">
            <div class="d-flex justify-content-between p-3">
              <p class="lead mb-0">Today's Combo Offer</p>

            </div>
            <img src="lap3.jpg" class="card-img-top" height="200px" alt="Gaming Laptop" />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                <p class="small text-danger"><s>Rs 61399</s></p>
              </div>

              <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">Asus ZenBook 17 </h5>
                <h5 class="text-dark mb-0">Rs 51589</h5>
              </div>

              <div class="d-flex justify-content-between mb-2">
                <p class="text-muted mb-0">Available: <span class="fw-bold">5</span></p>
                <div class="ms-auto text-warning">
                  <i class="fa fa-star checked"></i>
                  <i class="fas fa-star checked"></i>
                  <i class="fas fa-star checked"></i>
                  <i class="fas fa-star checked"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
              </div>
              <button>
                Add to Buy
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>
</body>
<footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i
          class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i
          class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i
          class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i
          class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i
          class="fab fa-linkedin-in"></i></a>
      <!-- Github -->
      <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i
          class="fab fa-github"></i></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(13, 19, 20, 0.815);">
    © 2023 Copyright:
    <a class="text-white">UnicornStar.com</a>
  </div>
  <!-- Copyright -->
</footer>

</html>