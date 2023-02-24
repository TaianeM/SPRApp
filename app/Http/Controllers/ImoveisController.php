<?php

namespace App\Http\Controllers;

use App\Models\Imoveis\Imoveis;
use App\Repositories\Interfaces\ImoveisRepositoryInterface;
use Illuminate\Http\Request;

class ImoveisController extends Controller
{
    private ImoveisRepositoryInterface $imoveisRepository;

    /**
     * Início da estrutura do controller
     *
     * @param  mixed $imoveisRepository
     * @return void
     */
    public function __construct(ImoveisRepositoryInterface $imoveisRepository)
    {
        $this->imoveisRepository = $imoveisRepository;
    }

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $imoveis = $this->imoveisRepository->index();
        $dados = $this->imoveisRepository->opcoesPesquisa();


        return view(
            'imoveis.index',
            [
                'imoveis' => $imoveis,
                'dados' => $dados
            ]
        );
    }

    /**
     * Criar Imóvel
     *
     * @return void
     */
    public function criar()
    {
        $dados = $this->imoveisRepository->criarImovel();

        return view('imoveis.criar', [
            'dados' => $dados
        ]);
    }


    /**
     * usos e tipos
     *
     * @param  mixed $request
     * @return void
     */
    public function UsosTipos(int $id)
    {
        return $this->imoveisRepository->UsosTipos($id);

        
    }

    /**
     * Salvar Imóvel
     *
     * @param  mixed $request
     * @return void
     */
    public function salvar(Request $request)
    {
        $this->imoveisRepository->salvarImovel($request);

        return redirect()->route('imoveis.index')->with('success', 'Imovel criado com sucesso!');
    }

    /**
     * Visualizar imoveis
     *
     * @param  mixed $request
     * @return void
     */
    public function visualizar(Request $request)
    {
        $imovelId = $request->route('imoveis.index');

        $imoveis = $this->imoveisRepository->pegarImovelPorId($imovelId);

        if (empty($imoveis)) :
            return back();
        endif;

        return view(
            'imoveis.visualizar',
            [
                'imoveis' => $imoveis
            ]
        );
    }

    /**
     * Editar dados do ímovel
     *
     * @param  mixed $request
     * @return void
     */
    public function editar($id)
    {

        $imoveis = $this->imoveisRepository->pegarImovelPorId($id);
        $dados = $this->imoveisRepository->opcoesPesquisa();


        return view(
            'imoveis.editar',
            [
                'imoveis' => $imoveis,
                'dados' => $dados
            ]
        );
    }

    /**
     * Atualizar dados do ímovel
     *
     * @param  mixed $request
     * @return void
     */
    public function atualizar($imovelId, Request $request)
    {

        $this->imoveisRepository->editarImovel($imovelId, $request);

        return redirect()->route('imoveis.index')->with('success', "Imovel editado com sucesso!");;
    }

    /**
     * Deletar Imóvel
     *
     * @param  mixed $request
     * @return void
     */
    public function deletar($id)
    {

        $this->imoveisRepository->deletarImovel($id);

        return back()->with('success', "Imovel deletado com sucesso!");
    }
}
