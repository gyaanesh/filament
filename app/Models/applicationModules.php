<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class applicationModules extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'guard'];
    protected $with = ['permissions'];

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'module_id', 'id');
    }
}
