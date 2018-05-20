@extends('home.layout.master')
@section('title') Đông Phương Spa - Sản phẩm @endsection
@section('index')
    <div class="banner-about text-center" style="background: linear-gradient(rgba(139, 139, 139, 0.56), rgba(121, 121, 121, 0.53)),url({{asset('images/images_index')}}/parallax-11.jpg) no-repeat;background-size: cover; background-position: center;">
        <h1>Sản phẩm</h1>
    </div>


    <div>
        <div class="shop-product">
            <div class="container">
                <div class="row ed-box-product--1">
                    <div class="col-md-4">
                        <div class="box-shop-pro">
                            <div class="tick-sale">
                                <p>Sale</p>
                            </div>
                            <a href="{{url('chi-tiet-san-pham.html')}}"><img src="{{asset('images/images_index')}}/shop-6.jpg" class="img-responsive"></a>
                            <div class="txt-shop-pro">
                                <a href="{{url('chi-tiet-san-pham.html')}}">Xà Phòng Bạc Hà Trà Xanh</a>
                                <!-- <h5>$ 13.80</h5> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-shop-pro">
                            <a href="{{url('chi-tiet-san-pham.html')}}"><img src="{{asset('images/images_index')}}/shop-5.jpg" class="img-responsive"></a>
                            <div class="txt-shop-pro">
                                <a href="{{url('chi-tiet-san-pham.html')}}">Xà Phòng Oải Hương Oliu</a>
                                <!-- <h5>$ 13.80</h5> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-shop-pro">
                            <a href="{{url('chi-tiet-san-pham.html')}}"><img src="{{asset('images/images_index')}}/shop-4.jpg" class="img-responsive"></a>
                            <div class="txt-shop-pro">
                                <a href="{{url('chi-tiet-san-pham.html')}}">Xà Phòng Sả Chanh</a>
                                <!-- <h5>$ 13.80</h5> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="box-shop-pro">
                            <div class="tick-sale">
                                <p>Sale</p>
                            </div>
                            <a href="{{url('chi-tiet-san-pham.html')}}"><img src="{{asset('images/images_index')}}/shop-6.jpg" class="img-responsive"></a>
                            <div class="txt-shop-pro">
                                <a href="{{url('chi-tiet-san-pham.html')}}">Xà Phòng Bạc Hà Trà Xanh</a>
                                <!-- <h5>$ 13.80</h5> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-shop-pro">
                            <a href="{{url('chi-tiet-san-pham.html')}}"><img src="{{asset('images/images_index')}}/shop-5.jpg" class="img-responsive"></a>
                            <div class="txt-shop-pro">
                                <a href="{{url('chi-tiet-san-pham.html')}}">Xà Phòng Oải Hương Oliu</a>
                                <!-- <h5>$ 13.80</h5> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-shop-pro">
                            <div class="tick-sale">
                                <p>Sale</p>
                            </div>
                            <a href="{{url('chi-tiet-san-pham.html')}}"><img src="{{asset('images/images_index')}}/shop-4.jpg" class="img-responsive"></a>
                            <div class="txt-shop-pro">
                                <a href="{{url('chi-tiet-san-pham.html')}}">Xà Phòng Sả Chanh</a>
                                <!-- <h5>$ 13.80</h5> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="box-shop-pro">
                            <div class="tick-sale">
                                <p>Sale</p>
                            </div>
                            <a href="{{url('chi-tiet-san-pham.html')}}"><img src="{{asset('images/images_index')}}/shop-6.jpg" class="img-responsive"></a>
                            <div class="txt-shop-pro">
                                <a href="{{url('chi-tiet-san-pham.html')}}">Xà Phòng Bạc Hà Trà Xanh</a>
                                <!-- <h5>$ 13.80</h5> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-shop-pro">
                            <a href="{{url('chi-tiet-san-pham.html')}}"><img src="{{asset('images/images_index')}}/shop-5.jpg" class="img-responsive"></a>
                            <div class="txt-shop-pro">
                                <a href="{{url('chi-tiet-san-pham.html')}}">Xà Phòng Oải Hương Oliu</a>
                                <!-- <h5>$ 13.80</h5> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-shop-pro">
                            <div class="tick-sale">
                                <p>Sale</p>
                            </div>
                            <a href="{{url('chi-tiet-san-pham.html')}}"><img src="{{asset('images/images_index')}}/shop-4.jpg" class="img-responsive"></a>
                            <div class="txt-shop-pro">
                                <a href="{{url('chi-tiet-san-pham.html')}}">Xà Phòng Sả Chanh</a>
                                <!-- <h5>$ 13.80</h5> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ed-paginnation text-center">
                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- //Stats -->

@endsection