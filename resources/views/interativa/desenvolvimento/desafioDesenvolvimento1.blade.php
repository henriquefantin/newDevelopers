@extends('interativa.desafioDesenvolvimento')
@section('desafio')

<br><br>
<form name="form" id="form" method="POST" action="{{ route('salvarExercicio') }}">
    @csrf
    <input type="hidden" name="tipoExercicio" id="tipoExercicio" value="3">
    <input type="hidden" name="exercicio" id="exercicio" value="1">
    <input type="hidden" name="resposta" id="resposta" value="">
    <input type="hidden" name="codigoExe" id="codigoExe" value="">

    <div class="alinharEsquerda">
        <h4>Explicação</h4>

        <br>
        <h5>Operações lógicas (AND, OR e NOT)</h5>
        <br>
        <p>
            &nbsp;&nbsp;&nbsp;O operador AND no JavaScript é representado pelo simbolo "&&", 
            onde a condição será verdadeira apenas quando a primeira E a 
            segunda operação forem verdadeiras.
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;O operador OR no JavaScript é representado pelo simbolo "||",
            onde a condição será verdadeira quando ao menos uma das Operações
            forem verdadeiras.
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;O operador NOT no JavaScript é representado pelo simbolo "!" e 
            ele realiza a inversão do resultado da operação. Exemplo: o resultado
            verdadeiro se torna falso ao inserir o simbolo na frente da operação.
        </p>    
        <div class="mar-5 mar-left-perc-10">
            <img src="{{ asset('imgs/desenvolvimento/exe1/exe1.3.png') }}" alt="">
        </div>

        <br>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Operação A</th>
                    <th>Operação B</th>
                    <th>Operação A && Operação B</th>
                </tr>
                <tr>
                    <td>Verdadeiro</td>
                    <td>Verdadeiro</td>
                    <td>Verdadeiro</td>
                </tr>
                <tr>
                    <td>Verdadeiro</td>
                    <td>Falso</td>
                    <td>Falso</td>
                </tr>
                <tr>
                    <td>Falso</td>
                    <td>Verdadeiro</td>
                    <td>Falso</td>
                </tr>
                <tr>
                    <td>Falso</td>
                    <td>Falso</td>
                    <td>Falso</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Operação A</th>
                    <th>Operação B</th>
                    <th>Operação A || Operação B</th>
                </tr>
                <tr>
                    <td>Verdadeiro</td>
                    <td>Verdadeiro</td>
                    <td>Verdadeiro</td>
                </tr>
                <tr>
                    <td>Verdadeiro</td>
                    <td>Falso</td>
                    <td>Verdadeiro</td>
                </tr>
                <tr>
                    <td>Falso</td>
                    <td>Verdadeiro</td>
                    <td>Verdadeiro</td>
                </tr>
                <tr>
                    <td>Falso</td>
                    <td>Falso</td>
                    <td>Falso</td>
                </tr>
            </tbody>
        </table>

        <br>
        <h5>Operações relacionais do JavaScript</h5>
        <br>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Operação</th>
                    <th>Símbolo</th>
                </tr>
                <tr>
                    <td>Maior</td>
                    <td>&gt;</td>
                </tr>
                <tr>
                    <td>Menor</td>
                    <td>&lt;</td>
                </tr>
                <tr>
                    <td>Maior ou igual</td>
                    <td>&gt;=</td>
                </tr>
                <tr>
                    <td>Menor ou igual</td>
                    <td>&lt;=</td>
                </tr>
                <tr>
                    <td>Igual</td>
                    <td>==</td>
                </tr>
                <tr>
                    <td>Diferente</td>
                    <td>!=</td>
                </tr>
            </tbody>
        </table>

        <br>
        <h5>Definição de variáveis</h5>
        <p>
            &nbsp;&nbsp;&nbsp;A variável é serve para definir um ou mais valores que são utilizados 
            pelos programas durante a execução de um algoritmo. Este nome é utilizado por 
            apresentar um tipo de conteúdo que pode apresentar diferentes valores. 
            Isso irá variar conforme a instrução e operação que foi utilizada pelo
            usuário.
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;Neste exercício serão utilizados dois tipos de variáveis para o desenvolvimento.
            Uma variável do tipo String (texto) e outra do tipo Int (inteiro). A variável 
            do tipo String receberá um texto como retorno para informar ao usuário o resultado
            do algorítimo. Já a variável do tipo Int, será utilizada para a estrutura de tomada
            de decisão do algorítimo.
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;Para poder utilizar uma variável é necessário primeiramente definí-la, para que o 
            interpretador (neste caso JavaScript) possa reconhecê-la como tal. Para isso utilizamos 
            o prefixo 'let' (escopo de bloco) ou 'var' (escopo global ou de função) antes do nome que será definida à variável.
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;Exemplo de definição de uma variável String e Int na imagem abaixo:
        </p>
        <div class="mar-5 mar-left-perc-10">
            <img src="{{ asset('imgs/desenvolvimento/exe1/exe1.2.png') }}" alt="">
        </div>

        <br>
        <h5>Estruturas condicionais (se)</h5>
        <p>
            &nbsp;&nbsp;&nbsp;Permite o algorítimo seguir por determinado caminho utilizando como 
            parâmetro o valor das variáveis dentro do algorítimo. A estrutura SE
            nas linguagens de programação são representadas por expressões lógicas
            (verdadeiro ou falso) e esta condição irá definir o caminho em que o 
            algorítimo seguirá.
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;Exemplo de uma estrutura condicional (SE) na imagem abaixo:
        </p>
        <div class="mar-5 mar-left-perc-10">
            <img src="{{ asset('imgs/desenvolvimento/exe1/exe1.1.png') }}" alt="">
        </div>

        <br>
        <h5>Sobre o exercício</h5>
        <p>
            &nbsp;&nbsp;&nbsp;Para o desenvolvimento do exercício abaixo é necessário utilizar as práticas informadas
            anteriormente e desenvolver um algorítimo utilizando a lógica.
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;Ao final do algoritimo é necessário utilizar o comando 'console.log(estadoAposentadoria);'
            para retornar o resultado e saber se está correto.
        </p>
    </div>

    <br><br>
    <div class="alinharEsquerda">
        <p>
            1) Uma empresa quer verificar se um empregado está qualificado para a
            aposentadoria ou não. Para estar em condições, basta um das seguintes opções
            serem válidas:
        </p>
        <p>&nbsp;&nbsp;&nbsp;- Ter no mínimo 65 anos de idade;</p>
        <p>&nbsp;&nbsp;&nbsp;- Ter trabalhado no mínimo 30 anos;</p>
        <p>&nbsp;&nbsp;&nbsp;- Ter no mínimo 60 anos e ter trabalhado no mínimo 25 anos.</p>
        <p>
            Crie um algorítimo que verifique a idade e tempo trabalhado de um funcionário 
            cuja idade é 60 anos e trabalhou 30 anos.
        </p>
    </div>

    <br><br>
    <a type="button" class="btn btn-dark-2 btnConsole">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
        </svg>
        Abrir Console
    </a>
    <button type="button" class="btn btn-light" name="bntEnviar" id="bntEnviar">Enviar</button>
</form>
<br><br>

@endsection

@section('scripts')
    <script>
        let cont = 0;
        let valorInicial = '';
        let codigoConsole = [];
        let resposta = "";

        $(".btnConsole").click(function(){
            let nomeBtn = '';
            if (cont == 0) {
                valorInicial = "//Nesta variável é necessário inserir a idade do trabalhador"
                    + "\n"
                    + "let idade = 0;"
                    + "\n\n"
                    + "//Nesta variável é necessário inserir o tempo trabalhado"
                    + "\n"
                    + "let tempoTrabalhado = 0;"
                    + "\n\n"
                    + "//Nesta variável será informada se o empregado está aposentado ou não."
                    + "\n"
                    + "//Para isso utilize os valores de retorno 'Está aposentado' ou 'Não está aposentado'."
                    + "\n"
                    + "let estadoAposentadoria = '';";
                codeEditor.setValue(valorInicial);
            }

            if (cont % 2 == 0) {
                $(".abrirEditor").fadeIn();
                nomeBtn = $(".btnConsole").html();
                $(".btnConsole").html(nomeBtn.replace("Abrir","Fechar"));
            } else {
                $(".abrirEditor").fadeOut();
                nomeBtn = $(".btnConsole").html();
                $(".btnConsole").html(nomeBtn.replace("Fechar","Abrir"));
            }
            cont++;
        });

        $(".btnCheck").click(function() {
            $(".ace_line").each(function() {
                codigoConsole.push($(this).text());
            });

            if (resultadoExec == "Está aposentado" || resultadoExec == "Não está aposentado") {
                resposta = "Resposta correta!";
            } else {
                resposta = "Resposta incorreta!";
            }

            console.printResultado(resposta);
            editorLib.statusResultado();
        });
        
        $('#bntEnviar').click(function() {
            $("#resposta").val(resposta);
            $("#codigoExe").val(JSON.stringify(codigoConsole));
            $('#form').submit();
        });
    </script>
@endsection