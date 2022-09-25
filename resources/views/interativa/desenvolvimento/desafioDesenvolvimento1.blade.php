@extends('interativa.desafioDesenvolvimento')
@section('desafio')

<br><br>
<div class="alinharEsquerda">
    <p>
        Uma empresa quer verificar se um empregado está qualificado para a
        aposentadoria ou não. Para estar em condições, basta um das seguintes opções
        serem válidas:
    </p>
    <p>&nbsp;&nbsp;&nbsp;- Ter no mínimo 65 anos de idade;</p>
    <p>&nbsp;&nbsp;&nbsp;- Ter trabalhado no mínimo 30 anos;</p>
    <p>&nbsp;&nbsp;&nbsp;- Ter no mínimo 60 anos e ter trabalhado no mínimo 25 anos.</p>
    <p>Crie um algorítimo que verifique a idade e tempo trabalhado de um funcionário.</p>
</div>

<br><br>
<a type="button" class="btn btn-dark-2 btnConsole">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
        <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
    </svg>
    Abrir Console
</a>
@endsection

@section('scripts')
    <script>
        $(".btnConsole").click(function(){
            $(".abrirEditor").fadeIn();
        });
    </script>
@endsection