<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phieu2_diem extends Model
{
    use HasFactory;
    protected $table = 'phieu2_diem';
    protected $primaryKey = 'id';
    protected $filltable = [
        'id',
        'Phieu_id',
        'CauHoi_id',
        'DanhGia',
    ];
    public function phieuso2(): BelongsTo
{
    return $this->belongsTo(phieuso2::class, 'foreign_key', 'owner_key');
}
public function cauhoi_p2(): BelongsTo
{
    return $this->belongsTo(chitiet_P2::class, 'foreign_key', 'owner_key');
}


}
