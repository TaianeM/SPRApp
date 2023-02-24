<?php

namespace App\Models\Imoveis\Descricao;

use App\Models\Imoveis\Imoveis;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TiposImovel extends Model
{
    use HasFactory;

    protected $table = "imoveis_tipos";

    protected $fillable = [
        'nome',
        'id_uso_imovel',
    ];

    /**
     * Tipo imoveis & imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imovel(): HasMany
    {
        return $this->hasMany(Imoveis::class, 'id_tipos_imovel');
    }

    /**
     * Uso Imovel & Imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function uso(): belongsTo
    {
        return $this->belongsTo(UsoImovel::class, 'id_uso_imovel');
    }
}
