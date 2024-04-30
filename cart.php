<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>السلة</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/logoicon.svg" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="style/cart.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">الرئيسية</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        معالم
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="landmarks.php">مساجد</a>
                        <a class="dropdown-item" href="sites and wells.php">مواقع وأبار</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Restaurants & Cafes.php">مطاعم ومقاهي</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        أنشطة وترفيه
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="museums.php">متاحف ومراكز</a>
                        <a class="dropdown-item" href="palm.php">مزارع</a>
                        <a class="dropdown-item" href="hourses.php">مرابط خيل</a>
                        <a class="dropdown-item" href="play.php">ملاهي ألعاب</a>
                        <a class="dropdown-item" href="mall.php">أسواق ومولات</a>
                        <a class="dropdown-item" href="park.php">حدائق ومنتزهات</a>
                        <a class="dropdown-item" href="path.php">مماشي</a>
                        <a class="dropdown-item" href="cinema.php">سينما</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="market.php"> متجر بوركت  </a>
                </li>
            </ul>
        </div>
        <div class="col-lg-1">
            <div class="nav-btns ms-auto">
                <a href="cart.php" class="btn position-relative btn-white">
                    <i class="fa fa-shopping-cart" style="color: white;"></i>
                    <span class="position-absolute top-0 end-0 translate-middle badge bg-red">2</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<main class="page">
    <section class="shopping-cart ">
        
            <div class="container">
            
                <div class="content">
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <div class="product">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="img-fluid mx-auto d-block image" src="images\product2.png">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="info">
                                                <div class="row">
                                                    <div class="col-md-5 product-name">
                                                        <div class="product-name">
                                                            <a href="productDetails.php" style=" color: #7E8D6B;">باب المسجد النبوي </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 quantity">
                                                        <label for="quantity">الكمية:</label>
                                                        <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                                                    </div>
                                                    <div class="col-md-3 price">
                                                        <span>40 SAR</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="img-fluid mx-auto d-block image" src="images/product1.png">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="info">
                                                <div class="row">
                                                    <div class="col-md-5 product-name">
                                                        <div class="product-name">
                                                            <a href="#" style=" color: #7E8D6B;">المحراب النبوي الشريف</a>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 quantity">
                                                        <label for="quantity">الكمية:</label>
                                                        <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                                                    </div>
                                                    <div class="col-md-3 price">
                                                        <span>40 SAR</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="img-fluid mx-auto d-block image" src="images/product7.png">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="info">
                                                <div class="row">
                                                    <div class="col-md-5 product-name">
                                                        <div class="product-name">
                                                            <a href="#" style=" color: #7E8D6B;">دبوس النجمة الثمانية</a>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 quantity">
                                                        <label for="quantity">الكمية:</label>
                                                        <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                                                    </div>
                                                    <div class="col-md-3 price">
                                                        <span>30 SAR</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>الملخص</h3>
                                <div class="summary-item"><span class="text">المجموع الفرعي</span><span class="price">110 SAR</span></div>
                                <div class="summary-item"><span class="text">التخفيض</span><span class="price">0 SAR</span></div>
                                <div class="summary-item"><span class="text">الشحن</span><span class="price">25 SAR</span></div>
                                <div class="summary-item"><span class="text">المجموع</span><span class="price">135 SAR</span></div>
                                <button type="button" class="btn btn-primary btn-lg btn-block">الدفع</button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
    </main>
    <footer>
        <!-- Include the footer content using PHP include -->
        <?php include "footer.php"; ?>
    </footer>

</body>

</html>
