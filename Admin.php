<?php
session_start();
if (!isset($_SESSION['Reg_id'])) {
    header("Location: Admin login.php");
    die();
}
?>
<?php
if (count($_POST) > 0) {
    $con = mysqli_connect('localhost', 'root', '', 'wtproj') or die('Unable To connect');
    $result = mysqli_query($con, "SELECT * FROM registtable WHERE Reg_email='" . $_POST["Reg_email"] . "' and Reg_pass = '" . $_POST["Reg_pass"] . "'");
    $row = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["Reg_id"] = $row['Reg_id'];
        $_SESSION["Reg_user"] = $row['Reg_email'];
    }
} ?>
<!DOCTYPE html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="ADmin.css">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
    <link rel="mask-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg"
        color="#111">
    <link rel="canonical" href="https://codepen.io/T-P/pen/MyNjOO">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff">
    <header>
        <ul class="dropdown-content" id="user_dropdown">
            <?php
            if ($_SESSION["Reg_email"]) {
                ?>
                <li style="color:blue;">
                    <?php echo $_SESSION["Reg_email"]; ?>
                </li>
                <li><a href="AdminLogout.php">Logout</a></li>
                <?php
            }
            ?>

        </ul>

        <nav class="indigo" role="navigation">

            <div class="nav-wrapper">
                <a data-activates="slide-out" class="button-collapse show-on-" href="#!"><img
                        style="margin-top: 17px; margin-left: 5px;"
                        src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989873/smaller-main-logo_3_bm40iv.gif" /></a>

                <ul class="right hide-on-med-and-down">
                    <li>
                        <a class='right dropdown-button' href='' data-activates='user_dropdown'><i
                                class=' material-icons'>account_circle</i></a>
                    </li>
                </ul>

                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </nav>

        <nav>
            <div class="nav-wrapper indigo darken-2">
                <a style="margin-left: 20px;" class="breadcrumb" href="#!">Admin</a>
                <a class="breadcrumb" href="#!">Index</a>

                <div style="margin-right: 20px;" id="timestamp" class="right"></div>
            </div>
        </nav>
    </header>
</head>

<body>

    <ul id="slide-out" class="side-nav fixed z-depth-2">
        <li class="center no-padding">
            <div class="indigo darken-2 white-text" style="height: 180px;">
                <div class="row">
                    <img style="margin-top: 5%;" width="100" height="100"
                        src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463990208/photo_dkkrxc.png"
                        class="circle responsive-img" />

                    <p style="margin-top: -13%;">
                        Jay Gadhethariya
                    </p>
                </div>
            </div>
        </li>



        <ul class="collapsible" data-collapsible="accordion">
            <li id="dash_users">
                <div id="dash_users_header" class="collapsible-header waves-effect"><b>Company</b></div>
                <div id="dash_users_body" class="collapsible-body">
                    <ul>
                        <li id="users_seller">
                            <a class="waves-effect" style="text-decoration: none;" href="AddCompany.php">Company</a>
                        </li>

                        <li id="users_customer">
                            <a class="waves-effect" style="text-decoration: none;" href="AddCompany.php">Add
                                Company</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li id="dash_products">
                <div id="dash_products_header" class="collapsible-header waves-effect"><b>Products</b></div>
                <div id="dash_products_body" class="collapsible-body">
                    <ul>
                        <li id="products_product">
                            <a class="waves-effect" style="text-decoration: none;" href="AdminProduct.php">Products</a>
                            <a class="waves-effect" style="text-decoration: none;" href="AdminAddProduct.php">Add
                                Product</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li id="dash_categories">
                <div id="dash_categories_header" class="collapsible-header waves-effect"><b>Categories</b></div>
                <div id="dash_categories_body" class="collapsible-body">
                    <ul>
                        <li id="categories_category">
                            <a class="waves-effect" style="text-decoration: none;" href="AdminCategory.php">Category</a>
                        </li>

                        <li id="categories_sub_category">
                            <a class="waves-effect" style="text-decoration: none;" href="AdminAddCategory.php">Add
                                Category</a>
                        </li>
                    </ul>
                </div>
            </li>


        </ul>
    </ul>

    <main>
        <div class="row">

            <div class="col s6">
                <div style="padding: 35px; align:center" class="card">
                    <div class="row">
                        <div class="left card-title">
                            <b>Company Management</b>
                        </div>
                    </div>

                    <div class="row">
                        <a href="Admin Company.php">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">person</i>
                                <span class="indigo-text text-lighten-1">
                                    <h5>Company</h5>
                                </span>
                            </div>
                        </a>
                        <div class="col s1">&nbsp;</div>
                        <div class="col s1">&nbsp;</div>

                        <a href="AddCompany.php">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">people</i>
                                <span class="indigo-text text-lighten-1">
                                    <h5>ADD Company</h5>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col s6">
                <div style="padding: 35px; align:center" class="card">
                    <div class="row">
                        <div class="left card-title">
                            <b>Product Management</b>
                        </div>
                    </div>
                    <div class="row">
                        <a href="AdminProduct.php">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">store</i>
                                <span class="indigo-text text-lighten-1">
                                    <h5>Product</h5>
                                </span>
                            </div>
                        </a>

                        <div class="col s1">&nbsp;</div>
                        <div class="col s1">&nbsp;</div>

                        <a href="AdminAddProduct.php">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">assignment</i>
                                <span class="indigo-text text-lighten-1">
                                    <h5>Add Product</h5>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col s6">
                <div style="padding: 35px; align:center" class="card">
                    <div class="row">
                        <div class="left card-title">
                            <b>Category Management</b>
                        </div>
                    </div>
                    <div class="row">
                        <a href="AdminCategory.php">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                                <span class="indigo-text text-lighten-1">
                                    <h5>Category</h5>
                                </span>
                            </div>
                        </a>
                        <div class="col s1">&nbsp;</div>
                        <div class="col s1">&nbsp;</div>

                        <a href="AdminAddCategory.php">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                                <span class="truncate indigo-text text-lighten-1">
                                    <h5>Add</h5>
                                    <h5>Category</h5>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <footer class="indigo page-footer">

        <div class="footer-copyright">
            <div class="container">
                <span>Made By <a style='font-weight: bold;' href="https://github.com/piedcipher" target="_blank">Jay
                        Gadhethariya</a></span>
            </div>
        </div>
    </footer>
    <script>
        $('.button-collapse').sideNav();

        $('.collapsible').collapsible();

        $('select').material_select();
    </script>
    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="https://cdpn.io/cpe/boomboom/pen.js?key=pen.js-8f1b9972-a528-be51-be0f-90d35ae0d020"
        crossorigin></script>
</body>

</html>