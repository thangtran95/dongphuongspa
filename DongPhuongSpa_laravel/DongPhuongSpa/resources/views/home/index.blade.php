@extends('home.layout.master')
@section('title') Đông Phương Spa @endsection
@section('index')
    @include('home.layout.banner')
    <div class="mas-the-rel">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box-pic">
                        <img src="{{asset('images/images_index')}}/focus-5.jpg" class="img-responsive">
                        <div class="txt-box-pic">
                            <a href="#"><h4>Massages</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-pic">
                        <img src="{{asset('images/images_index')}}/focus-10.jpg" class="img-responsive">
                        <div class="txt-box-pic">
                            <a href="#"><h4>Chăm sóc da mặt</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-pic">
                        <img src="{{asset('images/images_index')}}/focus-6.jpg" class="img-responsive">
                        <div class="txt-box-pic">
                            <a href="#"><h4>Chăm sóc toàn thân</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="txt-services">
                <h4>Đông Phương-Spa</h4>
                <h1>Mang lại vẻ đẹp hoàn hảo cho bạn</h1>
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="">
                <div class="col-md-2">
                    <div class="box-the-best">
                        <img src="{{asset('images/images_index')}}/service-1.png" class="img-responsive">
                        <h4>Trang điểm</h4>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box-the-best">
                        <img src="{{asset('images/images_index')}}/service-2.png" class="img-responsive">
                        <h4>Tắm muối khoáng</h4>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box-the-best">
                        <img src="{{asset('images/images_index')}}/service-3.png" class="img-responsive">
                        <h4>Yoga thư giãn</h4>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box-the-best">
                        <img src="{{asset('images/images_index')}}/service-4.png" class="img-responsive">
                        <h4>Mặt nạ thiên nhiên</h4>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box-the-best">
                        <img src="{{asset('images/images_index')}}/service-5.png" class="img-responsive">
                        <h4>Chăm sóc tóc</h4>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box-the-best">
                        <img src="{{asset('images/images_index')}}/service-6.png" class="img-responsive">
                        <h4>Tinh dầu</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="working-hours">
        <div class="container time-table">
            <div class="col-md-4 box-1-time-table">
                <div class="txt-title-box-1">
                    <h5>Thời gian</h5>
                    <h2>Giờ làm việc</h2>
                    <p>Đông Phương - Spa hân hạnh phục vụ quý khách trong những khung giờ sau</p>
                </div>
                <div class="row txt-left-box-1">
                    <div class="col-xs-6">
                        <h6>Thứ Hai-Thứ Sáu:</h6>
                    </div>
                    <div class="col-xs-6" align="right">
                        <h6>8:00 - 17:00</h6>
                    </div>
                </div>
                <div class="row txt-right-box-1">
                    <div class="col-xs-6">
                        <h6>Chủ nhật:</h6>
                    </div>
                    <div class="col-xs-6" align="right">
                        <h6>Nghỉ</h6>
                    </div>
                </div>

            </div>
            <div class="col-md-4 hidden-sm"></div>
            <div class="col-md-4 box-2-time-table">
                <div class="row">
                    <form class="form-inline" action="/action_page.php">
                        <div class="form-group col-xs-6 ed-input-form">
                            <input type="text" class="form-control" id="name" placeholder="Tên">
                        </div>
                        <div class="form-group col-xs-6 ed-input-form">
                            <input type="text" class="form-control" id="surname" placeholder="Họ">
                        </div>
                        <div class="form-group col-xs-6 ed-input-form">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group col-xs-6 ed-input-form">
                            <input type="text" class="form-control" id="subject" placeholder="Dịch vụ">
                        </div>
                        <div class="form-group col-xs-12 txtarea">
                            <textarea class="form-control" rows="4" id="comment" placeholder="Tin nhắn"></textarea>
                        </div>
                        <div class="ed-btn-sendnow col-xs-12">
                            <button type="submit">Gửi</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <div class="mandy-smith">
        <div class="container ed-mandy">
            <div class="slide-box1" id="slide-box1">
                <h2>Mandy Smith</h2>
                <p>Tôi hoàn toàn hài lòng với những dịch vụ cũng như cung cách phục vụ của các nhân viên tại Đông Phương - Spa.</p>
                <h4>Mandy Smith</h4>
            </div>

            <div class="slide-box1" id="slide-box2">
                <h2>John Doe</h2>
                <p>Tôi hoàn toàn hài lòng với những dịch vụ cũng như cung cách phục vụ của các nhân viên tại Đông Phương - Spa.</p>
                <h4>John Doe</h4>
            </div>


            <div class="next-pre-slide">
                <button class="tb-bullet selected" id="dot-next"></button>
                <button class="tb-bullet" id="dot-pre"></button>
            </div>
        </div>
    </div>


    <div class="box-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="galery-left">
                        <div class="ed-icon-play" data-toggle="modal" data-target="#myModal">
                            <img src="{{asset('images/images_index')}}/icon-play.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content ed-modal-content">
                        <div class="modal-header ed-modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="ed-modal-body">
                            <iframe id="closevideo" width="100%" height="505" src="https://www.youtube.com/embed/br3ig82_SgI" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen ></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="txt-services">
                <h4>Đông Phương - Spa</h4>
                <h1>Dịch vụ nổi bật</h1>
            </div>
        </div>
    </div>


    <div class="product">
        <div class="container">
            <div class="col-md-6">
                <div class="row box-new-product">
                    <h4 class="title-pro">Massage tinh dầu</h4>
                    <h4 class="price-pro">$50.80</h4>
                    <p class="info-pro">Massage các loại tinh dầu thiên nhiên</p>
                    <p class="new-pro">NEW</p>
                </div>
                <div class="row box-new-product">
                    <h4 class="title-pro">Chăm sóc móng</h4>
                    <h4 class="price-pro">$29,80</h4>
                    <p class="info-pro">Chăm sóc móng với các mỹ phẩm cao cấp</p>
                    <p class="new-pro">NEW</p>
                </div>
                <div class="row box-new-product">
                    <h4 class="title-pro">Tẩy tế bào chết</h4>
                    <h4 class="price-pro">$50.80</h4>
                    <p class="info-pro">Tẩy tế bào chết bằng phương pháp dân gian</p>
                    <p class="hour-pro">1 Hour</p>
                </div>
                <div class="row box-new-product">
                    <h4 class="title-pro">Chăm sóc da mặt</h4>
                    <h4 class="price-pro">$50.80</h4>
                    <p class="info-pro">Chăm sóc da mặt bằng các mỹ phẩm thiên nhiên</p>
                    <p class="hour-pro">1 Hour</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row box-new-product">
                    <h4 class="title-pro">Tắm muối khoáng</h4>
                    <h4 class="price-pro">$50.80</h4>
                    <p class="info-pro">Tắm muối khoáng thiên nhiên an toàn</p>
                    <p class="new-pro">NEW</p>
                </div>
                <div class="row box-new-product">
                    <h4 class="title-pro">Xông hơi</h4>
                    <h4 class="price-pro">$29,80</h4>
                    <p class="info-pro">Xông hơi với các loại tinh dầu thiên nhiên</p>
                    <p class="new-pro">NEW</p>
                </div>
                <div class="row box-new-product">
                    <h4 class="title-pro">Điều trị mụn</h4>
                    <h4 class="price-pro">$50.80</h4>
                    <p class="info-pro">Điều trị mụn với các phương pháp y học hiện đại</p>
                    <p class="hour-pro">1 Hour</p>
                </div>
                <div class="row box-new-product">
                    <h4 class="title-pro">Điều trị nám</h4>
                    <h4 class="price-pro">$50.80</h4>
                    <p class="info-pro">Điều trị mụn với các phương pháp y học hiện đại</p>
                    <p class="new-pro">NEW</p>
                </div>
            </div>
        </div>
    </div>


    <div>
        <div class="sale-off">
            <div class="text-sale-off">
                <h1>Chương trình khuyến mãi</h1>
                <p>Đông Phương - Spa thường xuyên mở các chương trình ưu đãi tri ân đến quý khách hàng.</p>
                <div class="button-readmore">
                    <a href="#">Xem thêm</a>
                </div>
            </div>

        </div>
    </div>

    <div>
        <div class="container">
            <div class="txt-services">
                <h4>Sản phẩm bán chạy</h4>
                <h1>Xà Phòng Thiên nhiên tại Đông Phương - Spa</h1>
            </div>
        </div>
    </div>

    <div class="shop-product">
        <div class="container">
            <div class="col-md-4">
                <div class="box-shop-pro">
                    <div class="tick-sale">
                        <p>Sale</p>
                    </div>
                    <img src="{{asset('images/images_index')}}/shop-6.jpg" class="img-responsive">
                    <div class="txt-shop-pro">
                        <a href="#">Xà Phòng Bạc Hà Trà Xanh</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-shop-pro">
                    <img src="{{asset('images/images_index')}}/shop-5.jpg" class="img-responsive">
                    <div class="txt-shop-pro">
                        <a href="#">Xà Phòng Oải Hương Oliu</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-shop-pro">
                    <img src="{{asset('images/images_index')}}/shop-4.jpg" class="img-responsive">
                    <div class="txt-shop-pro">
                        <a href="#">Xà Phòng Sả Chanh</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats -->
    <div class="stats about news-w3layouts">
        <div class="container">
            <div class="stats-info agileits-w3layouts">
                <div class="col-sm-3 col-xs-6 stats-grid">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='12' data-delay='.5' data-increment="100">12</div>
                    <h6>Chuyên viên thẩm mỹ</h6>
                </div>
                <div class="col-sm-3 col-xs-6 stats-grid">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='82' data-delay='8' data-increment="1">82</div>
                    <h6>Khách hàng</h6>
                </div>
                <div class="col-sm-3 col-xs-6 stats-grid">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='62' data-delay='.5' data-increment="100">62</div>
                    <h6>Liệu pháp đã ứng dụng</h6>
                </div>
                <div class="col-sm-3 col-xs-6 stats-grid">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='18' data-delay='8' data-increment="1">18</div>
                    <h6>Kinh nghiệm</h6>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //Stats -->


    <div>
        <div class="container">
            <div class="txt-services">
                <h4>Blog</h4>
                <h1>Tin tức mới nhất</h1>
            </div>
        </div>
    </div>

    <div class="ed-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6 padimages0">
                    <img src="{{asset('images/images_index')}}/focus-10.jpg" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="txt-news">
                        <h5>Tin tức</h5>
                        <h1>Những xu hướng trang điểm sẽ biến mất trong năm 2018</h1>
                        <h4>24 tháng Một</h4>
                        <p>Trào lưu trang điểm lông mày dày, đậm hay tạo khối quá nhiều sẽ nhanh chóng biến mất trong thế giới làm đẹp của những cô gái năm 2018.</p>
                        <div class="btn-news-read">
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row ed-box-news-2">
                <div class="col-md-7 padimages0 hidden-lg hidden-md">
                    <img src="{{asset('images/images_index')}}/blog-2-1024x576.jpg" class="img-responsive">
                </div>
                <div class="col-md-5">
                    <div class="txt-news">
                        <h5>Tin tức</h5>
                        <h1>Nhìn lại 5 xu hướng chăm sóc da Hàn Quốc "làm mưa làm gió" trong năm 2017</h1>
                        <h4>24 tháng Một</h4>
                        <p>Năm 2017 quả thực có rất nhiều trào lưu chăm sóc da đến từ xứ sở kim chi du nhập vào Việt Nam.</p>
                        <div class="btn-news-read">
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 padimages0 hidden-sm hidden-xs">
                    <img src="{{asset('images/images_index')}}/blog-2-1024x576.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </div>


    <div class="newsletter">
        <div class="row magn0">
            <div class="col-lg-4">
                <div class="txt-newsletter">
                    <h2>Đăng ký</h2>
                    <p>Vui lòng đăng ký thông tin để sớm nhận được những thông tin ưu đãi từ Đông Phương - Spa.</p>
                    <div class="ed-form-newsletter">
                        <form action="/action_page.php">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <button type="submit" class="btn btn-default">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="col-lg-4">
                    <div class="text-center ed-txt-location">
                        <h5>Địa chỉ</h5>
                        <p>285 Cách Mạng Tháng Tám, Phường 12, Quận 10, Hồ Chí Minh</p>
                        <div class="ed-icon-location">
                            <a href="#"><img src="{{asset('images/images_index')}}/service-7.png"></a><br>
                            <a href="#">Bản đồ</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center ed-txt-location">
                        <h5>Email</h5>
                        <p>dongphuongspa@gmail.com</p>
                        <div class="ed-icon-location">
                            <a href="#"><img src="{{asset('images/images_index')}}/service-8.png"></a><br>
                            <a href="#">Gửi</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center ed-txt-location">
                        <h5>Điện thoại</h5>
                        <p>(028) 3957 1858</p>
                        <div class="ed-icon-location">
                            <a href="#"><img src="{{asset('images/images_index')}}/service-9.png"></a><br>
                            <a href="#">Gọi cho chúng tôi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection