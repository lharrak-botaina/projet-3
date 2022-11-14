<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
