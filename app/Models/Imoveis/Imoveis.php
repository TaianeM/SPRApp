<?php

namespace App\Models\Imoveis;

use App\Models\etc\Orgao;
use App\Models\Imoveis\Descricao\{CategoriaImovel, OcupacaoImovel, SituacaoImovel, TipoImovel};
use App\Models\User;
use App\Models\Imoveis\DocumentoImovel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Imoveis extends Model
{
    use HasFactory;

    protected $table = 'imoveis';

    protected $fillable  = [
        'id_orgao',
        'descricao',
        'cep',
        'endereco',
        'bairro',
        'complemento',
        'municipio',
        'uf',
        'setor',
        'quadra',
        'lote',
        'area_terreno',
        'area_construida',
        'valor_terreno',
        'valor_edificado',
        'valor_imovel',
        'matricula',
        'gleba',
        'id_usuario',
        'id_situacao_imovel',
        'id_tipo_imovel',
        'id_uso_imovel',
        'id_categoria_imovel',
    ];

    /**
     * Usuario & Imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    /**
     * Orgao & Imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orgao(): BelongsTo
    {
        return $this->belongsTo(Orgao::class, 'id_orgao');
    }

    /**
     * Situacao Imovel & Imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function situacao(): BelongsTo
    {
        return $this->belongsTo(SituacaoImovel::class, 'id_situacao_imovel');
    }

    /**
     * Tipo Imovel & Imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipo(): BelongsTo
    {
        return $this->belongsTo(TipoImovel::class, 'id_tipo_imovel');
    }

    /**
     * Uso Imovel & Imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uso(): BelongsTo
    {
        return $this->belongsTo(OcupacaoImovel::class, 'id_uso_imovel');
    }

    /**
     * Categoria Imovel & Imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(CategoriaImovel::class, 'id_categoria_imovel');
    }

    /**
     * Documentos imoveis & imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentos(): HasMany
    {
        return $this->hasMany(DocumentoImovel::class, 'id_imovel');
    }
}
