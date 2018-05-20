<div class="modal fade" id="modal-DeleteMenu">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xác nhận xóa Sub menu</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Tên (tiếng anh)</th>
                        <th>Tên (tiếng việt)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$menu->name_vi}}</td>
                        <td>{{$menu->name_en}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                <a href="{{url('admin/menu/remove-menu')}}/{{$menu->id}}.html" type="button" class="btn btn-danger">Delete</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>