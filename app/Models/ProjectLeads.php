<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectLeads extends Model
{
    // $status = [
    //     ['id' => 1, 'status' => 'Added'],
    //     ['id' => 2, 'status' => 'Applied'],
    //     ['id' => 3, 'status' => 'Selected'],
    //     ['id' => 4, 'status' => 'Rewarded'],
    //  
    // ];
    use HasFactory;

    protected $appends = ['expiry', 'user' ,'lead_status'];


    protected $casts = [
        'isRewarded' => 'boolean',
        'isRejected' => 'boolean',
        'isExpired' => 'boolean',
    ];
    protected $fillable = [
        'lead_for_user',
        'project_id',
        'name',
        'email',
        'phone',
        'pincode',
        'status',
    ];
    protected $with = [ 'application_status'];

    public function getExpectedPayoutAttribute()
    {
        return ['coins' => $this->project->coins, 'amount' => $this->project->amount];
    }
    public function getUserAttribute()
    {
        return ['id' => null, 'name' => $this->name, 'phone'=> $this->phone];
    }
    public function project()
    {
        return $this->belongsTo(Projects::class, 'project_id');
    }

    public function getexpiryAttribute()
    {
        $createdAt = Carbon::parse($this->attributes['created_at']);
        $expiryDate = $createdAt->addDays(30); // Calculate the expiry date as 30 days from created_at
        $now = Carbon::now();

        // Calculate the difference in days and hours
        $diff = $now->diff($expiryDate);
        $daysRemaining = $diff->d;
        $hoursRemaining = $diff->h;

        if ($daysRemaining === 0 && $hoursRemaining === 0) {
            return 'Expired';
        } elseif ($daysRemaining === 1) {
            return '1 day' . ($hoursRemaining > 0 ? ' ' . $hoursRemaining . ' hours' : '');
        } elseif ($daysRemaining > 1) {
            return $daysRemaining . ' days';
        } else {
            return $hoursRemaining . ' hours';
        }
    }

    public function application_status()
    {
        return $this->hasOne(application_status_list::class, 'id', 'status');
    }
    public function getLeadStatusAttribute()
    {
        $status = $this->hasOne(JobLeadStatus::class, 'id', 'status')
            ->select(['id', 'status', 'created_at', 'updated_at'])
            ->first();
    
        return [
            'id' => $this->status,
            'lead_id' => $this->id,
            'status' => $status,
        ];
    }
}
