{{--  Add Category  --}}
<div class="modal fade" id="editSetting" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">

        <div class="modal-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Setting Update
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('setting.update') }}" method="POST">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <b>Title</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" id="name">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <b>Email</b>
                                        <div class="form-line">
                                            <input type="mail" class="form-control" name="email" id="email">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <b>Email</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="phone" id="phone">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <b>Description</b>
                                        <div class="form-line">
                                            <textarea id="address" rows="2" name="address"
                                                class="form-control no-resize"
                                                placeholder="Please type what you want..." required
                                                autofocus></textarea>
                                        </div>
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

    </div>


</div>
