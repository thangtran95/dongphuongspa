@extends('admin.layout.master')
@section('title')Đông Phương SPA - Tin tức @endsection
@section('content')
    <section class="content-header">
        <h1>
            Trang chủ
            <small>Danh sách Liên hệ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Liên hệ</li>
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
                        <h3 class="box-title">Danh sách Liên hệ</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(count($list)!=0)
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>Họ và tên</th>
                                <th>Email</th>
                                <th>Dịch vụ</th>
                                <th>trạng thái</th>
                                <th width="100px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->last_name}} {{$item->first_name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->service}}</td>
                                    <td>
                                        @if($item->status==0)
                                            <label class="label label-danger">Mới</label>
                                        @else
                                            <label class="label label-success">Đã xem</label>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('admin/contact/detail-contact')}}/{{$item->id}}.html" class="btn btn-primary" title="Chi tiết tin tức"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="{{url('admin/contact/delete-contact')}}/{{$item->id}}.html" class="btn btn-danger delete" title="Xóa tin tức"><i class="fa fa-times"></i></a>

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
        $('.delete').click(function (e) {
            var a_href = $(this).attr('href');
            e.preventDefault();
            $.ajax({
                url: a_href,
                type: 'GET',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    $('.body-home').prepend(data);
                    $('#modal-DeleteContact').modal('show');
                }
            });
        });
    </script>
@endsection