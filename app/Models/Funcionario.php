<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public function userRelashionship(){
        return $this->hasOne(User::class, 'id');
    }


}
