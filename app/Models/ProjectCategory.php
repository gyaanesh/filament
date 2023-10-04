<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectCategory extends Model
{
    use HasFactory, SoftDeletes;

    public function projects()
    {
        return $this->hasMany(Projects::class, 'category');
    }
    public function Subcategory()
    {
        return $this->hasMany(ProjectSubCategory::class, 'subcategory');
    }
    // public function getIconAttribute($value)
    // {
    //     return asset($value);
    // }
}
