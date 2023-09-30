<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'nome', 'contacto','endereco','id_empregada'
    ];
    public function empregada(){
        return $this->belongsTo(empregada::class,'id_empregada');
    }
}
