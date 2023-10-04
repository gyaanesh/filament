<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function App\currencyFormatter;

class UserWallet extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'coins', 'amountRs', 'coinsEarnedEver'];

    public function user()
    {
        return $this->belongsTo(app_user::class);
    }
    public function transactions()
    {
        return $this->hasMany(wallet_transaction::class, 'wallet_id');
    }
    // public function getAmountRsAttribute($value)
    // {
    //     return currencyFormatter($value);
    // }
    // public function getCoinsAttribute($value)
    // {
    //     return currencyFormatter($value);
    // }
}
