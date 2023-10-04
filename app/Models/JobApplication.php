<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    // 'id' => 1, 'status' => 'Pending',
    // 'id' => 2, 'status' => 'Rejected',
    // 'id' => 3, 'status' => 'Duplicate',
    // 'id' => 4, 'status' => 'Rejected, Not Eligible.',
    // 'id' => 5, 'status' => 'Document Verification',
    // 'id' => 6, 'status' => 'Sucessfull',
    // 'id' => 7, 'status' => 'Action Required',


    protected $fillable = ['job_id', 'user_id', 'referred_by', 'current_status'];
    protected $with = ['application_status', 'job'];
    protected $hidden = ['created_at', 'deleted_at', 'updated_at'];
    public function job()
    {
        return $this->hasOne(Job::class, 'id', 'job_id');
    }
    public function application_status()
    {
        return $this->hasOne(application_status_list::class, 'id', 'current_status');
    }
}
