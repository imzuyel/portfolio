@push('css')
<!-- JQuery DataTable Css -->
<link href="{{ asset('/') }}backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css"
    rel="stylesheet">

@endpush

@extends('backend.master')
@section('award') active @endsection
@section('title') Award @endsection
@section('content')
<section class="content">

    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb-col-pink ">
            <li><a href="{{ route('award.index') }}"> <i class="material-icons">assignment_turned_in</i>Award</a></li>
        </ol>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1">
                <div class="card">
                    <div class="header">
                        <h3>Award Control <span><a class="btn bg-success btn-success waves-float" data-toggle="modal"
                                    data-target="#addAward">
                                    Add
                                </a></span></h3>
                    </div>
                    <div class="body">
                        <div class="table  table-responsive text-center">
                            <table
                                class="table-bordered table-striped table-hover @if(count($awards)>0) dataTable js-exportable @endif">

                                @if (count($awards)>0)
                                <thead>
                                    <tr class="text-uppercase">
                                        <th>Name</th>
                                        <th>Icon</th>
                                        <th>Details</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($awards as $item)

                                    <tr>

                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->icon }}</td>
                                        <td>{{ $item->details }}</td>
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
                                            <a href="{{ route('award.unpublished',['id'=>$item->id]) }}"
                                                class="btn btn-success btn-circle waves-effect waves-circle waves-float waves-light"
                                                id="unpublished" data-toggle="tooltip" data-placement="top"
                                                title="Unpublished" data-original-title="Unpublished">
                                                <i class="material-icons">arrow_downward</i>
                                            </a>
                                            @else
                                            <a href="{{ route('award.published',['id'=>$item->id]) }}"
                                                class="btn btn-warning btn-circle waves-effect waves-circle waves-float waves-light"
                                                id="published" data-toggle="tooltip" data-placement="top"
                                                title="Published" data-original-title="Published">
                                                <i class="material-icons">publish</i>
                                            </a>
                                            @endif
                                            <a class="btn bg-success btn-info btn-circle waves-effect waves-circle waves-float"
                                                data-toggle="modal" data-target="#editAward" data-id="{{ $item->id }}"
                                                data-name="{{ $item->name }}" data-icon="{{ $item->icon }}" data-details="{{ $item->details }}"
                                                data-source="{{ $item->source }}" >
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
@include('backend.award.create')
@include('backend.award.edit')
@endsection
@push('js')


{{--  Update Service  --}}
<script>
    $('#editAward').on('show.bs.modal', function (event) {
   var button = $(event.relatedTarget)
   var id = button.data('id')
   var name = button.data('name')
   var icon = button.data('icon')
   var source = button.data('source')
   var details = button.data('details')
   var modal = $(this)

   modal.find('.modal-body #name').val(name)
   modal.find('.modal-body #icon').val(icon)
   modal.find('.modal-body #details').val(details)
   modal.find('.modal-body #source').val(source)
   modal.find('.modal-body #id').val(id)
  })
</script>

@endpush
