@extends('interativa.multiplaEscolha')
@section('desafio')

<br><br>
<div class="alinharEsquerda">
    <p>
        2) Analise o algoritmo e diga qual os pares de instruções produzem o mesmo resultado:
    </p>
    <div class="mar-5 mar-left-perc-10">
        
    </div>
    <div>
        <p>
            <input type="radio" value="1" id="radio1">
            <span>
                <img src="{{ asset('imgs/exe2/exercMultiplaEscolhaA.png') }}" class="mar-5">
            </span>
        </p>
        <p>
            <input type="radio" value="2" id="radio2">
            <span>
                <img src="{{ asset('imgs/exe2/exercMultiplaEscolhaB.png') }}" class="mar-5">
            </span>
        </p>
        <p>
            <input type="radio" value="3" id="radio3">
            <span>
                <img src="{{ asset('imgs/exe2/exercMultiplaEscolhaC.png') }}" class="mar-5">
            </span>
        </p>
        <p>
            <input type="radio" value="4" id="radio4">
            <span class="mar-5">
                Não sei.
            </span>
        </p>
    </div>
</div>

@endsection