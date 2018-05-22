
@extends('backend.layouts.master')
@section('title', 'Project')
@section('breadcrumb')
    File Image
@stop
@section('content')
    <div class="file-image">
        <div class="row">
            <div class="col-md-12">
                <h4>Logo website</h4>
                <form action="{{URL::route('change-logo')}}" method="post">
                    {{csrf_field()}}
              <div class="img-avatar">
                  <img style="cursor: pointer" src="{{($logo->image != '')?$logo->image:asset('frontend/assets/img/avatar.png')}}" width="200px" id="img-logo" height="200px" class="thumbnail" alt="">
              </div>
                    <input type="hidden" name="image" value="" id="logo-website">
                   <p style="width: 110px;"> <button type="submit" class="form-control btn btn-success" >Change Logo</button></p>
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <iframe  width="100%" height="550" frameborder="0" src="{{url('/')}}/filemanager/dialog.php?type=&field_id=image-input">
                </iframe>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script>
        $(function() {
            $(document).on('click', '#img-logo', function () {
                $("#imageModalLogo").modal();
                $("#imageModalLogo").on('hidden.bs.modal', function(e) {
                    var image=$('#logo-website').val();
                    $('#img-logo').attr('src', image);
                });
            });
        });
    </script>
@stop
