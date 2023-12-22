<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaModel extends Model
{
    use HasFactory;
    protected $table = 'table_keluarga';

    protected $primaryKey = 'id_keluarga';

    protected $fillable = [
        'nama',
        'nama_ayah',
        'nama_ibu',
        'jumlah saudara',
        'alamat',
        'pendidikan_terakhir_ayah',
        'pendidikan_terakhir_ibu',
        'deskripsi',
    ];

}
