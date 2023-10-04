<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    use HasFactory; 
    
    protected $appends  =   ['scheduled_on', 'has_registered'];
        
    public function getHasRegisteredAttribute()
    {
        if (auth()->check()) {
            return auth()->user()->webinarRegistrations->contains('webinar_id', $this->id);
        }
        return false;
    }
    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'skill_id');
    }
    public function getbannerAttribute($value)
    {
        return asset($value);
    }
    public function getScheduledOnAttribute()
    {
        $today = now();
        $scheduleDate = Carbon::parse($this->attributes['schedule_date_time'])->toDateString();

        if ($scheduleDate === $today->toDateString()) {
            return 'today';
        } elseif ($scheduleDate === $today->addDay()->toDateString()) {
            return 'tomorrow';
        }

        return Carbon::parse($this->attributes['schedule_date_time'])->format('d-m-Y');
    }
}
