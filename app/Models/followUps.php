<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class followUps extends Model
{
    use HasFactory;
    // protected $with = 'leads';

    protected $fillable = ['lead_id', 'feedback', 'scheduled_on', 'action', 'assigned_to', 'status'];

    public function leads()
    {
        return $this->belongsTo(Leads::class, 'lead_id', 'id');
    }
}
