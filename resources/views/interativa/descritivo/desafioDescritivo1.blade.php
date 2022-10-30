@extends('interativa.descritivos')
@section('desafio')

<br><br>
<form name="form" id="form" method="POST" action="{{ route('salvarExercicio') }}">
    <input type="hidden" name="tipoExercicio" id="tipoExercicio" value="2">
    <input type="hidden" name="exercicio" id="exercicio" value="1">

    <div class="alinharEsquerda">
        <div>
            <p>
                1) Um homem precisa atravessar um rio com um barco que possui capacidade 
                de transportar apenas ele e mais uma de suas três cargas, que são: um 
                cachorro, uma galinha e um saco de milho. Descreva abaixo um algoritmo, 
                onde o homem consiga atravessar o rio com todas as suas cargas. Lembrando 
                que a galinha não pode ficar sozinha com o milho porque ela o comerá e o 
                cachorro não pode ficar sozinho com a galinha pelo mesmo motivo.
            </p>
        </div>
        <textarea name="respostaDesc" id="respostaDesc" cols="80%" rows="10" class="estavel"></textarea>
    </div>
</form>
<br><br>

<button type="button" class="btn btn-light" name="bntEnviar" id="bntEnviar">Enviar</button>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#bntEnviar').click(function() {
            $('#form').submit();
        });
    });
</script>
@endsection