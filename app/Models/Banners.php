<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    use HasFactory;
    protected $fillable = ['banner','for', 'cta', 'cta_type', 'priority', 'isActive'];

    public function getbannerAttribute($value)
    {
        return asset($value);
    }
}
