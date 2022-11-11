<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table ='tasks';
    protected $fillable = [
        'task_name',
        'start_date',
        'end_date',
        'description',
        'brief_id'
    ];
    public function brief(){
        return $this->belongsTo(Brief::class);
    }
    
}
