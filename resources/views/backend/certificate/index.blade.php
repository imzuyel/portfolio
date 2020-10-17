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
@section('certificate') active @endsection
@section('title') Certificates @endsection
@section('content')
<section class="content">

    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb-col-pink ">
            <li><a href="{{ route('certificate.index') }}"> <i class="material-icons">offline_pin</i>Certificates</a>
            </li>
        </ol>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1">
                <div class="card">
                    <div class="header">
                        <h3>Certificate Control <span><a class="btn bg-success btn-success waves-float"
                                    data-toggle="modal" data-target="#addCertificate">
                                    Add
                                </a></span></h3>
                    </div>
                    <div class="body">
                        <div class="table col-lg-offset-2 table-responsive text-center">
                            <table
                                class="table-bordered table-striped table-hover @if(count($certificates)>0) dataTable js-exportable @endif">

                                @if (count($certificates)>0)
                                <thead>
                                    <tr class="text-uppercase">
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i=1)
                                    @foreach ($certificates as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td><img src="{{ asset('/').$item->photo }}" style="width:100px "
                                                alt="Certificacte"></td>
                                        <td>{{ $item->date }}</td>
                                        <td>
                                            @if ($item->status==1)
                                            <h4><span class="label label-success">Active</span></h4>
                                            @else
                                            <h4><span class="label label-danger">Inactive</span></h4>
                                            @endif
                                        </td>
                                        <td>
                                            {{--  <a href="{{ route('category.edit',['id'=>$category->id]) }}" --}}
                                            @if ($item->status==1)
                                            <a href="{{ route('certificate.unpublished',['id'=>$item->id]) }}"
                                                class="btn btn-success btn-circle waves-effect waves-circle waves-float waves-light"
                                                id="unpublished" data-toggle="tooltip" data-placement="top"
                                                title="Unpublished" data-original-title="Unpublished">
                                                <i class="material-icons">arrow_downward</i>
                                            </a>
                                            @else
                                            <a href="{{ route('certificate.published',['id'=>$item->id]) }}"
                                                class="btn btn-warning btn-circle waves-effect waves-circle waves-float waves-light"
                                                id="published" data-toggle="tooltip" data-placement="top"
                                                title="Published" data-original-title="Published">
                                                <i class="material-icons">publish</i>
                                            </a>
                                            @endif
                                            <a class="btn bg-success btn-info btn-circle waves-effect waves-circle waves-float"
                                                data-toggle="modal" data-target="#editCertificate"
                                                data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                                data-details="{{ $item->details }}" data-date="{{ $item->date }}" data-source="{{ $item->source }}"
                                                data-photo="{{ $item->photo }}">
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
@include('backend.certificate.create')
@include('backend.certificate.edit')
@endsection
@push('js')


{{--  Update Service  --}}
<script>
    $('#editCertificate').on('show.bs.modal', function (event) {
   var button = $(event.relatedTarget)
   var id = button.data('id')
   var name = button.data('name')
   var date = button.data('date')
   var details = button.data('details')
   var source = button.data('source')
   var modal = $(this)

   modal.find('.modal-body #name').val(name)
   modal.find('.modal-body #date').val(date)
   modal.find('.modal-body #details').val(details)
   modal.find('.modal-body #source').val(source)
   modal.find('.modal-body #id').val(id)
  })
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
