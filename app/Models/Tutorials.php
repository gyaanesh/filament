<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorials extends Model
{
    use HasFactory;
    
    public function course()
    {
        return $this->belongsTo(Courses::class);
    }
    public function lastWatched()
    {
        return $this->hasOne(lastWatchedTutorials::class, 'id', 'tutorial_id');
    }
    public function comments()
    {
        return $this->hasMany(comments_in_tutorial::class, 'tutorial_id');
    }
    public function getBannerAttribute($value)
    {
        return asset($value);
    }
}
