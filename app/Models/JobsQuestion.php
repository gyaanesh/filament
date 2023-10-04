<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsQuestion extends Model
{
    use HasFactory;
    protected $with = ['subQuestions'];
    protected $hidden = [
        'updated_at',
        'created_at'
    ];
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
    public function subQuestions()
    {
        return $this->hasMany(jobs_Sub_Questions::class, 'question_id');
    }
}
