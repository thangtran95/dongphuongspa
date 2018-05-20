@extends('admin.layout.master')
@section('title')Đông Phương SPA - Profile @endsection
@section('content')
    <section class="content-header">
        <h1>
            Home
            <small>Danh sách Admin</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Admin</li>
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
                        <a href="{{url('admin/user/list-user.html')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp;Quay lại</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <form role="form" action="{{url('admin/user/create-user.html')}}" method="POST" enctype="multipart/form-data">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Thêm quản trị viên</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                    <div class="form-group text-center">
                                        <img id="avatar" src="{{asset('images/user/user_default.png')}}" class="img-circle" alt="User Image">
                                        <input type="file" style="display: none" onchange="readURL(this);" name="avatar" id="uploadFile">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Role</label>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="role" value="0" class="flat-red" checked>
                                                Administrator
                                            </label>
                                            <label style="margin-left: 30px">
                                                <input type="radio"  name="role" value="1" class="flat-red">
                                                User
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone</label>
                                        <input type="text" class="form-control" name="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <input type="text" class="form-control" name="address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="text" class="form-control" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password Confirm</label>
                                        <input type="text" class="form-control" name="password_confirm" required>
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
                    $('#avatar').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection