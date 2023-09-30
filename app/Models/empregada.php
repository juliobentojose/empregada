<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empregada extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'bi', 'morada','categoria','sexo','telefone','estado', 'foto','experiencia','data_nascimento', 'ano_trabalho', 'id_user'
    ];
    public function user(){
        return $this->belongsTo(user::class,'id_user');
    }
    public function pedido(){
        return $this->hasMany(pedido::class,'id_empregada');
    }
    public function reclamacao(){
        return $this->hasMany(reclamacao::class,'id_empregada');
    }
}
