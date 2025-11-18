<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EodApplication extends Model
{
    use HasFactory;

    protected $table = 'eod_applications';

    protected $fillable = [
        'user_id',
        'claim_type',
        'contract_number',
        'operator_name',
        'contact_fio',
        'contact_tel',
        'submission_method',
        'status',
        'meta',
    ];

    protected $casts = [
        'meta' => 'array',
    ];
}

