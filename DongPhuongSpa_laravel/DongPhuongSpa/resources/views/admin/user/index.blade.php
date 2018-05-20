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
                    <div class="box-header with-border text-right">
                        <a href="{{url('admin/user/create-user.html')}}" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;&nbsp;Thêm Admin</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách Quản trị viên</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="110px">Avatar</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>phone</th>
                                <th>Address</th>
                                <th width="100px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <img id="avatar" src="{{asset('images/user')}}/{{$item->avatar}}" style="width: 100px; height: 100px">
                                    </td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                        @if($item->role==0)
                                            Administrator
                                        @else
                                            User
                                        @endif
                                    </td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>
                                        <a href="{{url('admin/user/detail-user')}}/{{$item->id}}.html" class="btn btn-primary" title="Detail user"><i class="fa fa-pencil-square-o"></i></a>
                                        @if(session('admin')->id != $item->id)
                                            <a href="{{url('admin/user/delete-user')}}/{{$item->id}}.html" class="btn btn-danger delete" title="Delete user"><i class="fa fa-times"></i></a>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(function () {
            $('#example1').DataTable();
        })
        $('.delete').click(function (e) {
            var a_href = $(this).attr('href');
            e.preventDefault();
            $.ajax({
                url: a_href,
                type: 'GET',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    $('.body-home').prepend(data);
                    $('#modal-DeleteUser').modal('show');
                }
            });
        });
    </script>
@endsection