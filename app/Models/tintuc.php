<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    use HasFactory;
    protected $table = 'tintucs';
    protected $fillable = [
        'Id',
        'TieuDe',
        'TomTat',
        'NoiDung',
        'HinhAnh',
        'LuotXem',
        'LinhVuc_id',
        'Website',
        'LoaiTin_id',
        'Status',
        ];
}
