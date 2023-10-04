<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Ramsey\Uuid\Uuid;
use Spatie\Permission\Traits\HasRoles;

class app_user extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $guard_name = 'sanctum';
    protected $hidden = [
        'otp',
    ];
    protected $casts = 
    [
        
        'completed_kyc'=> 'boolean',
        'status'=> 'boolean',
        'registration_completed'=>'boolean',
        'submitted_kyc'=> 'boolean',
        'app_notification'=> 'boolean',
        'whatsapp_notification'=> 'boolean',
    ];
    protected $fillable = [
        'name',
        'email',
        'profile_pic',
        'latitude',
        'alternet_phone',
        'education',
        'referral_code',
        'longitude',
        'location',
        'app_language',
        'current_longitude',
        'dob',
        'gender',
        'address',
        'upi_id',
        'registration_completed',
        'razor_contact_id',
        'razor_fa_id',
        'razor_fa_id_upi',
        'job_preferance_category',
        'bank_accound_holder',
        'bank_account_number',
        'bank_ifsc',
        'bank_branch',
        'payment_contact_id',
        'fcm_token',
        'place_id',
        'completed_kyc',
        'added_categories',
        'added_skills',
        'added_locations',
        'added_experience',
        'added_education',
        'added_assets',
        'added_documents',
        'app_notification',
        'whatsapp_notification'
    ];
    
    public function getAuthPassword()
    {
        return $this->otp;
    }
   

    public function user_skills()
    {
        return $this->hasMany(app_user_skills::class, 'user_id', 'id');
    }

    public function user_experience()
    {
        return $this->hasMany(app_user_experience::class, 'user_id');
    }
   
    public function user_documents()
    {
        // GET DIRECT ACCESS TO user_documents
        // return $this->hasManyThrough(
        //     DocumentType::class,
        //     app_user_documents::class,
        //     'user_id',
        //     'id', // Foreign key on the deployments table...
        //     'id', // Local key on the projects table...
        //     'document_type_id', // Local key on the projects table...
        // );
        return $this->hasMany(app_user_documents::class, 'user_id');
    }
    public function user_assets()
    {
        return $this->hasMany(app_user_assets::class, 'user_id');
    }

    
    public function notifications()
    {
        return $this->hasMany(PushNotifications::class, 'user_id');
    }

    
    public function getProfilePicAttribute($value)
    {
         // Check if the value is not null and return the asset URL
         if ($value !== null) {
            return asset($value);
        }

        // If the value is null, return null
        return null;
    }
    public function saved_job()
    {
        return $this->hasMany(users_saved_job::class, 'user_id');
    }
    public function saved_projects()
    {
        return $this->hasMany(users_saved_project::class, 'user_id');
    }
    public function wallet()
    {
        return $this->hasOne(UserWallet::class, 'user_id');
    }

    public function kycStatus()
    {
        return $this->hasOne(userKycStatus::class, 'user_id');
    }
    public function lastWatchedTutorials()
    {
        return $this->hasMany(lastWatchedTutorials::class, 'user_id');
    }
    public function webinarRegistrations()
    {
        return $this->hasMany(WebinarRegistrations::class, 'user_id');
    }
    public function location_preferance()
    {
        return $this->hasMany(app_user_job_location_preferance::class, 'user_id')->select(
            "id",
            'user_id',
            "location",
            "latitude",
            "longitude"
        );
    }
    public function likedTutorials()
    {
        return $this->belongsToMany(Tutorials::class, 'liked_tutorials', 'user_id', 'tutorial_id')->withTimestamps();
    }
    public function referrals()
    {
        return $this->hasMany(job_referrals::class);
    }
    public function applications()
    {
        return $this->hasMany(JobApplication::class, 'user_id');
    }
    // public function projects()
    // {
    //     return Projects::limit(4)->get();
    // }
    public function team()
    {
        return $this->hasOne(Team::class,'team_owner');
    }
}
