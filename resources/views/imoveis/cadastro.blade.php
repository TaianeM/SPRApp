@extends('layouts.main')

@section('title', 'SPRApp')

@section('content')

    <style>
        .um-panel {
            display: block;
            position: relative;
            background-color: #dce9f9;
            padding: 10px 16px 10px;
            border-radius: 3px 3px 0 0;
            box-shadow: inset 0 1px 0 rgb(255 255 255 / 50%);
        }

        .tabela-imovel {
            background-color: #19375c;
        }
    </style>


    <div class=" col-12">
        <div class="row justify-content-evenly um-panel">
            <div class="col-2">
                <a style="color: #000000; font-size: 14px;
      font-weight: bold;"> IMÓVEIS </a>
            </div>
        </div>
    </div>
    <br />

    <div class="card-body">
        <div class="row">
            <div class="col-md-1 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Id:</label>
                    <input type="text" name="" class="form-control" id="" placeholder="Digite aqui"
                        required>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Descrição:</label>
                    <input type="text" name="" class="form-control" id="" placeholder="Digite aqui">
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Orgão Vinculado:</label>
                    <select class="form-select" id="">
                        <option selected>Selecione</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">UF:</label>
                    <select class="form-select" id="">
                        <option selected>Selecione</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-md-2 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">CEP:</label>
                    <input type="text" name="" class="form-control" id="" placeholder="Digite aqui"
                        required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Área do Terreno (m²):</label>
                    <input type="text" name="" class="form-control" id="" placeholder="Digite aqui"
                        required>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Área da Edificação (m²):</label>
                    <input type="text" name="" class="form-control" id="" placeholder="Digite aqui"
                        required>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Valor do Terreno (R$):</label>
                    <input type="text" name="" class="form-control" id="" placeholder="" required>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Valor da Edificação (R$):</label>
                    <input type="text" name="" class="form-control" id="" placeholder="" required>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Valor do Imóvel (R$):</label>
                    <input type="text" name="" class="form-control" id="" placeholder="" required>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Situação:</label>
                    <select class="form-select" id="">
                        <option selected>Selecione</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Setor:</label>
                    <input type="text" name="" class="form-control" id="" placeholder="" required>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Quadra:</label>
                    <input type="text" name="" class="form-control" id="" placeholder="" required>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Lote:</label>
                    <input type="text" name="" class="form-control" id="" placeholder="" required>
                </div>
            </div>


            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Gleba:</label>
                    <input type="text" name="" class="form-control" id="" placeholder="" required>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Matrícula:</label>
                    <input type="text" name="" class="form-control" id="" placeholder="" required>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Município:</label>
                    <select class="form-select" id="">
                        <option selected>Todos</option>
                        </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Endereço:</label>
                    <input type="text" name="" class="form-control" id="" placeholder="" required>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Bairro:</label>
                    <input type="text" name="" class="form-control" id="" placeholder="" required>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Número:</label>
                    <input type="text" name="" class="form-control" id="" placeholder="" required>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Complemento:</label>
                    <input type="text" name="" class="form-control" id="" placeholder="" required>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Tipo:</label>
                    <select class="form-select" id="">
                        <option selected>Selecione</option>
                        </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Uso:</label>
                    <select class="form-select" id="">
                        <option selected>Selecione</option>
                        </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Categoria:</label>
                    <select class="form-select" id="">
                        <option selected>Selecione</option>
                        </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="form-group">
                    <label class="fw-bold" for="">Ocupação:</label>
                    <select class="form-select" id="">
                        <option selected>Selecione</option>
                        </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-evenly">
        <div class="col">
            <a style="color: #000000; font-size: 15px; background-color: #dce9f9;" class="btn float-end fw-bold"
                href="">
                <i class="bi bi-x-circle-fill"></i> Limpar
            </a>
            <a style="color: #000000; font-size: 15px; background-color: #dce9f9;" class="btn float-end fw-bold"
                href="">
                <i class="bi bi-search"></i> Pesquisar
            </a>
        </div>
    </div>
    <br />


    <div class="card">
        <div class="row">
            <div class="card-header" style="background-color: #dce9f9;">
                <p class="fw-bold" style="color: #000000">VISUALIZAÇÃO DE IMÓVEL</p>
            </div>
        </div>
    </div> <br/>


    <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
              <tr>
                <th class="col-md-3" style="background-color: #dce9f9;">Id</th>
                <th></th>
                <th>Tipo de utilização</th>
                <th></th>
              </tr>
              <tr>
                <th style="background-color: #dce9f9;">Descrição</th>
                <td class="col-md-3"></td>
                <td class="fw-bold" style="background-color: #dce9f9;">Situação</td>
                <td></td>
              </tr>
              <tr>
                <th style="background-color: #dce9f9;">Orgão de vinculação</th>
                <td></td>
                <td class="fw-bold" style="background-color: #dce9f9;">Tipo de Imóvel</td>
                <td></td>
              </tr>
              <tr>
                <th style="background-color: #dce9f9;">Valor do Imóvel</th>
                <td></td>
                <td class="fw-bold" style="background-color: #dce9f9;">Categoria</td>
                <td></td>
              </tr>
            </tbody>
          </table>
    </div>

    <br/>
@endsection
