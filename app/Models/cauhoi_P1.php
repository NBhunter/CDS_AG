<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cauhoi_P1 extends Model
{
    use HasFactory;
    protected $table = 'cauhoi';
    protected $filltable =[
        'Id',
        'TenCauHoi',
    ];
}
