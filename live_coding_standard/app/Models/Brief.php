<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brief extends Model
{
    use HasFactory;
    protected $table='briefs';
    protected $fillable= [
        'name',
        'date_livraison',
        'date_recuperation'

    ];
    public function students(){
        return $this->belongsToMany(Student::class,'brief_students');
    }

}
