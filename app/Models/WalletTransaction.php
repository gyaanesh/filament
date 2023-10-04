<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletTransaction extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'wallet_id', 'title', 'amount', 'trn_type', 'entity_id', 'entity', 'fund_account_id', 'fees', 'tax', 'status', 'utr', 'reference_id', 'failure_reason', 'status_details_id', 'status_details_reason', 'status_details_description', 'status_details_source', 'merchant_id', 'error_source', 'error_reason', 'error_description', 'error_code', 'error_step', 'error_metadata', 'trn_type'];
    protected $hidden = ['entity_id', 'entity',   'fees', 'tax',   'utr', 'failure_reason', 'status_details_id', 'status_details_reason', 'status_details_description', 'status_details_source', 'merchant_id', 'error_source', 'error_reason', 'error_description', 'error_code', 'error_step', 'error_metadata'];
   
    public function transactions()
    {
        return $this->belongsToMany(UserWallet::class);

    }
    public function getAmountAttribute($value)
    {
        return number_format($value, 0, ',', ',');
    }
    
}