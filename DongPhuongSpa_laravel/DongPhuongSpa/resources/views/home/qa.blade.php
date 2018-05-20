@extends('home.layout.master')
@section('title') Đông Phương Spa - Hỏi đáp @endsection
@section('index')
    <div class="banner-about text-center" style="background: linear-gradient(rgba(139, 139, 139, 0.56), rgba(121, 121, 121, 0.53)),url({{asset('images/images_index')}}/parallax-6.jpg) no-repeat;background-size: cover; background-position: bottom;">
        <h1>Câu hỏi thường gặp</h1>
    </div>


    <div>
        <div class="container">
            <div class="col-md-8">
                <div class="ed-detail-thammi">

                    <div class="info-thammi">
                        <h2>1. Spa là gì?</h2>
                        <p>– Spa theo định nghĩa của hiệp hội spa thế giới thì Spa là tất cả các liệu pháp đem lại sự cân bằng năng lượng cho cơ thể và tâm hồn.</p>

                        <h2>2. Hiện nay, spa có bao nhiêu loại?</h2>
                        <ul>
                            <li><p>  – Spa tại gia: dành cho những người có thu nhập trung bình, hay quỹ thời gian có ít.</p></li>
                            <li><p> – Spa quốc tế: các liệu pháp Spa được du nhập ở các nước trên thế giới và được mọi người lựa chọn như massage Thái, Balinese Rituais và Ayurve…</p></li>
                            <li><p>  – Spa trong ngày (Day Spa): loại hình Spa có số lượng nhiều nhất bao gồm những liệu pháp chăm sóc sức khỏe, tinh thần tính bằng thời gian. Mỗi dịch vụ kéo dài từ vài giờ cho đến nửa ngày hoặc có khi là cả ngày đối với gói dịch vụ kết hợp.</p></li>
                            <li><p> – Spa tại khu nghỉ dưỡng (Resort Spa): Spa tại khu nghỉ dưỡng nhắm đến đối tượng phục vụ là khách du lịch thưởng thức kỳ nghỉ tại các resort cao cấp.</p></li>
                            <li><p> – Spa tại khách sạn (Hotel Spa): Spa tại khách sạn thường được trang bị đầy đủ hơn với phòng tắm sauna, phòng tắm hơi (Steam room), bể sục massage (Jacuzzi),…</p></li>
                            <li><p> – Spa dành cho phái mạnh: Tuy là những người đầu tiên đi Spa nhưng hiện nay những Spa dành cho phái nữ lại chiếm ưu thế nhiều hơn là nam giới.</p></li>
                        </ul>

                        <h2>3. Muốn mở spa cần bao nhiêu vốn?</h2>
                        <p>– Để trả lời câu hỏi này còn phụ thuộc vào nhu cầu đầu tư của bạn như thế nào , loại hình đầu tư của bạn ra sao . Tổng chi phí và chi phí cụ thể từng khoảng mục đâu tư bạn có thể tham khảo trên kinhdoanhspa.com.</p>

                        <h2>4. Khi mở spa cần trang bị những kiến thức gì?</h2>
                        <p>– Nhóm kiến thức liên quan đến khoa học & dinh dưỡng.</p>
                        <p>– Nhóm kiến thức liên quan đến kỹ thuật & kỹ năng.</p>
                        <p>– Nhóm kiến thức liên quan đến sản phẩm & máy móc thiết bị.</p>

                        <h2>5. Thủ tục, giấy phép để mở spa có khó xin không?</h2>
                        <p>– Trên thực tế việc đăng ký kinh doanh spa gặp khá nhiều khó khăn , kinh doanh spa được liệt vào dạng kinh doanh massage , một loại hình kinh doanh nhạy cảm , vì thế có các bạn có thể gặp khó nhiều thủ tục và trở ngại khi tự mình đăng ký giấy phép kinh doanh .</p>
                        <p>– Để có thể chắc chắn hơn về thủ tục đăng ký kinh doanh spa bạn có thể liên hệ với kinhdoanhspa.com để được tư vần nhiều hơn.</p>

                        <h2>6. Bước đẩu mở spa cần trang bị những loại máy móc nào?</h2>
                        <p>– Tùy vào loại hình kinh doanh spa, những dịch vụ mà bạn mang đến cho khác hàng mà trang bị những loại máy móc khác nhau. Một số loại máy cơ bản thường có trong các spa hiện nay: Gường massage, Bồn tắm thư giản, Phòng Xông hơi khô – phòng xông hơi ướt, Bể sục Jaacuzi, Máy phân tích da, Fractinal co2 laser, Triệt lông trẻ hóa da IPL, Máy xóa xăm, Máy ánh sáng, Máy giảm cân, Máy nâng cơ, Công nghệ RF, Công nghệ Elight, Máy siêu mày mòn, Máy Oxigen Jet,…</p>

                    </div>
                </div>

            </div>
            <div class="col-md-4">
                @include('home.layout.banner_right')
            </div>
        </div>
    </div>
@endsection