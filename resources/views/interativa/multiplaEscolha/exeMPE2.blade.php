@extends('interativa.multiplaEscolha')
@section('desafio')

<br><br>
<form name="form" id="form" method="POST" action="{{ route('salvarExercicio') }}">
    @csrf
    <input type="hidden" name="tipoExercicio" id="tipoExercicio" value="1">
    <input type="hidden" name="exercicio" id="exercicio" value="2">
    <input type="hidden" name="valorRadio" id="valorRadio" value="">

    <div class="alinharEsquerda">
        <p>
            2) Analise o algoritmo e diga qual os pares de instruções produzem o mesmo resultado:
        </p>
        <div class="mar-5 mar-left-perc-10">
            
        </div>
        <div>
            <p>
                <input type="radio" class="radio" id="radio1" name="radio1" value="1">
                <span>
                    <img src="{{ asset('imgs/multiplaEscolha/exe2/exercMultiplaEscolhaA.png') }}" class="mar-5">
                </span>
            </p>
            <p>
                <input type="radio" class="radio" id="radio2" name="radio2" value="2">
                <span>
                    <img src="{{ asset('imgs/multiplaEscolha/exe2/exercMultiplaEscolhaB.png') }}" class="mar-5">
                </span>
            </p>
            <p>
                <input type="radio" class="radio" id="radio3" name="radio3" value="3">
                <span>
                    <img src="{{ asset('imgs/multiplaEscolha/exe2/exercMultiplaEscolhaC.png') }}" class="mar-5">
                </span>
            </p>
            <p>
                <input type="radio" class="radio" id="radio4" name="radio4" value="4">
                <span class="mar-5">
                    Não sei.
                </span>
            </p>
        </div>
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

        let valorRadio = "";
        $(".radio").click(function() {
            valorRadio = $(this).val();
            $("#valorRadio").val(valorRadio);
        });

        $(".radio").change(function() {
            console.log("entrou: " + $(this).val());
            let contRadio = 1;
            $(".radio").each(function() {
                if (contRadio != valorRadio) {
                    console.log("entrou2: " + contRadio);
                    $("#radio" + contRadio).prop('checked', false);
                }
                contRadio++;
            });
        });
    });
</script>
@endsection