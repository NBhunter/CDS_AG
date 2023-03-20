<?php

namespace App\Models\Phieu1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class cauhoi_P1 extends Model
{
    use HasFactory;
    protected $table = 'cauhoi';
    protected $filltable =[
        'Id',
        'TenCauHoi',
    ];
    public function Id(): HasMany
    {
        return $this->hasMany(Id::class);
    }
}
