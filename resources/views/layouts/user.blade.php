<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Begin Head -->

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User</title>
    <meta name="keywords" content="HTML5 Theme" />
    <meta name="description" content="Megakit - HTML5 Theme">
    <meta name="author" content="keenthemes.com">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

    <!-- Vendor Styles -->
    <link href="{{asset('assets2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets2/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets2/vendor/themify/themify.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets2/vendor/scrollbar/scrollbar.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets2/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets2/vendor/swiper/swiper.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets2/vendor/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->
    <link href="{{asset('assets2/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets2/css/global/global.css')}}" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets2/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('assets2/img/apple-touch-icon.png')}}">
</head>
<!-- End Head -->

<!-- Body -->

<body>

    <!--========== HEADER ==========-->
    <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
        <!-- Navbar -->
        <div class="s-header__navbar">
            <div class="s-header__container">
                <div class="s-header__navbar-row">
                    <div class="s-header__navbar-row-col">
                        <!-- Logo -->
                        <div class="s-header__logo">
                                <a href="index.html" class="s-header__logo-link">
                                    <img class="s-header__logo-img s-header__logo-img-default" src="{{asset('assets2/img/logo1.png')}}" style="width:40px" alt="Hafsha Logo">
                                    
                                </a>
                            </div>
                            <!-- End Logo -->
                    </div>
                    <div class="s-header__navbar-row-col">
                        <!-- Trigger -->
                        <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                            <span class="s-header__trigger-icon"></span>
                            <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25"
                                    stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                            </svg>
                        </a>
                        <!-- End Trigger -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar -->

        <!-- Overlay -->
        <div class="s-header-bg-overlay js__bg-overlay">
            <!-- Nav -->
            <nav class="s-header__nav js__scrollbar">
                <div class="container-fluid">

                    <!-- Menu List -->
                    <ul class="list-unstyled s-header__nav-menu">
                        <li class="s-header__nav-menu-item"><a
                                class="s-header__nav-menu-link s-header__nav-menu-link-divider"
                                href="{{url('user')}}">Beranda</a></li>
                        <li class="s-header__nav-menu-item"><a
                                class="s-header__nav-menu-link s-header__nav-menu-link-divider"
                                href="{{url('informasi')}}">Objek Wisata</a></li>
                        <li class="s-header__nav-menu-item"><a
                                class="s-header__nav-menu-link s-header__nav-menu-link-divider"
                                href="{{url('tentang')}}">Tentang</a></li>
                        <li class="s-header__nav-menu-item"><a
                                class="s-header__nav-menu-link s-header__nav-menu-link-divider" 
                                href="#hubungi">Hubungi Kami</a>
                        </li>
                    </ul>
                    <!-- End Menu List -->
                </div>
            </nav>
            <!-- End Nav -->

            <!-- Action -->
            <ul class="list-inline s-header__action s-header__action--lb">
                <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="#">En</a></li>
                <li class="s-header__action-item"><a class="s-header__action-link" href="#">Fr</a></li>
            </ul>
            <!-- End Action -->

            <!-- Action -->
            <ul class="list-inline s-header__action s-header__action--rb">
                <li class="s-header__action-item">
                    <a class="s-header__action-link" href="#">
                        <i class="g-padding-r-5--xs ti-facebook"></i>
                        <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                    </a>
                </li>
                <li class="s-header__action-item">
                    <a class="s-header__action-link" href="#">
                        <i class="g-padding-r-5--xs ti-twitter"></i>
                        <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                    </a>
                </li>
                <li class="s-header__action-item">
                    <a class="s-header__action-link" href="#">
                        <i class="g-padding-r-5--xs ti-instagram"></i>
                        <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                    </a>
                </li>
            </ul>
            <!-- End Action -->
        </div>
        <!-- End Overlay -->
    </header>
    <!--========== END HEADER ==========-->

    <!--========== SWIPER SLIDER ==========-->
    <div class="s-swiper js__swiper-one-item">
        <!-- Swiper Wrapper -->
        <div class="swiper-wrapper">
            <div class="g-fullheight--xs g-bg-position--center swiper-slide"
                style="background: url('{{asset('assets2/img/bg2.jpg')}}');">
                <div class="container g-text-center--xs g-ver-center--xs">
                    <div class="g-margin-b-30--xs">
                        <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Sistem Informasi <br> Tempat Wisata Di Bandung</h2>
                    </div>
                </div>
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide"
                style="background: url('{{asset('assets2/img/bg2.jpg')}}');">
                <div class="container g-text-center--xs g-ver-center--xs">
                    <div class="g-margin-b-30--xs">
                        <div class="g-margin-b-30--xs">
                                <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Nikmati Pengalaman <br> Berwisata Terbaik Anda</h1>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Swiper Wrapper -->

        <!-- Arrows -->
        <a href="javascript:void(0);"
            class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
        <a href="javascript:void(0);"
            class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
        <!-- End Arrows -->

        <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
            <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
            <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Selanjutnya</p>
        </a>
    </div>
    <!--========== END SWIPER SLIDER ==========-->


    <!--========== PAGE CONTENT ==========-->
    <!-- Features -->
    <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-text-center--xs g-margin-b-100--xs">
            <p
                class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">
                Selamat Datang</p>
            <h2 class="g-font-size-32--xs g-font-size-36--md">Ciptakan Pilihan Terbaik Anda<br> untuk memdapatkan Pengalaman yang Menyenangkan</h2>
        </div>
        <div class="row g-margin-b-60--xs g-margin-b-70--md">
            <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                <div class="clearfix">
                    <div class="g-media g-width-30--xs">
                        <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                            <i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
                        </div>
                    </div>
                    <div class="g-media__body g-padding-x-20--xs">
                        <h3 class="g-font-size-18--xs">Tata Letak Responsif</h3>
                        <p class="g-margin-b-0--xs">Kami Menggunakan sebuah teknik atau metode bagi web designer untuk membuat suatu layout 
                            website yang dapat menyesuaikan diri sesuai dengan ukuran layar pengguna</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                <div class="clearfix">
                    <div class="g-media g-width-30--xs">
                        <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                            <i class="g-font-size-28--xs g-color--primary ti-settings"></i>
                        </div>
                    </div>
                    <div class="g-media__body g-padding-x-20--xs">
                        <h3 class="g-font-size-18--xs">Tujuan Web</h3>
                        <p class="g-margin-b-0--xs">Tujuan Web Ini dibuat karna kami ingin mempermudahkan
                            kalian untuk mencari,melihat,dan memilih Objek Tempat Wisata Yang ada diBandung ini
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="clearfix">
                    <div class="g-media g-width-30--xs">
                        <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                            <i class="g-font-size-28--xs g-color--primary ti-ruler-alt-2"></i>
                        </div>
                    </div>
                    <div class="g-media__body g-padding-x-20--xs">
                        <h3 class="g-font-size-18--xs">Batasan</h3>
                        <p class="g-margin-b-0--xs">Website ini hanya menyajikan sistem informasi Tempat wisata yang hanya ada di Bandung
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- // end row  -->
        <!-- End Features -->

        
        
    <!-- Parallax -->
    </div>
    <div class="js__parallax-window" style="background: url({{asset('assets2/img/bg3.jpg')}}) 50% 0 no-repeat fixed;">
        <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-margin-b-80--xs">
                <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">Destinasi Wisata Di Bandung</h2>
            </div>
                <a href="{{url('/informasi')}}" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">Selengkapnya</a>
                
        </div>
    </div>
    <!-- End Parallax -->

    <!-- Culture -->
    <div class="g-promo-section">
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row">
                <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Tentang</h2>
                    </div>
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Bandung</h2>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <p class="g-font-size-18--xs">Bandung adalah ibu kota provinsi Jawa Barat, 
                        Indonesia serta menjadi kota terbesar ketiga di Indonesia setelah Jakarta dan Surabaya. 
                        Secara kepadatan kota ini merupakan kota terpadat ke-2 di Indonesia setelah Jakarta dengan kepadatan 
                        penduduk mencapai 15.051/km2. Kota ini terletak 140 km sebelah Tenggara Jakarta, dan merupakan kota 
                        terbesar di wilayah Pulau Jawa bagian selatan. Sedangkan wilayah Bandung Raya (Wilayah Metropolitan Bandung) 
                        merupakan metropolitan terbesar ketiga di Indonesia setelah Jabodetabek dan Gerbangkertosusila.</p>
                    <p class="g-font-size-18--xs"></p>
                </div>
            </div>
        </div>
        <div
            class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
            <img class="img-responsive" src="{{asset('assets2/img/aboutbandung.jpg')}}" alt="Image">
        </div>
    </div>
    <!-- End Culture -->

    <!-- Parallax -->
</div>
<div class="js__parallax-window" style="background: url({{asset('assets2/img/bg3.jpg')}}) 50% 0 no-repeat fixed;">
    <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-110--sm">
        <div class="g-margin-b-80--xs">
            <h2 class="g-font-size-20--xs g-font-size-30--sm g-font-size-50--md g-color--white">Pilih Wisata Terbaik Anda</h2>
        </div>            
    </div>
</div>
<!-- End Parallax -->

    <!-- News -->
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-text-center--xs g-margin-b-80--xs">
            <h2 class="g-font-size-32--xs g-font-size-36--md">Objek Wisata Terpopuler</h2>
        </div>
        <div class="row">
            <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                <!-- News -->
                <article>
                    <img class="img-responsive" src="{{asset('assets2/img/970x970/01.jpg')}}" alt="Image">
                    <div
                        class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                        <p
                            class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">
                            News</p>
                        <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="http://keenthemes.com/">Create
                                Something Great.</a></h3>
                        <p>The time has come to bring those ideas and plans to life.</p>
                    </div>
                </article>
                <!-- End News -->
            </div>
            <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                <!-- News -->
                <article>
                    <img class="img-responsive" src="{{asset('assets2/img/970x970/02.jpg')}}" alt="Image">
                    <div
                        class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                        <p
                            class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">
                            News</p>
                        <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="http://keenthemes.com/">Jacks of
                                All. Experts in All.</a></h3>
                        <p>The time has come to bring those ideas and plans to life.</p>
                    </div>
                </article>
                <!-- End News -->
            </div>
            <div class="col-sm-4">
                <!-- News -->
                <article>
                    <img class="img-responsive" src="{{asset('assets2/img/970x970/03.jpg')}}" alt="Image">
                    <div
                        class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                        <p
                            class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">
                            News</p>
                        <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="http://keenthemes.com/">Finding your
                                Perfect Place.</a></h3>
                        <p>The time has come to bring those ideas and plans to life.</p>
                    </div>
                </article>
                <!-- End News -->
            </div>
        </div>
    </div>
    <!-- End News -->

    <!-- Feedback Form -->
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-80--xs">
                <p
                    class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">
                    Umpan Balik</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md" id="hubungi">Send us a note</h2>
            </div>
            <form action="{{ route('umpanbalik.store') }}" method="post">
                @csrf
                <div class="row g-margin-b-40--xs">
                    <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                        <div class="g-margin-b-20--xs">
                            <input type="text"
                                class="form-control s-form-v2__input g-radius--50 @error('nama') is-invalid @enderror"
                                placeholder="* Name" name="nama">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="g-margin-b-20--xs">
                            <input type="email"
                                class="form-control s-form-v2__input g-radius--50 @error('nama') is-invalid @enderror"
                                placeholder="* Email" name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <input type="date"
                            class="form-control s-form-v2__input g-radius--50 @error('tanggal') is-invalid @enderror"
                            placeholder="* tanggal" name="tanggal">
                        @error('tanggal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <textarea
                            class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs @error('pesan') is-invalid @enderror"
                            name="pesan" rows="8" placeholder="* Your message"></textarea>
                        @error('pesan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="g-text-center--xs">
                    <button type="submit"
                        class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Feedback Form -->
    <!--========== END PAGE CONTENT ==========-->

  <!--========== FOOTER ==========-->
<footer class="g-bg-color--dark">
    <!-- Links -->
    <div class="g-hor-divider__dashed--white-opacity-lightest">
        <div class="container g-padding-y-80--xs">
            <div class="row">
                <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity"
                                href="https://1.envato.market/EA4JP">Home</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity"
                                href="https://1.envato.market/EA4JP">About</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity"
                                href="https://1.envato.market/EA4JP">Work</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity"
                                href="https://1.envato.market/EA4JP">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity"
                                href="https://1.envato.market/EA4JP">Twitter</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity"
                                href="https://1.envato.market/EA4JP">Facebook</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity"
                                href="https://1.envato.market/EA4JP">Instagram</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity"
                                href="https://1.envato.market/EA4JP">YouTube</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity"
                                href="https://1.envato.market/EA4JP">Subscribe to Our Newsletter</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity"
                                href="https://1.envato.market/EA4JP">Privacy Policy</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity"
                                href="https://1.envato.market/EA4JP">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div
                    class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                    <h3 class="g-font-size-18--xs g-color--white">Megakit</h3>
                    <p class="g-color--white-opacity">We are a creative studio focusing on culture, luxury, editorial
                        &amp; art. Somewhere between sophistication and simplicity.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="container g-padding-y-50--xs">
        <div class="row">
            <div class="col-xs-6">
                <a href="index.html">
                    <img class="g-width-50--xs g-height-auto--xs" src="{{asset('assets2/img/logo.jpg')}}"
                        alt="Megakit Logo">
                </a>
            </div>
            <div class="col-xs-6 g-text-right--xs">
                <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><a
                        href="http://keenthemes.com/preview/Megakit/">Megakit</a> Theme Powered by: <a
                        href="http://www.keenthemes.com/">KeenThemes.com</a></p>
            </div>
        </div>
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

    <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
    <!-- Vendor -->
    <script type="text/javascript" src="{{asset('assets2/vendor/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/vendor/jquery.migrate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/vendor/jquery.smooth-scroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/vendor/jquery.back-to-top.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/vendor/scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/vendor/swiper/swiper.jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/vendor/waypoint.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/vendor/counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/vendor/jquery.parallax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
    <script type="text/javascript" src="{{asset('assets2/vendor/jquery.wow.min.js')}}"></script>

    <!-- General Components and Settings -->
    <script type="text/javascript" src="{{asset('assets2/js/global.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/js/components/header-sticky.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/js/components/scrollbar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/js/components/magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/js/components/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/js/components/counter.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/js/components/portfolio-3-col.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/js/components/parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/js/components/google-map.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets2/js/components/wow.min.js')}}"></script>
    <!--========== END JAVASCRIPTS ==========-->

</body>
<!-- End Body -->
</html>