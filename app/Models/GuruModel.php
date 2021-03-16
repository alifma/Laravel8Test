<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GuruModel extends Model
{
    // use HasFactory;
    // public function getAll() {
    //     return [
    //         [
    //             'nim' => 225160008,
    //             'nama' => 'Alif',
    //             'mapel' => 'Statistik'
    //         ],
    //         [
    //             'nim' => 225160009,
    //             'nama' => 'Maulana',
    //             'mapel' => 'IPA'
    //         ],
    //         [
    //             'nim' => 225160019,
    //             'nama' => 'Arifin',
    //             'mapel' => 'Sunda'
    //         ]
    //         ];
    // }

    public function getAll ()
    {
        return DB::table('tbl_guru')->get();
        // return DB::select('select * from tbl_guru where id = ?', [1]);
    }
}
