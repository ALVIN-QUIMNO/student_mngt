<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_number',
        'fname',
        'mname',
        'lname',
        'address',
        'zip',
        'birthday',
    ];
}
