@extends('home.layout.master')
@section('title') Đông Phương Spa - Về chúng tôi @endsection
@section('index')
    <div class="banner-about text-center" style="background: linear-gradient(rgba(139, 139, 139, 0.56), rgba(121, 121, 121, 0.53)),url({{asset('images/images_index')}}/parallax-4.jpg) no-repeat;background-size: cover; background-position: bottom;">
        <h1>Về chúng tôi</h1>
    </div>


    <div class="near-banner-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="ed-col-right">
                        <h2>Hello. Our center has been present for over 20 years in the market. We make the most of all our customers.</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ed-p-col-right">
                        <p>Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut.</p>
                        <p>Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ed-p-col-right">
                        <p>Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut.</p>
                        <p>Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="video-about">
        <div class="container pa000">
            <div class="col-md-2"></div>
            <div class="col-md-8 pa000">
                <div class="galery-left">
                    <div class="ed-icon-play" data-toggle="modal" data-target="#myModal">
                        <img src="{{asset('images/images_index')}}/icon-play.png">
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
            <div class="col-md-2"></div>
        </div>
    </div>


    <div class="our-staff">
        <div class="container">
            <div class="col-sm-6"></div>
            <div class="col-sm-6 text-center ed-our-staff-box">
                <h1>Our Staff</h1>
                <p>LOREM IPSUM DOLOR SIT AMET, CONSECTETURADIPISCING ELIT. DONEC AT LIGULA IN LIGULA ULTRICESVULPUTATE AT AC SAPIEN. IN JUSTO NEQUE, MALESUADAA LIBERO ET, LOREM IPSUM DOLOR SIT AMET,CONSECTETUR ADIPISCING ELIT</p>
                <div class="btn-contact-about">
                    <a href="#">Contact us</a>
                </div>
            </div>
        </div>
    </div>

    <div class="list-detail-staff">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center box-infor-staff">
                    <img src="{{asset('images/images_index')}}/team-4.jpg" class="img-responsive">
                    <div class="ed-infor">
                        <h2>Jane Mcallister</h2>
                        <h6>OWNER</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at portitor.</p>
                        <a href="#">Contact me</a>
                    </div>
                </div>
                <div class="col-md-3 text-center box-infor-staff">
                    <img src="{{asset('images/images_index')}}/team-3.jpg" class="img-responsive">
                    <div class="ed-infor">
                        <h2>Mandy Johnson</h2>
                        <h6>CUSTOMER CARE</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at portitor.</p>
                        <a href="#">Contact me</a>
                    </div>
                </div>
                <div class="col-md-3 text-center box-infor-staff">
                    <img src="{{asset('images/images_index')}}/team-2.jpg" class="img-responsive">
                    <div class="ed-infor">
                        <h2>Elly Spitch</h2>
                        <h6>CO-FOUNDER</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at portitor.</p>
                        <a href="#">Contact me</a>
                    </div>
                </div>
                <div class="col-md-3 text-center box-infor-staff">
                    <img src="{{asset('images/images_index')}}/team-1.jpg" class="img-responsive">
                    <div class="ed-infor">
                        <h2>Hanna Zafron</h2>
                        <h6>SPECIALIST</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at portitor.</p>
                        <a href="#">Contact me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div>
        <div class="container">
            <div class="txt-services">
                <h4>Đông Phương - Spa</h4>
                <h1>Mang lại vẻ đẹp hoàn hảo cho bạn</h1>
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

@endsection