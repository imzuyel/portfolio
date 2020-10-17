{{--  Add Category  --}}
<div class="modal fade" id="editCertificate" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">


        <div class="modal-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Certificate Update
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('certificate.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                               <div class="col-lg-3">
                                        <div class="form-group">
                                            <b>Title</b>
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
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <b>Source</b>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="source" id="source">

                                            </div>
                                        </div>
                                    </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <b>Details</b>
                                        <div class="form-line">
                                            <textarea id="details" rows="4" name="details"
                                                class="form-control no-resize"
                                                placeholder="Please type what you want..." required
                                                autofocus></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <b>New Certificate Image</b>
                                    <div class="form-group form-float">

                                        <img src="{{ asset('/') }}backend/images/user.png"
                                            style="height: 100px; width: auto" alt="" id="show">
                                        <input type="file" class="custom-file-input" accept="image/*" name="photo"
                                            id="image" onchange="showImage(this, 'show')">
                                        <label class="custom-file-label" for="inputGroupFile02" id="fileLabel1"></label>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary  m-l-15 waves-effect">UPDATE</button>
                                    <button type="button" class="btn btn-danger waves-effect"
                                        data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                            <input type="hidden" id="id" name="id" value="">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">

        </div>


    </div>
</div>
