<div class="modal fade" id="modal-DeleteWorkTime">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xác nhận xóa Thời gian</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Thời gian</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$work_time->name}}</td>
                            <td>{{$work_time->time}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                <a href="{{url('admin/work-time/remove-work-time')}}/{{$work_time->id}}.html" type="button" class="btn btn-danger">Delete</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>