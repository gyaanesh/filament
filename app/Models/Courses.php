<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $casts    =   ['status'=> 'boolean'];

    public function tutorials()
    {
        return $this->hasMany(Tutorials::class, 'course_id');
    }
}
