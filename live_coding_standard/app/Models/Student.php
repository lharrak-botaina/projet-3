<?php

namespace App\Models;

use App\Models\Brief;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $table ='students'; 
    protected $fillable = [
        'name'
    ];
    public function Brief(){
        return $this->belongsToMany(Brief::class,'brief_students');
    }
}
