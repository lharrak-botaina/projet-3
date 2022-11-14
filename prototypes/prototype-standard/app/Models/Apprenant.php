<?php

namespace App\Models;

use App\Models\Brief;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apprenant extends Model
{
    use HasFactory;
    protected $table ='apprenants';
    protected $fillable = [
        'nom',
        'prenom',
        'email'
    ];

    public function Briefs(){
        return $this->belongsToMany(Brief::class);
    }
}
