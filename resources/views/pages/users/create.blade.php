@extends('layouts.template')
@section('content')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Cadastrar novo usuário</h5>
        </div>

    </div>

    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default border-panel card-view">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Nome</label>
                                                        <input type="text" class="form-control" name="name"
                                                               value="{{old('name')}}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">E-mail</label>
                                                        <input type="email" class="form-control" name="email"
                                                               value="{{old('email')}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Row -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Senha</label>
                                                        <input type="password" class="form-control" name="password" required>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Confirme a senha</label>
                                                        <input type="password" class="form-control" name="confirmed" required>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <!-- /Row -->

                                        </div>
                                        <div class="form-actions mt-10">
                                            <button type="submit" class="btn btn-success  mr-10">Salvar</button>
                                            <button type="button" class="btn btn-default">Cancelar</button>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
@endsection
