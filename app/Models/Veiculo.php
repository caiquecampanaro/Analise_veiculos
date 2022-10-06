<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;
    protected $table = 'veiculo';
    protected $primaryKey = 'id_veiculo';

    public function TipoVeiculo () {
        return $this->belongsTo(TipoVeiculo::class, 'fk_tipo_veiculo');
    }
}
