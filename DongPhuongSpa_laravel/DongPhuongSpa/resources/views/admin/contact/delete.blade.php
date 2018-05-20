<div class="modal fade" id="modal-DeleteContact">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xác nhận xóa liên hệ</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Họ và tên</th>
                        <th>Email</th>
                        <th>Dịch vụ</th>
                        <th>trạng thái</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$contact->last_name}} {{$contact->first_name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->service}}</td>
                        <td>
                            @if($contact->status==0)
                                <label class="label label-danger">Mới</label>
                            @else
                                <label class="label label-success">Đã xem</label>
                            @endif
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
                <a href="{{url('admin/contact/remove-contact')}}/{{$contact->id}}.html" type="button" class="btn btn-danger">Xóa</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>