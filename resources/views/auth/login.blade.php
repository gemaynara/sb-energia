@extends('auth.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="mb-30">
                <h3 class="text-center txt-dark mb-10">Login de Acesso</h3>
                <h6 class="text-center nonecase-font txt-grey">Insira suas credenciais para iniciar
                    a sessão</h6>
            </div>
            <div class="form-wrap">
                <form method="POST" action="{{ route('post-login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="control-label mb-10">E-mail</label>
                        <input type="email"
                               class="form-control  @error('email') has-error @enderror"
                               name="email" value="{{ old('email') }}" required
                               placeholder="Insira seu e-mail">
                    </div>
                    <div class="form-group">
                        <label class="pull-left control-label mb-10">Senha</label>
                        <input type="password" class="form-control @error('password') has-error @enderror" required
                               name="password" placeholder="Insira sua senha">


                        <span class="help-block" style="display: block;" role="alert">    <strong>{{ $errors->first('email') }}</strong> </span>

                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-orange btn-rounded">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
