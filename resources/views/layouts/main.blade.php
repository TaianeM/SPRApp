<!-- Arquivo responsável pela padronização de menu, estilizações e footer. -->

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!--MODAL-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
    <script src="https://cdn.jsdelivr.net/npm/dayjs@1/dayjs.min.js"></script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>


        <!-- Esse menu aqui vai virar uma sidebar 

        <div class="container-fluid">
            <ul class="nav nav-pills">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false" style="color: rgb(231, 230, 230);">TESTE 1
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false" style="color: rgb(231, 230, 230);">
                        TESTE 2</a>
                </li>
            </ul>
        </div>
        -->
    </nav>


    @if (session('success'))
        <div class="container-fluid alert alert-success">
            <p class>{{ session('success') }}</p>
        </div>
    @elseif (session('delete'))
        <div class="container-fluid alert alert-danger">
            <p class>{{ session('delete') }}</p>
        </div>
    @endif

    @if ($message = session('error'))
        <div class="container-fluid alert alert-danger">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')

    <!--MODAL
    <footer>
        <div class="container-fluid">
            <div class="pull-left" style="float: left; font-size: 14px;">
                <p class="pull-left"> SRPApp<br />
                    COPYRIGHT &copy; <?php echo date('Y'); ?>.</p>
            </div>
            <div class="pull-right" style="float: right; font-size: 14px;">
                <p class="pull-right">DESENVOLVIDO POR</p><br />
                <a class="pull-right" target="_blank"
                    style="text-decoration: none; color: #fff;"> TAIANEZINHA TOP </a>
            </div>
        </div>
    </footer>
-->
</body>
</html>
