<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userJobLeadStatus extends Model
{
    use HasFactory;
    protected $table    = 'user_job_lead_status';
    protected $fillable = ['lead_id', 'status'];
    protected $with     = ['status'];
    
    protected $casts    =
    [
        'isRewared'  => 'boolean',
        'isRejected' => 'boolean',
        'isExpired'  => 'boolean',
    ];

    public function status()
    {
        return $this->hasOne(JobLeadStatus::class, 'id', 'status');
    }
}
