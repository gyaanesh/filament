<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Panel;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser
{

    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;
    // protected $guard_name = 'sanctum';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'user_type',
        'profile_image',
        'password',
        'is_enabled',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'enc_pass',
        'created_at',
        'updated_at',
        "deleted_at",
        'email_verified_at'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function scopeEmployee($query)
    {
        return $query->where('role', '!=', 'Super Admin');
    }

    public function canAccessPanel(Panel $panel): bool
    {
        // return str_ends_with($this->email, '@yourdomain.com')  ;
        return true;
    }
}
