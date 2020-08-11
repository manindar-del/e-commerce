@extends('layouts.app')

@push('header-bottom')

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" />
    <link rel="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css" />
    {{-- <link rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}" /> --}}
@endpush

@push('footer-top')
    <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>

    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.10/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('assets/js/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/jQuery.paginate.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script src="{{ asset('js/nouislider.min.js') }}"></script>
 
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  -->


@endpush

@section('header')
    <header class="stickyHeader">
        <div class="headerBlue">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 text-left">
                        <p><i class="fa fa-phone" aria-hidden="true"></i> Contact us on <a href="#">+91 90000 0000 0</a></p>
                    </div>
                    <div class="col-lg-6 col-md-12 text-md-left text-lg-right">
                        @auth
                            <nav class="agentMenu">
                                
                            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
 
                        <?php $total = 0 ?>
                        @foreach((array) session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
 
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
 
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ $details['photo'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            
            
 
@yield('scripts')

                                <a href="{{ route('logout') }}">Logout</a>


                        </nav>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </header>

    <header class="__header user_section" id="docHeader">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

              <div class="container __header__container">
                  <a href="{{ Auth::check() ? route('home.book-now') : route('home') }}" class="__header__logo">
                       <img src="{{ asset('assets/img/logo.png') }}" alt="" />
                     </a>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                 @if ('login' != Route::currentRouteName())
                  <ul class="__header__menu nav navbar-nav">
                    <li><a href="{{ Auth::check() ? route('home.book-now') : route('home') }}">Home</a></li>
                    
                </ul>
             @endif
        </div>
      </div>
 </header>


    <header class="__header fixed" id="docHeaderSticky">
        <div class="container __header__container">
            <a href="{{ Auth::check() ? route('home.book-now') : route('home') }}" class="__header__logo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="" />
            </a>
            <ul class="__header__menu">
                <li><a href="{{ Auth::check() ? route('home.book-now') : route('home') }}">Home</a></li>
            </ul>
        </div>
    </header>
@endsection

@section('footer')
    <footer class="__footer">
        <div class="__footer__top">
            <div class="container __footer__top__container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="__widget __widget__contact">
                            <h4 class="__widget__title">Phone Support</h4>
                            <div class="__widget__info">24 HOURS A DAY</div>
                            <a href="tel:+ 01345647745">+1234567890</a>
                        </div>
                        <div class="__footer__copyright">© Copyright {{ date('Y') }} {{ config('app.name') }}</div>
                    </div>
                    <div class="col-sm-4">
                        <div class="__widget __widget__social">
                            <h4 class="__widget__title">Connect With Us</h4>
                            <div class="__widget__info">SOCIAL MEDIA CHANNELS</div>
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="__widget __widget__newsletter">
                            <h4 class="__widget__title">Newsletter</h4>
                            <div class="__widget__info">SIGN UP FOR SPECIAL OFFERS</div>
                            <form class="form-inline">
                                <input class="form-control" name="emailm" placeholder="Your Email" required="" type="email">
                                <button class="click-btn btn btn-primary"><span class="chevron_left"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection

@push('footer-bottom')
    {{-- <!--Start of Tawk.to Script--> --}}
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    //     (function(){
    //         var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    //         s1.async=true;
    //         s1.src='https://embed.tawk.to/5c0a361befb17917781f58d3/default';
    //         s1.charset='UTF-8';
    //         s1.setAttribute('crossorigin','*');
    //         s0.parentNode.insertBefore(s1,s0);
    //     })();
    // </script>
    {{-- <!--End of Tawk.to Script--> --}}
    <!-- <script>
        function myFunction() {
            confirm("Want to Cancel This Booking");
        }
    </script> -->



    

@endpush