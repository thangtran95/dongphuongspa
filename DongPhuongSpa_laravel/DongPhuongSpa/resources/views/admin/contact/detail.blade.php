@extends('admin.layout.master')
@section('title')Đông Phương SPA - Liên hệ @endsection
@section('content')
    <section class="content-header">
        <h1>
            Trang chủ
            <small>Thông tin liên hệ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">liên hệ</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        @if ($message = Session::get('false'))
            @if($message==0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <p>{{$message}}</p>
                </div>
            @endif
        @endif
        @if ($message = Session::get('true'))
            @if($message==0)
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <p>{{$message}}</p>
                </div>
            @endif
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border text-left">
                        <a href="{{url('admin/contact/list-contact.html')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp;Quay lại</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <form role="form" action="{{url('admin/contact/detail-contact')}}/{{$contact->id}}.html" method="POST" enctype="multipart/form-data">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Thêm liên hệ</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Họ và tên</label>
                                        <div class="form-group">
                                            <span>{{$contact->last_name}} {{$contact->first_name}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="form-group">
                                            <span>{{$contact->email}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Dịch vụ</label>
                                        <div class="form-group">
                                            <span>{{$contact->service}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tin nhắn</label>
                                        <div class="form-group">
                                            <span>{{$contact->message}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="status" value="1" class="flat-red" @if($contact->status==1) checked @endif>
                                                &nbsp; &nbsp;Đã xem
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
        });
        $('#avatar').on('click',function() {
            $('#uploadFile').trigger('click');
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgSlide').attr('src', e.target.result);
                    $('#text-image').val(input.files[0].name);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection