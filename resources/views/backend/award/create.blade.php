{{--  Add Category  --}}
<div class="modal fade" id="addAward" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">


        <div class="modal-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Award Add
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('award.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <b>Icon</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="icon" id="icon">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <b>Name</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" id="name">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
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
                                            <textarea id="details" rows="3" name="details"
                                                class="form-control no-resize"
                                                placeholder="Please type what you want..." required
                                                autofocus></textarea>
                                        </div>
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
