@extends('layouts.auth')

@section('title', 'SPRApp')

@section('content')

    <style>
        body {
            font-family: "Ubuntu", Tahoma, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
    </style>

        <div style="background-color: #16609d; color: white; padding: 1px solid; font-size:9px;"> GOVERNO DO ESTADO DE
            RONDÔNIA 
        </div>

        <div style="background-color: #0494c8; padding: 10px 16px 10px; color: white; font-size: 18px;">
            Sistema Patrimonial de Rondônia
        </div>
        <br /> <br />

        <form action='{{ route('auth.user') }}' method="POST" id="formAdd">
            @csrf
            <div class="container h-75">
                @if ($errors->any())
                    <div class="container alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('danger'))
                    <div class="alert alert-danger">
                        {{ session('danger') }}
                    </div>
                @endif

                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">


                                <img class=""
                                    style=" max-width:200px;
                            max-height:150px;
                            width: auto;
                            height: auto;"
                                    src="{{ url('/imagens/logoRondonia.webp') }}">

                                <h3 class="mb-5">SPRApp </h3>

                                <div class="form-outline mb-4">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">
                                            <i class="bi bi-person-fill"></i>
                                        </span>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email" aria-describedby="basic-addon3">
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">
                                            <i class="bi bi-lock-fill"></i>
                                        </span>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Senha" aria-describedby="basic-addon3">
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">
                                            <i class="fas fa-building"></i>
                                        </span>
                                        <select name="secretaria" id="secretaria" class="form-select">
                                            <option selected disabled>SELECIONE</option>
                                            <option value="SEPAT">SEPAT</option>
                                            <option value="SEJUS">SEJUS</option>
                                            <option value="SEDAM">SEDAM</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Checkbox -->

                                <button class="btn btn-primary btn-lg btn-block" type="submit">ACESSAR</button>

                            </div>
                        </div>
                    </div>
                </div>
        </form>


@endsection
