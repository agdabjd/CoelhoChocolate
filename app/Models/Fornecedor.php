<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = ['nome', 'cnpj', 'cidade', 'estado'];

    public function chocolates()
    {
        return $this->hasMany(Chocolate::class);
    }
}
