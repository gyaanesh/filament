<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;
    protected $fillable = ['category', 'icon'];
    protected $hidden = ['status', 'deleted_at', 'created_at', 'updated_at'];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'category');
    }
    public function getIconAttribute($value)
    {
        return asset($value);
    }
}
