@extends('backend.master')
@section('home') active @endsection
@section('title') This Zuyel Portfolio Website @endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>WELCOME ! DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">work</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL PRODUCT</div>
                        <div class="number count-to"
                            data-speed="1000" data-fresh-interval="20">{{ $service }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">live_help</i>
                    </div>
                    <div class="content">
                        <div class="text">Skills</div>
                       <div class="number count-to" data-speed="1000" data-fresh-interval="20">{{ $skill }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">library_books</i>
                    </div>
                   <div class="content">
                        <div class="text">Educations</div>
                        <div class="number count-to" data-speed="1000" data-fresh-interval="20">{{ $education }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-purple hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">directions_run</i>
                    </div>
                    <div class="content">
                        <div class="text">Experiences</div>
                        <div class="number count-to" data-speed="1000" data-fresh-interval="20">{{ $experience }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-teal hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">offline_pin</i>
                    </div>
                  <div class="content">
                        <div class="text">Certificates</div>
                        <div class="number count-to" data-speed="1000" data-fresh-interval="20">{{ $certificate }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-indigo hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">done_all</i>
                    </div>
                    <div class="content">
                        <div class="text">Projects</div>
                        <div class="number count-to" data-speed="1000" data-fresh-interval="20">{{ $project }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-red hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">assignment_turned_in</i>
                    </div>
                    <div class="content">
                        <div class="text">Awards</div>
                        <div class="number count-to" data-speed="1000" data-fresh-interval="20">{{ $award }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">contact_mail</i>
                    </div>
                    <div class="content">
                        <div class="text">Contacts</div>
                        <div class="number count-to" data-speed="1000" data-fresh-interval="20">{{ $contact }}
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
@endsection
