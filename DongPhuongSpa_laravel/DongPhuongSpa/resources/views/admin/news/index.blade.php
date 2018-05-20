@extends('admin.layout.master')
@section('title')Đông Phương SPA - Tin tức @endsection
@section('content')
    <section class="content-header">
        <h1>
            Home
            <small>Danh sách Tin tức</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tin tức</li>
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
                        <a href="{{url('admin/news/create-news.html')}}" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;&nbsp;Thêm Tin tức</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách Tin tức</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#vietnam" data-toggle="tab">Tiếng Viêt</a></li>
                                <li><a href="#english" data-toggle="tab">English</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="active tab-pane" id="vietnam">
                                @if(count($list1)!=0)
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th width="200px">Hình ảnh</th>
                                        <th>Tiêu đề</th>
                                        <th>trạng thái</th>
                                        <th width="100px"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list1 as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                <img src="{{asset('images/news')}}/{{$item->image}}" style="width: 100%">
                                            </td>
                                            <td>{{$item->title}}</td>
                                            <td>
                                                @if($item->is_featured==1)
                                                    <label class="label label-danger">Nổi bật</label>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{url('admin/news/detail-news')}}/{{$item->id}}.html" class="btn btn-primary" title="Chi tiết tin tức"><i class="fa fa-pencil-square-o"></i></a>
                                                @if(count($list1) != 1)
                                                    <a href="{{url('admin/news/delete-news')}}/{{$item->id}}.html" class="btn btn-danger delete" title="Xóa tin tức"><i class="fa fa-times"></i></a>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @endif
                            </div>
                            <div class="tab-pane" id="english">
                                @if(count($list2)!=0)
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th width="5%">#</th>
                                            <th width="200px">Hình ảnh</th>
                                            <th>Tiêu đề</th>
                                            <th>Trạng thái</th>
                                            <th width="100px"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list2 as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <img src="{{asset('images/news')}}/{{$item->image}}" style="width: 100%">
                                                </td>
                                                <td>{{$item->title}}</td>
                                                <td>
                                                    @if($item->is_featured==1)
                                                        <label class="label label-danger">Nổi bật</label>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{url('admin/news/detail-news')}}/{{$item->id}}.html" class="btn btn-primary" title="Chi tiết tin tức"><i class="fa fa-pencil-square-o"></i></a>
                                                    @if(count($list1) != 2)
                                                        <a href="{{url('admin/news/delete-news')}}/{{$item->id}}.html" class="btn btn-danger delete" title="Xóa tin tức"><i class="fa fa-times"></i></a>
                                                    @endif

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endif

                            </div>
                        </div>
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
        $('.delete').click(function (e) {
            var a_href = $(this).attr('href');
            e.preventDefault();
            $.ajax({
                url: a_href,
                type: 'GET',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    $('.body-home').prepend(data);
                    $('#modal-DeleteNews').modal('show');
                }
            });
        });
    </script>
@endsection