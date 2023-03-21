<?php

namespace App\Models\Phieu1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class phieuso1 extends Model
{
    use HasFactory;
    protected $table = 'phieuso1';
    protected $primaryKey = 'Id';
    protected $filltable = [
        'Id',
        'TongDiem',
        'User_id',
        'DoanhNghiep_id',
        'crated_at',
        'status',
    ];
    public function Id(): HasMany
    {
        return $this->hasMany(Id::class);
    }
}
