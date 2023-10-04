<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_saved_job extends Model
{
    use HasFactory;
    protected $with = ['jobs'];
    protected $fillable = ['job_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(app_user::class, 'user_id');
    }
    public function jobs()
    {
        return $this->belongsTo(Job::class, 'id');
    }
}
