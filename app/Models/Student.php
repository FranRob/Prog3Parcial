<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'name',
        'last_name',
        'birthday',
        'cluster',
        'year',
    ];

    public function assist() : HasMany
    {
        return $this->hasMany(Assist::class, 'student_id', 'id');
    }
}
