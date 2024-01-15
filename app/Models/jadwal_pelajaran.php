<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class jadwal_pelajaran extends Model
{
    protected $primaryKey = 'ID_Jadwal';
    protected $table = 'jadwal_pelajaran';
    protected $fillable = [
        'ID_Jadwal', 'Hari', 'Jam_Mulai', 'Jam_Selesai','ID_Kelas', 'ID_Guru', 'ID_Mata_Pelajaran'
    ];
    protected $hidden = [];
}