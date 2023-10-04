<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Integer;

class app_user_skills extends Model
{
    use HasFactory;
    protected $fillable = ['skill_id', 'user_id'];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $casts = [
        'skill_id'=> 'integer',
        'user_id'=> 'integer',
    ];
    
    public function skills()
    {
        return  $this->hasMany(Skill::class, 'id', 'skill_id')->select('id', 'skill', 'icon');
    }
    public function app_user()
    {
        return $this->belongsTo(app_user::class, 'user_id');
    }
   
}
