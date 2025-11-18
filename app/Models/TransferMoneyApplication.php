<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransferMoneyApplication extends Model
{
    use HasFactory;

    protected $table = 'transfer_money_applications';

    protected $fillable = [
        'user_id',
        'app_type',
        'contract_number',
        'vat_type',
        'contract_stop',
        'sum_with_vat',
        'vat_sum',
        'signer',
        'bank_bik',
        'bank_account',
        'bank_name',
        'bank_corr_account',
        'status',
        'meta',
    ];

    protected $casts = [
        'contract_stop' => 'boolean',
        'sum_with_vat' => 'decimal:2',
        'vat_sum' => 'decimal:2',
        'meta' => 'array',
    ];
}

