<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cauhoi_p2 extends Model
{
    use HasFactory;
    protected $table = 'cauhoi_p2';
    protected $primaryKey = 'id';
    protected $filltable =[
        'Id',
        'TenCauHoi',
    ];
}
