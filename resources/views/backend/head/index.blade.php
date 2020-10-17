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
@section('header') active @endsection
@section('text_area') active @endsection
@section('title') Head @endsection
@section('content')
<section class="content">

    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb-col-pink ">
            <li><a href="{{ route('header.text_manage') }}"> <i class="material-icons">build</i>Header</a></li>
            <li class="active"><i class="material-icons">add</i>Header</li>
        </ol>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h3>Header Control</h3>
                    </div>
                    <div class="body">
                        <div class="table-responsive text-center">
                            <table
                                class="table-bordered table-striped table-hover @if(count($head)>0) dataTable js-exportable @endif">

                                @if (count($head)>0)
                                <thead>
                                    <tr class="text-uppercase">
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i=1)
                                    @foreach ($head as $item)

                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->subtitle }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->description }}</td>

                                        <td>
                                            {{--  <a href="{{ route('category.edit',['id'=>$category->id]) }}" --}}

                                            <a class="btn bg-success btn-success btn-circle waves-effect waves-circle waves-float" data-toggle="modal"
                                                data-target="#addHeader" data-header_id="{{ $item->id }}" data-header_title="{{ $item->title }}"
                                                data-header_subtitle="{{ $item->subtitle }}"
                                                data-header_name="{{ $item->name }}"
                                                data-header_description="{{ $item->description }}">
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
@include('backend.head.edit')
@endsection
@push('js')
{{--  Update Category  --}}
<script>
    $('#addHeader').on('show.bs.modal', function (event) {
   var button = $(event.relatedTarget)
   var header_id = button.data('header_id')
   var header_title = button.data('header_title')
   var header_subtitle = button.data('header_subtitle')
   var header_name = button.data('header_name')
   var header_description = button.data('header_description')
   var modal = $(this)

   modal.find('.modal-body #title').val(header_title)
   modal.find('.modal-body #subtitle').val(header_subtitle)
   modal.find('.modal-body #header_name').val(header_name)
   modal.find('.modal-body #description').val(header_description)
   modal.find('.modal-body #header_id').val(header_id)
  })
  $(document).off('focusin.modal');
</script>
@endpush
