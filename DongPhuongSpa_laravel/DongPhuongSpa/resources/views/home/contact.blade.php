@extends('home.layout.master')
@section('title') Đông Phương Spa - Liên hệ @endsection
@section('index')
    <div class="banner-about text-center" style="background: linear-gradient(rgba(139, 139, 139, 0.56), rgba(121, 121, 121, 0.53)),url({{asset('images/images_index')}}/video-home-4-cover.jpg) no-repeat; background-size: cover; background-position: center;">
        <h1>Liên hệ</h1>
    </div>

    <div class="contact-page">
        <div class="container">
            <div class="col-md-6">
                <div class="form-contact-left">
                    <h2>Liên hệ</h2>
                    <p>Hãy liên hệ với chúng tôi qua form nhập liệu phía dưới hoặc qua bản đồ đường đi, địa chỉ hay số điện thoại. Chúng tôi sẽ trả lời hoặc liên lạc qua điện thoại sớm nhất khi có thể cho quý khách.</p>
                    <div class="ed-form-contact">
                        <div class="form-group">
                            <input type="text" class="form-control" id="usr" placeholder="Họ tên...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="Email...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" placeholder="Chủ đề....">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Nội dung..."></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit">Gửi</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4433460969803!2d106.67648521480075!3d10.777316392320905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f27ae29987d%3A0x791a14c8d36fb0d3!2zxJDDtG5nIFBoxrDGoW5nIFNwYQ!5e0!3m2!1svi!2s!4v1516262422323" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="info-address">

                    <div class="col-sm-6">
                        <div class="float-left ">
                            <h4><strong>Số điện thoại :</strong> <span>0283 9233456</span></h4>
                        </div>
                        <div class="clearfix gachduoi"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-left">
                            <h4><strong>EMAIL :</strong> <span>info@education.com</span></h4>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12 ">
                        <div class="float-left ">
                            <h4><strong>Địa chỉ:</strong> <span>113 Trần Bình Trọng - Phường 12 - Quận 5</span></h4>
                        </div>
                        <div class="clearfix gachduoi"></div>
                    </div>
                </div>

                <div class="phone-contact">
                    <h2>Giờ mở cửa 10AM – 8PM</h2>
                    <h1>0283 9233456</h1>
                </div>
            </div>
        </div>
    </div>
@endsection