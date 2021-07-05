{{--  Add Category  --}}
<div class="modal fade" id="addSeo" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">


        <div class="modal-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>


                            Seo Add
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('seo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <b>Title</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="title" id="title">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <b>Share Title</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="share_title" id="share_title">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <b>keywords</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="keywords" id="keywords">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <b>Description</b>
                                        <div class="form-line">
                                            <textarea id="description" rows="4" name="description"
                                                class="form-control no-resize"
                                                placeholder="Please type what you want..." required
                                                autofocus></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <b>Image</b>
                                    <div class="form-group form-float">

                                        <img src="{{ asset('/') }}backend/images/user.png"
                                            style="height: 100px; width: auto" alt="" id="photo">
                                        <input type="file" class="custom-file-input" accept="image/*" name="photo"
                                            id="photo" onchange="showImage(this, 'photo')">
                                        <label class="custom-file-label" for="inputGroupFile02" id="fileLabel1"></label>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary  m-l-15 waves-effect">ADD</button>
                                    <button type="button" class="btn btn-danger waves-effect"
                                        data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">

        </div>


    </div>
</div>
