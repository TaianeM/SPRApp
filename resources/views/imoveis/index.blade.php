@extends('layouts.main')

@section('title', 'SPRApp')

@section('content')

    <div class="container-fluid col-12">
        <div class="row justify-content-evenly painel">
            <div class="col-2">
                <a class="estilo-titulo"> TODOS OS IMOVEIS </a>
            </div>
            <div class="col">
                <a class="float-end estilo-titulo" href="{{ url('/imoveis/criar') }}">NOVO IMOVEL
                </a>
            </div>
        </div>
    </div>
    <br />

    <div class="container-fluid tamanho-fonte">

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"
                        style="font-color: black;">
                        FILTROS
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="{{ url('/imoveis/index') }}" method="get" id="formAdd">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="select">ORGÃO VINCULADO:</label>
                                        <select name="id_orgao" class="form-select searchSelect" id="id_orgao"
                                            style="width:100%!important;">
                                            <option selected disabled>Selecione</option>
                                            @foreach ($dados['orgaos'] as $key => $orgaos)
                                                <option value="{{ $key }}"> {{ $orgaos }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="select">SITUAÇÃO DO ÍMOVEL:</label>
                                        <select name="id_situacao_imovel" class="form-select searchSelect"
                                            style="width:100%!important;" id="id_situacao_imovel">
                                            <option selected disabled>Selecione</option>
                                            @foreach ($dados['situacao'] as $key => $situacao)
                                                <option value="{{ $key }}"> {{ $situacao }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="select">CATEGORIA DO IMÓVEL: </label>
                                        <select name="id_tipo_imovel" class="form-select searchSelect" id="id_tipo_imovel"
                                            style="width:100%!important;">
                                            <option selected disabled>Selecione</option>
                                            @foreach ($dados['categorias'] as $key => $categorias)
                                                <option value="{{ $key }}"> {{ $categorias }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="select">USO DO IMÓVEL: </label>
                                        <select name="id_uso_imovel" class="form-select searchSelect form-control "
                                            id="id_uso_imovel" style="width:100%!important;">
                                            <option selected disabled>Selecione</option>
                                            @foreach ($dados['usos'] as $key => $usos)
                                                <option value="{{ $key }}"> {{ $usos }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="select">TIPO DE IMÓVEL: </label>
                                        <select name="id_tipos_imovel" class="form-select searchSelect" id="id_tipos_imovel"
                                            style="width:100%!important;">
                                            <option selected disabled>Selecione</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="select" style="width: 100%;">UF: </label>
                                        <select name="uf" class="form-select searchSelect"
                                            style="width:100%!important;" id="uf">
                                            <option selected disabled>Selecione</option>
                                            @foreach ($dados['estados'] as $estado)
                                                <option value="{{ $estado->sigla }}"> {{ $estado->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="municipio">MUNICIPIO:</label>
                                        <select name="municipio_filtro" class="form-select searchSelect" id="municipio"
                                            style="width:100%!important;">
                                            <option selected disabled>Selecione</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="nome">NOME:</label>
                                        <input type="text" name="nome_filtro" class="form-control" id="nome"
                                            placeholder="Digite aqui">
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="rua">RUA:</label>
                                        <input type="text" name="rua_filtro" class="form-control" id="rua"
                                            placeholder="Digite aqui">
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="bairro">BAIRRO:</label>
                                        <input type="text" name="bairro_filtro" class="form-control" id="bairro"
                                            placeholder="Digite aqui">
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="numero">NÚMERO:</label>
                                        <input type="text" name="numero_filtro" class="form-control" id="numero"
                                            placeholder="Digite aqui">
                                    </div>
                                </div>

                                <div class="col-md-5 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="complemento">COMPLEMENTO:</label>
                                        <input type="text" name="complemento_filtro" class="form-control"
                                            id="complemento" placeholder="Digite aqui">
                                    </div>
                                </div>

                                <div class="col-md-2 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="setor">SETOR:</label>
                                        <input type="text" name="setor_filtro" class="form-control" id="setor"
                                            placeholder="Digite aqui">
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="quadra">QUADRA:</label>
                                        <input type="text" name="quadra_filtro" class="form-control" id="quadra"
                                            placeholder="Digite aqui">
                                    </div>
                                </div>

                                <div class="col-md-2 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="lote">LOTE:</label>
                                        <input type="text" name="lote_filtro" class="form-control" id="lote"
                                            placeholder="Digite aqui">
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="gleba">GLEBA:</label>
                                        <input type="text" name="gleba_filtro" class="form-control" id="gleba"
                                            placeholder="Digite aqui">
                                    </div>
                                </div>

                                <div class="col-md-2 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="matricula">MATRÍCULA:</label>
                                        <input type="text" name="matricula_filtro" class="form-control"
                                            id="matricula" placeholder="Digite aqui">
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="prop_terreno">PROPRIETÁRIO DO TERRENO:</label>
                                        <input type="text" name="prop_terreno_filtro" class="form-control"
                                            id="prop_terreno" placeholder="Digite aqui">
                                    </div>
                                </div>


                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label class="fw-bold" for="prop_edificacao">PROPRIETÁRIO DA EDIFICAÇÃO:</label>
                                        <input type="text" name="prop_edificacao_filtro" class="form-control"
                                            id="prop_edificacao" placeholder="Digite aqui">
                                    </div>
                                </div>

                                {{-- 
                                <input type="text" name="id_usuario" value="{{ $dados['usuario_id'] }}"
                                    style="display: none;"> --}}
                            </div>
                            <div class="col-md-2 mb-3">
                                <button class="btn btn-primary btn-block" type="submit">Pesquisar</button>
                                <a href='{{ url('/imoveis/index') }}' class="btn btn-danger float-r"><i
                                        class="bi bi-reset"></i>Limpar</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col-md-4">ID</th>
                    <th scope="col-md-1">NOME</th>
                    <th scope="col-md-2">ENDEREÇO</th>
                    <th scope="col-md-2">SITUAÇÃO DO IMOVEL</th>
                    <th scope="col-md-2">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($imoveis as $imovel)
                    <tr class="text-center">
                        <th scope="">{{ $imovel->id }}</th>
                        <td class=""> {{ $imovel->exists() ? $imovel->nome : '' }} </td>
                        <td> {{ $imovel->exists() ? $imovel->cep : '' }}
                            {{ $imovel->exists() ? $imovel->uf : '' }},
                            {{ $imovel->exists() ? $imovel->municipio : '' }} -
                            {{ $imovel->exists() ? $imovel->rua : '' }}
                            {{ $imovel->exists() ? $imovel->bairro : '' }}
                            {{ $imovel->exists() ? $imovel->numero : '' }}
                            {{ $imovel->exists() ? $imovel->complemento : '' }}
                        </td>
                        <td>
                            @if ($imovel->situacao()->first()->id == '1')
                                <h3 class="badge bg-success" style="font-size: 13px;"> REGULAR </a></h3>
                            @elseif ($imovel->situacao()->first()->id == '2')
                                <h3 class="badge" style="background-color: #c17344; font-size: 13px;"> IRREGULAR </a>
                                </h3>
                            @elseif ($imovel->situacao()->first()->id == '3')
                                <h3 class="badge" style="background-color: #5f1a98; font-size: 13px;"> AUTARQUIA </a>
                                </h3>
                            @elseif ($imovel->situacao()->first()->id == '4')
                                <h3 class="badge" style="background-color: #2730d5; font-size: 13px;"> INDIGENA </a></h3>
                            @else
                                <h3 class="badge" style="background-color: #e70909; font-size: 13px;"> DESOCUPADO </a>
                                </h3>
                            @endif
                        </td>
                        <td class="text-center">
                            {{-- <a href='{{ url("#") }}'  data-toggle="tooltip" data-placement="top" title="Visualizar" style="margin-right: 3px" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a> --}}
                            <a href='{{ url("/imoveis/editar/$imovel->id") }}' data-toggle="tooltip"
                                data-placement="top" title="Editar" style="margin-right: 3px"
                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <form method="POST" action='{{ url("/imoveis/deletar/$imovel->id") }}'
                                style="display:contents">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit"
                                    onclick="if  (confirm('Tem certeza que deseja remover este registro?')) {return true;} else{event.stopPropagation(); event.preventDefault();};"
                                    class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Deletar"
                                        style="width:15px"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <nav aria-label="Navegação de página exemplo">
            <ul class="pagination">
                {{ $imoveis->appends(request()->query())->links() }}
            </ul>
        </nav>
    </div>

@endsection
