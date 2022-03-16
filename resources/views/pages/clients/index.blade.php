@extends('layouts.template')
@section('content')
    <!-- Title -->
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Clientes Cadastrados</h5>
        </div>

    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default border-panel card-view">
                <div class="panel-heading">
                    <div class="pull-right">
                        <a type="button" href="{{route('clients.create')}}"
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
                                        <th>CPF/CNPJ</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clients as $client)
                                        <tr>
                                            <td>{{$client->id}}</td>
                                            <td>{{$client->user->name}}</td>
                                            <td>{{$client->cpf_cnpj}}</td>

                                            <td>
                                                @if($client->user->active)
                                                    <span class="label label-success ">Ativo</span>
                                                @else
                                                    <span class="label label-danger ">Inativo</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('invoices.client', $client->id)}}" class="text-inverse pr-10 " title="Faturas"
                                                   data-toggle="tooltip" data-original-title="Faturas"><i
                                                        class="zmdi zmdi-money txt-skyblue"></i></a>

                                                <a href="{{route('clients.edit', $client->id)}}" class="text-inverse pr-10 " title="Imprimir"
                                                   data-toggle="tooltip" data-original-title="Editar"><i
                                                        class="zmdi zmdi-edit txt-info"></i></a>

                                                <a href="javascript:void(0)" class="text-inverse" title=""
                                                    data-toggle="tooltip" data-original-title="Delete"><i
                                                        class="zmdi zmdi-delete txt-grey"></i></a>



{{--                                                @if($distributor->active)--}}
{{--                                                    <button data-route="{{route('distributors.disable', $distributor->id)}}"--}}
{{--                                                            data-id="{{$distributor->id}}" type="button" data-type="PUT"--}}
{{--                                                            class="btn btn-danger btn-icon-anim btn-square btn-delete"--}}
{{--                                                            title="Desativar"><i class="icon-trash"></i></button>--}}
{{--                                                @else--}}
{{--                                                    <button data-route="{{route('distributors.active', $distributor->id)}}"--}}
{{--                                                            data-id="{{$distributor->id}}" type="button" data-type="PUT"--}}
{{--                                                            class="btn btn-primary btn-icon-anim btn-square btn-active"--}}
{{--                                                            title="Ativar"><i class="icon-check"></i></button>--}}
{{--                                                @endif--}}


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
