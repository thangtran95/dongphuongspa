<div class="modal fade detail" id="modal-Report">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Thông tin {{$report->name_vi}} ({{$report->name_en}})</h4>
            </div>
            <form role="form" action="{{url('admin/report/detail-report')}}/{{$report->id}}.html" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tên (tiếng việt)</label>
                        <input type="text" class="form-control" name="name_vi" value="{{$report->name_vi}}" required>
                    </div>
                    <div class="form-group">
                        <label>Tên (tiếng anh)</label>
                        <input type="text" class="form-control" name="name_en" value="{{$report->name_en}}" required>
                    </div>
                    <div class="form-group">
                        <label>Số</label>
                        <input type="number" class="form-control" name="number" value="{{$report->number}}" required>
                    </div>
                    <div class="form-group">
                        <label>Thứ tự hiển thị</label>
                        <input type="number" class="form-control" name="sort_order" value="{{$report->sort_order}}" required>
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