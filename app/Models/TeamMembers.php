<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMembers extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'role', 'otp', 'otp_created_at', 'otp_verified_at', 'otp_verified'];
 
    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
    public function getProfileImageAttribute($value)
    {
        return asset($value);
    }
}
