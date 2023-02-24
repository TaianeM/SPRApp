@extends('layouts.main')

@section('title', 'SPRApp')

@section('content')

    <div class="container-fluid col-12">
        <div class="row justify-content-evenly painel">
            <div class="col-2">
                <a class="estilo-titulo"> CRIAR IMÓVEL </a>
            </div>
            <div class="col">
                <a class="float-end estilo-titulo" href="{{ url('/imoveis/index') }}">VOLTAR
                </a>
            </div>
        </div>
    </div>
    <br />

    <div class="card-body">
        <form action="{{ url('/imoveis/salvar') }}" method="post" id="formAdd">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="nome">NOME:</label>
                        <input type="text" name="nome" class="form-control" id="nome"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="descricao">DESCRIÇÃO:</label>
                        <input type="text" name="descricao" class="form-control" id="descricao"
                            placeholder="Digite aqui">
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="select">ORGÃO VINCULADO:</label>
                        <select name="id_orgao" class="padronizacao-select form-select searchSelect" id="id_orgao" style="width:100%!important;">
                            <option selected disabled>Selecione</option>
                            @foreach ($dados['orgaos'] as $key => $orgaos)
                                <option value="{{ $key }}"> {{ $orgaos }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="select">SITUAÇÃO DO ÍMOVEL:</label>
                        <select name="id_situacao_imovel" class="form-select searchSelect" id="id_situacao_imovel" style="width:100%!important;">
                            <option selected disabled>Selecione</option>
                            @foreach ($dados['situacao'] as $key => $situacao)
                                <option value="{{ $key }}"> {{ $situacao }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="select">TIPO IMÓVEL: </label>
                        <select name="id_tipo_imovel" class="form-select searchSelect" id="id_tipo_imovel" style="width:100%!important;">
                            <option selected disabled>Selecione</option>
                            @foreach ($dados['tipo'] as $key => $tipo)
                                <option value="{{ $key }}"> {{ $tipo }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="select">CATEGORIA DO IMÓVEL: </label>
                        <select name="id_categoria_imovel" class="form-select searchSelect" id="id_categoria_imovel" style="width:100%!important;">
                            <option selected disabled>Selecione</option>
                            @foreach ($dados['categorias'] as $key => $categorias)
                                <option value="{{ $key }}"> {{ $categorias }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="select">USO DO IMÓVEL: </label>
                        <select name="id_uso_imovel" class="form-select searchSelect form-control " id="id_uso_imovel" style="width:100%!important;">
                            <option selected disabled>Selecione</option>
                            @foreach ($dados['usos'] as $key => $usos)
                                <option value="{{ $key }}"> {{ $usos }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="select">TIPO DE IMÓVEL: </label>
                        <select name="id_tipos_imovel" class="form-select searchSelect" id="id_tipos_imovel" style="width:100%!important;">
                            <option selected disabled>Selecione</option>
                         
                        </select>
                    </div>
                </div>

                <div class="col-md-2 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="cep">CEP:</label>
                        <input type="text" name="cep" class="form-control" id="cep" placeholder="Digite aqui" style="width:100%!important;">
                    </div>
                </div>

                <div class="col-md-2 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="select">UF: </label>
                        <select name="uf" class="form-select searchSelect" id="uf" style="width:100%!important;">
                            <option selected disabled>Selecione</option>
                            @foreach ($dados['estados'] as $estado)
                                <option value="{{ $estado->sigla }}"> {{ $estado->sigla }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="municipio">MUNICIPIO:</label>
                        <select name="municipio" class="form-select searchSelect" id="municipio" style="width:100%!important;">
                            <option selected disabled>Selecione</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="rua">RUA:</label>
                        <input type="text" name="rua" class="form-control" id="rua" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-5 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="bairro">BAIRRO:</label>
                        <input type="text" name="bairro" class="form-control" id="bairro" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-2 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="numero">NÚMERO:</label>
                        <input type="text" name="numero" class="form-control" id="numero" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-5 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="complemento">COMPLEMENTO:</label>
                        <input type="text" name="complemento" class="form-control" id="complemento" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-2 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="setor">SETOR:</label>
                        <input type="text" name="setor" class="form-control" id="setor" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="quadra">QUADRA:</label>
                        <input type="text" name="quadra" class="form-control" id="quadra" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-2 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="lote">LOTE:</label>
                        <input type="text" name="lote" class="form-control" id="lote" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="gleba">GLEBA:</label>
                        <input type="text" name="gleba" class="form-control" id="gleba" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-2 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="matricula">MATRÍCULA:</label>
                        <input type="text" name="matricula" class="form-control" id="matricula" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="ano_avaliacao">ANO DA AVALIAÇÃO:</label>
                        <input type="date" name="ano_avaliacao" class="form-control" id="ano_avaliacao" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="indiretas">INDIRETAS:</label>
                        <input type="text" name="indiretas" class="form-control" id="indiretas" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="area_terreno">ÁREA DO TERRENO (m²):</label>
                        <input type="text" name="area_terreno" class="form-control" id="area_terreno" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="prop_terreno">PROPRIETÁRIO DO TERRENO:</label>
                        <input type="text" name="prop_terreno" class="form-control" id="prop_terreno" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="area_edificacao">ÁREA DA EDIFICAÇÃO (m²):</label>
                        <input type="text" name="area_edificacao" class="form-control" id="area_edificacao" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="prop_edificacao">PROPRIETÁRIO DA EDIFICAÇÃO:</label>
                        <input type="text" name="prop_edificacao" class="form-control" id="prop_edificacao" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="valor_terreno">VALOR DO TERRENO (R$):</label>
                        <input type="text" name="valor_terreno" class="form-control" id="valor_terreno" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="valor_edificacao">VALOR DA EDIFICAÇÃO (R$):</label>
                        <input type="text" name="valor_edificacao" class="form-control" id="valor_edificacao" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="valor_imovel">VALOR DO ÍMOVEL (R$):</label>
                        <input type="text" name="valor_imovel" class="form-control" id="valor_imovel" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="fw-bold" for="observacao">OBSERVAÇÃO:</label>
                        <input type="text" name="observacao" class="form-control" id="observacao" style="width:100%!important;"
                            placeholder="Digite aqui">
                    </div>
                </div>

                <input type="text" name="id_usuario" value="{{ $dados['usuario_id'] }}" style="display: none;">
            </div>
            <div class="col-md-2 mb-3">
                <button class="btn btn-success btn-block" type="submit">CRIAR</button>
            </div>

    </form>
    </div>

@endsection
