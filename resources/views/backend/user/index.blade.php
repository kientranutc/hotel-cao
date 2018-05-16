
@extends('backend.layouts.master')
@section('title', 'User')
@section('breadcrumb')
    user
@stop
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            @if (Auth::user()->is_admin==1)
                <a href="{{URL::route('user-create')}}" class="btn btn-success">Add New</a>
            @endif
        </div><!-- /page-title -->
        <div class="panel panel-default table-responsive">
            <div class="panel-heading">
                <h4 class="text-danger">User</h4>
            </div>
            <div class="padding-md clearfix">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="dataTable">
                        <thead>
                        <tr>
                            <th width="5%" class="text-center">ID</th>
                            <th width="15%" class="text-center">UserName</th>
                            <th width="15%" class="text-center">Fullname</th>
                            <th width="10%" class="text-center">Image</th>
                            <th width="10%" class="text-center">Email</th>
                            <th width="10%" class="text-center">Role</th>
                            <th width="10%" class="text-center">Create date</th>
                            <th width="10%" class="text-center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($dataUser  as $item)
                            <tr>
                                <td class="text-center">{{++$stt}}</td>
                                <td class="text-center">{{$item->username}}</td>
                                <td class="text-center">{{$item->fullname}}</td>
                                <td class="text-center"><img src="{{$item->image}}" alt="{{$item->image}}"></td>
                                <td class="text-center">{{$item->email}}</td>
                                <td class="text-center">
                                    @if($item->is_admin==1)
                                        <span class="btn btn-success btn-sm">Admin</span>
                                    @else
                                        <span class="btn btn-danger btn-sm">Member</span>
                                    @endif
                                </td>
                                <td class="text-center">{{$item->created_at}}</td>
                                <td class="text-center">
                                    @if ($item->is_admin !=1)
                                        <a href="{{URL::route('user-delete',$item->id)}}" data-toggle="tooltip" title="Delete" data-toggle="modal"  class="btn btn-danger delete-view"><i class="fa fa-trash-o fa-lg"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.padding-md -->
        </div>
        <!-- /panel -->
    </div>
@stop
@section('script')
    <script>
        $(function() {
            $('#dataTable').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers",
                //edit name pagination
                // "language": {
                //     "paginate": {
                //         "first":"Đầu",
                //         "previous": "Trước",
                //         "next":"Tiếp",
                //         "last":"cuối"
                //     },
                //     "sLengthMenu": "Xem _MENU_ bản ghi",
                //     "sInfo":         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                //     "sInfoFiltered": "(được lọc từ _MAX_ mục)",
                //     "sZeroRecords":  "Không tìm thấy dòng nào phù hợp",
                //     'sSearchPlaceholder':'Tìm kiếm'
                // },
                "columnDefs": [ {
                    "targets": 7,
                    "orderable": false
                } ]
            });
        });
    </script>
@stop
