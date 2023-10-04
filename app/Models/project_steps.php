<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_steps extends Model
{
    use HasFactory;
    protected $fillable = ['step', 'complete_in_days', 'amount', 'project_id'];
}
