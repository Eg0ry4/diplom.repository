<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ДружинА</title>
  <link rel="icon" href="img/favicon.ico" type="image/ico">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">

  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!--================ Start Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand logo_h" href="/main"><img src="img/dr_logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="main">Главная</a></li>
              <!-- <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Магазин</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                  <li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
                </ul>
              </li> -->
              <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">О нас</a>
              </li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Подробнее</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="#">Услуги</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Объекты</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Фестивали</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="/callback">Связаться с нами</a></li>
            </ul>

          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================ End Header Menu Area =================-->

  <!--================ Cooooooooontent =================-->
  <?php echo $content; ?>
  <!--================ Cooooooooontent =================-->

  <!--================ Start footer Area  =================-->
  <footer class="footer">
    <div class="footer-area">
      <div class="container">
        <div class="row section_gap">
          <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title">Наши Контакты</h4>
              <div class="ml-40">
                <p class="sm-head">
                  <span class="fa fa-location-arrow"></span>
                  Главный офис
                </p>
                <p>105077, Средняя Первомайская улица, 13, Москва</p>

                <p class="sm-head">
                  <span class="fa fa-phone"></span>
                  Контактный телефон
                </p>
                <p>
                  +7 (495) 367 00 35
                </p>

                <p class="sm-head">
                  <span class="fa fa-envelope"></span>
                  Email
                </p>
                <p>
                  egrychandr86@inbox.ru
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row d-flex">
          <p class="col-lg-12 footer-text text-center">
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script> All rights reserved
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->

  <script src="vendors/jquery/jquery-3.7.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
