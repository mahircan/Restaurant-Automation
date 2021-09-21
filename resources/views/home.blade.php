<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Şahmeran Konak</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img width="200" height="200" src="assets/images/sahmeranlogo.jpg" align="klassy cafe html template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Ana Sayfa</a></li>
                        <li class="scroll-to-section"><a href="#about">Hakkımızda</a></li>

                        <li class="scroll-to-section"><a href="#menu">Menü</a></li>
                        <li class="scroll-to-section"><a href="#chefs">Şefler</a></li>
                        <li class="scroll-to-section"><a href="#goodplaces">Güzel Yerler</a></li>
                        <li class="scroll-to-section"><a href="#reservation">Rezervasyon</a></li>
                        <li>

                            @if (Route::has('login'))
                                <li class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                      <li>
                                          <x-app-layout>

                                          </x-app-layout>

                                      </li>
                                    @else
                            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Giriş</a></li>

                                        @if (Route::has('register'))
                                <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Kayıt</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            </li>
                    </ul>

                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4>Şahmeran Konak</h4>
                        <h6>En İyi Deneyim</h6>
                        <div class="main-white-button scroll-to-section">
                            <a href="#reservation">Rezervasyon Yap</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">
                    <div class="Modern-Slider">
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/otel-1.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/otel-2.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/otel-3.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/otel-4.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/otel-5.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Hakkımızda</h6>
                        <h2>Size Lezzetli Bir Hatıra Bırakıyoruz </h2>
                    </div>
                    <br>Yeşilyurt Köyü Kaz Dağlarının eteklerinde tam bir oksijen deposudur. <br><br>Tamamı taş dokudan oluşan mimarisi ve 550 yıla dayanan tarihi ile bölgenin nadide köylerinden biridir. <br><br> Köyün etrafını saran patika yollar, yürüyüş ve koşu severler için ideal bir parkur. Şifalı bitkileri, güzel kokular saçan çiçekleri ve havası ile köyümüz tam bir şifa kaynağıdır.<br><br> Şahmeran'ın denize olan mesafesi üç km.<br><br>  Bol çeşitli kahvaltımız ve restoran bölümümüzdeki farklı lezzetlerle
                    şarap tadımı yapabilirsiniz.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="right-content">
                    <div class="thumb">
                        <img src="assets/images/hakkımızda.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area Ends ***** -->
<br>
<br>
<br>
<br>
<!-- ***** Map Area Starts ***** -->
<div id="goodplaces">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4>Çevre Güzellikleri</h4>
                        <h6>Sizin için gidebileceğiniz güzel yerleri seçtik.</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">
                    <div class="Modern-Slider">
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <iframe src="https://www.google.com/maps/d/embed?mid=120iLPbQprK0IZnJn82Gr3ycsLl1j5JYs" width="1269" height="700"></iframe>
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <iframe src="https://www.google.com/maps/d/embed?mid=1qqDWLFpctyBsWVQdH9fhejST94m3lQ47" width="1269" height="700"></iframe>
                            </div>
                        </div>
                        <!-- // Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Map Banner Area End ***** -->

    @include("food")
    @include("foodchef")

@include("reservation")



<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="right-text-content">
                    <ul class="social-icons">

                        <li><a href="https://www.instagram.com/sahmeranyesilyurt/?hl=tr"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="logo">
                    <a href="index.html"><img width="150" height="125" src="assets/images/sahmeranlogo.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12">
                <div class="left-text-content">
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
                $("."+selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });

</script>
</body>
</html>
