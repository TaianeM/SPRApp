<?php

namespace App\Models\Imoveis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Imoveis\Imoveis;


class DocumentoImovel extends Model
{
    use HasFactory;

    protected $table = "imoveis_documentos";

    protected $fillable = [
        'descricao',
        'nome_arquivo',
        'id_imovel'
    ];


/**
 * Documentos Imoveis & Imoveis
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function imoveis(): BelongsTo
{
    return $this->belongsTo(Imoveis::class, 'id_imovel');
}
}
