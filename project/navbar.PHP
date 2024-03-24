<!DOCTYPE html>
<html lang="ar">
    <head>
        <link rel="stylesheet" href="navStyle.css">
        <style>
          @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap');
      </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            (function($) { // Begin jQuery
                $(function() { // DOM ready
                    // If a link has a dropdown, add sub menu toggle.
                    $('nav ul li a:not(:only-child)').click(function(e) {
                    $(this).siblings('.nav-dropdown').toggle();
                    // Close one dropdown when selecting another
                    $('.nav-dropdown').not($(this).siblings()).hide();
                    e.stopPropagation();
                    });
                    // Clicking away from dropdown will remove the dropdown class
                    $('html').click(function() {
                    $('.nav-dropdown').hide();
                    });
                    // Toggle open and close nav styles on click
                    $('#nav-toggle').click(function() {
                    $('nav ul').slideToggle();
                    });
                    // Hamburger to X toggle
                    $('#nav-toggle').on('click', function() {
                    this.classList.toggle('active');
                    });
                }); // end DOM ready
                })(jQuery); // end jQuery
        </script>

        <style>
                     
                body {
                font-family: "Tajawal", sans-serif;
                position: relative; /* Position relative to contain absolutely positioned elements */

            }

            

            section.navigation {
                position: relative;
                z-index: 1000; /* Ensure it's above the image */
                background-color: #5c4a56;

            }

            

            nav {
              float: right;
              

            }
            nav ul {
              list-style: none;
              margin: 0;
              padding: 0;
            }
            nav ul li {
              float: left;
              position: relative;
            }
            nav ul li a {
              display: block;
              padding: 0 20px;
              line-height: 70px;
              text-decoration: none;
              color: #fffff;
              /*
              The full path of this code is nav ul li a:not(:only-child):after. This means that the code will apply to any a tag in our nav list that is NOT an only child, aka any dropdown. The :after means it comes after the output of the tag. I’ve decided that to specify any nav item as a dropdown, it will be followed by a unicode arrow – ▾ (#9662).
              */
            }
            nav ul li a:hover {
              background: #f2f2f2;
              color: #7E8D6B;
            }
            nav ul li a:not(:only-child):after {
              padding-left: 4px;
              content: ' ▾';
            }
            nav ul li ul li {
              min-width: 190px;
            }
            nav ul li ul li a {
              padding: 15px;
              line-height: 20px;
            }

            .nav-dropdown {
              background-color: #fff;
              position: absolute;
              z-index: 1;
              /* Guarantees that the dropdown will display on top of any content. */
              box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
              display: none;
            }

            .nav-mobile {
              display: none;
              position: absolute;
              top: 0;
              right: 0;
              background: #fff;
              height: 70px;
              width: 70px;
            }

            @media only screen and (max-width: 800px) {
              .nav-mobile {
                display: block;
              }

              nav {
                width: 100%;
                padding: 70px 0 15px;
              }
              nav ul {
                display: none;
              }
              nav ul li {
                float: none;
              }
              nav ul li a {
                padding: 15px;
                line-height: 20px;
              }
              nav ul li ul li a {
                padding-left: 30px;
              }
            }
            #nav-toggle {
              position: absolute;
              left: 18px;
              top: 22px;
              cursor: pointer;
              padding: 10px 35px 16px 0px;
            }
            #nav-toggle span,
            #nav-toggle span:before,
            #nav-toggle span:after {
              cursor: pointer;
              border-radius: 1px;
              height: 5px;
              width: 35px;
              background: #463f3f;
              position: absolute;
              display: block;
              content: '';
              transition: all 300ms ease-in-out;
            }
            #nav-toggle span:before {
              top: -10px;
            }
            #nav-toggle span:after {
              bottom: -10px;
            }
            #nav-toggle.active span {
              background-color: transparent;
            }
            #nav-toggle.active span:before, #nav-toggle.active span:after {
              top: 0;
            }
            #nav-toggle.active span:before {
              transform: rotate(45deg);
            }
            #nav-toggle.active span:after {
              transform: rotate(-45deg);
            }

            @media screen and (min-width: 800px) {
              .nav-list {
                display: block !important;
              }
            }
            /* 
            .navigation – the outer wrapper for the navbar. Specifies the height and color, and will stretch the full width of the viewport.
            */
            .navigation {
              height: 70px;
              background: #ffffff;
            }

            /*
            .nav-container – the inner wrapper for the navbar. Defines how far the actual content should stretch.
            */
            .nav-container {
              max-width: 1000px;
              margin: 0 auto;
            }

            .brand {
              position: absolute;
              padding-left: 20px;
              float: left;
              line-height: 70px;
              text-transform: uppercase;
              font-size: 1.4em;
            }
            .brand a,
            .brand a:visited {
              color: #463f3f;
              text-decoration: none;
            }
        </style>

    </head>
    <body>
        <section class="navigation">
            <div class="nav-container">
              <div class="brand">
                <img src="images/logo.svg" alt="logo">
              </div>
              <nav>
                <div class="nav-mobile">
                  <a id="nav-toggle" href="#!"><span></span></a>
                </div>
                <ul class="nav-list">
                  <!-- Setting the links to #! will ensure that no action takes place on click. -->
                  <li><a href="#!">متجر بوركت </a></li>
                  <li><a href="#!">تقويم الفعاليات</a></li>
                  <li><a href="#!">أنشطة وترفيه</a>
                    <ul class="nav-dropdown">
                      <li><a href="#!">متاحف ومراكز</a></li>
                      <li><a href="#!">مزارع </a></li>
                      <li><a href="#!">مرابط خيل </a></li>
                      <li><a href="#!">ملاهي ألعاب</a></li>
                      <li><a href="#!">أسواق ومولات</a></li>
                      <li><a href="#!">حدائق ومنتزهات</a></li>
                      <li><a href="#!">مماشي</a></li>
                      <li><a href="#!">سينما</a></li>
                    </ul></li>
                  <li><a href="#!">مطاعم وكافيهات</a></li>
                  <li><a href="#!">معالم</a>
                    <ul class="nav-dropdown">
                      <li><a href="#!">مساجد </a></li>
                      <li><a href="#!">آبار ومواقع </a></li>
                    </ul></li>
                  <li><a href="#!">الرئيسية</a></li>
                </ul>
              </nav>
            </div>
          </section>
</html>
