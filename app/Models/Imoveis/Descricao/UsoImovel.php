<?php

namespace App\Models\Imoveis\Descricao;

use App\Models\Imoveis\Imoveis;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UsoImovel extends Model
{
    use HasFactory;

    protected $table = "imoveis_uso";

    protected $fillable = [
        'nome',
    ];

    /**
     * Uso de imoveis
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imovel(): HasMany
    {
        return $this->hasMany(Imoveis::class, 'id_uso_imovel');
    }

    /**
     * Tipos Imoveis {Escola, Hospital, etc;}
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipos(): hasMany
    {
        return $this->hasMany(TiposImovel::class, 'id_tipos_imovel');
    }
}
