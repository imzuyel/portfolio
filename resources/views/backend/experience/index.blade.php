@push('css')
<!-- JQuery DataTable Css -->
<link href="{{ asset('/') }}backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css"
    rel="stylesheet">

@endpush

@extends('backend.master')
@section('experience') active @endsection
@section('title') Experiences @endsection
@section('content')
<section class="content">

    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb-col-pink ">
            <li><a href="{{ route('experience.index') }}"> <i class="material-icons">directions_run</i>Experience</a></li>
        </ol>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="card">
                    <div class="header">
                        <h3>Experience Control <span><a class="btn bg-success btn-success waves-float" data-toggle="modal"
                                    data-target="#createExperiences">
                                    Add
                                </a></span></h3>
                    </div>
                    <div class="body">
                        <div class="table table-responsive text-center">
                            <table
                                class="table-bordered table-striped table-hover @if(count($experiences)>0) dataTable js-exportable @endif">

                                @if (count($experiences)>0)
                                <thead>
                                    <tr class="text-uppercase">
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Academy</th>
                                        <th>Start</th>
                                        <th>Finish</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i=1)
                                    @foreach ($experiences as $item)

                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->academy }}</td>
                                        <td>{{ $item->start }}</td>
                                        <td>{{ $item->finish }}</td>
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
                                            <a href="{{ route('experience.unpublished',['id'=>$item->id]) }}"
                                                class="btn btn-success btn-circle waves-effect waves-circle waves-float waves-light"
                                                id="unpublished" data-toggle="tooltip" data-placement="top"
                                                title="Unpublished" data-original-title="Unpublished">
                                                <i class="material-icons">arrow_downward</i>
                                            </a>
                                            @else
                                            <a href="{{ route('experience.published',['id'=>$item->id]) }}"
                                                class="btn btn-warning btn-circle waves-effect waves-circle waves-float waves-light"
                                                id="published" data-toggle="tooltip" data-placement="top"
                                                title="Published" data-original-title="Published">
                                                <i class="material-icons">publish</i>
                                            </a>
                                            @endif
                                            <a class="btn bg-success btn-info btn-circle waves-effect waves-circle waves-float"
                                                data-toggle="modal" data-target="#editExperiences" data-id="{{ $item->id }}"
                                                data-title="{{ $item->title }}" data-academy="{{ $item->academy }}" data-start="{{ $item->start }}" data-finish="{{ $item->finish }}">
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
@include('backend.experience.create')
@include('backend.experience.edit')
@endsection
@push('js')

{{--  Update Education  --}}
<script>
    $('#editExperiences').on('show.bs.modal', function (event) {
   var button = $(event.relatedTarget)
   var id = button.data('id')
   var title = button.data('title')
   var academy = button.data('academy')
   var start = button.data('start')
   var finish = button.data('finish')
   var modal = $(this)

   modal.find('.modal-body #title').val(title)
   modal.find('.modal-body #academy').val(academy)
   modal.find('.modal-body #start').val(start)
   modal.find('.modal-body #finish').val(finish)
   modal.find('.modal-body #id').val(id)
  })
</script>
@endpush
