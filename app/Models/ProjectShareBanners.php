<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectShareBanners extends Model
{
    use HasFactory;
    public function getBannerAttribute($value)
    {
        return asset($value);
    }
}
