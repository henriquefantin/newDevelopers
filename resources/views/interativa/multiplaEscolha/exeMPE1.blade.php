@extends('interativa.multiplaEscolha')
@section('desafio')

<br><br>
<form name="form" id="form" method="POST" action="{{ route('salvarExercicio') }}">
    @csrf
    <input type="hidden" name="tipoExercicio" id="tipoExercicio" value="1">
    <input type="hidden" name="exercicio" id="exercicio" value="1">
    <input type="hidden" name="valorRadio" id="valorRadio" value="">

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
                <input type="radio" class="radio" id="radio1" name="radio1" value="1">
                <span>
                    a) A, B;
                </span>
            </p>
            <p>
                <input type="radio" class="radio" id="radio2" name="radio2" value="2">
                <span>
                    b) 10, 20;
                </span>
            </p>
            <p>
                <input type="radio" class="radio" id="radio3" name="radio3" value="3">
                <span>
                    c) 15;
                </span>
            </p>
            <p>
                <input type="radio" class="radio" id="radio4" name="radio4" value="4">
                <span>
                    d) Não sei.
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