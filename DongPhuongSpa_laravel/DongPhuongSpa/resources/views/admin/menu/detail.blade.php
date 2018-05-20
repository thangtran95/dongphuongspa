@extends('admin.layout.master')
@section('title')Đông Phương SPA - Price @endsection
@section('content')
    <section class="content-header">
        <h1>
            Trang chủ
            <small>Thông tin menu</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Thông tin menu</li>
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
                @if($menu->is_sub==1)

                @endif

                <div class="box box-primary">
                    <div class="box-header with-border text-left">
                        <a href="{{url('admin/menu/list-menu.html')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp;Quay lại</a>
                        @if($menu->is_sub==1)
                            <a href="{{url('admin/menu/create-sub-menu')}}/{{$menu->id}}.html" class="btn btn-danger add-submenu"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Thêm menu con</a>
                        @endif
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                </div>
                <div class="col-md-12">
                    <form role="form" action="{{url('admin/menu/detail-menu')}}/{{$menu->id}}.html" method="POST" enctype="multipart/form-data">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Thông tin menu</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="col-md-6">
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
                                                <input type="text" class="form-control" name="name_vi" value="{{$menu->name_vi}}" required>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="english">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name_en" value="{{$menu->name_en}}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Thứ tự hiển thị</label>
                                        <input type="number" class="form-control" value="{{$menu->sort_order}}" name="sort_order" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Đường dẫn</label>
                                        <input type="text" class="form-control" value="{{$menu->link}}" name="link" required>
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
            @if(count($list)!=0)
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách Menu Con</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Tên tiếng việt</th>
                                    <th>Tên tiếng anh</th>
                                    <th width="100px"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($list as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->name_vi}}</td>
                                        <td>{{$item->name_en}}</td>
                                        <td>
                                            <a href="{{url('admin/menu/detail-sub-menu')}}/{{$item->id}}.html" class="btn btn-primary detail-submenu" title="Chi tiết menu"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href="{{url('admin/menu/delete-menu')}}/{{$item->id}}.html" class="btn btn-danger delete" title="Xóa Menu"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            @endif
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
        });
        $('.add-submenu').click(function (e) {
            var a_href = $(this).attr('href');
            e.preventDefault();
            $.ajax({
                url: a_href,
                type: 'GET',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    $('.body-home').prepend(data);
                    $('#modal-AddSubMenu').modal('show');
                }
            });
        });
        $('.detail-submenu').click(function (e) {
            var a_href = $(this).attr('href');
            e.preventDefault();
            $.ajax({
                url: a_href,
                type: 'GET',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    $('.body-home').prepend(data);
                    $('#modal-DetailSubMenu').modal('show');
                }
            });
        });
        $('.delete').click(function (e) {
            var a_href = $(this).attr('href');
            e.preventDefault();
            $.ajax({
                url: a_href,
                type: 'GET',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    $('.body-home').prepend(data);
                    $('#modal-DeleteMenu').modal('show');
                }
            });
        });
    </script>
@endsection


