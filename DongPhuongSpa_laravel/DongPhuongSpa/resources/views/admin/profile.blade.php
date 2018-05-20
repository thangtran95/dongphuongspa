@extends('admin.layout.master')
@section('title')Đông Phương SPA - Profile @endsection
@section('content')
    <section class="content-header">
        <h1>
            Home
            <small>Profile</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profile</li>
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
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Information</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('admin/profile.html')}}" method="POST" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group text-center">
                                <img id="avatar" src="{{asset('images/user')}}/{{$user->avatar}}" class="img-circle" alt="User Image">
                                <input type="file" style="display: none" onchange="readURL(this);" name="avatar" id="uploadFile">

                                <p class="help-block">{{$user->email}} - @if($user->role==0)
                                        Administrator
                                    @else
                                        User
                                    @endif</p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Address</label>
                                <input type="text" class="form-control" name="address" value="{{$user->address}}">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Change Password</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" id="formChangepass" action="{{url('admin/change-password.html')}}" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Mật khẩu hiện tại</label>
                                <input type="password" class="form-control" id="password_old" name="password_old" required>
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu mới</label>
                                <input type="password" class="form-control" id="password_news" name="password_news" required>
                            </div>
                            <div class="form-group">
                                <label>Xác nhận mật khẩu mới</label>
                                <input type="password" class="form-control" id="password_news_confirm" name="password_news_confirm" required>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" id="btSaveChange" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
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
        jQuery(document).ready(function() {
            jQuery('#formChangepass').validate({
                rules: {
                    "password_old": {
                        minlength: 8
                    },
                    'password_news':{
                        minlength: 8
                    },
                    "password_news_confirm": {
                        minlength: 8,
                        equalTo: "#password_news"
                    }
                },
                messages: {
                    password_old: {
                        required: 'Mật khẩu cũ không được trống.',
                        minlength: 'Mật khẩu cũ phải ít nhât 8 ký tự.'
                    },
                    password_news: {
                        required: 'Mật khẩu mới không được trống.',
                        minlength: 'Mật khẩu mới phải ít nhât 8 ký tự.'
                    },
                    password_news_confirm: {
                        required: 'Xác nhận mật khẩu không được trống.',
                        minlength: 'Mật khẩu mới phải ít nhât 8 ký tự.',
                        equalTo: 'Xác nhận mật khẩu không trùng với mật khẩu mới.'
                    }
                }
            });
        });
        jQuery('#btSaveChange').click(function(evt) {
            evt.preventDefault();
            jQuery('#formChangepass').submit()

        });
    </script>
@endsection