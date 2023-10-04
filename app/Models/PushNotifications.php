<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PushNotifications extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'icon',
        'type',
        'is_sent',
        'user_id',
        'created_at',
        'updated_at',
        'action',
        'is_read',
    ];
    protected $casts = [
        'is_sent' => 'boolean',
        'is_read' => 'boolean',
    ];

    public function getIconAttribute($value)
    {
        return asset($value);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
