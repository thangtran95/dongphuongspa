@extends('home.layout.master')
@section('title') Đông Phương Spa - Chi tiết dịch vụ @endsection
@section('index')
    <div class="banner-about text-center" style="background: linear-gradient(rgba(139, 139, 139, 0.56), rgba(121, 121, 121, 0.53)),url({{asset('images/images_index')}}/parallax-6.jpg) no-repeat;background-size: cover; background-position: bottom;">
        <h1>Thẩm mỹ</h1>
    </div>


    <div>
        <div class="container">
            <div class="col-md-8">
                <div class="ed-detail-thammi">
                    <div class="title-detail-thammi">
                        <h2>Điêu khắc chân mày 6D - dáng mày sắc sảo đẹp tự nhiên</h2>
                    </div>
                    <div class="info-thammi">
                        <p>Điêu khắc chân mày 6D Là một trong những công nghệ mang đến dáng chân mày sắc sảo, tinh tế nhưng không kém phần tự nhiên. Với hình thức dùng máy khắc sợi kết hợp với màu mực Hàn Quốc chất lượng, chuyên viên có tay nghề cao sẽ tạo nên những sợi lông mày bằng mực, điêu khắc đan xen với sợi lông mày thật.</p>
                        <h2>1. LÝ DO NÊN SỬ DỤNG CÔNG NGHỆ ĐIÊU KHẮC 6D</h2>
                        <ul>
                            <li><p><i class="fa fa-angle-double-right" aria-hidden="true"></i>  Sở hữu đôi chân mày đẹp sắc nét, thanh tú, tinh tế, vô cùng tự nhiên, hài hòa</p></li>
                            <li><p><i class="fa fa-angle-double-right" aria-hidden="true"></i> Trực tiếp thực hiện dựa trên chuyên viên có tay nghề cao</p></li>
                            <li><p><i class="fa fa-angle-double-right" aria-hidden="true"></i>  Sử dụng màu mực Hàn Quốc chất lượng. Màu mực lên chuẩn, tệp với màu lông chân mày thật. Không trổ xanh, trổ đỏ theo thời gian.</p></li>
                            <li><p><i class="fa fa-angle-double-right" aria-hidden="true"></i> Quá trình thực hiện đơn giản, nhanh chóng, không đau, không kích ứng, rụng lông mày</p></li>
                            <li><p><i class="fa fa-angle-double-right" aria-hidden="true"></i> Dặm lại miễn phí sau 2 tháng sử dụng dịch vụ</p></li>
                            <li><p><i class="fa fa-angle-double-right" aria-hidden="true"></i> Hạn chế tối đa cảm giác đau rát cho khách hàng. Lưỡi dao siêu mảnh và mỏng sẽ khắc phẩy nhẹ nhàng, kiểm soát được độ nông sâu nên không làm tổn thương ở bề mặt da</p></li>
                        </ul>
                        <h2>2. ĐIỂM MẠNH ĐIÊU KHẮC CHÂN MÀY 6D</h2>
                        <p>Điêu khắc chân mày 6D là một bước tiến của thêu mày, chuyên gia thẩm mỹ dùng lưỡi dao siêu mảnh, siêu nhỏ, lướt nhẹ nhàng vào tầng hạ bì, phẩy từng sợi đan xen với chân mày thật, giúp chân mày sống động, tự nhiên như thật. Đầu bút xăm chỉ tác động vào da từ 0,2 – 0,3 mm, hạn chế tối đa cảm giác đau rát, sưng tấy.</p>
                        <p>Mực màu xăm chuẩn Hàn Quốc, giúp màu giữ lâu, khó phai và không trổ xanh trổ đỏ theo thời gian. Các góc giữa các sợi lông được hình thành cực nhỏ theo chiều sinh trưởng tự nhiên của sợi lông mày thật nên có thể kiến tạo được bộ chân mày tự nhiên, hài hòa.</p>
                        <h2>3. ĐỐI TƯỢNG PHÙ HỢP ĐIÊU KHẮC CHÂN MÀY 6D</h2>
                        <p><i class="fa fa-check"></i> Người có chân mày ngắn, không có đuôi hoặc đầu chân mày</p>
                        <p><i class="fa fa-check"></i> Người sở hữu chân mày tự nhiên chưa từng qua xử lý</p>
                        <p><i class="fa fa-check"></i> Người sở hữu chân mày không quá thưa, quá nhạt</p>
                        <p><i class="fa fa-check"></i> Phù hợp với nhiều đối tượng ở mọi độ tuổi</p>
                        <h2>4. QUY TRÌNH THỰC HIỆN</h2>
                        <img src="{{asset('images/images_index')}}/5-1.jpg" class="img-responsive">
                        <p><i class="fa fa-hand-o-right"></i> Bước 1: Thăm khám và tư vấn tình trạng chân mày</p>
                        <p><i class="fa fa-hand-o-right"></i> Bước 2: Vẽ phác thảo dáng chân mày cần tạo</p>
                        <p><i class="fa fa-hand-o-right"></i> Bước 3: Tiến hành ủ tê</p>
                        <p><i class="fa fa-hand-o-right"></i> Bước 4: Tiến hành điêu khắc chân mày 6D</p>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
               @include('home.layout.banner_right')
            </div>
        </div>
    </div>
@endsection