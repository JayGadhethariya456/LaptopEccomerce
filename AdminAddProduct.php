<!DOCTYPE html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="AdminEditCustomer.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
    <link rel="mask-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg"
        color="#111">
    <link rel="canonical" href="https://codepen.io/T-P/pen/MyNjOO">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff">
    <style>
        #pid,
        #pnm,
        #pdes,
        #ppri {
            color: red;
            font-weight: bold;
        }
    </style>
    </style>
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

        <li id="dash_dashboard"><a class="waves-effect" href="Admin.html"><b>Dashboard</b></a></li>

        <ul class="collapsible" data-collapsible="accordion">
            <li id="dash_users">
                <div id="dash_users_header" class="collapsible-header waves-effect"><b>Company</b></div>
                <div id="dash_users_body" class="collapsible-body">
                    <ul>
                        <li id="users_seller">
                            <a class="waves-effect" style="text-decoration: none;" href="Admin Company.html">Company</a>
                        </li>

                        <li id="users_customer">
                            <a class="waves-effect" style="text-decoration: none;" href="AddCompany.html">Add
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
                            <a class="waves-effect" style="text-decoration: none;" href="AdminProduct.html">Products</a>
                            <a class="waves-effect" style="text-decoration: none;" href="AdminAddProduct.html">Add
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
                            <a class="waves-effect" style="text-decoration: none;"
                                href="AdminCategory.html">Category</a>
                        </li>

                        <li id="categories_sub_category">
                            <a class="waves-effect" style="text-decoration: none;" href="AdminAddCategory.html">Add
                                Category</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </ul>

    <header>
        <ul class="dropdown-content" id="user_dropdown">
            <li><a class="indigo-text" href="#!">Profile</a></li>
            <li><a class="indigo-text" href="#!">Logout</a></li>
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


    </header>

    <main>
        <form id="myform" method="POST" action="Prodinsert.php">
            <div id="app" class="container" style="padding-left: 150px;">
                <h3 class="mt-3" style="text-align: center;">Add Product</h3>
                <hr>
                <div class="col">

                    <div class="row">
                        <label style="color: black;">Product name</label>
                        <input type="text" class="form-control" v-model="name" id="Pronm" name="Prod_name">
                        <span id="pnm"></span>
                    </div>
                    <div class="row">
                        <label style="color: black;">Product Desc</label>
                        <input type="text" class="form-control" v-model="email" id="Prodesc" name="Prod_Desc">
                        <span id="pdes"></span>
                    </div>
                    <div class="row">
                        <label style="color: black;">Product Image:::</label>
                        <input type="file" name="Prod_image">
                    </div>
                    <div class="row">
                        <label style="color: black;">Product Price</label>
                        <input type="text" class="form-control" id="Propr" name="Prod_price">
                        <span id="ppri"></span>
                    </div>
                </div>
            </div>
            <button type="submit" value="submit" class="btn btn-warning btn-lg ms-2" id="btn" name="submit"
                style="margin-left: 700px;">Submit
                form</button>
            <hr>


            </div>
        </form>
    </main>

    <footer class="indigo page-footer" style="padding-left: 50px;">

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
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

    </script>
    <script>
        new Vue({
            el: '#app',
            data: {
                id: '',
                name: '',
                email: '',
                dataTable: null,
            },
            methods: {

                addProduct() {

                    this.dataTable.row.add([
                        this.id,
                        '<a href="#">' + this.name + '</a>',
                        this.email
                    ]).draw(false)
                    this.id = '';
                    this.name = '';
                    this.email = '';
                }
            },
            mounted() {
                let users = [];

                this.dataTable = $('#user-table').DataTable({});
                const url = 'https://jsonplaceholder.typicode.com/users';
                fetch(url)
                    .then(res => res.json())
                    .then(data => {
                        data.forEach(item => {
                            users.push(item);
                        });

                        users.forEach(user => {
                            this.dataTable.row.add([
                                user.id,
                                '<a href="#">' + user.name + '</a>',
                                user.email
                            ]).draw(false)
                        })
                    })
            }
        })

    </script>

    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="https://cdpn.io/cpe/boomboom/pen.js?key=pen.js-8f1b9972-a528-be51-be0f-90d35ae0d020"
        crossorigin></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="AdPrval.js"></script>
</body>

</html>