<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Unira Press Berita </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        {{-- <link rel="icon" type="image/x-icon" href="/assets/icon.ico" /> --}}

		<link rel="icon" type="image/x-icon" href="/assets/img/icon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="/assets/css/ticker-style.css">
            <link rel="stylesheet" href="/assets/css/flaticon.css">
            <link rel="stylesheet" href="/assets/css/slicknav.css">
            <link rel="stylesheet" href="/assets/css/animate.min.css">
            <link rel="stylesheet" href="/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="/assets/css/themify-icons.css">
            <link rel="stylesheet" href="/assets/css/slick.css">
            <link rel="stylesheet" href="/assets/css/nice-select.css">
            <link rel="stylesheet" href="/assets/css/style.css">
   </head>

   <body>
       
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
               
                {{-- <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="assets/img/hero/header_card.jpg" alt="">
                                </div>
                            </div>
                        </div>
                   </div>
                </div> --}}
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    {{-- <div class="sticky-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div> --}}
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    @include('component.newsNav')
                                </div>
                            </div>             
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Latest News</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                    <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                    <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        @foreach($singleNews as $a)
                            
                      
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="{{ asset('storage/' .$a->image) }}" alt="">
                                <div class="trend-top-cap">
                                    <span>{{ $a->kategoriBerita->nama_kategori }}</span>
                                    <h2><a href="/detailBerita/{{ $a->id }}">{{ $a->judul_berita }}</a></h2>
                                </div>
                            </div>
                        </div>
                         @endforeach
                        <!-- Trending Bottom -->
                        {{-- <div class="trending-bottom">
                           
                            @foreach($latestNews as $b)
                                
                            @endforeach
                            <div class="row">
                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="{{ asset('storage/' .$b->image) }}" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1">{{ $a->kategoriBerita->nama_kategori }}</span>
                                        <h4><a href="/detailBerita/{{ $b->id }}">{{ $b->judul_berita }}</a></h4>
                                    </div>
                                </div>
                                </div>
                               
                               
                            </div>
                        </div> --}}
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="trending-tittle">
                                    <strong>Top Views</strong>
                                    <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                    <div class="trending-animated">
                                        <ul id="js-news" class="js-hidden">
                                            <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                            <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                            <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        @foreach($topViews as $top)
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="{{ asset('storage/' .$top->image) }}" style="max-width: 10rem" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">{{ $top->kategoriBerita->nama_kategori }}</span>
                                <h4><a href="/detailBerita/{{ $top->id }}">{{ $top->judul_berita }}</a></h4>
                            </div>
                        </div>
                        
                        @endforeach
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
            
    <!-- End Weekly-News -->
   <!-- Whats New Start -->
    
    <!-- Whats New End -->
    <!--   Weekly2-News start -->
             
    <!-- End Weekly-News -->

    <!--  Recent Articles start -->
    <div class="recent-articles">
        <div class="container">
           <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Berita Terbaru</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">
                            @foreach($news as $c)
                            <div class="col-lg-6 mb-5 mb-lg-5">
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="{{ asset('storage/' .$c->image) }} " style="max-height: 18rem"  alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">{{ $c->kategoriBerita->nama_kategori }}</span>
                                    <h4><a href="/detailBerita/{{ $c->id }}">{{ $c->judul_berita }}</a></h4>
                                </div>
                            </div>
                        </div>
                            
                            @endforeach
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>           
    <!--Recent Articles End -->
    <!--Start pagination -->
    <div class="pagination-area pb-45 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                {{ $news->links() }}

                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End pagination  -->
    </main>
    
    @include('component.beritaFoot')
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/assets/js/popper.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="/assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="/assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="/assets/js/wow.min.js"></script>
		<script src="/assets/js/animated.headline.js"></script>
        <script src="/assets/js/jquery.magnific-popup.js"></script>

        <!-- Breaking New Pluging -->
        <script src="/assets/js/jquery.ticker.js"></script>
        <script src="/assets/js/site.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="/assets/js/jquery.scrollUp.min.js"></script>
        <script src="/assets/js/jquery.nice-select.min.js"></script>
		<script src="/assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="/assets/js/contact.js"></script>
        <script src="/assets/js/jquery.form.js"></script>
        <script src="/assets/js/jquery.validate.min.js"></script>
        <script src="/assets/js/mail-script.js"></script>
        <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/main.js"></script>
        
    </body>
</html>