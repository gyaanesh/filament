<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = ['skill'];


    public function app_user_skills()
    {
        return $this->belongsToMany(app_user_skills::class, 'skill_id');
    }

    public function getIconAttribute($value)
    {
        return asset($value);
    }
    public function app_user()
    {
        return $this->hasManyThrough(app_user_skills::class, app_user::class, 'user_id', 'id');
    }
}
