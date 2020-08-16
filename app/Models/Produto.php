<?php

namespace App\Models;

use App\Events\EventEmailNewProduto;
use App\Events\EventEmailUpdateProduto;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $dispatchesEvents = [
        'created' => EventEmailNewProduto::class,
        'updated' => EventEmailUpdateProduto::class
    ];

    protected $fillable = [
        'nome',
        'valor',
        'loja_id',
        'ativo'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    public function getValorAttribute($value)
    {
        return 'R$'. number_format($value, 2, ',', '.');
    }

    public function loja()
    {
        return $this->hasOne(Loja::class, 'id', 'loja_id');
    }

}
