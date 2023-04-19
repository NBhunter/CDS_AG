<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phieu3_RaoCan extends Model
{
    use HasFactory;
    protected $table = 'phieu3_raocan';
    protected $primaryKey = 'Id';
    protected $filltable = [
        'Id',
        'DoanhNghiep_id',
        'RaoCan',
        'crated_at',
        'updated_at',
        'status',
    ];
}
