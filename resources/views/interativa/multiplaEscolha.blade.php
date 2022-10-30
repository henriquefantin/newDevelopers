@extends('principal.principal')
@section('conteudo')

<br><br>
<h1 class="alinharCentro">Multipla Escolha</h1>
<br><br>

@hasSection('desafio')
    <div>
        <a type="button" class="btn btn-dark-2" href="{{ route('multiplaEscolha') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
            </svg>
            Voltar
        </a>
    </div>
@else
    <div class="hoverable alinharEsquerda">
        <a class="semLinkBCO" href="{{ route('exercicioMultiplaEscolha', ['id' => 1]) }}">
            <p>
                1) Analise o algoritmo e diga o que será impresso na tela ao ser executado:
            </p>
            <div class="text-center mar-10">
                <img src="{{ asset('imgs/multiplaEscolha/exe1/exercMultiplaEscolha1.png') }}" alt="">
            </div>
        </a>
    </div>
    <br>
    <div class="hoverable alinharEsquerda">
        <a class="semLinkBCO" href="{{ route('exercicioMultiplaEscolha', ['id' => 2]) }}">
            <p>2) Analise o algoritmo e diga qual os pares de instruções produzem o mesmo resultado:</p>
        </a>
    </div>
@endif

@yield('desafio')
@endsection