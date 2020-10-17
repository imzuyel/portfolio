
@extends('backend.master')
@section('contact') active @endsection
@section('title') Contac @endsection
@section('content')
<section class="content">

    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb-col-pink ">
            <li><a href="{{ route('contact.index') }}"> <i class="material-icons">contact_mail</i>Contact</a></li>
        </ol>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="card">
                    <div class="header">
                        <h3>Contact Control</h3>
                    </div>
                    <div class="body">
                        <div class="table table-responsive text-center">
                            <table
                                class="table-bordered table-striped table-hover @if(count($contacts)>0) dataTable js-exportable @endif">

                                @if (count($contacts)>0)
                                <thead>
                                    <tr class="text-uppercase">
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i=1)
                                    @foreach ($contacts as $item)

                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td>
                                            <a id="delete" href="{{ route('contact.delete',['id'=>$item->id]) }}" class="btn bg-danger btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i>
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
@endsection
