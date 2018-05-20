@extends('admin.layout.master')
@section('title')Đông Phương SPA - Price @endsection
@section('content')
    <section class="content-header">
        <h1>
            Home
            <small>Thêm mới Price</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Price</li>
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
                        <a href="{{url('admin/price/list-price.html')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp;Quay lại</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                </div>
                <div class="col-md-12">
                    <form role="form" action="{{url('admin/price/detail-price')}}/{{$price->id}}.html" method="POST" enctype="multipart/form-data">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Thông tin Price</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="col-md-8">
                                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#vietnam" data-toggle="tab">Tiếng Viêt</a></li>
                                            <li><a href="#english" data-toggle="tab">English</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="vietnam">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Tên</label>
                                                <input type="text" class="form-control" name="name_vi" value="{{$price_vi->name}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Nội dung</label>
                                                <input type="text" class="form-control" name="description_vi" value="{{$price_vi->description}}" required>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="english">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name_en" value="{{$price_en->name}}" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" name="description_en" value="{{$price_en->name}}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Giá (VNĐ)</label>
                                        <input type="text" class="form-control" value="{{number_format($price->price)}}" onkeyup="return format_currency(this)" name="price" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Thời gian (giờ)</label>
                                        <input type="text" class="form-control" value="{{$price->time}}" name="time" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Trạng thái</label>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="is_new" value="1" class="flat-red" @if($price->is_new==1) checked @endif>
                                                &nbsp; &nbsp;Mới
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
        String.prototype.replaceAll = function(search, replacement) {
            var target = this;
            return target.replace(new RegExp(search, 'g'), replacement);
        };
        function format_currency(a) {
            a.value = a.value.replace(/[^0-9\,]/g,'');
            t = a.value.replaceAll(',','');
            a.value = t.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
        }
    </script>
@endsection


