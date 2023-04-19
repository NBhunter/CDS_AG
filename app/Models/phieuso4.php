<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class phieuso4 extends Model
{
    use HasFactory;
    protected $table = 'phieuso4';
    protected $primaryKey = 'Id';
    protected $filltable = [
        'Id',
        'NhuCau',
        'DeXuat',
        'DoanhNghiep_id',
        'crated_at',
        'status',
    ];
}
