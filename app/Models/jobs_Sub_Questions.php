<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs_Sub_Questions extends Model
{
    use HasFactory;
    protected $table = 'jobs_sub_questions';
    protected $hidden = [
        'updated_at',
        'created_at'
    ];
 /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'options' => 'array',
    ];

    public function subQuestions()
    {
        return $this->belongsTo(JobsQuestion::class);
    }
}
