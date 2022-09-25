<!DOCTYPE html>
<html>
  <head>
    <title>Prototipo</title>
    
    <link rel="icon" type="image/png" href="#"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/hoverable.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/estilos.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/editorStyles.css') }}" />
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/funcoes.js') }}"></script>

    @yield('css')
  </head>

  <body>
    <div class="containerAjustado">
      <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <ul class="nav navbar-nav">
              <li class="nav-item"><a id="len1" class="nav-link hoverable semLinkBCO" href="#">Home</a></li>
              <li class="nav-item"><a id="len2" class="nav-link hoverable semLinkBCO" href="{{ route('exercicios') }}">Exercícios</a></li>
              <li class="nav-item"><a id="len3" class="nav-link hoverable semLinkBCO" href="#">Sobre</a></li>
              <li class="nav-item"><a id="len4" class="nav-link hoverable semLinkBCO" href="#">Contato</a></li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
      </nav>
    </div>

    @if (session('mensagemAlertSuccess'))
      <div class="alert alert-success" role="alert">{{ session('mensagemAlertSuccess') }}</div>
    @endif

    @if (session('mensagemAlertDanger'))
      <div class="alert alert-danger" role="alert">{{ session('mensagemAlertDanger') }}</div>
    @endif

    <div class="row">
      <div class="col-1">
      </div>
      <div class="col">
        @yield('conteudo')

        <br><br>
        <div class="editor abrirEditor">
            <div class="editor__wrapper">
                <div class="editor__body">
                <div id="editorCode" class="editor__code"></div>
                </div>
                <div class="editor__footer">
                <div class="editor__footer--left">
                    <button class="editor__btn editor__run">Executar</button>
                    <button class="editor__btn editor__reset">Limpar</button>
                </div>
                <div class="editor__footer--right">
                    <div class="editor__console">
                        <ul class="editor__console-logs"></ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
      </div>
      <div class="col-1">
      </div>
    </div>

    @yield('scripts')
    <script type="text/javascript" src="{{ URL::asset('js/aceEditor/src/ace.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/aceEditor/src/mode-javascript.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/aceEditor/src/ext-language_tools.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/editor.js') }}"></script>
  </body>
</html>