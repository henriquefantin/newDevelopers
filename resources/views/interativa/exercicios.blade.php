@extends('principal.principal')
@section('conteudo')

<br><br>
<div class="alinharCentro">
    <u>
        <li class=""><a id="" class="hoverable semLinkBCO exercicioPrincipal" href="{{ route('multiplaEscolha') }}">Multipla Escolha</a></li>
        <li class=""><a id="" class="hoverable semLinkBCO exercicioPrincipal" href="{{ route('desafioDescritivo') }}">Desafios de Raciocínio</a></li>
        <li class=""><a id="" class="hoverable semLinkBCO exercicioPrincipal" href="{{ route('desafioDesenvolvimento') }}">Desafios de Desenvolvimento</a></li>
    </u>
</div>

@endsection