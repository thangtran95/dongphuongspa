<div class="modal fade" id="modal-DeleteSlide">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xác nhận xóa Slide</h4>
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
                                <img id="avatar" src="{{asset('images/slide')}}/{{$slide->image}}" style="width: 100%">
                            </td>
                            <td>{{$slide->name}}</td>
                            <td>
                                @if($slide->status==0)
                                    <label class="label label-danger">Hide</label>
                                @else
                                    <label class="label label-success">Show</label>
                                @endif
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                <a href="{{url('admin/slide/remove-slide')}}/{{$slide->id}}.html" type="button" class="btn btn-danger">Delete</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>