<div class="modal fade" id="modal-DeleteSlide">
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
                        <th>Tiêu đề</th>
                        <th>Trạng thái</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img id="avatar" src="{{asset('images/product')}}/{{$product->image}}" style="width: 100%">
                            </td>
                            <td>{{$product->name}}</td>
                            <td>
                                @if($product->is_sale==1)
                                    <label class="label label-danger">Sale</label>
                                @endif
                                @if($product->is_new==1)
                                    <label class="label label-success">Mới</label>
                                @endif
                                @if($product->is_selling==1)
                                    <label class="label label-info">Bán Chạy</label>
                                @endif
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                <a href="{{url('admin/product/remove-product')}}/{{$product->id}}.html" type="button" class="btn btn-danger">Delete</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>