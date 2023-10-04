<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    // FOR OFFLINE LEADS
    use HasFactory;
    protected $fillable = ['name', 'phone', 'feedback', 'status', 'closing_date', 'age', 'action', 'profession', 'uploaded_by', 'assigned_to', 'address', 'meeting_address', 'meeting_date', 'income'];
    protected static function boot()
    {
        parent::boot();
        // auto-sets values on creation
        static::creating(function ($query) {
            $query->uploaded_by  = auth()->user()->id;
        });
    }

    public function scopeAssigned($query)
    {
        return $query->where('assigned_to', auth()->user()->id);
    }

    public function followUps()
    {
        return $this->hasOne(followUps::class, 'id', 'lead_id');
    }

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }
    public function scopeSuccess($query)
    {
        $query->where('status', 4);
    }
    public function scopeclosed($query)
    {
        $query->where('status', 0);
    }
}
