<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant_Brief extends Model
{
    use HasFactory;
    protected $table = 'apprenant_briefs';
    protected $fillable = [
        "apprenant_id",
        "brief_id"
    ];
    public $timestamps = FALSE;

}
