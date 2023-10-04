<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PSpell\Config;

class Job extends Model
{
    use HasFactory;
     
    // const = ['company',  'postedBy', 'otherBenefits', 'do_dont'];
    protected $with = ['company',  'postedBy', 'otherBenefits', 'do_dont'];
    protected $casts = [
        'status' => 'boolean',
        'tag_kamaao' => 'boolean',
        'kamaao_benefits' => 'boolean',
        'fresher_can_apply' => 'boolean',
        'tag_verified' => 'boolean',
        'tag_premium' => 'boolean',
        'is_enabled' => 'boolean',
        'has_a_webinar' => 'boolean',
        'has_tutorials' => 'boolean',
        'has_an_upcoming_webinar' => 'boolean',
        'joining_fee_required' => 'boolean',     
        'is_expired' => 'boolean',     
      ];
    protected $hidden = ['posted_by_id', 'number_of_applications', 'deleted_at', 'created_at', 'updated_at'];
    protected $appends = ['tags',  'requirements'];
    protected $fillable = [
        "title",
        'type',
        'title',
        'english_level',
        'total_openings',
        'category',
        'shift_timing',
        'job_summery',
        'min_salary',
        'max_salary',
        'company_id',
        "tag_kamaao",
        "kamaao_benefits",
        'tag_verified',
        'notes',
        'job_address',
        'job_Latitude',
        'job_Longitude',
        'cta_url',
        'cta_text',
        'fresher_can_apply',
        'working_days',
        'joining_fee_required',
        'joining_fee',
        'joining_fee_for',
        'description_video_url',
        'roles_responsibility',
        'interview_method',
        'interview_Address',
        'posted_by',
        'posted_by_id',
        'education_required',
        'experience_required',
    ];


    public function company()
    {
        return $this->belongsTo(Company::class)->select(['id', 'legal_name', 'popular_name', 'logo', 'about']);
    }
    public function Questions()
    {
        return $this->hasMany(JobsQuestion::class);
    }
    public function do_dont()
    {
        return $this->hasMany(Jobs_do_dont::class);
    }

    public function skills_required()
    {
        return $this->hasMany(requirementsInJob::class)->where('type', 'skills');;
    }
    public function assets_required()
    {
        return $this->hasMany(requirementsInJob::class)->where('type', 'assets');;
    }

    public function webinars()
    {
        return $this->hasOne(webinar::class, 'reference_id', 'id')->where('for', 'job');
    }

    public function tutorial()
    {
        return $this->hasOne(Tutorials::class, 'id', 'tutorial_id');
    }

    public function category()
    {
        return $this->belongsTo(JobCategory::class);
    }
    public function getTagsAttribute()
    {
        $tag[] = 'Total Opening ' . $this->total_openings;
        $tag[] = $this->type;
        return $tag;
    }
     
    public function getRequirementsAttribute()
    {
        $requirements = $this->skills_required->pluck('requirement')->toArray();
        $requirements[] = $this->education_required;
        return $requirements;
    }

    public function benefits()
    {
        return $this->hasMany(kamaao_benefits::class, 'referance_id');
    }
    public function otherBenefits()
    {
        return $this->hasMany(OtherJobBenefits::class);
    }
    public function incrementShares()
    {
        $this->share_count++;
        $this->save();
    }

    public function referrals()
    {
        return $this->hasMany(job_referrals::class);
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class);
    }

    public function postedBy()
    {
        return $this->belongsTo(User::class, 'posted_by_id')->select('id', 'name');
    }
}
