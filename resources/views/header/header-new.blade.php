<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài viết</title>
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
    <!-- script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
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
                    <div class="col-md-6 col-xs-12 col-sm-12 right">
                        <div class="menu-nho">
                            <ul class="list-inline">
                                <li><a href="">Tài nguyên số</a></li>
                                <li><a href="">Lịch tuần</a></li>
                                <li><a href="">Danh bạ</a></li>
                                <li><a href="">Văn bản</a></li>
                                <li><a href="">Email</a></li>
                                <li><a href="">Góp ý</a></li>
                                <li><a href="">Hồ sơ web</a></li>
                            </ul>
                        </div>
                        <div class="language pull-right">
                            <select name="language" id="language">
                                <option value="english"><a href=""><img src="img/english.png" alt="">English</a></option>
                                <option value="vietnamese"><a href=""><img src="img/vietnam.png" alt=""></a>Tiếng Việt</option>
                            </select><br>

                        </div>
                        <div class="clearfix"></div>
                        <img src="{{ asset('public/image/new_bg.png') }}" alt="tintuc" class="pull-right">

                    </div>
                </div>
            </div>
        </section>
        <!-- end-header-top -->
        <!-- header-bot -->
        @include('menu.menu-new')
