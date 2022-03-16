@extends('layouts.template')
@section('content')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Editar Distribuidora</h5>
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
                                    {!! Form::model($client, ['route' => ['clients.update', ['client'=>$client->id, 'user' =>$client->user->id]],'method' => 'PUT']) !!}
                                    <div class="form-body">
                                        <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Dados
                                            do Cliente</h6>
                                        <hr class="light-grey-hr">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Nome</label>
                                                    <input type="text" name="name" class="form-control"
                                                           value="{{$client->user->name}}" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">CPF/CNPJ</label>
                                                    <input type="text" name="cpf_cnpj" class="form-control cpf_cnpj"
                                                           value="{{$client->cpf_cnpj}}" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!-- /Row -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">E-mail</label>
                                                    <input type="email" name="email" class="form-control"
                                                           value="{{$client->user->email}}" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Data de Nascimento</label>
                                                    <input type="date" class="form-control" name="birth"
                                                           value="{{$client->birth}}">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Telefone</label>
                                                    <input type="text" class="form-control phone" name="phone"
                                                           value="{{$client->phone}}">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Senha</label>
                                                    <input type="password" class="form-control" name="password"
                                                           required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Confirme a senha</label>
                                                    <input type="password" class="form-control" name="confirmed"
                                                           required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>

                                        <div class="seprator-block"></div>

                                        <h6 class="txt-dark capitalize-font"><i
                                                class="zmdi zmdi-account-box mr-10"></i>Endereço</h6>
                                        <hr class="light-grey-hr">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Endereço</label>
                                                    <input type="text" class="form-control" name="address"
                                                           value="{{$client->address}}" required>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Número</label>
                                                    <input type="text" class="form-control number" name="number"
                                                           value="{{$client->number}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Complemento</label>
                                                    <input type="text" class="form-control" name="complement"
                                                           value="{{$client->complement}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Bairro</label>
                                                    <input type="text" name="district" class="form-control"
                                                           value="{{$client->district}}" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">CEP</label>
                                                    <input type="text" class="form-control zip" name="zip_code"
                                                           value="{{$client->zip_code}}" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!-- /Row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Cidade</label>
                                                    <input type="text" class="form-control" name="city"
                                                           value="{{$client->city}}" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Estado</label>
                                                    <select class="selectpicker"
                                                            data-style="form-control btn-default btn-outline"
                                                            required name="state">
                                                        <option selected disabled>Selecione</option>
                                                        @foreach($states as $state)
                                                            <option
                                                                value="{{$state->abbr}}" {{$state->abbr == $client->state ? 'selected': ''}}>{{$state->state}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>

                                        <h6 class="txt-dark capitalize-font"><i
                                                class="zmdi zmdi-settings-square mr-10"></i>Outras informações</h6>
                                        <hr class="light-grey-hr">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Distribuidora</label>
                                                    <select class="selectpicker"
                                                            data-style="form-control btn-default btn-outline"
                                                            required name="distributor_id">
                                                        <option selected disabled>Selecione</option>
                                                        @foreach($distributors as $distributor)
                                                            <option
                                                                value="{{$distributor->id}}" {{$client->distributor_id == $distributor->id ? 'selected' : ''}}>{{$distributor->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Cobrança Automática</label>
                                                    <div class="radio-list">
                                                        <div class="radio-inline pl-0">
																				<span class="radio radio-info">
																					<input type="radio"
                                                                                           name="auto_billing"
                                                                                           id="auto_billing" value="S" {{$client->auto_billing == 'S' ? 'checked': ''}}>
																			<label for="auto_billing">Sim</label>
																			</span>
                                                        </div>
                                                        <div class="radio-inline">
																				<span class="radio radio-info">
																					<input type="radio"
                                                                                           name="auto_billing"
                                                                                           id="auto_billing" value="N" {{$client->auto_billing == 'N' ? 'checked': ''}}>
																			<label for="auto_billing">Não </label>
																			</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Código Instalação</label>
                                                    <input type="text" class="form-control number"
                                                           name="installation_code"
                                                           value="{{$client->installation_code}}">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Desconto</label>
                                                    <input type="text" class="form-control value"
                                                           name="discount"
                                                           value="{{$client->discount}}">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>

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
