{{--  Add Category  --}}
<div class="modal fade" id="addHeader" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Header text Update</h4>
            </div>
            <div class="modal-body">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Header
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{ route('header.text_update') }}" method="POST">
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
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <b>Subtitle</b>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="subtitle" id="subtitle">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                           <b>Name</b>
                                            <div class="form-line">
                                                <input  type="text" class="form-control" name="name" id="header_name">
                                            </div>
                                        </div>
                                    </div>
                                  <div class="col-12">
                                        <div class="form-group">
                                            <b>Description</b>
                                            <div class="form-line">
                                                <textarea id="description" rows="4" name="description" class="form-control no-resize"
                                                    placeholder="Please type what you want..." required autofocus></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit"
                                            class="btn btn-primary  m-l-15 waves-effect">UPDATE</button>
                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                    </div>
                                </div>
                                <input type="hidden" id="header_id" name="id" value="">
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
