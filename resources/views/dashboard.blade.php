@extends('layouts.admin')

@section('content')
    <div class="col-lg-3 col-md-6" style="width: 30%">
        <div class="panel panel-primary">
            <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <strong><font size="7">Basic Ed.</font></strong>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div style="font-size: 30px;">
                             4
                            </div>
                            <div>Total Number Reserve</div>
                        </div>
                    </div>
                </div>

                <a href="{{ url('/bed') }}">
                    <div class="panel-footer">
                        <span class="pull-left" style="color: #297AE9">View Report</span>
                        <span class="pull-right" style="color: #297AE9"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
    </div>
@endsection