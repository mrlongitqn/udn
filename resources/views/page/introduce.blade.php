@extends('master')
@section('content')
<section class="content">
    <div class="container">
        <div class="row">
            <!-- sidebar-intro -->
            @include('sidebar.sidebar-intro')
            <!-- end -->
            <!-- content -->
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <ul class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Sinh viên</a></li>
                    <li></li>
                </ul>
                <div class="content-intro">
                    áhdhashdh
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
