<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_referrals extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'job_id', 'referral_code', 'referred_user_id', 'status'];
    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function user()
    {
        return $this->belongsTo(app_user::class);
    }
}
