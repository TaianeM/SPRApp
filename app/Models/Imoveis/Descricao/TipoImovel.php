<?php

namespace App\Models\Imoveis\Descricao;

use App\Models\Imoveis\Imoveis;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoImovel extends Model
{
    use HasFactory;

    protected $table = "imoveis_tipo";

    protected $fillable = [
        'nome',
    ];

    /**
     * Tipo imoveis & imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imovel(): HasMany
    {
        return $this->hasMany(Imoveis::class, 'id_tipo_imovel');
    }
}
