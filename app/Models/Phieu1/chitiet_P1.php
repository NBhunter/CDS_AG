<?php

namespace App\Models\Phieu1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class chitiet_P1 extends Model
{
    use HasFactory;
    protected $table = 'chitiet';
    protected $primaryKey = 'Id';
    protected $filltable = [
        'Id',
        'Idcha',
        'NoiDung',
        'DiemToiDa',
        'Cap',
    ];
    public function Id(): HasMany
    {
        return $this->hasMany(Id::class);
    }
    public function Idcha(): BelongsTo
    {
        return $this->belongsTo(chitiet_P1::class, 'foreign_key', 'owner_key');
    }

}
