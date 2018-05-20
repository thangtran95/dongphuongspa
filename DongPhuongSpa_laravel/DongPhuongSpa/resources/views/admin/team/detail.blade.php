@extends('admin.layout.master')
@section('title')Đông Phương SPA - Sản phẩm @endsection
@section('content')
    <section class="content-header">
        <h1>
            Home
            <small>Thông tin Nhân viên</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Nhân viên</li>
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
                        <a href="{{url('admin/team/list-team.html')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp;Quay lại</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                </div>
                <div class="col-md-12">
                    <form role="form" action="{{url('admin/team/detail-team')}}/{{$team->id}}.html" method="POST" enctype="multipart/form-data">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Thông tin Nhân viên</h3>
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
                                                <label>Chức vụ</label>
                                                <input type="text" class="form-control" name="role_vi" value="{{$team_vi->role}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Mô tả</label>
                                                <textarea class="form-control editors" name="description_vi" id="description_vi">{{$team_vi->description}}</textarea>
                                            </div>

                                        </div>
                                        <div class="tab-pane" id="english">

                                            <div class="form-group">
                                                <label>Role</label>
                                                <input type="text" class="form-control" name="role_en" value="{{$team_en->role}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control editors" name="description_en" id="description_en">{{$team_en->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Họ tên</label>
                                        <input type="text" class="form-control" name="name" value="{{$team->name}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Thứ tự hiển thị</label>
                                        <input type="number" class="form-control" name="sort_order" value="{{$team->sort_order}}" required>
                                    </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hình ảnh (260x260)</label>
                                    <img id="imgSlide" src="{{asset('images/team')}}/{{$team->image}}" class="img-responsive" style="width: 260px; height: 260px" alt="Team Image">
                                    <div class="input-group image-preview" style="margin-top: 10px">
                                        <input placeholder="" id="text-image" type="text" value="{{$team->image}}" class="form-control image-preview-filename" required disabled="disabled">
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