<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logoicon.svg" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/market.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

 
    <title>المتجر | بوركت</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
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
                            <a class="dropdown-item" href="museums.html">متاحف ومراكز</a>
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
                        <a class="nav-link" href="market.php"> <b>متجر بوركت</b>  </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-1">
                <div class="nav-btns ms-auto"> 
                    <button type="button" class="btn position-relative btn-white">
                        <i class="fa fa-shopping-cart" style="color: white;"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-red">0</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <ul class="breadcrumbs" style="margin-top: 3%;">
      <li class="breadcrumbs_item">
        <a href="index.php" class="breadcrumbs_link">الرئيسية</a>
      </li>

      <li class="breadcrumbs_item">
        <a href="market.php" class="breadcrumbs_link "> متجر بوركت  </a>
      </li>

      <li class="breadcrumbs_item">
        <a href="" class="breadcrumbs_link breadcrumbs_link--active"> تفاصيل المنتج </a>
      </li>
    </ul>
    <!-- Product section-->
    <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="images/product2.png" alt="..." /></div>
                    <div class="col-md-6">
                        
                        <h1 class="display-5 fw-bolder" style="font-size:35px;">باب المسجد النبوي (تعليقة مفاتيح)</h1>
                        <div class="fs-5 mb-5">
                            <span>40.00 SAR</span>
                        </div>
                        <p class="lead">، قطعة مميزة لباب المسجد النبوي الشريف
                        تعليقة مفاتيح أو تعليقة سيارة
                        معدن زنك بارز من الجهتين - ذهبي فاتح</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem " />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button" style="background-color:  #7E8D6B; color: white; border: none;  margin-right:15px"> 
                            <i class="bi-cart-fill me-1"></i>
                            إضافة إلى السلة
                        </button>
                    </div>

                    </div>
                </div>
            </div>
        </section>
    
    <footer>
        <!-- Include the footer content using PHP include -->
        <?php include "footer.php"; ?>
    </footer>
    
</body>
</html>