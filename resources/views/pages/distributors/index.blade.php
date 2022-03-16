@extends('layouts.template')
@section('content')
    <!-- Title -->
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Distribuidoras de Energia</h5>
        </div>

    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default border-panel card-view">
                <div class="panel-heading">
                    <div class="pull-right">
                        {{--                        <h6 class="panel-title txt-dark">Lista de Apis</h6>--}}
                        <a type="button" href="{{route('distributors.create')}}"
                           class="btn btn-primary btn-rounded btn-icon left-icon "> <i class="fa fa-plus"></i> <span>novo registro</span></a>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="datable" class="table table-hover display  pb-30">
                                    <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Nome</th>
                                        <th>CNPJ</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($distributors as $distributor)
                                        <tr>
                                            <td>{{$distributor->id}}</td>
                                            <td>{{$distributor->name}}</td>
                                            <td>{{$distributor->cnpj}}</td>

                                            <td>
                                                @if($distributor->active)
                                                    <span class="label label-success ">Ativo</span>
                                                @else
                                                    <span class="label label-danger ">Inativo</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-warning btn-icon-anim btn-square btn-edit"
                                                        href="{{route('distributors.edit', $distributor->id)}}"
                                                        title="Editar">
                                                    <i class="fa fa-pencil"></i></button>

                                                @if($distributor->active)
                                                    <button data-route="{{route('distributors.disable', $distributor->id)}}"
                                                            data-id="{{$distributor->id}}" type="button" data-type="PUT"
                                                            class="btn btn-danger btn-icon-anim btn-square btn-delete"
                                                            title="Desativar"><i class="icon-trash"></i></button>
                                                @else
                                                    <button data-route="{{route('distributors.active', $distributor->id)}}"
                                                            data-id="{{$distributor->id}}" type="button" data-type="PUT"
                                                            class="btn btn-primary btn-icon-anim btn-square btn-active"
                                                            title="Ativar"><i class="icon-check"></i></button>
                                                @endif


                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
