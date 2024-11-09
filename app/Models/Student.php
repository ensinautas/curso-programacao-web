<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "fullname",
        "birthday",
        "academic_degree",
        "location",
        "phone",
        "course_id"
    ];

    public function courses (): BelongsTo{
        return $this->belongsTo(Course::class);
    }
}
