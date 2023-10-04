<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['team_name', 'team_owner'];

    public function teamMembers()
    {
        return $this->hasMany(TeamMembers::class, 'team_id');
    }
    public function appUser()
    {
        return $this->belongsTo(app_user::class, 'team_owner');
    }
}
