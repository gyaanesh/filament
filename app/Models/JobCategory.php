<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['category', 'icon'];
    protected $hidden = ['status', 'deleted_at', 'created_at', 'updated_at'];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'category');
    }
     
}
