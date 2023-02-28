<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phieuso1 extends Model
{
    use HasFactory;
    protected $table = 'phieuso1';
    protected $primaryKey = 'id';
    protected $filltable = [
        'id',
        'TongDiem',
        'User_id',
        'DoanhNghiep_id',
        'crated_at',
        'status',
    ];
}
