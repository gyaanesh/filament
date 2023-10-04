<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamaao_benefits extends Model
{
    use HasFactory;
    protected $table = 'kamaao_benefits';
    
    protected $hidden = [
        'referance_table',
    ];
    protected $fillable = [
        'step_title',
        'description',
        'reward',
        'referance_table',
        'referance_id'
    ];
}
