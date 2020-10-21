{{--  Add Category  --}}
<div class="modal fade" id="editHeaderBanner" tabindex="-1" role="dialog">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Header Banner Update</h4>
            </div>
            <div class="modal-body">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Banner
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{ route('header.banner_update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">

                                   <div class="col-lg-6">
                                        <b>Old Banner</b>
                                        <div class="form-group form-float">
                                            <img class="img-fluid" src="@if(isset($item->banner_image)) {{ asset('/').$item->banner_image }}  @endif"
                                                style="height: 200px; width: 150px" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <b>New Banner</b>
                                        <div class="form-group form-float">

                                            <img src="{{ asset('/') }}backend/images/user.png" style="height: 200px; width: 200px" alt="" id="hero">
                                            <input class="img-fluid" type="file" class="custom-file-input" accept="image/*" name="banner_image" id="image"
                                                onchange="showImage(this, 'hero')">
                                            <label class="custom-file-label" for="inputGroupFile02" id="fileLabel1"></label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <span>Old Resume</span>

                                        <embed src="{{ asset('/').$item->resume }}" type="application/pdf" height="300px" width="100%" class="responsive">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <b>New Resume</b>
                                        <div class="form-group form-float">
                                            <embed src="{{ asset('/')}}backend/images/header/my-cv.pdf" height="300px" width="100%" class="responsive"
                                                id="cv">
                                            <embed type="application/pdf" height="300px" width="100%" class="responsive" id="resume">
                                            <input type="file" class="custom-file-input" name="resume" id="resume"
                                                onchange="showImage(this, 'cv')">
                                            <label class="custom-file-label" for="inputGroupFile02" id="fileLabel1"></label>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <button type="submit"
                                            class="btn btn-primary  m-l-15 waves-effect">UPDATE</button>
                                        <button type="button" class="btn btn-danger waves-effect"
                                            data-dismiss="modal">CLOSE</button>
                                    </div>
                                </div>
                                <input type="hidden" id="header_banner_id" name="id" value="">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>

    </div>
</div>
