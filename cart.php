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
<?php  include "navbar.php" ?>


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
