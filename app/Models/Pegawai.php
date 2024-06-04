<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = "pegawai";
    protected $fillable = [
        'nipy',
        'nik',
        'nuptk',
        'nama_lengkap',
        'gelar',
        'mulai_tugas',
        'golongan',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'agama',
        'jk',
        'jabatan',
        'unit',
        'pendidikan',
        'perguruan',
        'prodi',
        'tahun_lulus',
        'telepon',
        'email',
        'ket_admin',
        'barcode',
    ];

    protected $dates = [
        'tanggal_lahir', 'mulai_tugas'
    ];
}
