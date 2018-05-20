@extends('home.layout.master')
@section('title') Đông Phương Spa - Chi tiết sản phẩm @endsection
@section('index')
    <div class="banner-about text-center" style="background: linear-gradient(rgba(139, 139, 139, 0.56), rgba(121, 121, 121, 0.53)),url({{asset('images/images_index')}}/parallax-6.jpg) no-repeat;background-size: cover; background-position: bottom;">
        <h1>Xà Phòng Oải Hương Oliu</h1>
    </div>


    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('images/images_index')}}/shop-5.jpg" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="info-product-detail">
                        <h2>Hands Natural Cream</h2>
                        <p><strong>Mã sản phẩm:</strong> AB23 & AB24</p>
                        <p><strong>Giá tiền:</strong> Liên hệ</p>
                        <p><strong>Dung lượng:</strong> 30 ML</p>
                        <ul><p><strong>Thành phần:</strong></p>
                            <li><p>Hyaluronid acid.</p></li>
                            <li><p>Hạnh nhân.</p></li>
                            <li><p>Nước cất</p></li>
                            <li><p>Cetyl Octanoate....</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="description-product-detail">
                <h2>Product Description</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mattis nulla, in ultrices diam. Curabitur nec pharetra nunc. Nunc nec pellentesque nisl. Ut non mauris bibendum nunc pharetra laoreet sed eget mauris. Donec eget fermentum libero, ac aliquet lectus. Aliquam erat volutpat. Fusce venenatis placerat euismod. Nulla aliquam sed ex et dictum. Integer laoreet nisl vitae urna vehicula, vitae iaculis leo pretium. Vivamus ultrices ullamcorper nunc, eu luctus sem ullamcorper nec. Aliquam malesuada mi aliquam ligula convallis commodo. Cras in ullamcorper nisl.</p>
            </div>
        </div>
    </div>
@endsection