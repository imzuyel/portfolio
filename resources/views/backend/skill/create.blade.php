{{--  Add Category  --}}
<div class="modal fade" id="addSkill" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">


        <div class="modal-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Skill Add
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('skill.store') }}" method="POST">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <b>Name</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="skill_name" id="skill_name">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <b>Value</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="value" id="value">

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
