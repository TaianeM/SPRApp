<?php

namespace App\Models\Imoveis;

use App\Models\Orgaos\Orgao;
use App\Models\Imoveis\Descricao\{CategoriaImovel, UsoImovel, SituacaoImovel, TipoImovel, TiposImovel};
use App\Models\User;
use App\Models\Imoveis\DocumentoImovel;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Mehradsadeghi\FilterQueryString\FilterQueryString;
use function GuzzleHttp\json_decode;

class Imoveis extends Model
{
    use HasFactory;
    use FilterQueryString;

    protected $table = 'imoveis';

    protected $filters = [
        'id_orgao',
        'descricao_filtro',
        'nome_filtro',
        'observacao_filtro',
        'cep_filtro',
        'rua_filtro',
        'bairro_filtro',
        'numero_filtro',
        'complemento_filtro',
        'municipio_filtro',
        'uf_filtro',
        'setor_filtro',
        'quadra_filtro',
        'lote_filtro',
        'prop_terreno_filtro',
        'prop_edificacao',
        'matricula_filtro',
        'ano_avaliacao_filtro',
        'indiretas_filtro',
        'indiretas_filtro',
        'id_usuario',
        'id_situacao_imovel',
        'id_tipo_imovel',
        'id_tipos_imovel',
        'id_uso_imovel',
        'id_categoria_imovel'
    ];



    protected $fillable  = [
        'id_orgao',
        'descricao',
        'nome',
        'observacao',
        'cep',
        'rua',
        'bairro',
        'numero',
        'complemento',
        'municipio',
        'uf',
        'setor',
        'quadra',
        'lote',
        'area_terreno',
        'prop_terreno',
        'area_edificacao',
        'prop_edificacao',
        'valor_terreno',
        'valor_edificacao',
        'valor_imovel',
        'matricula',
        'ano_avaliacao',
        'indiretas',
        'gleba',
        'id_usuario',
        'id_situacao_imovel',
        'id_tipo_imovel',
        'id_tipos_imovel',
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
     * Tipo Imoveis {Próprio e Terceiros}
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipo(): BelongsTo
    {
        return $this->belongsTo(TipoImovel::class, 'id_tipo_imovel');
    }

    /**
     * Tipos Imoveis {Escola, Hospital, etc;}
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipos(): BelongsTo
    {
        return $this->belongsTo(TiposImovel::class, 'id_tipos_imovel');
    }


    /**
     * Uso Imovel & Imoveis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uso(): BelongsTo
    {
        return $this->belongsTo(UsoImovel::class, 'id_uso_imovel');
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

    public static function estados()
    {

        $endpoint = "https://brasilapi.com.br/api/ibge/uf/v1";
        $client = new Client();

        $params['headers'] = ['Content-Type' => 'application/json'];

        $result = $client->get($endpoint, $params);
        $res = $result->getBody();

        return json_decode($res);
    }


    public function descricao_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('descricao', 'LIKE', "%{$value}%");
        }
    }
    public function nome_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('nome', 'LIKE', "%{$value}%");
        }
    }
    public function observacao_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('observacao', 'LIKE', "%{$value}%");
        }
    }
    public function cep_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('cep', 'LIKE', "%{$value}%");
        }
    }
    public function rua_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('rua', 'LIKE', "%{$value}%");
        }
    }
    public function bairro_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('bairro', 'LIKE', "%{$value}%");
        }
    }
    public function numero_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('numero', 'LIKE', "%{$value}%");
        }
    }
    public function complemento_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('complemento', 'LIKE', "%{$value}%");
        }
    }
    public function municipio_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('municipio', 'LIKE', "%{$value}%");
        }
    }

    public function setor_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('setor', 'LIKE', "%{$value}%");
        }
    }
    public function quadra_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('quadra', 'LIKE', "%{$value}%");
        }
    }
    public function lote_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('lote', 'LIKE', "%{$value}%");
        }
    }
    public function prop_terreno_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('prop_terreno', 'LIKE', "%{$value}%");
        }
    }
    public function prop_edificacao_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('prop_edificacao', 'LIKE', "%{$value}%");
        }
    }

    public function matricula_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('matricula', 'LIKE', "%{$value}%");
        }
    }

    public function ano_avaliacao_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('ano_avaliacao', 'LIKE', "%{$value}%");
        }
    }
    public function indiretas_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('indiretas', 'LIKE', "%{$value}%");
        }
    }
    public function gleba_filtro($query, $value)
    {
        if ($value == null) {
            return $query;
        } else {
            return $query->where('gleba', 'LIKE', "%{$value}%");
        }
    }
}
