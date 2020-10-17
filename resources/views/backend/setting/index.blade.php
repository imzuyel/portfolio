@extends('backend.master')


@section('setting') active @endsection
@section('title') Setting @endsection
@section('content')
<section class="content">

    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb-col-pink ">
            <li><a href="{{ route('setting.index') }}"> <i class="material-icons">settings</i>Setting</a></li>
        </ol>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-8 col-xs-8 col-lg-offset-2">
                <div class="card">
                    <div class="header">
                        <h3>Setting Control</h3>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table-bordered table-striped table-hover">

                                <thead>
                                    <tr class="text-uppercase">
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($setting as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>

                                            <a class="btn bg-success btn-success btn-circle waves-effect waves-circle waves-float"
                                                data-toggle="modal" data-target="#editSetting" data-id="{{ $item->id }}"
                                                data-name="{{ $item->name }}" data-email="{{ $item->email }}"
                                                data-address="{{ $item->address }}" data-phone="{{ $item->phone }}">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
@include('backend.setting.edit')
@endsection
@push('js')
{{--  Update Category  --}}
<script>
    $('#editSetting').on('show.bs.modal', function (event) {
   var button = $(event.relatedTarget)
   var id = button.data('id')
   var name = button.data('name')
   var email = button.data('email')
   var phone = button.data('phone')
   var address = button.data('address')
   var modal = $(this)

   modal.find('.modal-body #name').val(name)
   modal.find('.modal-body #email').val(email)
   modal.find('.modal-body #phone').val(phone)
   modal.find('.modal-body #address').val(address)
   modal.find('.modal-body #id').val(id)
  })

</script>
@endpush
