@extends('admin.layout.master')
@section('title')Đông Phương SPA - Sản phẩm @endsection
@section('content')
    <section class="content-header">
        <h1>
            Home
            <small>Thông tin Sản phẩm</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Sản phẩm</li>
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
                        <a href="{{url('admin/product/list-product.html')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp;Quay lại</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                </div>
                <div class="col-md-12">
                    <form role="form" action="{{url('admin/product/detail-product')}}/{{$product->id}}.html" method="POST" enctype="multipart/form-data">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Thông tin Sản phẩm</h3>
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
                                                <label>Tên</label>
                                                <input type="text" class="form-control" name="name_vi" value="{{$product_vi->name}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Mô tả</label>
                                                <textarea class="form-control editors" name="description_vi" id="description_vi">{{$product_vi->description}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Thông tin</label>
                                                <textarea class="form-control editors" name="info_vi" id="info_vi">{{$product_vi->info}}</textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="english">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name_en" value="{{$product_en->name}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control editors" name="description_en" id="description_en">{{$product_en->description}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Information</label>
                                                <textarea class="form-control editors" name="info_en" id="info_en">{{$product_en->info}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Trạng thái</label>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="is_sale" value="1" class="flat-red" @if($product->is_sale==1) checked @endif>
                                                &nbsp; &nbsp;Sale
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="is_new" value="1" class="flat-red"  @if($product->is_new==1) checked @endif>
                                                &nbsp; &nbsp;Sản phẩm mới
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="is_selling" value="1" class="flat-red"  @if($product->is_selling==1) checked @endif>
                                                &nbsp; &nbsp;Sản phẩm bán chạy
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hình ảnh (350x350)</label>
                                        <img id="imgSlide" src="{{asset('images/product')}}/{{$product->image}}" class="img-responsive" style="width: 100%" alt="Slide Image">
                                        <div class="input-group image-preview" style="margin-top: 10px">
                                            <input placeholder="" id="text-image" type="text" value="{{$product->image}}" class="form-control image-preview-filename" disabled="disabled">
                                            <!-- don't give a name === doesn't send on POST/GET -->
                                            <span class="input-group-btn">
                                            <div class="btn btn-success image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="image" onchange="readURL(this);"/>
                                                <!-- rename it -->
                                            </div>
                                            </span>
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