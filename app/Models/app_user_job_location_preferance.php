<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_user_job_location_preferance extends Model
{
    use HasFactory;
    protected $fillable = ['location', 'latitude', 'longitude', 'user_id'];
    public function user()
    {
        return $this->belongsTo(app_user::class);
    }
}
