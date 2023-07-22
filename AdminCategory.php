<!DOCTYPE html>
<?php
include_once 'db.php'; ?>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="AdminEditCustomer.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
    <link rel="mask-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg"
        color="#111">
    <link rel="canonical" href="https://codepen.io/T-P/pen/MyNjOO">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff">
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-box clearfix">
                        <div class="table-responsive">
                            <h2 style="text-align: center;">Category List</h2>
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM cattable");
                            ?>
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                ?>
                                <table class="table user-list">
                                    <thead>
                                        <tr>
                                            <th><span>Cat_image</span></th>
                                            <th><span>Cat_Brand</span></th>
                                            <th><span>Cat_Desc</span></th>
                                            <th><span>Cat_quantity</span></th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $i = 0;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <form method="POST" action="" enctype="multipart/form-data">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="img/<?php echo $row['Cat_image']; ?>" alt=" " height="50"
                                                            width="50">
                                                    </td>
                                                    <td>
                                                        <?php echo $row["Cat_Brand"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["Cat_Desc"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["Cat_quantity"]; ?>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <a href="#" class="table-link">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="table-link">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="table-link danger">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                    }
                                    ?>

                                            <?php
                                            $i++;
                            }
                            ?>
                                    </tbody>
                                </form>
                            </table>
                        </div>
                        <ul class="pagination pull-right">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
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
        var products = [
            { id: 1, name: 'Angular', description: 'Superheroic JavaScript MVW Framework.', price: 100 },
            { id: 2, name: 'Ember', description: 'A framework for creating ambitious web applications.', price: 100 },
            { id: 3, name: 'React', description: 'A JavaScript Library for building user interfaces.', price: 100 },
            { id: 4, name: 'Vue', description: 'The Progressive JavaScript Framework using MVVM structure', price: 100 }
        ];

        function findProduct(productId) {
            return products[findProductKey(productId)];
        };

        function findProductKey(productId) {
            for (var key = 0; key < products.length; key++) {
                if (products[key].id == productId) {
                    return key;
                }
            }
        };

        // component --------------------------------------------------------
        const List = {
            template: '#product-list',
            data: function () {
                return { products: products, searchKey: '' };
            },
            computed: {
                filteredProducts: function () {
                    var self = this;
                    return self.products.filter(function (product) {
                        return product.name.toLowerCase().indexOf(self.searchKey.toLowerCase()) !== -1
                    })
                }
            }
        };

        const AddProduct = {
            template: '#add-product',
            data: function () {
                return {
                    product: { name: '', description: '', price: '' }
                }
            },
            methods: {
                createProduct: function () {
                    var product = this.product;
                    products.push({
                        id: Math.random().toString().split('.')[1],
                        name: product.name,
                        description: product.description,
                        price: product.price
                    });
                    router.push('/');
                }
            }
        };

        const Product = {
            template: '#product',
            data: function () {
                return { product: findProduct(this.$route.params.product_id) };
            }
        };

        const ProductEdit = {
            template: '#product-edit',
            data: function () {
                return { product: findProduct(this.$route.params.product_id) };
            },
            methods: {
                updateProduct: function () {
                    var product = this.product;
                    products[findProductKey(product.id)] = {
                        id: product.id,
                        name: product.name,
                        description: product.description,
                        price: product.price
                    }
                    router.push('/');
                }
            }
        };

        const ProductDelete = {
            template: '#product-delete',
            data: function () {
                return { product: findProduct(this.$route.params.product_id) };
            },
            methods: {
                deleteProduct: function () {
                    products.splice(findProductKey(this.$route.params.product_id), 1);
                    router.push('/');
                }
            }
        }

        // router ------------------------------------------------------------
        var router = new VueRouter({
            routes: [
                { path: '/', component: List },
                { path: '/product/:product_id', component: Product, name: 'product' },
                { path: '/add-product', component: AddProduct },
                { path: '/product/:product_id/edit', component: ProductEdit, name: 'product-edit' },
                { path: '/product/:product_id/delete', component: ProductDelete, name: 'product-delete' }
            ]
        });

        // Vue app -----------------------------------------------------------
        var app = new Vue({
            el: '#app',
            router: router,
            template: '<router-view></router-view>'
        });

    </script>
    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="https://cdpn.io/cpe/boomboom/pen.js?key=pen.js-8f1b9972-a528-be51-be0f-90d35ae0d020"
        crossorigin></script>
</body>