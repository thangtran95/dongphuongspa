<div class="modal fade" id="modal-DeleteNews">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xác nhận xóa tin tức</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th width="200px">Hình ảnh</th>
                        <th>Tên</th>
                        <th>Trạng thái</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img id="avatar" src="{{asset('images/news')}}/{{$news->image}}" style="width: 100%">
                            </td>
                            <td>{{$news->title}}</td>
                            <td>
                                @if($news->is_featured==1)
                                    <label class="label label-danger">Nổi bật</label>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
                <a href="{{url('admin/news/remove-news')}}/{{$news->id}}.html" type="button" class="btn btn-danger">Xóa</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>