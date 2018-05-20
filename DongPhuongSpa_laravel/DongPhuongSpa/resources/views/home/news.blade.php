@extends('home.layout.master')
@section('title') Đông Phương Spa - Tin tức @endsection
@section('index')
    <div class="banner-about text-center" style="background: linear-gradient(rgba(139, 139, 139, 0.56), rgba(121, 121, 121, 0.53)),url({{asset('images/images_index')}}/parallax-6.jpg) no-repeat;background-size: cover; background-position: bottom;">
        <h1>Tin Tức</h1>
    </div>


    <div>
        <div class="container">
            <div class="col-md-8">
                <div class="row">
                    <div class="ed-news--1">
                        <a href="{{url('chi-tiet-tin-tuc.html')}}"><img src="{{asset('images/images_index')}}/blog-5-1024x576.jpg" class="img-responsive"></a>
                        <div>
                            <h4>DECEMBER 1</h4>
                            <a href="{{url('chi-tiet-tin-tuc.html')}}"><h2>Special Guest Gill Cooper</h2></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at porttitor vehicula nullam augue.</p>
                            <a href="{{url('chi-tiet-tin-tuc.html')}}">Read more</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="ed-news--1">
                        <a href="{{url('chi-tiet-tin-tuc.html')}}"><img src="{{asset('images/images_index')}}/blog-5-1024x576.jpg" class="img-responsive"></a>
                        <div>
                            <h4>DECEMBER 1</h4>
                            <a href="{{url('chi-tiet-tin-tuc.html')}}"><h2>Special Guest Gill Cooper</h2></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at porttitor vehicula nullam augue.</p>
                            <a href="{{url('chi-tiet-tin-tuc.html')}}">Read more</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="ed-news--1">
                        <a href="{{url('chi-tiet-tin-tuc.html')}}"><img src="{{asset('images/images_index')}}/blog-5-1024x576.jpg" class="img-responsive"></a>
                        <div>
                            <h4>DECEMBER 1</h4>
                            <a href="{{url('chi-tiet-tin-tuc.html')}}"><h2>Special Guest Gill Cooper</h2></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at porttitor vehicula nullam augue.</p>
                            <a href="{{url('chi-tiet-tin-tuc.html')}}">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                @include('home.layout.banner_right')
            </div>
        </div>
    </div>
@endsection