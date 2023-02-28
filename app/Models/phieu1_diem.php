<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function phieuso1(): BelongsTo
{
    return $this->belongsTo(phieuso1::class, 'foreign_key', 'owner_key');
}
public function chitiet(): BelongsTo
{
    return $this->belongsTo(chitiet_P1::class, 'foreign_key', 'owner_key');
}

}
