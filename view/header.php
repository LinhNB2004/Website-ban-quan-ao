<!doctype html>
<html lang="zxx">


<!-- Mirrored from risingtheme.com/html/demo-suruchi-v1/suruchi/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 15:56:59 GMT -->
<head>
  <meta charset="utf-8">
  <title>Thời trang - HL</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.jpg">
    
   <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- Plugin css -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  

</head>

<body>


	
    <!-- Start header area -->
    <header class="header__section">
        <div class="header__topbar bg__secondary">
            <div class="container-fluid">
                <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                    <div class="header__shipping">
                        <ul class="header__shipping--wrapper d-flex">
                            <li class="header__shipping--text text-white">Chào mừng bạn đến với cửa hàng online </li>
                            <li class="header__shipping--text text-white d-sm-2-none"><img class="header__shipping--text__icon" src="assets/img/icon/bus.png" alt="bus-icon"> Theo dõi đơn hàng </li>
                            <li class="header__shipping--text text-white d-sm-2-none"><img class="header__shipping--text__icon" src="assets/img/icon/email.png" alt="email-icon"> <a class="header__shipping--text__link" href="mailto:demo@gmail.com">HL@gmail.com</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="main__header header__sticky">
            <div class="container-fluid">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                            <span class="visually-hidden">Menu Open</span>
                        </a>
                    </div>
                    <div class="main__logo">
                        <h1 class="main__logo--title"><a class="main__logo--link" href="index.php?act=home"><img class="main__logo--img" width="100px" height="20px" src="assets/img/logo/logo.png" alt="logo-img"></a></h1>
                    </div>
                    <div class="header__search--widget header__sticky--none d-none d-lg-block">
                        <!-- <form class="d-flex header__search--form" action="#">
                            <div class="header__select--categories select">
                                <select class="header__select--inner">
                                    <option selected value="1">Tất cả danh mục</option>
                                    <option value="2">Thời Trang Nữ </option>
                                    <option value="3">Thời Trang Nam </option>
                                    <option value="4">Thời Trang Trẻ Em </option>
                                </select>
                            </div>
                            <div class="header__search--box">
                                <label>
                                    <input class="header__search--input" placeholder="Tìm kiếm..." type="text">
                                </label>
                                <button class="header__search--button bg__secondary text-white" type="submit" aria-label="search button">
                                    <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="27.51" height="26.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                </button>
                            </div>
                        </form> -->
                    </div>
                    <div class="header__account header__sticky--none">
                        <ul class="d-flex">
                        <?php 
                            if(isset($_SESSION['user'])&&($_SESSION['user'])!=""){

                                
                                echo'
                                <li class="header__account--items" style="color:var(--text-gray-color)">
                             
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 20px; margin-bottom:5px" width="26.51" height="23.443" viewBox="0 0 512 512" ><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>                                                   
                               
                                <br>
                                <a href="index.php?act=thongtin"> Tài khoản </a>
                            </li>
                                ';
                            }else{
                       
                         ?>
                            <li class="header__account--items" style="color:var(--text-gray-color)">
                             
                                    <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 50px; margin-bottom:5px" width="26.51" height="23.443" viewBox="0 0 512 512" ><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg> 
                                   
                                        <br>

                                     
                                        <a href="index.php?act=dangnhap">Đăng nhập/ </a>
                                        <a href="index.php?act=dangky">Đăng ký</a>
                                    
                            </li>
                            <?php } ?>
                            <li class="header__account--items d-none d-lg-block">
                                <a class="header__account--btn" href="">
                                    <svg  xmlns="http://www.w3.org/2000/svg" width="28.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                    <span class="header__account--btn__text"> Danh sách</span>
                                    <!-- <span class="items__count wishlist">02</span>  -->
                                </a>
                            </li>
                         
                            <li class="header__account--items header__account2--items">
                                <a class="header__account--btn minicart__open--btn" href="?act=giohang" data-offcanvas>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 14.706 13.534">
                                        <g  transform="translate(0 0)">
                                        <g >
                                            <path  data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"/>
                                            <path  data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"/>
                                            <path  data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"/>
                                        </g>
                                        </g>
                                    </svg>
                                    <!-- <span class="items__count style2">02</span>  -->
                                    <span class="header__account--btn__text"> Giỏ hàng </span>   

                                </a>
                            </li>
                        </ul>
                    </div>


                  
                </div>
            </div>
        </div>




        <!-- MENU -->
        <div class="header__bottom">
            <div class="container-fluid">
                <div class="header__bottom--inner position__relative d-none d-lg-flex justify-content-between align-items-center">
                    <div class="header__menu">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="index.php?act=shop">Trang chủ 
                                       
                                    </a>
                                   
                                </li>
                                <li class="header__menu--items mega__menu--items">
                                    <a class="header__menu--link" href="index.php?act=shop">Cửa hàng
                                      
                                    </a>
                                   
                                </li>
                               
                                <!-- <li class="header__menu--items">
                                    <a class="header__menu--link" href="blog.html">Blog 
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="blog.html" class="header__sub--menu__link">Blog Grid</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-details.html" class="header__sub--menu__link">Blog Details</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-left-sidebar.html" class="header__sub--menu__link">Blog Left Sidebar</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-right-sidebar.html" class="header__sub--menu__link">Blog Right Sidebar</a></li>
                                    </ul>
                                </li> -->

                                <input type="hidden" name="iduser" value="<?= isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : '' ?>">

                                                    <?php if(!empty($_SESSION['user'])) :?>
                                <li class="header__menu--items d-none d-xl-block">
                                    <a class="header__menu--link" href="index.php?act=listdonhang">Danh sách đơn hàng </a>  
                                </li>
                                <?php 
                                    else:
                                ?>
                                <!-- <p class="error_binhluan"><a href="index.php?act=dangnhap">Đăng nhập để bình luận!</a></p> -->
                                <?php
                                endif; ?>
                               
                            
                               
                            </ul>
                        </nav>
                    </div>
                    <p class="header__discount--text"><img class="header__discount--icon__img" src="assets/img/icon/lamp.png" alt="lamp-img"> Đặc biệt giảm giá tới 60% tất cả các sản phẩm </p>
                </div>
            </div>
        </div>
  

    </header>
    <!-- End header area -->
