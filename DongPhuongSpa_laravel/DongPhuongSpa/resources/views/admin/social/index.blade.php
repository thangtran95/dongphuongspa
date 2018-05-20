@extends('admin.layout.master')
@section('title')Đông Phương SPA - List Info @endsection
@section('content')
    <section class="content-header">
        <h1>
            Trang chủ
            <small>Danh sách Mạng xã hội</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Danh sách Mạng xã hội</li>
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
                        <h3 class="box-title">Danh sách Mạng xã hội</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#info" data-toggle="tab">Thông tin Spa</a></li>
                                <li><a href="#lable" data-toggle="tab">Lable Thông tin</a></li>
                                <li><a href="#social" data-toggle="tab">Mạng xã hội</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="active tab-pane" id="info">
                                @if(count($list1)!=0)
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th width="5%">#</th>
                                            <th>Tên tiếng việt</th>
                                            <th>Tên tiếng anh</th>
                                            <th>Icon</th>
                                            <th>Link</th>
                                            <th width="100px"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list1 as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->name_vi}}</td>
                                                <td>{{$item->name_en}}</td>
                                                <td>
                                                    <i class="{{$item->icon}}" aria-hidden="true"></i>&nbsp;&nbsp;
                                                    ({{$item->icon}})
                                                </td>
                                                <td>{{$item->link}}</td>
                                                <td>
                                                    <a href="{{url('admin/menu-right/detail-menu-right')}}/{{$item->id}}.html" class="btn btn-primary report" title="Chi tiết menu"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                            <div class="tab-pane" id="lable">
                                @if(count($list2)!=0)
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th width="5%">#</th>
                                            <th>Tên tiếng việt</th>
                                            <th>Tên tiếng anh</th>
                                            <th>Image</th>
                                            <th>Link</th>
                                            <th width="100px"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list2 as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->name_vi}}</td>
                                                <td>{{$item->name_en}}</td>
                                                <td>
                                                    <img src="{{asset('images/home')}}/{{$item->icon}}" style="padding: 10px; width: 60px;background: #6d5f5f">
                                                </td>
                                                <td>{{$item->link}}</td>
                                                <td>
                                                    <a href="{{url('admin/menu-right/detail-menu-right')}}/{{$item->id}}.html" class="btn btn-primary report" title="Chi tiết menu"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                            <div class="tab-pane" id="social">
                                @if(count($list3)!=0)
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th width="5%">#</th>
                                            <th>Tên tiếng việt</th>
                                            <th>Tên tiếng anh</th>
                                            <th>Icon</th>
                                            <th>Link</th>
                                            <th width="100px"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list3 as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->name_vi}}</td>
                                                <td>{{$item->name_en}}</td>
                                                <td>
                                                    <i class="{{$item->icon}}" aria-hidden="true"></i>&nbsp;&nbsp;
                                                    ({{$item->icon}})
                                                </td>
                                                <td>{{$item->link}}</td>
                                                <td>
                                                    <a href="{{url('admin/menu-right/detail-menu-right')}}/{{$item->id}}.html" class="btn btn-primary report" title="Chi tiết menu"><i class="fa fa-pencil-square-o"></i></a>
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
        $('.report').click(function (e) {
            var a_href = $(this).attr('href');
            e.preventDefault();
            $.ajax({
                url: a_href,
                type: 'GET',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    $('.body-home').prepend(data);
                    $('#modal-MenuRight').modal('show');
                }
            });
        });
    </script>
@endsection