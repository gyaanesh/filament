<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_user_experience extends Model
{
    use HasFactory;
    protected $fillable = ['category', 'company', 'job_title', 'salary', 'start_date', 'end_date', 'user_id', 'currently_working_here'];
}
