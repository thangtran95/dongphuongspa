@extends('home.layout.master')
@section('title') Đông Phương Spa - Bảng giá @endsection
@section('index')
    <div class="banner-about text-center" style="background: linear-gradient(rgba(139, 139, 139, 0.56), rgba(121, 121, 121, 0.53)),url({{asset('images/images_index')}}/parallax-6.jpg) no-repeat;background-size: cover; background-position: bottom;">
        <h1>Bảng giá</h1>
    </div>


    <div>
        <div class="container">
            <div class="col-md-8">
                <div class="banggias">
                    <table class="table table-bordered ed-banggia-table">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>DỊCH VỤ</th>
                            <th>THỜI GIAN</th>
                            <th>GIÁ TIỀN</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="title-table-bangia">
                            <th class="text-center"><strong>I</strong></th>
                            <th colspan="3"><strong>MASSAGE THƯ GIÃN MẶT & TOÀN THÂN</strong></th>

                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Thư giãn theo phong cách Đông Phương Spa</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">550.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Thư giãn toàn thân Spa</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">450.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Thanh tẩy làn da</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">550.000 VNĐ</td>
                        </tr>


                        <tr class="title-table-bangia">
                            <th class="text-center"><strong>II</strong></th>
                            <th colspan="3"><strong>TRỊ LIỆU NÁM , NUÔI DƯỠNG</strong></th>

                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Thư giãn theo phong cách Đông Phương Spa</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">550.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Thư giãn toàn thân Spa</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">450.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Thanh tẩy làn da</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">550.000 VNĐ</td>
                        </tr>


                        <tr class="title-table-bangia">
                            <th class="text-center"><strong>III</strong></th>
                            <th colspan="3"><strong>TRỊ LIỆU NHỜN MỤN , SẸO RỖ</strong></th>

                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Thư giãn theo phong cách Đông Phương Spa</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">550.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Thư giãn toàn thân Spa</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">450.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Thanh tẩy làn da</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">550.000 VNĐ</td>
                        </tr>


                        <tr class="title-table-bangia">
                            <th class="text-center"><strong>IV</strong></th>
                            <th colspan="3"><strong>NÂNG CƠ THON GỌN MẶT</strong></th>

                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Thư giãn theo phong cách Đông Phương Spa</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">550.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Thư giãn toàn thân Spa</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">450.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Thanh tẩy làn da</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">550.000 VNĐ</td>
                        </tr>


                        <tr class="title-table-bangia">
                            <th class="text-center" "><strong>V</strong></th>
                            <th colspan="3"><strong>ĐIỀU TRỊ TỪNG VÙNG</strong></th>

                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Thư giãn theo phong cách Đông Phương Spa</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">550.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Thư giãn toàn thân Spa</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">450.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Thanh tẩy làn da</td>
                            <td class="text-center">1h30</td>
                            <td class="text-center">550.000 VNĐ</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="col-md-4">
                @include('home.layout.banner_right')
            </div>
        </div>
    </div>
@endsection