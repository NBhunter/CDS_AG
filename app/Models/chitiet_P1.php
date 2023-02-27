<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitiet_P1 extends Model
{
    use HasFactory;
    protected $table = 'chitiet';
    protected $filltable = [
        'Id',
        'Idcha',
        'NoiDung',
        'DiemToiDa',
        'Cap',
    ];
}
