<script>
    $(document).ready(function(){
        $(".top-one>.panel-heading").click(function(){
            $(".top-one>.panel-body").fadeToggle();
            $(".top-one>.panel-heading").css("background", "orange");
            $(".top-two>.panel-heading").css("background", "#5189ee");
            $(".top-three>.panel-heading").css("background", "#5189ee");
            $(".top-two>.panel-body").hide();
            $(".top-three>.panel-body").hide();
        });
        $(".top-two>.panel-heading").click(function(){
            $(".top-two>.panel-body").fadeToggle();
            $(".top-two>.panel-heading").css("background", "orange");
            $(".top-one>.panel-heading").css("background", "#5189ee");
            $(".top-three>.panel-heading").css("background", "#5189ee");
            $(".top-one>.panel-body").hide();
            $(".top-three>.panel-body").hide();
        });
        $(".top-three>.panel-heading").click(function(){
            $(".top-three>.panel-body").fadeToggle();
            $(".top-three>.panel-heading").css("background", "orange");
            $(".top-one>.panel-heading").css("background", "#5189ee");
            $(".top-two>.panel-heading").css("background", "#5189ee");
            $(".top-one>.panel-body").hide();
            $(".top-two>.panel-body").hide();
        });

    });
</script>

<div class="panel panel-default top-one">
    <div class="panel-heading">
        <div class="row" >
            <span class="title" style="line-height: 20px;">TIN TỨC</span>
            <i class="fas fa-plus pull-right"></i>
        </div>
    </div>
    <div class="panel-body">
        <div id="carousel-pager" class="carousel slide " data-ride="carousel" data-interval="5000">
            <!-- Carousel items -->
            <div class="carousel-inner vertical">
                <div class="active item">
                    <img src="{{ asset('public/image/THONG BAO2.jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="0" width="100%">
                    <a href="">Thông báo tuyển dụng</a>
                </div>
                <div class="item">
                    <img src="{{ asset('public/image/DAFCR (anh dai dien).jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="1" width="100%">
                    <a href="">Thông báo cử viên chức dự thi thăng hạng lên chuyên viên...</a>
                </div>
                <div class="item">
                    <img src="{{ asset('public/image/Bieu mau hanh chinh.jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="2" width="100%">
                    <a href="">Hướng dẫn về việc đánh giá, phân loại và bổ sung lý lịch...</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- END-ONE -->
<!-- TWO -->
<div class="panel panel-default top-two">
    <div class="panel-heading">
        <div class="row">
            <span class="title" style="line-height: 20px;">THÔNG TIN TUYỂN SINH</span>
            <i class="fas fa-plus pull-right"></i>
        </div>
    </div>
    <div class="panel-body">
        <div id="carousel-pager" class="carousel slide " data-ride="carousel" data-interval="5000">
            <!-- Carousel items -->
            <div class="carousel-inner vertical">
                <div class="active item">
                    <img src="{{ asset('public/image/THONG BAO2.jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="0" width="100%">
                    <a href="">Thông báo tuyển dụng</a>
                </div>
                <div class="item">
                    <img src="{{ asset('public/image/DAFCR (anh dai dien).jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="1" width="100%">
                    <a href="">Thông báo cử viên chức dự thi thăng hạng lên chuyên viên...</a>
                </div>
                <div class="item">
                    <img src="{{ asset('public/image/Bieu mau hanh chinh.jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="2" width="100%">
                    <a href="">Hướng dẫn về việc đánh giá, phân loại và bổ sung lý lịch...</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- END-TWO -->

<!-- THREE -->
<div class="panel panel-default top-three">
    <div class="panel-heading">
        <div class="row">
            <span class="title" style="line-height: 20px;">THÔNG TIN CÁN BỘ</span>
            <i class="fas fa-plus pull-right"></i>
        </div>
    </div>
    <div class="panel-body">
        <div id="carousel-pager" class="carousel slide " data-ride="carousel" data-interval="5000">
            <!-- Carousel items -->
            <div class="carousel-inner vertical">
                <div class="active item">
                    <img src="{{ asset('public/image/THONG BAO2.jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="0" width="100%">
                    <a href="">Thông báo tuyển dụng</a>
                </div>
                <div class="item">
                    <img src="{{ asset('public/image/DAFCR (anh dai dien).jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="1" width="100%">
                    <a href="">Thông báo cử viên chức dự thi thăng hạng lên chuyên viên...</a>
                </div>
                <div class="item">
                    <img src="{{ asset('public/image/Bieu mau hanh chinh.jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="2" width="100%">
                    <a href="">Hướng dẫn về việc đánh giá, phân loại và bổ sung lý lịch...</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- END-THREE -->

<!-- END-TOP-PANEL -->

<!-- PANEL-1 -->
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <img src="{{ asset('public/image/logo.png') }}" alt="" class="img-responsive">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-9 col-lg-9">
             <span class="title">TIN NỔI BẬT</span>
         </div>
     </div>
 </div>
 <div class="panel-body">
    <div id="carousel-pager" class="carousel slide " data-ride="carousel" data-interval="5000">
        <!-- Carousel items -->
        <div class="carousel-inner vertical">
            <div class="active item">
                <img src="{{ asset('public/image/THONG BAO2.jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="0" width="100%">
                <a href="">Thông báo tuyển dụng</a>
            </div>
            <div class="item">
                <img src="{{ asset('public/image/DAFCR (anh dai dien).jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="1" width="100%">
                <a href="">Thông báo cử viên chức dự thi thăng hạng lên chuyên viên...</a>
            </div>
            <div class="item">
                <img src="{{ asset('public/image/Bieu mau hanh chinh.jpg') }}" class="img-responsive" data-target="#carousel-main" data-slide-to="2" width="100%">
                <a href="">Hướng dẫn về việc đánh giá, phân loại và bổ sung lý lịch...</a>
            </div>
        </div>
    </div>

</div>
</div>
<!-- END-PANEL-1 -->

<!-- PANEL-2 -->
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <img src="{{ asset('public/image/logo.png') }}') }}" alt="" class="img-responsive">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-9 col-lg-9">
             <span class="title">HÌNH ẢNH</span>
         </div>
     </div>

 </div>
 <div class="panel-body">
    <img src="{{ asset('public/image/pbgdpl.gif') }}" alt="" class="img-responsive" width="100%">
</div>
</div>
<img src="{{ asset('public/image/sidebar-new-image.png') }}" alt="">
<img src="{{ asset('public/image/sidebar-new-image2.jpg') }}" alt="">
<!-- END-PANEL-2 -->


