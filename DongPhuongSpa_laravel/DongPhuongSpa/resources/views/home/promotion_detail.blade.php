@extends('home.layout.master')
@section('title') Đông Phương Spa - Chi tiết khuyến mãi @endsection
@section('index')
    <div class="banner-about text-center" style="background: linear-gradient(rgba(139, 139, 139, 0.56), rgba(121, 121, 121, 0.53)),url({{asset('images/images_index')}}/parallax-6.jpg) no-repeat;background-size: cover; background-position: bottom;">
        <h1>ƯU ĐÃI LỚN CHO DỊCH VỤ XOÁ SẸO, THÂM</h1>
    </div>


    <div>
        <div class="container">
            <div class="col-md-8">
                <div class="row">
                    <div class="ed-news--1 ed-news-detail--2">
                        <div>
                            <h4>DECEMBER 1</h4>
                            <p>Một tin vui xin gửi đến các bệnh nhân của sẹo mụn trứng cá là các vết thâm sẹo giờ đây sẽ có thể được xóa mờ đi gần như hoàn toàn. Đặc biệt, nhằm tạo điều kiện cho các khách hàng thử nghiệm công nghệ xoá sẹo rỗ, thâm, thu nhỏ lỗ chân lông cấp tốc, từ 08/11 - 25/11/2015, hệ thống Belas Spa tại Tp.HCM và Đà Nẵng sẽ dành ưu đãi lên đến 40% cho các bạn khi đến Belas điều trị các vấn đề trên bằng công nghệ lăn kim tế bào gốc.</p>
                            <img src="{{asset('images/images_index')}}/1212.jpg" class="img-responsive">

                            <p>Sẹo rỗ và vết thâm là rắc rối thường gặp do nặn mụn trứng cá không đúng cách, khiến da bị tổn thương sâu. Ngoài ra, một số bạn khi trải qua thời gian bị thuỷ đậu, sau khi khỏi bệnh, 95% trường hợp sẽ đối mặt với tình trạng làn da bị thâm và sẹo sâu. Việc điều trị sớm, lựa chọn phương pháp phù hợp là chìa khoá giúp các bạn sớm lấy lại làn da láng mịn, không tì vết ban đầu.</p>

                            <p>Hiện nay, việc ứng dụng công nghệ lăn kim tế bào gốc trong điều trị thâm, sẹo, lỗ chân lông to được xem là bước đột phá trong ngành da liễu.</p>

                            <p>Phương pháp này đã ứng dụng thành tựu khoa học hiện đại trong việc sửa chữa những hư hỏng, tổn thượng của tế bào da, đem lại cuộc cách mạng mới trong ngành thẩm mỹ với những ưu điểm vượt trội như an toàn, hiệu quả lên đến hơn 90% và rút ngắn thời gian điều trị.</p>

                            <p>Tế bào gốc là tế bào mầm hay tế bào nền móng mà từ đó các tế bào của cơ thể con người được tạo ra như tế bào máu, tế bào thần kinh, tế bào da… Đặc tính của tế bào gốc là phân chia không giới hạn, khả năng tự tái tạo và có thể phát triển thành các tế bào chuyên biệt khi ở điều kiện thích hợp. Đây chính là khả năng kỳ diệu của tế bào gốc và đã được y học thế giới ứng dụng rộng rãi trong điều trị y khoa cũng như thẩm mỹ nhằm thay thế các tế bào bị tổn thương do bệnh lý hay lão hoá.</p>

                            <p>Trong đó, sử dụng tế bào gốc để điều trị sẹo lõm, sẹo thâm… là một trong những ứng dụng đã đem lại hiệu quả tích cực. Theo đó, khi được đưa vào da thông qua hệ thống kim lăn, tế bào gốc sẽ phân chia, thay thế tế bào già cỗi, tế bào bị tổn thương. Từ đó sẽ giúp làn da nhanh chóng hồi phục, săn chắc, xoá mờ đi vết thâm và làm đầy dần lên những vết sẹo lõm ban đầu. Lịch trình điều trị kéo dài trung bình 6-8 tuần đem lại kết quả cải thiện 80-90% với những ưu điểm nổi bật như: không đau đớn, không gây chảy máu, không cần băng bó, không ảnh hưởng đến sinh hoạt ngày thường.</p>
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