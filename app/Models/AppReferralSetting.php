<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppReferralSetting extends Model
{
    use HasFactory;
    protected $table = 'app_referral_settings';

    protected $fillable = [
        'referral_amount',
        'referral_coins',
        'referral_type',
        'status',
    ];
    protected $casts = [
        'status' => 'boolean'
    ];
  
}
