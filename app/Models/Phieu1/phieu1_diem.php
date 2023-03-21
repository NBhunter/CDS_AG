<?php

namespace App\Models\Phieu1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class phieu1_diem extends Model
{
    use HasFactory;
    protected $table = 'phieu1_diem';
    protected $primaryKey = 'id';
    protected $filltable = [
        'id',
        'Phieu_id',
        'ChiTiet_id',
        'Diem',
    ];
    public function Id(): HasMany
    {
        return $this->hasMany(Id::class);
    }
    public function phieuso1(): BelongsTo
{
    return $this->belongsTo(phieuso1::class, 'foreign_key', 'owner_key');
}
public function chitiet(): BelongsTo
{
    return $this->belongsTo(chitiet_P1::class, 'foreign_key', 'owner_key');
}

}
