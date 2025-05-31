<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- reset css -->
    <link rel="stylesheet" href="../../Styles/reset.css">
    <!-- styles -->

    <link rel="stylesheet" href="../../Styles/general-styles.css">
    <link rel="stylesheet" href="../../Styles/header.css">
    <link rel="stylesheet" href="../../Styles/footer.css">
    <link rel="stylesheet" href="animation.css">
    <link rel="stylesheet" href="../../Styles/animation-general.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Carattere&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function (e) {
            e.preventDefault();

        });
    </script>
</head>

<body>

    <!-- header -->
    <header>
        <div class="main-container">
            <div class="main-container__top-header">
                <div class="top-header__phone-number">
                    <a class="phone-number__link" href="tel:18006175">1800 6175</a>
                </div>
                <div class="top-header__language">
                    <div class="language vietnamese">
                        <div class="language__flag">
                            <img src="../../Images/vn flag.png" alt="VN flag" />
                        </div>
                        <span class="language__text">TIẾNG VIỆT</span>
                        <div class="language__icon"><img src="../../Images/chevron-down.png" alt="" /></div>
                    </div>
                    <div class="language english">
                        <div class="language__flag">
                            <img src="../../Images/us flag.png" alt="US flag" />
                        </div>
                        <span class="language__text">ENGLISH</span>
                        <div class="language__icon"><img src="../../Images/chevron-down.png" alt="" /></div>
                    </div>
                </div>
            </div>
            <div class="main-container__header--fixed">
                <div class="header__body">
                    <!-- logo -->
                    <img src="../../Images/kids and us.png" alt="" class="logo" />

                    <!-- nav -->
                    <nav class="header__nav">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a class="nav__link" href="../../web/HomePage/index.html">
                                    <p class="nav__text">TRANG CHỦ</p>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="#">
                                    <span class="course-list">
                                        <p class="nav__text">CÁC KHOÁ HỌC &#x23F7</p>
                                    </span>
                                </a>
                                <ul class="nav__submenu course-list">
                                    <li class="submenu__item"><a class="submenu__link" href="../../web/Demo day/index.html">Học
                                            thử miễn phí</a>
                                    </li>
                                    <li class="submenu__item"><a class="submenu__link" href="../../web/1-2/index.html">Khóa học
                                            cho trẻ 1-2
                                            tuổi</a></li>
                                    <li class="submenu__item"><a class="submenu__link" href="../../web/3-8/index.html">Khóa học
                                            cho trẻ 3-8
                                            tuổi</a></li>
                                    <li class="submenu__item"><a class="submenu__link" href="../../web/9-12/index.html">Khóa
                                            học cho trẻ
                                            9-12
                                            tuổi</a></li>
                                    <li class="submenu__item"><a class="submenu__link" href="../../web/13-18/index.html">Khóa
                                            học cho trẻ
                                            13-18
                                            tuổi</a></li>
                                </ul>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="../../web/PP của chúng tôi/index.html">
                                    <p class="nav__text">PHƯƠNG PHÁP CỦA CHÚNG TÔI</p>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="../../web/Các cơ sở/index.html">
                                    <p class="nav__text">CƠ SỞ</p>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="#">
                                    <span class="activities">
                                        <p class="nav__text">CÁC HOẠT ĐỘNG &#x23F7</p>
                                    </span>
                                </a>
                                <ul class="nav__submenu activities">
                                    <li class="submenu__item English-activities"><a class="submenu__link"
                                            href="../../web/Các hoạt động bằng TA/index.html">Các
                                            hoạt động bằng Tiếng Anh</a></li>
                                    <li class="submenu__item Fun-week"><a class="submenu__link"
                                            href="../../web/Hội hè Fun Weeks/index.html">Hội hè
                                            Fun-week</a></li>
                                </ul>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="#">
                                    <span class="link-before">
                                        <p class="nav__text">BLOG &#x23F7</p>
                                    </span>
                                </a>
                                <ul class="nav__submenu blog">
                                    <li class="submenu__item children_English"><a class="submenu__link" href="../../web/blog/BlogTaTreEm/listblog/index.html">Tiếng
                                            Anh trẻ em</a></li>
                                    <li class="submenu__item raise-children"><a class="submenu__link" href="../../web/blog/BlogNuoiDayCon/listblog/index.html">Nuôi dạy
                                            con</a></li>
                                    <li class="submenu__item news"><a class="submenu__link" href="../../web/blog/BlogTinTucSuKien/listblog/index.html">Tin tức - Sự
                                            kiện</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- btn action -->
                    <div class="header__action">
                    <a href="../../web/DangKy/index.html" class="btn btn--register">ĐĂNG KÝ</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- main -->
    <main>
        <form method="post" id="loginForm">
            <div class="w-3/4 bg-white p-8 ml-8 shadow-lg">
                <h2 class="text-2xl font-bold mb-4">Đăng nhập</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" placeholder="Username" type="text">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <div
                        class="password shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <input id="password" placeholder="Password" type="password">
                        <button class="showpass"><img src="../../Images/eye_close.png"></button>
                    </div>
                </div>
                <div class="items-center">
                    <button type="button" class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-700"
                        id="btnLogin" value="Login">Đăng nhập</button>
                    <a href="../XacThucTaiKhoan/index.php" class="text-blue-500 hover:underline"
                        style="font-style:italic">Quên mật khẩu?</a>
                    <p>
                        Chưa có tài khoản? <a href="../DangKy/index.php" class="text-blue-500 hover:underline">
                            <strong>Đăng ký
                                ngay!</strong></a>
                    </p>
                </div>
            </div>
        </form>
        <div class="kq"></div>
    </main>

    <!-- footer -->
    <footer>
        <div class="footer__body">
            <div class="footer__grid">
                <div class="footer__item">
                    <h4 class="footer__title">KIDS&amp;US VIETNAM</h4>
                    <div class="footer__content">
                        <ul class="footer__links">
                            <li class="footer__link-item"><a href="../../General Terms Condition/index.html"
                                    class="footer__link">General Terms &amp;
                                    Condition</a></li>
                            <li class="footer__link-item"><a href="../../Rules Regulations/index.html"
                                    class="footer__link">Rules &amp; Regulations</a>
                            </li>
                            <li class="footer__link-item"><a href="../../Privacy Policy/index.html"
                                    class="footer__link">Privacy Policy</a></li>
                            <li class="footer__link-item"><a href="#" class="footer__link">Licenses</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__item">
                    <h4 class="footer__title">CÁC KHOÁ HỌC</h4>
                    <div class="footer__content">
                        <ul class="footer__links">
                            <li class="footer__link-item"><a href="../../1-2/index.html" class="footer__link">Khoá học
                                    tiếng Anh cho trẻ
                                    1-2 tuổi</a></li>
                            <li class="footer__link-item"><a href="../../3-8/index.html" class="footer__link">Khoá học
                                    tiếng Anh cho trẻ
                                    3-8 tuổi</a></li>
                            <li class="footer__link-item"><a href="../../9-12/index.html" class="footer__link">Khoá học
                                    tiếng Anh cho trẻ
                                    9-12 tuổi</a></li>
                            <li class="footer__link-item"><a href="../../13-18/index.html" class="footer__link">Khoá học
                                    tiếng Anh cho trẻ
                                    13-18 tuổi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__item">
                    <h4 class="footer__title">CƠ SỞ</h4>
                    <div class="footer__content">
                        <ul class="footer-links">
                            <li class="footer__link-item"><a href="../../Các cơ sở/index.html"
                                    class="footer__link">Nguyễn
                                    Thị Thập</a></li>
                            <li class="footer__link-item"><a href="../../Các cơ sở/index.html"
                                    class="footer__link">Cityland Park Hills</a></li>
                            <li class="footer__link-item"><a href="../../Các cơ sở/index.html" class="footer__link">Cao
                                    Đức
                                    Lân</a></li>
                            <li class="footer__link-item"><a href="../../Các cơ sở/index.html" class="footer__link">Sư
                                    Vạn
                                    Hạnh</a></li>
                            <li class="footer__link-item"><a href="../../Các cơ sở/index.html" class="footer__link">Lê
                                    Văn
                                    Việt</a></li>
                            <li class="footer__link-item"><a href="../../Các cơ sở/index.html" class="footer__link">Tên
                                    Lửa</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__item">
                    <h4 class="footer__title">LIÊN HỆ VỚI CHÚNG TÔI</h4>
                    <div class="footer__content">
                        <ul class="footer__contacts">
                            <li class="footer__contact footer__contact--location"> 47-49 Nguyễn Thị Thập, Khu dân cư Him
                                Lam, Quận 7,
                                TP.HCM</li>
                            <li class="footer__contact footer__contact--email"> info@kidsandus.net.vn</li>
                            <li class="footer__contact footer__contact--phone">1800 6175</li>
                        </ul>
                    </div>
                    <div class="footer__social">
                        <ul class="footer__social-icons">
                            <li class="footer__social-item">
                                <a class="footer__social-link--facebook" target="_blank"
                                    href="https://www.facebook.com/kidsandus.vn">
                                    <img src="../../Images/facebook.png">
                                </a>
                            </li>
                            <li class="footer__social-item">
                                <a class="footer__social-link--youtube" target="_blank"
                                    href="https://www.youtube.com/channel/UCP7ErLtSVIywSh5Qdgm2AMw">
                                    <img src="../../Images/youtube.png">
                                </a>
                            </li>
                            <li class="footer__social-item">
                                <a class="footer__social-link--instagram" target="_blank"
                                    href="https://www.instagram.com/kidsandus.vn/">
                                    <img src="../../Images/insta.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__info">
            <div class="footer__copyright">
                <p class="footer__text">Copyright © 2024 Kids&amp;Us Vietnam</p>
            </div>
        </div>
    </footer>

    <script src="script.js"> </script>
    <script src="../../Animation/load-effect.js"></script>
    <script src="../Header.js"> </script>

</body>

</html>