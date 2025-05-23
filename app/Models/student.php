<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; #copy
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    //gawa muna table ha bago migrate
    protected $table = 'students';
    protected $primarykey = 'id';
    protected $fillable = [
        'fname',
        'lname',
        'midname',
        'age',
        'address',
        'zip'
    ];
}
