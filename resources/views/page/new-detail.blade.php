@extends('master-new')
@section('content')
<div class="new-detail">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="content-new-detail">
                    content
                </div>
                @include('include.same-new')
                @include('include.different-new')

            </div>
            <!-- MAIN-RIGHT -->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 main-right">
                @include('sidebar.sidebar-new')

            </div>
        </div>
    </div>

</div>
@endsection
