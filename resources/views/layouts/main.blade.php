<!-- Arquivo responsável pela padronização de menu, estilizações e footer. -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS CDN -->
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/0d6cc0d304.css" crossorigin="anonymous">



</head>

<body>
    <script src="https://kit.fontawesome.com/0d6cc0d304.js" crossorigin="anonymous"></script>
    <!-- SCRIPTS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script>
        window.addEventListener('DOMContentLoaded', event => {

            // Toggle the side navigation
            const sidebarToggle = document.body.querySelector('#sidebarToggle');
            if (sidebarToggle) {
                // Uncomment Below to persist sidebar toggle between refreshes
                // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
                //     document.body.classList.toggle('sb-sidenav-toggled');
                // }
                sidebarToggle.addEventListener('click', event => {
                    event.preventDefault();
                    document.body.classList.toggle('sb-sidenav-toggled');
                    localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains(
                        'sb-sidenav-toggled'));
                });
            }

        });
    </script>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end " style="background: #1171d9" id="sidebar-wrapper">
            <div class="sidebar-heading p-0 " style="background: #1171d9"><img class=""
                    style=" max-width:230px;  max-height:150px; width: auto;   height: auto;"
                    src="{{ url('/imagens/logoSepat.png') }}">
            </div>

            <div class="list-group list-group-flush" style="background: #1171d9; color: #ffffff">
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" style="color: #fff;"
                            data-bs-toggle="collapse" aria-expanded="false">
                            Cadastros
                        </button>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" style="color: #fff;"
                            data-bs-toggle="collapse" data-bs-target="#patrimonio-collapse" aria-expanded="false">
                            Patrimônio <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="collapse" id="patrimonio-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{ url('/imoveis/cadastro') }}" class="link-dark rounded" style="color: #fff;">Imóvel</a></li>
                                <li><a href="{{ url('/imoveis/documentacao') }}" class="link-dark rounded" style="color: #fff;">Documentação</a></li>
                                <li><a href="#" class="link-dark rounded" style="color: #fff;">Ingresso</a></li>
                                <li><a href="#" class="link-dark rounded" style="color: #fff;">Vistoria</a></li>
                                <li><a href="#" class="link-dark rounded" style="color: #fff;">Laudo</a></li>
                                <li><a href="#" class="link-dark rounded" style="color: #fff;">Georreferenciamento</a></li>
                                <li><a href="#" class="link-dark rounded" style="color: #fff;">Baixa imobiliária</a></li>
                                <li><a href="#" class="link-dark rounded" style="color: #fff;">Locados</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" style="color: #fff;"
                            data-bs-toggle="collapse" aria-expanded="false">
                            Contratos
                        </button>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" style="color: #fff;"
                            data-bs-toggle="collapse" data-bs-target="#avaliacao-collapse" aria-expanded="false">
                            Avaliação <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="collapse" id="avaliacao-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded" style="color: #fff;">Rural/Urbana</a></li>
                                <li><a href="#" class="link-dark rounded" style="color: #fff;">Perícia</a></li>
                            </ul>
                        </div>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" style="color: #fff;"
                                data-bs-toggle="collapse" aria-expanded="false">
                                Relatórios
                            </button>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" style="color: #fff;"
                                data-bs-toggle="collapse" data-bs-target="#gestao-collapse" aria-expanded="false">
                                Gestão <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="collapse" id="gestao-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded" style="color: #fff;">Indicadores</a></li>
                                    <li><a href="#" class="link-dark rounded" style="color: #fff;">Auditoria</a></li>
                                </ul>
                            </div>
                        </li>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid ">
                    <button class="btn btn-primary" id="sidebarToggle"><i class="bi bi-list"></i></button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse align-self-center" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto align-items-center ">
                            <li class="nav-item text-center p-2">
                                <a class="nav-link" href="#!"> <i class="fa fa-barcode" style="font-size:36px">
                                    </i>
                                </a>
                                Cadastros
                            </li>
                            <li class="nav-item text-center p-2">
                                <a class="nav-link " href="#!">
                                    <i class="fas fa-building" style="font-size:36px">
                                    </i>
                                </a>
                                Patrimônio
                            </li>
                            <li class="nav-item text-center p-2">
                                <a class="nav-link " href="#!">
                                    <i class="fa fa-gavel" style="font-size:36px"></i>
                                </a>
                                Avaliação
                            </li>
                            <li class="nav-item text-center p-2">
                                <a class="nav-link" href="#!">
                                    <i class="fa fa-handshake" style="font-size:36px"></i>
                                </a>
                                Contratos
                            </li>
                            <li class="nav-item text-center p-2">
                                <a class="nav-link" href="#!">
                                    <i class="fa fa-paste" style="font-size:36px"></i>
                                </a>
                                Relatórios
                            </li>
                            <li class="nav-item text-center p-2">
                                <a class="nav-link" href="#!">
                                    <i class="fa fa-users-gear" style="font-size:36px"></i>
                                </a>
                                Gestão
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
