<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "description",
        "duration",
        "photo",
        "enterprise_id",
    ];

    public function enterprises (): BelongsTo{
        return $this->belongsTo(Enterprise::class);
    }
}
