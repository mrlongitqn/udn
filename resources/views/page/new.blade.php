@extends('master-new')
@section('content')
<div class="main-new">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <ul class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Sinh viên</a></li>
                    <li></li>
                </ul>
                <div class="new">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('public/image/bangvang.png') }}" alt="ss" class="img-responsive">
                        </div>
                        <div class="col-md-8" >
                            <div class="content" >
                                <a href="" class="text-justify">Hội nghị sơ kết giữa nhiệm kỳ của Đảng bộ Đại học Đà Nẵng và công bố Quyết định của Thành ủy chuẩn y PGS.TS. Nguyễn Ngọc Vũ giữ chức vụ Bí thư Đảng ủy nhiệm kỳ 2015-2020</a>
                                <p class="text-justify">Sáng ngày 18/9/2018, tại Hội trường Đại học Đà Nẵng (ĐHĐN) đã diễn ra Hội nghị sơ kết giữa nhiệm kỳ Đại hội Đảng bộ ĐHĐN lần thứ V, nhiệm kỳ 2015-2020 và công bố Quyết định của Thành ủy Đà Nẵng chuẩn y kết quả bầu PGS.TS. Nguyễn Ngọc Vũ, Giám đốc ĐHĐN...</p>
                                <a href="" class="pull-right" id="continue"> >>Xem tiếp</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="new">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('public/image/bangvang.png') }}" alt="ss" class="img-responsive">
                        </div>
                        <div class="col-md-8" >
                            <div class="content" >
                                <a href="" class="text-justify">Hội nghị sơ kết giữa nhiệm kỳ của Đảng bộ Đại học Đà Nẵng và công bố Quyết định của Thành ủy chuẩn y PGS.TS. Nguyễn Ngọc Vũ giữ chức vụ Bí thư Đảng ủy nhiệm kỳ 2015-2020</a>
                                <p class="text-justify">Sáng ngày 18/9/2018, tại Hội trường Đại học Đà Nẵng (ĐHĐN) đã diễn ra Hội nghị sơ kết giữa nhiệm kỳ Đại hội Đảng bộ ĐHĐN lần thứ V, nhiệm kỳ 2015-2020 và công bố Quyết định của Thành ủy Đà Nẵng chuẩn y kết quả bầu PGS.TS. Nguyễn Ngọc Vũ, Giám đốc ĐHĐN...</p>
                                <a href="" class="pull-right" id="continue"> >>Xem tiếp</a>
                            </div>
                        </div>
                    </div>

                </div>
                @include('include.same-new')

            </div>
            <!-- MAIN-RIGHT -->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 main-right">
                @include('sidebar.sidebar-new')

            </div>
        </div>
    </div>
</div>
@endsection
