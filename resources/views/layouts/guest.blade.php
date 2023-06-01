<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Font Imports -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Noto+Serif:ital,wght@1,700&display=swap"
    rel="stylesheet"
  />
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,700;1,400&family=Maitree:wght@300;400;500;600;700&family=Crete+Round:ital,wght@1,400&display=swap" rel="stylesheet">


  <!-- Core Style -->
  <link rel="stylesheet" href="{{ url("build/assets/all/style.css")}}" />
  <!-- Font Icons -->
  <link rel="stylesheet" href="{{ url("build/assets/all/css/font-icons.css")}}" />
  <!-- Plugins/Components CSS -->
  <link rel="stylesheet" href="{{ url("build/assets/all/css/swiper.css")}}" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ url("build/assets/all/css/custom.css")}}" />

  <!-- Styles -->
  @livewireStyles

  <style>
    @media (min-width: 992px) {
      .block-nav-header-2 #top-bar.transparent-topbar {
        background: transparent !important;
        z-index: 399;
        border-bottom: 0;
      }

      .block-nav-header-2 .primary-menu {
        border-top: 1px solid rgba(255, 255, 255, 0.3);
      }

      .block-nav-header-2
        .transparent-topbar
        + .transparent-header
        + #content {
        margin-top: -163px; /*  #header(height) + #top-bar(height) */
      }
    }

    .block-nav-header-2 .dark .top-links li > a,
    .block-nav-header-2 .dark #top-social li a {
      color: #f5f5f5;
    }

    .block-nav-header-2 .dark #top-social li,
    .block-nav-header-2 .top-links-item {
      border-left: 0;
    }

    @media (min-width: 992px) {
      .morph-marker {
        --cnvs-morph-height: 3px;
        --cnvs-morph-duration: 0.3s;
        position: absolute;
        display: block;
        background: var(--cnvs-themecolor);
        height: var(--cnvs-morph-height);
        border-radius: var(--bs-border-radius);
        transition: all var(--cnvs-morph-duration);
      }

      .morph-bg .morph-marker {
        --cnvs-morph-height: 100%;
        opacity: 0.1;
        bottom: 0 !important;
      }

      .morph-bg .menu-link {
        position: relative;
        --cnvs-primary-menu-padding-y: 11px;
        --cnvs-primary-menu-hover-color: var(--cnvs-primary-menu-color);
        z-index: 1;
      }
    }

    <!--footer-- > .widget_links li a {
      display: flex;
      justify-content: space-between;
      flex: 1 1 auto;
      font-size: 1.275rem;
      padding: 0.25rem 0;
    }

    .widget_links li:last-child a {
      padding-bottom: 0;
    }

    .widget_links li a,
    .widget_links li a i {
      transition: transform 0.3s;
    }

    .widget_links li a:hover {
      color: var(--cnvs-themecolor);
      transform: translateX(-5px);
    }

    .widget_links li a:hover i {
      transform: scale(1.5);
    }
    :root {
    --cnvs-primary-font: 'Maitree', serif;
  }

  .promo-users {
    opacity: 0.1;
    --cnvs-promo-users-img-pos-x: 0;
    --cnvs-promo-users-img-pos-y: 0;
  }

  .promo-users img {
    position: absolute;
    top: var(--cnvs-promo-users-img-pos-y);
    left: var(--cnvs-promo-users-img-pos-x);
    bottom: var(--cnvs-promo-users-img-pos-y);
    right: var(--cnvs-promo-users-img-pos-x);
  }

  .promo-users img:nth-child(1) {
    --cnvs-promo-users-img-pos-x: 13%;
    --cnvs-promo-users-img-pos-y: -6%;
  }

  .promo-users img:nth-child(2) {
    --cnvs-promo-users-img-pos-x: 4%;
    --cnvs-promo-users-img-pos-y: 49%;
  }

  .promo-users img:nth-child(3) {
    left: auto;
    --cnvs-promo-users-img-pos-x: 2%;
    --cnvs-promo-users-img-pos-y: 0%;
  }

  .promo-users img:nth-child(4) {
    left: auto;
    top: auto;
    --cnvs-promo-users-img-pos-x: 0;
    --cnvs-promo-users-img-pos-y: 3%;
  }

  .promo-users img:nth-child(5) {
    top: auto;
    --cnvs-promo-users-img-pos-x: 17%;
    --cnvs-promo-users-img-pos-y: 3%;
  }

  @media (min-width: 768px) {
    .promo-users {
      opacity: 1;
    }
  }

  .file-caption.icon-visible .file-caption-name {
			font-family: 'Lato', sans-serif;
			color: #666;
		}
		.form-process {
			position: absolute;
			-webkit-transition: all .3s ease;
			-o-transition: all .3s ease;
			transition: all .3s ease;
			background-image: none;
		}

		.form-process > div { background-color: #999;  }

		.form-process,
		#template-wedding-submitted,
		.template-wedding-complete .form-process {
			display: none;
			opacity: 0;
			background-color: rgba(255,255,255,0.7);
		}

		.template-wedding-processing .form-process {
			display: block;
			opacity: 1;
		}

		.divider.divider-center.divider-sm:before,
		.divider.divider-center.divider-sm:after { border-color: #CCC; }

		.btn-group label.error {
			display: block !important;
			text-transform: none;
			position: absolute;
		    bottom: -34px;
		    left: 0;
		    margin-bottom: 10px;
		}

		.btn-group input.valid ~ label.error,
		.btn-group input[type="text"] ~ label.error,
		.btn-group input[type="email"] ~ label.error,
		.btn-group input[type="number"] ~ label.error,
		.btn-group select ~ label.error { display: none !important; }


  </style>
</head>

<body class="stretched block-nav-header-2">
  <!-- Document Wrapper ============================== -->
  <div id="wrapper">
    <!-- Top Bar
  ============================================= -->
    <div id="top-bar" class="transparent-topbar dark py-md-2">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-3 col-md-2">
            <div
              class="top-links d-flex justify-content-center justify-content-lg-start"
            >
            <ul class="top-links-container">
              @if(app()->getLocale() =='en') 
              <li class="top-links-item">
                <a href="{{ route('front.changeLang','en') }}">en</a>
                <ul class="top-links-sub-menu" style="width: 53px; left: 0">
                  <li class="top-links-item"><a href="{{ route('front.changeLang','id') }}">id</a></li>
                </ul>
              </li>
              @else
              <li class="top-links-item">
                <a href="{{ route('front.changeLang','id') }}">id</a>
                <ul class="top-links-sub-menu" style="width: 53px; left: 0">
                  <li class="top-links-item"><a href="{{ route('front.changeLang','en') }}">en</a></li>
                </ul>
              </li>
              @endif
              
            </ul>
            </div>
            <!-- .top-links end -->
          </div>

          <div class="col-12 col-lg-6 col-md-8">
            <!-- Top Links
          ============================================= -->
            <div class="top-links">
              <ul class="top-links-container">
                <li class="px-1 top-links-item ls-2">
                  <a href="/">Home</a>
                </li>                
                <!-- <li class="px-1 top-links-item ls-2">
                  <a href="#">Contact</a>
                </li> -->
                <li class="px-1 top-links-item ls-2">
                  <a href="/faqs">FAQs</a>
                </li>
              </ul>
            </div>
            <!-- .top-links end -->
          </div>

          <div class="col-12 col-lg-3 col-md-2">
            <!-- Top Social
          ============================================= -->
            <ul
              id="top-social"
              class="justify-content-center justify-content-lg-end"
            >
              <li>
                <a
                  href="https://t.me/TopBottomSignal"
                  target="_blank"
                  class="h-bg-telegram"
                  ><span class="ts-icon"
                    ><i class="fa-brands fa-telegram"></i></span
                  ><span class="ts-text">Telegram Signal Free</span></a
                >
              </li>
            </ul>
            <!-- #top-social end -->
          </div>
        </div>
      </div>
    </div>
    <!-- #top-bar end -->

    <!-- Header
  ============================================= -->
    <header id="header" class="transparent-header dark">
      <div id="header-wrap">
        <div class="container">
          <div class="header-row justify-content-lg-between">
            <!-- Logo
          ============================================= -->
            <div id="logo" class="me-lg-0">
              <a href="/">
                <img
                  class="logo-default"
                  srcset="
                  {{ url("build/assets/all/images/logo-trading-journey.png")}},
                  {{ url("build/assets/all/images/logo-trading-journey.png 2x")}}
                  "
                  src="{{ url("build/assets/all/images/logo-trading-journey.png")}}"
                  alt="Trading Journey Logo"
                />
                <img
                  class="logo-dark"
                  srcset="
                  {{ url("build/assets/all/images/logo-trading-journey.png")}},
                  {{ url("build/assets/all/images/logo-trading-journey.png 2x")}}
                  "
                  src="{{ url("build/assets/all/images/logo-trading-journey.png")}}"
                  alt="Trading Journey Logo"
                />
              </a>
            </div>
            <!-- #logo end -->

            <div class="header-misc">
              <!-- Top Search
            ============================================= -->
              {{-- <div id="top-search" class="header-misc-icon">
                <a href="#" id="top-search-trigger"
                  ><i class="uil uil-search"></i><i class="bi-x-lg"></i
                ></a>
              </div> --}}
              <!-- #top-search end -->

              <!-- Top Cart
            ============================================= -->
            {{-- <div id="top-cart" class="header-misc-icon">
              <a href="#" id="top-cart-trigger"
                ><i class="uil uil-shopping-bag"></i
                ><span class="top-cart-number">5</span></a
              >
              <div class="top-cart-content">
                <div class="top-cart-title">
                  <h4>Shopping Cart</h4>
                </div>
                <div class="top-cart-items">
                  <div class="top-cart-item">
                    <div class="top-cart-item-image">
                      <a href="#"
                        ><img
                          src="images/shop/small/1.jpg"
                          alt="Blue Round-Neck Tshirt"
                      /></a>
                    </div>
                    <div class="top-cart-item-desc">
                      <div class="top-cart-item-desc-title">
                        <a href="#">Blue Round-Neck Tshirt with a Button</a>
                        <span class="top-cart-item-price d-block"
                          >$19.99</span
                        >
                      </div>
                      <div class="top-cart-item-quantity">x 2</div>
                    </div>
                  </div>
                  <div class="top-cart-item">
                    <div class="top-cart-item-image">
                      <a href="#"
                        ><img
                          src="images/shop/small/6.jpg"
                          alt="Light Blue Denim Dress"
                      /></a>
                    </div>
                    <div class="top-cart-item-desc">
                      <div class="top-cart-item-desc-title">
                        <a href="#">Light Blue Denim Dress</a>
                        <span class="top-cart-item-price d-block"
                          >$24.99</span
                        >
                      </div>
                      <div class="top-cart-item-quantity">x 3</div>
                    </div>
                  </div>
                </div>
                <div class="top-cart-action">
                  <span class="top-checkout-price">$114.95</span>
                  <a href="#" class="m-0 button button-3d button-small"
                    >View Cart</a
                  >
                </div>
              </div>
            </div> --}}
              <!-- #top-cart end -->
            </div>

            <!--New-->
            <!-- Primary Navigation icon in mobile ============================================= -->
            <div class="primary-menu-trigger">
              <button
                class="cnvs-hamburger"
                type="button"
                title="Open Mobile Menu"
              >
                <span class="cnvs-hamburger-box"
                  ><span class="cnvs-hamburger-inner"></span
                ></span>
              </button>
            </div>

            <!-- Primary Navigation
      ============================================= -->
      <form method="POST" action="{{ route('logout') }}">
        @csrf
            <nav class="primary-menu">
              <ul class="menu-container">
                <li class="menu-item current">
                  <a class="menu-link" href="/"><div>Home</div></a>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="#"><div>Expert Advisor</div></a>
                  <ul class="sub-menu-container">
                    <li class="menu-item">
                      <a class="menu-link" href="/euro-swing-master/euro-swing-master-n2i8j"><div>Euro Swing Master</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="/golden-trend/golden-trend-8kkbd"><div>Golden Trend</div></a>
                    </li>
                  </ul>
                </li>    
                @auth                
                <li class="menu-item">                  
                  <a class="menu-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                  this.closest('form').submit();"><div>Logout</div></a>                  
                </li>                    
                @else     
                <li class="menu-item">
                  <a class="menu-link" href="{{ route('login') }}"><div>Login</div></a>
                </li>
                @endauth              
                <div class="morph-marker"></div>
              </ul>
            </nav>    
          </form>       
            <!-- #primary-menu end -->

            <form class="top-search-form" action="#" method="get">
              <input
                type="text"
                name="q"
                class="form-control"
                value=""
                placeholder="Type &amp; Hit Enter.."
                autocomplete="off"
              />
            </form>
          </div>
        </div>
      </div>
      <div class="header-wrap-clone"></div>
    </header>
    <!-- #header end -->

    <!-- Content
  ============================================= -->
    <section
      id="content"
      style="
        background: linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0.95),
            rgba(0, 0, 0, 0.6)
          ),
          url('{{ url("build/assets/all/images/blocks/preview/hero-10/main.jpg")}}') no-repeat center /
            cover;
      "
    >
          <div class="py-0 content-wrap dark">
              <div class="text-center row justify-content-center align-items-center min-vh-25">                  
                  {{-- <h1 class="display-1 fw-bold">Industry-leading 
                      <div class="text-black badge bg-hijau-stabilo" style="width: 33rem;">
                        Expert Advisors 
                      </div>
                      For <b></b>
                      MetaTrader 4/5 <b></b>                        
                  </h1>           --}}
                                            
              </div>                
              {{-- <div class="row">
                <div class="col-6">
                  <div class="p-1 center"><img src="{{ url("build/assets/all/images/mql5.webp")}}" alt="..."></div>
                </div>
                <div class="col-6">
                  <div class="p-1 center"><img src="{{ url("build/assets/all/images/mt4.webp")}}" alt="..."></div>
                </div>
                <div class="col-6">
                  <div class="p-1 center"><img src="{{ url("build/assets/all/images/mt5-logo3.webp")}}" alt="..."></div>
                </div>
                <div class="col-6">
                  <div class="p-1 center"><img src="{{ url("build/assets/all/images/myfxbook.webp")}}" alt="..."></div>
                </div>
              </div>                                       --}}
          </div>  
                 
      </div>
      <!-- #blade content start -->
      {{ $slot }}  
      <!-- #blade content end -->
    </section>
    <!-- #content end -->
   

    <!-- Footer  ========================= -->
    <footer id="footer" class="dark">
      <div class="container">
        <!-- Footer Widgets
      ============================================= -->
        <div class="footer-widgets-wrap">
          <div class="row col-mb-50">
            <div class="col-lg-8">
              <div class="row col-mb-50">
                <div class="col-md-4">
                  <div class="widget">                    

                    <p>
                      Industry-leading   <strong>Expert Advisors</strong>
                      <strong>For MetaTrader 4</strong> &amp;
                      <strong>MetaTrader 5</strong>
                    </p>

                    <div
                      style="
                        background: url('{{ url("build/assets/all/images/world-map.png")}}') no-repeat
                          center center;
                        background-size: 100%;
                      "
                    >                      
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="widget widget_links">
                    <h4>Jump In</h4>

                    <ul>
                      <li>
                        <a href="/"
                          >Home</a
                        >
                      </li>
                      <li>
                        <a
                          href="/euro-swing-master/euro-swing-master-n2i8j"
                          >Euro Swing Master EA</a
                        >
                      </li>
                      <li>
                        <a
                          href="/golden-trend/golden-trend-8kkbd"
                          >Golden Trend EA</a
                        >
                      </li>
                      <li>
                        <a href="/faqs"
                          >FAQs</a
                        >
                      </li>                        
                    </ul>
                  </div>
                </div>

                <div class="col-md-4">                  
                  <div class="counter counter-small">
                    <span
                      data-from="0"
                      data-to="100"
                      data-refresh-interval="80"
                      data-speed="3000"
                      data-comma="true"
                    ></span>
                  </div>
                  <h5 class="mb-0">Clients</h5>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="row col-mb-50">
                <div class="col-md-4 col-lg-12">
                  <div class="widget">
                    <div class="row col-mb-30">
                      <div class="col-lg-6">                        
                      </div>                      
                    </div>
                  </div>
                </div>          
              </div>
            </div>
          </div>
        </div>
        <!-- .footer-widgets-wrap end -->
      </div>

       <!-- Copyrights
    ============================================= -->
    <div id="copyrights">
      <div class="container">
        <div class="row col-mb-30">
          <div class="text-center col-md-6 text-md-start">
            Copyrights &copy; 2023 All Rights Reserved by TradingJourney.Id.<br />
            <div class="copyright-links">
              <a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a>
            </div>
          </div>

          <div class="text-center col-md-6 text-md-end">
            <div class="mb-2 d-flex justify-content-center justify-content-md-end">              
              <a href="https://t.me/TopBottomSignal" class="border-transparent social-icon si-small h-bg-telegram">
                <i class="fa-brands fa-telegram"></i>
                <i class="fa-brands fa-telegram"></i>
              </a>
            </div>

            <i class="bi-envelope"></i> admin@tradingjourney.id            
          </div>
          
        </div>
        <div class="text-center col-md-12 text-md-start">
          Disclaimer<br />
          The information provided on this website is general in nature only and does not constitute personal financial advice. Before acting on any information on this website you should consider the appropriateness of the information having regard to your objectives, financial situation and needs. Investing in CFDs and Margin FX Contracts carries significant risks and is not suitable for all investors. You may lose more than your initial deposit. You don’t own, or have, any interest in the underlying assets. We recommend that you seek independent advice and ensure fully understand the risks involved before trading. It is important that you read and consider disclosure documents before you acquire any product listed on the website.
        </div>
      </div>
    </div>
    <!-- #copyrights end -->
    </footer>
    <!-- #footer end -->
  </div>
  <!-- #wrapper end -->

  <!-- Go To Top
	============================================= -->
  <div id="gotoTop" class="uil uil-angle-up"></div>
<!-- JavaScripts
	============================================= -->
  <script src="{{ url("build/assets/all/js/jquery.js")}}"></script>
  <script src="{{ url("build/assets/all/js/functions.js")}}"></script>  
  <script src="{{ url("build/assets/all/js/plugins.counter.js")}}"></script>
  <script src="{{ url("build/assets/all/js/plugins.bootstrap.js")}}"></script>
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <!--  Placeholder JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.7/holder.min.js"></script>

  <script>
    jQuery(window).on("load", function () {
      jQuery(".primary-menu").each(function () {
        let menuEl = jQuery(this),
          marker = menuEl.find(".morph-marker"),
          current = menuEl.find(".current");

        // Initialize the marker position and the active class
        current.addClass("active");

        marker.css({
          // Place the marker in the middle of the border
          bottom: -(marker.height() / 2),
          left: current.position().left,
          width: current.outerWidth(),
        });

        if (Modernizr.csstransitions) {
          // console.log("using css3 transitions");
          menuEl.find(".menu-item").mouseover(function () {
            var self = jQuery(this),
              offsetLeft = self.position().left,
              // Use the element under the pointer OR the current page item
              width = self.outerWidth() || current.outerWidth(),
              // Ternary operator, because if using OR when offsetLeft is 0, it is considered a falsy value, thus causing a bug for the first element.
              left =
                offsetLeft == 0 ? 0 : offsetLeft || current.position().left;
            // Play with the active class
            menuEl.find(".active").removeClass("active");
            self.addClass("active");
            marker.css({
              left: left,
              width: width,
            });
          });

          // When the mouse leaves the menu
          menuEl.find(".menu-container").mouseleave(function () {
            // remove all active classes, add active class to the current page item
            menuEl.find(".active").removeClass("active");
            current.addClass("active");
            // reset the marker to the current page item position and width
            marker.css({
              left: current.position().left,
              width: current.outerWidth(),
            });
          });
        } else {
          menuEl.find(".menu-item").mouseover(function () {
            var self = jQuery(this),
              offsetLeft = self.position().left,
              // Use the element under the pointer OR the current page item
              width = self.outerWidth() || current.outerWidth(),
              // Ternary operator, because if using OR when offsetLeft is 0, it is considered a falsy value, thus causing a bug for the first element.
              left =
                offsetLeft == 0 ? 0 : offsetLeft || current.position().left;
            // Play with the active class
            menuEl.find(".active").removeClass("active");
            self.addClass("active");
            marker.stop().animate(
              {
                left: left,
                width: width,
              },
              300
            );
          });

          // When the mouse leaves the menu
          menuEl.find(".menu-container").mouseleave(function () {
            // remove all active classes, add active class to the current page item
            menuEl.find(".active").removeClass("active");
            current.addClass("active");
            // reset the marker to the current page item position and width
            marker.stop().animate(
              {
                left: current.position().left,
                width: current.outerWidth(),
              },
              300
            );
          });
        }
      });
    });
    (function ($) {
          // Write your jQuery Codes here
          // $(document).ready() etc. or Plugin Initializations
          $(document).ready(function () {
                    // Handler for .ready() called.
                    $('html, body').animate({
                        scrollTop: $('#sini').offset().top
                    }, 'slow');
                });
          })(jQuery);
  </script> 

</body>

</html>
