<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikedTutorial extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'tutorial_id'];

    public function tutorial()
    {
        return $this->belongsTo(Tutorials::class);
    }

    public function user()
    {
        return $this->belongsTo(app_user::class);
    }
}
