<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "email",
        "password",
        "enterprise_id",
        "employee_id"
    ];
    public function enterprises (): BelongsTo{
        return $this->belongsTo(Enterprise::class);
    }

    public function employees(): BelongsTo{
        return $this->belongsTo(Employee::class);
    }

}
