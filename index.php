<?php require "./components/loginHandle.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>THỜI TRANG CÔNG SỞ - NEM FASHION</title>
  <link rel="shortcut icon" href="//theme.hstatic.net/200000182297/1000887316/14/favicon.png?v=847" type="image/png" />
  <!-- CSS -->
  <link rel="stylesheet" href="./assets/css/base.css" />
  <link rel="stylesheet" href="./assets/css/main.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
  <!-- !CSS -->

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.4.0/css/all.min.css" />
  <!-- !Font -->
</head>

<body>
  <header class="header">
    <div class="header__top">
      <div class="header__top-address">
        <a href="#" class="header__top-address-link">
          <i class="header__top-address-icon fa-solid fa-house-chimney"></i>
          <label class="header__top-address-title">Hệ thống showroom</label>
        </a>
      </div>
      <div class="header__top-contact">
        <a href="#" class="header__top-contact-link">
          <i class="header__top-contact-icon fa-solid fa-phone-flip"></i>
          <label class="header__top-contact-title">Mua hàng online: 0246.2909098</label>
        </a>
      </div>
    </div>
    <nav class="header__navbar grid">
      <div class="header__navbar-logo grid__column-2-4">
        <a href="./index.php" class="header__navbar-logo-link">
          <img src="https://theme.hstatic.net/200000182297/1000887316/14/logo.png?v=847" alt="logo" class="header__navbar-logo-img" />
        </a>
      </div>
      <div class="header__navbar-menu grid__column-10">
        <ul class="header__navbar-list">
          <li class="header__navbar-item">
            <a href="./pages/collections/All.php" class="header__navbar-item-link">SẢN PHẨM<i class="header__navbar-item-link-icon fa-solid fa-angle-down"></i></a>
            <div class="header__navbar-sub-item">
              <ul class="header__navbar-sub-item-list">
                <li class="header__navbar-sub-item-list-item">
                  <a href="./pages/collections/ao-kieu.php" class="header__navbar-sub-item-list-item-link">Áo kiểu</a>
                </li>
                <li class="header__navbar-sub-item-list-item">
                  <a href="./pages/collections/set-bo.php" class="header__navbar-sub-item-list-item-link">Set bộ</a>
                </li>
                <li class="header__navbar-sub-item-list-item">
                  <a href="./pages/collections/ao-dai.php" class="header__navbar-sub-item-list-item-link">Áo dài</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header__navbar-item">
            <a href="#" class="header__navbar-item-link">SẢN PHẨM MỚI</a>
          </li>
          <li class="header__navbar-item">
            <a href="#" class="header__navbar-item-link">BỘ SƯU TẬP<i class="header__navbar-item-link-icon fa-solid fa-angle-down"></i></a>
            <div class="header__navbar-sub-item">
              <ul class="header__navbar-sub-item-list">
                <li class="header__navbar-sub-item-list-item">
                  <a href="#" class="header__navbar-sub-item-list-item-link">STARRY NIGHT</a>
                </li>
                <li class="header__navbar-sub-item-list-item">
                  <a href="#" class="header__navbar-sub-item-list-item-link">HOA ĐẤT VIỆT</a>
                </li>
                <li class="header__navbar-sub-item-list-item">
                  <a href="#" class="header__navbar-sub-item-list-item-link">AUTUMN FLAVOR</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header__navbar-item">
            <a href="#" class="header__navbar-item-link">NEM ONLINE</a>
          </li>
          <li class="header__navbar-item">
            <a href="#" class="header__navbar-item-link">SALE<i class="header__navbar-item-link-icon fa-solid fa-angle-down"></i></a>
            <div class="header__navbar-sub-item">
              <ul class="header__navbar-sub-item-list">
                <li class="header__navbar-sub-item-list-item">
                  <a href="#" class="header__navbar-sub-item-list-item-link">Sale upto 50%</a>
                </li>
                <li class="header__navbar-sub-item-list-item">
                  <a href="#" class="header__navbar-sub-item-list-item-link">Chỉ từ 149k</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
        <!-- Search -->
        <div class="header__navbar-search">
          <a href="./pages/search.php" style="color: var(--black-color);">
            <i class="header__navbar-search-icon fa-solid fa-magnifying-glass"></i>
            <div class="header__navbar-sub-search">
              <!--  -->
            </div>
          </a>
        </div>
        <!-- !Search -->
        <div class="header__navbar-account">
          <i class="header__navbar-account-icon fa-solid fa-circle-user"></i>
          <label for="" class="header__navbar-account-title">Tài khoản</label>
          <div class="header__navbar-sub-account">
            <ul class="header__navbar-sub-account-list">
              <li class="header__navbar-sub-account-item">
                <a href="./pages/authen.php" class="header__navbar-sub-account-item-link">Đăng nhập</a>
              </li>
              <li class="header__navbar-sub-account-item">
                <a href="./pages/authen.php" class="header__navbar-sub-account-item-link">Đăng ký</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="header__navbar-cart">
          <a href="./pages/cart.php" class="header__navbar-cart-link">
            <i class="header__navbar-cart-icon fa-solid fa-bag-shopping"></i>
            <label for="" class="header__navbar-cart-title">Giỏ hàng</label>
          </a>
          <div class="header__navbar-sub-cart">
            <div class="header__navbar-sub-cart--empty">
              <label for="" class="header__navbar-sub-account-title--empty">
                Bạn chưa có sản phẩm nào trong giỏ hàng!
              </label>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <div class="slider">
    <div class="slider__banner">
      <img class="slider__banner-img" src="https://theme.hstatic.net/200000182297/1000887316/14/ms_banner_img3.jpg?v=847" alt="Image 1" />
      <img class="slider__banner-img" src="https://theme.hstatic.net/200000182297/1000887316/14/ms_banner_img4.jpg?v=847" alt="Image 2" style="display: none" />
    </div>
    <button id="prevBtn" class="slider-btn">
      <i class="fa-solid fa-arrow-left-long"></i>
    </button>
    <button id="nextBtn" class="slider-btn">
      <i class="fa-solid fa-arrow-right-long"></i>
    </button>
  </div>
  <div class="content">
    <div class="content__banner">
      <div class="content__banner-new">
        <a href="#" class="content__banner-new-link">
          <img src="https://theme.hstatic.net/200000182297/1000887316/14/home_new_banner_1.jpg?v=847" alt="" class="content__banner-new-img" />
          <div class="content__banner-new-product">
            <label for="" class="content__banner-new-product-title">SẢN PHẨM MỚI</label>
            <label class="content__banner-new-product-link">SHOW NOW</label>
          </div>
        </a>
      </div>
      <div class="content__banner-new">
        <a href="#" class="content__banner-new-link">
          <img src="https://theme.hstatic.net/200000182297/1000887316/14/home_new_banner_2.jpg?v=847" alt="" class="content__banner-new-img" />
          <div class="content__banner-new-product">
            <label for="" class="content__banner-new-product-title">ĐẦM THIẾT KẾ</label>
            <label class="content__banner-new-product-link">SHOW NOW</label>
          </div>
        </a>
      </div>
    </div>
    <div class="content__product">
      <div class="content__product-new">
        <a href="#" class="content__product-new-heading">SẢN PHẨM MỚI</a>
      </div>
      <div class="content__product-new">
        <a href="#" class="content__product-new-heading">ÁO LEN CAO CẤP</a>
      </div>
      <div class="content__product-new">
        <a href="#" class="content__product-new-heading">NEM'S BLOG</a>
        <p for="" class="content__product-new-desc">
          ĐÓN ĐẦU XU HƯỚNG, ĐỊNH HÌNH PHONG CÁCH
        </p>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="footer__pre">
      <div class="footer__pre-heading">ĐĂNG KÝ BẢN TIN</div>
      <label for="" class="footer__pre-desc">Đăng ký nhận bản tin NEM để được cập nhật những mẫu thiết kế mới
        nhất</label>
      <div class="footer__pre-register">
        <input type="email" class="footer__pre-register-input" placeholder="Vui lòng nhập email ..." />
        <button class="footer__pre-register-btn">ĐĂNG KÝ</button>
      </div>
      <div class="footer__pre-social">
        <a href="#" class="footer__pre-social-link"><i class="fa-brands fa-facebook"></i></a>
        <a href="#" class="footer__pre-social-link"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" class="footer__pre-social-link"><i class="fa-brands fa-youtube"></i></a>
      </div>
    </div>
    <div class="footer__content grid">
      <div class="footer__content-heading">
        NEM FASHION - THỜI TRANG CÔNG SỞ
      </div>
      <div class="grid__row">
        <div class="grid__column-4-8">
          <ul class="footer__content-list">
            <li class="footer__content-item">
              Công ty TNHH Dịch vụ và Thương mại An Thành.
            </li>
            <li class="footer__content-item">
              Số ĐKKD 0107861393, Sở KHĐT Tp. Hà Nội cấp ngày 04/10/2017
            </li>
            <li class="footer__content-item">
              Địa chỉ: Lô 1+2, Ô quy hoạch E.2/NO7 đường Lâm Hạ phường Bồ Đề,
              quận Long Biên, Hà Nội
            </li>
            <li class="footer__content-item">
              Chăm sóc khách hàng: 0246.2591551
            </li>
            <li class="footer__content-item">
              Mua hàng online: 0246.2909098
            </li>
            <li class="footer__content-item">Email: nemcskh@stripe-vn.com</li>
          </ul>
        </div>
        <div class="grid__column-2-4">
          <ul class="footer__content-list">
            <li class="footer__content-item">
              <a href="#" class="footer__content-item-link">Giới thiệu</a>
            </li>
            <li class="footer__content-item">
              <a href="#" class="footer__content-item-link">Triết lý kinh doanh tại NEM Fashion</a>
            </li>
            <li class="footer__content-item">
              <a href="#" class="footer__content-item-link">NEM's Blog</a>
            </li>
            <li class="footer__content-item">
              <a href="#" class="footer__content-item-link">Hệ thống showroom</a>
            </li>
            <li class="footer__content-item">
              <a href="#" class="footer__content-item-link">Liên hệ</a>
            </li>
          </ul>
        </div>
        <div class="grid__column-2-4">
          <ul class="footer__content-list">
            <li class="footer__content-item">
              <a href="#" class="footer__content-item-link">Chính sách giao nhận - Vận chuyển</a>
            </li>
            <li class="footer__content-item">
              <a href="#" class="footer__content-item-link">Hướng dẫn thanh toán</a>
            </li>
            <li class="footer__content-item">
              <a href="#" class="footer__content-item-link">Tra cứu đơn hàng</a>
            </li>
            <li class="footer__content-item">
              <a href="#" class="footer__content-item-link">Hướng dẫn chọn Size</a>
            </li>
            <li class="footer__content-item">
              <a href="#" class="footer__content-item-link">Quy định đổi hàng</a>
            </li>
            <li class="footer__content-item">
              <a href="#" class="footer__content-item-link">Quy định bảo hành và sửa chữa</a>
            </li>
            <li class="footer__content-item">
              <a href="#" class="footer__content-item-link">Khách hàng thân thiết</a>
            </li>
          </ul>
        </div>
        <div class="grid__column-2-4">
          <ul class="footer__content-list">
            <li class="footer__content-item">Phương thức thanh toán</li>
            <li class="footer__content-item">
              <a href="#" class="footer__content-item-link"><img src="https://theme.hstatic.net/200000182297/1000887316/14/image_method_3.png?v=847" alt="" class="footer__content-item-img" /></a>
            </li>
            <li class="footer__content-item">
              <a href="#" class="footer__content-item-link"><img src="https://theme.hstatic.net/200000182297/1000887316/14/bct.png?v=847" alt="" class="footer__content-item-img" /></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer__copyright">
      <div class="grid">
        <a href="#" class="footer__copyright-link">© 2020 - Bản quyền NEM</a>
      </div>
    </div>
  </div>

  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-angle-up"></i></button>
</body>

<!-- JS -->
<script src="./assets/js/index.js"></script>
<!-- !JS -->

</html>