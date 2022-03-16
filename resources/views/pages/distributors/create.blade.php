@extends('layouts.template')
@section('content')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">novo distribuidor de energia</h5>
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
                                    {!! Form::open(array('route' => 'distributors.store','method'=>'POST')) !!}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Nome</label>
                                                        <input type="text" class="form-control" name="name"
                                                               value="{{old('name')}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">CNPJ</label>
                                                        <input type="text" class="form-control cnpj" name="cnpj"
                                                               value="{{old('cnpj')}}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Valor TE</label>
                                                        <input type="text" class="form-control value" name="value_te"
                                                               value="{{old('value_te')}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Row -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Valor TUSD</label>
                                                        <input type="text" class="form-control value" name="value_tusd"
                                                               value="{{old('value_tusd')}}" required>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Valor ICMS</label>
                                                        <input type="text" class="form-control value" name="value_icms"
                                                               value="{{old('value_icms')}}" required>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <!-- /Row -->

                                        </div>
                                        <div class="form-actions mt-10">
                                            <button type="submit" class="btn btn-success  mr-10">Salvar</button>
                                            <a type="button" class="btn btn-default">Cancelar</a>
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
