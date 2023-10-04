<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherJobBenefits extends Model
{
    use HasFactory;
    protected $fillable = ['benefits', 'job_id'];

    
    public function jobs()
    {
        return $this->belongsTo(Job::class);
    }

}
