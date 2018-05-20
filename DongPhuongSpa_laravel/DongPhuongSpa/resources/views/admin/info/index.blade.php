@extends('admin.layout.master')
@section('title')Đông Phương SPA - List Info @endsection
@section('content')
    <section class="content-header">
        <h1>
            Home
            <small>Danh sách Thông tin trang chủ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Thông tin tang chủ</li>
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
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách Thông tin trang chủ</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(count($list)!=0)
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
                                        <a href="{{url('admin/info/detail-info')}}/{{$item->id}}.html" class="btn btn-primary report" title="Detail price"><i class="fa fa-pencil-square-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @endif
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
            $('#example2').DataTable();
        });
        $('.report').click(function (e) {
            var a_href = $(this).attr('href');
            e.preventDefault();
            $.ajax({
                url: a_href,
                type: 'GET',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    $('.body-home').prepend(data);
                    $('#modal-Info').modal('show');
                }
            });
        });
    </script>
@endsection