<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_user_assets extends Model
{
    use HasFactory;
    protected $fillable = ['assets_id', 'user_id'];

    public function assets()
    {
        return $this->hasMany(assets::class, 'id', 'assets_id')->select('id', 'assets', 'icon');
    }
   
    public function app_user()
    {
        return $this->hasMany(app_user::class, 'user_id');
    }
}
