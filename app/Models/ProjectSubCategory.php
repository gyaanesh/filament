<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSubCategory extends Model
{
    use HasFactory;
    public function projects()
    {
        return $this->belongsTo(Projects::class, 'category');
    }
    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'category');
    }   

}
