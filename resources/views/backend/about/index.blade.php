
@extends('backend.master')


@section('about') active @endsection
@section('title') About @endsection
@section('content')
<section class="content">

    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb-col-pink ">
            <li><a href="{{ route('about.index') }}"> <i class="material-icons">account_box</i>About</a></li>
        </ol>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h3>About Control
                        @if (count($about)<0)  <span><a class="btn bg-success btn-success waves-float" data-toggle="modal"
                                    data-target="#addAbout">
                                    Add
                                </a></span> @endif

                        </h3>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table-bordered table-striped table-hover">
                                <thead>
                                    <tr class="text-uppercase">
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($about as $item)
                                    <tr>
                                        <td>{{ $item->title }}</td>
                                        <td><img src="{{ asset('/').$item->photo }}" style="width: 100px" alt="about"></td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            {{--  <a href="{{ route('category.edit',['id'=>$category->id]) }}" --}}

                                            <a class="btn bg-success btn-success btn-circle waves-effect waves-circle waves-float"
                                                data-toggle="modal" data-target="#editAbout"
                                                data-about_id="{{ $item->id }}" data-title="{{ $item->title }}"
                                                data-description="{{ $item->description }}">
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
@include('backend.about.create')
@include('backend.about.edit')
@endsection
@push('js')
{{--  Update Category  --}}
<script>
    $('#editAbout').on('show.bs.modal', function (event) {
   var button = $(event.relatedTarget)
   var about_id = button.data('about_id')
   var title = button.data('title')
   var description = button.data('description')
   var modal = $(this)

   modal.find('.modal-body #title').val(title)
   modal.find('.modal-body #description').val(description)
   modal.find('.modal-body #about_id').val(about_id)
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
