<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lastWatchedTutorials extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'tutorial_id'        
    ];
    public function tutorials()
    {
        return $this->hasOne(Tutorials::class, 'id');
    }
}
