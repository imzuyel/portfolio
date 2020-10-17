@push('css')
<!-- JQuery DataTable Css -->
<link href="{{ asset('/') }}backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css"
    rel="stylesheet">
<style>
    .modal-backdrop {
        z-index: -1;
    }

</style>
@endpush

@extends('backend.master')
@section('category') active @endsection
@section('header') active @endsection
@section('resume_manage') active @endsection
@section('title') Header Resume @endsection
@section('content')
<section class="content">

    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb-col-pink ">
            <li><a href="{{ route('header.banner_resume') }}"> <i class="material-icons">build</i>Resume</a></li>
            <li class="active"><i class="material-icons">add</i>Update</li>
        </ol>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <form action="{{ route('header.resume_update_save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <span>Old Reueme</span>

                            <embed src="{{ asset('/').$resume->resume }}" type="application/pdf" height="300px"
                                width="100%" class="responsive">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <b>New Resume</b>
                            <div class="form-group form-float">
                                <embed src="{{ asset('/')}}backend/images/header/my-cv.pdf" height="300px" width="100%"
                                    class="responsive" id="banner_image">
                                <embed type="application/pdf" height="300px" width="100%" class="responsive"
                                    id="banner_image">
                                <input type="file" class="custom-file-input" name="resume" id="image"
                                    onchange="showImage(this, 'banner_image')">
                                <label class="custom-file-label" for="inputGroupFile02" id="fileLabel1"></label>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">UPDATE</button>

                        <input id="id" type="hidden" name="id" value="{{ $resume->id }}">
                    </div>
                </form>


            </div>

        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
@include('backend.head.edit_banner')
@endsection
@push('js')
{{--  Update Category  --}}
<script>
    $('#editHeaderBanner').on('show.bs.modal', function (event) {
   var button = $(event.relatedTarget)
   var header_banner_id = button.data('header_banner_id')
   var modal = $(this)
   modal.find('.modal-body #header_banner_id').val(header_banner_id)

  })
  $(document).off('focusin.modal');
</script>

<script>
    //Image Show Before Upload Start
        $(document).ready(function () {
        $('input[type="file"]').change(function (e) {
        var fileName = e.target.files[0].name;
        if (fileName) {
        $('#fileLabel').html(fileName);
        }
        });
        });

        function showImage(data, imgId) {
        if (data.files && data.files[0]) {
        var obj = new FileReader();

        obj.onload = function (d) {
        var image = document.getElementById(imgId);
        image.src = d.target.result;
        }
        obj.readAsDataURL(data.files[0]);
        }
        }
        //Image Show Before Upload End
</script>

@endpush
