<!doctype html>
<html>
<?php
include_once 'db.php'; ?>
<?php $id = $_GET['proid']; ?>
<?php
$sqlss = "SELECT * FROM prodtable WHERE Prod_id='" . $_GET['proid'] . "' ";
$result = mysqli_query($conn, $sqlss) or die(mysqli_error($conn)); ?>


<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Prod Description</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
</head>
<a href="Product.php"><button type="button" class="btn btn-outline-primary rounded-pill me-2" style="margin: 5px;">Go
        Back To Product
        List</button></a>

<body oncontextmenu='return false' class='snippet-body'>
    <link rel="stylesheet" href="Prod2.css">
    <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
    <div class="container-fluid mt-2 mb-3">
        <?php while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) { ?>

            <div class="row no-gutters">
                <div class="col-md-5 pr-2">
                    <div class="card">
                        <div class="demo">
                            <ul id="lightSlider">
                                <li data-thumb="img/HP 15s.jpg"> <img src="img/<?php echo $row['Prod_image']; ?>" />
                                </li>
                                <li data-thumb="img/HP 15s2.jpg"> <img src="img/HP 15s2.jpg" /> </li>
                                <li data-thumb="img/HP 15s3.jpg"> <img src="img/HP 15s3.jpg" /> </li>
                                <li data-thumb="img/HP 15s4.jpg"> <img src="img/HP 15s4.jpg" /> </li>
                                <li data-thumb="img/HP 15s5.jpg"> <img src="img/HP 15s5.jpg" /> </li>

                                <li data-thumb="img/HP 15s.jpg"> <img src="img/HP 15s.jpg" /> </li>
                                <li data-thumb="img/HP 15s2.jpg"> <img src="img/HP 15s2.jpg" /> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <h6>Reviews</h6>
                        <div class="d-flex flex-row">
                            <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span
                                class="ml-1 font-weight-bold">4.6</span>
                        </div>
                        <hr>
                        <div class="badges"> <span class="badge bg-warning ">All (230)</span> <span
                                class="badge bg-warning "> <i class="fa fa-image"></i> 23 </span> <span
                                class="badge bg-warning "> <i class="fa fa-comments-o"></i> 23 </span> <span
                                class="badge bg-warning"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="ml-1">2,123</span>
                            </span> </div>
                        <hr>
                        <div class="comment-section">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/o5uMfKo.jpg"
                                        class="rounded-circle profile-image">
                                    <div class="d-flex flex-column ml-1 comment-profile">
                                        <div class="comment-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        </div> <span class="username">Lori Benneth</span>
                                    </div>
                                </div>
                                <div class="date"> <span class="text-muted">2 May</span> </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/tmdHXOY.jpg"
                                        class="rounded-circle profile-image">
                                    <div class="d-flex flex-column ml-1 comment-profile">
                                        <div class="comment-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        </div> <span class="username">Timona Simaung</span>
                                    </div>
                                </div>
                                <div class="date"> <span class="text-muted">12 May</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="d-flex flex-row align-items-center">
                            <div class="p-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="ml-1">5.0</span>
                        </div>
                        <div class="about"> <span class="font-weight-bold">
                                <?php echo $row["Prod_name"]; ?>
                            </span>
                            <h4 class="font-weight-bold">
                                <?php echo $row["Prod_price"]; ?>
                            </h4>
                        </div>
                        <div class="buttons"> <button class="btn btn-outline-warning btn-long cart">Add to Cart</button>
                            <button class="btn btn-warning btn-long buy">Buy it Now</button> <button
                                class="btn btn-light wishlist"> <i class="fa fa-heart"></i> </button>
                        </div>
                        <hr>
                        <div class="product-description">
                            <div><span class="font-weight-bold">Color:</span><span> blue</span></div>
                            <div class="my-color"> <label class="radio"> <input type="radio" name="gender" value="MALE"
                                        checked> <span class="red"></span> </label> <label class="radio"> <input
                                        type="radio" name="gender" value="FEMALE"> <span class="blue"></span> </label>
                                <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span
                                        class="green"></span> </label> <label class="radio"> <input type="radio"
                                        name="gender" value="FEMALE"> <span class="orange"></span> </label>
                            </div>
                            <div class="d-flex flex-row align-items-center"> <i class="fa fa-calendar-check-o"></i> <span
                                    class="ml-1">Delivery from Mumbai, 6-7 days</span> </div>
                            <div class="mt-2"> <span class="font-weight-bold">Description</span>
                                <p>
                                    <?php echo $row["Prod_Desc"]; ?>
                                </p>

                                <div class="bullets">
                                    <div class="d-flex align-items-center"> <span class="dot"></span> <span
                                            class="bullet-text">Screen Size 15.6 Inches</span> </div>
                                    <div class="d-flex align-items-center"> <span class="dot"></span> <span
                                            class="bullet-text">Hard Disk Size 512 GB</span> </div>
                                    <div class="d-flex align-items-center"> <span class="dot"></span> <span
                                            class="bullet-text">CPU Model Core i3</span> </div>
                                    <div class="d-flex align-items-center"> <span class="dot"></span> <span
                                            class="bullet-text">RAM Memory Installed Size 8 GB</span> </div>
                                    <div class="d-flex align-items-center"> <span class="dot"></span> <span
                                            class="bullet-text">Operating System Windows 11 Home</span> </div>
                                    <div class="d-flex align-items-center"> <span class="dot"></span> <span
                                            class="bullet-text">Graphics Card Description Integrated</span> </div>
                                </div>
                            </div>
                            <div class="mt-2"> <span class="font-weight-bold">Store</span> </div>
                            <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/N2fYgvD.png"
                                    class="rounded-circle store-image">
                                <div class="d-flex flex-column ml-1 comment-profile">
                                    <div class="comment-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span
                                        class="username">Rare Mall</span> <small class="followers">25K Followers</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2"> <span>Similar items:</span>
                        <div class="similar-products mt-2 d-flex flex-row">
                            <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img src="img/HP 15s.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Rs 65,000</h6>
                                </div>
                            </div>
                            <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img
                                    src="img/Acer Aspire 5.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Rs 30,000</h6>
                                </div>
                            </div>
                            <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img
                                    src="img/Lenovo IdeaPad Slim 3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Rs 45,000</h6>
                                </div>
                            </div>
                            <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img
                                    src="img/Apple MacBook Pro.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Rs 100,00,00</h6>
                                </div>
                            </div>
                            <div class="card border p-1" style="width: 9rem;"> <img src="img/Gaming Monitorr.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Rs 60000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        mysqli_free_result($result);
        ?>
    </div>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
    <script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
    <script>
        $('#lightSlider').lightSlider({
            gallery: true,
            item: 1,
            loop: true,
            slideMargin: 0,
            thumbItem: 6
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script type='text/javascript'
        src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src=''></script>
    <script type='text/Javascript'></script>
</body>

</html>