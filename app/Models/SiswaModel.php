<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    protected $table = 'table_siswa';

    protected $primaryKey = 'id_siswa';

    protected $fillable = [
        'nis',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'pendidikan_terakhir',
        'deskripsi',
        'foto',
    ];

    protected $dates = ['tanggal_lahir'];
}
