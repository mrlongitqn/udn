@extends('master')

@section('content')
    <section class="main">
        <div class="container">
            <div class="row">
                <!-- MAIN-LEFT -->
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 main-left">
                    @include('include.slide')
                    <!-- <div class="clearfix"></div> -->
                    <!-- tab -->
                    <div class="nav-tabs">
                        <ul class="nav nav-pills">
                            <li class="active"><a data-toggle="pill" href="#tinmoi">TIN MỚI NHẤT</a></li>
                            <li><a data-toggle="pill" href="#kiemdinh">KIỂM ĐỊNH & ĐBCL</a></li>
                            <li><a data-toggle="pill" href="#thongbao">THÔNG BÁO</a></li>
                            <li><a data-toggle="pill" href="#thanhvien">ĐƠN VỊ THÀNH VIÊN</a></li>
                            <li><a data-toggle="pill" href="#tapchi">TẠP CHÍ KHCN</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="tinmoi" class="tab-pane fade in active">
                                <p><a href="">Khoa Hoá - Trường Đại học Bách khoa ĐHĐN hân hoan tổ chức Lễ Kỷ niệm 40 năm thành lập và phát triển</a></p>
                                <div class="row">
                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                        <img src="{{ asset('public/image/timoi/kgit340.jpg') }}" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 text-justify">
                                        <p>Nhằm đánh dấu chặng đường hoạt động và ghi nhận những thành tích đã đạt được trong công tác đào tạo, nghiên cứu khoa học và chuyển giao công nghệ; Vào lúc 8h00 ngày 15 tháng 09 năm 2018, khoa Hoá – Trường Đại học Bách khoa - Đại học Đà Nẵng...</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="clearfix"></div>
                            <div id="kiemdinh" class="tab-pane fade">
                                <img src="{{ asset('public/image/ttkdcl_680.png') }}" alt="" class="img-responsive" width="100%" height="auto">
                            </div>
                            <div id="thongbao" class="tab-pane fade">
                                <p><a href="">Khoa Hoá - Trường Đại học Bách khoa ĐHĐN hân hoan tổ chức Lễ Kỷ niệm 40 năm thành lập và phát triển</a></p>
                                <div class="row">
                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                        <img src="{{ asset('public/image/timoi/kgit340.jpg') }}" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 text-justify">
                                        <p>Nhằm đánh dấu chặng đường hoạt động và ghi nhận những thành tích đã đạt được trong công tác đào tạo, nghiên cứu khoa học và chuyển giao công nghệ; Vào lúc 8h00 ngày 15 tháng 09 năm 2018, khoa Hoá – Trường Đại học Bách khoa - Đại học Đà Nẵng...</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div id="thanhvien" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <h4 class="text-center text-primary">CÁC TRƯỜNG THÀNH VIÊN</h4>
                                        <div class="truong-tv">
                                            <img src="{{ asset('public/image/images.jpg') }}" alt="" class="img-responsive pull-left" width="50">
                                            <p><a href="">Trường Cao đẳng Công nghệ Thông tin</a></p>
                                            <p>Hòa Quý - Ngũ Hành Sơn - Đà Nẵng</p>

                                        </div>

                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-justify">
                                        <h4 class="text-center text-primary">CÁC TRUNG TÂM</h4>
                                        <div class="truong-tv">
                                            <img src="{{ asset('public/image/TT Hoclieu.jpg') }}" alt="" class="img-responsive pull-left" width="50">
                                            <p><a href="">Trung tâm Thông tin Học liệu</a></p>
                                            <p>91a Nguyễn Thị Minh Khai - TP Đà Nẵng</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tapchi" class="tab-pane fade">
                                <img src="{{ asset('public/image/tapchikhcn/tapchikhoahoc.jpg') }}" alt="">
                                <img src="{{ asset('public/image/tapchikhcn/TCGD.png') }}" alt="">
                                <img src="{{ asset('public/image/tapchikhcn/TCKH_CNVN.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- end-tab -->
                    <div class="banner">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <img src="{{ asset('public/image/tapchikhcn/TCKH_CNVN.jpg') }}" alt="" width="100%">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <img src="{{ asset('public/image/tapchikhcn/TCGD.png') }}" alt="" width="100%">
                            <img src="{{ asset('public/image/tapchikhcn/tapchikhoahoc.jpg') }}" alt="" width="100%">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <img src="{{ asset('public/image/tapchikhcn/TCGD.png') }}" alt="" width="100%">
                            <img src="{{ asset('public/image/tapchikhcn/tapchikhoahoc.jpg') }}" alt="" width="100%">

                        </div>
                        </div>

                    </div>
                </div>
                <!-- END-MAIN-LEFT -->
                <!-- MAIN-RIGHT -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 main-right">
                    <!-- TOP-PANEL -->
                    <!-- ONE -->
                    @include('sidebar.sidebar-home')
                </div>
            </div>
        </div>
    </section>
@endsection
