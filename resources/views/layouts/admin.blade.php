@extends('layouts.app')



@section('header')
    {{-- <header class="_header">
        <div class="container">
            <div class="_branding">
                <img src="{{ asset('images/banner.jpg') }}" alt="" class="_logo" />
            </div>
            <nav class="_nav">
                <ul class="_menu">
                    <!-- <li><a href="{{ route('home') }}">Home</a></li> -->
                    <!-- <li><a href="{{ route('') }}">Agents</a></li> -->
                </ul>
            </nav>
        </div>
    </header> --}}
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ route('admin.booking.index') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                 {{-- Right Side Of Navbar  --}}
                <ul class="nav navbar-nav navbar-right">

                    {{-- Authentication Links --}}

                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        {{--  <li><a href="{{ route('register') }}">Register</a></li>  --}}
                    @else

                        <li><a href="{{ route('admin.booking.index') }}">All Booking</a></li>

                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Types<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                <li><a href="{{ route('admin.Product.create') }}">Create Product</a></li> 
                                <li><a href="{{ route('admin.Product.index') }}">All Products</a></li> 
                                </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->user_name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    >Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                            </form>
                                             </li>
                                        </ul>
                                     </li>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('footer')
    <footer class="_footer adminFooter">
        <div class="container">
            <p class="_copyright">Copyright {{ date('Y') }}</p>
        </div>
    </footer>
@endsection