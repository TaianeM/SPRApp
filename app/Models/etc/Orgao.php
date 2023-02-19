<?php

namespace App\Models\etc;

use App\Models\Imoveis\Imoveis;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Orgao extends Model
{
     use HasFactory;

    protected $table = "orgaos";

    protected $fillable = [
        'nome',
        'sigla'
    ];

    /**
     * Orgao & imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imovel(): HasMany
    {
        return $this->hasMany(Imoveis::class, 'id_orgao');
    }
}
