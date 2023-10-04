<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectLeadClaimImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'lead_id',
        'claim_id',
        'image',
    ];
    public function getImageAttribute($value)
    {
        return asset($value);
    }
}
