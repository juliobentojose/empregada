<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'bi', 'morada','categoria','sexo','telefone','estado', 'foto','experiencia','data_nascimento', 'id_user'
    ];
    public function user(){
        return $this->belongsTo(user::class,'id_user');
    }
}
