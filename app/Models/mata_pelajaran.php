<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class mata_pelajaran extends Model
{
    protected $primaryKey = 'ID_Mata_Pelajaran';
    protected $table = 'mata_pelajaran';
    protected $fillable = [
        'ID_Mata_Pelajaran', 'Nama_Mata_Pelajaran', 'Deskripsi'
    ];
    protected $hidden = [];
}