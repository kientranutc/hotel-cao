
@extends('backend.layouts.master')
@section('title', 'Contact')
@section('breadcrumb')
    Contact
@stop
@section('content')
    <div class="panel panel-default">
        <div class="panel panel-default table-responsive">
            <div class="panel-heading">
                <h4 class="text-danger">Contact</h4>
            </div>
            <div class="padding-md clearfix">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="dataTable">
                        <thead>
                        <tr>
                            <th width="5%" class="text-center">ID</th>
                            <th width="15%" class="text-center">Name</th>
                            <th width="15%" class="text-center">Email</th>
                            <th width="10%" class="text-center">Phone</th>
                            <th width="10%" class="text-center">Content</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($contact  as $item)
                            <tr>
                                <td class="text-center">{{++$stt}}</td>
                                <td class="text-center">{{$item->name}}</td>
                                <td class="text-center">{{$item->email}}</td>
                                <td class="text-center">{{$item->phone}}</td>
                                <td class="text-center">{{$item->content}}</td>
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
                    "targets": 4,
                    "orderable": false
                } ]
            });
        });
    </script>
@stop
