<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="{{ url('public/css/index.css') }}" rel="stylesheet" >
    <link href="{{ url('public/fontawesome/csss/css/fontawesome-all.css') }}" rel="stylesheet">
    <script src="{{ url('public/js/index.js') }}"></script>
    <!-- script src="{{ url('public/bootstrap/js/bootstrap.min.js') }}" rel="stylesheet"></script> -->
    <!-- link href="{{ url('public/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <!--<link href="{{ url('public/bootstrap/css/bootstrap.css') }}" rel="stylesheet"> -->
    <!-- script src="https://aj76ax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
</head>
<body>

    <header>
        <!-- header-top -->
        <section class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-sm-12 left">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('public/image/logo.png') }}" alt="logo">
                            <img src="{{ asset('public/image/dhdn.png') }}" alt="logo2">
                        </a>

                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <div class="name-ban pull-right">
                            <h1 style="padding-top: 50px;">
                                @yield('name-ban')
                            </h1>

                        </div>

                    </div>
                </div>
                <div class="row">
                    @include('menu.menu-ban')
                </div>

            </div>
        </section>
        <!-- end-header-top -->
        <!-- header-bot -->


    </header>
