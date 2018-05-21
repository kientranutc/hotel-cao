
@extends('backend.layouts.master')
@section('title', 'Project')
@section('breadcrumb')
    File Image
@stop
@section('content')
    <div class="file-image">
        <div class="row">
            <div class="col-md-12">
                <iframe  width="100%" height="550" frameborder="0" src="{{url('/')}}/filemanager/dialog.php?type=&field_id=image-input">
                </iframe>
            </div>
        </div>
    </div>
@stop
@section('script')

@stop
