@extends('interativa.multiplaEscolha')
@section('desafio')

<br><br>
<div class="alinharEsquerda">
    <div>
        <p>
            1) Analise o algoritmo e diga o que será impresso na tela ao ser executado:
        </p>
    </div>
    <div class="mar-5 mar-left-perc-10">
        <img src="{{ asset('imgs/multiplaEscolha/exe1/exercMultiplaEscolha1.png') }}" alt="">
    </div>
    <div>
        <p>
            <input type="radio" value="1" id="radio1">
            <span>
                a) A, B;
            </span>
        </p>
        <p>
            <input type="radio" value="2" id="radio2">
            <span>
                b) 10, 20;
            </span>
        </p>
        <p>
            <input type="radio" value="3" id="radio3">
            <span>
                c) 15;
            </span>
        </p>
        <p>
            <input type="radio" value="4" id="radio4">
            <span>
                d) Não sei.
            </span>
        </p>
    </div>
</div>

@endsection