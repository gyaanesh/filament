<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userKycStatus extends Model
{
    use HasFactory;
    protected $table = 'user_kyc_status';
    protected $fillable = ['user_id', 'selfie', 'aadhar_front','aadhar_back', 'status','error'];

   
    public function user()
    {
        return $this->belongsTo(app_user::class);
    }
    public function getSelfieAttribute($value)
    {
        if ($value) {
            return asset($value);
        }
        
        return null;
    }
    public function getAadharFrontAttribute($value)
    {
        if ($value) {
            return asset($value);
        }
    
        return null;
    }
    public function getAadharBackAttribute($value)
    {
        if ($value) {
            return asset($value);
        }
    
        return null;
    }
}
