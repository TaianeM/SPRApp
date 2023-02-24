<?php

namespace App\Repositories;

use App\Models\Orgaos\Orgao;
use App\Models\Imoveis\Descricao\CategoriaImovel;
use App\Models\Imoveis\Descricao\UsoImovel;
use App\Models\Imoveis\Descricao\SituacaoImovel;
use App\Models\Imoveis\Descricao\TipoImovel;
use App\Models\Imoveis\Descricao\TiposImovel;
use App\Repositories\Interfaces\ImoveisRepositoryInterface;
use App\Models\Imoveis\Imoveis;
use Illuminate\Http\Request;

class ImoveisRepository implements ImoveisRepositoryInterface
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return Imoveis::filter()->paginate(20);
    }

    /**
     * Opções de Filtro de Imoveis
     *
     * @return void
     */
    public function opcoesPesquisa()
    {
        $orgaos = Orgao::pluck('nome', 'id')->toArray();
        $categorias = CategoriaImovel::pluck('nome', 'id')->toArray();
        $usos = UsoImovel::pluck('nome', 'id')->toArray();
        $situacao = SituacaoImovel::pluck('nome', 'id')->toArray();
        $tipo = TipoImovel::pluck('nome', 'id')->toArray();
        $tipos = TiposImovel::pluck('nome', 'id')->toArray();
        $usuario_id = auth()->user()->id;
        $estados = Imoveis::estados();


        return [
            "orgaos" => $orgaos,
            "categorias" => $categorias,
            "usos" => $usos,
            "situacao" => $situacao,
            "tipos" => $tipos,
            "tipo" => $tipo,
            "usuario_id" => $usuario_id,
            "estados" => $estados
        ];
    }

    /**
     * Buscar imovel por id
     *
     * @param  mixed $imovelId
     * @return void
     */
    public function pegarImovelPorId($imovelId)
    {
        return Imoveis::findOrFail($imovelId);
    }

    /**
     * Deletar imovel
     *
     * @param  mixed $imovelId
     * @return void
     */
    public function deletarImovel($imovelId)
    {
      $imoveis =  Imoveis::findOrFail($imovelId);
      $imoveis->delete();
    }

    /**
     * Criar imovel
     *
     * @return void
     */
    public function criarImovel()
    {
        $orgaos = Orgao::pluck('nome', 'id')->toArray();
        $categorias = CategoriaImovel::pluck('nome', 'id')->toArray();
        $usos = UsoImovel::pluck('nome', 'id')->toArray();
        $situacao = SituacaoImovel::pluck('nome', 'id')->toArray();
        $tipo = TipoImovel::pluck('nome', 'id')->toArray();
        $usuario_id = auth()->user()->id;
        $estados = Imoveis::estados();

        return [
            "orgaos" => $orgaos,
            "categorias" => $categorias,
            "usos" => $usos,
            "situacao" => $situacao,
            "tipo" => $tipo,
            "usuario_id" => $usuario_id,
            "estados" => $estados,
        ];
    }

    /**
     * Puxar relacionamentos com usos
     *
     * @return void
     */
    public function UsosTipos($id)
    {
        return TiposImovel::where('id_uso_imovel', $id)->pluck('nome', 'id')->toArray();
    }

    /**
     * Salvar criação de imovel
     *
     * @param  mixed $request
     * @return void
     */
    public function salvarImovel(Request $request)
    {
        $imoveis = new Imoveis;

        $imoveis->id_orgao = $request->id_orgao;
        $imoveis->descricao = $request->descricao;
        $imoveis->nome = $request->nome;
        $imoveis->observacao = $request->observacao;
        $imoveis->cep = $request->cep;
        $imoveis->rua = $request->rua;
        $imoveis->bairro = $request->bairro;
        $imoveis->numero = $request->numero;
        $imoveis->complemento = $request->complemento;
        $imoveis->municipio = $request->municipio;
        $imoveis->uf = $request->uf;
        $imoveis->setor = $request->setor;
        $imoveis->quadra = $request->quadra;
        $imoveis->lote = $request->lote;
        $imoveis->area_terreno = $request->area_terreno;
        $imoveis->prop_terreno = $request->prop_terreno;
        $imoveis->area_edificacao = $request->area_edificacao;
        $imoveis->prop_edificacao = $request->prop_edificacao;
        $imoveis->valor_terreno = $request->valor_terreno;
        $imoveis->valor_edificacao = $request->valor_edificacao;
        $imoveis->valor_imovel = $request->valor_imovel;
        $imoveis->matricula = $request->matricula;
        $imoveis->ano_avaliacao = $request->ano_avaliacao;
        $imoveis->indiretas = $request->indiretas;
        $imoveis->gleba = $request->gleba;
        $imoveis->id_usuario = $request->id_usuario;
        $imoveis->id_situacao_imovel = $request->id_situacao_imovel;
        $imoveis->id_tipo_imovel = $request->id_tipo_imovel;
        $imoveis->id_tipos_imovel = $request->id_tipos_imovel;
        $imoveis->id_uso_imovel = $request->id_uso_imovel;
        $imoveis->id_categoria_imovel = $request->id_categoria_imovel;
        $imoveis->save();
    }

    /**
     * Editar imovel
     *
     * @param  mixed $imovelId
     * @param  mixed $novosDetalhes
     * @return void
     */
    public function editarImovel($imovelId, $request)
    {
        $imoveis = Imoveis::findOrFail($imovelId);

        $imoveis->id_orgao = $request->id_orgao;
        $imoveis->descricao = $request->descricao;
        $imoveis->nome = $request->nome;
        $imoveis->observacao = $request->observacao;
        $imoveis->cep = $request->cep;
        $imoveis->rua = $request->rua;
        $imoveis->bairro = $request->bairro;
        $imoveis->numero = $request->numero;
        $imoveis->complemento = $request->complemento;
        $imoveis->municipio = $request->municipio;
        $imoveis->uf = $request->uf;
        $imoveis->setor = $request->setor;
        $imoveis->quadra = $request->quadra;
        $imoveis->lote = $request->lote;
        $imoveis->area_terreno = $request->area_terreno;
        $imoveis->prop_terreno = $request->prop_terreno;
        $imoveis->area_edificacao = $request->area_edificacao;
        $imoveis->prop_edificacao = $request->prop_edificacao;
        $imoveis->valor_terreno = $request->valor_terreno;
        $imoveis->valor_edificacao = $request->valor_edificacao;
        $imoveis->valor_imovel = $request->valor_imovel;
        $imoveis->matricula = $request->matricula;
        $imoveis->ano_avaliacao = $request->ano_avaliacao;
        $imoveis->indiretas = $request->indiretas;
        $imoveis->gleba = $request->gleba;
        $imoveis->id_usuario = $request->id_usuario;
        $imoveis->id_situacao_imovel = $request->id_situacao_imovel;
        $imoveis->id_tipo_imovel = $request->id_tipo_imovel;
        $imoveis->id_tipos_imovel = $request->id_tipos_imovel;
        $imoveis->id_uso_imovel = $request->id_uso_imovel;
        $imoveis->id_categoria_imovel = $request->id_categoria_imovel;
        $imoveis->save();
    }
}
