<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment_replies extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'comment_id', 'reply'];

    public function comment()
    {
        return $this->belongsTo(comments_in_tutorial::class, 'id', 'comment_id');
    }

    public function user()
    {
        return $this->belongsTo(app_user::class);
    }
}
