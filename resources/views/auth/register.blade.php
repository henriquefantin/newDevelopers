@extends('principal.principal')
@section('conteudo')

<br>
<br>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('salvarRegistro') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">E-Mail</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" id="email" name="email"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">Senha</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="password" name="password" autocomplete="new-password"> 
                            </div>
                        </div>
                        <br>
                        <div class="col-12">
                            <button class="btn btn-success" type="submit" id="btnEnviarForm" name="btnEnviarForm">
                                {{ __('Registrar') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
    <style>
      .card{
        border: 0;
      }

      .form-control{
        border: 1px solid #ced4da8e !important;
        border-radius: 0.18rem;
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.15);
      }
    </style>
@endsection