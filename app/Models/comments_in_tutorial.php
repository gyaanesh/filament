<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments_in_tutorial extends Model
{
    use HasFactory;
    protected $fillable = ['comment', 'user_id', 'tutorial_id'];

    public function tutorial()
    {
        return $this->belongsTo(Tutorials::class);
    }

    public function replies()
    {
        return $this->hasMany(comment_replies::class, 'comment_id');
    }

    public function user()
    {
        return $this->belongsTo(app_user::class);
    }
}
