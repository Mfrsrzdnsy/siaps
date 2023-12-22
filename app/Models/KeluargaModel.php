<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaModel extends Model
{
    protected $table = 'table_keluarga';

    protected $primaryKey = 'id_keluarga';

    protected $fillable = [
        'nama',
        'nama_ayah',
        'nama_ibu',
        'jumlah_saudara',
        'alamat',
        'pendidikan_ayah',
        'pendidikan_ibu',
        'deskripsi',
    ];

}
