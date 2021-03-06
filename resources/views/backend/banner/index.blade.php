
@extends('backend.layouts.master')
@section('title', 'quản lý chung')
@section('breadcrumb')
    Banner
@stop
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <a href="{{URL::route('banner-create')}}" class="btn btn-success">Add New</a>
        </div><!-- /page-title -->
        <div class="panel panel-default table-responsive">
            <div class="panel-heading">
                <h4 class="text-danger">Banner</h4>
            </div>
            <div class="padding-md clearfix">
                <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable">
                    <thead>
                    <tr>
                        <th width="5%" class="text-center">ID</th>
                        <th width="15%" class="text-center">Title English</th>
                        <th width="15%" class="text-center">Title Vietnamese</th>
                        <th width="10%" class="text-center">Image</th>
                        <th width="10%" class="text-center">Active</th>
                        <th width="10%" class="text-center">User create</th>
                        <th width="10%" class="text-center">Create date</th>
                        <th width="10%" class="text-center"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($dataBanner  as $item)
                        <tr>
                            <td class="text-center">{{++$stt}}</td>
                            <td class="text-center">{{$item->title_en}}</td>
                            <td class="text-center">{{$item->title_vi}}</td>
                            <td class="text-center"><img src="{{$item->image}}" alt="{{$item->image}}"></td>
                            <td class="text-center">
                                @if($item->active==1)
                                    <span class="btn btn-success btn-sm">Active</span>
                                @else
                                    <span class="btn btn-danger btn-sm">InActive</span>
                                @endif
                            </td>
                            <td class="text-center">{{$item->user_create}}</td>
                            <td class="text-center">{{$item->created_at}}</td>
                            <td class="text-center">
                                <a href="{{URL::route('banner-edit', $item->id)}}" data-toggle="tooltip" title="Edit" class="btn btn-success"><i class="fa fa-edit fa-lg"></i></a>
                                <a href="{{URL::route('banner-delete',$item->id)}}" data-toggle="tooltip" title="Delete" data-toggle="modal"  class="btn btn-danger delete-view"><i class="fa fa-trash-o fa-lg"></i></a>
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
