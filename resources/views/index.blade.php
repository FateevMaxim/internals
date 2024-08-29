<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Internals</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap-utilities.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap-reboot.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

        <a href="index.html#hero" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="assets/img/logo.png" alt="Internals">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#about">О компании</a></li>
                <li><a href="zehua.html">Zehua<br></a></li>
                <li><a href="#contact">Контакты</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>

<main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            {!! $aboutUsTitle->data !!}
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">

            <div class="row g-4 g-lg-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-5">
                    <div class="about-img">
                        {!! $aboutUsImage->data !!}
                    </div>
                </div>

                <div class="col-lg-7">
                    {!! $aboutUs->data !!}
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                @foreach($partners as $partner)
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <a href="{{ $partner->link }}" target="_blank">
                            <img src="{{ asset('storage/'.$partner->image) }}" class="img-fluid" alt="{{ $partner->title
                            }}"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- /Clients Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Связаться с нами</h2>
        </div><!-- End Section Title -->

        <div class="mb-5">
            {!! $contactUs->data !!}
        </div><!-- End Google Maps -->

        <div class="container" data-aos="fade">

            <div class="row gy-5 gx-lg-5">

                <div class="col-lg-4">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Адрес:</h4>
                            <p>Казахстан, г.Алматы, ул.Абая, д.68А</p>
                        </div>
                    </div><!-- End Info Item -->
                </div>

                <div class="col-lg-4">
                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p><a href="mailto:">manager@internals.kz</a></p>
                        </div>
                    </div><!-- End Info Item -->
                </div>

                <div class="col-lg-4">
                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Телефон:</h4>
                            <p><a href="tel:+77777777777">+7 777 777 7777</a></p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

        </div>

    </section><!-- /Contact Section -->

</main>

<footer id="footer" class="footer dark-background">

    <div class="copyright text-center">
        <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div>
                    © Copyright <strong><span>Internals</span></strong>. All Rights Reserved
                </div>
            </div>

            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                <a href=""><i class="bi bi-telegram"></i></a>
                <a href=""><i class="bi bi-whatsapp"></i></a>
            </div>

        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('vendor/aos/aos.js') }}"></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
