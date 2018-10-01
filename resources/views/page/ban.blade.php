@extends('master-ban')
@section('name-ban', 'BAN ĐÀO TẠO')
@section('content')
<section class="main-ban">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                @include('sidebar.sidebar-ban')
                <!-- thông báo -->
                @include('include.alert')
                <!-- end -->
                <!-- tin tức -->
                @include('include.new')
                <!-- end -->
                <!-- Liên kết khác -->
                @include('include.link-dif')
                <!-- end -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content">

                @include('include.slide')
                <div class="row content-bot">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="col-xs-12 col-sm-12 col-md-7 col-md-offset-5">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="search" width="50px">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>

                        </div>
                        <!-- thông báo  -->
                        <div class="same-new">
                            <div class="title">
                                <div id="title">
                                    <img src="{{ asset('public/image/logo.png') }}" alt="" width="3%" class="pull-left">
                                    <span style="margin-left: 20px;">THÔNG BÁO</span>
                                </div>

                            </div>
                            <div class="content-same">
                                <i class="fas fa-caret-right"></i> <a href="">Nâng cao vai trò của Đoàn Thanh niên và Hội Sinh viên trong hoạt động khởi nghiệp và tìm kiếm việc làm của sinh viên</a><br>
                                <i class="fas fa-caret-right"></i> <a href="">Nâng cao vai trò của Đoàn Thanh niên và Hội Sinh viên trong hoạt động khởi nghiệp và tìm kiếm việc làm của sinh viên</a><br>
                                <i class="fas fa-caret-right"></i> <a href="">Nâng cao vai trò của Đoàn Thanh niên và Hội Sinh viên trong hoạt động khởi nghiệp và tìm kiếm việc làm của sinh viên</a><br>
                                <i class="fas fa-caret-right"></i> <a href="">Nâng cao vai trò của Đoàn Thanh niên và Hội Sinh viên trong hoạt động khởi nghiệp và tìm kiếm việc làm của sinh viên</a>
                            </div>

                        </div>
                        <!-- end-div -->
                        <!-- tin tức  -->
                        <div class="same-new">
                            <div class="title">
                                <div id="title">
                                    <img src="{{ asset('public/image/logo.png') }}" alt="" width="3%" class="pull-left">
                                    <span style="margin-left: 20px;">TIN TỨC</span>
                                </div>

                            </div>
                            <div class="content-same">
                                <i class="fas fa-caret-right"></i> <a href="">Nâng cao vai trò của Đoàn Thanh niên và Hội Sinh viên trong hoạt động khởi nghiệp và tìm kiếm việc làm của sinh viên</a><br>
                                <i class="fas fa-caret-right"></i> <a href="">Nâng cao vai trò của Đoàn Thanh niên và Hội Sinh viên trong hoạt động khởi nghiệp và tìm kiếm việc làm của sinh viên</a><br>
                                <i class="fas fa-caret-right"></i> <a href="">Nâng cao vai trò của Đoàn Thanh niên và Hội Sinh viên trong hoạt động khởi nghiệp và tìm kiếm việc làm của sinh viên</a><br>
                                <i class="fas fa-caret-right"></i> <a href="">Nâng cao vai trò của Đoàn Thanh niên và Hội Sinh viên trong hoạt động khởi nghiệp và tìm kiếm việc làm của sinh viên</a>
                            </div>

                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <img src="{{ asset('public/image/logo.png') }}" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                       <span class="title" style="font-weight: bold; color: white;">ẢNH</span>
                                   </div>
                               </div>
                           </div>
                           <div class="panel-body">
                            <div id="carousel-pager" class="carousel slide " data-ride="carousel" data-interval="5000">
                                <!-- Carousel items -->
                                <div class="carousel-inner vertical">
                                    <div class="active item">
                                        <img src="{{ asset('public/image/THONG BAO2.jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="0" width="100%">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('public/image/DAFCR (anh dai dien).jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="1" width="100%">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('public/image/Bieu mau hanh chinh.jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="2" width="100%">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end div -->

                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

</section>
<script>
    $(document).ready(function(){
        $('#parent').click(function(){
            $('#sub').fadeToggle();
            return false;
        });
    });
</script>

@endsection
