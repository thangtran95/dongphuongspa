<div class="modal fade detail" id="modal-Info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Thông tin</h4>
            </div>
            <form role="form" action="{{url('admin/info/detail-info')}}/{{$info->id}}.html" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tên (tiếng việt)</label>
                        <input type="text" class="form-control" name="name_vi" value="{{$info->name_vi}}" required>
                    </div>
                    <div class="form-group">
                        <label>Tên (tiếng anh)</label>
                        <input type="text" class="form-control" name="name_en" value="{{$info->name_en}}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>