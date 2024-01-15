<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class kelas extends Model
{
    protected $primaryKey = 'ID_Kelas';
    protected $table = 'kelas';
    protected $fillable = [
        'ID_Kelas', 'Nama_Kelas', 'Wali_Kelas', 'Tahun_Ajaran'
    ];
    protected $hidden = [];
}