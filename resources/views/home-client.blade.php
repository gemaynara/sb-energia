@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-sm-12">
                <div class="col-sm-12 col-xs-12">
                    <div class="panel panel-default border-panel card-view panel-refresh">
                        <div class="refresh-container">
                            <div class="la-anim-1"></div>
                        </div>
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">consumo nos ultimos meses</h6>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="pull-left inline-block refresh mr-15">
                                    <i class="zmdi zmdi-replay"></i>
                                </a>
                                <a href="#" class="pull-left inline-block full-screen mr-15">
                                    <i class="zmdi zmdi-fullscreen"></i>
                                </a>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="pt-20">
                                    <canvas id="month_consumption" height="100"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>
@endsection
