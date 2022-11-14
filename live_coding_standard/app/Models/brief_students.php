<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brief_students extends Model
{
    use HasFactory;
    protected $table='brief_students';
    protected $fillable= [
       'brief_id',
       'student_id'
    ];
}
