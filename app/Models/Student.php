<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
protected $fillable = [
    'fname',
    'mname',
    'lname',
    'phone',
    'gender',
    'city',
    'email',
    'country',
    'status'
];
}
