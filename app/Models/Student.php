<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $casts = [
        'birth_date' => 'date',
    ];

    protected $appends = [
        'age',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function getAgeAttribute()
    {
        return $this->birth_date->age;
    }
}
