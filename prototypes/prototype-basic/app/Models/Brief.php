<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;
    protected $table ="briefs";
    public $timestamps= false;
    protected $fillable =[
        'brief_name',
       'deliver_date',
       'recovery_date'
    ];
    public function tasks(){
        return $this->hasMany(Task::class,'brief_id');
    }
}
