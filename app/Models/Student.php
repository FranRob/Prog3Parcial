<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function assist()
    {

    }
}
