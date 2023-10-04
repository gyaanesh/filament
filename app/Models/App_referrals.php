<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App_referrals extends Model
{
    use HasFactory;
    protected $with = [  'referred_user' ] ;
    protected $fillables = ['user_id', 'referred_user_id', 'status', 'amountRs', 'coins', 'isRewarded'];
    protected $casts = [
        'isRewarded' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(app_user::class);
    }
   
    public function referred_user()
    {
        return $this->hasOne(app_user::class, 'id', 'referred_user_id')->select('id', 'name', 'profile_pic', 'phone');
    }
}
