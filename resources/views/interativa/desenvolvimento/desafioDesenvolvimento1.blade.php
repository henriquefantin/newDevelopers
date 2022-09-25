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

@endsection

@section('scripts')
    <script>
        $(".abrirEditor").fadeOut();
        
        $(".btnConsole").click(function(){
            $(".abrirEditor").fadeIn();
        });
    </script>
@endsection