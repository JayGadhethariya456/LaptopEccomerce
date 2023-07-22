<?php
session_start();
if (!isset($_SESSION['Reg_id'])) {
  header("Location: login.php");
  die();
}
?>
<?php
include_once 'db.php'; ?>

<!DOCTYPE html>

<head>
  <!-- Navbar section -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="cat.css">
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <img src="unicorn.png" width="100" height="60" alt="" />
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:10px;">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="Category.php" class="nav-link px-2 link-dark">Category</a></li>
          <li><a href="Product.php" class="nav-link px-2 link-dark">Product</a></li>
          <li><a href="Contact Page.php" class="nav-link px-2 link-dark">ContactUS</a></li>

        </ul>

        <div class="logcart">
          <button type="button" class="btn btn-primary" style="font-size: rem; 
        background-clip: text; background-image: -webkit-linear-gradient(top, rgb(44, 33, 33), rgb(37, 204, 226));">
            <span class="bi bi-cart"></span></button>

        </div>
        <form class="d-flex"> <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="text">Search</button>
        </form>
      </div>
    </div>
  </nav>
</head>

<body>
  <div class="filter">
    <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter"
      aria-expanded="true" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
  </div>
  <div id="mobile-filter">
    <p class="pl-sm-0 pl-2"> Home | <b>All Breads</b></p>
    <div class="border-bottom pb-2 ml-2">
      <h4 id="burgundy">Filters</h4>
    </div>

    <div class="py-2 border-bottom ml-3">
      <h6 class="font-weight-bold">Laptop Tyoe</h6>
      <div id="orange"><span class="fa fa-minus"></span></div>
      <form>
        <div class="form-group">
          <input type="checkbox" id="artisan">
          <label for="artisan">ChromeBook</label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="breakfast">
          <label for="breakfast">Convertible 2 in 1</label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="healthy">
          <label for="healthy">Notebook</label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="healthy">
          <label for="healthy">Ultrabook</label>
        </div>
      </form>
    </div>

    <div class="py-2 ml-3">
      <h6 class="font-weight-bold">Top Offers</h6>
      <div id="orange"><span class="fa fa-minus"></span></div>
      <form>
        <div class="form-group">
          <input type="checkbox" id="25off">
          <label for="25">5% off</label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="5off">
          <label for="5off" id="off">25% off</label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="5off">
          <label for="5off" id="off">45% off</label>
        </div>
      </form>
    </div>

    <div class="py-2 ml-3">
      <h6 class="font-weight-bold">Ram Size</h6>
      <div id="orange"><span class="fa fa-minus"></span></div>
      <form>
        <div class="form-group">
          <input type="checkbox" id="25off">
          <label for="25">4GB</label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="5off">
          <label for="5off" id="off">8GB</label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="5off">
          <label for="5off" id="off">16GB</label>
        </div>
      </form>
    </div>

  </div>
  <!-- Sidebar filter section -->

  <section id="sidebar">
    <p> Home | <b>All Laptops</b></p>
    <div class="border-bottom pb-2 ml-2">
      <h4 id="burgundy">Filters</h4>
    </div>
    <div class="py-2 border-bottom ml-3">
      <h6 class="font-weight-bold">Laptop Tyoe</h6>
      <div id="orange"><span class="fa fa-minus"></span></div>
      <form>
        <div class="form-group">
          <input type="checkbox" id="artisan">
          <label for="artisan">ChromeBook</label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="breakfast">
          <label for="breakfast">Convertible 2 in 1</label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="healthy">
          <label for="healthy">Notebook</label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="healthy">
          <label for="healthy">Ultrabook</label>
        </div>
      </form>
    </div>

    <div class="py-2 ml-3">
      <h6 class="font-weight-bold">Top Offers</h6>
      <div id="orange"><span class="fa fa-minus"></span></div>
      <form>
        <div class="form-group">
          <input type="checkbox" id="25off">
          <label for="25">5% off</label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="5off">
          <label for="5off" id="off">25% off</label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="5off">
          <label for="5off" id="off">45% off</label>
        </div>
      </form>
    </div>

    <div class="py-2 ml-3">
      <h6 class="font-weight-bold">Ram Size</h6>
      <div id="orange"><span class="fa fa-minus"></span></div>
      <form>
        <div class="form-group">
          <input type="checkbox" id="25off">
          <label for="25">4GB</label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="5off">
          <label for="5off" id="off">8GB</label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="5off">
          <label for="5off" id="off">16GB</label>
        </div>
      </form>
    </div>
  </section>
  <!-- products section -->
  <section id="products">
    <div class="container">
      <div class="d-flex flex-row">
        <div class="text-muted m-2" id="res">Showing 44 results</div>
        <div class="ml-auto mr-lg-4">
          <div id="sorting" class="border rounded p-1 m-1">
            <span class="text-muted">Sort by</span>
            <select name="sort" id="sort">
              <option value="popularity"><b>Popularity</b></option>
              <option value="prcie"><b>Price</b></option>
              <option value="rating"><b>Rating</b></option>
            </select>
          </div>
        </div>
      </div>
      <?php
      $result = mysqli_query($conn, "SELECT * FROM cattable");
      ?>

      <div class="row" style="display:flex; flex-wrap:wrap;">
        <?php while ($row = mysqli_fetch_assoc($result))
        : ?>
          <div class="col-lg-4">
            <div class="card" style="width:auto !important; height:auto !important;">
              <img src="img/<?php echo $row['Cat_image']; ?>" style="height: 250px;">
              <div class="card-body">
                <h5><b>
                    <?php echo $row["Cat_Brand"]; ?>
                  </b> </h5>

                <a href="Product.php"> <button class="btn w-100 rounded my-2">Click To Proceed</button></a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
</body>

</html>