<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GuruModel extends Model
{
    public function getAll () {
        return DB::table('tbl_guru')->get();
    }
    public function getDetail ($id) {
        return DB::table('tbl_guru')->where('id', $id)->first();
    }
    public function addData ($data) {
        DB::table('tbl_guru')->insert($data);
    }
    public function updateData ($id, $data) {
        DB::table('tbl_guru')->where('id', $id)->update($data);
    }
}
