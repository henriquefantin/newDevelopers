@extends('principal.principal')
@section('conteudo')

<br><br>
<h1 class="alinharCentro">Desafios de Desenvolvimento</h1>
<br><br>

@hasSection('desafio')
    <div>
        <a type="button" class="btn btn-dark-2" href="{{ route('desafioDesenvolvimento') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
            </svg>
            Voltar
        </a>
    </div>
@else
    <div class="hoverable alinharEsquerda">
        <a class="semLinkBCO" href="{{ route('exercicioDesenvolvimento', ['id' => 1]) }}">
            <p>
                1) Uma empresa quer verificar se um empregado está qualificado para a
                aposentadoria ou não. Para estar em condições, basta um das seguintes opções
                serem válidas:
            </p>
            <p>&nbsp;&nbsp;&nbsp;- Ter no mínimo 65 anos de idade;</p>
            <p>&nbsp;&nbsp;&nbsp;- Ter trabalhado no mínimo 30 anos;</p>
            <p>&nbsp;&nbsp;&nbsp;- Ter no mínimo 60 anos e ter trabalhado no mínimo 25 anos.</p>
            <p>Crie um algorítimo que verifique a idade e tempo trabalhado de um funcionário.</p>
        </a>
    </div>
    <br>
    {{-- <div class="hoverable alinharEsquerda">
        <a class="semLinkBCO" href="{{ route('exercicioDesenvolvimento', ['id' => 2]) }}">
            <p>2) Faça um algoritimo que trate/leia 8 valores e escreva o maior e o menor dentre eles.</p>
        </a>
    </div> --}}
@endif

@yield('desafio')
@endsection