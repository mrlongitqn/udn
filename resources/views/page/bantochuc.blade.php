@extends('master-ban')
@section('title', 'BAN TỔ CHỨC CÁN BỘ')
@section('name-ban', 'BAN TỔ CHỨC CÁN BỘ')
@section('content')
<div class="main-tccb">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                @include('include.slide')
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        @include('include.new')
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        @include('include.alert')
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="margin-top: 85px;">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search" width="50px">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
                <br>
                @include('sidebar.sidebar-ban')
            </div>
        </div>

    </div>
</div>
<script>
    $(document).ready(function(){
        $('#parent').click(function(){
            $('#sub').fadeToggle();
            return false;
        });
    });
</script>
@endsection
