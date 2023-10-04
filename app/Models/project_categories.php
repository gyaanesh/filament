<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_categories extends Model
{
    use HasFactory;

    public function projects()
    {
        return $this->hasMany(Projects::class, 'category');
    }
    public function sub_category()
    {
        return $this->hasMany(ProjectSubCategory::class, 'subcategory');
    }
    public function getIconAttribute($value)
    {
        return asset($value);
    }
}
