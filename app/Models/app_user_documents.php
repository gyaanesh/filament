<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_user_documents extends Model
{
    use HasFactory;
    protected $fillable = ['document_type_id', 'document_type', 'document', 'user_id', 'created_at'];

    protected $hidden = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];
    public function getDocumentAttribute($value)
    {
        return asset($value);
    }
    public function documents()
    {
        return $this->hasMany(DocumentType::class, 'id');
    }
}
