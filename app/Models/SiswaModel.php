<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiswaModel extends Model
{
    // use HasFactory;
    public function getAll () {
        return DB::table('tbl_siswa')
        ->leftJoin('tbl_mapel', 'tbl_mapel.id', '=', 'tbl_siswa.id_mapel')
        ->leftJoin('tbl_kelas', 'tbl_kelas.id', '=', 'tbl_siswa.id_kelas')
        ->get();
    }
}
