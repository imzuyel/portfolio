{{--  Add Category  --}}
<div class="modal fade" id="addProject" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">


        <div class="modal-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Project Add
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <b>Name</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" id="name">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <b>Date</b>
                                        <div class="form-line">
                                            <input type="date" class="form-control" name="date" id="date">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <b>Category</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="cat" id="cat">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <b>Title</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="title" id="title">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <b>Link</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="link" id="link">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <b>Details</b>
                                        <div class="form-line">
                                            <textarea id="details" rows="3" name="details"
                                                class="form-control no-resize"
                                                placeholder="Please type what you want..." required
                                                autofocus></textarea>
                                        </div>
                                    </div>
                                </div>
                             <div class="col-lg-12">
                                <b>New Banner</b>
                                <div class="form-group form-float">

                                    <img src="{{ asset('/') }}backend/images/user.png" style="height: 100px; width: auto" alt="" id="photo">
                                    <input type="file" class="custom-file-input" accept="image/*" name="photo" id="photo"
                                        onchange="showImage(this, 'photo')">
                                    <label class="custom-file-label" for="inputGroupFile02" id="fileLabel1"></label>

                                </div>
                            </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary  m-l-15 waves-effect">ADD</button>
                                    <button type="button" class="btn btn-danger waves-effect"
                                        data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                            {{--  <input type="hidden" id="header_id" name="id" value="">  --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">

        </div>


    </div>
</div>
