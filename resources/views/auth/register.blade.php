@extends('adminArea')
@section('conteudoAdmArea')

<div class="card">
    <div class="card-body">
        <form name="formCadastroAdministrativo" class="row g-3" method="POST" action="{{ route('salvarCadastroAdm') }}">
            @csrf

            <strong class="d-block h6 mt-5 mb-2 pb-2 border-bottom divider">Informações de acesso</strong>
            <div class="col-md-4">
                <label for="usernameAdm" class="form-label">Username</label>
                <div class="input-group"> 
                    <input type="text" class="form-control campoObrigatorio" id="usernameAdm" name="usernameAdm"> 
                </div>
            </div>

            <div class="col-md-8">
                <label for="email" class="form-label">E-Mail</label>
                <div class="input-group">
                    <input type="text" class="form-control campoObrigatorio" id="email" name="email"> 
                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                </div>
            </div>

            <div class="col-md-4">
                <label for="password">Senha</label>
                <div class="input-group has-validation">
                <input type="password" class="form-control campoObrigatorio" id="password" name="password" autocomplete="new-password"> 
                </div>
            </div>
            <div class="col-md-4">
                <label for="confirmPassword">Confirmar Senha</label>
                <div class="input-group has-validation">
                <input type="password" class="form-control campoObrigatorio" id="confirmPassword" name="confirmPassword"> 
                </div>
            </div>
            <div class="col-md-4">
                <label for="phone" class="form-label">Telefone/Celular</label>
                <input type="text" class="form-control" id="phone" name="phone" value=""> 
            </div>

            <div class="col-12">
                <button class="btn btn-success" type="button" id="btnEnviarForm" name="btnEnviarForm">Enviar Formulario</button>
            </div>
        </form>
    </div>
</div>
@endsection


@section('css')
    <style>
      .card{
        background-color: #fff;
        border: 0;
      }

      .form-control{
        border: 1px solid #ced4da8e !important;
        border-radius: 0.18rem;
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.15);
      }

      .divider{
        width: 96%;
        margin-left: 2%;
      }
    </style>
@endsection