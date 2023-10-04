<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;    
    
    protected $fillable = [
        'legal_name',
        'popular_name',
        'url',
        'logo',
        'about',
        'status',
        'address',
        'contact_main',
        'company_type'
    ];
   
}
