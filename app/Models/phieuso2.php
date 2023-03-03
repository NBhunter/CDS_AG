<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phieuso2 extends Model
{
    use HasFactory;
    protected $table = 'phieuso2';
    protected $primaryKey = 'Id';
    protected $filltable = [
        'Id',
        'User_id',
        'DoanhNghiep_id',
        'crated_at',
        'status',
    ];
}
