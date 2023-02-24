<?php

namespace App\Repositories\Interfaces;
use Illuminate\Http\Request;

interface ImoveisRepositoryInterface
{
    public function index();

    public function criarImovel();

    public function opcoesPesquisa();

    public function UsosTipos($id);

    public function pegarImovelPorId($imovelId);

    public function deletarImovel($imovelId);

    public function salvarImovel(Request $request);

    public function editarImovel($imovelId, Request $request);
}