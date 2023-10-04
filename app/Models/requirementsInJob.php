<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requirementsInJob extends Model
{
    use HasFactory;
    protected $fillable = ['requirement', 'requirement_id', 'type', 'job_id'];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
