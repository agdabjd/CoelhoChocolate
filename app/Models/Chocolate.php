<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chocolate extends Model
{
    protected $fillable = ['nome', 'tipo', 'gramas', 'fornecedor_id'];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}
