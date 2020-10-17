@push('css')
<!-- JQuery DataTable Css -->
<link href="{{ asset('/') }}backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css"
    rel="stylesheet">
@endpush

@extends('backend.master')
@section('category') active @endsection
@section('header') active @endsection
@section('banaer_manage') active @endsection
@section('title') Header Banner @endsection
@section('content')
<section class="content">

    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb-col-pink ">
            <li><a href="{{ route('header.banner_image') }}"> <i class="material-icons">build</i>Header</a></li>
            <li class="active"><i class="material-icons">add</i>Banner</li>
        </ol>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                        <div class="row clearfix">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <span  class="m-b-3"></span>
                                @foreach ($head_banner as $item)
                                <img  class=""
                                    src="@if(isset($item->banner_image)) {{ asset('/').$item->banner_image }}  @endif"
                                    style="width: 100% ;margin-top: 10px;" alt="">

                            </div>
                            <div class="col-lg-12 m-b-15 m-t-15">
                                <a class="btn bg-success btn-block btn-success  waves-effect  waves-float"
                                    data-toggle="modal" data-target="#editHeaderBanner"

                                    data-header_banner_id="{{ $item->id }}">

                                 Edit
                                </a>
                            </div>
                            @endforeach

                        </div>


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
