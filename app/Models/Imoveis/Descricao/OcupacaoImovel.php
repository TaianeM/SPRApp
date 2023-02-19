<?php

namespace App\Models\Imoveis\Descricao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OcupacaoImovel extends Model
{
       use HasFactory;

    protected $table = "imoveis_ocupacoes";

    protected $fillable = [
        'nome',
    ];

    /**
     * Ocupacao imoveis & imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imovel(): HasMany
    {
        return $this->hasMany(Imoveis::class, 'id_uso_imovel');
    }
}
