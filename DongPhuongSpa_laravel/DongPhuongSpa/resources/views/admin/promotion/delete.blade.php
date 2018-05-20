<div class="modal fade" id="modal-DeletePromotion">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xác nhận xóa khuyến mãi</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th width="200px">Hình ảnh</th>
                        <th>Tên</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img id="avatar" src="{{asset('images/promotion')}}/{{$promotion->image}}" style="width: 100%">
                            </td>
                            <td>{{$promotion->title}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
                <a href="{{url('admin/promotion/remove-promotion')}}/{{$promotion->id}}.html" type="button" class="btn btn-danger">Xóa</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>