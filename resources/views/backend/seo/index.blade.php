@push('css')
<!-- JQuery DataTable Css -->
<link href="{{ asset('/') }}backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css"
    rel="stylesheet">
@endpush

@extends('backend.master')
@section('seo') active @endsection
@section('title') Seo @endsection
@section('content')
<section class="content">

    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb-col-pink ">
            <li><a href="{{ route('seo.index') }}"> <i class="material-icons">label</i>Seo</a></li>
        </ol>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="card">
                    <div class="header">
                        <h3>Seo Control <span><a class="btn bg-success btn-success waves-float" data-toggle="modal"
                                    data-target="#addSeo">
                                    Add
                                </a></span></h3>
                    </div>
                    <div class="body">
                        <div class="table table-responsive text-center">
                            <table
                                class="table-bordered table-striped table-hover @if (count($seos)> 0) dataTable js-exportable @endif">

                                @if (count($seos) > 0)
                                <thead>
                                    <tr class="text-uppercase">
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Share Title</th>
                                        <th>Keywords</th>
                                        <th>Description</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($seos as $item)
                                    <tr>
                                        <td><img src="{{ asset('/') . $item->photo }}" style="width:100px " alt="Image">
                                        </td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->share_title }}</td>
                                        <td>{{ $item->keywords }}</td>
                                        <td>{{ $item->description }}</td>

                                        <td>
                                            <a class="btn bg-success btn-info btn-circle waves-effect waves-circle waves-float"
                                                data-toggle="modal" data-target="#editSeo" data-id="{{ $item->id }}"
                                                data-title="{{ $item->title }}"
                                                data-share_title="{{ $item->share_title }}"
                                                data-keywords="{{ $item->keywords }}"
                                                data-description="{{ $item->description }}">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                @else
                                <span class=" text-danger"> No data found </span>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
@include('backend.seo.create')
@include('backend.seo.edit')
@endsection
@push('js')

{{-- Update Testimonial --}}
<script>
    $('#editSeo').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var title = button.data('title')
            var share_title = button.data('share_title')
            var keywords = button.data('keywords')
            var description = button.data('description')
            var modal = $(this)

            modal.find('.modal-body #title').val(title)
            modal.find('.modal-body #share_title').val(share_title)
            modal.find('.modal-body #keywords').val(keywords)
            modal.find('.modal-body #description').val(description)
            modal.find('.modal-body #id').val(id)
        })

</script>
<script>
    //Image Show Before Upload Start
        $(document).ready(function() {
            $('input[type="file"]').change(function(e) {
                var fileName = e.target.files[0].name;
                if (fileName) {
                    $('#fileLabel').html(fileName);
                }
            });
        });

        function showImage(data, imgId) {
            if (data.files && data.files[0]) {
                var obj = new FileReader();

                obj.onload = function(d) {
                    var image = document.getElementById(imgId);
                    image.src = d.target.result;
                }
                obj.readAsDataURL(data.files[0]);
            }
        }
        //Image Show Before Upload End

</script>
@endpush
