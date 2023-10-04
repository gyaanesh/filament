<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobLeadStatus extends Model
{
    use HasFactory;
    protected $table = 'job_lead_status'; 
   
    public function lead()
    {
        return $this->belongsTo(userJobLeadStatus::class, 'id', 'status');
    }
}
