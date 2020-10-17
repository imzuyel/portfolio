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
@section('title') Header Banner @endsection
@section('content')
<section class="content">

    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb-col-pink ">
            <li><a href="{{ route('header.banner_resume') }}"> <i class="material-icons">build</i>Header</a></li>
            <li class="active"><i class="material-icons">add</i>Resume</li>
        </ol>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <span>Banner Resume</span>
                        @foreach ($head_banner as $item)
                        <embed src="@if(isset($item->resume)) {{ asset('/').$item->resume }}  @endif"
                            type="application/pdf" height="300px" width="100%" class="responsive">
                    </div>
                    <div class="col-lg-12 m-b-15 m-t-15 ">
                        <a href="{{ route('header.resume_update',['id'=>$item->id]) }}" class="btn bg-deep-purple btn-info waves-effect pull-right">
                            Edit Resume
                        </a>
                    </div>
                    @endforeach
                </div>


            </div>

        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
@endsection
@push('name')

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
