<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $fillable = [
        'nome',
        'email',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
