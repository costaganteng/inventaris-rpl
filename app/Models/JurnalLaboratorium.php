<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurnalLaboratorium extends Model
{
    protected $fillable = [
        'hari',
        'tgl',
        'mapel',
        'kelas',
        'materi_kegiatan',
        'kejadian',
        'guru',
        'paraf',
    ];
}
