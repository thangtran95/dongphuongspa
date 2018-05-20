<div class="modal fade" id="modal-DeleteUser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xác nhận xóa User</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th width="110px">Avatar</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>phone</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img id="avatar" src="{{asset('images/user')}}/{{$user->avatar}}" style="width: 100px; height: 100px">
                            </td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if($user->role==0)
                                    Administrator
                                @else
                                    User
                                @endif
                            </td>
                            <td>{{$user->phone}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                <a href="{{url('admin/user/remove-user')}}/{{$user->id}}.html" type="button" class="btn btn-danger">Delete</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>