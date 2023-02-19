<?php

namespace App\Models\Imoveis\Descricao;

use App\Models\Imoveis\Imoveis;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SituacaoImovel extends Model
{
      use HasFactory;

    protected $table = "imoveis_situacoes";

    protected $fillable = [
        'nome',
    ];

    /**
     * Situacao imoveis & imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imovel(): HasMany
    {
        return $this->hasMany(Imoveis::class, 'id_situacao_imovel');
    }
}
