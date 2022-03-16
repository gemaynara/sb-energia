@extends('layouts.template')
@section('content')
    <!-- Title -->
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Usuários</h5>
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
                        <a type="button" href="{{route('users.create')}}"
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
                                        <th>E-mail</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                @if($user->active)
                                                    <span class="label label-success ">Ativo</span>
                                                @else
                                                    <span class="label label-danger ">Inativo</span>
                                                @endif
                                            </td>
                                            <td>

                                                <a href="{{route('users.edit', $user->id)}}" class="text-inverse pr-10 "
                                                   title="Editar"
                                                   data-toggle="tooltip" data-original-title="Editar"><i
                                                        class="zmdi zmdi-edit txt-info"></i></a>


                                                @if($user->active)
                                                    <a href="{{route('users.disable', $user->id)}}" data-id="{{$user->id}}"
                                                       class="text-inverse btn-disable" title="Apagar"
                                                       data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="zmdi zmdi-delete txt-grey"></i></a>
                                                @else
                                                    <a href="{{route('users.enable', $user->id)}}" data-id="{{$user->id}}"
                                                       class="text-inverse btn-enable" title="Ativar"
                                                       data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="zmdi zmdi-check txt-grey"></i></a>
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
