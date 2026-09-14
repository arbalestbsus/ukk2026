<?php

namespace App\Models;

use Sakuci\Database\Model;

class Pengaduan extends Model
{
    protected static ?string $table = 'pengaduan';

    protected string $primaryKey = 'id_pengaduan';

    public bool $timestamps = false;

    protected array $fillable = [
        'id_kategori',
        'isi_pengaduan'
    ];
}
