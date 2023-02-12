@extends('layouts.main')

@section('title', 'SPRApp')

@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <style>
        body {
            font-family: "Ubuntu", Tahoma, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
    </style>
    
    <div class="body">
    <div style="background-color: #16609d; color: white; padding: 1px solid; font-size:9px;" > GOVERNO DO ESTADO DE RONDÔNIA </div>
    
    <div style="background-color: #0494c8; padding: 10px 16px 10px; color: white; font-size: 18px;" >
        Sistema Patrimonial de Rondônia
    </div>
    

    <form action='{{ route('auth.user') }}' method="POST" id="formAdd">
        @csrf
        <div class="container h-75">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      

                            <img class="" style=" max-width:200px;
                            max-height:150px;
                            width: auto;
                            height: auto;" src="{{ url('/imagens/logoRondonia.webp') }}">
                      
                  <h3 class="mb-5">SPRApp</h3>
      
                  <div class="form-outline mb-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="basic-addon3">
                  </div>
                  </div>
      
                  <div class="form-outline mb-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">
                            <i class="bi bi-lock-fill"></i> 
                        </span>
                        <input type="password" class="form-control" name="password" id="password" aria-describedby="basic-addon3">
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
        </div>
    </div>

@endsection
