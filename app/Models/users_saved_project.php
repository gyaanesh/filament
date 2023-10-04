<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_saved_project extends Model
{
    use HasFactory;
    protected $with = ['projects'];
    protected $fillable = ['project_id', 'user_id'];

    protected static function booted()
    {
        // Apply a global scope to always order by 'created_at' in descending order
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('created_at', 'DESC');
        });
    }
    public function user()
    {
        return $this->belongsTo(app_user::class, 'user_id');
    }
    public function projects()
    {
        return $this->belongsTo(Projects::class, 'id');
    }
}
