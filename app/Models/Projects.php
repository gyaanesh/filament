<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $appends = [
        'isSaved',
        // 'requirements'
    ];

    protected $fillable = [
        'company_id',
        'title',
        'sub_title',
        'type',
        'category',
        'amount',
        'coins',
        'is_trending',
        'start_date',
        'end_date',
        'is_expired',
        'total_openings',
        'opening_left',
        'is_enabled',
        'like_count',
        'number_of_applications',
        'about',
        'cta',
        'cta2',
        'tag_kamaao',
        'has_kamaao_benefits',
        'has_a_webinar',
        'webinar_id',
        'has_an_upcoming_webinar',
        'upcoming_webinar_id',
        'has_tutorials',
        'has_tutorials_id',
        'posted_by_id',
    ];


    protected $casts = [
        'is_trending' => 'boolean',
        'is_expired' => 'boolean',
        'is_enabled' => 'boolean',
        'tag_kamaao' => 'boolean',
        'has_kamaao_benefits' => 'boolean',
        'has_a_webinar' => 'boolean',
        'has_an_upcoming_webinar' => 'boolean',
        'has_tutorials' => 'boolean',
    ];


    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        // Apply a global scope to always order by 'created_at' in descending order
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('created_at', 'asc');
        });
    }

    
    public function posted_by()
    {
        return $this->belongsTo(User::class);
    }
    
    public function company()
    {
        return $this->belongsTo(Company::class)->select(['id', 'legal_name', 'popular_name', 'logo', 'about']);
    }

    public function webinars()
    {
        return $this->hasOne(webinar::class, 'id', 'webinar_id');
    }
    
    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'id', 'category');
    }
    // public function subcategory()
    // {
    //     return $this->hasOne(ProjectSubCategory::class, 'id', 'subcategory');
    // }

    public function benefits()
    {
        return $this->hasMany(ProjectBenefits::class, 'project_id');
    }
    public function kamaao_benefits()
    {
        return $this->hasMany(kamaao_benefits::class, 'referance_id')->where('referance_table', 'projects');
    }
    public function steps()
    {
        return $this->hasMany(project_steps::class, 'project_id');
    }
    public function banners()
    {
        return $this->hasMany(ProjectShareBanners::class, 'project_id');
    }
    public function do_dont()
    {
        return $this->hasMany(project_do_dont::class, 'project_id');
    }

    public function project_leads()
    {
        return $this->hasMany(ProjectLeads::class, 'project_id');
    }
}
