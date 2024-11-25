<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use SoftDeletes;
    
    protected $fillable = [
        "email",
        "password",
        "enterprise_id",
        "employee_id"
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function enterprise (): BelongsTo{
        return $this->belongsTo(Enterprise::class);
    }

    public function employee(): BelongsTo{
        return $this->belongsTo(Employee::class);
    }

}
