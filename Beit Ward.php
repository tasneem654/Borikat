<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/Restaurant1.css" />
    <link rel="icon" href="images/Group green.svg" type="image/png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap");
    </style>
    <title> Beit Ward  </title>
  </head>
  <body>
     <?php include "<projHeader>.php"; ?>

    <div class="banner"> 
      <img src="images/ward2.jpg" alt="header" class="headerImg" />
    </div>


    
    <ul class="breadcrumbs">
      <li class="breadcrumbs_item">
        <a href="index.php" class="breadcrumbs_link">الرئيسية</a>
      </li>

      <li class="breadcrumbs_item">
        <a href="Restaurants & Cafes.php" class="breadcrumbs_link">مطاعم ومقاهي  </a>
      </li>

      <li class="breadcrumbs_item">
        <a href="" class="breadcrumbs_link breadcrumbs_link--active"
          > مطعم بيت ورد     </a
        >
      </li>
    </ul>
    <div class="Restaurant">
      <div class="Restaurant-description">
        <h1>  مطعم بيت ورد   </h1>
        <p> التقييم 4.7</p>
      </div>
      <div class="Quba-icons">
        <button
          class="button"
          onclick="window.location.href='https://maps.app.goo.gl/ViDDvHAqQnjLXqxbA '"
        >
          <img src="images/g198.svg" alt="Map" />
        </button>

       
      </div>
    </div>

    <div class="Restaurant-pragraph">
      <p>
        مطعم ومقهى عالي الجودة مختص في تقديم العديد من الأطباق والحلويات اللبنانية الشهية وبعض الأطباق الأرمينية، يتم تقديمها من قبَل أفضل مقدمي الخدمة تحت ظل جو هادئ وجميل.
      </br>
 يقع على طريق الملك عبد الله الفرعي في بوليفارد المدينة (العروبة). 
</br>
( يتطلب الحجز المسبق)

      </p>
      <h1> مطبخ المطعم  </h1>
      <p> لبناني - أرميني 
      </p>
      <h1> مرافق المطعم    </h1>
      <p>
        مواقف سيارات – جلسات خارجية – مدفأة 
    </div>

    <br />
    <br />
  </body>
</html>
