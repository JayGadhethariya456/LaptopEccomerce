<!DOCTYPE html>
<?php
include_once 'db.php'; ?>

<head>
  <link rel="stylesheet" href="Prod.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>


  <div class=" align-items-center justify-content-center">
    <img src="unicorn.png" width="100" height="60" alt="" />
    <header
      class="d-flex navbar-conts flex-wrap align-items-center justify-content-center justify-content-md-between py-1 mb-4 border-bottom rounded-pill  ">
      <a href="" class="navbarlogo d-flex align-items-center  mb-2 mb-md-0 text-dark text-decoration-none w-auto">
        <img src="unicorn.png" class="rounded-circle" width="90" height="60" alt="" />
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
        <li><a href="Home.php" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="Category.php" class="nav-link px-2 link-dark">Category</a></li>
        <li><a href="Product.php" class="nav-link px-2 link-dark">Product</a></li>
        <li><a href="Contact.php" class="nav-link px-2 link-dark">ContactUS</a></li>
      </ul>

      <div class="col-md-5 text-end">
        <button type="button" class="btn btn-primary"
          style="font-size: rem; background-clip: text; background-image: -webkit-linear-gradient(top, rgb(44, 33, 33), rgb(37, 204, 226)); margin: 5px;">
          <span class="bi bi-cart"></span>
        </button>
        <button type="button" class="btn btn-primary rounded-pill" style="margin: 5px;">Login</button>
        <button type="button" class="btn btn-outline-primary rounded-pill me-2" style="margin: 5px;">My Account</button>
      </div>
  </div>
  </header>
</head>

<body>
  <div class="container">
    <div class="bg-white rounded d-flex align-items-center justify-content-between" id="header">
      <button class="btn btn-hide text-uppercase" type="button" data-toggle="collapse" data-target="#filterbar"
        aria-expanded="false" aria-controls="filterbar" id="filter-btn" onclick="changeBtnTxt()">
        <span class="fas fa-angle-left" id="filter-angle"></span>
        <span id="btn-txt">Hide filters</span>
      </button>
      <nav class="navbar navbar-expand-lg navbar-light pl-lg-0 pl-auto">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="mynav"
          aria-expanded="false" aria-label="Toggle navigation" onclick="chnageIcon()" id="icon">
          <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="mynav">
          <ul class="navbar-nav d-lg-flex align-items-lg-center">
            <li class="nav-item active"> <select name="sort" id="sort">
                <option value="" hidden selected>Sort by</option>
                <option value="price">Price</option>
                <option value="popularity">Popularity</option>
                <option value="rating">Rating</option>
              </select> </li>
            <li class="nav-item d-inline-flex align-items-center justify-content-between mb-lg-0 mb-3">
              <div class="d-inline-flex align-items-center mx-lg-2" id="select2">
                <div class="pl-2">Products:</div> <select name="pro" id="pro">
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                </select>
              </div>
              <div class="font-weight-bold mx-2 result">18 from 200</div>
            </li>
            <li class="nav-item d-lg-none d-inline-flex"> </li>
          </ul>
        </div>
      </nav>
      <div class="ml-auto mt-3 mr-2">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true"
                  class="font-weight-bold">&lt;</span> <span class="sr-only">Previous</span> </a> </li>
            <li class="page-item active"><a class="page-link" href="#" style="color: black;">1</a></li>
            <li class="page-item"><a class="page-link" href="#">..</a></li>
            <li class="page-item"><a class="page-link" href="#">24</a></li>
            <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true"
                  class="font-weight-bold">&gt;</span> <span class="sr-only">Next</span> </a> </li>
          </ul>
        </nav>
      </div>
    </div>
    <div id="content" class="my-5">
      <div id="filterbar" class="collapse">
        <div class="box border-bottom">
          <div class="form-group text-center">
            <div class="btn-group" data-toggle="buttons"> <label class="btn btn-success form-check-label"> <input
                  class="form-check-input" type="radio"> Reset </label> <label
                class="btn btn-success form-check-label active"> <input class="form-check-input" type="radio" checked>
                Apply </label> </div>
          </div>
          <div> <label class="tick">New <input type="checkbox" checked="checked"> <span class="check"></span> </label>
          </div>
          <div> <label class="tick">Sale <input type="checkbox"> <span class="check"></span> </label> </div>
        </div>
        <div class="box border-bottom">
          <div class="box-label text-uppercase d-flex align-items-center">Brands<button class="btn ml-auto"
              type="button" data-toggle="collapse" data-target="#inner-box" aria-expanded="false"
              aria-controls="inner-box" id="out" onclick="outerFilter()"> <span class="fas fa-plus"></span> </button>
          </div>
          <div id="inner-box" class="collapse mt-2 mr-1">
            <div class="my-1"> <label class="tick">HP <input type="checkbox" checked="checked"> <span
                  class="check"></span> </label> </div>
            <div class="my-1"> <label class="tick">LENOVO<input type="checkbox"> <span class="check"></span> </label>
            </div>
            <div class="my-1"> <label class="tick">APPLE<input type="checkbox"> <span class="check"></span> </label>
            </div>
            <div class="my-1"> <label class="tick">ACER <input type="checkbox"> <span class="check"></span> </label>
            </div>
            <div class="my-1"> <label class="tick">DELL<input type="checkbox"> <span class="check"></span> </label>
            </div>
            <div class="my-1"> <label class="tick">ASUS<input type="checkbox" checked> <span class="check"></span>
              </label> </div>
            <div class="my-1"> <label class="tick">HONOR <input type="checkbox"> <span class="check"></span>
              </label> </div>
          </div>
        </div>
        <div class="box border-bottom">
          <div class="box-label text-uppercase d-flex align-items-center">CPU TYPE<button class="btn ml-auto"
              type="button" data-toggle="collapse" data-target="#inner-box2" aria-expanded="false"
              aria-controls="inner-box2"><span class="fas fa-plus"></span></button> </div>
          <div id="inner-box2" class="collapse mt-2 mr-1">
            <div class="my-1"> <label class="tick">INTEL CORE I3<input type="checkbox" checked="checked"> <span
                  class="check"></span> </label> </div>
            <div class="my-1"> <label class="tick">INTEL CORE I5 <input type="checkbox"> <span class="check"></span>
              </label>
            </div>
            <div class="my-1"> <label class="tick">INTEL CORE I7 <input type="checkbox" checked> <span
                  class="check"></span>
              </label> </div>
            <div class="my-1"> <label class="tick">AMD RYZEN 5<input type="checkbox"> <span class="check"></span>
              </label>
            </div>
            <div class="my-1"> <label class="tick">AMD RYZEN 9<input type="checkbox"> <span class="check"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="box border-bottom">
          <div class="box-label text-uppercase d-flex align-items-center">price <button class="btn ml-auto"
              type="button" data-toggle="collapse" data-target="#price" aria-expanded="false"
              aria-controls="price"><span class="fas fa-plus"></span></button> </div>
          <div class="collapse" id="price">
            <div class="middle">
              <div class="multi-range-slider"> <input type="range" id="input-left" min="0" max="100" value="10"> <input
                  type="range" id="input-right" min="0" max="100" value="50">
                <div class="slider">
                  <div class="track"></div>
                  <div class="range"></div>
                  <div class="thumb left"></div>
                  <div class="thumb right"></div>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-2">
              <div> <span id="amount-left" class="font-weight-bold"></span> uah </div>
              <div> <span id="amount-right" class="font-weight-bold"></span> uah </div>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="box-label text-uppercase d-flex align-items-center">Ram size <button class="btn ml-auto"
              type="button" data-toggle="collapse" data-target="#size" aria-expanded="false" aria-controls="size"><span
                class="fas fa-plus"></span></button> </div>
          <div id="size" class="collapse">
            <div class="btn-group d-flex align-items-center flex-wrap" data-toggle="buttons"> <label
                class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox"> 4 </label>
              <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked>
                8</label> <label class="btn btn-success form-check-label"> <input class="form-check-input"
                  type="checkbox" checked> 16 </label> <label class="btn btn-success form-check-label"> <input
                  class="form-check-input" type="checkbox" checked> 32 </label> <label
                class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked>64
              </label> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox"
                  checked> 132 </label>
            </div>
          </div>
        </div>
      </div>

      <?php
      $result = mysqli_query($conn, "SELECT * FROM prodtable");
      ?>


      <div id="products">
        <div class="row" style="display:flex; flex-wrap:wrap;">
          <?php while ($row = mysqli_fetch_assoc($result))
          : ?>
            <div class="col-lg-4">
              <a href="Product2.php?proid=<?php echo $row["Prod_id"]; ?>">
                <div class="card d-flex flex-column align-items-center m-2">
                  <div class="product-name">
                    <?php echo $row["Prod_name"]; ?>
                  </div>
                  <div class="card-img"> <img src="img/<?php echo $row['Prod_image']; ?>" alt=" " height="50" width="50">
                  </div>

                  <div class="card-body pt-5">
                    <div class="text-muted text-center mt-auto">Available Colors</div>
                    <div class="d-flex align-items-center justify-content-center colors my-2">
                      <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip" data-placement="right"
                        title="choose color">
                        <label class="btn btn-red form-check-label">
                          <input class="form-check-input" type="radio" autocomplete="off"> </label>
                        <label class="btn btn-blue form-check-label active">
                          <input class="form-check-input" type="radio" autocomplete="off"> </label>
                        <label class="btn btn-green form-check-label">
                          <input class="form-check-input" type="radio" autocomplete="off"> </label>
                        <label class="btn btn-orange form-check-label">
                          <input class="form-check-input" type="radio" autocomplete="off"> </label>
                        <label class="btn btn-pink form-check-label">
                          <input class="form-check-input" type="radio" autocomplete="off"> </label>
                      </div>
                    </div>
                    <div class="d-flex align-items-center price">
                      <div class="del mr-2"><span class="text-dark">
                          <?php echo $row["Prod_price"]; ?>
                        </span></div>
                      <div class="font-weight-bold">45000</div>
                    </div>

                  </div>
                </div>

              </a>
            </div>

          <?php endwhile; ?>
        </div>
      </div>
      <!-- els -->

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
</body>
<script>
  // For Filters
  document.addEventListener("DOMContentLoaded", function () {
    var filterBtn = document.getElementById('filter-btn');
    var btnTxt = document.getElementById('btn-txt');
    var filterAngle = document.getElementById('filter-angle');

    $('#filterbar').collapse(false);
    var count = 0, count2 = 0;
    function changeBtnTxt() {
      $('#filterbar').collapse(true);
      count++;
      if (count % 2 != 0) {
        filterAngle.classList.add("fa-angle-right");
        btnTxt.innerText = "show filters"
        filterBtn.style.backgroundColor = "#36a31b";
      }
      else {
        filterAngle.classList.remove("fa-angle-right")
        btnTxt.innerText = "hide filters"
        filterBtn.style.backgroundColor = "#ff935d";
      }

    }

    // For Applying Filters
    $('#inner-box').collapse(false);
    $('#inner-box2').collapse(false);

    // For changing NavBar-Toggler-Icon
    var icon = document.getElementById('icon');


    function chnageIcon() {
      count2++;
      if (count2 % 2 != 0) {
        icon.innerText = "";
        icon.innerHTML = '<span class="far fa-times-circle" style="width:100%"></span>';
        icon.style.paddingTop = "5px";
        icon.style.paddingBottom = "5px";
        icon.style.fontSize = "1.8rem";


      }
      else {
        icon.innerText = "";
        icon.innerHTML = '<span class="navbar-toggler-icon"></span>';
        icon.style.paddingTop = "5px";
        icon.style.paddingBottom = "5px";
        icon.style.fontSize = "1.2rem";
      }
    }




    // Showing tooltip for AVAILABLE COLORS
    $(function () {
      $('[data-tooltip="tooltip"]').tooltip()
    })

    // For Range Sliders
    var inputLeft = document.getElementById("input-left");
    var inputRight = document.getElementById("input-right");

    var thumbLeft = document.querySelector(".slider > .thumb.left");
    var thumbRight = document.querySelector(".slider > .thumb.right");
    var range = document.querySelector(".slider > .range");

    var amountLeft = document.getElementById('amount-left')
    var amountRight = document.getElementById('amount-right')

    function setLeftValue() {
      var _this = inputLeft,
        min = parseInt(_this.min),
        max = parseInt(_this.max);

      _this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);

      var percent = ((_this.value - min) / (max - min)) * 100;

      thumbLeft.style.left = percent + "%";
      range.style.left = percent + "%";
      amountLeft.innerText = parseInt(percent * 100);
    }
    setLeftValue();

    function setRightValue() {
      var _this = inputRight,
        min = parseInt(_this.min),
        max = parseInt(_this.max);

      _this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);

      var percent = ((_this.value - min) / (max - min)) * 100;

      amountRight.innerText = parseInt(percent * 100);
      thumbRight.style.right = (100 - percent) + "%";
      range.style.right = (100 - percent) + "%";
    }
    setRightValue();

    inputLeft.addEventListener("input", setLeftValue);
    inputRight.addEventListener("input", setRightValue);

    inputLeft.addEventListener("mouseover", function () {
      thumbLeft.classList.add("hover");
    });
    inputLeft.addEventListener("mouseout", function () {
      thumbLeft.classList.remove("hover");
    });
    inputLeft.addEventListener("mousedown", function () {
      thumbLeft.classList.add("active");
    });
    inputLeft.addEventListener("mouseup", function () {
      thumbLeft.classList.remove("active");
    });

    inputRight.addEventListener("mouseover", function () {
      thumbRight.classList.add("hover");
    });
    inputRight.addEventListener("mouseout", function () {
      thumbRight.classList.remove("hover");
    });
    inputRight.addEventListener("mousedown", function () {
      thumbRight.classList.add("active");
    });
    inputRight.addEventListener("mouseup", function () {
      thumbRight.classList.remove("active");
    });
  });
</script>

</html>