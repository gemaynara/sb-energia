@extends('layouts.template')
@section('content')
        <div class="row " id="chart-admin" data-chart="{{route('dashboard-admin')}}">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view pa-0">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                    <span class="txt-dark block counter"><span class="counter-anim clients"></span></span>
                                                    <span class="capitalize-font block">clientes</span>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <i class="icon-user data-right-rep-icon"></i>
                                                </div>
                                            </div>
{{--                                            <div class="progress-anim">--}}
{{--                                                <div class="progress">--}}
{{--                                                    <div class="progress-bar progress-bar-orange--}}
{{--    															wow animated progress-animated" role="progressbar"--}}
{{--                                                         aria-valuenow="70" aria-valuemin="0"--}}
{{--                                                         aria-valuemax="100"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view pa-0">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                    <span class="txt-dark block counter"><span class="counter-anim distributors">46.41</span>%</span>
                                                    <span class="capitalize-font block">distribuidoras</span>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <i class="icon-energy data-right-rep-icon"></i>
                                                </div>
                                            </div>
{{--                                            <div class="progress-anim">--}}
{{--                                                <div class="progress">--}}
{{--                                                    <div class="progress-bar progress-bar-orange--}}
{{--    															wow animated progress-animated" role="progressbar"--}}
{{--                                                         aria-valuenow="80" aria-valuemin="0"--}}
{{--                                                         aria-valuemax="100"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <div class="panel panel-default border-panel card-view panel-refresh">
                            <div class="refresh-container">
                                <div class="la-anim-1"></div>
                            </div>
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">user statistics</h6>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="pull-left inline-block refresh mr-15">
                                        <i class="zmdi zmdi-replay"></i>
                                    </a>
                                    <a href="#" class="pull-left inline-block full-screen mr-15">
                                        <i class="zmdi zmdi-fullscreen"></i>
                                    </a>
                                    <div class="pull-left inline-block dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"
                                           aria-expanded="false" role="button"><i
                                                class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu bullet dropdown-menu-right" role="menu">
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i
                                                        class="icon wb-reply" aria-hidden="true"></i>Devices</a>
                                            </li>
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i
                                                        class="icon wb-share" aria-hidden="true"></i>General</a>
                                            </li>
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i
                                                        class="icon wb-trash" aria-hidden="true"></i>Referral</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div id="ct_chart_2" class="" style="height:326px;"></div>
                                    <ul class="flex-stat mt-40">
                                        <li>
                                            <span class="block">Weekly Users</span>
                                            <span class="block txt-dark weight-500 font-18"><span
                                                    class="counter-anim">3,24,222</span></span>
                                        </li>
                                        <li>
                                            <span class="block">Monthly Users</span>
                                            <span class="block txt-dark weight-500 font-18"><span
                                                    class="counter-anim">1,23,432</span></span>
                                        </li>
                                        <li>
                                            <span class="block">Trend</span>
                                            <span class="block">
    														<i class="zmdi zmdi-trending-up txt-success font-24"></i>
    													</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <div class="panel panel-default border-panel panel-tabs card-view">
                            <div class="panel-heading">
                                <div class="pull-left auto-width">
                                    <h6 class="panel-title txt-dark">Project Sales</h6>
                                </div>
                                <div class="pull-right auto-width mt-0">
                                    <div class="tab-struct custom-tab-1">
                                        <ul role="tablist" class="nav nav-tabs" id="myTabs_9">
                                            <li class="active pull-left" role="presentation"><a aria-expanded="true"
                                                                                                data-toggle="tab"
                                                                                                role="tab"
                                                                                                id="home_tab_9"
                                                                                                href="#home_9">Last
                                                    Month</a></li>
                                            <li role="presentation" class="pull-left"><a data-toggle="tab"
                                                                                         id="profile_tab_9"
                                                                                         role="tab"
                                                                                         href="#profile_9"
                                                                                         aria-expanded="false">All
                                                    Time</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0 row">
                                    <div class="tab-content" id="myTabContent_9">
                                        <div id="home_9" class="tab-pane fade active in" role="tabpanel">
                                            <div class="table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table-hover mt-15 mb-0">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Products</th>
                                                            <th>Popularity</th>
                                                            <th>Sales</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Milk Powder</td>
                                                            <td><span class="peity-line" data-width="90"
                                                                      data-peity='{ "fill": ["transparent"], "stroke":["#ff6028"]}'
                                                                      data-height="40">0,-3,-2,-4,5,-4,3,-2,5,-1</span>
                                                            </td>
                                                            <td><span class="text-danger text-semibold"><i
                                                                        class="fa fa-level-down"
                                                                        aria-hidden="true"></i> 28.76%</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Air Conditioner</td>
                                                            <td><span class="peity-line" data-width="90"
                                                                      data-peity='{ "fill": ["transparent"], "stroke":["#ff6028"]}'
                                                                      data-height="40">0,-1,1,-2,-3,1,-2,-3,1,-2</span>
                                                            </td>
                                                            <td><span class="text-danger text-semibold"><i
                                                                        class="fa fa-level-down"
                                                                        aria-hidden="true"></i> 8.55%</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>RC Cars</td>
                                                            <td><span class="peity-line" data-width="90"
                                                                      data-peity='{ "fill": ["transparent"], "stroke":["#ff6028"]}'
                                                                      data-height="40">0,3,6,1,2,4,6,3,2,1</span>
                                                            </td>
                                                            <td><span class="text-success text-semibold"><i
                                                                        class="fa fa-level-up"
                                                                        aria-hidden="true"></i> 58.56%</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Down Coat</td>
                                                            <td><span class="peity-line" data-width="90"
                                                                      data-peity='{ "fill": ["transparent"], "stroke":["#ff6028"]}'
                                                                      data-height="40">0,3,6,4,5,4,7,3,4,2</span>
                                                            </td>
                                                            <td><span class="text-success text-semibold"><i
                                                                        class="fa fa-level-up"
                                                                        aria-hidden="true"></i> 35.76%</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Xyz Byke</td>
                                                            <td><span class="peity-line" data-width="90"
                                                                      data-peity='{ "fill": ["transparent"], "stroke":["#ff6028"]}'
                                                                      data-height="40">0,3,6,4,5,4,7,3,4,2</span>
                                                            </td>
                                                            <td><span class="text-success text-semibold"><i
                                                                        class="fa fa-level-up"
                                                                        aria-hidden="true"></i> 35.76%</span></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="profile_9" class="tab-pane fade" role="tabpanel">
                                            <div class="table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table-hover mb-0">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Products</th>
                                                            <th>Popularity</th>
                                                            <th>Sales</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Milk Powder</td>
                                                            <td><span class="peity-line" data-width="90"
                                                                      data-peity='{ "fill": ["transparent"], "stroke":["#ff6028"]}'
                                                                      data-height="40">4,-4,-2,-4,5,-4,3,-1,5,-1</span>
                                                            </td>
                                                            <td><span class="text-success text-semibold"><i
                                                                        class="fa fa-level-up"
                                                                        aria-hidden="true"></i> 18.76%</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Air Conditioner</td>
                                                            <td><span class="peity-line" data-width="90"
                                                                      data-peity='{ "fill": ["transparent"], "stroke":["#ff6028"]}'
                                                                      data-height="40">0,-1,1,-4,-3,1,-2,-3,2,-2</span>
                                                            </td>
                                                            <td><span class="text-danger text-semibold"><i
                                                                        class="fa fa-level-down"
                                                                        aria-hidden="true"></i> 48.55%</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>RC Cars</td>
                                                            <td><span class="peity-line" data-width="90"
                                                                      data-peity='{ "fill": ["transparent"], "stroke":["#ff6028"]}'
                                                                      data-height="40">0,9,6,1,2,4,6,3,7,1</span>
                                                            </td>
                                                            <td><span class="text-success text-semibold"><i
                                                                        class="fa fa-level-up"
                                                                        aria-hidden="true"></i> 8.56%</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Down Coat</td>
                                                            <td><span class="peity-line" data-width="90"
                                                                      data-peity='{ "fill": ["transparent"], "stroke":["#ff6028"]}'
                                                                      data-height="40">7,5,6,4,5,4,6,5,4,2</span>
                                                            </td>
                                                            <td><span class="text-success text-semibold"><i
                                                                        class="fa fa-level-up"
                                                                        aria-hidden="true"></i> 98.76%</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Xyz Byke</td>
                                                            <td><span class="peity-line" data-width="90"
                                                                      data-peity='{ "fill": ["transparent"], "stroke":["#ff6028"]}'
                                                                      data-height="40">0,3,6,4,5,4,7,3,4,2</span>
                                                            </td>
                                                            <td><span class="text-success text-semibold"><i
                                                                        class="fa fa-level-up"
                                                                        aria-hidden="true"></i> 12.76%</span></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default border-panel card-view panel-refresh">
                            <div class="refresh-container">
                                <div class="la-anim-1"></div>
                            </div>
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Audience location</h6>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="pull-left inline-block refresh mr-15">
                                        <i class="zmdi zmdi-replay"></i>
                                    </a>
                                    <a href="#" class="pull-left inline-block full-screen mr-15">
                                        <i class="zmdi zmdi-fullscreen"></i>
                                    </a>
                                    <div class="pull-left inline-block dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"
                                           aria-expanded="false" role="button"><i
                                                class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu bullet dropdown-menu-right" role="menu">
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i
                                                        class="icon wb-reply" aria-hidden="true"></i>option 1</a>
                                            </li>
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i
                                                        class="icon wb-share" aria-hidden="true"></i>option 2</a>
                                            </li>
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i
                                                        class="icon wb-trash" aria-hidden="true"></i>option 3</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div id="usa" style="height: 385px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default border-panel card-view panel-refresh">
                            <div class="refresh-container">
                                <div class="la-anim-1"></div>
                            </div>
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Revenue</h6>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div id="ct_chart_7" class="" style="height:298px;"></div>
                                    <hr class="light-grey-hr row mt-10 mb-0"/>
                                    <div class="label-chatrs">
                                        <div class="pt-30 pb-10">
                                            <div class="pull-left"><span class="block txt-dark weight-600 font-24">$<span
                                                        class="counter-anim">15,678</span></span></div>
                                            <div class="pull-right"><span class="block pt-5"><i
                                                        class="zmdi zmdi-trending-up txt-success font-18 mr-5"></i><span
                                                        class="weight-500 uppercase-font">growth</span></span></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <div class="panel panel-default border-panel card-view panel-refresh">
                            <div class="refresh-container">
                                <div class="la-anim-1"></div>
                            </div>
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">social campaigns</h6>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="pull-left inline-block refresh mr-15">
                                        <i class="zmdi zmdi-replay"></i>
                                    </a>
                                    <a href="#" class="pull-left inline-block full-screen mr-15">
                                        <i class="zmdi zmdi-fullscreen"></i>
                                    </a>
                                    <div class="pull-left inline-block dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"
                                           aria-expanded="false" role="button"><i
                                                class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu bullet dropdown-menu-right" role="menu">
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i
                                                        class="icon wb-reply" aria-hidden="true"></i>Edit</a></li>
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i
                                                        class="icon wb-share" aria-hidden="true"></i>Delete</a></li>
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i
                                                        class="icon wb-trash" aria-hidden="true"></i>New</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body row pa-0">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                <tr>
                                                    <th>Campaign</th>
                                                    <th>Client</th>
                                                    <th>Changes</th>
                                                    <th>Budget</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><span class="txt-dark weight-500">Facebook</span></td>
                                                    <td>Beavis</td>
                                                    <td><span class="txt-success"><i
                                                                class="zmdi zmdi-caret-up mr-10 font-20"></i><span>2.43%</span></span>
                                                    </td>
                                                    <td>
                                                        <span class="txt-dark weight-500">$1478</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-warning">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="txt-dark weight-500">Youtube</span></td>
                                                    <td>Felix</td>
                                                    <td><span class="txt-success"><i
                                                                class="zmdi zmdi-caret-up mr-10 font-20"></i><span>1.43%</span></span>
                                                    </td>
                                                    <td>
                                                        <span class="txt-dark weight-500">$951</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-danger">Closed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="txt-dark weight-500">Twitter</span></td>
                                                    <td>Cannibus</td>
                                                    <td><span class="txt-danger"><i
                                                                class="zmdi zmdi-caret-down mr-10 font-20"></i><span>-8.43%</span></span>
                                                    </td>
                                                    <td>
                                                        <span class="txt-dark weight-500">$632</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-default">Hold</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="txt-dark weight-500">Spotify</span></td>
                                                    <td>Neosoft</td>
                                                    <td><span class="txt-success"><i
                                                                class="zmdi zmdi-caret-up mr-10 font-20"></i><span>7.43%</span></span>
                                                    </td>
                                                    <td>
                                                        <span class="txt-dark weight-500">$325</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-default">Hold</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="col-sm-4">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm-12 col-xs-12">--}}
{{--                        <div class="panel panel-default border-panel card-view">--}}
{{--                            <div class="panel-heading">--}}
{{--                                <div class="pull-left">--}}
{{--                                    <h6 class="panel-title txt-dark">Discount for You</h6>--}}
{{--                                </div>--}}
{{--                                <div class="clearfix"></div>--}}
{{--                            </div>--}}
{{--                            <div class="panel-wrapper collapse in">--}}
{{--                                <div class="panel-body">--}}
{{--                                    <div class="sm-data-box-4 with-icon">--}}
{{--                                        <div class="relative">--}}
{{--                                            <div class="data-wrap-left">--}}
{{--                                                <i class="icon-badge font-24"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="data-wrap-right">--}}
{{--                                                <p>Use this deal code to get up to 15000 instant Discount. Hurry off--}}
{{--                                                    ending soon! </p>--}}
{{--                                                <div class="pt-15 uppercase-font">--}}
{{--                                                    <span>Use code :</span><span class="txt-orange">TRES15</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-12 col-xs-12">--}}
{{--                        <div class="panel panel-default border-panel card-view panel-refresh">--}}
{{--                            <div class="refresh-container">--}}
{{--                                <div class="la-anim-1"></div>--}}
{{--                            </div>--}}
{{--                            <div class="panel-heading">--}}
{{--                                <div class="pull-left">--}}
{{--                                    <h6 class="panel-title txt-dark">Traffic Types</h6>--}}
{{--                                </div>--}}
{{--                                <div class="clearfix"></div>--}}
{{--                            </div>--}}
{{--                            <div class="panel-wrapper collapse in">--}}
{{--                                <div class="panel-body">--}}
{{--                                    <div id="ct_chart_5" class="" style="height:215px;"></div>--}}
{{--                                    <hr class="light-grey-hr row mt-10 mb-15"/>--}}
{{--                                    <div class="label-chatrs">--}}
{{--                                        <div class="">--}}
{{--                                                    <span--}}
{{--                                                        class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span--}}
{{--                                                            class="block font-15 weight-500 mb-5">organic</span><span--}}
{{--                                                            class="block txt-grey">356 visits</span></span>--}}
{{--                                            <div class="pull-right"><span class="font-18">44.46%</span></div>--}}
{{--                                            <div class="clearfix"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <hr class="light-grey-hr row mt-10 mb-15"/>--}}
{{--                                    <div class="label-chatrs">--}}
{{--                                        <div class="">--}}
{{--                                                    <span--}}
{{--                                                        class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span--}}
{{--                                                            class="block font-15 weight-500 mb-5">Refrral</span><span--}}
{{--                                                            class="block txt-grey">36 visits</span></span>--}}
{{--                                            <div class="pull-right"><span class="font-18">5.46%</span></div>--}}
{{--                                            <div class="clearfix"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <hr class="light-grey-hr row mt-10 mb-15"/>--}}
{{--                                    <div class="label-chatrs">--}}
{{--                                        <div class="">--}}
{{--                                                    <span--}}
{{--                                                        class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span--}}
{{--                                                            class="block font-15 weight-500 mb-5">Other</span><span--}}
{{--                                                            class="block txt-grey">245 visits</span></span>--}}
{{--                                            <div class="pull-right"><span class="font-18">50%</span></div>--}}
{{--                                            <div class="clearfix"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-12 col-xs-12">--}}
{{--                        <div class="panel panel-default border-panel card-view panel-refresh">--}}
{{--                            <div class="refresh-container">--}}
{{--                                <div class="la-anim-1"></div>--}}
{{--                            </div>--}}
{{--                            <div class="panel-heading">--}}
{{--                                <div class="pull-left">--}}
{{--                                    <h6 class="panel-title txt-dark">Advertising & Promotions</h6>--}}
{{--                                </div>--}}
{{--                                <div class="pull-right">--}}
{{--                                    <a href="#" class="pull-left inline-block refresh mr-15">--}}
{{--                                        <i class="zmdi zmdi-replay"></i>--}}
{{--                                    </a>--}}
{{--                                    <div class="pull-left inline-block dropdown">--}}
{{--                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"--}}
{{--                                           aria-expanded="false" role="button"><i--}}
{{--                                                class="zmdi zmdi-more-vert"></i></a>--}}
{{--                                        <ul class="dropdown-menu bullet dropdown-menu-right" role="menu">--}}
{{--                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i--}}
{{--                                                        class="icon wb-reply" aria-hidden="true"></i>option 1</a>--}}
{{--                                            </li>--}}
{{--                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i--}}
{{--                                                        class="icon wb-share" aria-hidden="true"></i>option 2</a>--}}
{{--                                            </li>--}}
{{--                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i--}}
{{--                                                        class="icon wb-trash" aria-hidden="true"></i>option 3</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="clearfix"></div>--}}
{{--                            </div>--}}
{{--                            <div class="panel-wrapper collapse in">--}}
{{--                                <div class="panel-body">--}}
{{--                                    <div class="pt-20">--}}
{{--                                        <canvas id="chart_2" height="210"></canvas>--}}
{{--                                    </div>--}}
{{--                                    <div class="label-chatrs text-center mt-30">--}}
{{--                                        <div class="inline-block mr-15">--}}
{{--                                            <span class="clabels inline-block bg-orange mr-5"></span>--}}
{{--                                            <span--}}
{{--                                                class="clabels-text font-12 inline-block txt-dark capitalize-font">Active</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="inline-block mr-15">--}}
{{--                                            <span class="clabels inline-block bg-orange-light-1 mr-5"></span>--}}
{{--                                            <span--}}
{{--                                                class="clabels-text font-12 inline-block txt-dark capitalize-font">Closed</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="inline-block">--}}
{{--                                            <span class="clabels inline-block bg-orange-light-2 mr-5"></span>--}}
{{--                                            <span--}}
{{--                                                class="clabels-text font-12 inline-block txt-dark capitalize-font">Pending</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-12 col-xs-12">--}}
{{--                        <div class="panel panel-default border-panel card-view">--}}
{{--                            <div class="panel-heading">--}}
{{--                                <div class="pull-left">--}}
{{--                                    <h6 class="panel-title txt-dark">Timelines</h6>--}}
{{--                                </div>--}}
{{--                                <div class="clearfix"></div>--}}
{{--                            </div>--}}
{{--                            <div class="panel-wrapper collapse in">--}}
{{--                                <div class="panel-body">--}}
{{--                                    <div class="streamline user-activity">--}}
{{--                                        <div class="sl-item">--}}
{{--                                            <a href="javascript:void(0)">--}}
{{--                                                <div class="sl-avatar avatar avatar-sm avatar-circle">--}}
{{--                                                    <img class="img-responsive img-circle" src="../img/user.png"--}}
{{--                                                         alt="avatar"/>--}}
{{--                                                </div>--}}
{{--                                                <div class="sl-content">--}}
{{--                                                    <p class="inline-block"><span--}}
{{--                                                            class="capitalize-font txt-orange mr-5 weight-500">Clay Masse</span><span>invited to join the meeting in the conference room at 9.45 am</span>--}}
{{--                                                    </p>--}}
{{--                                                    <span--}}
{{--                                                        class="block txt-grey font-12 capitalize-font">3 Min</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="sl-item">--}}
{{--                                            <a href="javascript:void(0)">--}}
{{--                                                <div class="sl-avatar avatar avatar-sm avatar-circle">--}}
{{--                                                    <img class="img-responsive img-circle" src="../img/user1.png"--}}
{{--                                                         alt="avatar"/>--}}
{{--                                                </div>--}}
{{--                                                <div class="sl-content">--}}
{{--                                                    <p class="inline-block"><span--}}
{{--                                                            class="capitalize-font txt-orange mr-5 weight-500">Evie Ono</span><span>added three new photos in the library</span>--}}
{{--                                                    </p>--}}
{{--                                                    <div class="activity-thumbnail">--}}
{{--                                                        <img src="../img/thumb-1.jpg" alt="thumbnail"/>--}}
{{--                                                        <img src="../img/thumb-2.jpg" alt="thumbnail"/>--}}
{{--                                                        <img src="../img/thumb-3.jpg" alt="thumbnail"/>--}}
{{--                                                    </div>--}}
{{--                                                    <span--}}
{{--                                                        class="block txt-grey font-12 capitalize-font">8 Min</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="sl-item">--}}
{{--                                            <a href="javascript:void(0)">--}}
{{--                                                <div class="sl-avatar avatar avatar-sm avatar-circle">--}}
{{--                                                    <img class="img-responsive img-circle" src="../img/user2.png"--}}
{{--                                                         alt="avatar"/>--}}
{{--                                                </div>--}}
{{--                                                <div class="sl-content">--}}
{{--                                                    <p class="inline-block"><span--}}
{{--                                                            class="capitalize-font txt-orange mr-5 weight-500">madalyn rascon</span><span>assigned a new task</span>--}}
{{--                                                    </p>--}}
{{--                                                    <span--}}
{{--                                                        class="block txt-grey font-12 capitalize-font">28 Min</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="sl-item">--}}
{{--                                            <a href="javascript:void(0)">--}}
{{--                                                <div class="sl-avatar avatar avatar-sm avatar-circle">--}}
{{--                                                    <img class="img-responsive img-circle" src="../img/user3.png"--}}
{{--                                                         alt="avatar"/>--}}
{{--                                                </div>--}}
{{--                                                <div class="sl-content">--}}
{{--                                                    <p class="inline-block"><span--}}
{{--                                                            class="capitalize-font txt-orange mr-5 weight-500">Ezequiel Merideth</span><span>completed project wireframes</span>--}}
{{--                                                    </p>--}}
{{--                                                    <span--}}
{{--                                                        class="block txt-grey font-12 capitalize-font">yesterday</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="sl-item">--}}
{{--                                            <a href="javascript:void(0)">--}}
{{--                                                <div class="sl-avatar avatar avatar-sm avatar-circle">--}}
{{--                                                    <img class="img-responsive img-circle" src="../img/user4.png"--}}
{{--                                                         alt="avatar"/>--}}
{{--                                                </div>--}}
{{--                                                <div class="sl-content">--}}
{{--                                                    <p class="inline-block"><span--}}
{{--                                                            class="capitalize-font txt-orange mr-5 weight-500">jonnie metoyer</span><span>created a group 'Hencework' in the discussion forum</span>--}}
{{--                                                    </p>--}}
{{--                                                    <span--}}
{{--                                                        class="block txt-grey font-12 capitalize-font">18 feb</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-12 col-xs-12">--}}
{{--                        <div class="panel panel-default border-panel card-view">--}}
{{--                            <div class="panel-heading">--}}
{{--                                <div class="">--}}
{{--                                    <h6 class="panel-title txt-dark text-center">Latest testimonials</h6>--}}
{{--                                </div>--}}
{{--                                <div class="clearfix"></div>--}}
{{--                            </div>--}}
{{--                            <div class="panel-wrapper collapse in">--}}
{{--                                <div class="panel-body">--}}
{{--                                    <!-- START carousel-->--}}
{{--                                    <div id="testimonial_slider" data-ride="carousel"--}}
{{--                                         class="carousel slide testimonial-slider-wrap text-slider mb-85">--}}
{{--                                        <ol class="carousel-indicators">--}}
{{--                                            <li data-target="#testimonial_slider" data-slide-to="0"--}}
{{--                                                class="active"></li>--}}
{{--                                            <li data-target="#testimonial_slider" data-slide-to="1"></li>--}}
{{--                                            <li data-target="#testimonial_slider" data-slide-to="2"></li>--}}
{{--                                        </ol>--}}
{{--                                        <div role="listbox" class="carousel-inner">--}}
{{--                                            <div class="item active">--}}
{{--                                                <div class="testimonial-wrap text-center">--}}
{{--                                                    <p class="pt-20 font-16">"Activist, criteria planned giving--}}
{{--                                                        dignity, committed democratizing the global financial system--}}
{{--                                                        progressive."</p>--}}
{{--                                                    <span--}}
{{--                                                        class="testi-pers-name block mt-15  txt-dark capitalize-font head-font">--}}
{{--    																Jens Brincker--}}
{{--    															</span>--}}
{{--                                                    <span class="testi-pers-desg block capitalize-font">--}}
{{--    																Interaction Designer--}}
{{--    															</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="item">--}}
{{--                                                <div class="testimonial-wrap text-center">--}}
{{--                                                    <p class="pt-20 font-16">"Nelson Mandela equal opportunity--}}
{{--                                                        change accelerate pathway to a better life invest our--}}
{{--                                                        ambitions catalyst."</p>--}}
{{--                                                    <span--}}
{{--                                                        class="testi-pers-name block mt-15  txt-dark capitalize-font head-font">--}}
{{--    																Mark Hay--}}
{{--    															</span>--}}
{{--                                                    <span class="testi-pers-desg block capitalize-font">--}}
{{--    																Interface Designer--}}
{{--    															</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="item">--}}
{{--                                                <div class="testimonial-wrap text-center">--}}
{{--                                                    <p class="pt-20 font-16">"Making progress contribution--}}
{{--                                                        compassion Ford Foundation, cross-agency coordination Bill--}}
{{--                                                        development."</p>--}}
{{--                                                    <span--}}
{{--                                                        class="testi-pers-name block mt-15  txt-dark capitalize-font head-font">--}}
{{--    																Anthony Davie--}}
{{--    															</span>--}}
{{--                                                    <span class="testi-pers-desg block capitalize-font">--}}
{{--    																Project Manager--}}
{{--    															</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- END carousel-->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
@endsection
