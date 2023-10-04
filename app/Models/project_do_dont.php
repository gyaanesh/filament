<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_do_dont extends Model
{
    use HasFactory;
    protected $fillable = ['do_dont', 'project_id', 'type'];
}
