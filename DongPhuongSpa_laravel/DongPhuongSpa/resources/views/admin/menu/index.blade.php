@extends('admin.layout.master')
@section('title')Đông Phương SPA - Danh sách menu @endsection
@section('content')
    <section class="content-header">
        <h1>
            Trang chủ
            <small>Danh sách Menu trang chủ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Menu trang chủ</li>
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
                        <h3 class="box-title">Danh sách Menu trang chủ</h3>
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
                                <th>Thứ tự hiển thị</th>
                                <th>Link</th>
                                <th>Trang thái</th>
                                <th width="100px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name_vi}}</td>
                                    <td>{{$item->name_en}}</td>
                                    <td>{{$item->sort_order}}</td>
                                    <td>{{$item->link}}</td>
                                    <td>
                                        @if($item->is_sub==1)
                                            <label class="label label-success">Có menu con</label>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('admin/menu/detail-menu')}}/{{$item->id}}.html" class="btn btn-primary report" title="Detail price"><i class="fa fa-pencil-square-o"></i></a>
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
    </script>
@endsection