<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContractApplication extends Model
{
    use HasFactory;

    protected $table = 'contract_applications';

    protected $fillable = [
        'user_id',
        'title',
        'start_date',
        'end_date',
        'submission_method',
        'source',
        'meta',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'meta' => 'array',
    ];
}

