{{--  Add Category  --}}
<div class="modal fade" id="addImage" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">


        <div class="modal-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Banner and Resume
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('header.resume') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <b>Banner Image</b>
                                    <div class="form-group form-float">

                                        <img src="{{ asset('/') }}backend/images/user.png"
                                            style="height: 200px; width: 200x;p" alt="" id="banner_image">
                                        <input type="file" class="custom-file-input" accept="image/*" name="banner_image"
                                            id="banner_image" onchange="showImage(this, 'banner_image')" class="img-fluid">
                                        <label class="custom-file-label" for="inputGroupFile02" id="fileLabel1"></label>

                                    </div>
                                </div>
                               <div class="col-lg-12 col-md-12 col-sm-12">
                                    <b>New Resume</b>
                                    <div class="form-group form-float">
                                        <embed src="{{ asset('/')}}backend/images/header/my-cv.pdf" height="300px" width="100%" class="responsive"
                                            id="resume">
                                        <embed type="application/pdf" height="300px" width="100%" class="responsive" id="resume">
                                        <input type="file" class="custom-file-input" name="resume" id="image"
                                            onchange="showImage(this, 'resume')">
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
