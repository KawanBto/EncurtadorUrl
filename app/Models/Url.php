<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'long_url',
        'short_code',
        // 'clicks' não precisa estar aqui se for sempre default 0 ou incrementado
    ];

    // Se você não quiser nenhuma proteção contra mass assignment (NÃO RECOMENDADO PARA PRODUÇÃO)
    // protected $guarded = [];

}