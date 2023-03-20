<?php

namespace App\Models\Phieu1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MoTa_P1 extends Model
{
    use HasFactory;
    protected $table = 'chitiet_cauhoi';
    protected $primaryKey = 'id';
    protected $filltable = [
        'Id',
        'ChiTiet_id',
        'CauHoi_id',
        'MoTa',
        'Diem',
    ];
    public function Id(): HasMany
    {
        return $this->hasMany(Id::class);
    }
    public function CauHoi_id(): BelongsTo
    {
        return $this->belongsTo(cauhoi_P1::class, 'foreign_key', 'owner_key');
    }
    public function chitiet_id(): BelongsTo
    {
        return $this->belongsTo(chitiet_P1::class, 'foreign_key', 'owner_key');
    }
}
