<?php

namespace App\Models;

use App\Models\Task;
use App\Models\Apprenant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brief extends Model
{
    use HasFactory;
    protected $table ='briefs';
    protected $fillable =[
        'brief_name',
        'delivery_date',
        'recuperation_date'
    ];
    public function tasks(){
        return $this->hasMany(Task::class,'brief_id');

    }
    public function apprenants(){
        return $this->belongsToMany(Apprenant::class);
    }
}
