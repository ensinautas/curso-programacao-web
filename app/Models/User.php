<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function EmpresaRelashioship(){
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    public function FuncionarioRelashioship(){
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }

}
