<?php

namespace App\Models\Imoveis\Descricao;

use App\Models\Imoveis\Imoveis;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoriaImovel extends Model
{
     use HasFactory;

    protected $table = "imoveis_categorias";

    protected $fillable = [
        'nome',
    ];

    /**
     * Categorias imoveis & imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imovel(): HasMany
    {
        return $this->hasMany(Imoveis::class, 'id_categoria_imovel');
    }
}
